<?php
class PanierManager
{
    public static function setFruitsToPanierFromDB()
    {
        $pdo2 = MyPDO::getPDO();
        $statement = $pdo2->prepare("SELECT * FROM panier");
        $statement->execute();
        $paniers = $statement->fetchAll();
        // $fruitsTab = [];

        foreach ($paniers as $panier) {
            Panier::$panierTab[] = new Panier($panier['identifiant'], $panier['nomClient']);
        }
    }

    public static function getFruitPanierFromDB($identifiant)
    {
        $pdo2 = MyPDO::getPDO();
        $req = "SELECT f.nom as fruit, f.poids as poids, f.prix as prix FROM panier p INNER JOIN fruit f ON f.identifiant = p.identifiant WHERE p.identifiant = :id";
        $statement = $pdo2->prepare($req);
        $statement->bindValue(":id", $identifiant, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }
}

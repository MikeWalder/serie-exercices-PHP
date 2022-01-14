<?php
class PanierManager
{
    public static function getFruitPanierFromDB()
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
}

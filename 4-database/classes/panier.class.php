<?php
class Panier
{

    private $identifiant;
    private $nomClient;
    private $pommes = [];
    private $cerises = [];
    private $bananes = [];

    public static $panierTab = [];

    public function __construct($identifiant, $nomClient)
    {
        $this->identifiant = $identifiant;
        $this->nomClient = $nomClient;
    }

    public function setFruitsToPanierFromDB()
    {
        $paniers = PanierManager::getFruitPanierFromDB($this->identifiant);
        foreach ($paniers as $panier) {
            if (preg_match("/cerise/", $panier['fruit'])) {
                $this->cerises[] = new Fruits($panier['fruit'], $panier['poids'], $panier['prix']);
            } else if (preg_match("/pomme/", $panier['fruit'])) {
                $this->pommes[] = new Fruits($panier['fruit'], $panier['poids'], $panier['prix']);
            } else if (preg_match("/banane/", $panier['fruit'])) {
                $this->bananes[] = new Fruits($panier['fruit'], $panier['poids'], $panier['prix']);
            }
        }
    }

    public function __toString()
    {
        $affichage = "<hr>";
        $affichage .= "<p class='h3 font-weight-bold pt-5'>Voici le contenu du panier " . $this->identifiant . "</p><br>";
        $affichage .= "<div class='card'>";
        foreach ($this->pommes as $pomme) {
            $affichage .= $pomme;
        }
        foreach ($this->cerises as $cerise) {
            $affichage .= $cerise;
        }
        foreach ($this->bananes as $banane) {
            $affichage .= $banane;
        }
        $affichage .= "</div>";
        return $affichage;
    }
}

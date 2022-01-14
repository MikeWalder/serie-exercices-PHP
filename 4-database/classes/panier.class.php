<?php
class Panier
{

    //private static $prochainIdentifiant = 1;

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
        /* $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant++; */
    }

    public function setFruitsToPanierFromDB()
    {
        /* if($fruit->getNom() === Fruits::POMME){
            $this->pommes[] = $fruit;
        }
        else if ($fruit->getNom() === Fruits::CERISE){
            $this->cerises[] = $fruit;
        }
        else if($fruit->getNom() === Fruits::BANANE){
            $this->bananes[] = $fruit;
        } */
        $fruits = PanierManager::getFruitPanierFromDB($this->identifiant);
        echo "<pre>";
        print_r($fruits);
    }

    /* public function __toString(){
            $affichage = "<p class='blue'>Voici le contenu du panier " . $this->identifiant . "</p><br><br>";
            $affichage .= "<div class='card'>";
            foreach ($this->pommes as $pomme){
                $affichage .= $pomme;
            }
            foreach($this->cerises as $cerise){
                $affichage .= $cerise;
            }
            foreach($this->bananes as $banane){
                $affichage .= $banane;
            }
            $affichage .= "</div>";
            return $affichage;
        }

        public function getIdentifiant(){
            return $this->identifiant;
        } */
}

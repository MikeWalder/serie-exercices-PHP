<?php
class Fruits
{
    private $nom;
    private $poids;
    private $prix;

    public static $fruitsTab = [];

    public function __construct($nom, $poids, $prix)
    {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function __toString()
    {
        $affichage = "<div class='card col-4'>";
        $affichage .= "<div class='card-body'>";
        $affichage .= $this->getAffichageImage();
        $affichage .= "Nom : " . $this->nom . "<br>";
        $affichage .= "Poids : " . $this->poids . "<br>";
        $affichage .= "Prix : " . $this->prix . "<br>";
        $affichage .= "</div>";
        $affichage .= "</div>";
        return $affichage;
    }

    private function getAffichageImage()
    {
        if (preg_match("/cerise[0-9]/", $this->nom)) {
            return "<img src='img/cerise.png' alt='" . $this->nom . "' /><br>";
        }
        if (preg_match("/banane[0-9]/", $this->nom)) {
            return "<img src='img/banane.png' alt='" . $this->nom . "' /><br>";
        }
        if (preg_match("/pomme[0-9]/", $this->nom)) {
            return "<img src='img/pomme.png' alt='" . $this->nom . "' /><br>";
        }

        /* if ($this->nom === self::POMME){
            return "<img src='" . self::POMME_IMG . "' alt='Image de pomme'><br>";
        }else if ($this->nom === self::CERISE){
            return "<img src='" . self::CERISE_IMG . "' alt='Image de cerise'><br>";
        }else if($this->nom === self::BANANE){
            return "<img src='" . self::BANANE_IMG . "' alt='Image de banane'><br>";
        } */
    }
}

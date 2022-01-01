<?php
    class Arme{
        private static $increment = 1;

        private $id;
        private $nom;
        private $degats;

        private static $armes = [];

        public function __construct($nom, $degats){
            $this->id = self::$increment;
            self::$increment++;
            $this->nom = $nom;
            $this->degats = $degats;
            self::$armes[] = $this;
        }

        public function getId(){ return $this->id; }
        public function getNom(){ return $this->nom; }
        public function getDegats(){ return $this->degats; }

        public function setId($id){ $this->id = $id; }
        public function setNom($nom){ $this->nom = $nom; }
        public function setDegats($degats){ $this->degats = $degats; }

        public static function recupererArme($id){
            foreach(self::$armes as $arme){
                if($arme->id === $id){
                    return $arme;
                }
            }
        }

        public function __toString(){
            $txt = "<div>";
                $txt .= "ID : " . $this->id . "<br>";
                $txt .= "Nom : " . $this->nom . "<br>";
                $txt .= "Dégâts : " . $this->degats . "<br>";
                $txt .= "--------------------<br>";
            $txt .= "</div>";

            return $txt;
        }
    }

?>
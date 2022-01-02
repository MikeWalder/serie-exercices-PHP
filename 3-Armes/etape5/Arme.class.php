<?php
    class Arme{
        private $nom;
        private $image;
        private $description;

        public static $images;


        public function __construct($nom, $image, $description){
            $this->nom = $nom;
            $this->image = $image;
            $this->description = $description;
        }

        public function getNom(){ return $this->nom; }
        public function getImage(){ return $this->image; }
        public function getDescription(){ return $this->description; }

        public function setNom($nom){ $this->nom = $nom; }
        public function setImage($image){ $this->image = $image; }
        public function setDescription($description){ $this->description = $description; }

        public function __toString(){
            $txt = "<div class='container'>";
                $txt .= "<div class='row align-items-center'>";
                    $txt .= "<div class='img-thumbnail text-center col-4'>";
                        $txt .= "<img src='" . $this->image . "' alt='" . $this->nom . "'>";
                    $txt .= "</div>";
                    $txt .= "<div class='group text-center col-8'>";
                        $txt .= "<h2><b>" . $this->nom . "</b></h2><br>";
                        $txt .= "" . $this->description . "<br>";
                    $txt .= "</div>";
                $txt .= "</div>";
            $txt .= "</div>";

            return $txt;
        }
    }
?>
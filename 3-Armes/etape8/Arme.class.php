<?php
    class Arme{
        private $nom;
        private $level;
        private $description;
        private $maxLevel;

        public function __construct($nom, $description, $maxLevel){
            $this->nom = $nom;
            $this->level = 1;
            $this->description = $description;
            $this->maxLevel = $maxLevel;
        }

        public function __toString(){
            $txt = "<div class='container'>";

                $txt .= "<div class='row align-items-center'>";

                    $txt .= "<div class='img-thumbnail text-center col-4'>";
                        $txt .= "<img src='" . $this->getImageName() . "' alt='" . $this->nom . "'>";
                    $txt .= "</div>";

                    $txt .= "<div class='col-1'>";
                        $txt .= "<form action='#' method='GET'>";
                            $txt .= "<select name='level" . $this->nom . "' onChange='submit()'>";
                                //$txt .= "<option value=''> - </option>";
                            for($i = 1; $i <= $this->maxLevel; $i++){
                                $txt .= "<option value='" . $i . "'";
                                $txt .= ($i === (int)$_SESSION[$this->nom]) ? "selected" : "" ;
                                $txt .= ">" . $i . "</option>";
                            }
                            $txt .= "</select>";
                        $txt .= "</form>";
                    $txt .= "</div>";

                    $txt .= "<div class='group text-center col-7'>";
                        $txt .= "<h2><b>" . $this->nom . " (lv." . $this->level . ")</b></h2><br>";
                        $txt .= "" . $this->description . "<br>";
                    $txt .= "</div>";

                $txt .= "</div>";

            $txt .= "</div>";

            return $txt;
        }

        public function getImageName(){
            $search = ["à", "é", "è", "ù", "î", "ô"];
            $replace = ["a", "e", "e", "u", "i", "o"];
            
            $nomModifie = str_replace($search, $replace, $this->nom);
            return "img/" . $nomModifie . $this->level . ".png";
        }

        public function getNom(){ return $this->nom; }
        public function getLevel(){ return $this->level; }
        public function getDescription(){ return $this->description; }
        public function getMaxLevel(){ return $this->maxLevel; }

        public function setNom($nom){ $this->nom = $nom; }
        public function setLevel($level){ $this->level = $level; }
        public function setDescription($description){ $this->description = $description; }
        public function setMaxLevel($maxLevel){ $this->maxLevel = $maxLevel; }
    }
?>
<?php
    class Arme{
        public $nom;
        public $image;
        public $description;


        public function __construct($nom, $image, $description){
            $this->nom = $nom;
            $this->image = $image;
            $this->description = $description;
        }
    }
?>
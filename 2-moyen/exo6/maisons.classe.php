<?php
    class Maison{
        private static $increment = 1;

        private $id;
        private $date;
        private $nbreChambres;
        private $surface;

        public function __construct($date, $nbreChambres, $surface){
            $this->id = self::$increment;
            self::$increment++;

            $this->date = $date;
            $this->nbreChambres = $nbreChambres;
            $this->surface = $surface;
        }

        public function getId(){
            return $this->id;
        }

        public function getDate(){
            return $this->date;
        }

        public function getNbreChambres(){
            return $this->nbreChambres;
        }

        public function getSurface(){
            return $this->surface;
        }
    }
?>
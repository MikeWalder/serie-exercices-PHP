<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="?type=tous" class="btn btn-primary btn-block btn-lg">Tous</a>
        </div>
        <div class="col-2">
            <a href="?type=chien" class="btn btn-primary btn-block btn-lg">Chiens</a>
        </div>
        <div class="col-2">
            <a href="?type=chat" class="btn btn-primary btn-block btn-lg">Chats</a>
        </div>
    </div>
</div>

<?php

    class Animaux{
        public $nom;
        public $age;
        public $type;

        public function __construct($nom, $age, $type){
            $this->nom = $nom;
            $this->age = $age;
            $this->type = $type;
        }
    }

    $animal1 = new Animaux("Mina", 2, "chien");
    $animal2 = new Animaux("Tya", 7, "chat");
    $animal3 = new Animaux("Milo", 4, "chat");
    $animal4 = new Animaux("Hocket", 6, "chien");
    
    $animaux = [$animal1, $animal2, $animal3, $animal4];

    function afficherTableauAnimaux(){
        global $animaux;
        echo "<h5>--------------------</h5>";
        foreach($animaux as $animal){
            echo "<h5>Nom : " . $animal->nom . "</h5>";
            echo "<h5>Age : " . $animal->age . "</h5>";
            echo "<h5>Type : " . $animal->type . "</h5>";
            echo "<h5>--------------------</h5>";
        }
    }

    function afficherAnimauxParType($type){
        global $animaux;
        echo "<h5>--------------------</h5>";
        foreach($animaux as $animal){
            
            if($animal->type === $type){
                foreach ($animal as $key => $value){
                    echo "<h5>" . ucfirst($key) . " : " . $value . "</h5>";
                    
                }
                echo "<h5>--------------------</h5>";
            }
        }
    }
?>

<?php
    if(isset($_GET['type']) && !empty($_GET['type'])){
        if($_GET['type'] === "chien"){
            afficherAnimauxParType("chien");
        }else if($_GET['type'] === "chat"){
            afficherAnimauxParType("chat");
        } else if($_GET['type'] === "tous"){
            afficherTableauAnimaux();
        }
    }
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

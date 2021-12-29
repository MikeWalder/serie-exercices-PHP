<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableau complexe"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $etudiants = [
        [
            "nom" => "Matthieu",
            "age" => 30,
            "sexe" => "masculin",
            "notes" => [2, 5, 15, 11, 15]
        ],
        [
            "nom" => "Marie",
            "age" => 30, 
            "sexe" => "féminin",
            "notes" => [10, 12, 11, 11]
        ],
        [
            "nom" => "Marc",
            "age" => 25, 
            "sexe" => "masculin",
            "notes" => [15, 5, 20, 15]
        ],
        [
            "nom" => "Mathilde",
            "age" => 21, 
            "sexe" => "féminin",
            "notes" => [3, 6, 14, 18]
        ]
    ];

    function afficherTabPersonne($persos){
        for($i = 0; $i < count($persos); $i++){
            foreach ($persos[$i] as $key => $value){
                if(gettype($value) === "array"){
                    $moyenne = 0;
                    for($j = 0; $j < count($value); $j++){
                        echo "<h5>Note " . ($j + 1) . " : " . $value[$j] . "</h5>";
                        $moyenne += $value[$j];
                    }
                    echo "<h5>La moyenne est de : " . $moyenne / count($value) . "</h5>";
                } else {
                    echo "<h4>" . ucfirst($key) . " : " . $value . "</h4>";
                }
            }
            echo "<h4>********************</h4>";
        }
    }

    afficherTabPersonne($etudiants);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

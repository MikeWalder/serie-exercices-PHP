<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableau de tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $personnes = [
        [
            "nom" => "Matthieu",
            "age" => 30,
            "sexe" => "masculin"
        ],
        [
            "nom" => "Marie",
            "age" => 30, 
            "sexe" => "féminin"
        ],
        [
            "nom" => "Marc",
            "age" => 25, 
            "sexe" => "masculin"
        ],
        [
            "nom" => "Mathilde",
            "age" => 21, 
            "sexe" => "féminin"
        ]
    ];

    function afficherTabPersonne($persos){
        for($i = 0; $i < count($persos); $i++){
            foreach ($persos[$i] as $key => $value){
                echo "<h4>" . ucfirst($key) . " : " . $value . "</h4>";
            }
            echo "<h4>********************</h4>";
        }
    }

    afficherTabPersonne($personnes);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

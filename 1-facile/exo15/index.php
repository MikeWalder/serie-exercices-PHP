<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Tableau associatif"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $personne1 = [
        "nom" => "Matthieu",
        "age" => 30,
        "sexe" => "masculin" 
    ];

    $personne2 = [
        "nom" => "Marie",
        "age" => 30, 
        "sexe" => "féminin"
    ];

    function afficherPersonne($tab){
        foreach($tab as $key => $value){
            echo "<h4><u>" . ucfirst($key) . "</u> : " . $value . "</h4>";
        }
    }

    afficherPersonne($personne1);
    echo "<h4>--------------------<h4>";
    afficherPersonne($personne1);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux 1"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $hommes = ["Matthieu", "Pierre", "Marc", "Jean"];

    foreach($hommes as $key => $homme){
        echo "<h4>" . $key . " : " . $homme . "</h4>";
    }

    echo "<h4>--------------------</h4>";

    $femmes = ["Morgane", "Mathilde", "Julie"];

    foreach($femmes as $key => $name){
        echo "<h4>" . $key . " : " . $name . "</h4>";
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

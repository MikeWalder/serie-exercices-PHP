<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableau de tableau"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $tableauGlobal = [
        [12, 15, 13, 7, 18],
        [11, 14, 10, 4, 20, 8, 2],
        [5, 13, 9, 3],
        [6, 11, 15, 2]
    ];

    
    foreach($tableauGlobal as $key => $value){
        $resultat = 0;
        for($i = 0; $i < count($tableauGlobal[$key]); $i++){
            $resultat += $tableauGlobal[$key][$i];
            $moyenne = $resultat / count($tableauGlobal[$key]);
        }
        $moyenne = round($resultat / count($tableauGlobal[$key]), 2);
        echo "<h4>La moyenne des notes de l'élève <b>" . ($key + 1) . "</b> est de <b>" . $moyenne . "</b></h4>";
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

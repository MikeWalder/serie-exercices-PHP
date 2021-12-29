<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Tableaux et fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    function calculerMoyenneTab($tab, $nom){
        $resultat = 0;
        foreach($tab as $value){
            $resultat += $value;
        }
        echo "<h4>La moyenne des notes de <b>" . $nom . "</b> est de <b>" . round($resultat / count($tab), 2) . "</b></h4>";
    }

    calculerMoyenneTab([12, 15, 13, 7, 18], "Marc");
    calculerMoyenneTab([11, 14, 10, 4, 20, 8, 2], "Matthieu");
    calculerMoyenneTab([5, 13, 9, 3], "Pierre");
    calculerMoyenneTab([6, 11, 15, 2], "Paul");

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

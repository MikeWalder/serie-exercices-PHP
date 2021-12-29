<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les fonctions 1"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    function nombrePairOuNon($nbre){
        if($nbre % 2 == 0){
            echo "<h3>Le chiffre " . $nbre . " est pair</h3>";
        }else if ($nbre % 2 !== 0){
            echo "<h3>Le chiffre " . $nbre . " est impair</h3>";
        }else {
            echo "<h3>Erreur !</h3>";
        }
    }

    nombrePairOuNon(5);
    nombrePairOuNon(122);
    nombrePairOuNon(-5);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

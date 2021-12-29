<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Le Switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $nbreRandom = rand(1, 12);

    switch($nbreRandom){
        case 1:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Janvier</b> en lettres</h3><br>";
            break;
        case 2:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Février</b> en lettres</h3><br>";
            break;
        case 3:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Mars</b> en lettres</h3><br>";
            break;
        case 4:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Avril</b> en lettres</h3><br>";
            break;
        case 5:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Mai</b> en lettres</h3><br>";
            break;
        case 6:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Juin</b> en lettres</h3><br>";
            break;
        case 7:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Juillet</b> en lettres</h3><br>";
            break;
        case 8:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Août</b> en lettres</h3><br>";
            break;
        case 9:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Septembre</b> en lettres</h3><br>";
            break;
        case 10:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Octobre</b> en lettres</h3><br>";
            break;
        case 11:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Novembre</b> en lettres</h3><br>";
            break;
        case 12:
            echo "<h3>Le mois <b>" . $nbreRandom . "</b> correspond au mois <b>Décembre</b> en lettres</h3><br>";
            break;
        default:
            echo "<h3>Rien à signaler</h3><br>";
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

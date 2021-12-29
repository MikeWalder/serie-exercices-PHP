<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    $nbreRandom1 = rand(1, 100);
    $nbreRandom2 = rand(1, 100);

    $valAbsolue = $nbreRandom1 + $nbreRandom2;

    echo "<h2>Chiffre 1 : " . $nbreRandom1 . "<br>";
    echo "<h2>Chiffre 2 : " . $nbreRandom2 . "<br>";

    if($valAbsolue >= 25 && $valAbsolue <= 75){
        echo "<h3>La valeur absolue de " . $nbreRandom1 . " - " . $nbreRandom2 . " est comprise entre 25 et 75<br>";
    } else {
        echo "<h3>La valeur absolue de " . $nbreRandom1 . " - " . $nbreRandom2 . " n'est pas comprise entre 25 et 75<br>"; 
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

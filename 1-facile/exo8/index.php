<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $nbreRandom = rand(1, 20);
    $i = 1;

    do {
        if($nbreRandom < 15) {
            echo "<h3>Essai " . $i . " : " . $nbreRandom . " est trop petit (<15)</h3>";
            $i++;
            $nbreRandom = rand(1, 20);
        } 
    } while($nbreRandom < 15);
    
    if($nbreRandom >= 15){
        echo "<h3>Le chiffre choisi est : " . $nbreRandom . "</h3>";
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

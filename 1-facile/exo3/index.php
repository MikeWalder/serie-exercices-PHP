<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    $nbreAleatoire = rand(1, 20);

    if($nbreAleatoire <= 5){
        echo "<h2>Le nombre est compris entre 1 et 5</h2><br>";
    } else if($nbreAleatoire > 5 && $nbreAleatoire <= 10){
        echo "<h2>Le nombre est compris entre 6 et 10</h2><br>";
    } else if($nbreAleatoire > 10 && $nbreAleatoire <= 15){
        echo "<h2>Le nombre est compris entre 11 et 15</h2><br>";
    } else if($nbreAleatoire > 15 && $nbreAleatoire <= 20){
        echo "<h2>Le nombre est compris entre 16 et 20</h2><br>";
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

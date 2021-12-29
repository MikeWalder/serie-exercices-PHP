<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    $nbreRandom = rand(5, 15);

    echo "<h2>Table de multiplication de " . $nbreRandom . "</h2><br>";

    for($i = 1; $i <= 10; $i++){
        echo "<h4>" . $nbreRandom . " * " . $i . " = " . $nbreRandom * $i . "</h4>";
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

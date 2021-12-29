<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Autre boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $res = 0;
    $nbreRandom = rand(5, 15);
    $randIteration = rand(1, 15);

    echo "<h2>Voici le cumul des " . $randIteration . " premiers nombres aléatoires (sens inverse)</h2>";

    for($i = 1; $i <= $randIteration; $i++){
        $random = rand(5, 15);
        $res += $random;
        echo "<h4>Etape " . $i . " - résultat = ". $res . "</h4>";
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

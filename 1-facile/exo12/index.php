<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux 2"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    $notesMarc = [12, 15, 13, 7, 18];
    $notesMatthieu = [11, 14, 10, 4, 20, 8, 2];
    $resultat = 0;

    for($i = 0; $i < count($notesMarc); $i++){
        $resultat += $notesMarc[$i];
    }
    $moyenne = $resultat / count($notesMarc);

    echo "<h4>La moyenne des notes de <b>Marc</b> est de <b>" . $moyenne . "</b></h4>";

    $resultat = 0;
    foreach ($notesMatthieu as $note) {
        $resultat += $note;
    }
    $moyenne = $resultat / count($notesMatthieu);

    echo "<h4>La moyenne des notes de <b>Matthieu</b> est de <b>" . round($moyenne, 2) . "</b></h4>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

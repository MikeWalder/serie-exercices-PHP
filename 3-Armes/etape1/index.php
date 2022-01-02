<?php ob_start(); //NE PAS MODIFIER 
$titre = "Etape 1 : les variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    $arme1 = "épée";
    $arme2 = "arc";
    $arme3 = "hache";
    $arme4 = "fléau";

    echo "<h4><b>Voici toute les armes : </b></h4><br>";
    echo "<h5>Arme 1 : " . $arme1 . "<h5>";
    echo "<h5>Arme 2 : " . $arme2 . "<h5>";
    echo "<h5>Arme 3 : " . $arme3 . "<h5>";
    echo "<h5>Arme 4 : " . $arme4 . "<h5>";

    $selector = "<select name='arme' id='arme'>";
        $selector .= "<option value=''></option>";
        $selector .= "<option value='arme1'>Epée</option>";
        $selector .= "<option value='arme2'>Arc</option>";
        $selector .= "<option value='arme3'>Hache</option>";
        $selector .= "<option value='arme4'>Fléau</option>";
    $selector .= "</select>";

    echo $selector;
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

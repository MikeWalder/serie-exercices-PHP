<?php ob_start(); //NE PAS MODIFIER 
$titre = "Etape 6 : Gestion d'images en fonction du niveau"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<p>
    <b>Voici les armes :</b>
</p>

<?php
    require("Arme.class.php");

    $arme1 = new Arme("épée", "Une arme tranchante");
    $arme2 = new Arme("arc", "Une arme à distance");
    $arme3 = new Arme("hache", "Une arme tranchante pour les combats rapprochés");
    $arme4 = new Arme("fleau", "Une arme contondante du moyen-âge");

    $armes = [$arme1, $arme2, $arme3, $arme4];

    foreach ($armes as $arme){
        echo $arme;
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

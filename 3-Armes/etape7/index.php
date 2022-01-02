<?php ob_start(); //NE PAS MODIFIER 
$titre = "Etape 7 : Listes déroulantes et formulaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<p>
    <b>Voici les armes :</b>
</p>

<?php
    require("Arme.class.php");

    $arme1 = new Arme("épée", "Une arme tranchante", 4);
    $arme2 = new Arme("arc", "Une arme à distance", 4);
    $arme3 = new Arme("hache", "Une arme tranchante pour les combats rapprochés", 4);
    $arme4 = new Arme("fleau", "Une arme contondante du moyen-âge", 4);

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

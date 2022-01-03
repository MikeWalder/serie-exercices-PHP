<?php 

ob_start(); //NE PAS MODIFIER 
$titre = "Etape 7 : Listes déroulantes et formulaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    require("Arme.class.php");
?>

<p>
    <b>Voici les armes :</b>
</p>

<?php

    $arme1 = new Arme("épée", "Une arme tranchante", 4);
    $arme2 = new Arme("arc", "Une arme à distance", 4);
    $arme3 = new Arme("hache", "Une arme tranchante pour les combats rapprochés", 4);
    $arme4 = new Arme("fleau", "Une arme contondante du moyen-âge", 4);

    $armes = [$arme1, $arme2, $arme3, $arme4];

    if(isset($_GET['levelépée'])){
        $arme1->setLevel($_GET['levelépée']);
    }

    if(isset($_GET['levelarc'])){
        $arme2->setLevel($_GET['levelarc']);
    }

    if(isset($_GET['levelhache'])){
        $arme3->setLevel($_GET['levelhache']);
    }

    if(isset($_GET['levelfléau'])){
        $arme4->setLevel($_GET['levelfléau']);
    }

    // AFFICHAGE DES ARMES
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

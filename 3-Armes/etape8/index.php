<?php 
session_start();

if(!isset($_SESSION['épée'])){ $_SESSION['épée'] = 1; }
if(!isset($_SESSION['arc'])){ $_SESSION['arc'] = 1; }
if(!isset($_SESSION['hache'])){ $_SESSION['hache'] = 1; }
if(!isset($_SESSION['fléau'])){ $_SESSION['fléau'] = 1; }

ob_start(); //NE PAS MODIFIER 
$titre = "Etape 8 : Finalisation avec les sessions"; //Mettre le nom du titre de la page que vous voulez
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
    $arme4 = new Arme("fléau", "Une arme contondante du moyen-âge", 4);

    $armes = [$arme1, $arme2, $arme3, $arme4];

    if(isset($_GET['levelépée'])){
        $_SESSION['épée'] = $_GET['levelépée'];
    }

    if(isset($_GET['levelarc'])){
        $_SESSION['arc'] = $_GET['levelarc'];
    }

    if(isset($_GET['levelhache'])){
        $_SESSION['hache'] = $_GET['levelhache'];
    }

    if(isset($_GET['levelfléau'])){
        $_SESSION['fléau'] = $_GET['levelfléau'];
    }

    $arme1->setLevel($_SESSION['épée']);
    $arme2->setLevel($_SESSION['arc']);
    $arme3->setLevel($_SESSION['hache']);
    $arme4->setLevel($_SESSION['fléau']);

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

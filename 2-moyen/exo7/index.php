<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Manipuler deux classes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    require("Player.class.php");
    require ("Arme.class.php");
?>

<?php
    $player1 = new Player();
    $player1->setNom("Milo");
    $player1->setIdArme(1);
    
    $arme1 = new Arme("Hache de guerre", 12.5);
    echo $player1;


    $player2 = new Player();
    $player2->setNom("Paleo");
    $player2->setIdArme(2);
    
    $arme2 = new Arme("Tanto", 8.5);
    echo $player2;

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

<?php ob_start(); //NE PAS MODIFIER 
$titre = "Ajouter Panier (BDD POO)"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
require("classes/MyPDO.class.php");
require("classes/fruits.class.php");
require("classes/panier.class.php");
?>

<div class="h2 py-3">Paniers (avec POO):</div>

<?php
require("classes/panier.manager.php");

PanierManager::setFruitsToPanierFromDB();

foreach (Panier::$panierTab as $panier) {
    $panier->setFruitsToPanierFromDB();
    echo $panier; // via __toString() de panier.class.php
}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
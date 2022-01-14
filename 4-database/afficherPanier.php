<?php ob_start(); //NE PAS MODIFIER 
$titre = "Table Panier (BDD POO)"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
require("classes/MyPDO.class.php");
require("classes/fruit.class.php");
require("classes/panier.class.php");
?>

<div class="h2">Panier (sans POO):</div>

<?php
$pdo = MyPDO::getPDO();
$stmt = $pdo->prepare("SELECT * FROM panier p INNER JOIN fruit f ON f.identifiant = p.identifiant");
$stmt->execute();
$res = $stmt->fetchAll();
foreach ($res as $r) {
    echo "<div class='card col-4'>";
    echo "<div class='card-body'>";
    echo "<b>Nom : </b>" . $r['nom'] . "<br>";
    echo "<b>Poids : </b>" . $r['poids'] . " grammes<br>";
    echo "<b>Prix : </b>" . $r['prix'] . "€<br>";
    echo "<b>Identifiant panier : </b>" . $r['identifiant'] . "<br>";
    echo "<b>Nom client : </b>" . $r['nomClient'] . "<br>";
    echo "</div>";
    echo "</div>";
}
?>

<div class="h2 py-3">Fruits (avec POO):</div>

<?php
require("classes/panier.manager.php");

PanierManager::getFruitPanierFromDB();

foreach (Panier::$panierTab as $panier) {
    $panier->setFruitsToPanierFromDB();
    // echo $panier;
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
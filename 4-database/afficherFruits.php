<?php ob_start(); //NE PAS MODIFIER 
$titre = "Table Fruit (BDD POO)"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
require("classes/MyPDO.class.php");
require("classes/fruits.class.php");
require("classes/panier.class.php");
?>

<div class="h2">Fruits (sans POO):</div>

<?php
$pdo = MyPDO::getPDO();
$stmt = $pdo->prepare("SELECT * FROM fruit f INNER JOIN panier p ON f.identifiant = p.identifiant");
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
require("classes/fruits.manager.php");

FruitManager::getFruitsFromDB();

foreach (Fruits::$fruitsTab as $elem) {
    echo $elem;
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
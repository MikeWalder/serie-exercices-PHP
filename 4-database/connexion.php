<?php ob_start(); //NE PAS MODIFIER 
$titre = "Connexion à la base de données"; //Mettre le nom du titre de la page que vous voulez
?>



<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="h3 text-center pb-5">Sans POO</div>
            <pre class="border-right">
const HOST_NAME = "localhost:3308";
const DB_NAME = "db_panierfruit";
const USER_NAME = "root";
const PWD = "";

try {
    $connexion = 'mysql:host=' . HOST_NAME . ';dbname=' . DB_NAME;
    $myPDO = new PDO($connexion, USER_NAME, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    $message("Erreur : " . $e->getMessage());
    die($message);
}   
            </pre>
        </div>
        <div class="col-6">
            <div class="h3 text-center pb-5">Avec POO (dans une classe)</div>
            <pre class="border-left">
class MyPDO
{
    private const HOST_NAME = "localhost:3308";
    private const DB_NAME = "db_panierfruit";
    private const USER_NAME = "root";
    private const PWD = "";

    private static $myInstance = null;

    public static function getPDO()
    {
        if (is_null(self::$myInstance)) {
            try {
                $connexion = 'mysql:host=' . self::HOST_NAME . ';dbname=' . self::DB_NAME;
                self::$myInstance = new PDO($connexion, self::USER_NAME, self::PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                $message = "Erreur : " . $e->getMessage();
                die($message);
            }
            self::$myInstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$myInstance;
    }
}
            </pre>
        </div>
    </div>
</div>

<hr>

<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-6">
            <div class="h3 text-center pb-5">
                Requête simple (sans POO)
            </div>
            <pre>
if ($myPDO) {
    $req = "SELECT * FROM fruit";
    $stmnt = $myPDO->prepare($req);
    $stmnt->execute();
    $res1 = $stmnt->fetchAll();
    foreach ($res1 as $res) {
        echo "< div class='card'>";
        echo "< div class='card-body'>";
        echo "Nom : " . $res['nom'] . "< br>";
        echo "Poids : " . $res['poids'] . "g< br>";
        echo "Prix : " . $res['prix'] . "€< br>";
        echo "< /div>";
        echo "< /div>";
    }
}
            </pre>
        </div>
        <div class="col-6">
            <div class="h3 text-center pb-5">
                Requête simple (avec POO)
            </div>
            <pre>
$pdo = MyPDO::getPDO();
$stmt = $pdo->prepare("SELECT nom, poids, prix FROM fruit");
$stmt->execute();
$fruits = $stmt->fetchAll();
foreach ($fruits as $fruit) {
    echo "< div class='card'>";
    echo "< div class='card-body'>";
    echo "Nom : " . $fruit['nom'] . "< br>";
    echo "Poids : " . $fruit['poids'] . "g< br>";
    echo "Prix : " . $fruit['prix'] . "€< br>";
    echo "< /div>";
    echo "< /div>";
}
            </pre>
        </div>
    </div>
</div>

<div class="container-fluid pt3">
    <div class="row">
        <div class="col-6">
            <div class="h3 text-center pb-5">
                Résultat
            </div>
            <?php
            require("database.php");
            if ($myPDO) {
                $req = "SELECT * FROM fruit";
                $stmnt = $myPDO->prepare($req);
                $stmnt->execute();
                $res1 = $stmnt->fetchAll();
                foreach ($res1 as $res) {
                    echo "<div class='card'>";
                    echo "<div class='card-body'>";
                    echo "Nom : " . $res['nom'] . "<br>";
                    echo "Poids : " . $res['poids'] . "g<br>";
                    echo "Prix : " . $res['prix'] . "€<br>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <div class="col-6">
            <div class="h3 text-center pb-5">
                Résultat
            </div>
            <?php
            require("classes/MyPDO.class.php");
            $pdo = MyPDO::getPDO();
            $stmt = $pdo->prepare("SELECT nom, poids, prix FROM fruit");
            $stmt->execute();
            $fruits = $stmt->fetchAll();
            foreach ($fruits as $fruit) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "Nom : " . $fruit['nom'] . "<br>";
                echo "Poids : " . $fruit['poids'] . "g<br>";
                echo "Prix : " . $fruit['prix'] . "€<br>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../global/common/template.php";
?>
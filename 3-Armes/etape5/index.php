<?php ob_start(); //NE PAS MODIFIER 
$titre = "Etape 5 : Amélioration de la classe"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<p>
    <b>Voici les armes :</b>
</p>

<?php
    require("Arme.class.php");

    $arme1 = new Arme("épée", "", "Une arme tranchante");
    $randArme = rand(1, 4);
    $arme1->setImage("img/epee" . $randArme . ".png");
    echo $arme1;

    $arme2 = new Arme("arc", "", "Une arme à distance");
    $randArme = rand(1, 4);
    $arme2->setImage("img/arc" . $randArme . ".png");
    echo $arme2;

    $arme3 = new Arme("hache", "", "Une arme tranchante pour les combats rapprochés");
    $randArme = rand(1, 4);
    $arme3->setImage("img/hache" . $randArme . ".png");
    echo $arme3;

    $arme4 = new Arme("fleau", "", "Une arme contondante du moyen-âge");
    $randArme = rand(1, 4);
    $arme4->setImage("img/fleau" . $randArme . ".png");
    echo $arme4;

    $armes = [$arme1, $arme2, $arme3, $arme4];
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

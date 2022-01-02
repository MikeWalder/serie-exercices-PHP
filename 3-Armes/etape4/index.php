<?php ob_start(); //NE PAS MODIFIER 
$titre = "Etape 4 : la POO"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    require("Arme.class.php");

    $arme1 = new Arme("épée", "img/epee1.png", "Une arme tranchante");
    $arme2 = new Arme("arc", "img/arc1.png", "Une arme à distance");
    $arme3 = new Arme("hache", "img/hache1.png", "Une arme tranchante pour les combats rapprochés");
    $arme4 = new Arme("fleau", "img/fleau1.png", "Une arme contondante du moyen-âge");

    $armes = [$arme1, $arme2, $arme3, $arme4];
?>

<p>
    <b>Voici les armes :</b>
</p>


<?php
    foreach($armes as $arme){
        $render = "<div class='container'>";
            $render .= "<div class='row align-items-center'>";
                $render .= "<div class='img-thumbnail text-center col-4'>";
                    $render .= "<img src='" . $arme->image . "' alt='" . $arme->nom . "'>";
                $render .= "</div>";
                $render .= "<div class='group text-center col-8'>";
                    $render .= "<h2><b>" . $arme->nom . "</b></h2><br>";
                    $render .= "" . $arme->description . "<br>";
                $render .= "</div>";
            $render .= "</div>";
        $render .= "</div>";

        echo $render;
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

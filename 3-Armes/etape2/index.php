<?php ob_start(); //NE PAS MODIFIER 
$titre = "Etape 2 : Tableaux et boucles"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    $arme1 = "épée";
    $arme2 = "arc";
    $arme3 = "hache";
    $arme4 = "fléau";

    $armes = [$arme1, $arme2, $arme3, $arme4];

?>

<p>
    <b>Voici toute les armes dans un tableau PHP : </b>
</p>

<p>
    Arme 1 : <?= $armes[0] ?><br>
    Arme 2 : <?= $armes[1] ?><br>
    Arme 3 : <?= $armes[2] ?><br>
    Arme 4 : <?= $armes[3] ?><br>
</p>

<p>
    <b>Voici toute les armes dans une boucle for : </b>
</p>

<p>
    <?php
        for($i = 0; $i < count($armes); $i++){
            echo ("Arme " . ($i+1) . " : " . $armes[$i] . "<br>");
        }
    ?>
</p>

<p>
    <b>Voici toute les armes dans une boucle foreach : </b>
</p>

<p>
    <?php
        foreach($armes as $key => $arme){
            echo ("Arme " . ($key + 1) . " : " . $arme . "<br>");
        }
    ?>
</p>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

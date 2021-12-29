<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    $nom = "Marie";
    $age = 30;
    $homme = false;

    $nom2 = "Pierre";
    $age2 = 32;
    $homme2 = true;

    echo "************ AFFICHAGE AVEC LES VARIABLES ************<br>";
    echo $nom . " a " . $age . " ans et c'est ";
    if($homme === false){
        echo "une femme <br>";
    }else {
        echo "un homme <br>";
    }

    echo $nom2 . " a " . $age2 . " ans et c'est ";
    if($homme2 === false){
        echo "une femme <br>";
    }else {
        echo "un homme <br>";
    }
    echo "<br>";

    echo "************ AFFICHAGE AVEC LES TERNAIRES ************<br>";
    echo $nom . " a " . $age . " ans et c'est ";
    echo $homme ? "un homme<br>" : "une femme<br>";

    echo $nom2 . " a " . $age2 . " ans et c'est ";
    echo $homme2 ? "un homme<br>" : "une femme<br>";
    echo "<br>";
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

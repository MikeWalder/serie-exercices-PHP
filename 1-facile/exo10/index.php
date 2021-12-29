<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les fonctions 2"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    function sansVoyelles($mot){
        $tabMot = str_split($mot);
        for($i = 0; $i < count($tabMot); $i++){
            if($tabMot[$i] === "a" || $tabMot[$i] === "e" || $tabMot[$i] === "i" || $tabMot[$i] === "o" || $tabMot[$i] === "u" || $tabMot[$i] === "y"){
                $tabMot[$i] = "";
            }
        }
        $res = implode("", $tabMot);
        echo "<h3>\"" . $mot . "\" sans voyelles devient : " . $res . "</h3>";
    }

    sansVoyelles("Rhume");
    sansVoyelles("Coucou");
    sansVoyelles("Bonjour a tous");

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

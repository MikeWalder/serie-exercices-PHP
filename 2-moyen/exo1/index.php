<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableau à deux dimensions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->


<?php

    echo "<table class='table table-striped'>"; 
        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            for($j = 1; $j <= 10; $j++){
                if($j === 1) {
                    echo "<th>" . $i . "</th>";
                }else{
                    echo $i === 1 ? "<th>" . $i * $j . "</th>" : "<td>" . $i * $j . "</td>";
                }
            }
            echo "</tr>";
        }
    echo "</table>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

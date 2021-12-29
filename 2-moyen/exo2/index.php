<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Fichier de fonctions et tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php
    require("gestionTableaux.php");
?>

    <div class="container">
        <div class="row">
            <div class="col-5 text-center bg-primary text-light">
                <?php
                    $tab1 = [12, 8, 18, 13, 11, 17, 7];
                    echo "<h1 class='font-weight-bold'>Tableau 1 : </h1>";
                    afficherTableau($tab1);
                    calculerMoyenne($tab1);
                    estTableauPair($tab1);
                ?>
            </div>
            <div class="col-2"></div>
            <div class="col-5 text-center bg-primary text-light">
                <?php
                    $tab2 = [14, 8, 18, 16, 6, 2, 20];
                    echo "<h1 class='font-weight-bold'>Tableau 2 : </h1>";
                    afficherTableau($tab2);
                    calculerMoyenne($tab2);
                    estTableauPair($tab2);
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
    require "../../global/common/template.php";
?>

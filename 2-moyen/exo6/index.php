<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut statique"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php

    require("maisons.classe.php");
?>

<table class="table table-striped table-bordered">
    <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Nombre de chambres</th>
            <th scope="col">Surface (en m²)</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $maison1 = new Maison(2008, 3, 54);
            $maison2 = new Maison(2012, 2, 42);
            $maison3 = new Maison(2003, 4, 76);
            $maison4 = new Maison(2007, 3, 58);

            $maisons = [$maison1, $maison2, $maison3, $maison4];

            foreach($maisons as $maison){
                echo "<tr class='text-center'>";
                    echo "<td>" . $maison->getId() . "</td>";
                    echo "<td>" . $maison->getDate() . "</td>";
                    echo "<td>" . $maison->getNbreChambres() . "</td>";
                    echo "<td>" . $maison->getSurface() . "</td>";
                echo "</td>";
            }
        ?> 
    </tbody>
</table>

<?php
    
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>

<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Formulaire & Méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="#" method="POST">

    <div class="form-group">
        <label for="nombre">Chiffre </label>
        <input type="number" class="form-control" id="nombre" name="nombre">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>

</form>

<?php
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
        $nombre = (int)$_POST['nombre'];
        estPair($nombre);
        
    }

    function estPair($nbre){
        if($nbre % 2 === 0){
            echo "<h4 class='mt-3 text-success'>Le chiffre saisi est pair</h4>";
        }else {
            echo "<h4 class='mt-3 text-danger'>Le chiffre saisi est impair</h4>";
        }
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

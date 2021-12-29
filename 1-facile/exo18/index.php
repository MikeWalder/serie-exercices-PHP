<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Formulaire & Méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="#" method="GET">
    <div class="form-group">
        <label for="pseudo">Pseudo : </label>
        <input type="text" class="form-control" id="pseudo" name="pseudo">
    </div>
    <div class="form-group">
        <label for="age">Age : </label>
        <input type="number" min="0"  max="150" class="form-control" id="age" name="age">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
    if(isset($_GET['pseudo']) && !empty($_GET['pseudo']) && isset($_GET['age']) && !empty($_GET['age'])){
        $pseudo = htmlspecialchars($_GET['pseudo']);
        $age = (int)$_GET['age'];
        
        echo "<h4>" . $pseudo . " a " . $age . " ans</h4>";
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

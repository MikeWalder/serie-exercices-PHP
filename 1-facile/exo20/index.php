<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaires & Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="#" method="POST">

    <div class="form-group">
        <label for="note1">Note 1 </label>
        <input type="number"  min="0" max="20" step="0.5" class="form-control" id="note1" name="note1">
    </div>
    <div class="form-group">
        <label for="note2">Note 2 </label>
        <input type="number"  min="0" max="20" step="0.5" class="form-control" id="note2" name="note2">
    </div>
    <div class="form-group">
        <label for="note3">Note 3 </label>
        <input type="number"  min="0" max="20" step="0.5" class="form-control" id="note3" name="note3">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>

</form>

<?php
    if(isset($_POST['note1']) && !empty($_POST['note1']) && isset($_POST['note2']) && !empty($_POST['note2'])
    && isset($_POST['note3']) && !empty($_POST['note3'])){
        $note1 = (int)$_POST['note1'];
        $note2 = (int)$_POST['note2'];
        $note3 = (int)$_POST['note2'];

        $moyenne = round(($note1 + $note2 + $note3) / 3, 2);
        echo "<h4>La moyenne des 3 notes est de : " . $moyenne . "</h4>";
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

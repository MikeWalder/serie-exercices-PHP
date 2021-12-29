<?php ob_start(); ?>

<!-- mettre ici le code -->

<?php
    $titre = "Site d'exercices PHP par niveaux";
    $content = ob_get_clean();
    require "../common/template.php";
?>

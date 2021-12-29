<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="?type=tous" class="btn btn-primary btn-block btn-lg">Tous</a>
        </div>
        <div class="col-2">
            <a href="?type=chien" class="btn btn-primary btn-block btn-lg">Chiens</a>
        </div>
        <div class="col-2">
            <a href="?type=chat" class="btn btn-primary btn-block btn-lg">Chats</a>
        </div>
    </div>
</div>

<?php
    
    $animal1 = [
        "nom" => "Mina",
        "age" => 2,
        "type" => "chien"
    ];

    $animal2 = [
        "nom" => "Tya",
        "age" => 7,
        "type" => "chat"
    ];

    $animal3 = [
        "nom" => "Milo",
        "age" => 4,
        "type" => "chat"
    ];

    $animal4 = [
        "nom" => "Hocket",
        "age" => 6,
        "type" => "chien"
    ];

    $animaux = [$animal1, $animal2, $animal3, $animal4];

    //afficherTableauAnimaux($animaux);

    function afficherTableauAnimaux($tab){
        for($i = 0; $i < count($tab); $i++){
            foreach ($tab[$i] as $key => $value) {
                echo "<h5>" . ucfirst($key) . " : " . $value . "</h5>";
            }
            echo "<h5><b>********************</b></h5>";
        }
    }

    function afficherAnimauxParType($tab, $type){
        foreach($tab as $value){
            if($value['type'] === $type){
                for($i = 0; $i < count($tab); $i++){
                    foreach ($tab[$i] as $key => $value) {
                        echo "<h5>" . ucfirst($key) . " : " . $value . "</h5>";
                    }
                    echo "<h5><b>********************</b></h5>";
                }
            }
        }
    }
?>

<?php
    if(isset($_GET['type']) && !empty($_GET['type'])){
        if($_GET['type'] === 'chien'){
            afficherAnimauxParType($animaux, "chien");
        }else if($_GET['type'] === 'chat'){
            afficherAnimauxParType($animaux, "chat");
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

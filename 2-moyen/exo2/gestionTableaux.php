<?php

    function afficherTableau($tab){
        echo "<h5>";
        for($i = 0; $i < count($tab); $i++){
            echo $i === 0 ? "" : " - ";
            echo $tab[$i];
        }
        echo "</h5>";
    }

    function calculerMoyenne($tab){
        $resultat = 0;
        for($i = 0; $i < count($tab); $i++){
            $resultat += $tab[$i];
        }
        $moyenne = round($resultat / count($tab), 2);
        echo "<h5>La moyenne est de : " . $moyenne . "</h5>";
    }

    function estTableauPair($tab){
        $count = 0;
        for($i = 0; $i < count($tab); $i++){
            if($tab[$i] % 2 === 0){
                $count += 1;
            }
        }
        if($count === count($tab)){
            echo "<h5>Le tableau contient uniquemeent des valeurs paires</h5>";
        }else {
            echo "<h5>Le tableau contient des valeurs impaires</h5>";
        }
    }

?>
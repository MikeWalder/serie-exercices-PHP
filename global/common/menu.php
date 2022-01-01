<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="../../global/accueil/index.php">accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Facile
            </a>
            <div class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
                <?php for($i = 1; $i <= 20; $i++) : ?>
                    <a class="dropdown-item" href="../../1-facile/exo<?=$i?>/index.php">exo<?=$i?></a>
                <?php endfor; ?>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-3 mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Moyen
            </a>
            <div class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
                <?php for($i = 1; $i <= 7; $i++) : ?>
                    <a class="dropdown-item" href="../../2-moyen/exo<?=$i?>/index.php">exo<?=$i?></a>
                <?php endfor; ?>
            </div>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-3 ml-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Armes
            </a>
            <div class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/etape1/">Etape 1</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/etape2/">Etape 2</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/etape3/">Etape 3</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo4.php">exo4</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo5.php">exo5</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo6.php">exo6</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo7.php">exo7</a>
                <a class="dropdown-item" href="../../3-cas pratique/1-Armes/exo8.php">exo8</a>
            </div>
        </li>
    </ul>
    </div>
</nav>
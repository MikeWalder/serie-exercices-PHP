<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private & Getters"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="#" method="POST">

    <div class="col-md-4">
        <label class="my-2" for="edition">Edition :</label>
        <select class="custom-select my-1 mr-sm-2" id="edition" name="edition">
            <option value="">Tous</option>
            <option value="Michel Lafon">Michel Lafon</option>
            <option value="Le Seuil">Le Seuil</option>
            <option value="Dunod">Dunod</option>
            <option value="Hauteville">Hauteville</option>
        </select>
    </div>

    <div class="col-md-2">
        <label class="my-2" for="annee_parution">Année de parution :</label>
        <select class="custom-select my-1 mr-sm-2" id="annee_parution" name="annee_parution">
            <?php 
                for($i = 2000; $i <= 2021; $i++){
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            ?>
        </select>
    </div>

    <button type="submit" class="ml-3 my-5 btn btn-primary my-1">Valider</button>
    
</form>

<?php

    class Livre{
        private $nom;
        private $edition;
        private $auteur;
        private $annee_parution;

        public function __construct($nom, $edition, $auteur, $annee_parution){
            $this->nom = $nom;
            $this->edition = $edition;
            $this->auteur = $auteur;
            $this->annee_parution = $annee_parution;
        }

        public function getEdition(){
            return $this->edition;
        }

        public function getAnnee_parution(){
            return $this->annee_parution;
        }

        public function __toString()
        {
            $txt = "<div class='bg-primary text-center'>";
                $txt .= "<h5>Nom : " . $this->nom . "</h5>";
                $txt .= "<h5>Edition : " . $this->edition . "</h5>";
                $txt .= "<h5>Auteur : " . $this->auteur . "</h5>";
                $txt .= "<h5>Année : " . $this->annee_parution . "</h5>";
            $txt .= "</div>";
            return $txt;
        }
    }

    $livre1 = new Livre("Métronome", "Michel Lafon", "Lorant Deutsch", 2009);
    $livre2 = new Livre("Une histoire de la science arabe", "Le Seuil", "Ahmed Djebbar", 2006);
    $livre3 = new Livre("Automate programmables industriels", "Dunod", "William Bolton", 2019);
    $livre4 = new Livre("Ils sont chez nous", "Hauteville", "Lisa Jewell", 2021);
    
    $livres = [$livre1, $livre2, $livre3, $livre4];

    function afficherLivres($infos, $edition, $anneeParution){
        //echo "<h5>--------------------</h5>";
        foreach($infos as $info){
            if($info->getAnnee_parution() === $anneeParution && $info->getEdition() === $edition){
                echo $info;
                echo "<h5>------------------------------</h5>";
            } else {
                
            }
        }

    }
?>

<?php
    if(isset($_POST['edition']) && !empty($_POST['edition'])
    && isset($_POST['annee_parution']) && !empty($_POST['annee_parution'])){
        afficherLivres($livres, $_POST['edition'], (int)$_POST['annee_parution']);
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

<?php
include("common/header.php");
include("common/menu.php");
session_start();
?>
<h1>Exercice 4</h1>
<h2>Choisir un personnage</h2>
<div class="formulaire">
    <form action="#" method="POST">
        <label for="personnage">Personnage :</label>
        <select name="personnage" id="personnage" onChange="submit()">
            <option value="luke" <?php if(isset($_POST['personnage']) && $_POST['personnage']==='luke') echo "selected" ?>>Luke</option>
            <option value="katy" <?php if(isset($_POST['personnage']) && $_POST['personnage']==='katy') echo "selected" ?>>Katy</option>
            <option value="marc" <?php if(isset($_POST['personnage']) && $_POST['personnage']==='marc') echo "selected" ?>>Marc</option>
        </select>
    </form>
</div>
<div class="special">
<?php
$luke = ['Nom' => 'Luke', 'Age' => '18 ans', 'Sexe' => 'M', 'Force' => 8, 'Agilité' => 6];
$katy = ['Nom' => 'Katy', 'Age' => '20 ans', 'Sexe' => 'F','Force' => 6, 'Agilité' => 3];
$marc = ['Nom' => 'Marc', 'Age' => '23 ans', 'Sexe' => 'M', 'Force' => 7, 'Agilité' => 9];

function afficherPerso($perso) {
    foreach ($perso as $key => $value) {
        echo "<p>$key : $value.</p>";
    }
}

    if(isset($_POST['personnage'])){
        $personnage = $_POST['personnage'];
        if($personnage=='luke'){
            echo "<img src=\"./sources/images/player.png\" style=\"float:left\";>";
            afficherPerso($luke);
        } else if($personnage=='katy') {
            echo "<img src=\"./sources/images/playerF.png\" style=\"float:left\";>";
            afficherPerso($katy);
        } else {
            echo "<img src=\"./sources/images/playerM.png\" style=\"float:left\";>";
            afficherPerso($marc);
        }
    }else{
        echo "<img src=\"./sources/images/player.png\" style=\"float:left\";>";
        afficherPerso($luke);
    }  
?>
</div>
        
<?php
include("common/footer.php");
?>
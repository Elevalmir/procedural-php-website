<?php
include("common/header.php");
include("common/menu.php");
session_start();
if(!isset($_SESSION["bonNombre"])){
$_SESSION["bonNombre"] = rand(0,10);
$_SESSION["essai"] = 1;
}
?>
<h1>Exercice 2</h1>
<h2>Trouver le nombre entre 0 et 10 choisi par l'ordinateur</h2>
<div class="formulaire">
    <form action="#" method="POST">
        <input type="hidden" name="reset" value="yes">
        <input type="submit" value="Réinitialiser le nombre">
    </form>
    <form action="#" method="POST">
    <label for="nombreDevi">Veuillez indiquer votre nombre :</label>
        <input type="number" name="nombreDevi" id="nombreDevi" required>
        <input type="submit" value="Soumettre">
    </form>
</div>
<div class="bloc">
<?php
if(isset($_POST['reset']) && $_POST['reset']==="yes") {
    $_SESSION["bonNombre"] = rand(0,10);
    $_SESSION["essai"]=1;
}
if(isset($_POST['nombreDevi'])) {
    $nombreDevi=(int)$_POST['nombreDevi'];
    if ($nombreDevi!==$_SESSION["bonNombre"]){
        echo"<p style=\"text-align:center\">Dommage... vous n'avez pas trouvé le bon nombre ! Vous avez fait ", $_SESSION["essai"], " essai(s) !</p>";
        $_SESSION["essai"]++;
    }else {
        echo"<p style=\"text-align:center\">Félicitations ! Vous avez trouvé le bon nombre en ", $_SESSION["essai"], " essai(s) !</p>";
        $_SESSION["essai"]=1;
    }
}
?>
</div>
<?php
include("common/footer.php");
?>
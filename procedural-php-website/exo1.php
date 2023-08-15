<?php
include("common/header.php");
include("common/menu.php");
?>
<h1>Exercice 1</h1>
<h2>Les tables de multiplication</h2>
<div class="formulaire">
    <form action="#" method="GET">
        <label for="table">Veuillez encoder le nombre dont vous voulez voir apparaître la table :</label>
        <input type="number" name="table" id="table" required>
        <input type="submit" value="Envoyer">
    </form>
</div>
<div class="bloc">
<?php
if(isset($_GET['table'])){
    for ($i=1; $i <= 10; $i++) { 
        echo"<p style=\"text-align:center\">$i x ",$_GET['table']," = ",$_GET['table']*$i,"</p>";
    }
}
?>
</div>
<h2>La pyramide</h2>
<div class="formulaire">
    <form action="#" method="GET">
        <label for="hauteurPyramide">Veuillez encoder la hauteur de la pyramide :</label>
        <input type="number" name="hauteurPyramide" id="hauteurPyramide" required>
        <input type="submit" value="Envoyer">
    </form>
</div>
<div>
<?php
if(isset($_GET['hauteurPyramide']) && $_GET['hauteurPyramide']>0){
    $base="";
    for ($i=0; $i <= $_GET['hauteurPyramide']*2; $i++) { 
        if($i<=$_GET['hauteurPyramide']){
            $base .= "xx";
            echo "<p style=\"margin-left:40vw;\">", $base ,"<p>";
        }
        if($i>$_GET['hauteurPyramide']){
            $base = substr($base, 0, -2);
            echo "<p style=\"margin-left:40vw;\">", $base ,"<p>";
        }
    }
}
?>
</div>
<h2>Calcul du pémitrère et/ou de l'aire d'un cercle</h2>
<div class="formulaire">
    <form action="#" method="GET">
        <label for="rayon">Veuillez encoder la longueur du rayon en cm :</label>
        <input type="number" name="rayon" id="rayon" required>
        <p>Veuillez indiquer les éléments que vous souhaitez voir apparaître :<p>
        <label for="perimetre" >Pérmitère :</label>
        <input type="checkbox" name="perimetre" value="perimetre" checked>
        <br>
        <label for="aire">Aire :</label>
        <input type="checkbox" name="aire" value="aire" id="aire" checked>
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</div>
<div class="bloc">
<?php
if(isset($_GET['rayon'])){
    $rayon = $_GET['rayon'];
    if (filter_has_var(INPUT_GET,'perimetre')){
        echo "<p style=\"text-align:center\">Le perimètre du cercle est égal à ", $rayon*pi()*2, " cm</p><br>";
    }
    if (filter_has_var(INPUT_GET,'aire')){
        echo "<p style=\"text-align:center\">Le perimètre du cercle est égal à ", ($rayon**2)*pi(), " cm²</p><br>";
    }
}
?>
</div>

<?php
include("common/footer.php");
?>

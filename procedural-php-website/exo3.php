<?php
include("common/header.php");
include("common/menu.php");
session_start();
?>

<h1>Caculer une moyenne</h1>
<div class="formulaire">
    <form action="#" method="GET">
        <label for="nombreNotes">Veuillez indiquer le nombre de notes à encoder :</label>
        <input type="number" name="nombreNotes" id="nombreNotes" required>
        <input type="submit" value="Ajouter">
    </form>
</div>
<?php
    if(isset($_GET['nombreNotes'])){
        $_SESSION["nombresNotes"] = $_GET['nombreNotes'];
        echo "<div class=\"formulaire\">";
        echo "<form action=\"#\" method=\"POST\">";
        echo "<fieldset style=\"margin: 0 40vw\">";
        echo "<legend>Inscrivez les notes pour calculer la moyenne :</legend>";
        for ($i=1; $i <= $_SESSION["nombresNotes"]; $i++) { 
            echo "<label for=\"Note$i\">Note $i :</label>";
            echo "<input type=\"number\" name=\"Note$i\" id=\"Note$i\" required><br>";
        }
        echo "<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";
        echo "</div>";
    }
    if(isset($_POST['Note1'])){
        $somme=0;
        for ($i=1; $i <= $_SESSION["nombresNotes"]; $i++) { 
            $somme += (int)$_POST['Note'.$i];
        }
        $moyenne = $somme/$_SESSION["nombresNotes"];
        echo "La moyenne vaut $moyenne";
    }
?>
<?php
include("common/footer.php");
?>
<?php
include("common/header.php");
include("common/menu.php");
session_start();
?>
<h1>Exercice 5</h1>
<h2>Les tableaux</h2>
<h3>Etape 1</h3>

<p class="bloc">Réaliser un tableau contenant les valeurs : 
    <?php 
    $tableau=[2,6,12,5,26,34,40,60];
    $length = count($tableau);
    for ($i=0; $i < $length; $i++) { 
        if($i<$length-1){
            echo $tableau[$i].", ";
        }else{
            echo $tableau[$i].".";
        }
    }
    ?>
</p>


<h3>Etape 2</h3>
<p class="bloc">Réaliser ensuite une fonction qui permet de vérifier si le tableau ne contient que des valeurs paires ou non! </p>
<?php
    function valeurPaire($array) {
        $taille=count($array);
        $verif=true;
        for ($i=0; $i < $taille; $i++) { 
            if($array[$i]%2===0){
                $verif=true;
            }else{
                $verif=false;
                break;
            }
        }
        if ($verif===true) {
            echo"<p class=\"bloc\">Le tableau ne contient que des nombres pairs.</p>";
        }else{
            echo"<p class=\"bloc\">Le tableau contient un ou plusieurs nombre(s) impair(s).</p>";
        }
    }
?>
<h3>Etape 3</h3>
<p class="bloc">Afficher un message pour l'indiquer à l'utilisateur </p>
<h3>Résultat :</h3>
<?php 
    valeurPaire($tableau); 
?>

        
<?php
include("common/footer.php");
?>
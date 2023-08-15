<?php
include("common/header.php");
include("common/menu.php");
?>
<h1>Exercice 6</h1>
<h2>Tableaux multi-dimentionnels</h2>
<div class="special">
<?php
$personnages = [
    $luke = ['Nom' => 'Luke', 'Age' => '18 ans', 'Sexe' => 'M', 'Force' => 8, 'Agilité' => 6, 'Image' => './sources/images/player.png'],
    $katy = ['Nom' => 'Katy', 'Age' => '20 ans', 'Sexe' => 'F','Force' => 6, 'Agilité' => 3, 'Image' => './sources/images/playerF.png'],
    $marc = ['Nom' => 'Marc', 'Age' => '23 ans', 'Sexe' => 'M', 'Force' => 7, 'Agilité' => 9, 'Image' => './sources/images/playerM.png']
];

function afficherPerso($perso) {
    foreach ($perso as $element) {
        //In PHP, we use curly braces {} to access array elements with complex or variable expressions, whereas we use the dot . operator to concatenate strings.
        echo "<img src=\"{$element['Image']}\" style=\"float:left;margin-right:10px;\">";
        foreach ($element as $key => $value) {
            if ($key !== 'Image') {
                echo "<p>$key : $value.</p>";
            }
        }
        echo "<br>";
    }
}

afficherPerso($personnages);

//Autre façon de faire
    $p1 = ['Nom' => 'Luke', 'Age' => '18 ans', 'Sexe' => 'M', 'Force' => 8, 'Agilité' => 6, 'Image' => './sources/images/player.png'];
    $p2 = ['Nom' => 'Katy', 'Age' => '20 ans', 'Sexe' => 'F','Force' => 6, 'Agilité' => 3, 'Image' => './sources/images/playerF.png'];
    $p3 = ['Nom' => 'Marc', 'Age' => '23 ans', 'Sexe' => 'M', 'Force' => 7, 'Agilité' => 9, 'Image' => './sources/images/playerM.png'];
    $personnes = [$p1, $p2, $p3];

    function montrerPerso($gens) {
        foreach ($gens as $people) {
            //In PHP, we use curly braces {} to access array elements with complex or variable expressions, whereas we use the dot . operator to concatenate strings.
            echo "<img src=\"{$people['Image']}\" style=\"float:left;margin-right:10px;\">";
            foreach ($people as $key => $value) {
                if ($key !== 'Image') {
                    echo "<p>$key : $value.</p>";
                }
            }
            echo "<br>";
        }
    }

    montrerPerso($personnes);


?>
</div>
        
<?php
include("common/footer.php");
?>
<?php
include 'header.php';

include 'auth.php';
$myinputs = filter_input(INPUT_GET, 'search');
    $result = $pdo->query("SELECT * FROM recettes WHERE (`titre` LIKE '%$myinputs%')");
    $recette = $result->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "<br>";
        echo "<div class='container' style='background-color : #EFECCA;'>";
        echo "<div class='row'>";
        echo "<div class='col-lg-3 col-sm-6 text-center'>";
        $image = "photos/recettes/".$recette['img']."'";
        echo "<a href='recette-detail.php?idRecette=".$recette['idRecette']."'>";
        echo "<img class='rounded img-thumbnail col-12' src='".$image."'";
        echo '<p>'.$recette['titre'].'</p>';
        echo '</a>';
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else { 
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<p>";
        echo "Une erreur est survenue !";
        echo "</p>";
        echo "</div>";
        echo "</div>";
    }
    
include 'footer.php';

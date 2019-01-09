<?php
$title='Recette';
include 'header.php';
?>

<div class="container">
    <br>
    <div class="row" style='background-color : #EFECCA;'>
        <div class="rowrecette">
            <?php
            include 'auth.php';
            $myinputs = filter_input(INPUT_GET, 'idRecette');
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='$myinputs'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = 'photos/recettes/'.$recette['img']."'";
                echo "<img id='imgrecette' class='rounded img-thumbnail col-lg-12 col-sm-6' src='".$image;
                echo '<p class="col-12">';
                echo '<h1>';
                echo $recette['titre'];
                echo '</h1>';
                echo '<p>';
                echo $recette['chapo'];
                echo '</p>';
                echo '<br>';

                echo '<h3>';
                echo 'Ingrédients';
                echo '</h3>';
                echo '<p>';
                echo $recette['ingredient'];
                echo '</p>';
                echo '<br>';

                echo '<h3>';
                echo 'Préparation';
                echo '</h3>';
                echo '<p>';
                echo $recette['preparation'];
                echo '</p>';
            
                
                $result = $pdo->query("SELECT recettes.membre, membres.idMembre, membres.nom, membres.prenom, membres.gravatar FROM recettes, membres WHERE membres.idMembre = recettes.membre AND idRecette='$myinputs'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";
               
                echo '<br>';
                echo '<div class="text-left">';
                echo '<div class="col-12">';
                echo "<h6>Recette créée par :</h6>";
                echo "<a class='col-12' href='membre-detail.php?idMembre=".$membres['membre']."'>";
                echo "<img class='rounded-circle' style='width : 100px; height : 100px;' src='".$gravatar;
                echo "</div>";
                echo '<p>'.$membres['prenom'].' '.$membres['nom'].'</p>';
                echo '</a>';
                echo "</div>";

                
            ?>
        </div>
        </div>
    </div>

<?php
include 'footer.php';
?>
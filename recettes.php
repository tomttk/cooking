<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Recettes</title>
</head>
<body>
    <br>
    <div class="container">
    <div style='background-color : #EFECCA;' class="row">
    <h1 class='col-12'>Toutes les recettes</h1>
        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                include 'auth.php';
                include 'function.php';

                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='2'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=2'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='3'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=3'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='4'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=4'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='5'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=5'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>
</div>
        
        <div style='background-color : #EFECCA;' class="row">
        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='6'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=6'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='7'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=7'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='8'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=8'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='9'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=9'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>
    </div>
    <div style='background-color : #EFECCA;' class="row">
        <div class="col-lg-3 col-sm-6 text-center">
        <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='10'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=10'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>
        <div class="col-lg-3 col-sm-6 text-center">
        <?php
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='11'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = "photos/recettes/".$recette['img'];
                echo "<a href='recette-detail.php?idRecette=11'>";
                echo "<img class='rounded img-thumbnail col-12' src=".$image;
                ?>
                <?php echo '<p>'.$recette['titre'].'</p>';
                echo '</a>';
                ?>
                <?php 
                echo "<div class='col-12'>".difficulteRecette();?>
                <?php echo tempsPreparation();?>
                <?php echo tempsCuisson();
                echo prix()."</div>";?>
                
        </div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>
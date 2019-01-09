<?php
$title='Coocking';
include 'header.php';
?>

<body>
<br>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div id="carousel-header" class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100 h-60" src="photos/recettes/quiche-legume-printemps.jpg" alt="Première photo">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 h-60" src="photos/recettes/carottes-glacees-orange.jpg" alt="Deuxième photo">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100 h-60" src="photos/recettes/penne-aux-petits-legumes.jpg" alt="Troisième photo">
        </div>
    </div>
    </div>
    <div class="row"></div>
    <div class="row" style='background-color : #EFECCA;'>
        <h2>Recettes du jour</h2>
    </div>

    <?php
        include 'function.php';
    ?>  
    
<div style='background-color : #EFECCA;' class="row">
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
    </div>
</div>
<div class="container">
    <div style='background-color : #EFECCA;' class="row">
    <h2 class='col-12'>Les meilleurs chefs du mois</h2>
        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM membres WHERE idMembre='4'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";
                echo "<a href='membre-detail.php?idMembre=4'>";
                echo "<img class='rounded-circle' style='width : 100px; height : 100px;' src='".$gravatar;
                echo '</a>';
                echo '<p>'.$membres['prenom'].' '.$membres['nom'].'</p>';
                ?>
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM membres WHERE idMembre='2'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";
                echo "<a href='membre-detail.php?idMembre=2'>";
                echo "<img class='rounded-circle' style='width : 100px; height : 100px;' src='".$gravatar;
                echo '</a>';
                echo '<p>'.$membres['prenom'].' '.$membres['nom'].'</p>';
                ?>
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM membres WHERE idMembre='3'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";
                echo "<a href='membre-detail.php?idMembre=3'>";
                echo "<img class='rounded-circle' style='width : 100px; height : 100px;' src='".$gravatar;
                echo '</a>';
                echo '<p>'.$membres['prenom'].' '.$membres['nom'].'</p>';
                ?>
        </div>

        <div class="col-lg-3 col-sm-6 text-center">
                <?php
                $result = $pdo->query("SELECT * FROM membres WHERE idMembre='6'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";
                echo "<a href='membre-detail.php?idMembre=6'>";
                echo "<img class='rounded-circle' style='width : 100px; height : 100px;' src='".$gravatar;
                echo '</a>';
                echo '<p>'.$membres['prenom'].' '.$membres['nom'].'</p>';
                echo '</a>';
                ?>
        </div>

    </div>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
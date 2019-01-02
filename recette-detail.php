<?php
include 'header.php';
?>
<head>
    <title>recette</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="rowrecette" style='background-color : #EFECCA;'>
            <?php
            include 'auth.php';
            $myinputs = filter_input(INPUT_GET, 'idRecette');
                $result = $pdo->query("SELECT * FROM recettes WHERE idRecette='$myinputs'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);
                $image = 'photos/recettes/'.$recette['img']."'";
                echo "<img id='imgrecette' class='rounded img-thumbnail col-12' src='".$image;
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
    
            ?>
        </div>
        </div>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
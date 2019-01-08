<?php
include 'header.php';
?>
<head>
    <title>Fruit</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="rowrecette" style='background-color : #EFECCA;'>
        <h1 class="col-12">Recettes à base de fruit</h1>
        <div class="col-lg-12 col-sm-6">
                <?php
                include 'auth.php';
                $result = $pdo->query("SELECT * FROM recettes WHERE categorie='4'");
                $recette = $result->fetch(PDO::FETCH_ASSOC);

                while($recette = $result->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<div class='container'>";
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
                }
                ?>
        </div>
        </div>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
<?php
include 'header.php';
?>
<head>
    <title>Membre</title>
</head>
<body>
    <div class="container">
        <div style='background-color : #EFECCA; padding-bottom : 1em;'>
            <?php
            include 'auth.php';
            $myinputs = filter_input(INPUT_GET, 'idMembre');
                $result = $pdo->query("SELECT * FROM membres WHERE idMembre='$myinputs'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";

                echo "<img class='rounded img-thumbnail col-2' style='width : 100px; height : 100px;' src='".$gravatar.">";
                echo '<p>'.$membres['prenom'].' '.$membres['nom'].'</p>';
    
            ?>
        </div>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
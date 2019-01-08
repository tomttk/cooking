<?php
include 'header.php';
?>
<head>
    <title>Membre</title>
</head>
<body>
    <br>
    <div class="container">
        <div style='background-color : #EFECCA; padding-bottom : 1em;'>
            <?php
            include 'auth.php';
            $myinputs = filter_input(INPUT_GET, 'idMembre', FILTER_SANITIZE_STRING);
                $result = $pdo->query("SELECT * FROM membres WHERE idMembre='$myinputs'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                $gravatar = "photos/gravatars/".$membres['gravatar']."'";

                echo "<img class='rounded-circle' style='width : 100px; height : 100px; margin : 1em 1em 1em 1em;' src='".$gravatar.">";
                echo '<h1 style="margin-left: 2%;">'.$membres['prenom'].' '.$membres['nom'].'</h1>';
    
            ?>
            <div class="col-lg-12 col-sm-6">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam rerum hic unde saepe quod corrupti repellat nostrum ipsa. Libero voluptas maiores id velit magnam, qui fugiat. Vitae, dolorem sit. Maxime. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis praesentium architecto quas perferendis beatae? Voluptatibus numquam dolorum consectetur placeat voluptatum? Cumque culpa itaque ullam odio ipsam amet quo pariatur! Ullam!</p>
            </div>
            <?php
            include 'auth.php';
            $myinputs = filter_input(INPUT_GET, 'idMembre');
                $result = $pdo->query("SELECT dateCrea FROM membres WHERE idMembre='$myinputs'");
                $membres = $result->fetch(PDO::FETCH_ASSOC);
                echo '<p>';
                $originalDate = $membres['dateCrea'];
                $newDate = date("d-m-Y", strtotime($originalDate)); 
                echo "Membre depuis le ".$newDate;
                echo '</p>';
            ?>
        </div>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
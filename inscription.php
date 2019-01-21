<?php
$title='Inscription';
include 'header.php';
?>

<div class="container">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
            <form id="register-form" action="" method="post" role="form" style="display: block;">
                <div class="form-group">
                    <input type="text" name="prenom" id="prenom" tabindex="1" class="form-control" placeholder="Prénom" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="nom" id="nom" tabindex="1" class="form-control" placeholder="Nom" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                </div>
                <!--
                    <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmez le mot de passe">
                </div>
-->
   
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Avatar :
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Envoyer" name="submit">
                </form>


                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="S'inscrire">
                        </div>
                    </div>
                </div>
            </form>
            
            
        </div>
        </div>
        </div>
        </div>
<?php
include 'auth.php';
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if(!empty($_POST)){
    $result = $pdo->exec("INSERT INTO membres ('prenom', 'nom', 'login', 'password') VALUES ('$nom', '$prenom', '$login', '$password')");
    $membre = $result->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<p>";
        echo "Bienvenue ".$membre['prenom']." !";
        echo "</p>";
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
}

$target_dir = "photos/gravatars/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Le fichier est une image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }
}
/*
if($_POST)
{
    debug($_POST);
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $login); 
    if(!$verif_caractere && (strlen($login) < 1 || strlen($login) > 20) ) // 
    {
        $contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    else
    {
        $membre = executeRequete("SELECT * FROM membres WHERE pseudo='$login'");
        if($membre->num_rows > 0)
        {
            $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // $_POST['mdp'] = md5($_POST['mdp']);
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            executeRequete("INSERT INTO membres (prenom, nom, login, password) VALUES ('$nom', '$prenom', '$login', '$password')");
            $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
        }
    }
}
*/
include 'footer.php';
?>
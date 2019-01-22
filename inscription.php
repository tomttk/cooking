<?php
$title='Inscription';
include 'header.php';
?>

<div class="container">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4">
            <form method="post" id="myform" action="inscription.php" enctype="multipart/form-data">
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
   
                <div class="form-group">
                    <label for="categorie">Avatar</label>
                    <input type="file" class="form-control" id="myimg" name="myimg" placeholder="Avatar">
                </div>


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

    if(!empty($_POST))
    {

        //Récupération des données POST
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        //Insertion de la demande en BDD
        $requete = "INSERT INTO membres (prenom, nom, login, password) VALUES ('$nom', '$prenom', '$login', '$password')";
        $result = $pdo->exec($requete);

        //Enregistrement de d'image
        $info = pathinfo($_FILES['myimg']['name']);
        $ext = $info['extension'];
        $newname = GUID() . "." . $ext; 
        $target = 'photos/gravatars/'.$newname;
        move_uploaded_file($_FILES['myimg']['tmp_name'], $target);

        echo '<div class="container alert-success col-2"><h5><strong>Vous êtes inscrit !</strong></h5></div>';

    }

    function GUID()
    {
        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
    
include 'footer.php';
?>
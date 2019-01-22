<?php
        
    include 'auth.php';

    if(!empty($_POST))
    {

        $gravatar = filter_input(INPUT_POST, 'gravatar', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $statut = filter_input(INPUT_POST, 'statut', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);

        // Insertion :
        $result = $pdo->exec("INSERT INTO membres (gravatar, 'login', 'password', statut, prenom, nom) VALUES ('$gravatar', '$login', $password, $statut, '$prenom', '$nom')");
        $result = $pdo->exec($requete);

        //Enregistrement de d'image
        $info = pathinfo($_FILES['myimg']['name']);
        $ext = $info['extension'];
        $newname = GUID() . "." . $ext; 
        $target = 'photos/gravatars/'.$newname;
        move_uploaded_file($_FILES['myimg']['tmp_name'], $target);

        echo ($result);

    }

    function GUID()
    {
        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    header('Location: admin_membres.php');
    exit;
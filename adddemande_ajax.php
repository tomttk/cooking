<?php
        
    include 'auth.php';

    if(!empty($_POST))
    {

        //Récupération des données POST
        $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
        $chapo = filter_input(INPUT_POST, 'chapo', FILTER_SANITIZE_STRING);
        $preparation = filter_input(INPUT_POST, 'preparation', FILTER_SANITIZE_STRING);
        $ingredient = filter_input(INPUT_POST, 'ingredient', FILTER_SANITIZE_STRING);
        $categorie = filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING);
        $tempsCuisson = filter_input(INPUT_POST, 'tempsCuisson', FILTER_SANITIZE_STRING);
        $tempsPreparation = filter_input(INPUT_POST, 'tempsPreparation', FILTER_SANITIZE_STRING);
        $difficulte = filter_input(INPUT_POST, 'difficulte', FILTER_SANITIZE_STRING);
        $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_STRING);

        //Insertion de la demande en BDD
        $requete = "INSERT INTO recettes (titre, chapo, preparation, ingredient, categorie, tempsCuisson, tempsPreparation, difficulte, prix) VALUES ('$titre', '$chapo', '$preparation', '$ingredient', '$categorie', '$tempsCuisson', '$tempsPreparation', '$difficulte', '$prix')";
        $result = $pdo->exec($requete);

        //Enregistrement de d'image
        $info = pathinfo($_FILES['myimg']['name']);
        $ext = $info['extension'];
        $newname = GUID() . "." . $ext; 
        $target = 'photos/recettes/'.$newname;
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

    header('Location: admin.php');
    exit;
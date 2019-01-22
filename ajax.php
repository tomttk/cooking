<?php
include 'auth.php';

    if(!empty($_POST))
    {

        if ($_POST['script'] == "addDemande") {

            $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING);
            $chapo = filter_input(INPUT_POST, 'chapo', FILTER_SANITIZE_STRING);
            $preparation = filter_input(INPUT_POST, 'preparation', FILTER_SANITIZE_STRING);
            $ingredient = filter_input(INPUT_POST, 'ingredient', FILTER_SANITIZE_STRING);
            $categorie = filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING);
            $tempsCuisson = filter_input(INPUT_POST, 'tempsCuisson', FILTER_SANITIZE_STRING);
            $tempsPreparation = filter_input(INPUT_POST, 'tempsPreparation', FILTER_SANITIZE_STRING);
            $difficulte = filter_input(INPUT_POST, 'difficulte', FILTER_SANITIZE_STRING);
            $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_STRING);
    
            $requete = "INSERT INTO recettes (titre, chapo, preparation, ingredient, categorie, tempsCuisson, tempsPreparation, difficulte, prix) VALUES ('$titre', '$chapo', $preparation, $ingredient, '$categorie', '$tempsCuisson', '$tempsPreparation', '$difficulte', '$prix')";
    
            // Insertion :
            $result = $pdo->exec($requete);
            echo $result;

        }

    }


    if(!empty($_GET))
    {
        if ($_GET['script'] == "getInfos") {
            $idRecette = filter_input(INPUT_GET, 'idRecette', FILTER_SANITIZE_STRING);
            $result = $pdo->query("SELECT * FROM recettes WHERE idRecette = " . $idRecette);
            $demande = $result->fetch(PDO::FETCH_ASSOC);
            echo json_encode($demande);
        }
        if ($_GET['script'] == "deleteDemande") {
            $idRecette = filter_input(INPUT_GET, 'idRecette', FILTER_SANITIZE_STRING);
            $result = $pdo->exec("DELETE FROM recettes WHERE idRecette = " . $idRecette);
            echo $result;
        }
    }


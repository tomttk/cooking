<?php
        
   include 'auth.php';

    if(!empty($_POST))
    {
        $idRecette = filter_input(INPUT_POST, 'idRecette', FILTER_SANITIZE_STRING);
        $result = $pdo->query("SELECT * FROM recettes WHERE idRecette = " . $idRecette);
        $demande = $result->fetch(PDO::FETCH_ASSOC);
        echo json_encode($demande);
    }
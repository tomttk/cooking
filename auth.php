<?php
$pdo = new PDO('mysql:host=localhost;dbname=site_cooking', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

// change encodage
$mysqli = new mysqli("localhost", "root", "", "site_cooking");
$mysqli->set_charset("utf8");
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<div class="container">
  <div class="row">
    <div class="col-lg-2 col-sm-4">
    <a class="navbar-brand" href="index.php">
    <img src="images\logo-cooking.png" width="150" height="50" alt="logo">
    </a>
    </div>
    <div class="col-lg-6 col-sm-4">
      <h3>Rechercher une recette, un ingrédient, de l'aide...</h3>
    </div>
    <div class="col-lg-4 col-sm-4">
    <a class="navbar-brand" href="connexion.php">
      <img src="images\round-account-button-with-user-inside.png" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" href="https://www.facebook.com" target="_blank">
      <img src="images\facebook.png" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" href="https://www.twitter.com" target="_blank">
      <img src="images\twitter.png" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" href="https://www.youtube.com" target="_blank">
      <img src="images\youtube.png" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" href="https://www.google.com" target="_blank">
      <img src="images\google.png" width="30" height="30" alt="">
    </a>
    </div>
  </div>


<header>
  <div class="row"></div>
    <nav class="navbar navbar-expand-lg" style="background-color: #BEEB9F;">
    <nav class="navbar">
      <a class="navbar-brand" href="index.php">
        <img src="images\home-icon-silhouette.png" width="30" height="30" alt="">
      </a>
    </nav>

      <div class="navbar navbar-default col-lg-8 col-md-4 col-sm-12" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="recettes.php">Recettes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viande.php">Viande</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="legume.php">Légume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="poisson.php">Poisson</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fruit.php">Fruit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
        <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="search" placeholder="Je recherche" aria-label="Search">
          <button value="Search" class="btn my-2 my-sm-0" name="submit" type="submit"><img src="images\search.png" alt=""></button>
        </form>
</nav>
</header>
</div>
        
<?php
include 'auth.php';
?>

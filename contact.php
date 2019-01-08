<?php
include 'header.php';
?>
<head>
    <title>Contact</title>
</head>
<div class="container">
	<div class="row">
		<form role="form" action="contact.php" method="post" id="contact-form" class="contact-form">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Nom">
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="message" id="message" placeholder="Message"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" id="contactbtn" class="btn main-btn pull-right">Envoyer</button>
                  </div>
                  </div>
                </form>
	</div>
</div>

<?php

include 'auth.php';
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
if(!empty($_POST)){
    $result = $pdo->exec("INSERT INTO contact (nom, email, message) VALUES ('$name', '$email','$message')");
    
    if ($result) {
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<p>";
        echo "Votre message a bien été envoyé !";
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
?>

<?php
include 'footer.php';
?>
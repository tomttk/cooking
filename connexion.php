<?php
$title='Connexion';
include 'header.php';
include 'session.php';
?>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link"></a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link"></a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="connexion.php" method="post" style="display: block;">
									<div class="form-group">
										<input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember">Se souvenir de moi</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<p>Pas de compte ? <a href="inscription.php" tabindex="5" class="">Inscrivez-vous</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
include 'auth.php';
$result = $pdo->query("SELECT login, password FROM membres");
$membres = $result->fetch(PDO::FETCH_ASSOC);

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if(isset($_SESSION['login']))
{
	echo "<div class='container col-3'><div class='alert alert-success' role='alert'><strong>Vous êtes connecté, " . $login . " !</strong></div></div>";
}
else
{
    if(!empty($_POST))
    {
        $_SESSION['login'] = $login;
		$_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);
		echo "<div class='container col-3'><div class='alert alert-success' role='alert'><strong>Vous êtes connecté, " . $login . " !</strong></div></div>";
        
    }
}


include 'footer.php';
?>
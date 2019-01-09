<?php
$title='Connexion';
include 'header.php';
?>

<body>
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
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nom d'utilisateur" value="">
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
													<a href="" tabindex="5" class="forgot-password">Mot de passe oublié ?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!--
									<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </body>

<?php
//include 'auth.php';
//$myusername = filter_input(INPUT_GET, 'username');
//$mypassword = filter_input(INPUT_GET, 'password');
    //$result = $pdo->query("SELECT * FROM membres WHERE (`login` LIKE '%$myusername%') AND (`password` LIKE '%$mypassword%')");
	//$membres = $result->fetch(PDO::FETCH_ASSOC);
	
$mysqli = new Mysqli("localhost", "root", "", "site_cooking");

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
	extract($_POST);

	$sql = "select password from membres where login='".$login."'";
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  
	$data = mysql_fetch_assoc($req);
  
	if($data['password'] != $pass) {
	  echo '<p>Mauvais login / password. Merci de recommencer</p>';
	  exit;
	}
	else {
	  session_start();
	  $_SESSION['login'] = $login;
	  
	  echo 'Vous etes bien logué';
	}    
  }
  else {
	echo "<div class='container'>";
	echo "<div class='row'>";
	//echo '<p>Vous avez oublié de remplir un champ.</p>';
	echo "</div>";
	echo "</div>";
	 exit;
  }
/*
	if (isset($_POST['submit'])) {
 
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
	 
			 $check = mysqli_query( $conn, "SELECT * FROM membres WHERE login = '$username' AND password= '$password'");
	 
			$nb_rows = mysqli_num_rows($check);
			if ($nb_rows >0) {
				session_start() ;
				$_SESSION['username'] = $username;
	 
					header("location:index.php") ;
			} else {
				echo "Mauvais Login/password";
			}
		} else {
			echo 'Veuillez remplir tous les champs';
		}
	}
*/
/* 
	if($_POST)
{
	$_SESSION["username"] = $_POST['username'];
	$_SESSION["password"] = $_POST['password'];
}
//--------------------------------------
if(isset($_SESSION['username']))
{
	echo "votre pseudo est: " . $_SESSION['username'] . "<br />";
} 
else
{
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<div class='col-lg-3 col-sm-6 text-center'>";
	echo '<p>erreur</p>';
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
*/
?>

<?php
include 'footer.php';
?>
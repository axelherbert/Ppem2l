<!DOCTYPE html>
<html>
<?php
session_start();
ini_set('display_errors', true); ?>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.js"></script>
<head>
	<title>Connexion</title>
</head>
<body>

	<?php $page="Connexion"; ?>
	<?php include "assets/inc/navbar.php"; ?>
	<center><img src="assets/images/logo-m2l.png" alt="Logo" /></center><br>
	<?php if (!isset($_SESSION['id']))
	{ ?>
		<div class="container">
			<div class="row">
				<div class='col-md-3'></div>
				<div class="col-md-6">
					<div class="login-box well">
						<form method="post" action="logining.php">
							<legend>Se Connecter</legend>
							<div class="form-group">
								<label for="username-email">Pseudo</label>
								<input value='' id="username-email" placeholder="Pseudo" type="text" class="form-control" name="pseudo" />
							</div>
							<div class="form-group">
								<label for="password">Mot de passe</label>
								<input id="password" value='' placeholder="Mot de passe" type="password" class="form-control" name="password" />
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success btn-login-submit btn-block m-t-md" value="Connexion" />
							</div>
							<input type="hidden" name="askConnect" value="true">
							<div class="form-group">
								<p class="text-center m-t-xs text-sm">Vous n'avez pas de compte?</p>
								<a href="register.php" class="btn btn-primary btn-block m-t-md">Creer un compte</a>
							</div>
						</form>
					</div>
				</div>
				<div class='col-md-3'></div>
			</div>
		</div> <?php }
		else {
			echo "<center><p style>Vous êtes déjà connecté</p></center>";
		} ?>
	</body>
	</html>

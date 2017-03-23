<!DOCTYPE html>
<html>
<?php ini_set('display_errors', true); ?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
<link rel="stylesheet" href="assets/css/home.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/home.js"></script>
<head>
	<title>Connexion</title>
</head>
<body>

<?php $page="Connexion"; ?>
<?php include "assets/inc/navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                    <form action="">
                        <legend>Se Connecter</legend>
                        <div class="form-group">
                            <label for="username-email">E-mail ou pseudo</label>
                            <input value='' id="username-email" placeholder="E-mail ou pseudo" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input id="password" value='' placeholder="Mot de passe" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-login-submit btn-block m-t-md" value="Connexion" />
                        </div>
                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Vous n'avez pas de compte?</p>
                            <a href="register.php" class="btn btn-primary btn-block m-t-md">Creer un compte</a>
                        </div>
                    </form>

            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>
</body>
</html>

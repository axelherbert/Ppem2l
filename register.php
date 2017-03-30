<!DOCTYPE html>
<html>
<?php ini_set('display_errors', true); ?>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
<link rel="stylesheet" href="assets/css/home.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/home.js"></script>
<head>
	<title>Inscription</title>
</head>
<body>

<?php $page="Inscription"; ?>
<?php include "assets/inc/navbar.php"; ?>
<center><img src="assets/images/logo-m2l.png" alt="Logo" /></center><br>
<div class="container">
    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                    <form action="">
                        <legend>S'Inscrire</legend>
                        <div class="form-group">
                            <label for="username-email">E-mail ou pseudo</label>
                            <input value='' id="username-email" placeholder="E-mail ou pseudo" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input id="password" value='' placeholder="Mot de passe" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Nom</label>
                            <input id="password" value='' placeholder="Nom" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="password">Prenom</label>
                            <input id="password" value='' placeholder="Prenom" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputSexe1">Sexe</label>
                          <select class="form-control" id="exampleInputSexe1">
                            <option>Homme</option>
                            <option>Femme</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-login-submit btn-block m-t-md" value="Inscription" />
                        </div>
                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Vous avez deja un compte?</p>
                            <a href="login.php" class="btn btn-primary btn-block m-t-md">Se connecter</a>
                        </div>
                    </form>

            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>
</body>
</html>

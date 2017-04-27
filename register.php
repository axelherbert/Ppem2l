<!DOCTYPE html>
<html>
<?php
session_start();
ini_set('display_errors', true); ?>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
<link rel="stylesheet" href="assets/css/home.css">
<link rel="stylesheet" href="assets/css/footer.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
                    <form action="assets\inc\add_user.php" method="post">
                        <legend>S'Inscrire</legend>
                        <div class="form-group">
                            <label for="username-pseudo">Pseudo</label>
                            <input value='' id="username-pseudo" placeholder="Pseudo" type="text" class="form-control" name="pseudo"/>
                        </div>
												<div class="form-group">
                            <label for="username-email">E-mail</label>
                            <input value='' id="username-email" placeholder="E-mail" type="text" class="form-control" name="mail"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input id="password" value='' placeholder="Mot de passe" type="password" class="form-control" name="password"/>
                        </div>
												<div class="form-group">
                            <label for="password">Prenom</label>
                            <input id="password" value='' placeholder="Prenom" type="text" class="form-control" name="prenom"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Nom</label>
                            <input id="password" value='' placeholder="Nom" type="text" class="form-control" name="nom"/>
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
<footer class="container-fluid text-center bg-lightgray">

        <div class="copyrights" style="margin-top:25px;">
            <p>PPE M2L © 2017 <span>Crée par Axel, Antoine, Nicolas, Mathieu et Manon.</span></p>
        </div>
</footer>
</body>
</html>

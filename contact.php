<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<?php ini_set("display_errors",0);error_reporting(0);
	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/home.css">

<?php
$page ='Contact';
include "assets/inc/navbar.php";?>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class="h2">
                  COORDONNEES <small>Maison des Ligues de Lorraine</small></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
							<form id="contact" method="post" action="send.php">
								<fieldset><legend>Vos coordonnées</legend>
									<p><label for="nom">Nom :</label></br><input type="text" id="nom" name="nom" tabindex="1" class="form-control" /></p>
									<p><label for="email">Email :</label></br><input type="text" id="email" name="email" tabindex="2" class="form-control" /></p>
								</fieldset>

								<fieldset><legend>Votre message :</legend>
									<p><label for="objet">Objet :</label></br><input type="text" id="objet" name="objet" tabindex="3" class="form-control"/></p>
									<p><label for="message">Message :</label></br><textarea id="message" name="message" tabindex="4" cols="30" rows="8" class="form-control"></textarea></p>
								</fieldset>

								<div style="text-align:center;"><input type="submit" name="envoi" class="btn btn-success" value="Envoyer" /></div>
							</form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend>L'adresse</legend>
            <address>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.404560983434!2d6.211964515430417!3d48.69774791995857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794983386479251%3A0xc58bc09976474b86!2s13+Rue+Jean+Moulin%2C+54510+Tomblaine!5e0!3m2!1sfr!2sfr!4v1488560215757" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>            </address>
            <address>
                <strong>Adresse Email</strong><br><br>
                <a href="mailto:#">contact@m2l.fr</a>
            </address>
            </form>
        </div>
    </div>
</div>

</body>
</html>

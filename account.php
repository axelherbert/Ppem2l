<!DOCTYPE html>
<?php session_start(); ?>
<html>
<?php
ini_set('display_errors', true); ?>
  <head>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <head>
    	<title>Mon compte</title>
    </head>
  </head>
  <body>
    <?php $page="Accueil"; ?>
    <?php include "assets/inc/navbar.php"; ?>

    	<div class="jumbotron jumbotron-sm">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-lg-8">
              <h2 class="h2">
                Mon compte <small>Maison des Ligues de Lorraine</small>
    					</h2>
            </div>
    				<div class="col-sm-4 col-lg-4">
    					<center><img src="assets/images/logo-m2l.png" alt="Logo" /></center><br>
    				</div>
          </div>
        </div>
    	</div>
      <?php



      echo "Pseudo : " . $_SESSION['pseudo']. "<br>";
      echo "Prenom : " . $_SESSION['prenom']. "<br>";
      echo "Type : " . $_SESSION['type']. "<br>";
      echo "Email : " . $_SESSION['mail']. "<br>";
       ?>
  </body>
</html>

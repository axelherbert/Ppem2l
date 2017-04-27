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
        <center>
          <div class="row">
              <h2 class="h2">Mon compte</h2>
          </div>
        </center>
        </div>
    	</div>
      <center>
      <?php
      echo "<h5><u><strong>Pseudo</u> : </strong>" . $_SESSION['pseudo']. "</h5><br>";
      echo "<h5><u><strong>Email</u> : </strong>" . $_SESSION['mail']. "</h5><br>";
      echo "<h5><u><strong>Prenom</u> : </strong>" . $_SESSION['prenom']. "</h5><br>";
      echo "<h5><u><strong>Nom</u> : </strong>" . $_SESSION['nom']. "</h5><br>";
      echo "<h5><u><strong>Type</u> : </strong>" . $_SESSION['type']. "</h5><br>";
       ?>
     </center>
  </body>
</html>

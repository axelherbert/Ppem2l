<!DOCTYPE html>
<html>
<?php
session_start();
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
          </div>
        </div>
    	</div>
      <center>
      <?php
      echo "<h5><strong>Pseudo : </strong>" . $_SESSION['pseudo']. "</h5><br>";
      echo "<h5><strong>Prenom : </strong>" . $_SESSION['prenom']. "</h5><br>";
      echo "<h5><strong>Type : </strong>" . $_SESSION['type']. "</h5><br>";
      echo "<h5><strong>Email : </strong>" . $_SESSION['mail']. "</h5><br>";
       ?>
     </center>
  </body>
</html>

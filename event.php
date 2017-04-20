<!DOCTYPE html>
<html>
<?php
session_start();
ini_set('display_errors', true); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/event.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/panel.css">
  <head>
    <meta charset="utf-8">
    <title>Evénement</title>
  </head>
  <body>
    <?php
    include 'assets/inc/navbar.php';
    include 'assets/inc/event.php';

  if (isset($_SESSION['id'])){
    	            ?><a href="addevent.php">Créer</a><?php
    	          }
    						else {

    						} ?>

  </body>
</html>

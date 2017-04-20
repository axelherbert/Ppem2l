<!DOCTYPE html>
<html>
<?php
session_start();
ini_set('display_errors', true); ?>
<script src="assets/js/jquery-3.1.1.js"></script>
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
    ?>
<a href="addevent.php">Créer</a>

  </body>
</html>

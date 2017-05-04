<!DOCTYPE html>
<?php session_start(); ?>
<html>
<?php
ini_set('display_errors', true); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/post.css">
<link rel="stylesheet" href="assets/css/event.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/panel.css">
<link rel="stylesheet" href="assets/css/footer.css">
  <head>
    <meta charset="utf-8">
    <title>Evénement</title>
  </head>
  <body>
    <?php
    include 'assets/inc/navbar.php';
    include 'assets/inc/event.php';

  if (isset($_SESSION['id'])){
    	            ?><center><a href="addevent.php" class="btn btn-primary">Éditer un événement</a></center><?php
    	          }
    						else {

    						} ?>
<footer class="container-fluid text-center bg-lightgray">

<div class="copyrights" style="margin-top:25px;">
<p>PPE M2L © 2017 <span>Crée par Axel, Antoine, Nicolas, Mathieu et Manon.</span></p>
</div>
</footer>
  </body>
</html>

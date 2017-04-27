<!DOCTYPE html>
<?php session_start(); ?>
<html>
<?php
ini_set('display_errors', true); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<script src="assets/css/bootstrapp.css"></script>
<link rel="stylesheet" href="assets/css/footer.css">
<head>
	<title>Home</title>
</head>
<body>
<?php include "assets/inc/navbar.php";
include "assets/inc/booking.php";?>
<footer class="container-fluid text-center bg-lightgray">

        <div class="copyrights" style="margin-top:25px;">
            <p>PPE M2L © 2017 <span>Crée par Axel, Antoine, Nicolas, Mathieu et Manon.</span></p>
        </div>
</footer>
</body>
</html>

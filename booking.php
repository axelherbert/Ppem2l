<!DOCTYPE html>
<?php session_start(); ?>
<html>
<?php
ini_set('display_errors', true); ?>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/panel.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<head>
	<title>Home</title>
</head>
<body>
<?php
include "assets/inc/navbar.php";
include "assets/inc/tab-room.php";
?>
<footer>
<?php include "assets/inc/footer.php" ?>
</footer>
</body>
</html>

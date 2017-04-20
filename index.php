<!DOCTYPE html>
<html>
<?php
session_start();
ini_set('display_errors', true); ?>

<?php

if (isset($_POST['askConnect'])) {

	include "assets/inc/connect.php";

	$bdd = connectToSQL();

  // Vérification des identifiants
  $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
  $req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'password' => $_POST['password']));

    $resultat = $req->fetch();

    if (!$resultat) {
      header ("location : login.php");
    }
    else {
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['mail'] = $resultat['mail'];
      $_SESSION['prenom'] = $resultat['prenom'];
      $_SESSION['nom'] = $resultat['nom'];
      $_SESSION['type'] = $resultat['type'];
			$_SESSION['pseudo'] = $resultat['pseudo'];

      //echo "<meta http-equiv='refresh' content='0'>";
			header ("location : index.php");
    }

  }
  else {

  }

  ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/home.css">
<head>
	<title>Accueil</title>
</head>
<body>


<?php $page="Accueil"; ?>
<?php include "assets/inc/navbar.php"; ?>

	<div class="jumbotron jumbotron-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-8">
          <h2 class="h2">
            PRESENTATION <small>Maison des Ligues de Lorraine</small>
					</h2>
        </div>
      </div>
    </div>
	</div>
	<div class="row">
		<div class="container">
      <div id="presentation">
        <div class="wrap">
          <section>
						<!-- <center><img src="assets/images/logo-m2l.png" alt="Logo" /></center><br> !-->
						<div class="col-sm-8">
          	<p>
            	<br />La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales de Lorraine et à d’autres structures hébergées.
							<br /> La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL).
							<br /> Installée depuis 2003 dans la banlieue Nancéienne, la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
        			<br />
							<br />
          	</p>
						</div>
        	</section>
				</div>
			</div>
			<div class="col-sm-4" style="background-color:#eaeaea; border-style: groove;">
				<h2>Le mot du Président</h2>
							Je sais bien que ma manière de parler, fort et cru, est une transgression de cet ordre mielleux.
				<br />Elle est une ligne d'action autant qu'un état d'esprit ...
				<br /><br />
			</div>
		</div>
	</div>

<div class="container">
		<div class="row">
				<div class="span12">
						<div class="well">
								<div id="myCarousel" class="carousel fdi-Carousel slide">

										<div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
												<div class="carousel-inner onebyone-carosel">
														<div class="item active">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/Tennis.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Tennis</div>
																</div>
														</div>
														<div class="item active">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/natation.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Natation</div>
																</div>
														</div>
														<div class="item active">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/boxe.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Boxe</div>
																</div>
														</div>
														<div class="item active">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/football.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Football</div>
																</div>
														</div>
												</div>
												<a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
												<a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
										</div>

								</div>
						</div>
				</div>
		</div>
</div>
<?php include "assets/inc/footer.php" ?>
</body>
</html>

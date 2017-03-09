<!DOCTYPE html>
<html>
<?php ini_set('display_errors', true); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
<link rel="stylesheet" href="assets/css/home.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/home.js"></script>
<head>
	<title>Home</title>
</head>
<body>

<?php $page="Accueil"; ?>
<?php include "assets/inc/navbar.php"; ?>

	<div class="jumbotron jumbotron-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <h2 class="h2">
            PRESENTATION <small>Maison des Ligues de Lorraine</small>
					</h2>
        </div>
      </div>
    </div>
	</div>

<div class="container">
      <div id="presentation">
        <div class="wrap">
          <section>
          <p>
            <br />La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales de Lorraine et à d’autres structures hébergées.
						<br /> La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL).
						<br /> Installée depuis 2003 dans la banlieue Nancéienne, la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
        		<br />
						<br />
          </p>
        </section>
			</div>
		</div>
</div>

<div class="container">
		<div class="row">
				<div class="span12">
						<div class="well">
								<div id="myCarousel" class="carousel fdi-Carousel slide">
								 <!-- Carousel items -->
										<div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
												<div class="carousel-inner onebyone-carosel">
														<div class="item active">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/Tennis.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Tennis</div>
																</div>
														</div>
														<div class="item">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/natation.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Natation</div>
																</div>
														</div>
														<div class="item">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/boxe.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Boxe</div>
																</div>
														</div>
														<div class="item">
																<div class="col-md-4">
																		<a href="#"><img src="assets/images/football.jpg" class="img-responsive center-block"></a>
																		<div class="text-center">Football</div>
																</div>
														</div>
												</div>
												<a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
												<a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
										</div>
										<!--/carousel-inner-->
								</div><!--/myCarousel-->
						</div><!--/well-->
				</div>
		</div>
</div>
</body>
</html>

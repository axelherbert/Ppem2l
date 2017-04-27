<?php session_start(); ?>
<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/home.css">
<link rel="stylesheet" href="assets/css/coursel.css">
<link rel="stylesheet" href="assets/css/footer.css">
<?php
ini_set('display_errors', true); ?>





<head>
	<title>Accueil</title>
</head>
<body>


<?php $page="Accueil"; ?>
<?php include "assets/inc/navbar.php"; ?>

	<div class="jumbotron jumbotron-sm">
    <div class="container">
			<center>
				<div class="row">
						<h2 class="h2">Presentation</h2>
				</div>
			</center>
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
				<h3>Le mot du Président</h3>
				Fier de proposer une structure proposant depuis 2003, l'acceuil de 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
				<br /><br />
			</div>
		</div>
	</div>
</br>

<div class="container">
		<div class="row">
				<div class="span12">
						<div class="well">
							<div id="my_carousel" class="carousel slide" data-ride="carousel">
<!-- Bulles -->
<ol class="carousel-indicators">
<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
<li data-target="#my_carousel" data-slide-to="1"></li>
<li data-target="#my_carousel" data-slide-to="2"></li>
</ol>
<!-- Slides -->
<div class="carousel-inner">
<!-- Page 1 -->
<div class="item active">
<div class="carousel-page">
<img src="assets/images/Tennis.jpg" class="img-responsive" style="margin:0px auto;" />
</div>
<div class="carousel-caption">Tennis</div>
</div>
<!-- Page 2 -->
<div class="item">
<div class="carousel-page"><img src="assets/images/natation.jpg" class="img-responsive img-rounded"
style="margin:0px auto;"  /></div>
<div class="carousel-caption">Natation</div>
</div>
<!-- Page 3 -->
<div class="item">
<div class="carousel-page">
<img src="assets/images/boxe.jpg" class="img-responsive img-rounded"
style="margin:0px auto;max-height:100%;"  />
</div>
<div class="carousel-caption">Boxe</div>
</div>
</div>
<!-- Contrôles -->
<a class="left carousel-control" href="#my_carousel" data-slide="prev">
<span class=""></span>
</a>
<a class="right carousel-control" href="#my_carousel" data-slide="next">
<span class=""></span>
</a>
</div>

								</div>
						</div>
				</div>
		</div>
</div>
<footer class="container-fluid text-center bg-lightgray">
<div class="copyrights" style="margin-top:25px;">
      <p>PPE M2L © 2017 <span>Crée par Axel, Antoine, Nicolas, Mathieu et Manon.</span></p>
</div>
</footer>

</div>
</body>
</html>

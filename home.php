<?php ini_set('display_errors', true); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     width: 60%;
		 height: 150px;
     margin: auto;
 }
 </style>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">


        	<?php include "navbar.php"; ?>

      <div id="presentation">
        <div class="wrap">
          <section>
          <h1>Présentation de la maison des ligues de Lorraine</h1>
          <p>
            <br />
            <br />Une maison au service du sport En décidant en 2000 de l'acquisition et la réhabilitation de la Maison Régionale des Sports de Lorraine à Tomblaine, la région Lorraine a voulu répondre à des besoins de structuration du mouvement sportif lorrain, qui représente aujourd'hui 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
            <br />
            <br />Véritable lieu de vie, cette Maison propose aux Ligues et Comités, des locaux fonctionnels situés à l'est de Nancy, permettant ainsi aux dirigeants, aux bénévoles et aux salariés d'échanger, de partager, de se former et de se regrouper dans des conditions optimales. Ce sont ici plus de 3 550 clubs lorrains, toutes disciplines confondues, qui bénéficient de cet outil. Un tel établissement est à la fois un facteur fort de cohésion et de qualité du sport régional.
            <br />
            <br />Il a pour vocation d'héberger les structures sportives régionales, de leur fournir des services administratifs, comptables et juridiques. Entièrement financée par la région Lorraine, la Maison Régionale des Sports de Lorraine est gérée en partenariat par la région Lorraine et le Comité Régional Olympique et Sportif de Lorraine (CROSL) qui est l'initiateur d'une politique sportive régionale unitaire.
            <br />
            <br />
          </p>
        </section>
        <section>
          <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="natation.jpg" alt="Natation" width="460" height="345">
      </div>

      <div class="item">
        <img src="Tennis.jpg" alt="Tennis" width="460" height="345">
      </div>

      <div class="item">
        <img src="boxe.jpg" alt="Boxe" width="460" height="345">
      </div>

			<div class="item">
        <img src="football.jpg" alt="Football" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<br />
	<br />
	<br />
	<br />
  </section>
</body>

</html>

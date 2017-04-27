<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>News</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/rss.js"></script>
<link rel="stylesheet" href="assets/css/footer.css">

    <script>
      jQuery(function($) {
        $("#rss-foot").rss("http://www.lequipe.fr/rss/actu_rss_Football.xml")
      })
    </script>
      <script>
      jQuery(function($) {
        $("#rss-tennis").rss("http://www.lequipe.fr/rss/actu_rss_Tennis.xml")
      })
    </script>
     <script>
      jQuery(function($) {
        $("#rss-rugby").rss("http://www.lequipe.fr/rss/actu_rss_Rugby.xml")
      })
    </script>
    <script>
      jQuery(function($) {
        $("#rss-basket").rss("http://www.lequipe.fr/rss/actu_rss_Basket.xml")
      })
    </script>
    <script>
      jQuery(function($) {
        $("#rss-hand").rss("http://www.lequipe.fr/rss/actu_rss_Hand.xml")
      })
    </script>

</head>
<body>
		<?php include "assets/inc/navbar.php"; ?>

	<div class="jumbotron jumbotron-sm">
    <div class="container">
			<center>
				<div class="row">
						<h2 class="h2">News</h2>
				</div>
			</center>
      </div>
    </div>
	</div>
<div style="clear: both;">
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
						<h1>Football</h1>
						<div id="rss-foot"></div>
					</p>
					</div>
				</section>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="assets/images/football.jpg"></img>
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
						<h1>Tennis</h1>
						<div id="rss-tennis"></div>
					</p>
					</div>
				</section>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="assets/images/tennis.jpg"></img>
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
						<h1>Rugby</h1>
						<div id="rss-rugby"></div>
					</p>
					</div>
				</section>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="assets/images/rugby.gif"></img>
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
						<h1>Basket</h1>
						<div id="rss-basket"></div>
					</p>
					</div>
				</section>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="assets/images/basket.gif"></img>
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
						<h1>Hand</h1>
						<div id="rss-hand"></div>
					</p>
					</div>
				</section>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="assets/images/handball.gif"></img>
		</div>
	</div>
</div>

<footer class="container-fluid text-center bg-lightgray">
<div class="copyrights" style="margin-top:25px;">
<p>PPE M2L © 2017 <span>Crée par Axel, Antoine, Nicolas, Mathieu et Manon.</span></p>
</div>
</footer>

</body>
</html>

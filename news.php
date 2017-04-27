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
<h1> Football</h1>
<div id="rss-foot"></div>
<h1> Tennis</h1>
<div id="rss-tennis"></div>
<h1> Rugby</h1>
<div id="rss-rugby"></div>
<h1> Basket</h1>
<div id="rss-basket"></div>
<h1> Hand</h1>
<div id="rss-hand"></div>

</body>
</html>

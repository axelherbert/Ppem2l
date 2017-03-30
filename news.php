<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	 <title>jquery.rss example</title>
	 <link rel="stylesheet" href="assets/css/bootstrapp.css">
	 <link rel="stylesheet" href="assets/css/home.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/rss.js"></script>
    <script>
      jQuery(function($) {
        $("#rss-feeds").rss("http://www.lequipe.fr/rss/actu_rss_Football.xml")
      })
    </script>

</head>
<body>


	<?php include "assets/inc/navbar.php";?>

	<div class="jumbotron jumbotron-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-8">
          <h2 class="h2">News</h2>
        </div>
				<div class="col-sm-4 col-lg-4">
					<center><img src="assets/images/logo-m2l.png" alt="Logo" /></center><br>
				</div>
      </div>
    </div>
	</div>

<iframe width=600px height=400px src="https://feed.mikle.com/widget/v2/19732/"></iframe>

<div style="clear: both;">
</div>
</div>
<div id="rss-feeds"></div>


</body>
</html>

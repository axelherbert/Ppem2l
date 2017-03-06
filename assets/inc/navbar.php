<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
    <?php

function echoActiveClassIfRequestMatches($requestUri)
{
  $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

  if ($current_file_name == $requestUri)
      echo 'class="active"';
}

?>
    </script>
    <div class="container">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php">PPE</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <ul class="nav navbar-nav">
                          <?php if($page=='Accueil'){?>
                                          <li class="active"><?}
                                  elseif($page!='Accueil'){?>
                                          <li><?}?>
                  <a href="./index.php">Accueil</a></li>
                  <?php if($page=='Rencontre'){?>
                                  <li class="active"><?}
                          elseif($page!='Rencontre'){?>
                                  <li><?}?>
                  <a ng href="./rencontre.php">Rencontre</a></li>
                  <?php if($page=='Contact'){?>
                                  <li class="active"><?}
                          elseif($page!='Contact'){?>
                                  <li><?}?>
                  <a href="./contact.php">Contact</a></li>
                  <?php if($page=='booking'){?>
                                  <li class="active"><?}
                          elseif($page!='booking'){?>
                                  <li><?}?>
                  <a href="booking.php">Réservation salles</a></li>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php if($page=='Admin'){?>
                                  <li class="active"><?}
                          elseif($page!='Admin'){?>
                                  <li><?}?>
                  <a href="./admin.php">Admin</a></li>
                </ul>
              </div>
              <div ng-view></div>
            </div>
          </nav>
  </body>
</html>

<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/event.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">

<?php
session_start();
ini_set('display_errors', true);?>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
  <?php include "assets/inc/navbar.php"; ?>
  <body>
      <?php

      include 'assets/inc/connect.php';

      $bdd = connectToSQL();

      $reponse = $bdd->query('SELECT * FROM `event` WHERE `users` = "'.$_SESSION['pseudo'].'"');
      // $donnees = $reponse->fetch();
?>
    <div class="container">
  <div class="row">
    <?php while ($donnees = $reponse->fetch())
    {
      $date = date_create_from_format('Y-m-d', "$donnees[dateevent]");
      $hdebut = DateTime::createFromFormat('H:i:s', "$donnees[hdebut]");
      $hfin = DateTime::createFromFormat('H:i:s', "$donnees[hfin]");
      $nom = $donnees['nom'];
      $sport = $donnees['sport'];
      $description = $donnees['description'];
      $img = "assets/images/football.jpg";

      ?>
      <div class="col-sm-4">
          <div class="panel panel-perso">
              <div class="panel-heading-perso"><h2><?php echo $nom .'</h2> ('. date_format($date, 'd/m/y').') - '. $sport ?></a></h2> Publier par <?php echo $donnees['users'];?></div>
              <div class="panel-body-perso nopadding">
                <img src="assets/images/football.jpg" alt="event image" class="img-responsive" />
                  <div class="row nopadding">
                      <div class="col-sm-6 nopadding">
                          <time class="start yellow_green">
                              Début <span class="day"><?php echo $hdebut->format('H:i'); ?></span>
                          </time>
                      </div>
                      <div class="col-sm-6 nopadding">
                          <time class="end vert_fonce">
                              Fin <span class="day"><?php echo $hfin->format('H:i'); ?></span>
                          </time>
                      </div>
                  </div>
              </div>
              <div class="panel-footer-perso panel-perso">
                  <p><?php echo $description; ?>
                  </p>
                  <a href='update_event.php?id=<?php echo $donnees['id'];?>' class='btn btn-primary'>Modifier</a>
                  <a href="assets/inc/delete_event.php?id=<?php echo $donnees['id'];?>" class="btn btn-danger">Annuler</a>
              </div>
          </div>
      </div>
      <?php
      }

      $reponse->closeCursor();

      ?>
  </div>
</div>
  </body>
</html>

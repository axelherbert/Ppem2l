<!DOCTYPE html>
<html>
<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="./index.php"><img width=150px height=51px src="assets/images/M2L.png"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="./index.php">Accueil</a></li>
          <li><a href="booking.php">Réservation salles</a></li>
          <li><a href="event.php">Événement</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (!isset($_SESSION['id'])){
            ?><li><a href="./login.php">Connection</a></li><?php
          }
          else {
            ?><li><?php echo 'Bonjour ' . $_SESSION['prenom'] . ' |  '; ?></li><?php
            ?><li><a href="assets\inc\disconnect.php">Déconnection</a></li><?php

            if ($_SESSION['type'] == 'administrateur')
            {
              ?><li><a href="./admin.php">Admin</a></li><?php
            }
          }?>



        </ul>
      </div>
    </div>
  </nav>
</div>
</html>

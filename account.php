<!DOCTYPE html>
<?php session_start(); ?>
<html>
<?php
ini_set('display_errors', true); ?>
<head>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="account.css">
  <head>
    <title>Mon compte</title>
  </head>
</head>
<body>
  <?php $page="Accueil"; ?>
  <?php include "assets/inc/navbar.php"; ?>

  <div class="jumbotron jumbotron-sm">
    <div class="container">
      <center>
        <div class="row">
          <h2 class="h2">Mon compte</h2>
        </div>
      </center>
    </div>
  </div>
  <center>
    <?php
    echo "<h5><u><strong>Email</u> : </strong>" . $_SESSION['mail']. "</h5><br>";
    echo "<h5><u><strong>Pseudo</u> : </strong>" . $_SESSION['pseudo']. "</h5><br>";
    echo "<h5><u><strong>Prenom</u> : </strong>" . $_SESSION['prenom']. "</h5><br>";
    echo "<h5><u><strong>Nom</u> : </strong>" . $_SESSION['nom']. "</h5><br>";
    echo "<h5><u><strong>Type</u> : </strong>" . $_SESSION['type']. "</h5>";
    ?>
    <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Modifier les informations</button></div>
  </center>
  
  <!-- line modal -->
  <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h3 class="modal-title" id="lineModalLabel">Mes informations</h3>
        </div>
        <div class="modal-body">

          <!-- content goes here -->
          <form method="post" action="user_update.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input value="<?php echo $_SESSION['mail']; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez email" name="mail">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pseudo</label>
              <input value="<?php echo $_SESSION['pseudo']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez pseudo" name="pseudo">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Prenom</label>
              <input value="<?php echo $_SESSION['prenom']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez prenom" name="prenom">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input value="<?php echo $_SESSION['nom']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer nom" name="nom">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>

        </div>
        <div class="modal-footer">
          <div class="btn-group btn-group-justified" role="group" aria-label="group button">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
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
</body>
</html>

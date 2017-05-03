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
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $ID = $_GET['id'];

     include 'assets/inc/connect.php';
     include 'assets/inc/navbar.php';
     $bdd = connectToSQL();

     $reponse = $bdd->query('SELECT * FROM `event` WHERE `id` = "'.$ID.'"');

     $donnees = $reponse->fetch();
    ?>

            <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend>Création d'un événement</legend>
            <form action="assets/inc/up_event.php?id=<?php echo $ID ?>" enctype="multipart/form-data" method="post">
            <input class="form-control" name="nom" type="text" value="<?php echo $donnees['nom'] ?>" />
            <input class="form-control" name="adresse" value="<?php echo $donnees['adresse'] ?>" type="text" />
            <input class="form-control" name="centre" value="<?php echo $donnees['centre'] ?>" type="text" />
            <textarea name="description" class="form-control" rows="9" cols="25" required="required"><?php echo $donnees['description'] ?></textarea>
                  <label for="">Date</label>
                  <input class="form-control" value="<?php echo $donnees['dateevent'] ?>" name="dateevent" type="date" />
            <label for="">Heure</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                  <label for="">Début</label>
                  <input class="form-control" value="<?php echo $donnees['hdebut'] ?>" name="hdebut" type="time" />
                </div>
                <div class="col-xs-4 col-md-4">
                  <label for="">Fin</label>
                <input class="form-control" name="hfin" value="<?php echo $donnees['hfin'] ?>" type="time" />
                </div>
            </div>
            <label>Sport</label>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <select class="form-control" name="sport" required="required">
                        <option value="Football"><?php echo $donnees['sport'] ?></option>
                        <option value="Football">Football</option>
                        <option value="Rugby">Rugby</option><br>
                    </select>
                </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
            </form>
        </div>
    </div>

  </body>
</html>

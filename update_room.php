<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$ID = $_GET['id'];
$salle = $_GET['Salle'];
$section = $_GET['Section'];
$date = $_GET['Date'];
$debut = $_GET['Debut'];

 include 'assets/inc/connect.php';
 include 'assets/inc/navbar.php';
 $bdd = connectToSQL();

 $reponse = $bdd->query('SELECT * FROM `booking` WHERE `id` = "'.$ID.'"');

 $donnees = $reponse->fetch();
?>

    <form class="form-horizontal" method="post" action="assets/inc/up_room.php?id=<?php echo $ID ?>">
    <fieldset>
    <!-- Form Name -->
    <legend>Modifier</legend>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Nom de la salle</label>
      <div class="col-md-4">
        <input name="salle" type="text" value="<?php echo $donnees['Salle'] ?>" class="form-control input-md" required="">
      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Section</label>
      <div class="col-md-4">
      <input name="section" type="text" value="<?php echo $donnees['Section'] ?>" class="form-control input-md" required="">
    </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Date</label>
        <div class="col-md-4">
        <input name="date" type="date" value="<?php echo $donnees['Date'] ?>" class="form-control input-md" required="">
      </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Début</label>
          <div class="col-md-4">
          <input name="debut" type="heure" value="<?php echo $donnees['Debut'] ?>" class="form-control input-md" required="">
        </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Fin</label>
            <div class="col-md-4">
            <input name="fin" type="heure" value="<?php echo $donnees['Fin'] ?>" class="form-control input-md" required="">
          </div>
            </div>
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
      <div class="col-md-8">
        <button name="ajouter" class="btn btn-primary">Ajouter</button>
      </div>
    </div>

    </fieldset>
    </form>

  </body>
</html>

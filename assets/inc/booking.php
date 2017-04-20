<html>
<?php ini_set('display_errors', true); ?>
<head>
</head>
<body>
<form class="form-horizontal" method="post" action="assets/inc/formbooking.php">


<!-- Form Name -->
<legend>Réservation salle</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hotel">Salle</label>
  <div class="col-md-4">
  <input name="Salle" type="text"class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nom</label>
  <div class="col-md-4">
  <input id="Nom" name="Nom" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddress">Section</label>
  <div class="col-md-4">
  <input id="Section" name="Section" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dateselection">Date</label>
  <div class="col-md-4">
  <input id="Date" name="Date" type="date" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="timeselect">Début</label>
  <div class="col-md-4">
        <input id="Debut" name="Debut" type="time" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="timeselect">Fin</label>
  <div class="col-md-4">
        <input id="Fin" name="Fin" type="time" placeholder="" class="form-control input-md" required="">
  </div>
</div>
    		    <center><div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Valider" />
    		    </div></center>
</form>

</body>
</html>

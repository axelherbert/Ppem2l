
<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/home.css">
<link rel="stylesheet" href="assets/css/footer.css">
<?php
session_start();
ini_set('display_errors', true);?>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
  <?php include "assets/inc/navbar.php"; ?>
  <div class="panel panel-perso">
      <div class="panel-heading">
          <h3>Mes réservation</h3>
<?php  if (isset($_SESSION['id'])){
            ?><a href="./add-booking.php" class="btn btn-primary">Éditer une réservation</a><?php
          }
          else {

          } ?>

      </div>
      <table class="table table-striped table-hover">
          <thead>
              <tr>

                  <th>Salle</th>
                  <th>Nom</th>
                  <th>Section</th>
                  <th>Date</th>
                  <th>Debut</th>
                  <th>Fin</th>
                  <th></th>

              </tr>
          </thead>
          <tbody>
                <?php
                include "assets/inc/connect.php";

                $bdd = connectToSQL();
                $res = $bdd->query('SELECT * FROM booking WHERE Nom = "'.$_SESSION['pseudo'].'" ORDER BY Nom ASC');
                while ($donnees = $res->fetch())
                {
                    ?>
                    <tr>

                        <td><?php echo $donnees['Salle']; ?></td>
                        <td><?php echo $donnees['Nom']; ?></td>
                        <td><?php echo $donnees['Section']; ?></td>
                        <td class="status"><?php echo $donnees['Date']; ?></td>
                        <td><?php echo $donnees['Debut']; ?></td>
                        <td><?php echo $donnees['Fin']; ?></td>
                        <?php
                        if (isset($_SESSION['id']))
                        if ($_SESSION['pseudo']==$donnees['Nom']){
                                      ?><td><a href="assets/inc/delete.php?id=<?php echo $donnees['id'];?>" class="btn btn-xs btn-danger">Annuler</a>
                                        <a href='update_room.php?id=<?php echo $donnees['id'];?>' class='btn btn-primary btn-xs'>Modifier</a></td><?php
                                    }
                                    else {
                                      ?><td></td><?php
                                    } ?>
                        <td></td>

                    </tr>
                  <?php
                }

                $res->closeCursor();

                ?>



                </tbody>
            </table>
          </div>


<footer class="container-fluid text-center bg-lightgray">

<div class="copyrights" style="margin-top:25px;">
<p>PPE M2L © 2017 <span>Crée par Axel, Antoine, Nicolas, Mathieu et Manon.</span></p>
</div>
</footer>
</body>
</html>

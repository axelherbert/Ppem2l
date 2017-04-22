<!DOCTYPE HTML>
<?php ini_set('display_errors', true); ?>
<html>
<head>
<title>Reservation</title>
</head>

<body>
<?php
include "connect.php";

$bdd = connectToSQL();
$res = $bdd->query('SELECT * FROM booking');?>

<div class="container">
	<div class="row">
        <h2>Maison des Ligues</h2>
		<div class="panel panel-perso">
		    <div class="panel-heading">
		        <h3>Reservation des salles</h3>
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
							<form class="" action="../../index.php" method="get">


                    <?php
            while ($donnees = $res->fetch())
            {
                ?>
		            <tr>
										<td><?php echo $donnees['id']; ?></td>
		                <td><?php echo $donnees['Salle']; ?></td>
		                <td><?php echo $donnees['Nom']; ?></td>
		                <td><?php echo $donnees['Section']; ?></td>
		                <td class="status"><?php echo $donnees['Date']; ?></td>
		                <td><?php echo $donnees['Debut']; ?></td>
                    <td><?php echo $donnees['Fin']; ?></td>
										<?php  if ($_SESSION['pseudo']==$donnees['Nom']){
											            ?><td><a href="assets/inc/delete.php?id=<?php echo $donnees['id'];?>" class="btn btn-xs btn-danger">Annuler</a></td><?php
											          }
																else {
																	?><td></td><?php
																} ?>




		            </tr>
            	<?php
            }

            $res->closeCursor();

            ?>
</form>


		        </tbody>
		    </table>
		</div>
	</div>
</div>



</body>


</html>

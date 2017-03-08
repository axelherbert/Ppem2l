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
$title = $bdd->query('SELECT * FROM booking');
$res = $bdd->query('SELECT * FROM booking');?>

<div class="container">
	<div class="row">
        <h2>Maison des Ligues</h2>
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3>Reservation des salles</h3>
            <a href="./add-booking.php" class="btn btn-primary">Éditer une réservation</a>
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
		            </tr>
		        </thead>
		        <tbody>
                    <?php
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
		            </tr>
            	<?php
            }

            $res->closeCursor();

            ?>



		        </tbody>
		    </table>
		</div>
	</div>
</div>



</body>


</html>

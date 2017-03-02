<?phpini_set('display_errors', true); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Livre D'or</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">

      <nav class="navbar navbar-default">
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
              <li><a href="./index.php">acceuil</a></li>
							<li><a href="./rencontre.php">Rencontre</a></li>
              <li class="active"><a href="./livredor.php">Livre D'or</a></li>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./admin.php">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>

<?php

include 'connect.php';

$bdd = connectToSQL();
echo "<h4><center>Les messages : </center></h4></br>";

$reponse = $bdd->query('SELECT * FROM goldenBook ORDER BY date');

while ($donnees = $reponse->fetch())
{
	?>
	<p align="center">
		<?php
		echo '<strong>' . $donnees['auteur'] . '</strong> ' ; echo '<u>' . $donnees['date'] . '</u></br>';
		echo '<strong>Message : </strong>' . $donnees['message'] . '</br>';?>
		<a class="glyphicon glyphicon-trash" href='<?php echo 'delete.php?id=' . $donnees['id'] ?>'></a>



	</p>

	<?php
}

$reponse->closeCursor();

?>

<form  method="post" action="formpost.php">

<h4><center> Ecrire un message :</center></h4></br>

	<p align="center">Votre pseudo</br>
	<input type="text" name="auteur" />

	</br><p align="center">Votre message</br>
	<textarea name="message" rows="5" cols="45"></textarea>

	</br>
	<button type="submit" class="btn btn-success">Valider</button>

	</p>
</form>

<?php


?>

</html>

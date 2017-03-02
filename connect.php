<?php

function connectToSQL()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=connect;charset=utf8', 'root', 'axel');

		echo '<p style="color:#01DF01;">Connecté à la base de donnée SQL.</p>';
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}

?>

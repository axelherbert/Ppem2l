<?php

function connectToSQL()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}
?>

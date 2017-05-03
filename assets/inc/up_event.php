<?php
session_start();
include 'connect.php';

$bdd = connectToSQL();

 $bd=$bdd->exec('UPDATE event set nom = "'.$_POST['nom'].'", adresse = "'.$_POST['adresse'].'", centre = "'.$_POST['centre'].'", description = "'.$_POST['description'].'", dateevent = "'.$_POST['dateevent'].'", hdebut = "'.$_POST['hdebut'].'", hfin = "'.$_POST['hfin'].'", sport = "'.$_POST['sport'].'" WHERE id="'.$_GET['id'].'"');

 header ('location: ../../event.php');

 ?>

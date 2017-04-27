<?php
session_start();
include 'connect.php';

$bdd = connectToSQL();


$req = $bdd->prepare('INSERT INTO booking (Salle, Nom, Section, Date, Debut, Fin) VALUES(?,?,?,?,?,?)');
$req->execute(array($_POST['Salle'], $_SESSION['pseudo'], $_POST['Section'], $_POST['Date'], $_POST['Debut'], $_POST['Fin']));


header('location: ../../booking.php');

?>

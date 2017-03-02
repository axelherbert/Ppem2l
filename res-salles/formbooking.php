<?php

include 'connect.php';

$bdd = connectToSQL();


$req = $bdd->prepare('INSERT INTO booking (Salle, Nom, Section, Date, Debut, Fin) VALUES(?,?,?,?,?,?)');
$req->execute(array($_POST['Salle'], $_POST['Nom'], $_POST['Section'], $_POST['Date'], $_POST['Debut'], $_POST['Fin']));


header('location: index.php');

?>
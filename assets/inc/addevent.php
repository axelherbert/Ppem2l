<?php
session_start();
include 'connect.php';

$bdd = connectToSQL();


$req = $bdd->prepare('INSERT INTO event (nom, adresse, centre, description, dateevent, hdebut, hfin, sport, users_id) VALUES(?,?,?,?,?,?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['adresse'], $_POST['centre'], $_POST['description'], $_POST['dateevent'], $_POST['hdebut'], $_POST['hfin'], $_POST['sport'], $_SESSION['id']));


header('location: ../../index.php');

?>

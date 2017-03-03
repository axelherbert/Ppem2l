<?php

include 'connect.php';

$bdd = connectToSQL();


$req = $bdd->prepare('INSERT INTO goldenBook(auteur, message) VALUES(?,?)');
$req->execute(array($_POST['auteur'], $_POST['message']));


header('location: index.php');

?>
<?php

session_start();

include "assets/inc/connect.php";

$bdd = connectToSQL();

$id = $_SESSION['id'];
$mail = $_POST['mail'];

var_dump($_POST);

$req = $bdd->exec('UPDATE users SET mail = $mail WHERE id= $id');

header('location: account.php');

?>

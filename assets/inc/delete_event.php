<?php

include 'connect.php';

$bdd = connectToSQL();


$id_to_delete = $_GET['id'];
$bdd->exec('DELETE FROM event WHERE id="' . $id_to_delete . '"');

header('location: ../../event.php');

?>

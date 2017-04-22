<?php

include 'connect.php';

$bdd = connectToSQL();


$id_to_delete = $_GET['id'];
$bdd->exec('DELETE FROM booking WHERE id="' . $id_to_delete . '"');

header('location: ../../booking.php');

?>

<?php

include 'connect.php';

$bdd = connectToSQL();


$id_to_delete = $_GET['id'];
$bdd->exec('DELETE FROM goldenBook WHERE id="' . $id_to_delete . '"');

header('location: livredor.php');

?>
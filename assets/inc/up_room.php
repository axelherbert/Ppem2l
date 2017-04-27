<?php
session_start();
include 'connect.php';

$bdd = connectToSQL();

 $bdd->exec('UPDATE booking set Salle = "'.$_POST['salle'].'", Section = "'.$_POST['section'].'", Date = "'.$_POST['date'].'", Debut = "'.$_POST['debut'].'", Fin = "'.$_POST['fin'].'" WHERE id="'.$_GET['id'].'"');
 header ('location: ../../booking.php');

 //$sql='UPDATE vehicule set nom = "'.$nom_to_modify.'", label = "'.$type_to_modify.'" WHERE id="'.$id_to_modify.'"';
 //echo $sql;
 //$bd->exec($sql);
 ?>

<?php

session_start();

include "assets/inc/connect.php";

$bdd = connectToSQL();

//création de variables pour la requête sql
$id = $_SESSION['id'];
$mail = $_POST['mail'];
$pseudo = $_POST['pseudo'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];

//on met à jour les valeurs de la variable session egalement
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];

var_dump($_POST);

$req = $bdd->exec('UPDATE users SET mail =' . $mail .',
                                    pseudo =' . $pseudo .',
                                    prenom =' . $prenom .',
                                    nom =' . $nom .',
                                    WHERE id=' . $id . '');

header('location: account.php');

?>

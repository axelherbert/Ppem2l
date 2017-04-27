<?php
session_start();
ini_set('display_errors', true);
include "assets/inc/connect.php";

	$bdd = connectToSQL();

  // Vérification des identifiants
  $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
  $req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'password' => $_POST['password']));

    $resultat = $req->fetch();

    if (!$resultat) {
      header ("location : login.php");
    }
    else {
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['mail'] = $resultat['mail'];
      $_SESSION['prenom'] = $resultat['prenom'];
      $_SESSION['nom'] = $resultat['nom'];
      $_SESSION['type'] = $resultat['type'];
			$_SESSION['pseudo'] = $resultat['pseudo'];

			header ("location : index.php");
    } ?>

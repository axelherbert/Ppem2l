<?php
ini_set('display_errors', true);
session_start();

include "assets/inc/connect.php";

$bdd = connectToSQL();

// Vérification des identifiants
$req = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
$req->execute(array(
  'pseudo' => $_POST['pseudo'],
  'password' => $_POST['password']));

  $resultat = $req->fetch();

  // var_dump($resultat);

  if (!$resultat) {
    header ("Location: login.php");
  }
  else {
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['mail'] = $resultat['mail'];
    $_SESSION['prenom'] = $resultat['prenom'];
    $_SESSION['nom'] = $resultat['nom'];
    $_SESSION['type'] = $resultat['type'];
    $_SESSION['pseudo'] = $resultat['pseudo'];

    //echo "<meta http-equiv='refresh' content='0'>";
    header ("Location: index.php");
  }

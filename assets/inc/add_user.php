<?php

include 'connect.php';

$bdd = connectToSQL();

$type = "basic_user";

/*$req = $bdd->prepare('INSERT INTO users(pseudo,mail,password,type,prenom,nom) VALUES(?,?,?,?,?,?)');
$req->execute(array($_POST['pseudo'],
                    $_POST['mail'],
                    $_POST['password'],
                    'basic_user',
                    $_POST['prenom'],
                    $_POST['nom']));*/

$req = $bdd->prepare('INSERT INTO users(pseudo,mail,password,type,prenom,nom)
                      VALUES(:pseudo, :mail, :password, :type, :prenom, :nom)');
$req->execute(array(
                    	'pseudo' => $_POST['pseudo'],
                    	'mail' => $_POST['mail'],
                    	'password' => $_POST['password'],
                    	'type' => $type,
                    	'prenom' => $_POST['prenom'],
                    	'nom' => $_POST['nom']
                    	));

header('location: ../../index.php');

?>

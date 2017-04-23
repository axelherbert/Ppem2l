<?php

include 'connect.php';

$bdd = connectToSQL();

print_r($_POST);

$req = $bdd->prepare('INSERT INTO users(pseudo,mail,password,type,prenom,nom) VALUES(?,?,?,?,?,?,?)');
$req->execute(array($_POST['pseudo'],
                    $_POST['mail'],
                    $_POST['password'],
                    'basic_user',
                    $_POST['prenom'],
                    $_POST['nom']));

header('location: ../../index.php');

?>

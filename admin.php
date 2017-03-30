<!DOCTYPE html>
<html>
<?php ini_set('display_errors', true); ?>
<script src="assets/js/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrapp.css">
<head>
	<title>Admin</title>
</head>
<body>
<?php
$page ='Admin';
include "assets/inc/navbar.php";
ini_set('display_errors', true); ?>
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel D'administration</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mot de passe" name="password" type="password" value="">
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-success">Connexion</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</body>
</html>

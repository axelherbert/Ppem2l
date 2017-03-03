<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
<?php include "navbar.php"; ?>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class="h2">
                  COORDONNEES <small>Maison des Ligues de Lorraine</small></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Saisir votre nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Adresse email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Saisir votre adresse email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choisir:</option>
                                <option value="service">Service client</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">S.A.V</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
                            Envoyer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> L'adresse</legend>
            <address>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.404560983434!2d6.211964515430417!3d48.69774791995857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794983386479251%3A0xc58bc09976474b86!2s13+Rue+Jean+Moulin%2C+54510+Tomblaine!5e0!3m2!1sfr!2sfr!4v1488560215757" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>            </address>
            <address>
                <strong>Adresse Email</strong><br><br>
                <a href="mailto:#">contact@m2l.fr</a>
            </address>
            </form>
        </div>
    </div>
</div>

</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./assets/css/contact.css"
</html>

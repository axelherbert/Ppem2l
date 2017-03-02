<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<div class="container">

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">PPE</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="./index.php">Home</a></li>
							<li><a href="./rencontre.php">Rencontre</a></li>
              <li><a href="./livredor.php">Livre D'or</a></li>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Administration</h2>
        <label for="inputEmail" class="sr-only">Login</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Identifiant" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Mot De Passe" required>
        <div class="checkbox">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se Connecter</button>
      </form>

    </div>
</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>

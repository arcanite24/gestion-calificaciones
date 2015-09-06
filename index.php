<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion IPN</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/master.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container main-frame">

      <div class="col-md-8 col-md-offset-2 text-center">
        <p id="logo">Gestión IPN</p>
      </div>

      <div class="input-group panel panel-default col-md-6 col-md-offset-3 text-center login">
        <div class="" id="alert-place-login">
          <?php
            if(isset($_GET['wrong'])) {
              if($_GET['wrong'] == 1) {
                echo '<div class="alert alert-danger" role="alert">Datos invalidos.</div>';
              }
              if($_GET['wrong'] == 2) {
                echo '<div class="alert alert-success" role="alert">Haz salido correctamente..</div>';
              }
            }
          ?>
        </div>
        <p id="login-text">Iniciar Sesión</p>
        <form class="" action="login.php" method="get">
          <div class="panel-body">
            <input class="input-text form-control" type="text" name="username" placeholder="Introduce tu nombre de usuario">
            <input class="input-text-second form-control" type="password" name="password" placeholder="Introduce tu contraseña">
            <select class="input-text-second form-control" name="usertype">
              <option value="1">Alumno</option>
              <option value="2">Maestro</option>
              <option value="3">Administrador</option>
            </select>
            <input class="btn-login btn bg-primary" type="submit" name="submit" value="Enviar">
          </div>
        </form>
      </div>

    </div>

  </body>
</html>

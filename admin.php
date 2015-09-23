<?php
  @session_start();
  if(!$_SESSION['logeado'] && $_SESSION['user'] != "Administrador") {
    header('Location: index.php?wrong=3');
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Gestión IPN</title>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="css/master.css">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/admin.js"></script>
     <script src="js/horario.js"></script>
   </head>
   <body>
   <nav class="navbar navbar-default">
     <div class="container-fluid">
       <div class="navbar-header">
         <a class="navbar-brand" href="#"><img src="http://www.cecuti.ipn.mx/v2/images/logos/IPN_LOGO2660.JPG" alt="logo" width="16" height="23" />Gestión IPN - Administrador</a>
       </div>
       <div>
         <ul class="nav navbar-nav">
           <li class="active"><a href="#">Horario</a></li>
           <li><a href="#">Calificaciones</a></li>
           <li><a href="#">Tramites</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><span class="glyphicon glyphicon-book"></span> Perfil</a></li>
         <li><a href="php/logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Salir</a></li>
       </ul>
       </div>
     </div>
   </nav>
    <div class="container">

      <p>
        TODO:
        -Agregar AJAX agregar horario
        Working On:
        -Horarios
      </p>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Añadir Grupo</h3>
        </div>
        <div class="panel-body">
          <div class="" id="alert-place-grupo"></div>
          <form role="form" id="addgrupo">
            <div class="form-group">
              <label for="nombre-grupo">Grupo:</label>
              <input type="text" id="nombre-grupo" class="form-control" name="grupo" placeholder="Nombre del grupo" required>
            </div>
            <div class="form-group">
              <label for="semestre">Semestre:</label>
              <select class="form-control" name="semestre" id="semestre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Añadir Materia</h3>
        </div>
        <div class="panel-body">
          <div class="" id="alert-place-materia"></div>
          <form role="form" id="addmateria">
            <div class="form-group">
              <label for="nombre-materia">Nombre:</label>
              <input required type="text" id="nombre-materia" class="form-control" name="nombre-materia" placeholder="Nombre de la materia">
            </div>
            <div class="form-group">
              <label for="semestre-mat">Semestre:</label>
              <select class="form-control" name="semestre-materia" id="semestre-mat">
                <?php
                  include("include/conectar.php");
                  $q_mat = "SELECT * FROM grupos ORDER BY semestre";
                  $s1 = false;
                  $s2 = false;
                  $s3 = false;
                  $s4 = false;
                  $s5 = false;
                  $s6 = false;
                  $r = mysql_query($q_mat);
                  while($f = mysql_fetch_assoc($r)) {
                    if($f['semestre'] == 1 && !$s1) {
                      echo '<option value="1">1</option>';
                      $s1 = false;
                    }
                    if($f['semestre'] == 2 && !$s2) {
                      echo '<option value="2">2</option>';
                      $s2 = false;
                    }
                    if($f['semestre'] == 3 && !$s3) {
                      echo '<option value="3">3</option>';
                      $s3 = false;
                    }
                    if($f['semestre'] == 4 && !$s4) {
                      echo '<option value="4">4</option>';
                      $s4 = false;
                    }
                    if($f['semestre'] == 5 && !$s5) {
                      echo '<option value="5">5</option>';
                      $s5 = false;
                    }
                    if($f['semestre'] == 6 && !$s6) {
                      echo '<option value="6">6</option>';
                      $s6 = false;
                    }
                  }
                ?>
              </select>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>
      </div>

      <?php include('include/horario.php'); ?>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Añadir Alumno</h3>
          </div>
          <div class="panel-body">
            <div class="" id="alert-place-alumno"></div>
            <form role="form" id="addalumno">
              <div class="form-group">
                <label for="alumno-usuario">Usuario:</label>
                <input type="text" required="required" class="form-control" name="alumno-usuario" id="alumno-usuario" placeholder="Nombre de usuario del alumno.">
              </div>
              <div class="form-group">
                <label for="alumno-contra">Contraseña:</label>
                <input type="password" required="required" class="form-control" name="alumno-contra" id="alumno-contra" placeholder="Contraseña del alumno.">
              </div>
              <div class="form-group">
                <label for="alumno-nombre">Nombre:</label>
                <input type="text" required="required" class="form-control" name="alumno-nombre" id="alumno-nombre" placeholder="Nombre del alumno.">
              </div>
              <div class="form-group">
                <label for="alumno-grupo">Grupo:</label>
                <select class="form-control" name="alumno-grupo" id="alumno-grupo">
                  <option value="-1">---</option>
                  <?php
                    include("../include/conectar.php");
                    $q1 = "SELECT * FROM grupos ORDER BY nombre_grupo";
                    $r1 = mysql_query($q1)or die(mysql_error() . "error en la cuery");
                    while ($f1 = mysql_fetch_array($r1)) {
                      echo "<option value=".$f1['id_de grupo'].">".$f1['nombre_grupo']."</option>";
                    }
                   ?>
                </select>
              </div>
              <div class="form-group">
                <label for="alumno-boleta">Boleta:</label>
                <input type="text" required="required" class="form-control" name="alumno-boleta" id="alumno-boleta" placeholder="Boleta del alumno.">
              </div>
              <button type="submit" class="btn btn-default">Enviar</button>
            </form>
          </div>
        </div>
    </div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestión IPN</title>
  </head>
  <body>
  </body>
</html>

<?php
include('include/conectar.php');

$user = $_GET['username'];
$pass = $_GET['password'];
$type = $_GET['usertype'];

if($type == 1) {
  $query = "SELECT * FROM alumnos WHERE user_alumno='$user' AND pass_alumno='$pass'";
} elseif ($type == 2) {
  $query = "SELECT * FROM maestros WHERE maestro_user='$user' AND maestro_pass='$pass'";
} elseif ($type == 3) {
  $query = "SELECT * FROM admin WHERE admin_user='$user' AND admin_pass='$pass'";
}

$resultado = mysql_query($query)or die(mysql_error());
if($type == 1) {
  while ($f = mysql_fetch_assoc($resultado)) {
    $nombre = $f['nombre_alumno'];
    $id_alumno = $f['id_alumno'];
    $id_horario = $f['horarioid_alumno'];
  }
} elseif ($type == 2) {
  while ($f = mysql_fetch_assoc($resultado)) {
    $id_maestro = $f['id_maestro'];
  }
}

if(mysql_num_rows($resultado) > 0) {
  session_start();
  if($type == 1) {
    $_SESSION['user'] = "Alumno";
    $_SESSION['logeado'] = true;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['id_alumno'] = $id_alumno;
    $_SESSION['id_horario'] = $id_horario;
    header('Location: alumno.php?tab=showcali');
  } elseif ($type == 2) {
    $_SESSION['user'] = "Maestro";
    $_SESSION['logeado'] = true;
    $_SESSION['id_maestro'] = $id_maestro;
    header('Location: maestro.php?tab=calificacion');
  } elseif ($type == 3) {
    $_SESSION['user'] = "Administrador";
    $_SESSION['logeado'] = true;
    header('Location: admin.php?tab=grupo');
  }
} else {
  header('Location: index.php?wrong=1');
}
 ?>

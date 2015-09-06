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
mysql_connect("localhost","root","")or die("No se puede conectar a la base de datos.");
mysql_select_db("test_ipn")or die("No se pudo seleccionar la base de datos.");

$user = $_GET['username'];
$pass = $_GET['password'];
$type = $_GET['usertype'];

if($type == 1) {
  $query = "SELECT * FROM alumnos WHERE alumno_nombre='$user' AND alumno_pass='$pass'";
} elseif ($type == 2) {
  $query = "SELECT * FROM maestros WHERE maestro_user='$user' AND maestr_pass='$pass'";
} elseif ($type == 3) {
  $query = "SELECT * FROM admin WHERE admin_user='$user' AND admin_pass='$pass'";
}

$resultado = mysql_query($query)or die(mysql_error());

if(mysql_num_rows($resultado) > 0) {
  session_start();
  if($type == 1) {
    $query = "SELECT * FROM alumnos WHERE alumno_nombre='$user' AND alumno_pass='$pass'";
  } elseif ($type == 2) {
    $query = "SELECT * FROM maestros WHERE maestro_user='$user' AND maestr_pass='$pass'";
  } elseif ($type == 3) {
    $_SESSION['user'] = "Administrador";
    $_SESSION['logeado'] = true;
    header('Location: admin.php');
  }
} else {
  header('Location: index.php?wrong=1');
}
 ?>

<?php
include('include/conectar.php');
$op = $_GET['type'];

if($op == "setcali") {
  $id_alumno = $_GET['cali-alumno'];
  $id_mat = $_GET['materia-setcal'];
  $cali = $_GET['cal-setcal'];

  $q_setcali = "INSERT INTO calificacion (id_alumno, id_mat, calificacion) VALUES ('$id_alumno', '$id_mat', '$cali')";
  $r_setcali = mysql_query($q_setcali) or die('<div class="alert alert-danger" role="alert">Error al agregar calificacion.</div>');

  echo '<div class="alert alert-success" role="alert">Se añadio correctamente la calificacion.</div>';
}
 ?>

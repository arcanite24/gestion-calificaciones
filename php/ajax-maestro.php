<?php
include('../include/conectar.php');
$op = $_GET['op'];

if($op == "setcali") {
  $grupo_alumno = $_GET['grupo'];
  $q_maestro_alumno = "SELECT * FROM alumnos WHERE grupoid_alumno='$grupo_alumno' ORDER BY nombre_alumno";
  $r1 = mysql_query($q_maestro_alumno) or die('<option value="-1">No se encontraron alumnos en ese grupo.</option>');

  if(mysql_num_rows($r1) < 1) {
    echo '<option value="-1">No se encontraron alumnos en ese grupo.</option>';
  } else {
    echo '<option value="-1">-- Selecciona un alumno --</option>';

    while ($f1 = mysql_fetch_assoc($r1)) {
      echo '<option value="'.$f1['id_alumno'].'">';
      echo $f1['nombre_alumno'] . '</option>';
    }
  }
}
 ?>

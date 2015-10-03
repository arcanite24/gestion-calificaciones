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
} elseif($op == "getmat-setcal") {
  $grupo_alumno = $_GET['grupo'];
  $q_getmat = "SELECT * FROM horarios_mat WHERE id_grupo='$grupo_alumno'";
  $r2 = mysql_query($q_getmat) or die('<option value="-1">No se encontraron materias asignadas a ese grupo.</option>');

  if(mysql_num_rows($r2) < 1) {
    echo '<option value="-1">No se encontraron materias asignadas a ese grupo.</option>';
  } else {
    echo '<option value="-1">-- Selecciona una materia --</option>';

    while ($f1 = mysql_fetch_assoc($r2)) {
      echo '<option value="'.$f1['id_mat'].'">';
      $mat_id = $f1['id_mat'];
      $q_getmat_name = "SELECT * FROM materias WHERE id_materia='$mat_id'";
      $r_getmat_name = mysql_query($q_getmat_name);
      while ($f3 = mysql_fetch_assoc($r_getmat_name)) {
        echo $f3['nombre'];
      }
      echo '</option>';
    }
  }
}
 ?>

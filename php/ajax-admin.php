<?php
$op = $_GET['operacion'];
include("../include/conectar.php");

if($op == 1) {
  echo '<option value="null">---</option>';
  $q1 = "SELECT * FROM grupos ORDER BY nombre_grupo";
  $r1 = mysql_query($q1)or die(mysql_error() . "error en la cuery");
  while ($f1 = mysql_fetch_array($r1)) {
    echo "<option value=".$f1['id_grupo'].">".$f1['nombre_grupo']."</option>";
  }
}

//Alumnos by grupo
if ($op == 2) {
  $grupo_alumno = $_GET['idg'];
  $q2 =  "SELECT * FROM alumnos WHERE grupoid_alumno='$grupo_alumno' ORDER BY nombre_alumno";
  $r2 = mysql_query($q2) or die(mysql_error());
  if(mysql_num_rows($r2) > 0) {
    while ($f2 = mysql_fetch_array($r2)) {
      echo "<option value=".$f2['id_alumno'].">".$f2['nombre_alumno']."</option>";
    }
  } else {
    echo '<option value="-1">No se encontraron alumnos en ese grupo.</option>';
  }
}
 ?>

<?php
  include('../include/conectar.php');
  $op = $_GET['op'];

//Materias by grupo for horario
  if($op == 'materia') {
    $grupo_mat = $_GET['grupo'];
    $q_sem_mat = "SELECT * FROM grupos WHERE id_grupo='$grupo_mat' ORDER BY id_grupo";
    $r_sem = mysql_query($q_sem_mat) or die("Error: " . mysql_error());

    while ($f_sem = mysql_fetch_array($r_sem)) {
      $semestre_mat = $f_sem['semestre'];
    }

    $q_materia = "SELECT * FROM materias WHERE semestre='$semestre_mat'";
    $r_mat = mysql_query($q_materia);

    while ($f_mat = mysql_fetch_array($r_mat)) {
      echo "<option value=" . $f_mat['id_materia'] . ">" . $f_mat['nombre'] . "</option>";
    }
  }
 ?>

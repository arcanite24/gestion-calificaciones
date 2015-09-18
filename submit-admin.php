<?php
  $op = $_GET['type'];
  include("include/conectar.php");

  if($op == "addgrupo") {
    $g = $_GET['grupo'];
    $s = $_GET['semestre'];
    $query = "INSERT INTO grupos (nombre_grupo, semestre) VALUES ('$g', $s)";
    if($g != "") {
        mysql_query($query)or die('<div class="alert alert-danger" role="alert">Error al agregar grupo.</div>'. mysql_error());
        echo '<div class="alert alert-success" role="alert">Agregado el grupo: ';
        echo $g;
        echo'</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error al agregar grupo.</div>';
    }
  } elseif ($op == "addmateria") {
    $name_materia = $_GET['nombre-materia'];
    $semestre_materia = $_GET['semestre-materia'];
    $query_addmateria = "INSERT INTO materias (nombre, semestre) VALUES ('$name_materia', $semestre_materia)";
    if($name_materia != "") {
        mysql_query($query_addmateria)or die('<div class="alert alert-danger" role="alert">Error al agregar grupo.</div>');
        echo '<div class="alert alert-success" role="alert">Agregado la materia: ';
        echo $name_materia;
        echo'</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error al agregar grupo.</div>';
    }
  } elseif ($op == "addalumno") {
    $user_alumno = $_GET['alumno-usuario'];
    $contra_alumno = $_GET['alumno-contra'];
    $nombre_alumno = $_GET['alumno-nombre'];
    $grupo_alumno = $_GET['alumno-grupo'];
    $boleta_alumno = $_GET['alumno-boleta'];
    $query_addalumno = "INSERT INTO alumnos (user_alumno, pass_alumno, nombre_alumno, grupoid_alumno, horarioid_alumno, boleta_alumno)
    VALUES ('$user_alumno', '$contra_alumno', '$nombre_alumno', '$grupo_alumno', -1, '$boleta_alumno')";
    if($grupo_alumno != -1) {
        mysql_query($query_addalumno)or die('<div class="alert alert-danger" role="alert">Error.</div>');
        echo '<div class="alert alert-success" role="alert">Alumno agregado: ';
        echo $nombre_alumno;
        echo'</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error al agregar alumno, grupo invalido.</div>';
    }
  }

?>

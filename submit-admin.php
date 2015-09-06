<?php
  $op = $_GET['type'];
  include("include/conectar.php");

  if($op == "addgrupo") {
    $g = $_GET['grupo'];
    $s = $_GET['semestre'];
    $query = "INSERT INTO grupos (nombre_grupo, semestre) VALUES ('$g', $s)";
    if($g != "") {
        mysql_query($query)or die('<div class="alert alert-danger" role="alert">Error al agregar grupo.</div>');
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
  }
?>

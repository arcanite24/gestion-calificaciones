<?php
  @session_start();
  include('include/conectar.php');

  function getAlumnoName($id) {
    $q = "SELECT * FROM alumnos WHERE id_alumno='$id'";
    $r = mysql_query($q);
    if($f = mysql_fetch_assoc($r)) {
      return $f['nombre_alumno'];
    }
  }

  $op = $_GET['op'];
  if($op == 'addmsgal') {
    $msg = $_GET['mensaje-chat'];
    $id_maestro = $_GET['maestro-chat'];
    $id_alumno = $_SESSION['id_alumno'];
    $q = "INSERT INTO mensaje (id_maestro, id_alumno, mensaje, for_maestro) VALUES ('$id_maestro', '$id_alumno', '$msg', 1)";
    $r = mysql_query($q) or die('<div class="alert alert-danger" role="alert">Error.'.mysql_error().'</div>');

    echo '<div class="alert alert-success" role="alert">Se envio correctamente el mensaje.</div>';

  } elseif ($op == 'checkmsgmaestro') {
    $maestro = $_SESSION['id_maestro'];
    $id_alumno = $_GET['maestro'];
    $q = "SELECT * FROM mensaje WHERE id_alumno='$id_alumno' AND id_maestro='$maestro' ORDER BY id_mensaje desc";
    $r = mysql_query($q) or die('<h1>No se encontraron mensajes.</h1>');
    while ($f = mysql_fetch_assoc($r)) {
      if($f['for_maestro'] == 1) {
        echo '<div id="msg-yo" class="col-md-6 pull-right text-right col-md-offset-6">';
        echo '<div id="msg-for">';
        echo '<strong>Alumno:</strong></div>';
        echo '<div id="msg">' .$f['mensaje']. '</div></div>';
      } else {
        echo '<div id="msg-tu" class="col-md-6 pull-right text-right col-md-offset-6">';
        echo '<div id="msg-from">';
        echo '<strong>Yo:</strong></div>';
        echo '<div id="msg">' .$f['mensaje']. '</div></div>';
      }
    }
  } elseif ($op == 'addmsgma') {
    $msg = $_GET['mensaje-chat'];
    $id_alumno = $_GET['alumno-chat'];
    $id_maestro = $_SESSION['id_maestro'];
    $q = "INSERT INTO mensaje (id_maestro, id_alumno, mensaje, for_maestro) VALUES ('$id_maestro', '$id_alumno', '$msg', 0)";
    $r = mysql_query($q) or die('<div class="alert alert-danger" role="alert">Error.'.mysql_error().'</div>');

    echo '<div class="alert alert-success" role="alert">Se envio correctamente el mensaje.</div>';
  } elseif ($op == 'checkmsgalumno') {
    $maestro = $_GET['maestro'];
    $id_alumno = $_SESSION['id_alumno'];
    $q = "SELECT * FROM mensaje WHERE id_alumno='$id_alumno' AND id_maestro='$maestro' ORDER BY id_mensaje desc";
    $r = mysql_query($q) or die('<h1>No se encontraron mensajes.</h1>');
    while ($f = mysql_fetch_assoc($r)) {
      if($f['for_maestro'] == 1) {
        echo '<div id="msg-yo" class="col-md-6 pull-right text-right col-md-offset-6">';
        echo '<div id="msg-for">';
        echo '<strong>Yo:</strong></div>';
        echo '<div id="msg">' .$f['mensaje']. '</div></div>';
      } else {
        echo '<div id="msg-tu" class="col-md-6 pull-right text-right col-md-offset-6">';
        echo '<div id="msg-from">';
        echo '<strong>Maestro:</strong></div>';
        echo '<div id="msg">' .$f['mensaje']. '</div></div>';
      }
    }
  }
 ?>

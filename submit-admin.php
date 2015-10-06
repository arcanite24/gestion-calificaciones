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
  } elseif ($op == "addhorario") {
    $hor_grupo = $_GET['hor-grupo'];
    if($hor_grupo != -1) {
      $q_horario = "INSERT INTO horarios (id_grupo) VALUES ('$hor_grupo')";
      $r_horario = mysql_query($q_horario) or die('<div class="alert alert-danger" role="alert">Error.</div>');
      $q_horario_idhor = "SELECT * FROM horarios WHERE id_grupo='$hor_grupo'";
      $r_horario_idhor = mysql_query($q_horario_idhor);

      while ($f_horario_idhor = mysql_fetch_array($r_horario_idhor)) {
        $hor_idhor = $f_horario_idhor['id_horario'];
      }

      for ($i=1; $i < 10; $i++) {
        $mat_hor = $_GET['hor-mat' . $i];
        $h_li = $_GET['hor-mat'.$i.'-ini-lun'];
        $h_lf = $_GET['hor-mat'.$i.'-fin-lun'];
        $h_mi = $_GET['hor-mat'.$i.'-ini-mar'];
        $h_mf = $_GET['hor-mat'.$i.'-fin-mar'];
        $h_mii = $_GET['hor-mat'.$i.'-ini-mie'];
        $h_mif = $_GET['hor-mat'.$i.'-fin-mie'];
        $h_ji = $_GET['hor-mat'.$i.'-ini-jue'];
        $h_jf = $_GET['hor-mat'.$i.'-fin-jue'];
        $h_vi = $_GET['hor-mat'.$i.'-ini-vie'];
        $h_vf = $_GET['hor-mat'.$i.'-fin-vie'];

        $q_hor_mat = "INSERT INTO horarios_mat (id_grupo, id_mat, lun_ini, lun_fin, mar_ini, mar_fin, mie_ini, mie_fin, jue_ini, jue_fin, vie_ini, vie_fin, id_hor) VALUES ('$hor_grupo', '$mat_hor', '$h_li', '$h_lf', '$h_mi', '$h_mf', '$h_mii', '$h_mif', '$h_ji', '$h_jf', '$h_vi', '$h_vf', '$hor_idhor')";

        $r_hor_mat = mysql_query($q_hor_mat) or die('<div class="alert alert-danger" role="alert">Error.</div>');

      }

      $q_sethor = "UPDATE alumnos SET horarioid_alumno='$hor_idhor' WHERE grupoid_alumno='$hor_grupo'";
      $r_sethor = mysql_query($q_sethor) or die('<div class="alert alert-danger" role="alert">Error.</div>');

      echo '<div class="alert alert-success" role="alert">Se añadio correctamente el horario.</div>';

    } else {
        echo '<div class="alert alert-warning" role="alert">Selecciona un grupo..</div>';
    }
  } elseif ($op == "addmaestro") {
    $m_nombre = $_GET['maestro-nombre'];
    $m_user = $_GET['maestro-usuario'];
    $m_pass = $_GET['maestro-contra'];
    $q_mestro = "INSERT INTO maestros (maestro_nombre, maestro_user, maestro_pass) VALUES ('$m_nombre', '$m_user', '$m_pass')";
    $r_maestro = mysql_query($q_mestro) or die('<div class="alert alert-danger" role="alert">Error.</div>');

    echo '<div class="alert alert-success" role="alert">Alumno agregado: ';
    echo $m_nombre;
    echo'</div>';

  } elseif($op == "setmat") {
    $id_maestro = $_GET['maestro-setmat'];
    $id_materia = $_GET['mat-setmat'];
    $q = "INSERT INTO materia_maestro (id_maestro, id_materia) VALUES ('$id_maestro', '$id_materia')";
    $r = mysql_query($q) or die('<div class="alert alert-danger" role="alert">Error.</div>');

    echo '<div class="alert alert-success" role="alert">Materia asignada</div>';
  }

?>

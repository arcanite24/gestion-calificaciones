<?php
  include('include/conectar.php');
  $id_alumno = $_SESSION['id_alumno'];
  $q = "SELECT * FROM calificacion WHERE id_alumno='$id_alumno'  ORDER BY calificacion desc";
  $r = mysql_query($q) or die(mysql_error());

  if(mysql_num_rows($r) < 1) {
    echo '<div class="alert alert-danger" role="alert">Calificaciones no asignadas al alumno.</div>';
  } else {
    echo '
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Calificaciones</h1>
      </div>
      <table class="table">
        <tr>
          <th>
            Materia
          </th>
          <th>
            Calificacion
          </th>
        </tr>
    ';

    while ($f1 = mysql_fetch_assoc($r)) {
      $id_mat = $f1['id_mat'];
      $q_mat = "SELECT * FROM materias WHERE id_materia='$id_mat'";
      $r_mat = mysql_query($q_mat);
      while ($f2 = mysql_fetch_assoc($r_mat)) {
        echo '<tr><td>' . $f2['nombre'] . '</td>';
      }
      echo '<td>' . $f1['calificacion'] . '</td></tr>';
    }
    echo '
      </table>
    </div>
    ';
  }
 ?>

<?php
  include('include/conectar.php');
  $id_alumno = $_SESSION['id_alumno'];
  $id_horario = $_SESSION['id_horario'];
  $q = "SELECT * FROM horarios_mat WHERE id_hor='$id_horario'";
  $r = mysql_query($q);

  if(mysql_num_rows($r) < 1) {
    echo '<div class="alert alert-danger" role="alert">Horario no asignado al alumno.</div>';
  } else {
    echo '
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Horario</h1>
      </div>
      <table class="table">
        <tr>
          <th>
            Materia
          </th>
          <th>
            Lunes
          </th>
          <th>
            Martes
          </th>
          <th>
            Miércoles
          </th>
          <th>
            Jueves
          </th>
          <th>
            Viernes
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
      if($f1['lun_ini'] == 'vacio' || $f1['lun_fin'] == 'vacio') {
        echo '<td>--</td>';
      } else {
        echo '<td>' . $f1['lun_ini'] . ' - ' . $f1['lun_fin'];
      }
      if($f1['mar_ini'] == 'vacio' || $f1['mar_fin'] == 'vacio') {
        echo '<td>--</td>';
      } else {
        echo '<td>' . $f1['mar_ini'] . ' - ' . $f1['mar_fin'];
      }
      if($f1['mie_ini'] == 'vacio' || $f1['mie_fin'] == 'vacio') {
        echo '<td>--</td>';
      } else {
        echo '<td>' . $f1['mie_ini'] . ' - ' . $f1['mie_fin'];
      }
      if($f1['jue_ini'] == 'vacio' || $f1['jue_fin'] == 'vacio') {
        echo '<td>--</td>';
      } else {
        echo '<td>' . $f1['jue_ini'] . ' - ' . $f1['jue_fin'];
      }
      if($f1['vie_ini'] == 'vacio' || $f1['vie_fin'] == 'vacio') {
        echo '<td>--</td>';
      } else {
        echo '<td>' . $f1['vie_ini'] . ' - ' . $f1['vie_fin'];
      }

      echo '</tr>';
    }

    echo '
      </table>
    </div>
    ';
  }
 ?>

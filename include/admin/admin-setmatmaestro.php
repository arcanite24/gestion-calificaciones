<?php
  include('include/conectar.php');
 ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Asignar materia a maestro</h3>
  </div>
  <div class="panel-body">
    <div class="" id="alert-place-setmat"></div>
    <form role="form" id="setmat">
      <div class="form-group">
        <label for="mat-setmat">Materia:</label>
        <select class="form-control" name="mat-setmat" id="mat-setmat">
          <?php
            $q_m = "SELECT * FROM materias";
            $r_m = mysql_query($q_m) or die('<option value="-1">No hay materias registrados.</option>');
            while ($f_m = mysql_fetch_assoc($r_m)) {
              echo '<option value="'.$f_m['id_materia'].'">'.$f_m['nombre'].'</option>';
            }
           ?>
        </select>
      </div>
      <div class="form-group">
        <label for="maestro-setmat">Maestro:</label>
        <select class="form-control" name="maestro-setmat" id="maestro-setmat">
          <?php
            $q_m = "SELECT * FROM maestros";
            $r_m = mysql_query($q_m) or die('<option value="-1">No hay maestros registrados.</option>');
            while ($f_m = mysql_fetch_assoc($r_m)) {
              echo '<option value="'.$f_m['id_maestro'].'">'.$f_m['maestro_nombre'].'</option>';
            }
           ?>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

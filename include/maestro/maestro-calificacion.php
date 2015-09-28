<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Asignar Calificación</h3>
  </div>
  <div class="panel-body">
    <div class="" id="alert-place-cali"></div>
    <form role="form" id="setcali">
      <div class="form-group">
        <label for="cali-grupo">Grupo:</label>
        <select class="form-control" name="cali-grupo" id="cali-grupo">
          <option value="-1">-- Seleccionar grupo --</option>
          <?php
            include("include/conectar.php");
            $q1 = "SELECT * FROM grupos ORDER BY nombre_grupo";
            $r1 = mysql_query($q1)or die(mysql_error() . "error en la cuery");
            while ($f1 = mysql_fetch_array($r1)) {
              echo "<option value=".$f1['id_grupo'].">".$f1['nombre_grupo']."</option>";
            }
           ?>
        </select>
      </div>
      <div class="form-group">
        <label for="cali-alumno">Alumnos:</label>
        <select class="form-control" name="cali-alumno" id="cali-alumno">
          <option value="-1">-- Seleccionar Alumnos --</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alumno-boleta">Boleta:</label>
        <input type="text" required="required" class="form-control" name="alumno-boleta" id="alumno-boleta" placeholder="Boleta del alumno.">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

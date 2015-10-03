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
        <label for="materia-setcal">Materias:</label>
        <div class="row">
          <div class="col-md-8">
            <select required="required" class="form-control" name="materia-setcal" id="materia-setcal">
              <option value="-1">Alumno no seleccionado</option>
            </select>
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="cal-setcal" min="0" max="10" placeholder="Calificacion:" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

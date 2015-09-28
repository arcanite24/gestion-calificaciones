<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Añadir Alumno</h3>
  </div>
  <div class="panel-body">
    <div class="" id="alert-place-alumno"></div>
    <form role="form" id="addalumno">
      <div class="form-group">
        <label for="alumno-usuario">Usuario:</label>
        <input type="text" required="required" class="form-control" name="alumno-usuario" id="alumno-usuario" placeholder="Nombre de usuario del alumno.">
      </div>
      <div class="form-group">
        <label for="alumno-contra">Contraseña:</label>
        <input type="password" required="required" class="form-control" name="alumno-contra" id="alumno-contra" placeholder="Contraseña del alumno.">
      </div>
      <div class="form-group">
        <label for="alumno-nombre">Nombre:</label>
        <input type="text" required="required" class="form-control" name="alumno-nombre" id="alumno-nombre" placeholder="Nombre del alumno.">
      </div>
      <div class="form-group">
        <label for="alumno-grupo">Grupo:</label>
        <select class="form-control" name="alumno-grupo" id="alumno-grupo">
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
        <label for="alumno-boleta">Boleta:</label>
        <input type="text" required="required" class="form-control" name="alumno-boleta" id="alumno-boleta" placeholder="Boleta del alumno.">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

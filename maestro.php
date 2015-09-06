<?php
  include("include/header.php");
 ?>
<div class="container">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>Añadir Calificaciones</h3>
    </div>
    <div class="panel-body">
      <form role="form">
        <div class="form-group">
          <label for="grupo">Grupo:</label>
          <select class="form-control" name="grupo" id="grupo">
            <option value="bd">1IV1</option>
            <option value="bd">1IV2</option>
            <option value="bd">1IV3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="alumno">Alumno:</label>
          <select class="form-control" name="alumno" id="alumno">
            <option value="bd">Jose Perez Garcia</option>
            <option value="bd">Jose Perez Garcia</option>
            <option value="bd">Jose Perez Garcia</option>
          </select>
        </div>
        <div class="form-group">
          <label for="materia">Materia:</label>
          <select class="form-control" name="alumno" id="materia">
            <option value="bd">Algebra</option>
            <option value="bd">Algebra II</option>
            <option value="bd">Algebra III</option>
          </select>
        </div>
        <div class="form-group">
          <label for="calif">Calificación</label>
          <select class="form-control" name="calificacion">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
    </div>
  </div>

</div>

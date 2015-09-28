<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Añadir Materia</h3>
  </div>
  <div class="panel-body">
    <div class="" id="alert-place-materia"></div>
    <form role="form" id="addmateria">
      <div class="form-group">
        <label for="nombre-materia">Nombre:</label>
        <input required type="text" id="nombre-materia" class="form-control" name="nombre-materia" placeholder="Nombre de la materia">
      </div>
      <div class="form-group">
        <label for="semestre-mat">Semestre:</label>
        <select class="form-control" name="semestre-materia" id="semestre-mat">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

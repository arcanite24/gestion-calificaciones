<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Añadir Grupo</h3>
  </div>
  <div class="panel-body">
    <div class="" id="alert-place-grupo"></div>
    <form role="form" id="addgrupo">
      <div class="form-group">
        <label for="nombre-grupo">Grupo:</label>
        <input type="text" id="nombre-grupo" class="form-control" name="grupo" placeholder="Nombre del grupo" required>
      </div>
      <div class="form-group">
        <label for="semestre">Semestre:</label>
        <select class="form-control" name="semestre" id="semestre">
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

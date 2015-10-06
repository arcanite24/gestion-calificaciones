<?php
include('include/conectar.php');
 ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Chat de aclaraciones</h3>
  </div>
  <div class="panel-body">
    <div class="" id="alert-place-chat"></div>
    <form role="form" id="chat">
      <div class="form-group">
        <label for="maestro-chat">Mensaje para el maestro:</label>
        <select class="form-control" name="maestro-chat" id="maestro-chat">
          <?php
            $q = "SELECT * FROM maestros";
            $r = mysql_query($q) or die('<option value="-1">No se encontraron maestros'.mysql_error().'</option>');
            while ($f = mysql_fetch_assoc($r)) {
              echo '<option value="'.$f['id_maestro'].'">'.$f['maestro_nombre'].'</option>';
            }
           ?>
        </select>
      </div>
      <div class="form-group">
        <textarea class="form-control" id="mensaje-chat" name="mensaje-chat" rows="8" cols="40"></textarea>
      </div>
      <button type="button" id="send-msg" class="btn btn-default">Enviar</button>
    </form>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Ver conversaciones con: </h4>
    <form>
      <select class="form-control" name="maestro-conversaciones" id="maestro-conversaciones">
        <?php
          $q = "SELECT * FROM maestros";
          $r = mysql_query($q) or die('<option value="-1">No se encontraron maestros'.mysql_error().'</option>');
          while ($f = mysql_fetch_assoc($r)) {
            echo '<option value="'.$f['id_maestro'].'">'.$f['maestro_nombre'].'</option>';
          }
         ?>
      </select>
    </form>
  </div>
  <div class="panel-body">
    <div class="alert-place-chatmsg"></div>
    <div id="chat-msg"></div>
  </div>
</div>

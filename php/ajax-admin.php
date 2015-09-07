<?php
$op = $_GET['operacion'];
include("../include/conectar.php");

if($op == 1) {
  echo '<option value="null">---</option>';
  $q1 = "SELECT * FROM grupos ORDER BY nombre_grupo";
  $r1 = mysql_query($q1)or die(mysql_error() . "error en la cuery");
  while ($f1 = mysql_fetch_array($r1)) {
    echo "<option value=".$f1['iD_grupo'].">".$f1['nombre_grupo']."</option>";
  }
}
 ?>

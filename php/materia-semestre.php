<?php
  include("../include/conectar.php");
  $q_mat = "SELECT * FROM grupos ORDER BY semestre";
  $s1 = false;
  $s2 = false;
  $s3 = false;
  $s4 = false;
  $s5 = false;
  $s6 = false;
  $r = mysql_query($q_mat);
  while($f = mysql_fetch_assoc($r)) {
    if($f['semestre'] == 1 && !$s1) {
      echo '<option value="1">1</option>';
      $s1 = false;
    }
    if($f['semestre'] == 2 && !$s2) {
      echo '<option value="2">2</option>';
      $s2 = false;
    }
    if($f['semestre'] == 3 && !$s3) {
      echo '<option value="3">3</option>';
      $s3 = false;
    }
    if($f['semestre'] == 4 && !$s4) {
      echo '<option value="4">4</option>';
      $s4 = false;
    }
    if($f['semestre'] == 5 && !$s5) {
      echo '<option value="5">5</option>';
      $s5 = false;
    }
    if($f['semestre'] == 6 && !$s6) {
      echo '<option value="6">6</option>';
      $s6 = false;
    }
  }
?>

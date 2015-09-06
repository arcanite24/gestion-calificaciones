<?php
session_start();
session_destroy();
header('Location: ../index.php?wrong=2');
 ?>

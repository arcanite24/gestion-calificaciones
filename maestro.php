<?php
  @session_start();
  //!$_SESSION['logeado'] &&
  if($_SESSION['user'] != "Maestro") {
    header('Location: index.php?wrong=3');
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Gestión IPN</title>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/theme.css">
     <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="css/master.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script src="js/maestro.js"></script>
   </head>
   <body>

     <nav class="navbar navbar-default">
       <div class="container-fluid">
         <div class="navbar-header">
           <a class="navbar-brand" href="#">Gestión IPN - Maestro</a>
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Menu</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
         </div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li class=<?php if($_GET['tab'] == 'calificacion') { echo('"active"'); } ?>><a href="?tab=calificacion">Asignar Calificacion <span class="sr-only">(current)</span></a></li>             
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="#"><span class="glyphicon glyphicon-book"></span> Perfil</a></li>
             <li><a href="php/logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Salir</a></li>
           </ul>
         </div>
       </div>
     </nav>

     <div class="container">
       <?php
         if(isset($_GET['tab'])) {
             $tab = $_GET['tab'];
             if ($tab == 'calificacion') {
               include('include/maestro/maestro-calificacion.php');
             }
         } else {
           include('include/admin/admin-grupo.php');
         }
        ?>
     </div>

$(document).ready(function(){
  $("#addgrupo").on('submit',function(event){
    event.preventDefault();
    data = $(this).serialize();
    $.ajax({
      type: "GET",
      url: "submit-admin.php?type=addgrupo",
      data: data
    }).done(function(msg) {
        document.getElementById("alert-place-grupo").innerHTML = msg;
        $.ajax({
          type: "GET",
          url: "php/ajax-admin.php?operacion=1",
          data: data
        }).done(function(msg3) {
            document.getElementById("grupo-horario").innerHTML = msg3;
            document.getElementById("alumno-grupo").innerHTML = msg3;
        });
    });
   });

   $("#addmateria").on('submit',function(event){
     event.preventDefault();
     data = $(this).serialize();
     $.ajax({
       type: "GET",
       url: "submit-admin.php?type=addmateria",
       data: data
     }).done(function( msg2 ) {
         document.getElementById("alert-place-materia").innerHTML = msg2;
     });
    });
});

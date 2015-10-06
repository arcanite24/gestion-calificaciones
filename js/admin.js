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
        setTimeout(function() {
          document.getElementById("alert-place-grupo").innerHTML = "";
        }, 2000);
        $.ajax({
          type: "GET",
          url: "php/ajax-admin.php?operacion=1",
          data: data
        }).done(function(msg3) {
            //document.getElementById("alumno-grupo").innerHTML = msg3;
            //document.getElementById("hor-grupo").innerHTML = msg3;
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
         setTimeout(function() {
           document.getElementById("alert-place-materia").innerHTML = "";
         }, 2000);
     });
    });

    $("#setmat").on('submit',function(event){
      event.preventDefault();
      data = $(this).serialize();
      $.ajax({
        type: "GET",
        url: "submit-admin.php?type=setmat",
        data: data
      }).done(function( msg2 ) {
          document.getElementById("alert-place-setmat").innerHTML = msg2;
          setTimeout(function() {
            document.getElementById("alert-place-setmat").innerHTML = "";
          }, 2000);
      });
     });

    $("#addhorario").on('submit',function(event){
      event.preventDefault();
      data = $(this).serialize();
      $.ajax({
        type: "GET",
        url: "submit-admin.php?type=addhorario",
        data: data
      }).done(function( msgh ) {
        document.getElementById("alert-place-horario").innerHTML = msgh;
        setTimeout(function() {
          document.getElementById("alert-place-horario").innerHTML = "";
        }, 2000);
      });
     });

     $("#addmaestro").on('submit',function(event){
       event.preventDefault();
       data = $(this).serialize();
       $.ajax({
         type: "GET",
         url: "submit-admin.php?type=addmaestro",
         data: data
       }).done(function( msgm ) {
         document.getElementById("alert-place-maestro").innerHTML = msgm;
         setTimeout(function() {
           document.getElementById("alert-place-maestro").innerHTML = "";
         }, 2000);
       });
      });

    $("#addalumno").on('submit',function(event){
      event.preventDefault();
      data = $(this).serialize();
      $.ajax({
        type: "GET",
        url: "submit-admin.php?type=addalumno",
        data: data
      }).done(function( msg2 ) {
          document.getElementById("alert-place-alumno").innerHTML = msg2;
          setTimeout(function() {
            document.getElementById("alert-place-alumno").innerHTML = "";
          }, 2000);
      });
     });

     $("#grupo-horario").change(function() {
       $.ajax({
         type: "GET",
         url: "php/ajax-admin.php?operacion=2&idg="+$("#grupo-horario").val()
       }).done(function( grupoHorario ) {
           document.getElementById("alumno-horario").innerHTML = grupoHorario;
       });
     });

     $('#hor-grupo').change(function() {
       $.ajax({
         type: "GET",
         url: "php/ajax-horario.php?op=materia&grupo=" + $("#hor-grupo").val()
       }).done(function( r1 ) {
           document.getElementById("hor-mat1").innerHTML = r1;
           document.getElementById("hor-mat2").innerHTML = r1;
           document.getElementById("hor-mat3").innerHTML = r1;
           document.getElementById("hor-mat4").innerHTML = r1;
           document.getElementById("hor-mat5").innerHTML = r1;
           document.getElementById("hor-mat6").innerHTML = r1;
           document.getElementById("hor-mat7").innerHTML = r1;
           document.getElementById("hor-mat8").innerHTML = r1;
           document.getElementById("hor-mat9").innerHTML = r1;
       });
     });
});

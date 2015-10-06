$(document).ready(function(){
  $("#cali-grupo").change(function() {
    $.ajax({
      type: "GET",
      url: "php/ajax-maestro.php?op=setcali&grupo="+$("#cali-grupo").val()
    }).done(function( alumnocali ) {
      document.getElementById("cali-alumno").innerHTML = alumnocali;
    });
  });

  $("#cali-alumno").change(function() {
    $.ajax({
      type: "GET",
      url: "php/ajax-maestro.php?op=getmat-setcal&grupo="+$("#cali-grupo").val()
    }).done(function( r1 ) {
      document.getElementById("materia-setcal").innerHTML = r1;
    });
  });

  $("#setcali").on('submit',function(event){
    event.preventDefault();
    data = $(this).serialize();
    $.ajax({
      type: "GET",
      url: "submit-maestro.php?type=setcali",
      data: data
    }).done(function( msgcali ) {
      document.getElementById("alert-place-cali").innerHTML = msgcali;
      setTimeout(function() {
        document.getElementById("alert-place-cali").innerHTML = "";
      }, 2000);
    });
   });

});

$(document).ready(function(){
  $("#cali-grupo").change(function() {
    $.ajax({
      type: "GET",
      url: "php/ajax-maestro.php?op=setcali&grupo="+$("#cali-grupo").val()
    }).done(function( alumnocali ) {
        document.getElementById("cali-alumno").innerHTML = alumnocali;
    });
  });
});

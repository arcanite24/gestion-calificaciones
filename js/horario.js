$('#hor-grupo').change(function() {
  $.ajax({
    type: "GET",
    url: "php/ajax-admin.php?operacion=2&idg="+$("#hor-grupo").val()
  }).done(function( grupoHorario ) {
      document.getElementById("alumno-horario").innerHTML = grupoHorario;
  });
});

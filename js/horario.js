

$("#addmateria").on('submit',function(event){
  event.preventDefault();
  data = $(this).serialize();
  $.ajax({
    type: "GET",
    url: "../php/ajax-horario.php?op=materia&sem-mat=" + $("#semestre-mat").val,
    data: data
  }).done(function( msg2 ) {
      document.getElementById("alert-place-materia").innerHTML = msg2;
  });
 });

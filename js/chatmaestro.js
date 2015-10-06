function checkMsg() {
  event.preventDefault();
  data = $(this).serialize();
  $.ajax({
    type: "GET",
    url: "submit-chat.php?op=checkmsg&maestro=" + $('#alumno-chat :selected').val()
  }).done(function( msg2 ) {
    alert(msg2);
    $('#chat-msg').innerHTML = msg2;
  });
}

$(document).ready(function(){

  setInterval(function() {
    $.ajax({
      type: "GET",
      url: "submit-chat.php?op=checkmsgmaestro&maestro=" + $('#alumno-conversaciones :selected').val()
    }).done(function( msg2 ) {
      //alert(msg2);
      document.getElementById("chat-msg").innerHTML = msg2;
    });
  },1000);

  $('#send-msg').click(function() {
    data = $('#chat').serialize();
    $.ajax({
      type: "GET",
      url: "submit-chat.php?op=addmsgma",
      data: data
    }).done(function( msg2 ) {
        document.getElementById("alert-place-chat").innerHTML = msg2;
        setTimeout(function() {
          document.getElementById("alert-place-chat").innerHTML = "";
        }, 2000);


    });
  });

});

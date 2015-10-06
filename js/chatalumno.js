function checkMsg() {
  event.preventDefault();
  data = $(this).serialize();
  $.ajax({
    type: "GET",
    url: "submit-chat.php?op=checkmsg&maestro=" + $('#maestro-chat :selected').val()
  }).done(function( msg2 ) {
    alert(msg2);
    $('#chat-msg').innerHTML = msg2;
  });
}

$(document).ready(function(){

  setInterval(function() {
    $.ajax({
      type: "GET",
      url: "submit-chat.php?op=checkmsgalumno&maestro=" + $('#maestro-conversaciones :selected').val()
    }).done(function( msg2 ) {
      //alert(msg2);
      document.getElementById("chat-msg").innerHTML = msg2;
    });
  },1000);

  $('#send-msg').click(function() {
    data = $('#chat').serialize();
    $.ajax({
      type: "GET",
      url: "submit-chat.php?op=addmsgal",
      data: data
    }).done(function( msg2 ) {
        document.getElementById("alert-place-chat").innerHTML = msg2;
        setTimeout(function() {
          document.getElementById("alert-place-chat").innerHTML = "";
        }, 2000);

    });
  });

});

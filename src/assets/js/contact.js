$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        subject: $("#pet").val(),
        message: $("#message").val()
      };
  
      $.ajax({
        type: "POST",
        url: "assets/php/contact.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  });
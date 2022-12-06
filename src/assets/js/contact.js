// $(document).ready(function () {
//     $("form").submit(function (event) {
//       var formData = {
//         name: $("#name").val(),
//         email: $("#email").val(),
//         subject: $("#pet").val(),
//         message: $("#message").val()
//       };
  
//       $.ajax({
//         type: "POST",
//         url: "assets/php/contact.php",
//         data: formData,
//         dataType: "json",
//         encode: true,
//       }).done(function (data) {
//         console.log(data);
//       });
  
//       event.preventDefault();
//     });
//   });


$(document).ready(function(){
  $("form").submit(function(event){
    
      event.preventDefault();
      var formValues= $(this).serialize();

      $.post("assets/php/contact.php", formValues, function(data){
          // Display the returned data in browser
          console.log(data);
      });
  });
});

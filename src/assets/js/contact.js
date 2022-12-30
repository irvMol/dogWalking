document.getElementById('contactBtn').addEventListener('click', resetView);


$(document).ready(function(){
  $("form").submit(function(event){
    
      event.preventDefault();
      var formValues= $(this).serialize();

      $.post("/php/contact.php", formValues, function(data){
        

        // Display the returned data in browser
          if (parseInt(data) == 0){
            success();
          }
          
          else{
            fail(data);
          }
      });
  });
});

function success() {
  document.getElementById("formView").style.display = "none";
  document.getElementById("formSubmitted").style.display = "block";

}

function fail(error) {
  document.getElementById("formView").style.display = "none";
  document.getElementById("formFailed").style.display = "block";
  document.getElementById("errorMsg").innerHTML = error;

}

function resetView() {
  document.getElementById("formView").style.display = "block";
  document.getElementById("formSubmitted").style.display = "none";
  document.getElementById("formFailed").style.display = "none";
}
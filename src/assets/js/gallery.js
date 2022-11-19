
document.getElementById('galleryBtn').addEventListener('click', populate);
var pictures= [];

 const dir = "assets/images/";
// const dir = "assets/imagesTest/";

$(document).ready(function(){
  $.ajax({
    url: "http://php.test/assets/php/getimages.php",
    method: "GET",
    success: function(fileNames) {
      console.log(fileNames);
      console.log("SUCCESS")
      

      for(var i in fileNames) {
        pictures.push(fileNames[i]);
      }

    },
    error: function(data) {
      console.log("FAIL")
    }
  });
});

function populate() {

const items = document.querySelectorAll('.item');

items.forEach(item => {

  let rand = Math.floor(Math.random() * pictures.length);
  
  let path = (dir.concat(pictures[rand]))
  console.log(path)
  item.src = path;
  // item.href = path;
  item.setAttribute("href", path);
  

});

    refreshFsLightbox();

  }
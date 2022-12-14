
document.getElementById('galleryBtn').addEventListener('click', populate);
var pictures= [];

 const dir = "assets/images/";
 const thumbnails = document.querySelectorAll('.thumbnail');
 const links = document.querySelectorAll('.imgLink');

$(function() {
  $.ajax({
    url: "http://php.test/assets/php/getimages.php",
    method: "GET",
    success: function(fileNames) {
      console.log(fileNames);
      console.log("Retrieved images successfully")
      

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

  for (let i = 0; i < links.length; i++) {

    let rand = Math.floor(Math.random() * pictures.length);  
    let path = (dir.concat(pictures[rand]))
    console.log(path)

    links[i].href = path;
    thumbnails[i].src = path;
  }

  refreshFsLightbox();
}

document.getElementById('galleryBtn').addEventListener('click', populateFromAPI);
var pictures = [];

const dir = "assets/images/";
const thumbnails = document.querySelectorAll('.thumbnail');
const links = document.querySelectorAll('.imgLink');

//use this if wanting to showcase images in a directory
function populateFromFolder() {

  $(function () {
    $.ajax({
      url: "https://frontrangedogs.com/php/getimages.php",
      method: "GET",
      success: function (fileNames) {
        console.log("Retrieved images successfully");

        for (let i = 0; i < links.length; i++) {
          let rand = Math.floor(Math.random() * fileNames.length);
          let path = (dir.concat(fileNames[rand]));
          let thumbPath = (dir + "thumbnails/" + fileNames[rand]);

          links[i].href = path;
          thumbnails[i].src = thumbPath;
        }

        refreshFsLightbox();
      },
      error: function (data) {
        console.log("FAIL");
      }
    });
  });
}

function populateFromAPI() {
  fetch("https://dog.ceo/api/breeds/image/random/12")
    .then((response) => response.json())
    .then((data) => {
      console.log("Retrieved images successfully");

      data.message.forEach((imageUrl, i) => {
        let path = imageUrl;
        let thumbPath = imageUrl; // You can adjust this if you have separate thumbnail URLs

        links[i].href = path;
        thumbnails[i].src = thumbPath;
      });

      refreshFsLightbox();
    })
    .catch((error) => {
      console.error("Error fetching images:", error);
    });
}

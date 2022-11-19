<?php

header('Content-Type: application/json');

 chdir('../images');
// chdir('../imagesTest');

$dir = getcwd();

foreach(glob($dir.'/*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
    $imag[] =  basename($file);

}

echo json_encode($imag);
?>

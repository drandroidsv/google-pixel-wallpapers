<?php
$dir_name = "Hispanic Heritage Month/";
$images = glob($dir_name."*.png");

foreach($images as $image) {
    $name = basename($image);
   echo '{"name": "'.$name.'", "url": "'.$url.'/'.$image.'", "collections": "Hispanic Heritage Month"},';
} 
?>

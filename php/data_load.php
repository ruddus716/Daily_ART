<?php  
$imagesDir = '../data/Blue/1/';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
usort($images, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
$size = count($images);
$output = array("images" => $images, "size" => $size);
echo json_encode($output);
?>


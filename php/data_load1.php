<?php  
$imagesDirBlue = '../data/Blue/1/';
$imagesBlue = glob($imagesDirBlue . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirBlack = '../data/Black/1/';
$imagesBlack = glob($imagesDirBlack . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$imagesDirWhite = '../data/White/1/';
$imagesWhite = glob($imagesDirWhite . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirYellow = '../data/Yellow/1/';
$imagesYellow = glob($imagesDirYellow . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirPurple = '../data/Purple/1/';
$imagesPurple = glob($imagesDirPurple . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirGreen = '../data/Green/1/';
$imagesGreen = glob($imagesDirGreen . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$output = array("images" => array_merge($imagesBlue,$imagesBlack,$imagesWhite,$imagesYellow,$imagesPurple,$imagesGreen));




echo json_encode($output);
?>


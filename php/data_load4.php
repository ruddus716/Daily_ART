<?php  
$imagesDirBlue = '../data/Blue/4/';
$imagesBlue = glob($imagesDirBlue . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirBlack = '../data/Black/4/';
$imagesBlack = glob($imagesDirBlack . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$imagesDirWhite = '../data/White/4/';
$imagesWhite = glob($imagesDirWhite . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirYellow = '../data/Yellow/4/';
$imagesYellow = glob($imagesDirYellow . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirPurple = '../data/Purple/4/';
$imagesPurple = glob($imagesDirPurple . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


$imagesDirGreen = '../data/Green/4/';
$imagesGreen = glob($imagesDirGreen . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$output = array("images" => array_merge($imagesBlue,$imagesBlack,$imagesWhite,$imagesYellow,$imagesPurple,$imagesGreen));



echo json_encode($output);
?>


<?php
header('Content-type: image/png');

$img_width = 800;
$img_height = 600;

$img = imagecreatetruecolor($img_width, $img_height);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$orange = imagecolorallocate($img, 255, 200, 0);
imagefill($img, 0, 0, $black); // заливка
$quadangle_widthAndHeight_One = 1;
$quadangle_widthAndHeight_Two = 2;

imagerectangle(
    //quadangle
    $img,
    ($img_width * $quadangle_widthAndHeight_One) / 10, // ширина
    ($img_height * $quadangle_widthAndHeight_One) / 10, // высота
    ($img_width * $quadangle_widthAndHeight_Two) / 10,
    ($img_height * $quadangle_widthAndHeight_Two) / 10,
    $white
);
imagepolygon(
    //threeangle
    $img,
    [
        ($img_width * 3) / 10,
        ($img_height * 2) / 10,
        ($img_width * 3.5) / 10,
        ($img_height * 1) / 10,
        ($img_width * 4) / 10,
        ($img_height * 2) / 10,
    ],
    3,
    $red
);
imageellipse($img, 400, 97, 50, 50, $blue); //circle
//imagearc($img, 100, 100, 150, 150, 25, 155, $red);
imageopenpolygon(
    $img,
    [
        ($img_width * 6) / 10,
        ($img_height * 2) / 10,
        ($img_width * 6.5) / 10,
        ($img_height * 1) / 10,
        ($img_width * 7) / 10,
        ($img_height * 1) / 10,
        ($img_width * 7.5) / 10,
        ($img_height * 2) / 10,
        ($img_width * 6) / 10,
        ($img_height * 2) / 10,
    ],
    5, //point
    $green
);

imagepng($img); //делаем png
?>
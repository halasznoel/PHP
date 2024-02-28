<?php
// Kép létrehozása
$width = 400;
$height = 100;
$image = imagecreatetruecolor($width, $height);

// Szín létrehozása
$red = imagecolorallocate($image, 255, 0, 0); // Piros szín


// Szakasz rajzolása (kép,bfx,bfx,jax,jay) (bf:bal felső, ja: jobb alsó)(a bf sarok az origó (0,0))

imageline($image,0,0,399,99, $red);





// Kép kimenetele
header('Content-type: image/png');
imagepng($image);

// Kép felszabadítása
imagedestroy($image);
?>

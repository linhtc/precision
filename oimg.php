<?php 
$imgPath = 'product_s2_03.jpg';
list($width, $height) = getimagesize($imgPath);
$im = file_get_contents($imgPath);
$base64 = base64_encode($im);
$data = base64_decode($base64);

// $expertW = 405;
// $expertH = 365;
$density = floor($width/365);
$expertW = $width/$density;
$expertH = $height/$density;

$targetImage = imagecreatetruecolor($expertW, $expertH);   
imagealphablending( $targetImage, false );
imagesavealpha( $targetImage, true );

$im = imagecreatefromstring($data);
if ($im !== false) {
	imagecopyresampled( $targetImage, $im,
		0, 0,
		0, 0,
		$expertW, $expertH,
		$width, $height
	);
	imagejpeg($targetImage, 'fit_product_s2_03.jpg', 100);
	imagedestroy($im);
}
else {
	echo 'An error occurred.';
}
?>
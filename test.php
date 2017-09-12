<?php 
$im = file_get_contents("c.png");
$base64 = base64_encode($im);
$data = base64_decode($base64);

$targetImage = imagecreatetruecolor(540, 405);   
imagealphablending( $targetImage, false );
imagesavealpha( $targetImage, true );

$im = imagecreatefromstring($data);
if ($im !== false) {
	imagecopyresampled( $targetImage, $im,
		0, 0,
		0, 0,
		540, 405,
		900, 675
	);
	imagepng($targetImage, 'c2.png', 5);
	imagedestroy($im);
}
else {
	echo 'An error occurred.';
}
?>
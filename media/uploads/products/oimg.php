<?php
$dir    = '/var/www/html/precision/media/uploads/products';
$files = scandir($dir);
// $files2 = scandir($dir, 1);

// print_r($files1);
// print_r($files2);
// exit;

if(count($files)){
	foreach($files as $file){
		if($file == '.' || $file == '..' || $file == 'oimg.php'){
			continue;
		}
		$imgPath = $dir.'/'.$file;
		echo $file."\n";
		
		$im = @imagecreatefromjpeg($imgPath);
		$targetImage = resize_image_max($im, 405, 365);
		imagejpeg($targetImage, $dir.'/fit_'.$file, 100);
		imagedestroy($im);
		
		continue;
		
		list($width, $height) = getimagesize($imgPath);
		// 		$im = file_get_contents($imgPath);
		// 		$base64 = base64_encode($im);
		// 		$data = base64_decode($base64);
		
		// $expertW = 405;
		// $expertH = 365;
		$density = floor($width/800);
		$expertW = floor($width/$density);
		$expertH = floor($height/$density);
		
		// 		echo $density."\n";
		// 		echo $expertW."\n";
		// 		echo $expertH."\n";
		// 		exit;
		
		$targetImage = imagecreatetruecolor($expertW, $expertH);
		imagealphablending( $targetImage, false );
		imagesavealpha( $targetImage, true );
		
		// 		$im = imagecreatefromstring($data);
		$im = @imagecreatefromjpeg($imgPath);
		if ($im !== false) {
			imagecopyresampled( $targetImage, $im,
					0, 0,
					0, 0,
					$expertW, $expertH,
					$width, $height
					);
			imagejpeg($targetImage, $dir.'/fit_'.$file, 100);
			imagedestroy($im);
		}
		else {
			echo 'An error occurred.';
		}
	}
}

function resize_image_max($image,$max_width,$max_height) {
	$w = imagesx($image); //current width
	$h = imagesy($image); //current height
	if ((!$w) || (!$h)) { $GLOBALS['errors'][] = 'Image couldn\'t be resized because it wasn\'t a valid image.'; return false; }
	
	if (($w <= $max_width) && ($h <= $max_height)) { return $image; } //no resizing needed
	
	//try max width first...
	$ratio = $max_width / $w;
	$new_w = $max_width;
	$new_h = $h * $ratio;
	
	//if that didn't work
	if ($new_h > $max_height) {
		$ratio = $max_height / $h;
		$new_h = $max_height;
		$new_w = $w * $ratio;
	}
	
	$new_image = imagecreatetruecolor ($new_w, $new_h);
	imagecopyresampled($new_image,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
	return $new_image;
}

?>
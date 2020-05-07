<?php
if (isset($_GET['lon0']) && isset($_GET['lon1']) && isset($_GET['lat0']) && isset($_GET['lat1'])) {
	$lon0 = $_GET['lon0'];
	$lon1 = $_GET['lon1'];
	$lat0 = $_GET['lat0'];
	$lat1 = $_GET['lat1'];
} else {
	return 1;
}
if (isset($_GET['w'])) {
	$which = 'raster/W'.$_GET['w'].'.png';
	$img = imagecreatefrompng($which);
	if ($img) {
		$W = imagesx($img);
		$H = imagesy($img);
		$x = ($lon0+180)*$W/360;
		$y = (90-$lat1)*$H/150;
		$w = ($lon1-$lon0)*$W/360;
		$h = ($lat1-$lat0)*$H/150;
		$arr = array('x'=>$x,'y'=>$y,'width'=>$w,'height'=>$h);
		$imgCrop = imagecrop($img,$arr);
		if ($imgCrop) {
			header('Content-Type: image/png');
			imagepng($imgCrop);
		}
	}
}

<?php 

//QR Generater.
function QRgen($QR){
	$QRgen = "<img src='https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=$QR'>";
	echo $QRgen;
}


//QR Scanner Img
function QRscan($QRImg){
	$QRImg = urlencode($QRImg);
	$Contents = file_get_contents("http://api.qrserver.com/v1/read-qr-code/?fileurl=$QRImg");
	$QR = json_decode($Contents, true);
	$QR = htmlspecialchars($QR[0]['symbol'][0]['data']);
	echo $QR;
}

?>
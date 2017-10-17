<?php

session_start();
 
header("Content-type: image/png");

$_SESSION["Captcha"]="";
 

$gambar = imagecreate(125, 50);
//warna
imagecolorallocate($gambar, 69, 179, 157);
 
$color = imagecolorallocate($gambar, 253, 252, 252);
$font = "assets/font/Allura-Regular.otf"; 
$ukuran_font = 14;
$posisi = 32;
for($i=0;$i<=5;$i++) {
	// jumlah karakter
	$angka=rand(0, 9);
 
	$_SESSION["Captcha"].=$angka;
 
	$kemiringan= rand(20, 70);
 	
	imagettftext($gambar, $ukuran_font, $kemiringan, 8+15*$i, $posisi, $color, $font, $angka);	
}
imagepng($gambar); 
imagedestroy($gambar);
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<div class="kotak">	
		<?php
		session_start();
		if($_POST["$username"]==" "){
			header("location:login.php?pesan=unkosong");
		}
		else if($_POST["$password"]==" "){
			header("location:login.php?pesan=pwkosong");
		}
		else if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){
			header("location:login.php?pesan=salah");
		}else{		
			header("location:asd.php");
		}
		?>
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<div class="kotak">	
		<?php
		include 'connection.php';
		session_start();
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		if($_POST["$username"]==" "){
			header("location:login.php?pesan=unkosong");
		}
		else if($_POST["$password"]==" "){
			header("location:login.php?pesan=pwkosong");
		}
		else if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){
			header("location:login.php?pesan=salah");
		}else{
			$query = mysql_query("select * from user where username='$username' and password='$password'");
			$cek = mysql_num_rows($query);
			if($cek>0){		
			header("location:asd.php");}
			else{
				header("location:login.php?pesan=ngaco");
			}
		}
		?>
	</div>
</body>
</html>

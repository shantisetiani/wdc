<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>

	<div class="kotak">		

		<?php 
		include 'connection.php';
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<p>Username dan Password tidak sesuai.</p>";
			}
			if($_GET['pesan'] == "unkosong"){
				echo "<p>Username harap diisi terlebih dahulu.</p>";
			}
			if($_GET['pesan'] == "pwkosong"){
				echo "<p>Password harap diisi terlebih dahulu.</p>";
			}
			if($_GET['pesan'] == "ngaco"){
				echo "<p>Username dan password tidak vaild.</p>";
			}
			else if($_GET['pesan'] == "salah"){
				echo "<p>Captcha tidak sesuai.</p>";
			}
		}
		?>
		<div id="login">
		<p><b>Login</b></p>
		<form action="validasi.php" method="post">
			<table align="center">						
				<tr>
				<td>Username</td>
				<td><input name="username" value=""/></td>
				</tr>

				<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""/></td>
				</tr>
				
				<tr>
					<td>Captcha</td>				
					<td><img src="captcha.php"/> </td>
				</tr>
				<tr>
				<td>Isikan captcha </td>
				<td><input name="nilaiCaptcha" value=""/></td>
				</tr>
				<tr >
					<td><input type ="submit" value="Login"></td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</body>
</html>
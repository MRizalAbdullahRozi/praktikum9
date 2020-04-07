<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.login {
			background-color: white ;
			color: black;
		}

		body {
			background-color: grey;
		}
	</style>
</head>
<body>
	<h2>Silahkan Login Untuk Mengakses Halaman</h2>
	<br/>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table class="login">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN" class="tombol"></td>
				<td></td>
			</tr>
		</table>		
	</form>
</body>
</html>
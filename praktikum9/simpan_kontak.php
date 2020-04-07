<?php

include"login/admin/koneksi.inc.php";
mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

$Nama = $_POST['Nama'];
$Jkel = $_POST['Jkel'];
$Email = $_POST['Email'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$Pesan = $_POST['Pesan'];

if(mysqli_query($conn,"INSERT INTO kontak VALUES ('','$Nama','$jkel','$Email','$alamat','$kota','$pesan')")) {
	echo"<script>alert('Data Disimpan')</script>";
} else {
	echo"<script>alert('Koneksi  Gagal')</script>";
}
header("location: kontak.html");
?>
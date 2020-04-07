<style type="text/css">
	body {
		background-color: grey;

	}
	table {
		color: white;
		border-color: black;
	}
</style>
<?php 
include "koneksi.inc.php"; 

$sql="SELECT * from kontak order by Nama;"; 
$qry=mysqli_query($koneksi, $sql) or die(mysqli_error()); 

echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'> 
<tr> 
	<th>No</th> 
	<th>Nama</th> 
	<th>Jenis Kelamin</th>
	<th>Email</th> 
	<th>Alamat</th> 
	<th>Kota</th> 
	<th>Pesan</th>
	<th></th>"; 
$no=1; 
while($hasil=mysqli_fetch_row($qry)){ 
echo "
<tr> 
<td>$no</td> 
<td>$hasil[1]</td> 
<td>$hasil[2]</td> 
<td>$hasil[3]</td> 
<td>$hasil[4]</td> 
<td>$hasil[5]</td> 
<td>$hasil[6]</td> 
</tr>"; 
$no++; 
} 
echo "</table>"; 
?> 
<button><a href="../../kontak.html">Logout</a> </button>
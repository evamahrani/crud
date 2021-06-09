<?php
	if(isset($_GET['a']))
		$kode=$_GET['a'];
	$host="localhost";
$user="root";
$pass="";
$dbName="data_karyawan";
$kon=mysqli_connect($host,$user,$pass);
$hasil=mysqli_select_db($kon,$dbName);

	$sql="select * from karyawan";
	$hasil=mysqli_query($kon,$sql);
	if(!$hasil)
		die("Gagal query..".mysqli_error($kon));
?>
<a href="form_database.php">INPUT DATA</a>&nbsp;&nbsp;&nbsp;
<a href="index.php">DAFTAR KARYAWAN</a>&nbsp;&nbsp;&nbsp;
<h2>INFORMASI KARYAWAN</h2>
<?php
$urut=mysqli_fetch_assoc($hasil);

echo "<table border='1'>
	<tr><th>KONFIRMASI HAPUS DATA KARYAWAN</th></tr>
	<tr><td>ID</td><td>".$urut['id']."</td></tr>
	<tr><td>NIK</td><td>".$urut['nik']."</td></tr>
	<tr><td>Nama</td><td>".$urut['nama']."</td></tr>
	<tr><td>Jenis Kelamin</td><td>".$urut['jk']."</td></tr>
	<tr><td>Kota Asal</td><td>".$urut['kotaasal']."</td></tr>
	<tr><td>APAKAH DATA KARYAWAN INI AKAN DIHAPUS? <br/> 
	<a href='#'>YA</a> <a href='#'>TIDAK</a></td></tr>
</table>";
?>

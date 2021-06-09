<html>
<head>
	<title> CRUD </title>
</head>
<body>
	<h2>Data Karyawan</h2>
	<a href ="tambah.php"Tambah Data /a><br>
		<table border="2" width="100%">
			<tr>
				<th>ID</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Kota Asal</th>

			</tr>
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

	while ($data=$sql->fetch()){
		echo"<tr>";
		echo"<td>.$data['id']";
		echo"<td>.$data['nik']";
		echo"<td>.$data['nama']";
		echo"<td>.$data['jk']";
		echo"<td>.$data['kotaasal']";
		echo"td><a href='ubah.php?id=".$data['id']."'>Ubah</a></td>)";
		echo"<td><a href='hapus.php?id=".$data['id']."'>Hapus</a></td>)";
		echo"</tr>";
	?>
		</table>
</body>
</html>
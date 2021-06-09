<?php

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

    if(isset($_GET['a'])){
	$data=$_GET['a'];
	$sql="select * from karyawan";
	$jalankan=mysql_query($query);
	$hasil=mysql_fetch_array($jalankan);
	$id=$hasil['id'];
	$nik=$hasil['nik'];
	$nama=$hasil['nama'];
	$jk=$hasil['jk'];
	$kotaasal=$hasil['kotaasal'];}
?>
<form method='post' enctype="multipart/form-data">
	<table>
		<tr>
			<th colspan="2"><h2>EDIT DATA</h2>	<hr/></th>	
		</tr>
		<tr>
			<td>ID</td>
<td><input type="text" name="id" value="<?php echo $id;?>"></td>
		</tr>
		<tr>
			<td>NIK</td>
<td><input type="text" name="nik" value="<?php echo $nik;?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
<td><input type="text" name="jk" value="<?php echo $jk;?>"></td>
		</tr>
		<tr>
			<td>Kota Asal</td>
<td><input type="text" name="kotaasal" value="<?php echo $kotaasal;?>"></td>
		</tr>
		<tr>
	<td colspan='2'><input type="submit" value="Simpan" name="simpan"><input type="reset" value="Reset"></td>
		</tr>
	</table>
</form>

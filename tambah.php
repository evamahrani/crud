<?php
	$idbarang = $_GET["idbarang"];
	include "koneksi.php";
$sql = "select * from karyawan";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ("Gagal Query...");
$data = mysqli_fetch_array($hasil);
$id = $data["id"];
$nik = $data["nik"];
$nama = $data["nama"];
$jk = $data["jk"];
$kotaasal = $data["kotaasal"];

input type="hidden" name="id" value="<?php echo $id; ?>" />
value="<?php echo $id; ?>"
value="<?php echo $nik; ?>"
value="<?php echo $nama; ?>"
value="<?php echo $jk; ?>"
value="<?php echo $kotaasal; ?>"



if(isset($_POST["id"])) {
  $id	=$_POST["id"];
  $id_lama	=$_POST['id_lama'];
  $simpan		="EDIT";  }
  else { $simpan	= "BARU"; }


if($simpan == "EDIT") {
	$sql = "insert into karyawan
	(nama,harga,stok,foto)
	values
	('$nama',$harga,$stok,'$foto')"; }

?>

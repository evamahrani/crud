<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "data_karyawan";
$kon = mysql_connect($host,$user,$pass) or die("Gagal");
$pilih_db = mysql_select_db($dbName) or die("Database tidak ada");
?>
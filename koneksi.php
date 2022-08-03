<?php
$host = "localhost";
$user = "root";
$pass = "root";
$name = "heksatamaprima";
 
$koneksi = mysql_connect($host, $user) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
<?php
include 'header.php';
if ($_POST['namauser'] == ") {
echo('Nama tidak boleh kosong <br />');
$error = true; }
if ($_POST['password'] == ") {
echo('Password tidak boleh kosong <br />');
$error = true; }
if ($_POST['password'] != $_POST['password2']) {
echo('Password ulangi tidak sama <br />');
$error = true; }
if ($error == false) {
include 'database.php';
$hasil = mysql_query("INSERT INTO pengguna(nama, password)
VALUES('" . $_POST['namauser'] . "','" . md5($_POST['password']) . "')");
if ($hasil) {
echo 'Pendaftaran berhasil <br />';
echo 'Sekarang Anda bisa <a href="login.php">Login</a>';}}
else{
echo 'Pendaftaran gagal' . mysql_error();}
?>
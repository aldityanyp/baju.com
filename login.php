<?php 
session_start();
 
include "config/koneksi.php";
//ambil data dari form
$username=$_POST['txt_nama'];
$pass=md5($_POST['txt_pass']);
//koneksikan data
$pilih= "Select * From anggota where nama='$username' and password='$pass'";
$query=mysql_query($pilih);
$data=mysql_num_rows($query);
//Validasi Data dari form dengan database
 $isi = mysql_fetch_array($query);
 $id_user= $isi['id_user'];
 $nama=$isi['nama'];
 $hp=$isi['hp'];
 $email=$isi['email'];
 
 $alamat=$isi['alamat'];
if ($data >= 1)
 {
      $_SESSION['nama']=$nama;
	  $_SESSION['alamat']=$alamat;
	  $_SESSION['hp']=$hp;
	  $_SESSION['email']=$email;
	  $_SESSION['id_user']=$id_user;
  header("location:index.php");
 }
else
 {
	 echo "<script>alert('Maaf! Data yang anda masukan tidak benar'); 
     window.location = 'index.php'</script>";
  }
?>

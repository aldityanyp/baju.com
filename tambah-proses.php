
<?php
error_reporting(0);
session_start();
include "config/koneksi.php";
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan NIS
	$alamat		= $_POST['alamat'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$hp 		= $_POST['hp'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$email 		= $_POST['email'];
	$id_user	= $_POST['id_user'];
	$password	= md5($_POST['password']);  
    
    $simpan = mysql_query("insert into anggota VALUES ('$nama','$alamat','$hp','$email','$id_user','$password')");
	if($simpan){
	 $_SESSION['nama']=$nama;
	  $_SESSION['alamat']=$alamat;
	  $_SESSION['hp']=$hp;
	  $_SESSION['email']=$email;
	  $_SESSION['id_user']=$id_user;
    echo "<SCRIPT> alert('Simpan Data berhasil'); 
    location.href='index.php';
    </SCRIPT>\n"; 
    }else
    {
    echo "<SCRIPT> alert('Simpan Data gagal'); 
    location.href='index.php';
    </SCRIPT>\n"; 
        
    }
?>

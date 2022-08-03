<?php 	
session_start();
include "config/koneksi.php"; 
include "kode_auto1.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>.::.BajuBekas.com.::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">
<meta name="description" content="">
<meta name="keywords" content=".::.Heksatamaprima : Toko Obat Herbal.::.">
<meta http-equiv="Copyright" content="ZStudio">
<meta name="author" content="Rodianto">
<meta http-equiv="imagetoolbar" content="no">
<meta name="language" content="Indonesia">
<meta name="revisit-after" content="7">
<meta name="webcrawlers" content="all">
<meta name="rating" content="general">
<meta name="spiders" content="all">


<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!--// Stylesheet //-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/contentslider.css" rel="stylesheet" type="text/css" />
<link href="css/default.advanced.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ad-gallery.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/slider.css" rel="stylesheet" type="text/css" />
<!--// Javascript //-->
<script type="text/javascript" src="config/jquery.js"></script>
<script type="text/javascript" src="js/clearbox.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.min14.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/anythingslider.js"></script>
<script type="text/javascript" src="js/jquery.anythingslider.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/contentslider.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/jquery.ad-gallery.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/thumbgallery.js"></script>
<script type="text/javascript" src="js/eurofurence_500-eurofurence_700.font_9bc22cbd.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>

<script type="text/javascript" src="js/newsticker.js"></script>

<!--[if lte IE 7]>
<script type="text/javascript" src="js/jquery.dropdown.js"></script>
<![endif]-->


<script type="text/javascript" src="js/easy.js"></script>
<script type="text/javascript">
	$(document).ready(function(){		
		$.easy.tooltip();	
});
</script>





<meta charset="UTF-8">

<style type="text/css">
<!--
.style1 {color: #FF6600}
-->
</style>
</head>

<body>
<a name="top"></a>
<div id="wrapper_sec">
	<div id="head">
	  <div class="logo">
        	<a href="index.php"><img src="images/logo.png" alt="" style="height: 80px;"/></a>
      </div>
        <div class="rightnavi">
            <p class="bold right"><a id="various1" href="#inline1"><input style='width: 150px; height: 30px;' class= tombol2 ></a></p>
          <div class="clear">
          <ul><SCRIPT language=JavaScript src="almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, pengunjung...'); }
else { if (h < 15) { document.write('Selamat siang, pengunjung...'); }
else { if (h < 19) { document.write('Selamat sore, pengunjung...'); }
else { if (h <= 23) { document.write('Selamat malam, pengunjung...'); }
}}}</SCRIPT>    </ul> </div>
      </div>
        <div class="clear"></div>
        
        
        <div class="navigation">
          <ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
            <?php               
        $main=mysql_query("SELECT * FROM mainmenu WHERE aktif='Y'");

        while($r=mysql_fetch_array($main)){
	         echo "<li><b><a href='$r[link]'>$r[nama_menu]</a></b>
                    <ul>";
	         $sub=mysql_query("SELECT * FROM submenu, mainmenu  
                            WHERE submenu.id_main=mainmenu.id_main 
                            AND submenu.id_main=$r[id_main]");
	         while($w=mysql_fetch_array($sub)){
              echo " <li class='clear'><b><a href='$w[link_sub]'>$w[nama_sub]</a></b></li>";
	         }
	       echo "</ul>
            </li>";} ?>
          </ul>
  </div></div>
  
  
    <div class="clear"></div>
    <div id="crumb">
    	<ul class="left">
        	<li><p>Anda berada di:</p></li>
            </ul>
			<ul class="left2">
              <span class='current'>Data Anggota</span>      
        </ul>
        <ul class="search right"><form method="POST" action="hasil-pencarian.html">
            	<li><input name="kata" type="text" value="cari produk"  class="bar" /></li>
                <li><input type="submit" class="go" value="cari" /></li></form>
      </ul>
  </div>
    <div class="clear"></div>
    <div class="rotating_banner">
            	<div class="anythingSlider">
                  <div class="wrapper">
                    <ul>
                    
		
                       <li><img width=940 src='header/4.jpg'></li><li><img width=940 src='header/3.jpg'></li><li><img width=940 src='header/2.jpg'></li><li><img width=940 src='header/1.jpg'></li>                    
                    </ul>
                  </div>
                </div>
  </div>
    <div class="clear"></div>
    <div id="content_sec">
    	<div class="col1">
        
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/spacer.gif" width="1" height="20" /></td>
              </tr>
              <tr>
                <td><span class="center_content2"><script language="javascript">
function validasi(form){
  if (form.id_user.value == ""){
    alert("Anda belum mengisikan Id_User.");
    form.id_user.focus();
    return (false);
  }    
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  if (form.nama.value == ""){
    alert("Anda belum mengisikan Nama.");
    form.nama.focus();
    return (false);
  }
  if (form.alamat.value == ""){
    alert("Anda belum mengisikan Alamat.");
    form.alamat.focus();
    return (false);
  }
  }
  if (form.telpon.value == ""){
    alert("Anda belum mengisikan Telpon.");
    form.telpon.focus();
    return (false);
  }
  if (form.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form.email.focus();
    return (false);
  }
  if (form.jasa.value == 0){
    alert("Anda belum memilih jasa pengiriman barang.");
    form.jasa.focus();
    return (false);
  }
  if (form.kota.value == 0){
    alert("Anda belum mengisikan Kota.");
    form.kota.focus();
    return (false);
  }
  return (true);
}


function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}


$(document).ready(function() {
	$('#jasa').change(function() { 
		var category = $(this).val();
		$.ajax({
			type: 'GET',
			url: 'config/kota.php',
			data: 'perusahaan=' + category, // Untuk data di MySQL dengan menggunakan kata kunci tsb
			dataType: 'html',
			beforeSend: function() {
				$('#kota').html('<tr><td colspan=2>Loading ....</td></tr>');	
			},
			success: function(response) {
				$('#kota').html(response);
			}
		});
    });
});

</script>

<h4 class='heading colr'>Data Anggota</h4>
<body>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="5" cellspacing="7">
			<tr>
				<td>Id_User</td>
				<td>:</td>
				<td><input type="text" readonly="" value="<?php echo autonumber("anggota","id_user",4,"ANG-");?>" name="id_user" required></td>
			</tr>
			
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="30" required></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="text" name="hp" size="30" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" size="30" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
            <div class='bottom_prod_box_big'></div>
        </div><div class='prod_box_big'>
        	<div class='top_prod_box_big'></div>
          <div class='center_prod_box_big'>            
          <div class='details_big_cari'><div><table width=520><tr><td>
          <span style='float : right;'></span></td></tr></table>
          </div></div></div>
        <div class='bottom_prod_box_bigx'></div>
        </div></td>
              </tr>
            </table>
            <div class="clear"></div>
			
      </div>
    	<div class="col2">
       	  <div class="mycart">
            	<div class="small_heading">
            		<h5>Keranjang Belanja</h5>
                </div>
           
                <table width="81%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="27%">
                    <span class='keranjangitem'>&nbsp; &nbsp; 1<span class='keranjang3'>&nbsp; &nbsp; item produk<br />
          <span class='border_cart'></span>
        

<a href='keranjang-belanja.html'><span class='keranjang'>lihat keranjang</a><br /><a href='selesai-belanja.html'><span class='keranjang'>selesai belanja</a><br /></td>
                    <td width="73%"><img src="images/beli.png" width="50" height="45" /></td>
                  </tr>
                </table>
       	  </div>
            <div class="myaccount">
            	<div class="small_heading">
            		<h5>Kategori Produk </h5>
                </div>
                <ul>
                 <?php
            $kategori=mysql_query("select nama_kategori, kategori.id_kategori, kategori_seo,  
                                  count(produk.id_produk) as jml 
                                  from kategori left join produk 
                                  on produk.id_kategori=kategori.id_kategori 
                                  group by nama_kategori");
            $no=1;
            while($k=mysql_fetch_array($kategori)){
              if(($no % 2)==0){
                echo "<li><a href='kategori-$k[id_kategori]-$k[kategori_seo].html'> $k[nama_kategori] ($k[jml])</a></li>";
              }
              else{
                echo "<li><a href='kategori-$k[id_kategori]-$k[kategori_seo].html'> $k[nama_kategori] ($k[jml])</a></li>";              
              }
              $no++;
            }
            ?>
                </ul>
            </div>
          <div class="poll">
            	<div class="small_heading">
            		<h5>Bank Pembayaran </h5>
                    <p>
        
                </p>
                </div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center"><span class="border_box">
                                          </span></div></td>
                  </tr>
                </table>
          </div>
		  
		  <div class="poll">
            	<div class="small_heading">
            		<h5>Statistik Pengunjung  </h5>
                </div>
                <table width="111%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="11%">&nbsp;</td>
                    <td width="89%">
                      
                      <div align="left">
                        <p align='center'>
       <span class='pengunjung'><img src=counter/online.png>    Pengunjung Online :  <br />
        <span class='pengunjung'><img src=counter/hariini.png>  Pengunjung Hari Ini :  <br />
	  </p>                        </div></td></tr>
                </table>
		  </div>
		
		  
		  
		  
		  
		  
		  
    	</div>
    	<div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div id="footer">
        <div class="aboutus">
        	<h5>Tentang Kami</h5>
        	<p>
            	Heksatamaprima adalah perusahaan yang bergerak di bidang penjualan obat herbal,terlengkap, terbaik dan terjangkau harganya. Kami memberikan pelayanan yang baik bagi konsumen yang akan melakukan pembelian di toko obat kami.</p>
            <a href="profil-kami.html" class="simplebtn">selanjutnya</a>
        </div>
        <div class="ourblog">
        	<h5>Sekilas Info</h5>
        	<ul>
            	
                                
             
            </ul>
        </div>
        <div class="contactus">
       	  <h5>Kontak Kami </h5>
            <ul>
            	<li class="tel"><span class="bold">Tel:</span> 021. 32972759 </li>
                <li class="email"><span class="bold">Email:</span> rodi_anto24@gmail.com</li>
                <li class="skype"><span class="bold">Skype:</span> rodianto</li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="copyright_network">
        	<p>Copyright ©2015 Develoved by: Rodianto</p>
            <ul class="network"><li>
            	<script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'><img src='./images/twitter_icon.gif' border='0'/></a> &nbsp; <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'><img src='./images/facebook_icon.gif' border='0'/></a>");
</script></li>
                <li></li>
               
                <li><a href="#top" class="top">ke atas</a></li>
            </ul>
        </div>
        <div class="clear"></div>
	</div>
</div>
	</div>
<div style="display: none;">
		<div id="inline1" style="width:400px;">
			<h2>LOGIN ANGGOTA</h2>
    <div class="clear"></div>
    <p>Anda anggota? bila tidak <a href="daftar.php" class="colr2">DAFTAR</a>, di sini.</p>
    <div class="clear"></div>
    <a href="daftar.php" class="left"><img src="images/signup.gif" alt="" /></a> &nbsp;<a href="#" class="left"><img src="images/forgot.gif" alt="" /></a>
    <div class="clear marg_bot">&nbsp;</div>
    <ul class="forms">
    	<li class="txt">User Name</li>
        <li class="inputfield"><input type="text" value="" class="bar" /></li>
    </ul>
    <ul class="forms">
    	<li class="txt">Password</li>
        <li class="inputfield"><input type="text" value="" class="bar" /></li>
    </ul>
    <ul class="forms marg_top">
    	<li class="txt"><a href="store" class="simplebtn">Login</a>&nbsp;&nbsp; <a href="#" class="simplebtn">Batal</a></li>
    </ul>
		</div>
	</div>
</body>
</html>


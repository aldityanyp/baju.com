<?php 
  error_reporting(0);
  session_start();	
  include "config/koneksi.php";
  include "config/fungsi_indotgl.php";
  include "config/class_paging.php";
  include "config/fungsi_combobox.php";
  include "config/library.php";
  include "config/fungsi_autolink.php";
  include "config/fungsi_rupiah.php";
  include "hapus_orderfiktif.php";?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php include "dina_titel.php"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow">
<meta name="description" content="<?php include "dina_meta1.php"; ?>">
<meta name="keywords" content="<?php include "dina_meta2.php"; ?>">
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
        	<a href="index.html"><img src="images/logo.png" alt="" /></a>
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
              <?php include "breadcrumb.php";?>
      
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
                    
		
                       <?php
$header=mysql_query("SELECT * FROM header ORDER BY id_header DESC LIMIT 4");
while($b=mysql_fetch_array($header)){
  echo "<li><img width=940 src='header/$b[gambar]'></li>";
  
}?>
                    
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
                <td><span class="center_content2"><?php include "tengah.php";?></td>
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
                    <?php require_once "item.php";?></td>
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
            ?></li>
              
                </ul>
            </div>
          <div class="poll">
            	<div class="small_heading">
            		<h5>Bank Pembayaran </h5>
                </div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center"><span class="border_box">
                      <?php
      $bank=mysql_query("SELECT * FROM mod_bank ORDER BY id_bank ASC");
      while($b=mysql_fetch_array($bank)){
		    echo "<span class='bank'>$a[nama_bank]</a></div>
         <div class='bank'>
             <img src='foto_banner/$b[gambar]' border='0' >
             </a>
         </div>
         <div class='bank'><span class='bank'>No. Rek : $b[no_rekening]
<div class='bank'><span class='bank'>an. $b[pemilik]</span></div>";
      }

        ?>
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
                        <?php
  // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
	   $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }

  echo "<p align='center'>
       <span class='pengunjung'><img src=counter/online.png>    Pengunjung Online : $pengunjungonline <br />
        <span class='pengunjung'><img src=counter/hariini.png>  Pengunjung Hari Ini : $hits[hitstoday] <br />
	  </p>";
?>
                        </div></td></tr>
                </table>
		  </div>
		  <div class="poll">
            	<div class="small_heading">
            		<h5>Link Terkait  </h5>
                </div>
                <table width="51%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><div align="center"><span class="banner_adds">
                      <?php
$banner=mysql_query("SELECT * FROM banner ORDER BY id_banner DESC LIMIT 4");
while($b=mysql_fetch_array($banner)){
  echo "<p align='left'><a href='$b[url]'' target='_blank' title='$b[judul]'><img width=200 src='foto_banner/$b[gambar]' border=0></a></p>";
}

?>
                    </span></div></td>
                  </tr>
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
            	
                <?php include "rodi_sekilasinfo.php" ?>
                
             
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
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'><img src='<?php echo "$f[folder]./images/twitter_icon.gif" ?>' border='0'/></a> &nbsp; <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'><img src='<?php echo "$f[folder]./images/facebook_icon.gif" ?>' border='0'/></a>");
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
    <a href="#" class="left"><img src="images/signup.gif" alt="" /></a> &nbsp;<a href="#" class="left"><img src="images/forgot.gif" alt="" /></a>
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


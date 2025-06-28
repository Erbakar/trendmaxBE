<?php define("guvenlik",true);?>
<?php
require('../func/db.php');
require('../func/fonksiyon.php');
giriskontrol($ozy,1);

if(!isset($_SESSION["giris"])){
    header("Location:index.php");
}
else {
 
}

?>
<!DOCTYPE html>
<html lang="tr">
    <head>
	
	 
	     <base href="<?php echo $ayar['siteurl']; ?>/boss/">
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
         <title>Yönetim Paneli</title>

        <meta content="oziyshop" name="description" />
        <meta content="oziyshop" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
		
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>	 
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/pages/dashboard.init.js"></script>
		<link href="assets/toastr/toastr.css" rel="stylesheet"/>
	    <script src="assets/toastr/toastr.min.js"></script>  

		
</head>
<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo">
                            <span class="logo-light">
                              		<img src="../resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="" height="50"></a>
                        
                            </span>
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">
                      

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                           

                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="" id="btn-fullscreen">
                                    <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                                </a>
                            </li>

                            <!-- notification -->
                            <li class="dropdown notification-list list-inline-item">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                    <span class="badge badge-pill badge-danger noti-icon-badge">Bildirim</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                            Bildirimler
                                        </h6>
                                    <div class="slimscroll notification-item-list">
                                        <!-- item-->
                                        <a href="yeni-siparisler" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Son Siparişler</b><span class="text-muted">Gelen son siparişleri buradan görebilirsin.</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="gelen-kutusu" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                            <p class="notify-details"><b>Gelen Mesajlar</b><span class="text-muted">Gelen tüm mesajlarını burdan görebilirsin</span></p>
                                        </a>

                                        <!-- item-->
                                        <a href="destek-merkezi" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                            <p class="notify-details"><b>Destek Mesajları</b><span class="text-muted">Gelen tüm destek taleplerini burdan görebilirsin</span></p>
                                        </a>

                                    
                                    </div>
                                    <!-- All-->
                                
                                </div>
                            </li>

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/icons8-user-50.png" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <a class="dropdown-item" href="admin/duzenle/<?php echo $_SESSION['id'];?>"><i class="mdi mdi-account-circle"></i> Profilim</a>
                                        <a class="dropdown-item" href="siteayarlari"><i class="mdi mdi-wallet"></i> Site Ayarları</a>
                                        <a class="dropdown-item d-block" href="sistemayarlari"><span class="badge badge-success float-right"></span><i class="mdi mdi-settings"></i> Sistem Ayarları</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="cikis"><i class="mdi mdi-power text-danger"></i> Sistemden Çıkış</a>
                                    </div>
                                </div>
                            </li>
 <!-- language-->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a href="cikis" class="btn btn-danger waves-effect waves-light">Sistemden Çıkış</a>
							<a target="_blank" href="../anasayfa" class="btn btn-warning waves-effect waves-light">Site Önizleme</a>
                            
							</li>
                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                         
                           <li class="has-submenu">
                                    <a href="index.html">
                                        <i class="mdi mdi-monitor"></i>
                                        Anasayfa
                                    </a>
                                </li>
    

                                   <li class="has-submenu">
                                    <a onclick="return false;" href="#"><i class="mdi mdi-package-variant"></i>Siparişlerim <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="yeni-siparisler">Yeni Siparişler</a></li>
                                        <li><a href="hazirlanan-siparisler">Hazırlanan Siparişler</a></li>  
										<li><a href="kargolanan-siparisler">Kargolanan Siparişler</a></li> 
										<li><a href="teslim-edilen-siparisler">Teslim Edilen Siparişler</a></li>
										<li><a href="iptal-edilen-siparisler">İptal Edilen Siparişler</a></li>
										<li><a href="iade-edilen-siparisler">İade Edilen Siparişler</a></li>
                                    </ul>
                                </li>

                                   <li class="has-submenu">
                                    <a onclick="return false;" href="#"><i class="mdi mdi-settings"></i>Sistem Modülleri <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
									<li><a href="temaayarlari?tema=<?php echo $tema['id'];?>">Tema Ayarları</a></li>
									<li><a href="siteayarlari">Genel Site Ayarları</a></li>
                                        <li><a href="sistemayarlari">Sistem Ayarları</a></li>
										<li><a href="sepet">Site Sepet Kontrolü</a></li>
										<li><a href="sanal-poslar">Sanal Poslar</a></li>
										<li><a href="eposta-servisi">Eposta Servisi</a></li>
										<li><a href="sms-servisleri">SMS Servisleri</a></li>
										<li><a href="tum-kargolar">Kargo Servisleri</a></li>
										<li><a href="tum-kuponlar">Kuponlar</a></li>
										<li><a href="tum-hediyecekleri">Hediye Çekleri</a></li>
										<li><a href="etiketler">Etiket Modülü</a></li>
									</ul>
                                </li>
    
	                  
    
								
                               <li class="has-submenu">
                                   <a onclick="return false;" href="#"><i class="mdi mdi-leaf"></i>Ürün İşlemleri <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="urun-ekle">Ürün Ekle</a></li>
                                        <li><a href="tum-urunler">Tüm Ürünler</a></li>  
										<li><a href="kategori-ekle">Kategori Ekle</a></li> 
										<li><a href="tum-kategoriler">Tüm Kategoriler</a></li>
										<li><a href="filtreleme-islemleri">Kategori Filtreleme</a></li>
										<li><a href="marka-ekle">Marka Ekle</a></li> 
										<li><a href="tum-markalar">Tüm Markalar</a></li>
									</ul>
                                </li>
    
                              
                               <li class="has-submenu">
                                    <a onclick="return false;" href="#"><i class="mdi mdi-view-headline"></i>Toplu İşlemler <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="xml-yukle">XML Yükleme Merkezi</a></li>  
										<li><a href="xml">XML Çıktısı</a></li>
                                        <li><a href="toplu-guncelleme">Toplu Güncelleme</a></li> 
								
									</ul>
                                </li>
								
			
	
	
								<li class="has-submenu">
                                  <a onclick="return false;" href="#"><i class="mdi mdi-message-text-outline"></i>İletişim Merkezi <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="destek-merkezi"> Destek Merkezi</a></li>
										<li><a href="urun-yorumlari">Ürün Yorumları</a></li>
										<li><a href="blog-yorumlari">Blog Yorumları</a></li>
                                        <li><a href="gelen-kutusu">Gelen Kutusu</a></li>  
										<li><a href="e-bulten">E-Bülten</a></li> 
								        <li><a href="toplu-eposta">Toplu Eposta</a></li>
				
    										
									</ul>
                                </li>
								
								<li class="has-submenu">
                                    <a onclick="return false;" href="#"><i class="mdi mdi-content-paste"></i>Statik Sayfalar <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
										<li><a href="tum-bankalar">Banka Hesapları</a></li>
										<li><a href="tum-sayfalar">Bilgi Sayfaları</a></li>
										<li><a href="tum-sliderler">Slider</a></li>
										<li><a href="tum-kampanyalar">Kampanyalar</a></li>
										<li><a href="tum-bloglar">Blog</a></li>
										<li><a href="tum-sssler">Sıkça Sorulan Sorular</a></li> 
									</ul>
                                </li>
								
    
                                <li class="has-submenu">
                                   <a onclick="return false;" href="#"><i class="mdi mdi-account-multiple"></i>Üye Yönetimi <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                    <ul class="submenu">
                                        <li><a href="uye-ekle">Üye Ekle</a></li>
										<li><a href="tum-uyeler">Tüm Üyeler</a></li>
										<li><a href="admin-ekle">Admin Ekle</a></li>
										<li><a href="tum-adminler">Tüm Adminler</a></li>
									</ul>
                                </li>
								

                            

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->      
       
        <?php 
	    if(isset($_GET['oziywebs'])){
		$s = $_GET['oziywebs'];
		
		switch($s){
			
		case 'home';
		require_once("pages/home.php");
		break;
		
		case 'blog-ekle';
		require_once("pages/blogekle.php");
		break;
		
		case 'blog-duzenle';
		require_once("pages/blogekle.php");
		break;

		case 'tum-bloglar';
		require_once("pages/tumbloglar.php");
		break;
		
		case 'tum-kuponlar';
		require_once("pages/tumkuponlar.php");
		break;
		
		case 'kupon-ekle';
		require_once("pages/kuponekle.php");
		break;
		
		case 'kupon-duzenle';
		require_once("pages/kuponekle.php");
		break;
		
		case 'tum-hediyecekleri';
		require_once("pages/tumhediyecekleri.php");
		break;
		
		case 'hediyeceki-ekle';
		require_once("pages/hediyecekiekle.php");
		break;
		
		case 'hediyeceki-duzenle';
		require_once("pages/hediyecekiekle.php");
		break;
		
		
		case 'siteayarlari';
		require_once("pages/siteayarlari.php");
		break;
		
		case 'temaayarlari';
		require_once("../".$ayar['tema']."/temaayarlari.php");
		break;
		
		case 'tum-kategoriler';
		require_once("pages/kategoriler.php");
		break;
		
		case 'kategori-ekle';
		require_once("pages/kategoriler.php");
		break;
		
		
		case 'kategori-duzenle';
		require_once("pages/kategoriler.php");
		break;
		
		case 'etiketler';
		require_once("pages/etiketler.php");
		break;
		
		case 'etiket-ekle';
		require_once("pages/etiketler.php");
		break;
		
		
		case 'etiket-duzenle';
		require_once("pages/etiketler.php");
		break;
		
		
		case 'urun-ekle';
		require_once("pages/urunekle.php");
		break;
		
		case 'urun-duzenle';
		require_once("pages/urunekle.php");
		break;

		case 'tum-urunler';
		require_once("pages/tumurunler.php");
		break;
		
		
		case 'marka-ekle';
		require_once("pages/markaekle.php");
		break;
		
		case 'marka-duzenle';
		require_once("pages/markaekle.php");
		break;

		case 'tum-markalar';
		require_once("pages/tummarkalar.php");
		break;
		
		
		case 'kargo-ekle';
		require_once("pages/kargoekle.php");
		break;
		
		case 'kargo-duzenle';
		require_once("pages/kargoekle.php");
		break;

		case 'tum-kargolar';
		require_once("pages/tumkargolar.php");
		break;
		
		
		case 'banka-ekle';
		require_once("pages/bankaekle.php");
		break;
		
		case 'banka-duzenle';
		require_once("pages/bankaekle.php");
		break;

		case 'tum-bankalar';
		require_once("pages/tumbankalar.php");
		break;
		
		
		case 'sistemayarlari';
		require_once("pages/sistemayarlari.php");
		break;
		
		case 'kampanya-ekle';
		require_once("pages/kampanyaekle.php");
		break;
		
		case 'kampanya-duzenle';
		require_once("pages/kampanyaekle.php");
		break;

		case 'tum-kampanyalar';
		require_once("pages/tumkampanyalar.php");
		break;
		
		case 'slider-ekle';
		require_once("pages/sliderekle.php");
		break;
		
		case 'slider-duzenle';
		require_once("pages/sliderekle.php");
		break;

		case 'tum-sliderler';
		require_once("pages/tumsliderler.php");
		break;
		
		case 'e-bulten';
		require_once("pages/ebulten.php");
		break;
		
		case 'sayfa-ekle';
		require_once("pages/sayfaekle.php");
		break;
		
		case 'sayfa-duzenle';
		require_once("pages/sayfaekle.php");
		break;

		case 'tum-sayfalar';
		require_once("pages/tumsayfalar.php");
		break;
		
		case 'sss-ekle';
		require_once("pages/sssekle.php");
		break;
		
		case 'sss-duzenle';
		require_once("pages/sssekle.php");
		break;

		case 'tum-sssler';
		require_once("pages/tumsssler.php");
		break;
		
		case 'blog-yorumlari';
		require_once("pages/blogyorumlari.php");
		break;
		
		case 'urun-yorumlari';
		require_once("pages/urunyorumlari.php");
		break;
		
		case 'yeni-siparisler';
		require_once("pages/yenisiparisler.php");
		break;
		
		case 'hazirlanan-siparisler';
		require_once("pages/hazirlanansiparisler.php");
		break;
		
		case 'kargolanan-siparisler';
		require_once("pages/kargolanansiparisler.php");
		break;
		
		case 'teslim-edilen-siparisler';
		require_once("pages/teslimedilensiparisler.php");
		break;
		
		case 'iptal-edilen-siparisler';
		require_once("pages/iptaledilensiparisler.php");
		break;
		
		case 'iade-edilen-siparisler';
		require_once("pages/iadeedilensiparisler.php");
		break;
		
		case 'eposta-servisi';
		require_once("pages/epostaservisi.php");
		break;
		
		case 'uye-ekle';
		require_once("pages/uyeekle.php");
		break;
		
		case 'uye-duzenle';
		require_once("pages/uyeekle.php");
		break;

		case 'tum-uyeler';
		require_once("pages/tumuyeler.php");
		break;
		
		case 'admin-ekle';
		require_once("pages/adminekle.php");
		break;
		
		case 'uye-duzenle';
		require_once("pages/adminekle.php");
		break;

		case 'tum-adminler';
		require_once("pages/tumadminler.php");
		break;
		
		case 'gelen-kutusu';
		require_once("pages/gelenkutusu.php");
		break;
		
		case 'mesaj-duzenle';
		require_once("pages/mesajduzenle.php");
		break;
		
		case 'toplu-eposta';
		require_once("pages/toplueposta.php");
		break;
		
		case 'eposta-duzenle';
		require_once("pages/epostaduzenle.php");
		break;
		
		case 'eposta-gonder';
		require_once("pages/epostaduzenle.php");
		break;
		
		case 'sanal-poslar';
		require_once("pages/sanalposlar.php");
		break;
		
		case 'destek-merkezi';
		require_once("pages/destekmerkezi.php");
		break;
		
		case 'destek-duzenle';
		require_once("pages/destekduzenle.php");
		break;
		
		case 'siparis-duzenle';
		require_once("pages/siparisduzenle.php");
		break;
		
		case 'toplu-guncelleme';
		require_once("pages/topluguncelleme.php");
		break;
		
		case 'xml';
		require_once("pages/xml.php");
		break;
		
		case 'xml-yukle';
		require_once("pages/xmlyukle.php");
		break;
		
		case 'xml-duzenle';
		require_once("pages/xmlyukle.php");
		break;
		
		case 'sms-servisleri';
		require_once("pages/smsservisi.php");
		break;
		
		case 'uye-siparisleri';
		require_once("pages/uyesiparisleri.php");
		break;
		
		case 'filtreleme-islemleri';
		require_once("pages/filtrelemeislemleri.php");
		break;
		
		case 'sepet';
		require_once("pages/sepet.php");
		break;
		
		case 'sepet-duzenle';
		require_once("pages/sepetduzenle.php");
		break;
		
		
		
		
		case 'cikis';
		require_once("pages/cikis.php");
		break;
		
		default:
		require_once("pages/home.php");
		}
		
		
	    }else{
			
	    require_once("pages/home.php");
        }
		
		
		
		
		
		
				   
$buguntarihim = date('Y-m-d');		   
$sepettarihim = date('d.m.Y H:i:s');
$cevir = strtotime('-2 day',strtotime($sepettarihim));
$newtarih = date("d.m.Y",$cevir); // dünün tarihi elimizde 

$sepettarih = $ozy->query("select * from sepet")->fetchAll(PDO::FETCH_ASSOC); 
foreach($sepettarih as $sepettarihbak){

$siptarihi =  $sepettarihbak['tarih'];
$suzmetarih = mb_substr($sepettarihbak['tarih'],0,10);

if(strtotime($suzmetarih) <= strtotime($newtarih)){
$sepettemizle = $ozy->exec("DELETE FROM sepet WHERE tarih='$siptarihi'");

}

}

$kartarihim = date('d.m.Y H:i:s');
$kcevir = strtotime('-2 day',strtotime($kartarihim));
$knewtarih = date("d.m.Y",$kcevir); // dünün tarihi elimizde 

$ksepettarih = $ozy->query("select * from karsilastir")->fetchAll(PDO::FETCH_ASSOC); 
foreach($ksepettarih as $ksepettarihbak){

$ksiptarihi =  $ksepettarihbak['tarih'];
$ksuzmetarih = mb_substr($ksepettarihbak['tarih'],0,10);

if(strtotime($ksuzmetarih) <= strtotime($knewtarih)){
$ksepettemizle = $ozy->exec("DELETE FROM karsilastir WHERE tarih='$ksiptarihi'");

}

}

		
		
		?> 
   



<!-- Footer -->
    <footer class="footer">
        © 2019 - 2020  <?php echo $ayar['siteadi'];?> <i class="mdi mdi-heart text-danger"></i> <a target="_blank" href="http://www.oziyweb.com">by OziyWeb</a></span>
    </footer>

    <!-- End Footer -->

	

       


 
    
	
    <link href="assets/summernote/summernote.min.css" rel="stylesheet">
    <script src="assets/summernote/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
        $('#summernote').summernote();
		$('#summernote1').summernote();
		$('#summernote2').summernote();
		$('#summernote3').summernote();
		$('#summernote4').summernote();
		$('#summernote5').summernote();
		$('#summernote6').summernote();
		$('#summernote7').summernote();
		$('#summernote8').summernote();
		$('#summernote9').summernote();
		$('#summernote10').summernote();
        });
	</script>
	<link href="assets/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="assets/toggle.js"></script>
	<link href="assets/bootstrap-tagsinput.css" rel="stylesheet">
    <script src="assets/bootstrap-tagsinput.js"></script>
	<script type="text/javascript" src="assets/bootstrap-fileupload.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload.min.css" />
	 <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />	
	 <!-- Required datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>  	
    <!-- Nestable css -->
    <link href="assets/plugins/nestable/jquery.nestable.css" rel="stylesheet" />
    <!-- Bootstrap rating css -->
    <link href="assets/plugins/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap rating js -->
    <script src="assets/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
    <script src="assets/pages/rating-init.js"></script>
  	<script>
	$(document).ready(function() {
		
		$("#indirimdurum").on("change",function(){
		if($("#indirimdurum").is(":checked")){
			$("#indirimlifiyat").show();
		}
		else{
			$("#indirimlifiyat").hide();
		}
	});	
	
     $("#firsatdurumu").on("change",function(){
		if($("#firsatdurumu").is(":checked")){
			$("#firsatdurumum").show();
			$("#firsatdurumumx").show();
		}
		else{
			$("#firsatdurumum").hide();
			$("#firsatdurumumx").hide();
		}
	});
		
	$("#havaledurum").on("change",function(){
		if($("#havaledurum").is(":checked")){
			$("#havalefiyati").show();
		}
		else{
			$("#havalefiyati").hide();
		}
	});

	$("#alode").on("change",function(){
		if($("#alode").is(":checked")){
			$("#alodefiyati").show();
		}
		else{
			$("#alodefiyati").hide();
		}
	});	
	
	$("#kapidadurum").on("change",function(){
		if($("#kapidadurum").is(":checked")){
			$("#kapifiyat").show();
		}
		else{
			$("#kapifiyat").hide();
		}
	});
	
	$("#ekdurum").on("change",function(){
		if($("#ekdurum").is(":checked")){
			$("#eknot").show();
		}
		else{
			$("#eknot").hide();
		}
	});
	
	    $("#kargodurum").change(function(){
			if($(this).val()=="Kargoya Verildi") {
				$("#kargoid").show();
				$("#takipno").show();
			} else {
				$("#kargoid").hide();
				$("#takipno").hide();
			}
			
		});

    $('input[name="kattip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#parcatip").show();
		}
		else{
			$("#parcatip").hide();

		}
	});	
	
	$('input[name="resimtip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#anaresim").show();
			$("#resim").hide();
			$("#resim1").hide();
			$("#resim2").hide();
			$("#resim3").hide();
			$("#resim4").hide();
			$("#resim5").hide();
			$("#resim6").hide();
			$("#resim7").hide();
			$("#resim8").hide();
			$("#resim9").hide();
			$("#resim10").hide();
		}
		else{
			$("#anaresim").hide();
			$("#resim").show();
			$("#resim1").show();
			$("#resim2").show();
			$("#resim3").show();
			$("#resim4").show();
			$("#resim5").show();
			$("#resim6").show();
			$("#resim7").show();
			$("#resim8").show();
			$("#resim9").show();
			$("#resim10").show();

		}
	});	
	
	

    });
	</script>
	
     <link href="assets/select2.min.css" rel="stylesheet" />
     <script src="assets/select2.min.js"></script>
	 <script>
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    });
	
	
	$(document).ready(function() {
		
		$('input[name="uyetip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#kurumsal").show();
			$("#kurumsal2").show();
			$("#kurumsal3").show();
			$("#bireysel").hide();
		}
		else{
			$("#kurumsal").hide();
			$("#kurumsal2").hide();
			$("#kurumsal3").hide();
			$("#bireysel").show();
		}
	});	
	
	
		$('input[name="sifretip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#sifre1").show();
		}
		else{
			$("#sifre1").hide();

		}
	});	
	
	
	
		$('input[name="faturatip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#faturaadres").show();
			$("#faturail").show();
			$("#faturailce").show();
		}
		else{
			$("#faturaadres").hide();
			$("#faturail").hide();
			$("#faturailce").hide();
		}
	});	
	
    



    });	
		
		

function printDiv(DivID) {
var disp_setting="toolbar=yes,location=no,";
disp_setting+="directories=yes,menubar=yes,";
disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
   var content_vlue = document.getElementById(DivID).innerHTML;
   var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
   docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
   docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">');
   docprint.document.write('<head><title>My Title</title>');
   docprint.document.write('<style type="text/css">body{ margin:0px;');
   docprint.document.write('font-family:verdana,Arial;color:#000;');
   docprint.document.write('font-family:Verdana, Geneva, sans-serif; font-size:12px;}');
   docprint.document.write('a{color:#000;text-decoration:none;} </style>');
   docprint.document.write('</head><body onLoad="self.print()"><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
   docprint.focus();
}
          

		
	</script>
    <!-- Magnific popup -->
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/pages/lightbox.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="../eklentiler/lazysizes.min.js" async></script>
  
</body>
</html>
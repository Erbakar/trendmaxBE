    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="<?php echo $sitetemasi;?>/image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="<?php echo $sitetemasi;?>/image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

   <!-- Bootstrap core CSS -->
   <link href="<?php echo $sitetemasi;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Slider CSS -->
   <link rel="stylesheet" href="<?php echo $sitetemasi;?>/vendor/slider/slider.css">
   <!-- Select2 CSS -->
   <link href="<?php echo $sitetemasi;?>/vendor/select2/css/select2-bootstrap.css" />
   <link href="<?php echo $sitetemasi;?>/vendor/select2/css/select2.min.css" rel="stylesheet" />
   <!-- Font Awesome-->
   <link href="<?php echo $sitetemasi;?>/vendor/fontawesome/css/all.min.css" rel="stylesheet">
   <link href="<?php echo $sitetemasi;?>/vendor/icofont/icofont.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <?php include('style.php');?>
   
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="<?php echo $sitetemasi;?>/vendor/owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="<?php echo $sitetemasi;?>/vendor/owl-carousel/owl.theme.css">

<?php echo $ayar['google']; ?>
<?php echo $ayar['yandex']; ?>
<?php echo $ayar['reklam']; ?>



<!-- TEMA EKSTRALARI -->	
<?php if (isset($_GET['sepetsil'])) {
$sepetkaldiralim = temizle($_GET['sepetsil']);
$sil = $ozy->prepare("DELETE FROM sepet WHERE id=?");
$sil->execute(array($sepetkaldiralim));





header("Location: ".$url."");
}



    function yuzdeHesaplama($sayi,$sayi2){
    $newsayi = $sayi - $sayi2;	
	$yuzdelik = $sayi/100;
	$son = $newsayi/$yuzdelik;
    return substr($son,0,2);
   } 
   

   
?>
<style>


.old-price {
  color: #aba4a4;
  font-size: 14px;
  font-weight: 600;
  text-decoration: line-through;
  float: right;
}


.stories.carousel {
  white-space: nowrap;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  overflow-scrolling: touch;
  box-shadow: none !important;
}

.stories.snapgram .story > .item-link > .item-preview {
  border-radius: 50%;
  padding: 2px;
  background: <?php echo $tema['t37'];?> !important;
}

#zuck-modal-content .story-viewer .head .back, #zuck-modal-content .story-viewer .head .right .close {
  font-size: 42px;
  width: 48px;
  height: 48px;
  line-height: 48px;
  cursor: pointer;
  text-align: center;
  color:white !important;
}




</style>
<!-- TEMA EKSTRALARI -->
<?php 

function  xurunfiyatbelirle($urunkdv,$indirim,$urunfiyat,$ifiyati){
	
global $system;

if($indirim=='1'){								
if($urunkdv>'0'){?>
<span class="text-black-50">
					 <del> <?php echo $eskifiyatz = fiyatgoster(KdvDahil($urunfiyat,$urunkdv));?></del>
					 </span>
<?php echo $yenifiyatz = fiyatgoster(KdvDahil($ifiyati,$urunkdv));?>
<?php } else {?>
<span class="text-black-50">
					 <del> <?php echo $eskifiyatz = fiyatgoster(KdvDahil($urunfiyat,$system['kdv']));?></del>
					 </span>
<?php echo $yenifiyatz = fiyatgoster(KdvDahil($ifiyati,$system['kdv']));?>
<?php }
} else {
if($urunkdv>'0'){?>

<?php echo $yenifiyatz = fiyatgoster(KdvDahil($urunfiyat,$urunkdv));?>
<?php } else {?>

<?php 
echo $yenifiyatz = fiyatgoster(KdvDahil($urunfiyat,$system['kdv']));?>

<?php
}} 	
	
	
}




if($_GET['oziywebs']=='urun'){	
$idx = temizle($_GET['id']); 
$durumx = "1";
$sayfaqqx = $ozy->prepare("SELECT * FROM urunler WHERE seo=:id and durum=:durum");
$pagex = $sayfaqqx->execute([':id' => $idx,':durum' => $durumx]);
$pagex = $sayfaqqx->fetch(PDO::FETCH_ASSOC);

if($pagex['idurum']=='1'){								
if($pagex['kdv']>'0'){
$yenifiyatx = fiyatgoster(KdvDahil($pagex['ifiyat'],$pagex['kdv']));
} else {
$yenifiyatx = fiyatgoster(KdvDahil($pagex['ifiyat'],$system['kdv']));
}
} else {
if($pagex['kdv']>'0'){
$yenifiyatx = fiyatgoster(KdvDahil($pagex['fiyat'],$pagex['kdv']));
} else { 
$yenifiyatx = fiyatgoster(KdvDahil($pagex['fiyat'],$system['kdv']));
}} 

if($pagex['ucretsizkargo']=='1'){
	$kargommmmmmmmmmmmmmmmmmmm = "/ KARGO BEDAVA"; 
}

if($pagex['alode']=='1'){
	$alodeeeeeee = "/ BU ÜRÜNDE ".$pagex['al']." AL ".$page['ode']." ÖDE FIRSATI"; 
}	
	
$metadesc ="".$pagex['adi']."  Sadece ".$yenifiyatx." ".$kargommmmmmmmmmmmmmmmmmmm." ".$alodeeeeeee."";

?>
<meta name="og:description" content="<?php echo $metadesc; ?>">
<meta property="og:image" content="<?php echo $url; ?>/resimler/urunler/<?php echo $pagex['resim']; ?>"/>
<?php }?>  
</head>
<body>
 

 <div class="btn-primary pt-2 pb-2" style="background: none !important;<?php echo $tema['t13'] == '0' ? 'display:none;' : null; ?>">
      <div class="container-fluid">
         <div class="row">
          <div class="col-lg-12 text-center" >
		
		<a href="<?php echo $tema['t13']; ?>">
		<img style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
</div>
         </div>
      </div>
   </div>

   <div class="bg-light">
      <div class="header-top border-bottom bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul class="list-inline float-right mb-0">
                     <li class="list-inline-item border-right border-left py-1 pr-2 mr-2 pl-2">
                        <a href="tel:<?php echo $ayar['tel'];?>"><i class="icofont icofont-iphone"></i> <?php echo $ayar['tel'];?></a>
                     </li>
                     <li class="list-inline-item border-right py-1 pr-2 mr-2">
                        <a href="iletisim/"><i class="icofont icofont-headphone-alt"></i> Bize Ulaşın</a>
                     </li>
                     <li class="list-inline-item">
                        <span>Mobil Uygulama</span> &nbsp;
                        <a href="<?php echo $tema['36'];?>" target="_blank"><i class="icofont icofont-brand-apple"></i></a>
                        <a href="<?php echo $tema['35'];?>" target="_blank"><i class="icofont icofont-brand-android-robot"></i></a>
                     </li>
                  </ul>
                  <ul class="list-inline float-left mb-0">
				  
				  
                     <li class="list-inline-item border-right border-left py-1 pr-2 mr-2 pl-2">
                        <a style="color: black;" href="kampanyalar/">Kampanyalar</a>
                     </li>
					 
					 <li class="list-inline-item border-right py-1 pr-2 mr-1 pl-2">
                        <a style="color: black;" href="siparissorgulama/">Kargom Nerede ?</a>
                     </li>
					 
					 
					 <li class="list-inline-item border-right  py-1 pr-2 mr-1 pl-2">
                        <a style="color: black;" href="favorilerim/">Favorilerim</a>
                     </li>
					 
					 <li class="list-inline-item border-right  py-1 pr-2 mr-1 pl-2">
                        <a style="color: black;" href="urunkarsilastirma/">Ürün Karşılaştırma</a>
                     </li>
                     
                    
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="main-nav shadow-sm">
         <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
            <div class="container">
               <a class="navbar-brand" href="<?php echo $url;?>">
                  <img style="width: 150px;" src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="<?php echo $ayar['siteadi'];?>">
               </a>
               <a class="toggle" href="#">
                  <span></span>
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto main-nav-left">
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url;?>"><i class="icofont-ui-home"></i></a>
                     </li>
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

                <?php if($katadi['ac']=='1'){?>	 
					 
                     <li class="nav-item dropdown mega-drop-main">
                        <a class="nav-link dropdown-toggle" href="kategori/<?php echo $katadi['seo']; ?>" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $katadi['adi']; ?>
                        </a>
                        <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                           <div class="row ml-0 mr-0">
						   
					<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
						   
                              <div class="col-lg-2 col-md-2">
                                 <div class="mega-list">
                                    <a class="mega-title" href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                               			    <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                                    
                                      <a href="kategori/<?php echo $katadi22['seo']; ?>" title="<?php echo $katadi22['adi']; ?>">
                                       
                                        <?php echo $katadi22['adi']; ?>
                                      </a>
                                  
								 	<?php } ?>   
								  
								  
                                 </div>
                              </div>
							  
								<?php } ?>    
							
                           
                            
                           </div>
                        </div>
                     </li>
					 
					 
					 
					 
					  <?php } else { ?>		
					
                     <li class="nav-item">
                        <a class="nav-link" href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                     </li>
					 
					
								     <?php }} ?>	
						
					
					
					
                  </ul>
				  
				  
                  <form action="arama/" method="GET" class="form-inline my-2 my-lg-0 top-search">
                     <button class="btn-link" type="submit"><i class="icofont-search"></i></button>
                     <input class="form-control mr-sm-2" type="search" name="arama" aria-label="Arama" placeholder="Ne Aramıştınız ?" required>
                  </form>
				  
				  
				  
                  <ul class="navbar-nav ml-auto profile-nav-right">
                     <li class="nav-item">
					 
					 <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
                        <a href="hesabim/" class="nav-link ml-0">
                           <i class="icofont-ui-user"></i> Hesabım
                        </a>
					<?php } else { ?>	
					  <a href="uyeol/" class="nav-link ml-0">
                           <i class="icofont-ui-user"></i> Üye Ol/Giriş Yap
                        </a>

					<?php } ?>	
                     </li>
                     <li class="nav-item cart-nav">
                        <a data-toggle="offcanvas" class="nav-link" href="#">
                           <i class="icofont-basket"></i> Sepet
                           <span class="badge badge-danger"><?php echo $sepetsayi;?></span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
			
			
			
			
			
			
			
			
			
			
         </nav>

      </div>
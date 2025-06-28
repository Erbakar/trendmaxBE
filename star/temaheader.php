    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="<?php echo $sitetemasi;?>/image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="<?php echo $sitetemasi;?>/image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

 
    <noscript>
      <style>
	    .lazy{display:none !important;}
	  </style>
    </noscript>
    
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/bootstrap.min.css">
    <?php include("style.php");?>


    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/customizer/general.css">

    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/smartSearch.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/prodAdditional.css">
    <script src="<?php echo $sitetemasi;?>/theme/component/jquery.1.11.min.js"></script>
  



    <script>
      var pageLink = '', pageMode = 'home', pageLang = 'TR', pageIdent = 'c2ctheme', pageSys = 'progressive';	
    </script>


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
<span class="price-old"> <?php echo $eskifiyatz = fiyatgoster(KdvDahil($urunfiyat,$urunkdv));?></span>
<span class="price-current"><?php echo $yenifiyatz = fiyatgoster(KdvDahil($ifiyati,$urunkdv));?></span>
<?php } else {?>
<span class="price-old"> <?php echo $eskifiyatz = fiyatgoster(KdvDahil($urunfiyat,$system['kdv']));?></span>
<span class="price-current"><?php echo $yenifiyatz = fiyatgoster(KdvDahil($ifiyati,$system['kdv']));?></span>
<?php }
} else {
if($urunkdv>'0'){?>
<span class="price-current">
<?php echo $yenifiyatz = fiyatgoster(KdvDahil($urunfiyat,$urunkdv));?></span>
<?php } else {?>
<span class="price-current">
<?php 
echo $yenifiyatz = fiyatgoster(KdvDahil($urunfiyat,$system['kdv']));?></span>
</span>
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
<body class="background-opacity prg-home user-not-logged store-not-logged load">
 
<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>">
		<img style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
</div>

<div class="body-overlay"></div>
<div class="page-box">
  <div class="page-box-content">
    <div id="top-box">
      <div class="top-box-wrapper">
        <div class="container">
          <div class="row">
          
            <div class="col-xs-3 col-sm-7 top-box-right">
              <div class="navbar navbar-inverse top-navbar top-navbar-right" role="navigation">
                <li class="sepetim" id="menu-cart-data">
				<a href="sepet/" title="Sepetim">
				<i style="color: white;" class="fa fa-shopping-cart"></i></a></li><nav class="collapse collapsing navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li id="menu-content-18"><a href="kampanyalar/" title="Kampanyalar">Kampanyalar</a></li>
                    <li id="menu-content-19"><a href="gununfirsati/" title="Fırsat Ürünleri">Fırsat Ürünleri</a></li>
                    <li id="menu-content-20"><a href="siparissorgulama/" title="Kargo Takip">Kargo Takip</a></li>
                    <li id="menu-content-30"><a href="favorilerim/" title="Favorilerim">Favorilerim</a></li>
                    <li id="menu-content-12"><a href="urunkarsilastirma/" title="Karşılaştırma Listem">Karşılaştırma Listem</a></li>
                    <li id="menu-content-9"><a href="iletisim/" title="Bize Ulaşın">Bize Ulaşın</a></li>
                    <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
					<li id='spc-user-menu'><a href='#' title='Hesabım'><i class='fa fa-lock'></i> Hesabım <span>hesabımı düzenle</span>  <i class='fa fa-angle-down'></i></a>
					<ul class='sub-user-menu'>
					<li><a href='hesabim/' class='btn'>Hesabım</a></li>
					<li><a href='cikis/' class='border-btn'>Çıkış Yap</a></li>
					</ul>
					</li>
					<?php } else { ?>
					<li id='spc-user-menu'><a href='#' title='Giriş Yap'><i class='fa fa-lock'></i> Giriş Yap <span>veya Hesap Oluştur</span> <i class='fa fa-angle-down'></i></a>
					<ul class='sub-user-menu'>
					<li><a href='uyeol/' class='btn'>Üye Girişi</a></li>
					<li><a href='uyeol/' class='border-btn'>Üye Ol</a></li>
					</ul>
					</li>
					
					<?php } ?>
					
					
                    <li id="menu-cart-data" ><a href="sepet/" title="Sepetim"><i class="fa fa-shopping-cart"></i> Sepetim <span class="cartCount"><?php echo $sepetsayi;?></span></a></li>
          
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="header">
      <div class="header-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 logo-box">
              <div class="logo"><a class="logo" href="<?php echo $url;?>" title="<?php echo $ayar['siteadi'];?>"><img width="200" height="75" src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="<?php echo $ayar['siteadi'];?>"/></a></div>
            </div>
            <div class="col-xs-6 col-md-9 col-lg-9 right-box">
              <div class="right-box-wrapper">
			  
			  
			  
			  
			  
			  
                <div class="primary">
                  <div class="navbar navbar-default" role="navigation">
                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <nav class="collapse collapsing navbar-collapse">
                      <ul class="nav navbar-nav navbar-center">
                       
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

                <?php if($katadi['ac']=='1'){?>	 
                        <li class="parent megamenu <?php echo $katadi['seo']; ?>">
                          <a href="kategori/<?php echo $katadi['seo']; ?>" title="<?php echo $katadi['adi']; ?>" ><?php echo $katadi['adi']; ?></a>
                          <ul class="sub">
                            <li class="sub-wrapper">
                              <div class="sub-list">
							  
							  
							         <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
                                <div class="box closed">
                                  <h6 class="title">
								  <a href="kategori/<?php echo $katadi2['seo']; ?>" title="<?php echo $katadi2['adi']; ?>"><?php echo $katadi2['adi']; ?> <span>Tüm Ürünler</span></a></h6>
                                  <ul>
                                   
								    <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                                    <li>
                                      <a class="category" href="kategori/<?php echo $katadi22['seo']; ?>" title="<?php echo $katadi22['adi']; ?>">
                                        <div class="img-box"><img class="image" alt="Şapka" src="/category/sapka.png"></div>
                                        <div class="title"><?php echo $katadi22['adi']; ?></div>
                                      </a>
                                    </li>
				<?php } ?>  					
									
                                  </ul>
                                </div>
								
							
					<?php } ?>  			
							
							
                              </div>
                            </li>
                          </ul>
                        </li>
						
						
						
					      <?php } else { ?>			
														
														
														
														
                                                        <li class="<?php echo $katadi['seo']; ?>">
                                                            
                                                            <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix">
                                                                <?php echo $katadi['adi']; ?>
                                                                
                                                            </a>
                                                        </li>
                                                     
													 
													     <?php }} ?>	
						
						
						
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>

            <div class="search-active col-sm-10 col-md-10">
              <a href="#" class="close" title="Kapat"><span>Kapat</span>×</a>
              <form action="arama/" class="search-form" method="GET" autocomplete="off" accept-charset="UTF-8">
                <div class="search-box">
                  <input class="search-string form-control" type="search" name="arama" value="Arama..." onfocus="if (this.value == 'Arama...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Arama...';}" />
                  <div class="result"></div>
                </div>
                <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
   
          </div>
        </div>
      </div>
    </header>  
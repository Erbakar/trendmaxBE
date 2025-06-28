    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
    <link rel="shortcut icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
 
    <link rel="preload" href="<?php echo $sitetemasi;?>/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $sitetemasi;?>/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $sitetemasi;?>/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff" as="font" type="font/woff2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="preload" href="<?php echo $sitetemasi;?>/assets/fonts/wolmart.ttf" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/vendor/magnific-popup/magnific-popup.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/css/demo2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/assets/css/style.min.css">
    
   <?php echo $ayar['google']; ?>
   <?php echo $ayar['yandex']; ?>
   <?php echo $ayar['reklam']; ?>
         <?php 
    function yuzdeHesaplama($sayi,$sayi2){
    $newsayi = $sayi - $sayi2;	
	$yuzdelik = $sayi/100;
	$son = $newsayi/$yuzdelik;
    return substr($son,0,2);
   } 
   

   
   ?> 
   <style>
   .bg-primary {
    background-color: #336699 !important;
}
   .butonok {
    background-color: <?php echo $tema['t8']; ?> !important;
}

.header-bottom {

   background-color: <?php echo $tema['t8']; ?> !important;
   
}

.cart-dropdown .cart-count {

    background-color: <?php echo $tema['t8']; ?> !important;
 
}
.bg-primary {
    background-color: <?php echo $tema['t8']; ?> !important;
}
.icon-box-primary .icon-box-icon i {
    color: <?php echo $tema['t8']; ?> !important;
}
.btn-primary {
    color: #fff;
    background-color: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important;
}
.category-dropdown > a {
    background-color: <?php echo $tema['t16']; ?> !important;
    min-width: 28rem;
    padding: 1.9rem 1.8rem 1.7rem 2rem;
    letter-spacing: -0.025em;
    transition: all 0.3s;
    text-transform: uppercase;
    border: none !important;
}

.header a:not(.btn):hover {
  color: <?php echo $tema['t16']; ?> !important;
}

.category-dropdown.has-border .category-toggle:hover {
 background-color: #fff !important;
}


.tab-nav-outline .nav-item.show .nav-link, .tab-nav-outline .nav-item .nav-link.active, .tab-nav-outline .nav-item:hover .nav-link {
    border: 2px solid <?php echo $tema['t8']; ?> !important;
    border-radius: 0.3rem;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-item .nav-link.active, .nav-tabs .nav-item:hover .nav-link {
    color: <?php echo $tema['t8']; ?> !important;
}
   </style>
</head>
    

<body class="">

	
	 
		<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg"><?php echo $tema['t4']; ?></p>
                    </div>
                    <div class="header-right">
					
                        <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
                        <!-- End of Dropdown Menu -->
                        <a href="hesabim/" class="d-lg-show"><i class="w-icon-account"></i>Hesabım</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="cikis/" class="ml-0 d-lg-show">Çıkış</a>
                        <?php } else { ?>
					    <a href="uyeol/" class="d-lg-show"><i class="w-icon-account"></i>Üye Ol / Giriş Yap</a>
                        <?php } ?>
					    <a href="bankabilgilerimiz/" class="d-lg-show">Banka Hesaplarımız</a>
					
                        <a href="bloglar/" class="d-lg-show">Blog</a>
                        <a href="iletisim/" class="d-lg-show">Bize Ulaşın</a>
                        
						
						
                       
					</div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                        </a>
                        <a href="anasayfa" class="logo ml-lg-0">
                            <img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="logo" width="250" height="45">
                        </a>
                        <form method="GET" action="arama/" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                           
                            <input type="text" class="form-control" id="search" name="arama" placeholder="Ne aramıştınız ?" required>
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:<?php echo $ayar['tel'];?>" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="tel:<?php echo $ayar['tel'];?>" class="text-capitalize">Destek Hattı</a></h4>
                                <a href="tel:<?php echo $ayar['tel'];?>" class="phone-number font-weight-bolder ls-50"><?php echo $ayar['tel'];?></a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="favorilerim/">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Favorilerim</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="urunkarsilastirma/">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Karşılaştırma</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count"><?php echo $sepetsayi;?></span>
                                </i>
                                <span class="cart-label">Sepetim</span>
                            </a>
							
							<?php if($sepetsayi>='1'){?>
							
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Alışveriş Sepetim</span>
                                    <a href="#" class="btn-close">Kapat<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                   
                                <div class="products">
								
								
								        <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
								
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="urun/<?php echo $sepet['seo'];?>" class="product-name"><?php echo $sepet['adi'];?><br><?php echo $sepet['ekurun'];?></a>
                                            <div class="price-box">
                                                <span class="product-quantity"><?php echo $sepet['adet'];?></span>
                                                <span class="product-price"><?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?></span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="urun/<?php echo $sepet['seo'];?>">
                                                <img style="width: 84px;height: 94px;" src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="product" height="84" width="94">
                                            </a>
                                        </figure>
                                       
									  <form action="" method="POST">
										<input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
                                         <button name="delete" type="submit" class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        </form>	
                                    </div>
   <?php }} ?>  
                               
							   
							   
							   
							    <div>
                                <div class="cart-total">
                                    <label>Ara Tutar:</label>
                                    <span class="price"><?php echo fiyatgoster($sepetbedeli);?></span>
                                </div>

                                <div class="cart-action">
                                    <a href="anasayfa" class="btn btn-dark btn-outline btn-rounded">Alışverişe Devam</a>
                                    <a href="sepet/" class="btn btn-primary  btn-rounded">Satın Al</a>
                                </div>
								</div>
							   
                                </div>
                             
								
                            </div>
                            <!-- End of Dropdown Box -->
								<?php } ?>	
							
                        </div>
                    </div>
					
		
					
					
					
					
					
                </div>
				
				
			
				
				
				
            </div>
            <!-- End of Header Middle -->
			
							<style>
					.mobille {
    display:none !important;
}
@media screen and (max-device-width: 480px) and (orientation: portrait){
.mobille {
    display:block !important;
	margin: 0px !important;
padding: 0px !important;
}
}		
	
					</style>
					
					 <div class="col-lg-12 mobille">
					 
					    <form action="arama/" method="GET" class="input-wrapper">

                <input style="border: none !important;
width: 100%;
margin-bottom: 0px !important;background: #f5f6f8;" type="text" class="form-control" name="arama"  placeholder="Ne aramıştınız ?" required>

               

            </form>
					
				 </div>	
				
			
			

       <div class="sticky-content-wrapper">
	   <div class="header-bottom sticky-content fix-top sticky-header">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border  <?php echo $acabilirsin;?>" data-visible="true">
                                <a href="#" class="category-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Ürün Kategorilerimiz</span>
                                </a>

                                  <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                       
	<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>


									   <li>
                                            <a href="kategori/<?php echo $katadi['seo']; ?>">
                                                <div><img style="<?php echo $katadi['nikon'] == '0' ? 'display:none;' : null; ?>width: 20px;
height: 20px;
max-width: 16px;
position: initial;
float: left;
margin-right: 6px;
margin-top: -3px;" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>"></img> <?php echo $katadi['adi']; ?></div>
                                            </a>
                                            <ul class="megamenu">
											
												<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>				
											
                                                <li>
                                                    <h4 class="menu-title"><a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a></h4>
                                                    <hr class="divider">
                                                    <ul>
                                                   				<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
															
                                                                <li><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                                       <?php } ?>	
                                                    </ul>
                                                </li>
                                            	<?php } ?>	
											
                                            </ul>
                                        </li>
										
										   <?php } else { ?>		  
			               
						   <li><a href="kategori/<?php echo $katadi['seo']; ?>"><div><img style="<?php echo $katadi['nikon'] == '0' ? 'display:none;' : null; ?>width: 20px;
height: 20px;
max-width: 16px;
position: initial;
float: left;
margin-right: 6px;
margin-top: -3px;" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>"></img> <?php echo $katadi['adi']; ?></div></a></li>
						   
						 
						    <?php }} ?>
										
										
									
									
									
                                    </ul>
                                </div>
                            </div>
                               <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li>
                                        <a href="anasayfa">Anasayfa</a>
                                    </li>
                                    <?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustgoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>


									   <li>
                                            <a href="kategori/<?php echo $katadi['seo']; ?>">
                                             <?php echo $katadi['adi']; ?>
                                            </a>
                                            <ul class="megamenu">
											
												<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>				
											
                                                <li>
                                                    <h4 class="menu-title"><a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a></h4>
                                                    <hr class="divider">
                                                    <ul>
                                                   				<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
															
                                                                <li><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                                       <?php } ?>	
                                                    </ul>
                                                </li>
                                            	<?php } ?>	
											
                                            </ul>
                                        </li>
										
										   <?php } else { ?>		  
			               
						   <li><a href="kategori/<?php echo $katadi['seo']; ?>">
						 <?php echo $katadi['adi']; ?></a></li>
						   
						 
						    <?php }} ?>
                                </ul>
                            </nav>
                        </div>
                         <div class="header-right">
                            <a href="siparissorgulama/" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Sipariş Takip</a>
                            <a href="kampanyalar/"><i class="w-icon-sale"></i>Kampanyalar</a>
                        </div>
                    </div>
                </div>
            </div></div>
        </header>
        <!-- End of Header -->
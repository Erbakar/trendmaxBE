    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="<?php echo $sitetemasi;?>/image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="<?php echo $sitetemasi;?>/image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<style>.products-list.grid .product-layout .product-item-container, .products-list .product-grid .product-item-container{  background-color: #fff;  margin: 0 0 30px 0;  padding: 0;  position: relative;  overflow: hidden;  border-radius: 0;  min-height: 350px;}</style>
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo $sitetemasi;?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/css/themecss/lib.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="<?php echo $sitetemasi;?>/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/css/themecss/so-categories.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="<?php echo $sitetemasi;?>/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="<?php echo $sitetemasi;?>/css/footer/footer1.css" rel="stylesheet">
    <?php include("".$sitetemasi."/css/header/header1.php");?>
	<?php include("".$sitetemasi."/css/theme.php");?>
	
	
    <link href="<?php echo $sitetemasi;?>/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <style type="text/css">
         body{font-family:'Poppins', sans-serif;}.left-content-product .content-product-right .box-info-product .cart input {  background: #fa0505;  border-radius: 0;  color: #fff;  text-transform: uppercase;  font-size: 13px;  font-weight: bold;  padding: 12px 30px !important;}
    </style> 


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
<?php if($_GET['oziywebs']=='urun'){	
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
<?php if($_GET['oziywebs']==''){?>
<body class="common-home res layout-1">
<?php } else {?>
<body class="res layout-1 layout-subpage loaded">
<?php }?> 
 
<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>">
		<img style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
</div>

  <div id="wrapper" class="wrapper-fluid banners-effect-3">
    
    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-md hidden-sm hidden-xs welcome-msg"><?php echo $tema['t33']; ?></div>
                        <ul class="top-link list-inline hidden-lg ">
                            <li class="account" id="my_account">Üyelik
                                <a href="#" title="Üyelik " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">Üyelik </span>  <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
								    <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
                                    <li><a href="hesabim/"><i class="fa fa-user"></i> Hesabım</a></li>
                                    <li><a href="cikis/"><i class="fa fa-pencil-square-o"></i> Çıkış Yap</a></li>
									<?php } else { ?>
									<li><a href="uyeol/"><i class="fa fa-user"></i> Üye Ol</a></li>
                                    <li><a href="uyeol/"><i class="fa fa-pencil-square-o"></i> Giriş Yap</a></li>
									<?php } ?>
                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                           <li class="language">
                                <div class="btn-group languages-block ">
                                    <a href="kampanyalar/">
                                            <span class="">Kampanyalar</span>
                                           
                                        </a>
                                   
                                </div>
                                
                            </li>  
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <a href="iletisim/">
                                            <span class="">İletişim</span>
                                           
                                        </a>
                                   
                                </div>
                                
                            </li>
							
						
							
                        </ul>
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo"><a href="<?php echo $url;?>">
						<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" title="Logo" alt="Logo"></a></div>
                    </div>
                    <!-- //end Logo -->

                    
                    <!-- Search -->
                    <div class="col-lg-7 col-md-6 col-sm-5">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="arama/">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                            <select class="no-border" name="kategori">
                                                <option value="0">Tüm Kategoriler</option>
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
                                                <option value="<?php echo $katadi['id']; ?>"><?php echo $katadi['adi']; ?></option>
                <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>                             
                                                <option value="<?php echo $katadi2['id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $katadi2['adi']; ?></option>
                   <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>
				   <option value="<?php echo $katadi22['id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $katadi22['adi']; ?></option>
				
				<?php }}} ?>	
                                            </select>
                                        </div>

                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" name="arama" placeholder="Ne aramıştınız... ?" required>
                                
                                        <button type="submit" class="button-search btn btn-primary"><i class="fa fa-search"></i></button>
                                    
                                    </div>
                     
                                </form>
                            </div>
                        </div>  
                    </div>
                    <!-- //end Search -->
                    <div class="middle-right col-lg-3 col-md-3 col-sm-3">                  
                        <!--cart-->
                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a href="sepet/" class="btn-group top_cart" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                <i class="fa fa-shopping-bag"></i>
                              </span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart">

                                               Sepetim
                                            </p>

                                            <span class="total-shopping-cart cart-total-full">
                                   <span class="items_cart"><?php echo $sepetsayi;?></span><span class="items_cart2"> ürün</span><span class="items_carts"><?php echo $toplamtutari;?></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                            </div>

                        </div>
                        <!--//cart-->

                        <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                            <li class="compare hidden-xs"><a href="urunkarsilastirma/" class="top-link-compare" title="Karşılaştır "><i class="fa fa-refresh"></i></a>
                            </li>
                            <li class="wishlist hidden-xs"><a href="favorilerim/" id="wishlist-total" class="top-link-wishlist" title="Favorilerim"><i class="fa fa-heart"></i></a>
                            </li>
                        </ul>

                                            
                        
                    </div>
                    
                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">
                    
                    <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                        <div class="responsive so-megamenu megamenu-style-dev ">
                            <div class="so-vertical-menu ">
                                <nav class="navbar-default">    
                                    
                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        TÜM KATEGORİLERİMİZ                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                <i class="fa fa-bars"></i>
                                                <span>  TÜM KATEGORİLERİMİZ     </span>
                                            </button>
                                        </div>
                                        <div class="vertical-wrapper">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu">
													
													
													
													
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>	
													
													
													
                                                        <li class="item-vertical  with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix">
                                                                <img <?php echo $katadi['nikon'] == '0' ? 'style="display:none !important;"' : null; ?> src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>" alt="icon">
                                                                <span><?php echo $katadi['adi']; ?></span>
                                                                <b class="fa-angle-right"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="60">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
																			
																			                        
	           <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
																			
                                                                                <div class="col-md-4 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a href="kategori/<?php echo $katadi2['seo']; ?>" class="main-menu"><?php echo $katadi2['adi']; ?></a>
                                                                                                <ul>
                                                                                                     <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                <li> <a  href="kategori/<?php echo $katadi22['seo']; ?>">
				 <?php echo $katadi22['adi']; ?></a></li>
                
				<?php } ?>  
                                                                                                </ul>
                                                                                            </li>
                                                                                          
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            	<?php } ?>  
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
														
														
														
												
			                                        <?php } else { ?>			
														
														
														
														
                                                        <li class="item-vertical">
                                                            <p class="close-menu"></p>
                                                            <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix">
                                                                <img <?php echo $katadi['nikon'] == '0' ? 'style="display:none !important;"' : null; ?> src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>" alt="icon">
                                                                <span><?php echo $katadi['adi']; ?></span>
                                                                
                                                            </a>
                                                        </li>
                                                     
													 
													     <?php }} ?>
													 
													 
                                                   
                                                        <li class="loadmore">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view">Daha Fazla Kategori</span>
                                                        </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Main menu -->
                    <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
												
												      <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="<?php echo $url;?>" class="clearfix">
                                                            <strong>Anasayfa</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>
												
			<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustgoster='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
						  
												
												
												
                                                   
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix">
                                                            <strong><?php echo $katadi['adi']; ?></strong>
                                                            
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; right: auto;">
                                                            <div class="content">
                                                                <div class="row">
																
																		
				<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	
																
																
                                                                    <div class="col-md-4">
                                                                        <div class="column">
                                                                            <a href="kategori/<?php echo $katadi2['seo']; ?>" class="title-submenu"><?php echo $katadi2['adi']; ?></a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    				<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>									
												
												
                                                  <li><a href="kategori/<?php echo $katadi22['seo']; ?>" onclick="window.location = 'kategori/<?php echo $katadi22['seo']; ?>'"><?php echo $katadi22['adi']; ?></a></li>
                                                  <?php } ?>	
                                                                                </ul>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  
                                                          	    <?php } ?>	     
															   
															   
															   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                               
                                                     <?php } else { ?>	
                                                    
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix">
                                                            <strong><?php echo $katadi['adi']; ?></strong>
                                         
                                                        </a>
                                            
                                                    </li>
                                               <?php }} ?>
                                                    
                                                    
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->
                                      
                    <div class="bottom3">                        
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank"> 
                                <li><a href="siparissorgulama/"><i class="fa fa-truck"></i>Sipariş Sorgulama</a></li> 
                                <li><a href="tel:<?php echo $ayar['tel'];?>"><i class="fa fa-phone-square"></i>Çözüm Merkezi <?php echo $ayar['tel'];?></a></li> 
                            </ul>
                        </div>  
                        <div class="signin-w hidden-md hidden-sm hidden-xs">
                            <ul class="signin-link blank">  
							   <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
							    <li class="log login">
								<i class="fa fa-lock"></i>
								<a class="link-lg" href="hesabim/">Hesabım </a> 
								veya <a href="cikis/">Çıkış Yap</a>
								</li> 
							   <?php } else { ?>	
                                <li class="log login">
								<i class="fa fa-lock"></i>
								<a class="link-lg" href="uyeol/">Giriş Yap </a> 
								veya <a href="uyeol/">Üye Ol</a>
								</li> 
								<?php } ?>
                            
							
							</ul>                       
                        </div>                  
                    </div>
                    
                </div>
            </div>

        </div>
    </header>
    <!-- //Header Container  -->
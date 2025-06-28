    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
    <link rel="shortcut icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">  
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/fonts.googleapis.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/icon-font.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/social-buttons.css" rel="stylesheet" type="text/css" media="all">
    <?php require_once ("".$sitetemasi."/assets/stylesheets/cs-3.styles.php");?>
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/slideshow-fade.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $sitetemasi;?>/assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/classie.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/cs.optionSelect.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/cs.script.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/jquery.currencies.min.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/jquery.zoom.min.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/linkOptionSelectors.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/scripts.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/social-buttons.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/javascripts/jquery.touchSwipe.min.js"></script>

	<link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
    <script src="boss/assets/toastr/toastr.min.js"></script>
    <?php require_once('func/global.php');?>

	
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




</head>
<body class="index-template sarahmarket_1">
<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>
	<!--Header-->
	<header id="top" class="header clearfix">
		<div id="shopify-section-theme-header" class="shopify-section">
			<div data-section-id="theme-header" data-section-type="header-section">
				<section class="top-header">
					<div class="top-header-wrapper">
						<div class="container">
							<div class="row">
								<div class="top-header-inner">
									<ul class="unstyled top-menu">
										<!-- Menu Top -->
									<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
										<li class="toolbar-customer my-wishlist">
											<a href="hesabim/">
												<i class="fa fa-user" aria-hidden="true"></i>
												 Hesabım
											</a>
										</li>
										<?php } else { ?>	
										
										<li class="toolbar-customer my-wishlist">
											<a href="uyeol/">
												<i class="fa fa-user" aria-hidden="true"></i>
												 Üye Ol/Giriş Yap
											</a>
										</li>
											<?php } ?>
										
										<li class="toolbar-customer my-wishlist">
											<a href="siparissorgulama/">
												<i class="fa fa-truck"></i> 
												Sipariş Sorgulama
											</a>
										</li>
										
									
										<li class="toolbar-customer my-wishlist">
											<a href="urunkarsilastirma/">
											<i class="fa fa-random" aria-hidden="true"></i>
												 Karşılaştırma
											</a>
										</li>
										
										<!-- Customer Links -->
										<li class="toolbar-customer my-wishlist">
										<i class="fa fa-university" aria-hidden="true"></i>
										 <a href="bankabilgilerimiz/">Banka Hesaplarımız</a>
										
										</li>
										
											<li class="toolbar-customer my-wishlist">
											<a href="sss/">
												<i class="fa fa-question-circle" aria-hidden="true"></i>
												 S.S.S.
											</a>
										</li>
									
										
									
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="main-header">
					<div class="main-header-wrapper">
						<div class="container clearfix">
							<div class="row">
								<div class="main-header-inner">
									<div class="nav-top">
										<div class="nav-logo">
											<a href="<?php echo $url;?>">
											<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="<?php echo $ayar['siteadi'];?>" title="<?php echo $ayar['siteadi'];?>"></a>
											<h1 style="display:none"><a href="<?php echo $url;?>"><?php echo $ayar['siteadi'];?></a></h1>
										</div>
										<div class="group-search-cart">
											<div class="nav-search">
												<form class="search" action="arama/" method="GET">
													<input type="text" name="arama" class="search_box" placeholder="Ne aramıştınız ?" value="" required>
													<button class="search_submit" type="submit">
														<svg aria-hidden="true" role="presentation" class="icon icon-search" viewbox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
													</button>
												</form>
											</div>
											
											
												<div class="nav-cart ">
												<div class="cart-info-group">
													<a href="favorilerim/" class="cart">
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
														<div class="num-items-in-cart">
													     <div class="items-cart-left" style="margin-top: 0px;">
																<img class="cart_img" src="<?php echo $sitetemasi;?>/assets/images/bg-cart-4.png" alt="Image Cart" title="Image Cart">
																 
															</div>
															<div class="items-cart-right">
																<span class="title_cart">Favorilerim</span>        
															</div>
														</div>
													</a>
												
												</div>
											</div>
											
											
											
											
											<div class="nav-cart " id="cart-target">
												<div class="cart-info-group">
													<a href="sepet/" class="cart dropdown-toggle dropdown-link" data-toggle="dropdown">
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
														<div class="num-items-in-cart">
															<div class="items-cart-left">
																<img class="cart_img" src="<?php echo $sitetemasi;?>/assets/images/bg-cart-2.png" alt="Image Cart" title="Image Cart">
																<span class="cart_text icon"><span class="number"><?php echo $sepetsayi;?></span></span>       
															</div>
															<div class="items-cart-right">
																<span class="title_cart">Sepetim</span>        
															</div>
														</div>
													</a>
													<div class="dropdown-menu cart-info" style="display: none;">
													
													<?php if($sepetsayi>='1'){?>
													
														<div class="cart-content">
															<div class="items control-container">
															
					  <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>	
																<div class="row">
																	
				  <form action="" method="POST">
		          <input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
		          <button name="delete" type="submit" title="Sil" class="cart-close">
		          <i class="fa fa-times"></i></button>
		          </form>
																	<div class="cart-left">
																		<a class="cart-image" href="urun/<?php echo $sepet['seo'];?>">
																			<img src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="<?php echo $sepet['adi'];?>" title="<?php echo $sepet['adi'];?>">
																		</a>
																	</div>
																	<div class="cart-right">
																		<div class="cart-title">
																		<a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?><br><?php echo $sepet['ekurun'];?></a></div>
																		<div class="cart-price">
																		<span class="x"><?php echo $sepet['adet'];?> x </span>
																		<span class="money" data-currency-usd="<?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?>" data-currency="TRY"><?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?></span>
																		
																		</div>
																	</div>
																</div>
															
															  <?php }} ?>  	
															</div>
															<div class="subtotal"><span>Ara Tutar:</span><span class="cart-total-right money" data-currency-usd="<?php echo fiyatgoster($sepetbedeli);?>" data-currency="TRY"><?php echo fiyatgoster($sepetbedeli);?></span></div>
															<div class="action"><button class="btn" onclick="window.location='/anasayfa'">Alışverişe Devam<i class="fa fa-caret-right"></i></button>
															<button class="btn float-right" onclick="window.location='sepet/'">Satın Al<i class="fa fa-caret-right"></i></button></div>
														</div>
													    
														
														<?php } else { ?>
														<div class="cart-content">
															<div class="items control-container" style="padding: 20px;text-align: center;">
															Alışveriş Sepetiniz Boş
															</div>
														</div>
														
														<?php } ?>
														
														
														
														
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mobile-navigation">
										<button id="showLeftPush" class="visible-xs"><i class="fa fa-bars fa-2x"></i></button>
										<div class="nav-logo visible-xs">
											<div><a href="<?php echo $url;?>">
											<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="<?php echo $ayar['siteadi'];?>" title="<?php echo $ayar['siteadi'];?>"></a></div>
										</div>
										<div class="icon_cart visible-xs">
											<div class="cart-info-group">
												<a href="sepet/" class="cart dropdown-toggle dropdown-link">
													<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
													<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
													<div class="num-items-in-cart">
														<div class="items-cart-left">
															<img class="cart_img" src="<?php echo $sitetemasi;?>/assets/images/bg-cart-2.png" alt="Image Cart" title="Image Cart">
															<span class="cart_text icon"><span class="number"><?php echo $sepetsayi;?></span></span>       
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="nav-search visible-xs">
											<form class="search" action="arama/" method="GET">
												<input type="text" name="arama" class="search_box" placeholder="Ne aramıştınız ?" value="" required>
												<button class="search_submit" type="submit">
													<svg aria-hidden="true" role="presentation" class="icon icon-search" viewbox="0 0 37 40"><path d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z"></path></svg>
												</button>
											</form>
										</div>
										<div class="mobile-navigation-inner">
											<div class="mobile-navigation-content">
												<div class="mobile-top-navigation visible-xs">
													<div class="mobile-content-top">
														<div class="mobile-language-currency">
															<div class="currencies-switcher">
															
															</div>
														</div>
														<div class="mobile-top-account">
															<div class="is-mobile-login">
																<ul class="customer">
																
																<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
																	<li class="logout">
																		<a href="hesabim/"><i class="fa fa-user" aria-hidden="true"></i>
																			<span>Hesabım</span>
																		</a>
																	</li>
																<?php } else { ?>	
                                                                   <li class="logout">
																		<a href="uyeol/"><i class="fa fa-user" aria-hidden="true"></i>
																			<span>Üye Ol/Giriş Yap</span>
																		</a>
																	</li>

																<?php } ?>
																	<li class="account">
																		<a href="siparissorgulama/"><i class="fa fa-truck" aria-hidden="true"></i>
																			<span>Sipariş Takip</span>
																		</a>
																	</li>
																	<li class="is-mobile-cart">
																		<a href="sepet/">
																			<div class="num-items-in-cart">
																				<i class="fa fa-shopping-cart"></i>
																				<span>Sepetim</span>
																				<div class="ajax-subtotal" style="display:none;"></div>
																			</div>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="nav-menu visible-xs leftnavi" id="is-mobile-nav-menu">
													<div class="is-mobile-menu-content">
														<div class="mobile-content-link">
															<ul class="nav navbar-nav hoverMenuWrapper">
																<li class="nav-item active">
																	<a href="<?php echo $url;?>">
																		Anasayfa
																	</a>
																</li>
																
																	<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                                                     foreach($ustkattt as $katadi){?>

                                                                 <?php if($katadi['ac']=='1'){?>
						
																<li class="nav-item navigation navigation_mobile">
																	<a href="kategori/<?php echo $katadi['seo']; ?>" class="menu-mobile-link">
																   <?php echo $katadi['adi']; ?>
																	</a>
																	<a href="javascript:void(0)" class="arrow">
																		<i class="fa fa-angle-down"></i>
																	</a>
																	
				<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
																	
																	<ul class="menu-mobile-container" style="display: block;">
																		<li class=" li-sub-mega navigation_mobile_1<?php echo $katadi2['id']; ?>">
																		    <a href="kategori/<?php echo $katadi2['seo']; ?>" class="title-submenu ">
										<?php echo $katadi2['adi']; ?></a>
																		</li>
																			
																				
																			
																		 <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                                             	<li style="margin-left: 10%;" class=" li-sub-mega">
												<a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                              <?php } ?>	
																		
																		
																		
																		
																		
																		
																	
																	
																		</ul>
																	  <?php } ?>	
																	
															
															
															<?php } else { ?>		  
						   
						     
                                                         	<li class="nav-item">
																	<a href="kategori/<?php echo $katadi['seo']; ?>">
																		<?php echo $katadi['adi']; ?>
																	</a>
																</li>
																
                         
						                                           <?php }} ?>
																
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="navigation-header">
					<div class="navigation-header-wrapper">
						<div class="container clearfix">
							<div class="row">
								<div class="main-navigation-inner">
									<div class="navigation_area">
										<div class="navigation_left">
											<div class="group_navbtn">
												<a href="" class="dropdown-toggle" data-toggle="dropdown">                     
													<span class="dropdown-toggle">
													  Ürün Kategorilerimiz
													</span>
													<i class="fa fa-bars" aria-hidden="true"></i>
												</a>
												
											
												
												
												<ul class="navigation_links_left dropdown-menu" style="display: none;">
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

                <?php if($katadi['ac']=='1'){?>
						
												
														<li class="nav-item dropdown navigation _icon">
														<a href="kategori/<?php echo $katadi['seo']; ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
															<img <?php echo $katadi['nikon'] == '' ? 'style="display:none;"' : null; ?> src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>" alt="<?php echo $katadi['seo']; ?>">
															<span><?php echo $katadi['adi']; ?></span>
															<i class="fa fa-angle-right"></i>
															<i class="sub-dropdown1  visible-sm visible-md visible-lg"></i>
															<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
														</a>
														
														
							
																	
																	<ul class="dropdown-menu" style="display: block;">
																			
																								<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>		
																			<li class="nav-item _icon">
																		    <a href="kategori/<?php echo $katadi2['seo']; ?>" class="title-submenu ">
										<?php echo $katadi2['adi']; ?></a>
																		</li>
																			
																				
																			
																		 <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                                             	<li style="margin-left: 10%;"	  class="nav-item _icon">
												<a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                              <?php } ?>	
																		
																		
																		
																		
																		  <?php } ?>	
														
																		
																	
																	
																		</ul>
																	
														
														
														
													</li>
													
													
													<?php } else { ?>	
													<li class="nav-item _icon">
														<a href="kategori/<?php echo $katadi['seo']; ?>">
														  <img <?php echo $katadi['nikon'] == '' ? 'style="display:none;"' : null; ?> src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>" alt="<?php echo $katadi['seo']; ?>">
															<span><?php echo $katadi['adi']; ?></span>
															
														</a>
													</li>
													
													<?php }} ?>
													
													
													
													
												
												
													
													
													
													
													
													
													
												</ul>
											</div>
										</div>
										<div class="navigation_right">
											<ul class="navigation_links">
												<li class="nav-item">
													<a href="<?php echo $url;?>">
														<span>Anasayfa</span>
													</a>
												</li>
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustgoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
												
												<li class="dropdown mega-menu">
													<a href="kategori/<?php echo $katadi['seo']; ?>" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
														<span><?php echo $katadi['adi']; ?></span>
														<i class="fa fa-angle-down"></i>
														<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
														<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
													</a>
													<div class="megamenu-container megamenu-container-2 dropdown-menu" style="width: 1170px;">
														<ul class="sub-mega-menu">
														    		<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	 
															<li class="mega-links mega2-collumn2 col-sm-3">
																<ul>
																	<li class="list-title">
																	<a href="kategori/<?php echo $katadi2['seo']; ?>">
																	<?php echo $katadi2['adi']; ?>
																	</a></li>
																	<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	

											<li class="list-unstyled li-sub-mega"><a href="kategori/<?php echo $katadi22['seo']; ?>">
											<?php echo $katadi22['adi']; ?></a>
											</li>
                                              <?php } ?>	
																	
																	
																	
																</ul>
															</li>
														
														   <?php } ?>	
														
														
														</ul>
													</div>
												</li>
												
											   <?php } else { ?>	
											
												<li class="nav-item">
													<a href="kategori/<?php echo $katadi['seo']; ?>">
														<span><?php echo $katadi['adi']; ?></span>
													</a>
												</li>
											
											    <?php }} ?>
				   
											
											
											
											</ul>
										</div>
										<div class="navigation_icon">
											<div class="navigation_icon_group">
												<div class="icon_cart">
													<div class="cart-info-group">
														<a href="cart.html" class="cart dropdown-toggle dropdown-link" data-toggle="dropdown">
															<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
															<i class="sub-dropdown visible-sm visible-md visible-lg"></i> 
															<div class="num-items-in-cart">
																<div class="items-cart-left">
																	<img class="cart_img" src="<?php echo $sitetemasi;?>/assets/images/bg-cart.png" alt="Image Cart" title="Image Cart">
																	<span class="cart_text icon"><span class="number"><?php echo $sepetsayi;?></span></span>       
																</div>
															</div>
														</a>
															<div class="dropdown-menu cart-info" style="display: none;">
													
													<?php if($sepetsayi>='1'){?>
													
														<div class="cart-content">
															<div class="items control-container">
															
					  <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>	
																<div class="row">
																	
				  <form action="" method="POST">
		          <input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
		          <button name="delete" type="submit" title="Sil" class="cart-close">
		          <i class="fa fa-times"></i></button>
		          </form>
																	<div class="cart-left">
																		<a class="cart-image" href="urun/<?php echo $sepet['seo'];?>">
																			<img src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="<?php echo $sepet['adi'];?>" title="<?php echo $sepet['adi'];?>">
																		</a>
																	</div>
																	<div class="cart-right">
																		<div class="cart-title">
																		<a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?><br><?php echo $sepet['ekurun'];?></a></div>
																		<div class="cart-price">
																		<span class="x"><?php echo $sepet['adet'];?> x </span>
																		<span class="money" data-currency-usd="<?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?>" data-currency="TRY"><?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?></span>
																		
																		</div>
																	</div>
																</div>
															
															  <?php }} ?>  	
															</div>
															<div class="subtotal"><span>Ara Tutar:</span><span class="cart-total-right money" data-currency-usd="<?php echo fiyatgoster($sepetbedeli);?>" data-currency="TRY"><?php echo fiyatgoster($sepetbedeli);?></span></div>
															<div class="action"><button class="btn" onclick="window.location='/anasayfa'">Alışverişe Devam<i class="fa fa-caret-right"></i></button>
															<button class="btn float-right" onclick="window.location='sepet/'">Satın Al<i class="fa fa-caret-right"></i></button></div>
														</div>
													    
														
														<?php } else { ?>
														<div class="cart-content">
															<div class="items control-container" style="padding: 20px;text-align: center;">
															Alışveriş Sepetiniz Boş
															</div>
														</div>
														
														<?php } ?>
														
														
														
														
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<script>
				function addaffix(scr) {
					if ($(window).innerWidth() >= 992) {
						if (scr > 170) {
							if (!$('#top').hasClass('affix')) {
								$('#top').addClass('affix').addClass('fadeInDown animated');
							}
						} else {
							if ($('#top').hasClass('affix')) {
								$('#top').prev().remove();
								$('#top').removeClass('affix').removeClass('fadeInDown animated');
							}
						}
					} else $('#top').removeClass('affix');
				}
				$(window).scroll(function() {
					var scrollTop = $(this).scrollTop();
					addaffix(scrollTop);
				});
				$(window).resize(function() {
					var scrollTop = $(this).scrollTop();
					addaffix(scrollTop);
				});
			</script>
		</div>
	</header>
	<div class="fix-sticky"></div>
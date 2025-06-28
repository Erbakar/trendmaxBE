    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	
<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<!-- BEGIN content_for_index -->
			<div id="shopify-section-1493002097852" class="shopify-section index-section index-section-slideshow">
				<div data-section-id="1493002097852" data-section-type="slideshow-section">
					<section class="home_slideshow main-slideshow">
						<div class="home-slideshow-wrapper">
							<div class="container">
								<div class="row">
									<div class="group-home-slideshow">
										<div class="home-sidemenu-inner col-sm-3">
											<ul class="navigation_links_left">
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
                                             	<li style="margin-left: 10%;"	  class="list-unstylednav-item _icon">
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
										<div class="home-slideshow-inner col-sm-6">
											<div class="home-slideshow">
												<div id="home_main-slider" class="carousel slide  main-slider">
													<ol class="carousel-indicators">
														<li data-target="#home_main-slider" data-slide-to="0" class="carousel-1"></li>
														<li data-target="#home_main-slider" data-slide-to="1" class="carousel-2 active"></li>
													</ol>
													<div class="carousel-inner">
													
											<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
                                             foreach($slider as $demo){?> 	
													
														<div class="item image active">
															<a href="<?php echo $demo['link'];?>">
															<img class="bnnr" src="resimler/slider/<?php echo $demo['resim'];?>" alt="Slider" title="Image Slideshow">
															</a>
															</div>
													
													    <?php } ?> 	
													<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc limit 1,100")->fetchAll(PDO::FETCH_ASSOC); 
                                             foreach($slider as $demo){?> 	
													
														<div class="item image">
															<a href="<?php echo $demo['link'];?>">
															<img class="bnnr" src="resimler/slider/<?php echo $demo['resim'];?>" alt="Slider" title="Image Slideshow">
															</a>
															</div>
														
													
													    <?php } ?> 
														</div>
													
													</div>
													<a class="left carousel-control" href="#home_main-slider" data-slide="prev">
														<span class="icon-prev"></span>
													</a>
													<a class="right carousel-control" href="#home_main-slider" data-slide="next">
														<span class="icon-next"></span>
													</a>
												</div>
											</div>
									
										<div class="home-banner-inner col-sm-3">
										
							<div class="bansli_right">
												<div class="right_content">
													 <?php $ukz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 6")->fetchAll(PDO::FETCH_ASSOC); 
    foreach($ukz as $firsat){?>
													<div class="right_item">
													
													<div class="content_product" >
																<div class="row-container product list-unstyled clearfix">
																	<div class="row-left">
																		<a href="urun/<?php echo $firsat['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper gfirsat">
																				<img  src="resimler/urunler/<?php echo $firsat['firsatresim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $firsat['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
																		</a>
																		
																		<span class="sale_banner">
																			<span class="sale_text" style="background: #6c0365;
color: white;
font-size: 10px;
font-weight: bold;
padding: 10px;
">GÜNÜN FIRSATI</span>
																		</span>
																		
																		<div class="hover-mask">
																			<div class="group-mask">
																				<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $firsat['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $firsat['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $firsat['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<!--inner-mask-->
																			</div>
																			<!--Group mask-->
																		</div>
																	</div>
																	<div class="row-right animMix">
																		<div class="product-title">
																		<a class="title-5" href="urun/<?php echo $firsat['seo']; ?>"><?php echo $firsat['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($firsat['kdv'],$firsat['idurum'],$firsat['fiyat'],$firsat['ifiyat']);?>
											
																		</div>
																	</div>
																</div>
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
					</section>
				</div>
			</div>
			
			
		
			
			
			<div id="shopify-section-1490952827558" class="shopify-section index-section index-section-prosli">
				<div data-section-id="1490952827558" data-section-type="prosli-section">
					<section class="home_prosli_layout">
						<div class="home_prosli_wrapper">
							<div class="container">
								<div class="row">
									<div class="prosli_group">
										<div class="page-title">
											<h2>Güncel Kampanyalar</h2>
											<a href="kampanyalar/" class="prosli_action">Tümünü İncele</a>
										</div>
										<div class="home_prosli_inner" style="overflow-x: auto;">
											<div class="home_prosli_content">
											
										<?php include('hikaye.php');?>
										
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			

			
			
			
			
			
			
			
			
			
			
			
			
			<div id="shopify-section-1493002138267" class="shopify-section index-section index-section-procol">
				<div data-section-id="1493002138267" data-section-type="procol-section">
					<section class="home_procol_layout">
						<div class="home_procol_wrapper">
							<div class="container">
								<div class="row">
									<div class="home_procol_inner">
										<div class="page-title">
											<h2>Popüler Ürünler</h2>
											<a>Yılın En Trend Ürünleri </a>
										</div>
										<div class="home_procol_content">
			  <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira DESC limit 1")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   

											<div class="procol_item procol_pro_one">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="urun/<?php echo $popurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($popurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $popurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $popurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $popurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>

																<div class="row-right animMix">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $popurunler['seo']; ?>"><?php echo $popurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
																		</div>
																	</div>
												</div>
											</div>
											
											<?php } ?> 
											
											<div class="procol_item">
											
											
			 <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira DESC limit 1,2")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   
											
											
												<div class="procol_pro_two">
													<div class="row-container ">
														<div class="product home_product">
																				<div class="row-left">
														<a href="urun/<?php echo $popurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($popurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $popurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $popurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $popurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>
															<div class="row-right">
																	<div class="product-title"><a class="title-5" href="urun/<?php echo $popurunler['seo']; ?>"><?php echo $popurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
																		</div>
															</div>
														</div>
													</div>
												</div>
											
											
											<?php } ?>
											
											</div>
											
											
										  <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira DESC limit 3,1")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   

											<div class="procol_item procol_pro_one">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="urun/<?php echo $popurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($popurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $popurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $popurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $popurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>

																<div class="row-right animMix">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $popurunler['seo']; ?>"><?php echo $popurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
																		</div>
																	</div>
												</div>
											</div>
											
											<?php } ?> 
											
											<div class="procol_item">
											
											
			 <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira DESC limit 4,2")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   
											
											
												<div class="procol_pro_two">
													<div class="row-container ">
														<div class="product home_product">
																				<div class="row-left">
														<a href="urun/<?php echo $popurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($popurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $popurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $popurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $popurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>
															<div class="row-right">
																	<div class="product-title"><a class="title-5" href="urun/<?php echo $popurunler['seo']; ?>"><?php echo $popurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
																		</div>
															</div>
														</div>
													</div>
												</div>
											
											
											<?php } ?>
											
											</div>
											
										 <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira DESC limit 6,1")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   

											<div class="procol_item procol_pro_one">
												<div class="row-container product list-unstyled clearfix">
													<div class="row-left">
														<a href="urun/<?php echo $popurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($popurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $popurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $popurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $popurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>

																<div class="row-right animMix">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $popurunler['seo']; ?>"><?php echo $popurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
																		</div>
																	</div>
												</div>
											</div>
											
											<?php } ?> 
											
											<div class="procol_item">
											
											
			 <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira DESC limit 7,2")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   
											
											
												<div class="procol_pro_two">
													<div class="row-container ">
														<div class="product home_product">
																				<div class="row-left">
														<a href="urun/<?php echo $popurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $popurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($popurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $popurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $popurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $popurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>
															<div class="row-right">
																	<div class="product-title"><a class="title-5" href="urun/<?php echo $popurunler['seo']; ?>"><?php echo $popurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
																		</div>
															</div>
														</div>
													</div>
												</div>
											
											
											<?php } ?>
											
											</div>
											
										
										
										
										
										
										
										
										
										
										
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			
			
			

			
			
			 <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 
			
			
			
			
			
			<div id="shopify-section-1493279175039" class="shopify-section index-section index-section-proban">
				<div data-section-id="1493002235830" data-section-type="proban-section">
					<section class="home_proban_layout">
						<div class="home_proban_wrapper">
							<div class="container">
								<div class="row">
									<div class="home_proban_inner">
										<div class="page-title proban-title-2" style="border-bottom: 1px solid <?php echo $kategorimx['renk']; ?> !important;">
											<div class="group_title">
												<h2><?php echo $kategorimx['adi']; ?></h2>
											</div>
											<a href="kategori/<?php echo $kategorimx['seo']; ?>">Tümünü İncele</a>
										</div>
										<div class="home_proban_content">
											<div class="col-sm-6 proban_banner">
												<a href="kategori/<?php echo $kategorimx['seo']; ?>">
													<img src="resimler/kategoriler/<?php echo $kategorimx['yanresim']; ?>" alt="Kategori">
												</a>
											</div>
											
							<?php 
							$katimiz = $kategorimx['id']; 
							$ukk = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 9")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukk as $katurunler){
							?>
											
											
											<div class="col-sm-2 proban_product">
												<div class="row-container product list-unstyled clearfix">
													
																<div class="row-left">
														<a href="urun/<?php echo $katurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($katurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $katurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $katurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $katurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>

																<div class="row-right animMix">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
																		</div>
																	</div>

													
												</div>
											</div>
											
											
												<?php } ?>
											
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			
				<?php } ?>
			
			<style>
			body section.home_procol_layout .group-procol .column_content {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

body section.home_procol_layout .group-procol .column_content .column_item {
    width: 50%
}

body section.home_procol_layout .group-procol .column_content .column_item .column_product {
    border-left: 1px solid #ebebeb;
    border-top: 1px solid #ebebeb
}

body section.home_procol_layout .group-procol .column_content .column_item .column_product .product {
    margin-bottom: 0
}

body section.home_procol_layout .group-procol .column_content .column_item .column_product:not(.product_full) .product .row-left {
    width: 45%;
    float: left;
    padding: 19px 20px
}

body section.home_procol_layout .group-procol .column_content .column_item .column_product:not(.product_full) .product .row-right {
    width: 55%;
    float: left;
    padding: 20px 20px 20px 0
}

body section.home_procol_layout .group-procol .column_content .column_item .column_product:not(.product_full) .product .product-price .price_compare {
    padding-left: 0
}

@media (max-width: 1199px) {
    body section.home_procol_layout .group-procol .column_content .column_item .column_product:not(.product_full) .product .product-price .price_compare {
        float: right
    }
}

body section.home_procol_layout .group-procol .column_content .column_item .column_product.product_full .product .row-right {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: transparent;
    padding: 10px 20px
}

@media (min-width: 520px) and (max-width: 680px) {
    body section.home_procol_layout .group-procol .column_content .column_item .column_product {
        border-left-width: 0
    }
}

@media (max-width: 360px) {
    body section.home_procol_layout .group-procol .column_content .column_item .column_product {
        border-left-width: 0
    }
}

body section.home_procol_layout .group-procol .column_content .column_item:first-child .column_product {
    border-left-width: 0
}

body section.home_procol_layout .group-procol .column_content.style_1 .column_product {
    border-left: 0;
    border-right: 1px solid #ebebeb
}

@media (min-width: 520px) and (max-width: 680px) {
    body section.home_procol_layout .group-procol .column_content.style_1 .column_product {
        border-right: 0
    }
}

@media (max-width: 360px) {
    body section.home_procol_layout .group-procol .column_content.style_1 .column_product {
        border-right: 0
    }
}

body section.home_procol_layout .group-procol .column_content.style_1 .column_item:nth-of-type(2) .column_product {
    border-right: 0
}

body section.home_protab1_layout .container {
    overflow: hidden
}

body section.home_protab1_layout .home_protab1_content {
    background-color: #fff
}

body section.home_protab1_layout .protab1_top {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    -o-align-items: center;
    align-items: center;
    border-top: 2px solid #515151
}

body section.home_protab1_layout .protab1_top .page-title {
    border-width: 0;
    width: 289px
}

body section.home_protab1_layout .protab1_top .page-title h2,body section.home_protab1_layout .protab1_top .page-title .h2 {
    width: 100%;
    border-right: 1px solid #ebebeb
}

@media (max-width: 1199px) {
    body section.home_protab1_layout .protab1_top .page-title {
        width: 302px
    }
}

body section.home_protab1_layout .protab1_top .nav-tabs {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    -o-align-items: center;
    align-items: center;
    border-bottom: 0
}

body section.home_protab1_layout .protab1_top .nav-tabs>li.active>a,body section.home_protab1_layout .protab1_top .nav-tabs>li.active>a:focus,body section.home_protab1_layout .protab1_top .nav-tabs>li.active>a:hover {
    border-width: 0;
    color: #e0493e
}

body section.home_protab1_layout .protab1_top .nav-tabs li {
    margin-left: 40px
}

body section.home_protab1_layout .protab1_top .nav-tabs li a {
    margin: 0;
    padding: 0;
    color: #222;
    font-weight: 300;
    border-width: 0
}

body section.home_protab1_layout .protab1_top .nav>li>a:focus,body section.home_protab1_layout .protab1_top .nav>li>a:hover {
    background-color: transparent;
    border-width: 0;
    color: #e0493e
}

@media (max-width: 991px) {
    body section.home_protab1_layout .protab1_top .owl-controls {
        display: none
    }

    body section.home_protab1_layout .protab1_top .nav-tabs li {
        margin-left: 20px
    }

    body section.home_protab1_layout .protab1_top .page-title {
        width: 315px
    }
}

@media (max-width: 767px) {
    body section.home_protab1_layout .protab1_top {
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    body section.home_protab1_layout .protab1_top .nav-tabs {
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    body section.home_protab1_layout .protab1_top .nav-tabs li {
        border-top: 1px solid #ebebeb;
        padding: 10px 20px;
        margin-left: 0px
    }

    body section.home_protab1_layout .protab1_top .nav-tabs>li,body section.home_protab1_layout .protab1_top .nav-tabs,body section.home_protab1_layout .protab1_top .page-title {
        width: 100%
    }
}

body section.home_protab1_layout .protab1_bottom .protab1_banner {
    float: left;
    width: 20.25%
}

body section.home_protab1_layout .protab1_bottom .protab1_banner>a {
    display: block
}

body section.home_protab1_layout .protab1_bottom .tab-content {
    float: left;
    width: 79.75%;
    margin-right: -1px
}

body section.home_protab1_layout .protab1_bottom .content_product {
    border-top: 1px solid #ebebeb;
    border-right: 1px solid #ebebeb
}

body section.home_protab1_layout .protab1_bottom .content_product .product {
    margin-bottom: 0
}

body section.home_protab1_layout .protab1_bottom .content_product .product .row-right {
    padding-bottom: 22px
}

body section.home_protab1_layout .protab1_bottom .content_product .product .product-title a {
    white-space: nowrap;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis
}

body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-prev,body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-next {
    position: absolute;
    top: 50%;
    margin-top: -28px;
    width: 56px;
    height: 56px;
    line-height: 54px;
    text-align: center;
    border-width: 1px;
    border-style: solid;
    background-image: none !important;
    color: #222;
    border-color: #ebebeb;
    background-color: #fff;
    bottom: 100%;
    top: auto;
    right: 0;
    left: auto;
    border-right: 0;
    border-top-width: 0;
    border-bottom-width: 0
}

body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-prev .fa,body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-next .fa {
    color: #222;
    font-size: 20px;
    line-height: 54px
}

@media (min-width: 1200px) {
    body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-prev,body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-next {
        -ms-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        transition: all 500ms ease
    }

    body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-prev:hover,body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-next:hover {
        color: #fff;
        border-color: #a29e9e;
        background-color: #a29e9e
    }

    body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-prev:hover .fa,body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-next:hover .fa {
        color: #fff
    }
}

body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-next {
    margin-right: 1px;
    border-right: 1px solid #ebebeb
}

body section.home_protab1_layout .protab1_bottom .protab1_item>.owl-controls .owl-prev {
    margin-right: 57px
}

@media (max-width: 1199px) {
    body section.home_protab1_layout .protab1_bottom .protab1_banner {
        width: 24.5%
    }

    body section.home_protab1_layout .protab1_bottom .tab-content {
        width: 75.5%
    }
}

@media (max-width: 991px) {
    body section.home_protab1_layout .protab1_bottom .owl-controls .owl-next,body section.home_protab1_layout .protab1_bottom .owl-controls .owl-prev {
        margin-top: 0 !important;
        top: 0 !important;
        border-width: 1px !important
    }

    body section.home_protab1_layout .protab1_bottom .protab1_banner {
        width: 30.5%
    }

    body section.home_protab1_layout .protab1_bottom .tab-content {
        width: 69.5%
    }
}

@media (max-width: 767px) {
    body section.home_protab1_layout .protab1_bottom .protab1_banner {
        display: none
    }

    body section.home_protab1_layout .protab1_bottom .tab-content {
        width: 100%
    }
}

body section.home_protab2_layout .container {
    overflow: hidden
}

body section.home_protab2_layout .home_protab2_content {
    background-color: #fff
}

body section.home_protab2_layout .home_protab2_content .content_product {
    border-top: 1px solid #ebebeb;
    border-right: 1px solid #ebebeb;
    padding: 1px
}

body section.home_protab2_layout .home_protab2_content .content_product .product {
    margin-bottom: 0
}

body section.home_protab2_layout .protab2_top {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: nowrap;
    -moz-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    -o-align-items: center;
    align-items: center;
    border-top: 2px solid #515151
}

body section.home_protab2_layout .protab2_top .page-title {
    border-width: 0;
    width: 387px;
    white-space: nowrap
}

body section.home_protab2_layout .protab2_top .page-title h2,body section.home_protab2_layout .protab2_top .page-title .h2 {
    width: 100%;
    border-right: 1px solid #ebebeb
}

body section.home_protab2_layout .protab2_top .nav>li>a {
    border-width: 0
}

body section.home_protab2_layout .protab2_top .nav>li>a:focus,body section.home_protab2_layout .protab2_top .nav>li>a:hover {
    background-color: transparent
}

body section.home_protab2_layout .protab2_top .nav-tabs>li>a:hover {
    border-width: 0
}

body section.home_protab2_layout .protab2_top .nav-tabs {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    -o-align-items: center;
    align-items: center;
    border-bottom: 0
}

body section.home_protab2_layout .protab2_top .nav-tabs>a {
    border-width: 0
}

body section.home_protab2_layout .protab2_top .nav-tabs>li.active>a,body section.home_protab2_layout .protab2_top .nav-tabs>li.active>a:focus,body section.home_protab2_layout .protab2_top .nav-tabs>li.active>a:hover {
    border-width: 0;
    color: #e0493e
}

body section.home_protab2_layout .protab2_top .nav-tabs>li>a:hover {
    border-width: 0
}

body section.home_protab2_layout .protab2_top .nav-tabs li {
    margin-left: 40px
}

body section.home_protab2_layout .protab2_top .nav-tabs li a {
    margin: 0;
    padding: 0;
    color: #222;
    font-weight: 300
}

body section.home_protab2_layout .protab2_top .nav>li>a:focus,body section.home_protab2_layout .protab2_top .nav>li>a:hover {
    background-color: transparent;
    border-width: 0;
    color: #e0493e
}

@media (max-width: 767px) {
    body section.home_protab2_layout .protab2_top {
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    body section.home_protab2_layout .protab2_top .nav-tabs {
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    body section.home_protab2_layout .protab2_top .nav-tabs li {
        border-top: 1px solid #ebebeb;
        padding: 10px 20px;
        margin-left: 0px !important
    }

    body section.home_protab2_layout .protab2_top .nav-tabs>li,body section.home_protab2_layout .protab2_top .nav-tabs,body section.home_protab2_layout .protab2_top .page-title {
        width: 100%
    }
}

body section.home_protab2_layout .protab2_banner {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    -o-align-items: center;
    align-items: center
}

body section.home_protab2_layout .protab2_banner>div {
    width: 50%;
    padding: 0
}

@media (max-width: 600px) {
    body section.home_protab2_layout .protab2_banner>div {
        width: 100%
    }
}

body section.home_protab2_layout .protab2_banner>div>a {
    display: block
}

body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next {
    position: absolute;
    top: 50%;
    margin-top: -28px;
    width: 56px;
    height: 56px;
    line-height: 54px;
    text-align: center;
    border-width: 1px;
    border-style: solid;
    background-image: none !important;
    color: #222;
    border-color: #ebebeb;
    background-color: #fff;
    bottom: 100%;
    top: auto;
    right: 0;
    left: auto;
    border-right: 0;
    border-top-width: 0;
    border-bottom-width: 0;
    margin-bottom: 77px
}

body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev .fa,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next .fa {
    color: #222;
    font-size: 20px;
    line-height: 54px
}

@media (min-width: 1200px) {
    body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next {
        -ms-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        transition: all 500ms ease
    }

    body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev:hover,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next:hover {
        color: #fff;
        border-color: #a29e9e;
        background-color: #a29e9e
    }

    body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev:hover .fa,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next:hover .fa {
        color: #fff
    }
}

@media (max-width: 1199px) {
    body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next {
        margin-bottom: 64px;
        border-top-width: 1px
    }
}

@media (max-width: 991px) {
    body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev,body section.home_protab2_layout .protab2_item>.owl-controls .owl-next {
        top: 0;
        bottom: auto;
        margin-top: 0;
        margin-bottom: 0;
        border-bottom: 1px solid #ebebeb
    }
}

body section.home_protab2_layout .protab2_item>.owl-controls .owl-next {
    margin-right: 0
}

body section.home_protab2_layout .protab2_item>.owl-controls .owl-prev {
    margin-right: 56px
}

body section.home_protab2_layout .index-galimg.thumbs {
    border-top: 1px solid #ebebeb
}

body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-prev,body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-next {
    position: absolute;
    top: 50%;
    margin-top: -18.5px;
    width: 37px;
    height: 37px;
    line-height: 37px;
    text-align: center;
    border-width: 0px;
    border-style: solid;
    background-image: none !important;
    color: #222;
    border-color: #ebebeb;
    background-color: #fff;
    background-color: rgba(255,255,255,0.9)
}

body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-prev .fa,body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-next .fa {
    color: #222;
    font-size: 20px;
    line-height: 37px
}

@media (min-width: 1200px) {
    body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-prev,body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-next {
        -ms-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        transition: all 500ms ease
    }

    body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-prev:hover,body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-next:hover {
        color: #fff;
        border-color: #a29e9e;
        background-color: #a29e9e
    }

    body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-prev:hover .fa,body section.home_protab2_layout .index-galimg.thumbs .owl-controls .owl-next:hover .fa {
        color: #fff
    }
}

@media (min-width: 1200px) {
    body section.home_protab2_layout .index-galimg.thumbs .index-galimg-content .owl-controls {
        opacity: 0;
        filter: alpha(opacity=0);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=$var2)";
        -ms-transition: all 500ms ease;
        -webkit-transition: all 500ms ease;
        transition: all 500ms ease
    }

    body section.home_protab2_layout .index-galimg.thumbs .index-galimg-content:hover .owl-controls {
        opacity: 1;
        filter: alpha(opacity=100);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=$var2)"
    }
}

@media (max-width: 1199px) {
    body section.home_protab2_layout .protab2_top {
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-bottom: 15px
    }

    body section.home_protab2_layout .protab2_top .nav-tabs li {
        margin-left: 30px
    }

    body section.home_protab2_layout .protab2_top .page-title h2,body section.home_protab2_layout .protab2_top .page-title .h2 {
        border-right: 0
    }
}

@media (max-width: 1199px) and (max-width: 767px) {
    body section.home_protab2_layout .protab2_top {
        padding-bottom: 0px
    }
}

body section.home_banbot_layout {
    padding-bottom: 20px !important
}

@media (max-width: 1199px) {
    body section.home_banbot_layout {
        padding-bottom: 80px !important
    }
}

@media (max-width: 767px) {
    body section.home_banbot_layout {
        background-image: none
    }
}

body section.home_banbot_layout .home_banbot_inner {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    -o-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    background-color: #fff4f6
}

body section.home_banbot_layout .home_banbot_inner>div {
    width: 33.33333%;
    padding: 0
}

@media (max-width: 767px) {
    body section.home_banbot_layout .home_banbot_inner>div {
        width: 50%
    }
}

@media (max-width: 420px) {
    body section.home_banbot_layout .home_banbot_inner>div {
        width: 100%
    }
}

			</style>
			<div data-section-id="1490953257213" data-section-type="procol-section">
					<section class="home_procol_layout">
						<div class="home_procol_wrapper">
							<div class="container">
								<div class="row">
									<div class="home_procol_inner">
										<div class="home_procol_content">
											<div class="col-sm-6 procol_column">
												<div class="group-procol">
													<div class="group-inner">
														<div class="page-title">
															<h2>Yeni Ürünler</h2>
														</div>
														<div class="column_content style_1">
															<div class="column_item">
																
																
														   <?php $zzzzz = $ozy->query("select * from urunler where durum='1' and yeni='1' order by sira desc limit 3")->fetchAll(PDO::FETCH_ASSOC); 
                                                           foreach($zzzzz as $yeni){?>						
																
																<div class="column_product">
																	<div class="row-container ">
																		<div class="product home_product">
																			<div class="row-left">
																			<a href="urun/<?php echo $yeni['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $yeni['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $yeni['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														                    </a>
																				<?php if($yeni['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($yeni['fiyat'],$yeni['ifiyat']);?></span>
														</span>
														<?php } ?>
																			</div>
																				<div class="row-right">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $yeni['seo']; ?>"><?php echo $yeni['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($yeni['kdv'],$yeni['idurum'],$yeni['fiyat'],$yeni['ifiyat']);?>
											
																		</div>
																	</div>
																		</div>
																	</div>
																</div>
																
																	<?php } ?>
																
																
															</div>
															<div class="column_item">
																<div class="row-container ">
																	   <?php $zzzzz = $ozy->query("select * from urunler where durum='1' and yeni='1' order by sira desc limit 2,3")->fetchAll(PDO::FETCH_ASSOC); 
                                                           foreach($zzzzz as $yeni){?>						
																
																<div class="column_product">
																	<div class="row-container ">
																		<div class="product home_product">
																			<div class="row-left">
																			<a href="urun/<?php echo $yeni['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $yeni['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $yeni['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														                    </a>
																				<?php if($yeni['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($yeni['fiyat'],$yeni['ifiyat']);?></span>
														</span>
														<?php } ?>
																			</div>
																				<div class="row-right">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $yeni['seo']; ?>"><?php echo $yeni['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($yeni['kdv'],$yeni['idurum'],$yeni['fiyat'],$yeni['ifiyat']);?>
											
																		</div>
																	</div>
																		</div>
																	</div>
																</div>
																
																	<?php } ?>
																
																
																
																
																
																
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 procol_column">
												<div class="group-procol">
													<div class="group-inner">
														<div class="page-title">
															<h2>Çok Satan Ürünler</h2>
														</div>
														<div class="column_content style_2">
																<div class="column_item">
																<div class="row-container ">
																		   <?php $cccc = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by sira desc limit 3")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($cccc as $coksatan){?>						
																
																<div class="column_product">
																	<div class="row-container ">
																		<div class="product home_product">
																			<div class="row-left">
																			<a href="urun/<?php echo $coksatan['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														                    </a>
																				<?php if($coksatan['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($coksatan['fiyat'],$coksatan['ifiyat']);?></span>
														</span>
														<?php } ?>
																			</div>
																				<div class="row-right">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $coksatan['seo']; ?>"><?php echo $coksatan['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
											
																		</div>
																	</div>
																		</div>
																	</div>
																</div>
																
																	<?php } ?>
																
																</div>
															</div>
															<div class="column_item">
																		   <?php $cccc = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by sira desc limit 3,3")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($cccc as $coksatan){?>						
																
																<div class="column_product">
																	<div class="row-container ">
																		<div class="product home_product">
																			<div class="row-left">
																			<a href="urun/<?php echo $coksatan['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														                    </a>
																				<?php if($coksatan['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($coksatan['fiyat'],$coksatan['ifiyat']);?></span>
														</span>
														<?php } ?>
																			</div>
																				<div class="row-right">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $coksatan['seo']; ?>"><?php echo $coksatan['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
											
																		</div>
																	</div>
																		</div>
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
						</div>
					</section>
				</div>
			
		
		
		
		
		
		
		
			<div id="shopify-section-1493006706628" style="margin-top: 20px;" class="shopify-section index-section index-section-blog">
				<div data-section-id="1493006706628" data-section-type="blog-section">
					<section class="home_blog_layout">
						<div class="home_blog_wrapper">
							<div class="container">
								<div class="row">
									<div class="home_blog_inner">
										<div class="page-title">
											<h2>Blog</h2>
											<a href="bloglar/">Tümünü İncele</a>
										</div>
										<div class="home_blog_content">
										
										 <?php $bbbb = $ozy->query("select * from haberler where durum='1' order by id desc limit 4")->fetchAll(PDO::FETCH_ASSOC); 
                                         foreach($bbbb as $blog){?>  
											<div class="article-wrapper col-sm-3">
												<div class="article-inner">
													<div class="article-top">
														<a class="article-img" href="blog/<?php echo $blog['seo']; ?>">
															<img src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="Blog">
														</a>
													</div>
													<div class="article-bottom">
														<div class="article-name"><a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a></div>
														<ul class="article-info list-inline">
															<li class="article-date"><?php echo $blog['tarih']; ?></li>
															<li class="article-comment">
																<a href="blog/<?php echo $blog['seo']; ?>">
																	<span> - </span>
																	<i class="comment"><?php echo $blog['hit']; ?> okunma</i>
																</a>
															</li>
														</ul>
														<div class="article-content">
															<p><?php echo strip_tags(mb_substr($blog['aciklama'],0,70));?>....</p>
														</div>
													</div>
												</div>
											</div>
											
										<?php } ?>
								
											
											
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</main>
	</div>
	<style>
	.dropdown-menu {

  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,0) !important;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0) !important;
}
	</style>
    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 


   <!-- Main Container  -->
<div class="main-container container">
    <div id="content">
        <div class="content-top-w">
            
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 main-left">
                <div class="module col1 hidden-sm hidden-xs"></div>
            </div>    
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 main-right">
                <div class="slider-container row"> 
                                
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col2">
                        <div class="module sohomepage-slider ">
                            <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                               <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($slider as $demo){?>   
								
								
								<div class="yt-content-slide">
                                    <a href="<?php echo $demo['link'];?>">
									<img src="resimler/slider/<?php echo $demo['resim'];?>" alt="slider1" class="img-responsive"></a>
                                </div>
                           
						      <?php } ?>    
						   
						   
                            </div>
                            
                            <div class="loadeding"></div>
                        </div>
                        
                    </div>

                    
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col3">
                        <div class="module product-simple extra-layout1">
                            <h3 class="modtitle">
                                <span>Çok Satanlar</span>
                            </h3>
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider">
                                    <!-- Begin extraslider-inner -->
                                    <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                        <div class="item ">
										
	 <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by sira desc limit 4")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukzzz as $gfirsat){?>	
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                                            <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="<?php echo $gfirsat['seo']; ?>">
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="urun/<?php echo $gfirsat['seo']; ?>"><?php echo $gfirsat['adi']; ?> </a>
                                                    </div>
                                                    <div class="rating">
                                                  
											<?php echo $gfirsat['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $gfirsat['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
														
                                                    </div>
                                                    <div class="content_price price">
                                                      	<?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
									

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                       
					   	<?php } ?>	
					   
					   
					   
					   
					   
                                        </div>
										
										
										 <div class="item ">
										
	 <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by sira desc  limit 4,4")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukzzz as $gfirsat){?>	
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                                            <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="<?php echo $gfirsat['seo']; ?>">
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="urun/<?php echo $gfirsat['seo']; ?>"><?php echo $gfirsat['adi']; ?> </a>
                                                    </div>
                                                    <div class="rating">
                                                  
											<?php echo $gfirsat['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $gfirsat['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
														
                                                    </div>
                                                    <div class="content_price price">
                                                      	<?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
									

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                       
					   	<?php } ?>	
					   
					   
					   
					   
					   
                                        </div>
										
										
									
										
										
                                        
                                    </div>
                                    <!--End extraslider-inner -->
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>                                        
        </div>
        <div class="row content-main-w">
            
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 main-left">
                
                 <div class="module">
                    <div class="policy-w">
                       <ul class="block-infos">
                            <li class="info1">
                              <div class="inner">
                              <i class="fa fa-truck"></i>
                              <div class="info-cont">
                              <a><?php echo $system['ucretsizkargo'];?> TL VE</a>
                              <p>ÜZERİ ÜCRETSİZ KARGO</p>
                              </div>
                              </div>
                            </li>
                            <li class="info2">
                              <div class="inner">
                              <i class="fa fa-shield"></i>
                              <div class="info-cont">
                              <a>256BİT ŞİFRELİ</a>
                              <p>GÜVENLİ ÖDEME SİSTEMİ</p>
                              </div>
                              </div>
                            </li>
                            <li class="info3">
                              <div class="inner">
                              <i class="fa fa-life-ring"></i>
                              <div class="info-cont">
                              <a>7/24 KESİNTİSİZ</a>
                              <p>CANLI DESTEK</p>
                              </div>
                              </div>
                            </li>
                            <li class="info4">
                              <div class="inner">
                              <i class="fa fa-money"></i>
                              <div class="info-cont">
                              <a>14 GÜN İÇİNDE</a>
                              <p>KOLAY İADE & DEĞİŞİM</p>
                              </div>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="module product-simple extra-layout1">
                    <h3 class="modtitle">
                        <span>POPÜLER ÜRÜNLER</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_1" class="so-extraslider">
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                         <div class="item ">
										
	 <?php $aaaa = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($aaaa as $populer){?>	
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="urun/<?php echo $populer['seo']; ?>">
                                                            <img src="resimler/urunler/<?php echo $populer['resim']; ?>" alt="<?php echo $populer['seo']; ?>">
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="urun/<?php echo $populer['seo']; ?>"><?php echo $populer['adi']; ?> </a>
                                                    </div>
                                                    <div class="rating">
                                                  
											<?php echo $populer['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $populer['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $populer['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $populer['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $populer['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
														
                                                    </div>
                                                    <div class="content_price price">
                                                      	<?php echo urunfiyatbelirle($populer['kdv'],$populer['idurum'],$populer['fiyat'],$populer['ifiyat']);?>
									

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                       
					   	<?php } ?>	
					   
					   
					   
					   
					   
                                        </div>
										
										
										 <div class="item ">
										
	 <?php $aaaa = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by sira desc  limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($aaaa as $populer){?>	
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="urun/<?php echo $populer['seo']; ?>">
                                                            <img src="resimler/urunler/<?php echo $populer['resim']; ?>" alt="<?php echo $populer['seo']; ?>">
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="urun/<?php echo $populer['seo']; ?>"><?php echo $populer['adi']; ?> </a>
                                                    </div>
                                                    <div class="rating">
                                                  
											<?php echo $populer['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $populer['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $populer['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $populer['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $populer['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
														
                                                    </div>
                                                    <div class="content_price price">
                                                      	<?php echo urunfiyatbelirle($populer['kdv'],$populer['idurum'],$populer['fiyat'],$populer['ifiyat']);?>
									

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                       
					   	<?php } ?>	
					   
					   
					   
					   
					   
                                        </div>
										
										 
							   
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

               

                <div class="module extra">
                    <h3 class="modtitle">
                        <span>YENİ ÜRÜNLER</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_1" class="so-extraslider">
                            <!-- Begin extraslider-inner -->
                            <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
      <?php $bbb = $ozy->query("select * from urunler where durum='1' and yeni='1' order by rand() limit 4")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($bbb as $yeni){?>       



							   <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                
                                                <div class="product-image-container second_img">
                                                    <a href="urun/<?php echo $yeni['seo']; ?>">
                                                        <img src="resimler/urunler/<?php echo $yeni['resim']; ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="resimler/urunler/<?php echo $yeni['resim']; ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="btn-button quickview quickview_handler visible-lg" href="urun/<?php echo $yeni['seo']; ?>"><i class="fa fa-eye"></i>
												  <span>Detay</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <a href="urun/<?php echo $yeni['seo']; ?>" class="addToCart" title="Sepete Ekle">
                                                        <span>Sepete Ekle </span>   
                                                    </a>
                                                    <button  onclick="javascript:location.href='?favoriekle=<?php echo $yeni['id']; ?>'" type="button" class="wishlist btn-button" title="Favorilerine Ekle"><i class="fa fa-heart-o"></i><span>Favorilerine Ekle</span>
                                                    </button>
                                                    <button  onclick="javascript:location.href='?karsilastir=<?php echo $yeni['id']; ?>'" type="button" class="compare btn-button" title="Karşılaştır"><i class="fa fa-retweet"></i><span>Karşılaştır</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="rating">    
											<?php echo $yeni['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $yeni['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $yeni['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $yeni['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $yeni['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
												
                                                    </div>
                                                    <h4><a href="urun/<?php echo $yeni['seo']; ?>"><?php echo $yeni['adi']; ?></a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                <?php echo urunfiyatbelirle($yeni['kdv'],$yeni['idurum'],$yeni['fiyat'],$yeni['ifiyat']);?>

                                                </p>
                                            </div>

                                            
                                        </div>
                                    </div>      
                                </div>

                             
							  	<?php } ?>	
							 
							 
							 
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

                <div class="module so-latest-blog blog-sidebar">

                    <h3 class="modtitle"><span>BLOG & DUYURULAR</span></h3>
                    <div class="modcontent clearfix">

                        <div class="so-blog-external buttom-type1 button-type1">
                            <div class="blog-external-simple">
							
	<?php $hh = $ozy->query("select * from haberler where durum='1'  order by sira desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($hh as $blog){?>	
                                <div class="cat-wrap">
                                    <div class="media">

                                        <div class="item item-1">
                                            <div class="media-left">
                                                <a href="blog/<?php echo $blog['seo']; ?>">
                                                <img src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="<?php echo $blog['seo']; ?>" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                <a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a>
                                                </h4>
                                                <div class="media-content">
                                                    <div class="media-date-added"><i class="fa fa-calendar"></i> <?php echo $blog['tarih']; ?></div>         
                                                    <div class="media-subcontent">
                                                    <span class="media-comment"><i class="fa fa-comments"></i><?php echo $blog['hit']; ?>  okunma</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                           	<?php } ?>	
	<?php $hh = $ozy->query("select * from haberler where durum='1'  order by sira desc limit 1,1")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($hh as $blog){?>
							
                                <div class="cat-wrap">
                                    <div class="media">

                                        <div class="item item-2">
                                            <div class="media-left">
                                                <a href="blog/<?php echo $blog['seo']; ?>">
                                                <img src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="<?php echo $blog['seo']; ?>" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                <a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a>
                                                </h4>
                                                <div class="media-content">
                                                    <div class="media-date-added"><i class="fa fa-calendar"></i> <?php echo $blog['tarih']; ?></div>         
                                                    <div class="media-subcontent">
                                                    <span class="media-comment"><i class="fa fa-comments"></i><?php echo $blog['hit']; ?>  okunma</span>
                                                    </div>
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
                
                <div class="module testimonials">
                    <h3 class="modtitle"><span>SON YORUMLAR</span></h3>
                    <div class="slider-testimonials">
                        <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-hoverpause="yes">
                            
							<?php $grzsz = $ozy->query("select * from tumyorumlar where durum='1' and konu='urunler' order by rand() limit 4")->fetchAll(PDO::FETCH_ASSOC); 
                                                        foreach($grzsz as $yorum){
														$urunidimiz = $yorum['sayfaid'];
														$kargomnerede = $ozy->query("select * from urunler where durum='1' and id='$urunidimiz'")->fetch(PDO::FETCH_ASSOC);
														
                            ?>
							
							<div class="item">
                                <div class="img">
								<a href="urun/<?php echo $kargomnerede['seo']; ?>">
								<img style="width: 100px;" src="resimler/urunler/<?php echo $kargomnerede['resim']; ?>" alt="Image">
								</a>
								</div>
                                <div class="name"><?php echo $yorum['adi']; ?></div>
                                <p> <?php echo $yorum['yorum']; ?></p>          
                            </div>
                          	<?php } ?>	
						  
						  
						  
                        </div>
                    </div>
                </div>
                

               
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 main-right">
                
      
             
             <div class="swiper mySwiper">
                <div class="swiper-wrapper">
			<?php $kk = $ozy->query("select * from kampanyalar where durum='1' order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($kk as $kampi) {?>
                  <div class="swiper-slide">
				  <a href="<?php echo $kampi["link"] == "0" ? "kampanya/".$kampi["seo"]."" : "".$kampi["link"].""; ?>">
				  <img class="gorsel" src="resimler/kampanyalar/<?php echo $kampi['resim']; ?>">
				  </a>
				  </div>
            <?php } ?>   



			   </div>
               </div>
             

                <!-- Deals -->
                <div class="module deals-layout1">
                    <div class="head-title">
                        <div class="modtitle">
                            <span>GÜNÜN FIRSAT ÜRÜNLERİ</span>
                            <div class="cslider-item-timer">
                              <div class="product_time_maxprice">
                                
                              
                              </div>
                            </div>
                              
                            
                        </div>    
                    </div>
                    <div class="modcontent">
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6" data-items_column0="5" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

      <?php $oke = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($oke as $firsat){?>








                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
											    <?php if($firsat['idurum']=='1'){?>
                                                <div class="box-label">
                                                    <span class="label-product label-sale"> -% <?php echo yuzdeHesaplama($firsat['fiyat'],$firsat['ifiyat']);?></span>
                                                </div>
												<?php } ?>  
												 <?php if($firsat['yeni']=='1'){?>
												<div class="box-label">
                                                        <span class="label-product label-new">Yeni</span>
                                               </div>
												<?php } ?>
												
                                                <div class="product-image-container second_img">
                                                    <a href="urun/<?php echo $firsat['seo']; ?>">
                                                        <img src="resimler/urunler/<?php echo $firsat['resim']; ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="resimler/urunler/<?php echo $firsat['resim']; ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" 
												  href="urun/<?php echo $firsat['seo']; ?>"><i class="fa fa-eye"></i><span>Sepete Ekle</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <a href="urun/<?php echo $firsat['seo']; ?>" class="addToCart">
                                                        <span>Sepete Ekle</span>   
                                                    </a>
                                                    <button  onclick="javascript:location.href='?favoriekle=<?php echo $firsat['id']; ?>'" type="button" class="wishlist btn-button" title="Favorilerine Ekle"><i class="fa fa-heart-o"></i><span>Favorilerine Ekle</span>
                                                    </button>
                                                    <button  onclick="javascript:location.href='?karsilastir=<?php echo $firsat['id']; ?>'" type="button" class="compare btn-button" title="Karşılaştır"><i class="fa fa-retweet"></i><span>Karşılaştır</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">   
											<?php echo $firsat['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $firsat['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $firsat['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $firsat['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $firsat['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
												
														</div>
                                                        <span class="rating-num">( <?php 
								      $sayfaid = $firsat['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum )</span>
                                                    </div>
                                                    <h4><a href="urun/<?php echo $firsat['seo']; ?>" title="<?php echo $firsat['seo']; ?>"><?php echo $firsat['adi']; ?></a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                   <?php echo urunfiyatbelirle($firsat['kdv'],$firsat['idurum'],$firsat['fiyat'],$firsat['ifiyat']);?>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="77%" data-toggle='tooltip' style="width: 77%"></span>
                                                </div>                          
                                                <p class="a2">Kalan: <b><?php echo $firsat['stok']; ?> Adet</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                               
							   
							   
							   
 <?php }?> 	












                            </div>
                        </div>
                      </div>
                </div>
                <!-- End Deals -->

                <!-- Banners -->
                <div class="banners3 banners">
                    <div class="item1">
                        <a href="<?php echo $tema['t4']; ?>">
						<img src="resimler/temaayarlari/<?php echo $tema['t1']; ?>" alt="image"></a>
                    </div>
                    <div class="item1">
                        <a href="<?php echo $tema['t5']; ?>">
						<img src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="image"></a>
                    </div>
                    <div class="item1">
                        <a href="<?php echo $tema['t6']; ?>">
						<img src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" alt="image"></a>
                    </div>
                </div>
                <!-- end Banners -->

           <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 
  




                <!-- Category Slider 1 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div style="background: <?php echo $kategorimx['renk']; ?> !important;" class="page-title-categoryslider"><?php echo $kategorimx['adi']; ?>
							
							<a style="float: right;color: white;font-size: 11px;" href="kategori/<?php echo $kategorimx['seo']; ?>">Tümünü Gör</a>
							
							</div>
                          
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="kategori/<?php echo $kategorimx['seo']; ?>">
                                  <img class="categories-loadimage" alt="<?php echo $kategorimx['adi']; ?>" src="resimler/kategoriler/<?php echo $kategorimx['yanresim']; ?>">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                           <?php 
							$katimiz = $kategorimx['id']; 
							$ukk = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
                           
							foreach($ukk as $katurunler){
								?>



                              
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
											    <?php if($katurunler['idurum']=='1'){?>
                                                <div class="box-label">
                                                    <span class="label-product label-sale"> -% <?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
                                                </div>
												<?php } ?>  
													 <?php if($katurunler['yeni']=='1'){?>
												<div class="box-label">
                                                        <span class="label-product label-new">Yeni</span>
                                               </div>
												<?php } ?>
												
                                                <div class="product-image-container second_img">
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>">
                                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" 
												  href="urun/<?php echo $katurunler['seo']; ?>"><i class="fa fa-eye"></i><span>Sepete Ekle</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="addToCart">
                                                        <span>Sepete Ekle</span>   
                                                    </a>
                                                    <button  onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'" type="button" class="wishlist btn-button" title="Favorilerine Ekle"><i class="fa fa-heart-o"></i><span>Favorilerine Ekle</span>
                                                    </button>
                                                    <button  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'" type="button" class="compare btn-button" title="Karşılaştır"><i class="fa fa-retweet"></i><span>Karşılaştır</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">   
											<?php echo $katurunler['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $katurunler['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
												
														</div>
                                                        <span class="rating-num">( <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum )</span>
                                                    </div>
                                                    <h4><a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                   <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                                </p>
                                            </div>

                                       
                                        </div>
                                    </div>      
                                </div>

                               
							   
	<?php }?> 


                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Category Slider 1 -->

	<?php }?> 







            </div>
            
        </div>
        
    </div>
</div>
<!-- //Main Container -->
   
   
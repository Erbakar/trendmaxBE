    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 


   
<div id="content">
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-9">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                       <div class="swiper-viewport">
                                          <div id="slideshow0" class="swiper-container">
                                             <div class="swiper-wrapper">
											 
											  <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($slider as $demo){?> 
                                                <div class="swiper-slide text-center">
                                                   <a href="<?php echo $demo['link'];?>"> <img src="resimler/slider/<?php echo $demo['resim'];?>" alt="Ücretsiz Kargo Fırsatı" class="img-responsive">
                                                 </a>
                                                </div>
                                               
                                              <?php } ?>    
                                             </div>
                                          </div>
                                          <div class="swiper-pagination slideshow0"></div>
                                          <div class="swiper-pager">
                                             <div class="swiper-button-next"></div>
                                             <div class="swiper-button-prev"></div>
                                          </div>
                                       </div>
                                       <script type="text/javascript"><!--
                                          $('#slideshow0').swiper({
                                          	mode: 'horizontal',
                                          	slidesPerView: 1,
                                          	pagination: false,
                                          	paginationClickable:false,
                                          	nextButton: '.swiper-button-next',
                                              prevButton: '.swiper-button-prev',
                                              spaceBetween: 30,
                                          	autoplay: 2500,
                                              autoplayDisableOnInteraction: true,
                                          	loop: true
                                          });
                                          -->
                                       </script>
                                    </div>
                                 </div>
                              </div>
                              <div class="main-col col-sm-12 col-md-3">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                       <div class="row">
                                          <div id="superdeal" class="owl-carousel" style="margin-top:-10px;">
                                            
											 <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukzzz as $gfirsat){?>		
									
                                             <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div style="background:none;" class="product-layout">
                                                   <div class="product-thumb transition">
                                                      <div class="image" style="min-height: 310px !important;" >
                                                         <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="<?php echo $gfirsat['adi']; ?>" title="<?php echo $gfirsat['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="<?php echo $gfirsat['adi']; ?>">
                                                         </a>
														 <?php if($gfirsat['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
														 
                                                          <div class="firsat-kose"><i class="fa fa-bullhorn" aria-hidden="true"></i> GÜNÜN FIRSATI</div>
                                                      
                                                      </div>
                                                      <div class="caption text-center animation-element slide-right">
                                                         <h4><a href="urun/<?php echo $gfirsat['seo']; ?>"><?php echo $gfirsat['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                      <div style="clear:both"></div>
                                                   </div>
                                                </div>
                                             </div>
											 
											  <?php }?> 		
								
											
                                          </div>
                                          <div style="clear:both"></div>
                                       </div>
                                       <script type="text/javascript"><!--
                                           $('#superdeal').owlCarousel({
                                          	items: 1,
                                          	autoPlay: true,
                                          	navigation: false,
                                          	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                                          	pagination: false
                                          });
                                          -->
                                       </script>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
					 
					<?php include('hikaye.php');?>
					 
					 
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-12">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                       <div style="margin-bottom:15px;" class="text-center">
                                          <ul class="nav nav-tabs" role="tablist">
                                             <li class="active">
                                                <a href="#tab-yeni" data-toggle="tab" class="selected"> Yeni Ürünler</a>
                                             </li>
                                             <li>
                                                <a href="#tab-sizin" data-toggle="tab"> Çok Satan Ürünler</a>
                                             </li>
                                             <li>
                                                <a href="#tab-populer" data-toggle="tab">
                                                Popüler Ürünler</a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="tab-content margins">
                                          <div id="tab-yeni" class="tab-pane active">
                                             <div>
                                                <div id="tab-yenii" style="background:none;margin-bottom:10px;" class="slideshow owl-carousel">
                                                   
												   
												   
	  <?php $cokS = $ozy->query("select * from urunler where durum='1' and yeni='1' order by rand() limit 20")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($cokS as $cok){?>		
		 
												   
												   
												   <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $cok['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $cok['resim']; ?>" alt="<?php echo $cok['adi']; ?>" title="<?php echo $cok['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $cok['resim']; ?>" alt="<?php echo $cok['adi']; ?>">
                                                         </a>
                                                         				 <?php if($cok['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($cok['fiyat'],$cok['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $cok['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $cok['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $cok['seo']; ?>"><?php echo $cok['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($cok['kdv'],$cok['idurum'],$cok['fiyat'],$cok['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                         </div>
                                                      </div>
                                                   </div>
												   
												    <?php } ?> 
												   
												   
												   
												   
                                                </div>
                                             </div>
                                          </div>
                                          <script type="text/javascript"><!--
                                             $('#tab-yenii').owlCarousel({
                                             	items: 5,
                                             		itemsMobile:[479,2],
                                             	itemsDesktopSmall:[979,4],
                                             	itemsTablet:[768,2],
                                             	autoPlay: true,
                                             	navigation: false,
                                             	navigationText: ['<i class="fa fa-chevron-left fa-5x sol"></i>', '<i class="fa fa-chevron-right fa-5x sag"></i>'],
                                             	pagination: false
                                             });
                                             -->
                                          </script>
                                          <div id="tab-sizin" class="tab-pane">
                                             <div class=" ">
                                                <div id="tab-sizinn" style="background:none;" class="slideshow owl-carousel">
                                                <?php $cokzSz = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by rand() limit 20")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($cokzSz as $cokz){?>		
		 
												   
												   
												   <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $cokz['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $cokz['resim']; ?>" alt="<?php echo $cokz['adi']; ?>" title="<?php echo $cokz['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $cokz['resim']; ?>" alt="<?php echo $cokz['adi']; ?>">
                                                         </a>
                                                         				 <?php if($cokz['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($cokz['fiyat'],$cokz['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $cokz['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $cokz['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $cokz['seo']; ?>"><?php echo $cokz['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($cokz['kdv'],$cokz['idurum'],$cokz['fiyat'],$cokz['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                         </div>
                                                      </div>
                                                   </div>
												   
												    <?php } ?> 
                                                </div>
                                             </div>
                                             <div style="clear:both"></div>
                                          </div>
                                          <script type="text/javascript"><!--
                                             $('#tab-sizinn').owlCarousel({
                                             	items: 5,
                                             		itemsMobile:[479,2],
                                             	itemsDesktopSmall:[979,4],
                                             	itemsTablet:[768,2],
                                             	autoPlay: true,
                                             	navigation: false,
                                             	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                                             	pagination: false
                                             });
                                             -->
                                          </script>
                                          <div id="tab-populer" class="tab-pane">
                                             <div class="row">
                                                <div id="tab-populerr" style="background:none" class="slideshow owl-carousel">
                                          <?php $popSzz = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 20")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($popSzz as $pop){?>		
		 
												   
												   
												   <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $pop['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $pop['resim']; ?>" alt="<?php echo $pop['adi']; ?>" title="<?php echo $pop['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $pop['resim']; ?>" alt="<?php echo $pop['adi']; ?>">
                                                         </a>
                                                         				 <?php if($pop['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($pop['fiyat'],$pop['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $pop['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $pop['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $pop['seo']; ?>"><?php echo $pop['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($pop['kdv'],$pop['idurum'],$pop['fiyat'],$pop['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                         </div>
                                                      </div>
                                                   </div>
												   
												    <?php } ?> 
												
                                                </div>
                                             </div>
                                          </div>
                                          <script type="text/javascript"><!--
                                             $('#tab-populerr').owlCarousel({
                                             	items: 5,
                                             		itemsMobile:[479,2],
                                             	itemsDesktopSmall:[979,4],
                                             	itemsTablet:[768,2],
                                             	autoPlay: true,
                                             	navigation: false,
                                             	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                                             	pagination: false
                                             });
                                             -->
                                          </script>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-6">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                              <div class="main-col col-sm-12 col-md-6">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-12">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
					 
					 
					 
		 <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 		 
					 
					 
					 
					 
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-12">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                       <div class="urunbaslik">
                                          <a href="kategori/<?php echo $kategorimx['seo']; ?>"><b><?php echo $kategorimx['adi']; ?></b></a>
                                          <div class="clear"></div>
                                       </div>
                                       <div class="row1">
                                          <div id="kategori<?php echo $kategorimx['id']; ?>" style="background:none;margin-bottom:15px;" class="slideshow owl-carousel">
                            <?php 
							$katimiz = $kategorimx['id']; 
							$ukk = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 9")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukk as $katurun){
							?> 
                                           
									   <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $katurun['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $katurun['resim']; ?>" alt="<?php echo $katurun['adi']; ?>" title="<?php echo $katurun['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $katurun['resim']; ?>" alt="<?php echo $katurun['adi']; ?>">
                                                         </a>
                                                         				 <?php if($katurun['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($katurun['fiyat'],$katurun['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $katurun['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $katurun['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $katurun['seo']; ?>"><?php echo $katurun['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($katurun['kdv'],$katurun['idurum'],$katurun['fiyat'],$katurun['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                         </div>
                                                      </div>
                                                   </div>
												   
												    <?php } ?> 
													   
										   
										   
                                          </div>
                                       </div>
                                       <script type="text/javascript"><!--
                                          $('#kategori<?php echo $kategorimx['id']; ?>').owlCarousel({
                                          	items: 5,
                                          			itemsMobile:[479,2],
                                          	itemsDesktopSmall:[979,4],
                                          	itemsTablet:[768,2],
                                          	autoPlay: true,
                                          	navigation: false,
                                          navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                                          	pagination: false
                                          });
                                          -->
                                       </script>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
					 
					   <?php } ?> 
					 
					 
					 
					 
					
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-12">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-12">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                       <div class="urunbaslik"><b>Sizin için Seçtiklerimiz</b></div>
                                       <div class="row">
                                          <div id="anaurunler" class="slideshow owl-carousel">
                                    
										   
												   
	  <?php $katim = $ozy->query("select * from urunler where durum='1' and agoster='1' order by rand() limit 20")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($katim as $anaurun){?>		
		 
												   
												   
												   <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $anaurun['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $anaurun['resim']; ?>" alt="<?php echo $anaurun['adi']; ?>" title="<?php echo $anaurun['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $anaurun['resim']; ?>" alt="<?php echo $anaurun['adi']; ?>">
                                                         </a>
                                                         				 <?php if($anaurun['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($anaurun['fiyat'],$anaurun['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $anaurun['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $anaurun['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $anaurun['seo']; ?>"><?php echo $anaurun['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($anaurun['kdv'],$anaurun['idurum'],$anaurun['fiyat'],$anaurun['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                         </div>
                                                      </div>
                                                   </div>
												   
												    <?php } ?> 
												
									
									
                                          </div>
                                       </div>
                                       <script type="text/javascript"><!--
                                          $('#anaurunler').owlCarousel({
                                          	items: 5,
                                          			itemsMobile:[479,2],
                                          	itemsDesktopSmall:[979,4],
                                          	itemsTablet:[768,2],
                                          	autoPlay: true,
                                          	navigation: false,
                                          	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                                          	pagination: false
                                          });
                                          -->
                                       </script>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-6">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                              <div class="main-col col-sm-12 col-md-6">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="main-row ">
                        <div class="container">
                           <div class="row">
                              <div class="main-col col-sm-12 col-md-12">
                                 <div class="row sub-row">
                                    <div class="sub-col col-sm-12 col-md-12">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                   
                  </div>
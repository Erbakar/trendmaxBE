    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 


   





    <div class="section-3349">
        <div class="div-block-475-slider">
            <div class="w-row">
                <div class="column-110 w-col w-col-9 w-col-stack">
                    <div class="div-block-481">
                        
                        <div data-delay="4000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider-4 w-slider">
                            <div class="w-slider-mask">
            <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($slider as $demo){?> 
                                <div class="slide w-slide">
                                    <div>
                                        <a href="<?php echo $demo['link'];?>">
                                            <img src="resimler/slider/<?php echo $demo['resim'];?>" alt="Slider 1" loading="lazy"></a>
                                    </div>
                                </div>
                                
            <?php } ?>              
                                
                             
                             
                                
                            </div>
                            <div class="left-arrow-3 w-slider-arrow-left">
                                <div class="w-icon-slider-left"></div>
                            </div>
                            <div class="right-arrow-3 w-slider-arrow-right">
                                <div class="w-icon-slider-right"></div>
                            </div>
                            <div class="slide-nav-3 w-slider-nav w-round"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="column-111 w-col w-col-3 w-col-stack">
                    <div class="div-block-480">
                        <div class="div-block-486">
                            <div class="text-block-118">GÜNÜN FIRSATI</div>
                        </div>
                    </div>

                    <div>
                        <div data-delay="4000" data-animation="slide" data-autoplay="1" data-easing="ease-in" data-duration="500" data-infinite="1" class="slider-6 w-slider">
                            <div class="mask w-slider-mask">
                                
	 <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukzzz as $gfirsat){?>		
								
                                <div class="slide-2 w-slide vboyut">
                                    <div class="div-block-box-firsat">
                                        
                                        <div class="image-wrapper-box" style="background-color:transparent">
                                            <a href="urun/<?php echo $gfirsat['seo']; ?>" class="w-inline-block">
                                            <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" loading="lazy" alt="<?php echo $gfirsat['adi']; ?>" class="image-wrapper">
                                            <div class="quick-wrapper">
                                                
                                                    <div class="quick-btn"></div>
                                                
                                            </div>
                                            </a>
                                        </div>
                                        
                                        <div class="text-block-121" style="font-size:13px; margin-top:5px"><?php echo $gfirsat['adi']; ?></div>
                                        <div>
                                          
											
											
					<div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                        
                      </div>
											
											
											
											
                                        </div>
                                        <div class="div-block-4461292304">
                                            <div class="columns-29 w-row">
                                                <div class="column-135 w-col w-col-4 w-col-tiny-4">
                                                    <div>
                                                        
                                                        <div class="FavOnay734">
                                                            <a href="?karsilastir=<?php echo $gfirsat['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                                                            <a href="?favoriekle=<?php echo $gfirsat['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                                        
														</div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="w-clearfix w-col w-col-8 w-col-tiny-8">
                                                    
													
													<?php if($gfirsat['stok']>='1'){?>
                                                    <a href="urun/<?php echo $gfirsat['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                                                </div>
                                                
                                            </div>
                                        </div>

             
                                        
                                    </div>
                                </div>
								
						 <?php }?> 		
								
                        
						
						
                                
                            </div>
                            <div class="left-arrow-5 w-slider-arrow-left">
                                <div class="icon-12 w-icon-slider-left"></div>
                            </div>
                            <div class="right-arrow-5 w-slider-arrow-right">
                                <div class="icon-11 w-icon-slider-right"></div>
                            </div>
                            <div class="slide-nav-4 w-slider-nav w-round"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="section-reklam-1">



    <div class="div-block-4461292275">
	

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



	
	</div>
	
	
</div>


<div class="section-2-el">



    <div class="div-block-4461292275">
	

 <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
 foreach($katiz as $kategorimx){?>  
  
<div class="w-col w-col-6 w-col-tiny-6" style="margin-bottom:5px;padding-left: 3px;padding-right: 3px;">
<a href="kategori/<?php echo $kategorimx['seo']; ?>">
<img src="resimler/kategoriler/<?php echo $kategorimx['yanresim']; ?>"></a>
</div>
<?php } ?>	

	
	</div>
	
	
</div>








<div class="section-vitrin">
    <div class="div-block-493">
      <div class="w-row">
        <div class="column-98 w-col w-col-7 w-col-small-7">
          <div>
            <h1 class="heading">Popüler & Trend Ürünler</h1>
          </div>
        </div>
        <div class="column-97 w-clearfix w-col w-col-5 w-col-small-5">
          <div class="div-block-495">
            <a  class="button-13-more w-button">AYIN EN POPÜLER ÜRÜNLERİ !</a>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-stroke"></div>
    <div class="div-block-2-el">
      <div class="columns-31 w-row">
        
		
	 <?php $uk = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($uk as $anaurunler){?>		
		
		
		
          <div class="column-128 w-col w-col-3 w-col-medium-3 w-col-small-6 w-col-tiny-6">
              <div class="div-block-box-new">
                  <a href="urun/<?php echo $anaurunler['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" loading="lazy"  alt="<?php echo $anaurunler['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $anaurunler['adi']; ?></div>
                  <div>
                   	<div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($anaurunler['kdv'],$anaurunler['idurum'],$anaurunler['fiyat'],$anaurunler['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($anaurunler['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($anaurunler['fiyat'],$anaurunler['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                               <a href="?karsilastir=<?php echo $anaurunler['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favoriekle=<?php echo $anaurunler['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                                        
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($anaurunler['stok']>='1'){?>
                                                    <a href="urun/<?php echo $anaurunler['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                                <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                  
              </div>
          </div>
        
		
		
		
		
	
	      <?php }?> 
	
	
	
	

      </div>
      
    </div>
  </div>

<div class="section-2-el">
<div class="div-block-4461292274">
  <div class="w-row">
    
    <div class="w-col w-col-4">
      <div class="div-block-4461292276">
	  <a hhref="<?php echo $tema['t4']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t1']; ?>" alt="Banner" loading="lazy"></a></div>
    </div>
    
    <div class="w-col w-col-4">
      <div class="div-block-4461292276">
	  <a href="<?php echo $tema['t5']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="Banner" loading="lazy"></a></div>
    </div>
	
	<div class="w-col w-col-4">
      <div class="div-block-4461292276">
	  <a href="<?php echo $tema['t6']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" alt="Banner" loading="lazy"></a></div>
    </div>
    
  </div>
</div>
</div>




<div class="section-reklam2">
    <div class="div-block-493">
      <div class="w-row">
        <div class="column-98 w-col w-col-7 w-col-small-7">
          <div>
            <h1 class="heading">Yeni Ürünler</h1>
          </div>
        </div>
        <div class="column-97 w-clearfix w-col w-col-5 w-col-small-5">
          <div class="div-block-495">
            <a  class="button-13-more w-button">BU ÜRÜNLER YEPYENİ !</a>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-stroke"></div>
    <div class="div-block-2-el">
      <div class="columns-31 w-row">
        
		
	 <?php $yepyeni = $ozy->query("select * from urunler where durum='1' and yeni='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($yepyeni as $yeni){?>		
		
		
		
          <div class="column-128 w-col w-col-3 w-col-medium-3 w-col-small-6 w-col-tiny-6">
              <div class="div-block-box-new">
                  <a href="urun/<?php echo $yeni['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $yeni['resim']; ?>" loading="lazy"  alt="<?php echo $yeni['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $yeni['adi']; ?></div>
                  <div>
                      	<div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($yeni['kdv'],$yeni['idurum'],$yeni['fiyat'],$yeni['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($yeni['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($yeni['fiyat'],$yeni['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                               <a href="?karsilastir=<?php echo $yeni['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favoriekle=<?php echo $yeni['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                 
							   
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($yeni['stok']>='1'){?>
                                                    <a href="urun/<?php echo $yeni['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                             <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                  
              </div>
          </div>
        
		
		
		
		
	
	      <?php }?> 
	
	
	
	

      </div>
      
    </div>
  </div>




<div class="section-2-el mbosluk">
    <div class="div-block-493">
      <div class="w-row">
        <div class="column-98 w-col w-col-12 w-col-small-12">
          <div>
            <h1 class="heading">Özel Seçim Ürünler</h1>
          </div>
        </div>
        <div class="column-97 w-clearfix w-col w-col-5 w-col-small-5">

        </div>
      </div>
    </div>
    <div class="div-block-stroke"></div>
    <div class="div-block-one-cikanlar">
      <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
        <div class="tabs-menu w-tab-menu">
          <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
            <div class="text-block-135">ÇOK SATAN ÜRÜNLER</div>
          </a>
          <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
            <div>SİZİN İÇİN SEÇTİKLERİMİZ</div>
          </a>
       
        </div>
        <div class="tabs-content w-tab-content">
            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                <div>
                    <div class="columns-33 w-row">
                        
                     
                    	 <?php $cok = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($cok as $coksatan){?>		
		
		
		
             <div class="w-col w-col-3 w-col-medium-4 w-col-small-4 w-col-tiny-6">
              <div class="div-block-box-new">
                  <a href="urun/<?php echo $coksatan['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $coksatan['resim']; ?>" loading="lazy"  alt="<?php echo $coksatan['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $coksatan['adi']; ?></div>
                  <div>
                      	<div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($coksatan['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($coksatan['fiyat'],$coksatan['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                             
							   <a href="?karsilastir=<?php echo $coksatan['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favoriekle=<?php echo $coksatan['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                 
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($coksatan['stok']>='1'){?>
                                                    <a href="urun/<?php echo $coksatan['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                                <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                  
              </div>
          </div>
        
		
		
		
		
	
	      <?php }?> 
						
						
						
                    </div>
                    
                </div>
				
				
				
            </div>
			
			
			
			
          <div data-w-tab="Tab 2" class="w-tab-pane">
                <div>
                    <div class="columns-33 w-row">

                       
	 <?php $ana = $ozy->query("select * from urunler where durum='1' and agoster='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ana as $agosterurun){?>		
		
		
		
             <div class="w-col w-col-3 w-col-medium-4 w-col-small-4 w-col-tiny-6">
              <div class="div-block-box-new">
                  <a href="urun/<?php echo $agosterurun['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $agosterurun['resim']; ?>" loading="lazy"  alt="<?php echo $agosterurun['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $agosterurun['adi']; ?></div>
                  <div>
                     <div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($agosterurun['kdv'],$agosterurun['idurum'],$agosterurun['fiyat'],$agosterurun['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($agosterurun['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($agosterurun['fiyat'],$agosterurun['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                              
							   <a href="?karsilastir=<?php echo $agosterurun['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favoriekle=<?php echo $agosterurun['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                 
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($agosterurun['stok']>='1'){?>
                                                    <a href="urun/<?php echo $agosterurun['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                                <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                  
              </div>
          </div>
        
		
		
		
		
	
	      <?php }?> 





					   

                    </div>
                    
					
					
					
                </div>            
          </div>
       
	   
	   
	   
	   
	   
	   
        </div>
      </div>
    </div>
  </div>

 <div class="section-hizmetler">
        <div class="div-block-hizmetler">
            <div class="div-block-4461292279">
             <?php echo $tema['t29'];?>
            </div>
            
        </div>
    </div>
    <div class="section-hizmetler">
    <div class="div-block-hizmetler">
        <div class="columns-28 w-row">
            <div class="column-106 w-col w-col-3 w-col-medium-3 w-col-small-6">
                <div class="div-block-4461292291">
                    <div class="tab-block-2-copy">
                        <img width="60" src="<?php echo $sitetemasi;?>/css/images/cargo.png" alt="Banner" class="image-84">
                    </div>
                    <div class="div-block-4461292292">
                        <h1 class="heading-48"><?php echo $system['ucretsizkargo'];?> TL<br>
                            ÜZERİ ÜCRETSİZ KARGO</h1>
                    </div>
                </div>
            </div>
            <div class="column-107 w-col w-col-3 w-col-medium-3 w-col-small-6">
                <div class="div-block-4461292291">
                    <div class="tab-block-2-copy">
                        <img width="60" src="<?php echo $sitetemasi;?>/css/images/security.png" alt="Banner" class="image-84">
                    </div>
                    <div class="div-block-4461292292">
                        <h1 class="heading-48">256BİT ŞİFRELİ <br>
                            GÜVENLİ ÖDEME SİSTEMİ</h1>
                    </div>
                </div>
            </div>
            <div class="column-108 w-col w-col-3 w-col-medium-3 w-col-small-6">
                <div class="div-block-4461292291">
                    <div class="tab-block-2-copy">
                        <img width="60" src="<?php echo $sitetemasi;?>/css/images/support.png" alt="Banner" class="image-84">
                    </div>
                    <div class="div-block-4461292292">
                        <h1 class="heading-48">7/24<br>
                            CANLI DESTEK</h1>
                    </div>
                </div>
            </div>
            <div class="column-109 w-col w-col-3 w-col-medium-3 w-col-small-6">
                <div class="div-block-4461292291">
                    <div class="tab-block-2-copy">
                        <img width="60" src="<?php echo $sitetemasi;?>/css/images/iade.png" alt="Banner" class="image-84">
                    </div>
                    <div class="div-block-4461292292">
                        <h1 class="heading-48">14 GÜN İÇİNDE<br>
                            KOLAY İADE & DEĞİŞİM</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   
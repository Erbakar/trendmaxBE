    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 


   

    <section id="wrapper">
      <div class="ImageSlider clearfix">
        <div class=" laberImageSlider">
          <!-- Module labslideshow -->
          <div class="lab-nivoSlideshow">
            <div class="lab-loading"></div>
            <div id="lab-slideshow" class="slides">
			
			<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($slider as $demo){?> 
              <img 
                data-thumb="resimler/slider/<?php echo $demo['resim'];?>"  
                src="resimler/slider/<?php echo $demo['resim'];?>"
                alt="<?php echo $demo['adi'];?>"
                title="#htmlcaption<?php echo $demo['id'];?>" />
             
            <?php } ?> 
            </div>
			
			 <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($slider as $demo){?> 
			
            <div id="htmlcaption<?php echo $demo['id'];?>" class=" nivo-html-caption nivo-caption">
              <a class="laberUrl" href="<?php echo $demo['link'];?>" title="banner"><?php echo $demo['adi'];?></a>
            </div>
          <?php } ?> 
		  
		  
		  
          </div>
          <script>
            $( document ).ready(function() {
            	$('#lab-slideshow').nivoSlider({
            		effect: 'random',
            		slices: 15,
            		boxCols: 8,
            		boxRows: 4,
            		animSpeed: '500',
            		pauseTime: '6000',
            		startSlide: 0,
            		controlNav:  true ,
            		directionNav: true,
            		controlNavThumbs: false ,
            		pauseOnHover: true,
            		manualAdvance: false,
            		prevText: '<i class="icon-arrow-left"></i>',
            		nextText: '<i class="icon-arrow-right"></i>',
            		afterLoad: function(){
            			$('.lab-loading').css("display","none");
            		},
            		beforeChange: function(){
            			$('.nivo-caption .lab_description').removeClass("active").css("opacity","0");
            		},
            		afterChange: function(){
            			$('.nivo-caption .lab_description').addClass("active" ).css("opacity","1");
            		}
            	});
            });
          </script>
          <!-- /Module labslideshow -->
        </div>
      </div>
      <div class="displayPosition displayPosition1">
        <div class="container">
          <div class="row">
            <div class="laber-freeshipping padding-0-15" <?php echo $tema['t38'] == '0' ? 'style="display:none !important;"' : null; ?>>
      <?php include('hikaye.php');?>
            </div>
            <div class="laberStatic margin-bottom-30 padding-0-15">
              <div class="row">
                <div class="col-xs-12 col-sm-4">
                  <div class="img"><a title="Banner" href="<?php echo $tema['t4']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t1']; ?>" alt="images" width="503" height="215" /> </a></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <div class="img"><a title="Banner" href="<?php echo $tema['t5']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="images" width="503" height="215" /> </a></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <div class="img"><a title="Banner" href="<?php echo $tema['t6']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" alt="images" width="503" height="215" /> </a></div>
                </div>
              </div>
            </div>
            <!-- <script type="text/javascript" src="modules/labproductfilter/views/js/jquery-1.7.1.min.js"></script> -->
            <div class="laberthemes padding-0-15 clearfix margin-bottom-60">
              <div class="Lab-bestseller-prod laberProductFilter laberGrid  laberProductGrid clearfix">
                <div class="title_block">
                  <h3>
                    <span class="strong">Popüler</span> <span>Ürünler</span>
                  </h3>
                </div>
                <div class="prod-filter labContent">
                  <div class="product_list">
                    <div class="row">
                      <div class="owlProductFilter-Lab-bestseller-prod ">
					  
	  <?php $uk = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($uk as $anaurunler){?>				  
                     
 <div class="item-inner ajax_block_product">
   <div class="item">
      <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope="" itemtype="http://schema.org/Product">
         <div class="laberProduct-container">
            <div class="laberProduct-image">
			
			
			
               <a href="urun/<?php echo $anaurunler['seo']; ?>" class="thumbnail product-thumbnail">
               <span class="cover_image">
               <img src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" alt="<?php echo $anaurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $anaurunler['resim']; ?>" width="410" height="410">
               </span>
			 <?php 
			 $sayfaidm = $anaurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
			 <?php 
			 $gelenid = $anaurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
               <span class="hover_image">
               <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $anaurunler['seo']; ?>" data-full-size-image-url="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" width="410" height="410"> 
               </span>
			 <?php }?>    
			 <?php } else { ?>	
              <span class="hover_image">
               <img src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" alt="<?php echo $anaurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $anaurunler['resim']; ?>" width="410" height="410"> 
               </span>
            <?php }?> 
			 
               </a>
			   
			   
               <ul class="laberProduct-flags">
			   <?php if($anaurunler['idurum']=='1'){?>
                  <li class="laber-flag laber-discount"><span>-%<?php echo yuzdeHesaplama($anaurunler['fiyat'],$anaurunler['ifiyat']);?></span></li>
				<?php } ?> 
				<?php if($anaurunler['yeni']=='1'){?>
                  <li class="laber-flag laber-new"><span>Yeni</span></li>
				  <?php } ?> 
               </ul>
               <div class="laberActions">
                  <div class="laberActions-i">
                     <div class="laberItem">
                        <div class="laberwishlist product-item-wishlist">
                           <a class="addToWishlist wishlistProd_2" title="Favorilerime Ekle" href="?favoriekle=<?php echo $anaurunler['id']; ?>" rel="2">
                           <i class="icon-heart"></i> <span>Favorilerime Ekle</span>
                           </a>
                        </div>
                     </div>
                     <div class="laberItem">		
                        <a class="button-action" data-id-product="2" href="?karsilastir=<?php echo $anaurunler['id']; ?>"  title="Karşılaştır">
                       <i class="icon-layers" aria-hidden="true"></i>
                        <i class="removeCompare icon-close"></i><span>Karşılaştır</span>
                        </a>
                     </div>
                     <div class="laberItem">
                        <a href="urun/<?php echo $anaurunler['seo']; ?>" class="" title="İncele">
                        <i class="icon-eye"></i>
                        <span>İncele</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="laberCart">
                  
                     <button onclick="window.location.href='urun/<?php echo $anaurunler['seo']; ?>'" class="laberBottom
                        ">
                     <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i>
                     <span>+ Sepete Ekle</span>
                
               </div>
            </div>
            <div class="laber-product-description">
               <h2 class="productName" itemprop="name"><a href="urun/<?php echo $anaurunler['seo'];?>"><?php echo $anaurunler['adi'];?></a></h2>
               <div class="comments_note">
                  <div class="star_content pull-left">
                                      <?php echo $anaurunler['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $anaurunler['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $anaurunler['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $anaurunler['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $anaurunler['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
					 
					 
                  </div>
               </div>
			  <div class="manufacturer_name">
                  <span>Ürün Kodu:</span> <?php echo $anaurunler['urunkodu'];?>
               </div>
			   
			   
			   
               <div class="laber-product-price-and-shipping has_discount">
                  <?php echo urunfiyatbelirle($anaurunler['kdv'],$anaurunler['idurum'],$anaurunler['fiyat'],$anaurunler['ifiyat']);?>
               </div>
            
            </div>
         </div>
      </article>
   </div>
</div>
						
			 <?php }?> 			
						
                      </div>
                    </div>
                    <div class="owl-buttons">
                      <div class="owl-prev prev-Lab-bestseller-prod"><i class="icon-arrow-left"></i></div>
                      <div class="owl-next next-Lab-bestseller-prod"><i class="icon-arrow-right"></i></div>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  $(document).ready(function() {
                  	var owl = $(".owlProductFilter-Lab-bestseller-prod");
                  	owl.owlCarousel({
                  		items : <?php echo $tema['t36'];?>,
                  		itemsDesktop : [1199,4],
                  		itemsDesktopSmall : [991,3],
                  		itemsTablet: [767,2],
                  		itemsMobile : [480,2],
                  		slideSpeed : 2000,
                  		paginationSpeed : 2000,
                  		rewindSpeed : 2000,
                  		autoPlay :  false,	
                  		stopOnHover: false,
                  		pagination : false,
                  		addClassActive : true,
                  	});
                  	$(".next-Lab-bestseller-prod").click(function(){
                  	owl.trigger('owl.next');
                  	})
                  	$(".prev-Lab-bestseller-prod").click(function(){
                  	owl.trigger('owl.prev');
                  	})
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="displayPosition displayPosition2">
        <div class="container">
          <div class="row">
		       <div class="laber-freeshipping padding-0-15">
              <div class="freeshipping">
                <div class="item-inner">
                  <div class="item">
                    <span class="icons icons1"> </span>
                    <div class="box-content">
                      <h3>Ücretsiz Kargo</h3>
                      <p><?php echo $system['ucretsizkargo'];?> TL ve üzeri</p>
                    </div>
                  </div>
                </div>
                <div class="item-inner">
                  <div class="item">
                    <span class="icons icons2"> </span>
                    <div class="box-content">
                      <h3>Güvenli Ödeme</h3>
                      <p>256 Bit Güvenli Şifreleme</p>
                    </div>
                  </div>
                </div>
                <div class="item-inner">
                  <div class="item">
                    <span class="icons icons3"> </span>
                    <div class="box-content">
                      <h3>İade & Değişim</h3>
                      <p>İade ve Değişim Garantisi</p>
                    </div>
                  </div>
                </div>
                <div class="item-inner">
                  <div class="item">
                    <span class="icons icons4"> </span>
                    <div class="box-content">
                      <h3>Çözüm Merkezi</h3>
                      <p>7/24 Destek Merkezi</p>
                    </div>
                  </div>
                </div>
                <div class="item-inner">
                  <div class="item">
                    <span class="icons icons5"> </span>
                    <div class="box-content">
                      <h3>Hijyenik Paketleme</h3>
                      <p>Steril ve Güvenli Paketleme</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <script type="text/javascript" src="modules/labproductfilter/views/js/jquery-1.7.1.min.js"></script> -->
            <div class="laberthemes padding-0-15 clearfix margin-bottom-60">
              <div class="Lab-Specials-prod laberProductFilter laberGrid  laberProductGrid clearfix">
                <div class="title_block">
                  <h3>
                    <span class="strong">Fırsat Ürünleri</span> <span>Acele Edin</span>
                  </h3>
                </div>
                <div class="countdown-title clearfix">
     <style>
      .blink {
     animation: blinker 3s linear infinite;
color: #fff;
font-size: 16px;
line-height: 35px !important;
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
    </style>
                  <div id="countdown-banner" class="countdownHolder">
				  <p class="blink">Günün Fırsat Ürünleri Burada Sizleri Bekliyor !</p>
				 </div>
			   </div>
                <style>
                  .countdownHolder{
                  background: #ff9300;
                  }
                </style>
              
                <div class="prod-filter labContent">
                  <div class="product_list">
                    <div class="row">
                      <div class="owlProductFilter-Lab-Specials-prod ">
                
					  <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukzzz as $gfirsat){?>				  
                     
 <div class="item-inner ajax_block_product">
   <div class="item">
      <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope="" itemtype="http://schema.org/Product">
         <div class="laberProduct-container">
            <div class="laberProduct-image">
			
			
			
               <a href="urun/<?php echo $gfirsat['seo']; ?>" class="thumbnail product-thumbnail">
               <span class="cover_image">
               <img src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" alt="<?php echo $gfirsat['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" width="410" height="410">
               </span>
			 <?php 
			 $sayfaidm = $gfirsat['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
			 <?php 
			 $gelenid = $gfirsat['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
               <span class="hover_image">
               <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $gfirsat['seo']; ?>" data-full-size-image-url="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" width="410" height="410"> 
               </span>
			 <?php }?>    
			 <?php } else { ?>	
              <span class="hover_image">
               <img src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" alt="<?php echo $gfirsat['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" width="410" height="410"> 
               </span>
            <?php }?> 
			 
               </a>
			   
			   
               <ul class="laberProduct-flags">
			   <?php if($gfirsat['idurum']=='1'){?>
                  <li class="laber-flag laber-discount"><span>-%<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?></span></li>
				<?php } ?> 
				<?php if($gfirsat['yeni']=='1'){?>
                  <li class="laber-flag laber-new"><span>Yeni</span></li>
				  <?php } ?> 
               </ul>
               <div class="laberActions">
                  <div class="laberActions-i">
                     <div class="laberItem">
                        <div class="laberwishlist product-item-wishlist">
                           <a class="addToWishlist wishlistProd_2" title="Favorilerime Ekle" href="?favoriekle=<?php echo $gfirsat['id']; ?>" rel="2">
                           <i class="icon-heart"></i> <span>Favorilerime Ekle</span>
                           </a>
                        </div>
                     </div>
                     <div class="laberItem">		
                        <a class="button-action" data-id-product="2" href="?karsilastir=<?php echo $gfirsat['id']; ?>"  title="Karşılaştır">
                       <i class="icon-layers" aria-hidden="true"></i>
                        <i class="removeCompare icon-close"></i><span>Karşılaştır</span>
                        </a>
                     </div>
                     <div class="laberItem">
                        <a href="urun/<?php echo $gfirsat['seo']; ?>" class="" title="İncele">
                        <i class="icon-eye"></i>
                        <span>İncele</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="laberCart">
                  
                     <button onclick="window.location.href='urun/<?php echo $gfirsat['seo']; ?>'" class="laberBottom
                        ">
                     <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i>
                     <span>+ Sepete Ekle</span>
                
               </div>
            </div>
            <div class="laber-product-description">
               <h2 class="productName" itemprop="name"><a href="urun/<?php echo $gfirsat['seo'];?>"><?php echo $gfirsat['adi'];?></a></h2>
               <div class="comments_note">
                  <div class="star_content pull-left">
                                      <?php echo $gfirsat['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
					 
					 
                  </div>
               </div>
			  <div class="manufacturer_name">
                  <span>Ürün Kodu:</span> <?php echo $gfirsat['urunkodu'];?>
               </div>
			   
			   
			   
               <div class="laber-product-price-and-shipping has_discount">
                  <?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
               </div>
            
            </div>
         </div>
      </article>
   </div>
</div>
						
			 <?php }?> 	
				
                      </div>
                    </div>
                    <div class="owl-buttons">
                      <div class="owl-prev prev-Lab-Specials-prod"><i class="icon-arrow-left"></i></div>
                      <div class="owl-next next-Lab-Specials-prod"><i class="icon-arrow-right"></i></div>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  $(document).ready(function() {
                  	var owl = $(".owlProductFilter-Lab-Specials-prod");
                  	owl.owlCarousel({
                  		items : <?php echo $tema['t36'];?>,
                  		itemsDesktop : [1199,4],
                  		itemsDesktopSmall : [991,3],
                  		itemsTablet: [767,2],
                  		itemsMobile : [480,2],
                  		slideSpeed : 2000,
                  		paginationSpeed : 2000,
                  		rewindSpeed : 2000,
                  		autoPlay :  false,	
                  		stopOnHover: false,
                  		pagination : false,
                  		addClassActive : true,
                  	});
                  	$(".next-Lab-Specials-prod").click(function(){
                  	owl.trigger('owl.next');
                  	})
                  	$(".prev-Lab-Specials-prod").click(function(){
                  	owl.trigger('owl.prev');
                  	})
                  });
                </script>
              </div>
            </div>
       
            <div class="laberStatic margin-bottom-30 padding-0-15">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="img"><a title="" href="<?php echo $tema['t7'];?>"> <img src="resimler/temaayarlari/<?php echo $tema['anabanner'];?>" alt="images" width="503" height="215" /> </a></div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  
	  
	  
	    <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 
	  
      <div class="displayPosition displayPosition3">
        <div class="container">
          <div class="row">
                <div class="laberthemes padding-0-15 clearfix margin-bottom-60">
              <div class="Lab-bestseller-prod laberProductFilter laberGrid  laberProductGrid clearfix">
                <div class="title_block">
                  <h3>
                    <span class="strong"><?php echo $kategorimx['adi'];?></span> <span>Ürünleri</span>
                  </h3>
                </div>
                <div class="prod-filter labContent">
                  <div class="product_list">
                    <div class="row">
                      <div class="owlProductFilter-Lab-bestseller-prod ">
					  
	  <?php 
	  
	  $katimiz = $kategorimx['id']; 
	  $ukkzzz = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 18")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukkzzz as $katurunler){?>				  
                     
 <div class="item-inner ajax_block_product">
   <div class="item">
      <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope="" itemtype="http://schema.org/Product">
         <div class="laberProduct-container">
            <div class="laberProduct-image">
			
			
			
               <a href="urun/<?php echo $katurunler['seo']; ?>" class="thumbnail product-thumbnail">
               <span class="cover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410">
               </span>
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
			 <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
               <span class="hover_image">
               <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" width="410" height="410"> 
               </span>
			 <?php }?>    
			 <?php } else { ?>	
              <span class="hover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410"> 
               </span>
            <?php }?> 
			 
               </a>
			   
			   
               <ul class="laberProduct-flags">
			   <?php if($katurunler['idurum']=='1'){?>
                  <li class="laber-flag laber-discount"><span>-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span></li>
				<?php } ?> 
				<?php if($katurunler['yeni']=='1'){?>
                  <li class="laber-flag laber-new"><span>Yeni</span></li>
				  <?php } ?> 
               </ul>
               <div class="laberActions">
                  <div class="laberActions-i">
                     <div class="laberItem">
                        <div class="laberwishlist product-item-wishlist">
                           <a class="addToWishlist wishlistProd_2" title="Favorilerime Ekle" href="?favoriekle=<?php echo $katurunler['id']; ?>" rel="2">
                           <i class="icon-heart"></i> <span>Favorilerime Ekle</span>
                           </a>
                        </div>
                     </div>
                     <div class="laberItem">		
                        <a class="button-action" data-id-product="2" href="?karsilastir=<?php echo $katurunler['id']; ?>"  title="Karşılaştır">
                       <i class="icon-layers" aria-hidden="true"></i>
                        <i class="removeCompare icon-close"></i><span>Karşılaştır</span>
                        </a>
                     </div>
                     <div class="laberItem">
                        <a href="urun/<?php echo $katurunler['seo']; ?>" class="" title="İncele">
                        <i class="icon-eye"></i>
                        <span>İncele</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="laberCart">
                  
                     <button onclick="window.location.href='urun/<?php echo $katurunler['seo']; ?>'" class="laberBottom
                        ">
                     <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i>
                     <span>+ Sepete Ekle</span>
                
               </div>
            </div>
            <div class="laber-product-description">
               <h2 class="productName" itemprop="name"><a href="urun/<?php echo $katurunler['seo'];?>"><?php echo $katurunler['adi'];?></a></h2>
               <div class="comments_note">
                  <div class="star_content pull-left">
                                      <?php echo $katurunler['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
					 
					 
                  </div>
               </div>
			  <div class="manufacturer_name">
                  <span>Ürün Kodu:</span> <?php echo $katurunler['urunkodu'];?>
               </div>
			   
			   
			   
               <div class="laber-product-price-and-shipping has_discount">
                  <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               </div>
            
            </div>
         </div>
      </article>
   </div>
</div>
						
			 <?php }?> 			
						
                      </div>
                    </div>
                    <div class="owl-buttons">
                      <div class="owl-prev prev-Lab-bestseller-prod"><i class="icon-arrow-left"></i></div>
                      <div class="owl-next next-Lab-bestseller-prod"><i class="icon-arrow-right"></i></div>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  $(document).ready(function() {
                  	var owl = $(".owlProductFilter-Lab-bestseller-prod");
                  	owl.owlCarousel({
                  		items : <?php echo $tema['t36'];?>,
                  		itemsDesktop : [1199,4],
                  		itemsDesktopSmall : [991,3],
                  		itemsTablet: [767,2],
                  		itemsMobile : [480,2],
                  		slideSpeed : 2000,
                  		paginationSpeed : 2000,
                  		rewindSpeed : 2000,
                  		autoPlay :  false,	
                  		stopOnHover: false,
                  		pagination : false,
                  		addClassActive : true,
                  	});
                  	$(".next-Lab-bestseller-prod").click(function(){
                  	owl.trigger('owl.next');
                  	})
                  	$(".prev-Lab-bestseller-prod").click(function(){
                  	owl.trigger('owl.prev');
                  	})
                  });
                </script>
              </div>
            </div>
		   
          </div>
        </div>
      </div>
	  
	   <?php } ?>	  

      <div class="container">
        <div class="row">
          <nav data-depth="1" class="breadcrumb hidden-sm-down">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $url;?>">
                <span itemprop="name">Anasayfa</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
            </ol>
          </nav>
          <div id="content-wrapper">
            <section id="main">
              <section id="content" class="page-home">
              </section>
              <footer class="page-footer">
                <!-- Footer content -->
              </footer>
            </section>
          </div>
        </div>
      </div>
      <div class="displayPosition displayPosition5">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="displayPosition displayPosition6">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="displayPosition displayBlog">
        <div class="container">
          <div class="row">
            <div id="smartblog_block" class="block products_block  laberthemes margin-bottom-60 padding-0-15 clearfix">
              <div class="products_block_inner">
                <div class="title_block">
                  <h3>
                    <span class="strong">Blog</span> <span>Haberler</span>
                    <a class="View" href="bloglar/" class="tt-title">+ Tümünü Gör</a>
                  </h3>
                </div>
                <div class="sdsblog-box-content block_content">
                  <div class="product_list">
                    <div class="row">
                      <div id="smartblog-carousel">
					          <?php $aaaaaaa = $ozy->query("select * from haberler where  durum='1' order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($aaaaaaa as $blog){?>

					  
					  
                        <div class="item-inner">
                          <div class="item">
                            <div class="blog_post">
                              <div class="news_module_image_holder">
                                <a href="blog/<?php echo $blog['seo']; ?>">
                                <img alt="<?php echo $blog['seo']; ?>" class="feat_img_small" src="resimler/haberler/<?php echo $blog['resim']; ?>">
                                <span class="blog-hover"></span>
                                </a>
                                <span class="blogicons">
                                <a title="<?php echo $blog['seo']; ?>" href="resimler/haberler/<?php echo $blog['resim']; ?>" data-lightbox="example-set" class="icon zoom"></a>
                                </span>
                              </div>
                              <div class="blog_content">
                                <div class="blog_inner">
                                  <p class="articleSection" itemprop="articleSection">
                                    <a href="blog/<?php echo $blog['seo']; ?>">
                                    <?php echo $blog['tarih']; ?>
                                    </a>
                                  </p>
                                  <h4 class="sds_post_title"><a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a></h4>
                                  <span class="blog_date">
                                  <span class="day_date"> <?php echo $blog['hit']; ?> görüntülenme</span>
                                 
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
						
						 <?php } ?>	
						
                      </div>
                      <div class="owl-buttons">
                        <div class="owl-prev prevBlog_post_inner"><i class="icon-arrow-left icon"></i></div>
                        <div class="owl-next nextBlog_post_inner"><i class="icon-arrow-right icon"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript">
              $(document).ready(function() {
              	var owl = $("#smartblog-carousel");
              	owl.owlCarousel({
              		items : 4,
              		itemsDesktop : [1199,3],
              		itemsDesktopSmall : [991,2],
              		itemsTablet: [767,2],
              		itemsMobile : [480,1],
              		rewindNav : false,
              		autoPlay :  false,
              		stopOnHover: false,
              		pagination : false,
              	});
              	$(".nextBlog_post_inner").click(function(){
              	owl.trigger('owl.next');
              	})
              	$(".prevBlog_post_inner").click(function(){
              	owl.trigger('owl.prev');
              	})
              });
            </script>
          </div>
        </div>
      </div>
      <div class="laberthemes displayManufacture ">
        <div class="container">
          <div class="row">
            <div class="laberLogo_manufacturer margin-bottom-60 padding-0-15">
              <div class="content-manufacturer">
                <div class="row">
                  <div class="list_manufacturer">
				   <?php 
							
							$ukkzaaa = $ozy->query("select * from markalar where durum='1' order by rand() desc limit 12")->fetchAll(PDO::FETCH_ASSOC); 
                          
							foreach($ukkzaaa as $markalar){
                             ?>
                    <div class="item-inner first_item">
                      <div class="item">
                        <a class="image_hoverwashe" target="_blank" href="<?php echo $markalar['link']; ?>" title="<?php echo $markalar['adi']; ?>">
                        <img src="resimler/markalar/<?php echo $markalar['resim']; ?>" alt="<?php echo $markalar['adi']; ?>" />
                        <span class="hover_bkg_light"></span>
                        </a>
                      </div>
                    </div>
					
				<?php } ?>
				
				
				
                  </div>
                </div>
                <div class="owl-buttons">
                  <div class="owl-prev prevBrand_post_inner"><i class="icon-arrow-left icon"></i></div>
                  <div class="owl-next nextBrand_post_inner"><i class="icon-arrow-right icon"></i></div>
                </div>
              </div>
            </div>
            <script type="text/javascript">
              $(document).ready(function() {
              	var owl = $(".list_manufacturer");
              	owl.owlCarousel({
              		items : 6,
              		itemsDesktop : [1199,5],
              		itemsDesktopSmall : [991,4],
              		itemsTablet: [767,3],
              		itemsMobile : [480,2],
              		slideSpeed : 2000,
              		paginationSpeed : 2000,
              		autoPlay :  6000,
              		pagination : false,
              		addClassActive : true,
              	});
              	$(".nextBrand_post_inner").click(function(){
              	owl.trigger('owl.next');
              	})
              	$(".prevBrand_post_inner").click(function(){
              	owl.trigger('owl.prev');
              	})
              });
            </script>
          </div>
        </div>
      </div>
    </section>
                                                           
                                   
    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	

  <div id="content" class=" content-main">
  <div class="so-page-builder">
  <div class="container-fluid page-builder-ltr">
    <div class="row row_kjzg  row-style ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ynn8  col-style">
        <div class="module sohomepage-slider slideshow1">
          <div class="modcontent">
            <div id="sohomepage-slider1">
              <div class="so-homeslider sohomeslider-inner-1">
			  
			  			 <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                             foreach($slider as $demo){?> 						   
																   
                <div class="item">
                  <a href="<?php echo $demo['link'];?>" title="slide 1">
                  <img src="resimler/slider/<?php echo $demo['resim'];?>"  alt="slide 1" />
                  </a>
                  <div class="sohomeslider-description">
                  </div>
                </div>
            <?php } ?> 	
			
              </div>
              <script type="text/javascript">
                var total_item = 3 ;
                $(".sohomeslider-inner-1").owlCarousel2({
                    margin: 0,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed:  1000,
                    smartSpeed: 500,
                    autoplayHoverPause: true,
                    startPosition: 0,
                    mouseDrag:  true,
                    touchDrag: true,
                    dots: false,
                    autoWidth: false,
                    autoHeight: false,
                    dotClass: "owl2-dot",
                    dotsClass: "owl2-dots",
                    loop: true,
                    navText: ["Next", "Prev"],
                    navClass: ["owl2-prev", "owl2-next"],
                    responsive: {
                    0:{ items: 1,
                      nav: total_item <= 1 ? false : ((true ) ? true: false),
                    },
                    480:{ items: 1,
                      nav: total_item <= 1 ? false : ((true ) ? true: false),
                    },
                    768:{ items: 1,
                      nav: total_item <= 1 ? false : ((true ) ? true: false),
                    },
                    992:{ items: 1,
                      nav: total_item <= 1 ? false : ((true ) ? true: false),
                    },
                    1200:{ items: 1,
                      nav: total_item <= 1 ? false : ((true ) ? true: false),
                    }
                  },
                });
              </script>
            </div>
          </div>
          <!--/.modcontent-->
          <div class="form-group">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid page-builder-ltr">
    <div class="row row_6xze  row-extra-trend ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_oivw  col-style">
        <div class="so-extraslider-contain so-extraslider-ltr extra_trending container">
          <div class="modtitle">
            <h3><span>Popüler  Trend Ürünler</span></h3>
          </div>
          <div class="modcontent">
            <div id="so_extra_slider_11478607251633449598" class="so-extraslider buttom-type1 preset00-4 preset01-4 preset02-2 preset03-2 preset04-1 button-type1">
              <!-- Begin extraslider-inner -->
              <div class="owl-carousel owl-theme" data-effect="none">
               
               <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 16")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   

			   <div class="item ">
                  <div class="product-layout item-inner style1 ">
                    <div class="item-image">
                      <div class="item-img-info">
                        <a href="urun/<?php echo $popurunler['seo']; ?>"  title="Ürün"  >
                        <img data-sizes="auto" src="resimler/urunler/<?php echo $popurunler['resim']; ?>" data-src="resimler/urunler/<?php echo $popurunler['resim']; ?>" alt="Ürün" class="lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="item-title">
                        <a href="urun/<?php echo $popurunler['seo']; ?>"  title="Ürün"  >
                       <?php echo $popurunler['adi']; ?>
                        </a>
                      </div>
                      <div  class="content_price price">
                        <?php echo urunfiyatbelirle($popurunler['kdv'],$popurunler['idurum'],$popurunler['fiyat'],$popurunler['ifiyat']);?>
											
						
						<?php if($popurunler['idurum']=='1'){?>
						<span class="text_off">-%<?php echo yuzdeHesaplama($popurunler['fiyat'],$popurunler['ifiyat']);?> İndirim</span>
						<?php } ?>
					
						
                      </div>
                    </div>
                    <!-- End item-info -->
                    <!-- End item-wrap-inner -->
                  </div>
                  <!-- End item-wrap -->
                </div>
           
       <?php } ?>
            
			
			
			
              </div>
              <!--End extraslider-inner -->
            </div>
          </div>
        </div>
        <script type="text/javascript">
          //Alternate Direction
          jQuery(document).ready(function ($) {
              var owl = $('.owl-carousel');
          
          	
              owl.owlCarousel({
                  rtl: false,
                  margin: 5,
                  autoplay: 1,
          		slideBy: 1,
                  slideTransition: 'linear',
          		autoplayHoverPause: 1,
          		autoplayTimeout: 0 ,
          		autoplaySpeed: 3000 ,
          		startPosition: 0 ,
          		mouseDrag: 1,
          		touchDrag: 1 ,		
                  autoWidth: false,
          		responsive: {
          			0: 	{ items: 1 } ,
          			480: { items: 2 },
          			768: { items: 2 },
          			992: { items: 4 },
          			1200: {items: 4},
          			1650: {items: 4}
          		},		
          		dotClass: "owl2-dot",
          		dotsClass: "owl2-dots",
          		dots: false ,
          		dotsSpeed:2000 ,
          		nav: false ,
          		loop: true ,
          		navSpeed: 2000 ,
          		navText: ["&#171 ", "&#187 "],
          		navClass: ["owl-prev", "owl-next"]
              });
          
          });
          
        </script>
      </div>
    </div>
  </div>
  <div class="container page-builder-ltr">
  <div class="row row_t6dk  content-main-w ">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_zfib  col-style">
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_733b  main-right">

    <div id="so_categories_15718861001633449598" class="so-categories module theme3 categories-layout1 preset01-6 preset02-6 preset03-3 preset04-2 preset05-1">
      <div class="pre_text">
      </div>
      <div class="modcontent">
        <div class="cat-wrap theme3">
			
		  
		    <?php require('hikaye.php');?> 
		  
		  
        </div>
      </div>
      <!-- 	<div class="form-group">
        </div>
         -->
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_7hr8  col-style">
  <script>
    //<![CDATA[
    	var listtabs1227 = [];
    //]]>
  </script>	
  <div class="module so-listing-tabs-ltr listingtab-layout1-deal">
  <div class="modcontent">
    <!--[if lt IE 9]>
    <div id="so_listing_tabs_1227" class="so-listing-tabs msie lt-ie9 first-load module">
      <![endif]-->
      <!--[if IE 9]>
      <div id="so_listing_tabs_1227" class="so-listing-tabs msie first-load module">
        <![endif]-->
        <!--[if gt IE 9]><!-->
        <div id="so_listing_tabs_1227" class="so-listing-tabs first-load module">
          <!--<![endif]-->
          <div class="ltabs-wrap ">
        
            <div class="wap-listing-tabs products-list grid" style="background: url(<?php echo $sitetemasi;?>/firsat.jpg) no-repeat;">
              <div class="ltabs-items-container">
                <div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-24 " data-total="16" >
                  <div class="ltabs-items-inner owl2-carousel  ltabs-slider ">
                  
						 <?php $gr = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
                           foreach($gr as $gfirsat){?>	

				  <div class="ltabs-item ">
                      <div class="product-layout transition product-grid">
                        <div class="product-item-container product-grid-type1 item-1">
                          <div class="left-block">
                            <div class="product-image-container  second_img">
                              <a href="urun/<?php echo $gfirsat['seo']; ?>">
                              <img style="width: 270px;height: 270px;" data-sizes="auto" src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" data-src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" class="img-1 lazyload">
                              
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
			 <img data-sizes="auto" style="width: 270px;height: 270px;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="img-2 lazyload">
             <?php }?>  
			<?php } else { ?>			  
		    <img data-sizes="auto" style="width: 270px;height: 270px;" src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" data-src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" class="img-2 lazyload">
                              
  				<?php }?>  		  
							  </a>						
                            </div>
							
							<?php if($gfirsat['yeni']=='1'){?>
                            <div class="box-label">
                              <span class="label-product label-sale"> Yeni </span>
                            </div>
							<?php } ?>
							
                          </div>
                          <div class="right-block">
                            <h4><a href="urun/<?php echo $gfirsat['seo']; ?>"><?php echo $gfirsat['adi']; ?></a></h4>
                            <div class="rate-history">
                              <div class="ratings">							
                                
                          
								
								           <?php echo $gfirsat['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
								
                              </div>
                            </div>
                            <div class="price">
                             	<?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
											
							  
					
			<?php if($gfirsat['idurum']=='1'){?>
		    <span class="text_off">
			  -%<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?> İndirim
			</span>
			<?php } ?>
                                            
							  
							  
                            </div>
                            <div class="button-group">
                              <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							  onclick="javascript:location.href='urun/<?php echo $gfirsat['seo']; ?>'"><i class="icom-shopping-cart1"></i></button>											
      
                              <button type="button" class="wishlist btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $gfirsat['id']; ?>'"
							  ><i class="icom-wishlist"></i></button>
                              <button type="button" class="compare btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $gfirsat['id']; ?>'"
							  ><i class="icom-compare"></i></button>
                            </div>
                          </div>
                          <div class="countdown_tab">
                            <div class="time-title">Kalan Süre...</div>
                            <div class="item-time" >
                              <div class="item-timer product_time_tabs_<?php echo $gfirsat['id']; ?>"></div>
							  
							  
							   
							   <?php 
							   $sonsaat = 60 * $gfirsat['firsatsaat'];
							   $tarih2 = strtotime('+'.$sonsaat.' minute',time());
							   ?>
                              <script type="text/javascript">
                                //<![CDATA[
                                listtabs1227.push('product_time_tabs_<?php echo $gfirsat["id"]; ?> |  <?php echo date("Y/m/d H:i:s",$tarih2);?>')
                                //]]>
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					
				
																			<?php } ?>
                  </div>
                  <script type="text/javascript">
                    jQuery(document).ready(function($){
                    	var $tag_id = $('#so_listing_tabs_1227'), 
                    	parent_active = 	$('.items-category-24', $tag_id),
                    	total_product = parent_active.data('total'),
                    	tab_active = $('.ltabs-items-inner',parent_active),
                    	nb_column0 = 4,
                    	nb_column1 = 3,
                    	nb_column2 = 3,
                    	nb_column3 = 2,
                    	nb_column4 = 1;
                    	tab_active.owlCarousel2({
                    		rtl: false,
                    		nav: true,
                    		dots: false,	
                    		margin: 10,
                    		loop:  true,
                    		autoplay: false,
                    		autoplayHoverPause: false,
                    		autoplayTimeout: 5000,
                    		autoplaySpeed: 1000,
                    		mouseDrag: true,
                    		touchDrag: true,
                    		navRewind: true,
                    		navText: [ '', '' ],
                    		responsive: {
                    			0: {
                    				items: nb_column4,
                    				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                    			},
                    			480: {
                    				items: nb_column3,
                    				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                    			},
                    			768: {
                    				items: nb_column2,
                    				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                    			},
                    			992: {
                    				items: nb_column1,
                    				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                    			},
                    			1200: {
                    				items: nb_column0,					
                    				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                    			}
                    		}
                    	});
                    });
                  </script>
                </div>
                
              </div>
            </div>
          </div>
          <script type="text/javascript">
            //<![CDATA[
            jQuery(document).ready(function ($) {
            	;
            	(function (element) {
            		var $element = $(element),
            			$tab = $('.ltabs-tab', $element),
            			$tab_label = $('.ltabs-tab-label', $tab),
            			$tabs = $('.ltabs-tabs', $element),
            			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
            			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
            			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
            			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
            			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
            			$items_content = $('.ltabs-items', $element),
            			$items_inner = $('.ltabs-items-inner', $items_content),
            			$items_first_active = $('.ltabs-items-selected', $element),
            			$load_more = $('.ltabs-loadmore', $element),
            			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
            			$select_box = $('.ltabs-selectbox', $element),
            			$tab_label_select = $('.ltabs-tab-selected', $element),
            			setting = 'a:76:{s:6:"action";s:9:"save_edit";s:4:"name";s:27:"Home 1 - Lisiting tab deals";s:18:"module_description";a:2:{i:2;a:2:{s:9:"head_name";s:18:"Lisiting tab deals";s:10:"custom_url";s:0:"";}i:1;a:2:{s:9:"head_name";s:18:"Lisiting tab deals";s:10:"custom_url";s:0:"";}}s:9:"head_name";s:18:"Lisiting tab deals";s:10:"custom_url";s:0:"";s:17:"disp_title_module";s:1:"0";s:6:"status";s:1:"1";s:12:"store_layout";s:8:"default2";s:12:"class_suffix";s:23:"listingtab-layout1-deal";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"4";s:10:"nb_column1";s:1:"3";s:10:"nb_column2";s:1:"3";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"1";s:11:"type_source";s:1:"0";s:8:"category";a:3:{i:0;s:3:"158";i:1;s:2:"17";i:2;s:2:"24";}s:14:"child_category";s:1:"1";s:11:"deal_status";s:1:"1";s:19:"show_datetime_deals";s:1:"1";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:4:"deal";s:16:"product_ordering";s:4:"DESC";s:12:"source_limit";s:1:"8";s:13:"catid_preload";s:2:"24";s:17:"field_product_tab";a:3:{i:0;s:6:"rating";i:1;s:12:"p_date_added";i:2;s:4:"sell";}s:13:"field_preload";s:4:"sell";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"60";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"1";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:3:"100";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"270";s:6:"height";s:3:"270";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"0";s:12:"banner_image";s:12:"no_image.png";s:12:"banner_width";s:3:"150";s:13:"banner_height";s:3:"250";s:16:"banner_image_url";s:0:"";s:6:"effect";s:4:"none";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"1";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:4:"1227";s:5:"start";i:0;}',
            			type_show = 'slider';
            			
            		enableSelectBoxes();
            		function enableSelectBoxes() {
            			$tab_wrap = $('.ltabs-tabs-wrap', $element),
            				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
            			if ($(window).innerWidth() <= 991) {
            				$tab_wrap.addClass('ltabs-selectbox');
            			} else {
            				$tab_wrap.removeClass('ltabs-selectbox');
            			}
            		}
            
            		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
            			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
            				$('.ltabs-tabs', $element).removeClass('ltabs-open');
            			} else {
            				$('.ltabs-tabs', $element).addClass('ltabs-open');
            			}
            		});
            
            		$(window).resize(function () {
            			if ($(window).innerWidth() <= 991) {
            				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
            			} else {
            				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
            			}
            		});
            
            		function showAnimateItems(el) {
            			var $_items = $('.new-ltabs-item', el), nub = 0;
            			$('.ltabs-loadmore-btn', el).fadeOut('fast');
            			$_items.each(function (i) {
            				nub++;
            				switch(effect) {
            					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
            					default: animatesItems($(this),nub*delay,i,el);
            				}
            				if (i == $_items.length - 1) {
            					$('.ltabs-loadmore-btn', el).fadeIn(3000);
            				}
            				$(this).removeClass('new-ltabs-item');
            			});
            		}
            
            		function animatesItems($this,fdelay,i,el) {
            			var $_items = $('.ltabs-item', el);
            			$this.stop(true, true).attr("style",
            				"-webkit-animation:" + effect +" "+ duration +"ms;"
            				+ "-moz-animation:" + effect +" "+ duration +"ms;"
            				+ "-o-animation:" + effect +" "+ duration +"ms;"
            				+ "-moz-animation-delay:" + fdelay + "ms;"
            				+ "-webkit-animation-delay:" + fdelay + "ms;"
            				+ "-o-animation-delay:" + fdelay + "ms;"
            				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
            					opacity: 1,
            					filter: 'alpha(opacity = 100)'
            				}, {
            					delay: 1000
            				});
            			if (i == ($_items.length - 1)) {
            				$(".ltabs-items-inner").addClass("play");
            			}
            		}
            		if (type_show == 'loadmore') {
            			showAnimateItems($items_first_active);
            		}
            		$tab.on('click.ltabs-tab', function () {
            			var $this = $(this);
            			if ($this.hasClass('tab-sel')) return false;
            			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
            				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
            			}
            			$tab.removeClass('tab-sel');
            			$this.addClass('tab-sel');
            			var items_active = $this.attr('data-active-content-l');
            			var _items_active = $(items_active,$element);
            			$items_content.removeClass('ltabs-items-selected');
            			_items_active.addClass('ltabs-items-selected');
            			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
            			var $loading = $('.ltabs-loading', _items_active);
            			var $text_noproduct = $('.text_noproduct', _items_active);
            			var loaded = _items_active.hasClass('ltabs-items-loaded');
            			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
            			if (!loaded && !_items_active.hasClass('ltabs-process')) {
            				_items_active.addClass('ltabs-process');
            				var category_id 		= $this.attr('data-category-id');
            				$loading.show();
            				$.ajax({
            					type: 'POST',
            					url: ajax_url,
            					data: {
            						is_ajax_listing_tabs: 1,
            						ajax_reslisting_start: 0,
            						categoryid: category_id,
            						setting : setting,
            						lbmoduleid: 1227
            					},
            					success: function (data) {
            						if (data.items_markup != '') {
            							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
            							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
            							$loading.remove();
            							$text_noproduct.remove();
            							if (type_show != 'slider') {
            								showAnimateItems(_items_active);
            							}
            							updateStatus(_items_active);
            						}
            						if(typeof(_SoQuickView) != 'undefined'){
            							_SoQuickView();
            						}
            						
            							
            						if (data.product) {
            							dataDate = new Date(2013, 10, 26, 12, 00, 00);
            							function CountDownTabs(dataDate, id) {
            								dateNow = new Date();
            								amount = dataDate.getTime() - dateNow.getTime();
            								if (amount < 0 && $('#' + id).length) {
            									$('.' + id).html("Now!");
            								} else {
            									days = 0;
            									hours = 0;
            									mins = 0;
            									secs = 0;
            									out = "";
            									amount = Math.floor(amount / 1000);
            									days = Math.floor(amount / 86400);
            									amount = amount % 86400;
            									hours = Math.floor(amount / 3600);
            									amount = amount % 3600;
            									mins = Math.floor(amount / 60);
            									amount = amount % 60;
            									secs = Math.floor(amount);
            
            									out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "Gün" : "Gün") + "</div>" + "</div> ";
            									out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Saat" : "Saat") + "</div>" + "</div> ";
            									out += "<div class='time-item time-min' >" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Dakika" : "Dakika") + "</div>" + "</div> ";
            									out += "<div class='time-item time-sec' >" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Saniye" : "Saniye") + "</div>" + "</div> ";
            									out = out.substr(0, out.length - 2);
            									
            
            									$('.' + id).html(out);
            									setTimeout(function () {
            										CountDownTabs(dataDate, id);
            									}, 1000);
            								}
            							}							
            							
            							$.each( data.product, function( key, value ) {
            							    var arr = value.split("|");
            								if (arr[1].length) {
            									var datanew = new Date(arr[1]);
            									CountDownTabs(datanew, arr[0]);
            									
            								}							  
            							});	
            						}	
                                    						
            					},
            					dataType: 'json'
            				});
            
            			} else {
            				if (type_show == 'loadmore') {
            					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
            					showAnimateItems(_items_active);
            				}else{
            					 var owl = $('.owl2-carousel' , _items_active);
            					 owl = owl.data('owlCarousel2');
            					 if (typeof owl !== 'undefined') {
            						owl.onResize();
            					 }
            				}
            			}
            		});
            
            		function updateStatus($el) {
            			$('.ltabs-loadmore-btn', $el).removeClass('loading');
            			var countitem = $('.ltabs-item', $el).length;
            			$('.ltabs-image-loading', $el).css({display: 'none'});
            			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
            			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
            			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
            			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
            
            			if (countitem >= rl_total) {
            				$('.ltabs-loadmore-btn', $el).addClass('loaded');
            				$('.ltabs-image-loading', $el).css({display: 'none'});
            				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
            				$('.ltabs-loadmore-btn', $el).removeClass('loading');
            			}
            		}
            
            		$btn_loadmore.on('click.loadmore', function () {
            			var $this = $(this);
            			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
            				return false;
            			} else {
            				$this.addClass('loading');
            				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
            				var rl_start 				= $this.parent().attr('data-rl_start'),
            					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
            					effect 					= $this.parent().attr('data-effect'),
            					category_id 			= $this.parent().attr('data-categoryid'),
            					items_active 			= $this.parent().attr('data-active-content');
            					
            				var _items_active = $(items_active,$element);
            				
            				$.ajax({
            					type: 'POST',
            					url: rl_ajaxurl,
            					data: {
            						is_ajax_listing_tabs: 1,
            						ajax_reslisting_start: rl_start,
            						categoryid: category_id,
            						setting: setting,
            						lbmoduleid: 1227
            					},
            					success: function (data) {
            						if (data.items_markup != '') {
            							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
            							$('.ltabs-image-loading', $this).css({display: 'none'});
            							showAnimateItems(_items_active);
            							updateStatus(_items_active);
            						}
            						if(typeof(_SoQuickView) != 'undefined'){
            							_SoQuickView();
            						}
            					}, dataType: 'json'
            				});
            			}
            			return false;
            		});
            
            			
            							data = new Date(2013, 10, 26, 12, 00, 00);
            							function CountDown(date, id) {
            								dateNow = new Date();
            								amount = date.getTime() - dateNow.getTime();
            								if (amount < 0 && $('#' + id).length) {
            									$('.' + id).html("Now!");
            								} else {
            									days = 0;
            									hours = 0;
            									mins = 0;
            									secs = 0;
            									out = "";
            									amount = Math.floor(amount / 1000);
            									days = Math.floor(amount / 86400);
            									amount = amount % 86400;
            									hours = Math.floor(amount / 3600);
            									amount = amount % 3600;
            									mins = Math.floor(amount / 60);
            									amount = amount % 60;
            									secs = Math.floor(amount);
            
            									out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "Gün" : "Gün") + "</div>" + "</div> ";
            									out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Saat" : "Saat") + "</div>" + "</div> ";
            									out += "<div class='time-item time-min' >" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Dakika" : "Dakika") + "</div>" + "</div> ";
            									out += "<div class='time-item time-sec' >" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Saniye" : "Saniye") + "</div>" + "</div> ";
            									out = out.substr(0, out.length - 2);
            									
            
            									$('.' + id).html(out);
            									setTimeout(function () {
            										CountDown(date, id);
            									}, 1000);
            								}
            							}
            							if (listtabs1227.length > 0) {		
            								for (var i = 0; i < listtabs1227.length; i++) {
            									var arr = listtabs1227[i].split("|");
            									if (arr[1].length) {
            										var data = new Date(arr[1]);
            										CountDown(data, arr[0]);
            									}
            								}
            							}			
            	    	
            	})('#so_listing_tabs_1227');
            });
            //]]>
          </script>
        </div>
      </div>
      <!-- /.modcontent-->
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_84xq  col-style">
  <div class="row row_f9gr  row20 ">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col_wui3 col20">
    <div class="module so-brands-ltr featured_brand so-brands">
      <h3 class="modtitle">
        <span>Güncel Kampanyalar</span>
      </h3>
      <div class="modcontent slider-brands">
        <div id="so_brands_5034255811633449598" class="so-manufacturer button-type2 preset00-2 preset01-3 preset02-3 preset03-2 preset04-1 button-type2">
          <!-- Begin extraslider-inner -->
          <div class="manufacturer-inner manufacturer-list " data-effect="none">
		  
		  
		    <?php $kk = $ozy->query("select * from kampanyalar where durum='1' order by sira DESC limit 8")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($kk as $kampi) {?>	
		  
            <div class="item ">
              <div class="manufacturer-layout manufacturer-grid ">
                <div class="manufacturer-item-container">
                  <div class="left-block">
                    <div class="manufacturer-image-container">
                      <a href="<?php echo $kampi["link"] == "0" ? "kampanya/".$kampi["seo"]."" : "".$kampi["link"].""; ?>">
                      <img style="width: 319px;height: 200px;" data-sizes="auto" class="lazyload" src="resimler/kampanyalar/<?php echo $kampi['resim']; ?>" data-src="resimler/kampanyalar/<?php echo $kampi['resim']; ?>" alt="brand">  										   
                      </a>												
                    </div>
                    <div class="manufacturer-name-container">
                      <a href="<?php echo $kampi["link"] == "0" ? "kampanya/".$kampi["seo"]."" : "".$kampi["link"].""; ?>">
                     <?php echo $kampi['adi']; ?>											   
                      </a>										
                    </div>
                    <div class="manufacturer-readmore-container">	
                      <a href="<?php echo $kampi["link"] == "0" ? "kampanya/".$kampi["seo"]."" : "".$kampi["link"].""; ?>">
                      Kampanyayı İncele											   
                      </a>											
                    </div>
                  </div>
                </div>
                <!-- End item-wrap-inner -->
              </div>
              <!-- End item-wrap -->
            </div>
          
		      <?php } ?>  
		  
		  
		  
          </div>
          <!--End manufacturer-inner -->
          <script type="text/javascript">
            //<![CDATA[
            jQuery(document).ready(function ($) {
            	(function (element) {
            		var $element = $(element),
            				$manufacturer = $(".manufacturer-inner", $element),
            				_delay = 500 ,
            				_duration = 800 ,
            				_effect = 'none ';
            
            
            		$manufacturer.owlCarousel2({
            			rtl: false,
            			margin: 10,
            			slideBy: 1,
            			autoplay: false,
            			autoplayHoverPause: 0,
            			autoplayTimeout: 5000 ,
            			autoplaySpeed: 1000 ,
            			startPosition: 0 ,
            			mouseDrag: true,
            			touchDrag: true ,
            			autoWidth: false,
            			responsive: {
            				0: 	{ items: 1 } ,
            				480: { items: 2 },
            				768: { items: 3 },
            				992: { items: 3 },
            				1200: {items: 2}
            			},
            			dots: true ,
            			dotsSpeed:500 ,
            			nav: true ,
            			loop: true ,
            			navSpeed: 500 ,
            			navText: ["", ""],
            			navClass: ["owl2-prev", "owl2-next"]
            
            		});
            
                    function _getAnimate($el) {
                    	if (_effect == "none") return;
                    	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                    	$manufacturer.removeClass("extra-animate");
                    	$el.each(function (i) {
                    		var $_el = $(this);
                    		var i= i + 1;
                    		$(this).css({
                    			"-webkit-animation": _effect + " " + _duration + "ms ease both",
                    			"-moz-animation": _effect + " " + _duration + "ms ease both",
                    			"-o-animation": _effect + " " + _duration + "ms ease both",
                    			"animation": _effect + " " + _duration + "ms ease both",
                    			"-webkit-animation-delay": +i * _delay + "ms",
                    			"-moz-animation-delay": +i * _delay + "ms",
                    			"-o-animation-delay": +i * _delay + "ms",
                    			"animation-delay": +i * _delay + "ms",
                    			
                    		}).animate({
                    			
                    		});
                    		if (i == $el.size() - 1) {
                    			$manufacturer.addClass("extra-animate");
                    		}
                    	});
                    }
                    function _UngetAnimate($el) {
                    	$el.each(function (i) {
                    		$(this).css({
                    			"animation": "",
                    			"-webkit-animation": "",
                    			"-moz-animation": "",
                    			"-o-animation": "",
                    		});
                    	});
                    } 
            	})("#so_brands_5034255811633449598 ");
            });
            //]]>
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col_ptkq col20">
    <script>
      //<![CDATA[
      	var listtabs1304 = [];
      //]]>
    </script>	
    <div class="module so-listing-tabs-ltr listingtab-layout1-sort">
      <h3 class="modtitle"><span>BU AYIN EN ÇOK SATAN ÜRÜNLERİ</span></h3>
      <div class="modcontent">
        <!--[if lt IE 9]>
        <div id="so_listing_tabs_1304" class="so-listing-tabs msie lt-ie9 first-load module">
          <![endif]-->
          <!--[if IE 9]>
          <div id="so_listing_tabs_1304" class="so-listing-tabs msie first-load module">
            <![endif]-->
            <!--[if gt IE 9]><!-->
            <div id="so_listing_tabs_1304" class="so-listing-tabs first-load module">
              <!--<![endif]-->
              <div class="ltabs-wrap ">
            
                <div class="wap-listing-tabs products-list grid">
                  <div class="ltabs-items-container">
                    <div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-20 " data-total="19" >
                      <div class="ltabs-items-inner owl2-carousel  ltabs-slider ">
                    	<?php $grzs = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by rand() limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                         foreach($grzs as $coksatan){?>   

					   <div class="ltabs-item ">
                          <div class="product-layout transition product-grid">
                            <div class="product-item-container product-grid-type1 item-1">
                                <div class="left-block">
                            <div class="product-image-container  second_img">
                              <a href="urun/<?php echo $coksatan['seo']; ?>">
                              <img style="width: 155px;height: 155px;" data-sizes="auto" src="resimler/urunler/<?php echo $coksatan['resim']; ?>" data-src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="img-1 lazyload">
                              
							  	 <?php 
			 $sayfaidm = $coksatan['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
												<?php 
			 $gelenid = $coksatan['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
			 <img data-sizes="auto" style="width: 155px;height: 155px;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="img-2 lazyload">
             <?php }?>  
			<?php } else { ?>			  
		    <img data-sizes="auto" style="width: 155px;height: 155px;" src="resimler/urunler/<?php echo $coksatan['resim']; ?>" data-src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="img-2 lazyload">
                              
  				<?php }?>  		  
							  </a>						
                            </div>
							
					
							
                          </div>
                       <div class="right-block">
                            <h4><a href="urun/<?php echo $coksatan['seo']; ?>"><?php echo $coksatan['adi']; ?></a></h4>
                            <div class="rate-history">
                              <div class="ratings">							
                                
                          
								
								           <?php echo $coksatan['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
								
                              </div>
                            </div>
                            <div class="price">
                             	<?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
											
							  
					
			<?php if($coksatan['idurum']=='1'){?>
		    <span class="text_off">
			  -%<?php echo yuzdeHesaplama($coksatan['fiyat'],$coksatan['ifiyat']);?> İndirim
			</span>
			<?php } ?>
                                            
							  
							  
                            </div>
                            <div class="button-group">
                              <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							  onclick="javascript:location.href='urun/<?php echo $coksatan['seo']; ?>'"><i class="icom-shopping-cart1"></i></button>											
      
                              <button type="button" class="wishlist btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $coksatan['id']; ?>'"
							  ><i class="icom-wishlist"></i></button>
                              <button type="button" class="compare btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $coksatan['id']; ?>'"
							  ><i class="icom-compare"></i></button>
                            </div>
                          </div>
                    
                            </div>
                          </div>
                        </div>
                       
<?php } ?>
                            

                      </div>
                      <script type="text/javascript">
                        jQuery(document).ready(function($){
                        	var $tag_id = $('#so_listing_tabs_1304'), 
                        	parent_active = 	$('.items-category-20', $tag_id),
                        	total_product = parent_active.data('total'),
                        	tab_active = $('.ltabs-items-inner',parent_active),
                        	nb_column0 = 4,
                        	nb_column1 = 5,
                        	nb_column2 = 4,
                        	nb_column3 = 2,
                        	nb_column4 = 1;
                        	tab_active.owlCarousel2({
                        		rtl: false,
                        		nav: true,
                        		dots: false,	
                        		margin: 10,
                        		loop:  false,
                        		autoplay: false,
                        		autoplayHoverPause: false,
                        		autoplayTimeout: 5000,
                        		autoplaySpeed: 1000,
                        		mouseDrag: true,
                        		touchDrag: true,
                        		navRewind: true,
                        		navText: [ '', '' ],
                        		responsive: {
                        			0: {
                        				items: nb_column4,
                        				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                        			},
                        			480: {
                        				items: nb_column3,
                        				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                        			},
                        			768: {
                        				items: nb_column2,
                        				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                        			},
                        			992: {
                        				items: nb_column1,
                        				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                        			},
                        			1200: {
                        				items: nb_column0,					
                        				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                        			}
                        		}
                        	});
                        });
                      </script>
                    </div>
                  
                  
                  </div>
                </div>
              </div>
              <script type="text/javascript">
                //<![CDATA[
                jQuery(document).ready(function ($) {
                	;
                	(function (element) {
                		var $element = $(element),
                			$tab = $('.ltabs-tab', $element),
                			$tab_label = $('.ltabs-tab-label', $tab),
                			$tabs = $('.ltabs-tabs', $element),
                			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
                			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
                			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
                			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
                			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
                			$items_content = $('.ltabs-items', $element),
                			$items_inner = $('.ltabs-items-inner', $items_content),
                			$items_first_active = $('.ltabs-items-selected', $element),
                			$load_more = $('.ltabs-loadmore', $element),
                			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
                			$select_box = $('.ltabs-selectbox', $element),
                			$tab_label_select = $('.ltabs-tab-selected', $element),
                			setting = 'a:75:{s:6:"action";s:9:"save_edit";s:4:"name";s:44:"Home 1 - Top 10 Products weekly best sellers";s:18:"module_description";a:2:{i:2;a:2:{s:9:"head_name";s:35:"Top 10 Products weekly best sellers";s:10:"custom_url";s:0:"";}i:1;a:2:{s:9:"head_name";s:35:"Top 10 Products weekly best sellers";s:10:"custom_url";s:0:"";}}s:9:"head_name";s:35:"Top 10 Products weekly best sellers";s:10:"custom_url";s:0:"";s:17:"disp_title_module";s:1:"1";s:6:"status";s:1:"1";s:12:"store_layout";s:8:"default2";s:12:"class_suffix";s:23:"listingtab-layout1-sort";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"4";s:10:"nb_column1";s:1:"5";s:10:"nb_column2";s:1:"4";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"1";s:11:"type_source";s:1:"0";s:8:"category";a:3:{i:0;s:2:"24";i:1;s:3:"158";i:2;s:2:"20";}s:14:"child_category";s:1:"1";s:11:"deal_status";s:1:"0";s:19:"show_datetime_deals";s:1:"0";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:4:"sell";s:16:"product_ordering";s:4:"DESC";s:12:"source_limit";s:2:"12";s:13:"catid_preload";s:2:"20";s:17:"field_product_tab";s:0:"";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"50";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"0";s:14:"display_rating";s:1:"1";s:12:"display_sale";s:1:"0";s:11:"display_new";s:1:"0";s:8:"date_day";s:3:"100";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"300";s:6:"height";s:3:"300";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"0";s:12:"banner_image";s:12:"no_image.png";s:12:"banner_width";s:3:"150";s:13:"banner_height";s:3:"250";s:16:"banner_image_url";s:0:"";s:6:"effect";s:8:"starwars";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"0";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:4:"1304";s:5:"start";i:0;}',
                			type_show = 'slider';
                			
                		enableSelectBoxes();
                		function enableSelectBoxes() {
                			$tab_wrap = $('.ltabs-tabs-wrap', $element),
                				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
                			if ($(window).innerWidth() <= 991) {
                				$tab_wrap.addClass('ltabs-selectbox');
                			} else {
                				$tab_wrap.removeClass('ltabs-selectbox');
                			}
                		}
                
                		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
                			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
                				$('.ltabs-tabs', $element).removeClass('ltabs-open');
                			} else {
                				$('.ltabs-tabs', $element).addClass('ltabs-open');
                			}
                		});
                
                		$(window).resize(function () {
                			if ($(window).innerWidth() <= 991) {
                				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
                			} else {
                				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
                			}
                		});
                
                		function showAnimateItems(el) {
                			var $_items = $('.new-ltabs-item', el), nub = 0;
                			$('.ltabs-loadmore-btn', el).fadeOut('fast');
                			$_items.each(function (i) {
                				nub++;
                				switch(effect) {
                					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
                					default: animatesItems($(this),nub*delay,i,el);
                				}
                				if (i == $_items.length - 1) {
                					$('.ltabs-loadmore-btn', el).fadeIn(3000);
                				}
                				$(this).removeClass('new-ltabs-item');
                			});
                		}
                
                		function animatesItems($this,fdelay,i,el) {
                			var $_items = $('.ltabs-item', el);
                			$this.stop(true, true).attr("style",
                				"-webkit-animation:" + effect +" "+ duration +"ms;"
                				+ "-moz-animation:" + effect +" "+ duration +"ms;"
                				+ "-o-animation:" + effect +" "+ duration +"ms;"
                				+ "-moz-animation-delay:" + fdelay + "ms;"
                				+ "-webkit-animation-delay:" + fdelay + "ms;"
                				+ "-o-animation-delay:" + fdelay + "ms;"
                				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
                					opacity: 1,
                					filter: 'alpha(opacity = 100)'
                				}, {
                					delay: 1000
                				});
                			if (i == ($_items.length - 1)) {
                				$(".ltabs-items-inner").addClass("play");
                			}
                		}
                		if (type_show == 'loadmore') {
                			showAnimateItems($items_first_active);
                		}
                		$tab.on('click.ltabs-tab', function () {
                			var $this = $(this);
                			if ($this.hasClass('tab-sel')) return false;
                			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
                				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
                			}
                			$tab.removeClass('tab-sel');
                			$this.addClass('tab-sel');
                			var items_active = $this.attr('data-active-content-l');
                			var _items_active = $(items_active,$element);
                			$items_content.removeClass('ltabs-items-selected');
                			_items_active.addClass('ltabs-items-selected');
                			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
                			var $loading = $('.ltabs-loading', _items_active);
                			var $text_noproduct = $('.text_noproduct', _items_active);
                			var loaded = _items_active.hasClass('ltabs-items-loaded');
                			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
                			if (!loaded && !_items_active.hasClass('ltabs-process')) {
                				_items_active.addClass('ltabs-process');
                				var category_id 		= $this.attr('data-category-id');
                				$loading.show();
                				$.ajax({
                					type: 'POST',
                					url: ajax_url,
                					data: {
                						is_ajax_listing_tabs: 1,
                						ajax_reslisting_start: 0,
                						categoryid: category_id,
                						setting : setting,
                						lbmoduleid: 1304
                					},
                					success: function (data) {
                						if (data.items_markup != '') {
                							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
                							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
                							$loading.remove();
                							$text_noproduct.remove();
                							if (type_show != 'slider') {
                								showAnimateItems(_items_active);
                							}
                							updateStatus(_items_active);
                						}
                						if(typeof(_SoQuickView) != 'undefined'){
                							_SoQuickView();
                						}
                						
                												
                					},
                					dataType: 'json'
                				});
                
                			} else {
                				if (type_show == 'loadmore') {
                					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
                					showAnimateItems(_items_active);
                				}else{
                					 var owl = $('.owl2-carousel' , _items_active);
                					 owl = owl.data('owlCarousel2');
                					 if (typeof owl !== 'undefined') {
                						owl.onResize();
                					 }
                				}
                			}
                		});
                
                		function updateStatus($el) {
                			$('.ltabs-loadmore-btn', $el).removeClass('loading');
                			var countitem = $('.ltabs-item', $el).length;
                			$('.ltabs-image-loading', $el).css({display: 'none'});
                			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
                			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
                			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
                
                			if (countitem >= rl_total) {
                				$('.ltabs-loadmore-btn', $el).addClass('loaded');
                				$('.ltabs-image-loading', $el).css({display: 'none'});
                				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
                				$('.ltabs-loadmore-btn', $el).removeClass('loading');
                			}
                		}
                
                		$btn_loadmore.on('click.loadmore', function () {
                			var $this = $(this);
                			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
                				return false;
                			} else {
                				$this.addClass('loading');
                				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
                				var rl_start 				= $this.parent().attr('data-rl_start'),
                					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
                					effect 					= $this.parent().attr('data-effect'),
                					category_id 			= $this.parent().attr('data-categoryid'),
                					items_active 			= $this.parent().attr('data-active-content');
                					
                				var _items_active = $(items_active,$element);
                				
                				$.ajax({
                					type: 'POST',
                					url: rl_ajaxurl,
                					data: {
                						is_ajax_listing_tabs: 1,
                						ajax_reslisting_start: rl_start,
                						categoryid: category_id,
                						setting: setting,
                						lbmoduleid: 1304
                					},
                					success: function (data) {
                						if (data.items_markup != '') {
                							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
                							$('.ltabs-image-loading', $this).css({display: 'none'});
                							showAnimateItems(_items_active);
                							updateStatus(_items_active);
                						}
                						if(typeof(_SoQuickView) != 'undefined'){
                							_SoQuickView();
                						}
                					}, dataType: 'json'
                				});
                			}
                			return false;
                		});
                
                			
                	})('#so_listing_tabs_1304');
                });
                //]]>
              </script>
            </div>
          </div>
          <!-- /.modcontent-->
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_m6nf  col-style">
    <div class="banners banners1">
      <div class="row">
        <div class="bn bn1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <a href="<?php echo $tema['t5']; ?>"><img data-sizes="auto" style="width: 600px;height: 200px;" class="lazyload" src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" data-src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="image"></a>
        </div>
        <div class="bn bn2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <a href="<?php echo $tema['t6']; ?>"><img data-sizes="auto" style="width: 600px;height: 200px;" class="lazyload" src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" data-src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" alt="image"></a>
        </div>
      </div>
    </div>
  </div>
  
  
  
  										   
   <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 
  
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_pd00  col-style">
  <script>
    //<![CDATA[
    	var listtabs1352<?php echo $kategorimx['id']; ?> = [];
    //]]>
  </script>	
  <div class="module so-listing-tabs-ltr listingtab-layout1 listtab-custom">
    <h3 class="modtitle"><span><a href="kategori/<?php echo $kategorimx['seo']; ?>"><?php echo $kategorimx['adi']; ?></a></span></h3>
    <div class="modcontent">
      <!--[if lt IE 9]>
      <div id="so_listing_tabs_1352<?php echo $kategorimx['id']; ?>" class="so-listing-tabs msie lt-ie9 first-load module">
        <![endif]-->
        <!--[if IE 9]>
        <div id="so_listing_tabs_1352<?php echo $kategorimx['id']; ?>" class="so-listing-tabs msie first-load module">
          <![endif]-->
          <!--[if gt IE 9]><!-->
          <div id="so_listing_tabs_1352<?php echo $kategorimx['id']; ?>" class="so-listing-tabs first-load module">
            <!--<![endif]-->
            <div class="ltabs-wrap ">
            
              <div class="wap-listing-tabs products-list grid">
           
                <div class="ltabs-items-container">
                  <div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-sell " data-total="10" >
                    <div class="ltabs-items-inner   ltabs-slider ">
					
					
					 <?php 
							$katimiz = $kategorimx['id']; 
							$ukk = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                           
							foreach($ukk as $katurunler){
								?>
					
					
                 
				
                      <div class="product-layout transition product-grid urunduzenx">
                        <div class="product-item-container product-grid-type1 item-1">
                          <div class="left-block">
                            <div class="product-image-container  second_img">
                              <a href="urun/<?php echo $katurunler['seo']; ?>">
                              <img style="width: 230px;height: 230px;" data-sizes="auto" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" data-src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-1 lazyload">
                              
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
			 <img data-sizes="auto" style="width: 230px;height: 230px;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="img-2 lazyload">
             <?php }?>  
			<?php } else { ?>			  
		    <img data-sizes="auto" style="width: 230px;height: 230px;" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" data-src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-2 lazyload">
                              
  				<?php }?>  		  
							  </a>						
                            </div>
							
							<?php if($katurunler['yeni']=='1'){?>
                            <div class="box-label">
                              <span class="label-product label-sale"> Yeni </span>
                            </div>
							<?php } ?>
							
                          </div>
                          <div class="right-block">
                            <h4><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                            <div class="rate-history">
                              <div class="ratings">							
                                
                          
								
								           <?php echo $katurunler['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
								
                              </div>
                            </div>
                            <div class="price">
                             	<?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
							  
					
			<?php if($katurunler['idurum']=='1'){?>
		    <span class="text_off">
			  -%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?> İndirim
			</span>
			<?php } ?>
                                            
							  
							  
                            </div>
                            <div class="button-group">
                              <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							  onclick="javascript:location.href='urun/<?php echo $katurunler['seo']; ?>'"><i class="icom-shopping-cart1"></i></button>											
      
                              <button type="button" class="wishlist btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'"
							  ><i class="icom-wishlist"></i></button>
                              <button type="button" class="compare btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'"
							  ><i class="icom-compare"></i></button>
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
            <script type="text/javascript">
              //<![CDATA[
              jQuery(document).ready(function ($) {
              	;
              	(function (element) {
              		var $element = $(element),
              			$tab = $('.ltabs-tab', $element),
              			$tab_label = $('.ltabs-tab-label', $tab),
              			$tabs = $('.ltabs-tabs', $element),
              			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
              			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
              			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
              			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
              			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
              			$items_content = $('.ltabs-items', $element),
              			$items_inner = $('.ltabs-items-inner', $items_content),
              			$items_first_active = $('.ltabs-items-selected', $element),
              			$load_more = $('.ltabs-loadmore', $element),
              			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
              			$select_box = $('.ltabs-selectbox', $element),
              			$tab_label_select = $('.ltabs-tab-selected', $element),
              			setting = 'a:76:{s:6:"action";s:9:"save_edit";s:4:"name";s:34:"Home 1 - Fashion &amp; Accessories";s:18:"module_description";a:2:{i:2;a:2:{s:9:"head_name";s:25:"Fashion &amp; Accessories";s:10:"custom_url";s:0:"";}i:1;a:2:{s:9:"head_name";s:25:"Fashion &amp; Accessories";s:10:"custom_url";s:0:"";}}s:9:"head_name";s:25:"Fashion &amp; Accessories";s:10:"custom_url";s:0:"";s:17:"disp_title_module";s:1:"1";s:6:"status";s:1:"1";s:12:"store_layout";s:7:"default";s:12:"class_suffix";s:33:"listingtab-layout1 listtab-custom";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"6";s:10:"nb_column1";s:1:"4";s:10:"nb_column2";s:1:"3";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"1";s:11:"type_source";s:1:"1";s:8:"category";a:1:{i:0;s:3:"158";}s:14:"child_category";s:1:"1";s:11:"deal_status";s:1:"0";s:19:"show_datetime_deals";s:1:"0";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:12:"p.date_added";s:16:"product_ordering";s:4:"DESC";s:12:"source_limit";s:1:"6";s:13:"catid_preload";s:3:"158";s:17:"field_product_tab";a:3:{i:0;s:6:"rating";i:1;s:12:"p_date_added";i:2;s:4:"sell";}s:13:"field_preload";s:4:"sell";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"50";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"1";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:3:"100";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"300";s:6:"height";s:3:"300";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"1";s:12:"banner_image";s:27:"catalog/banners/bn-pro1.jpg";s:12:"banner_width";s:3:"230";s:13:"banner_height";s:3:"364";s:16:"banner_image_url";s:45:"index.php?route=product/category&amp;path=158";s:6:"effect";s:4:"none";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"0";s:12:"display_loop";s:1:"0";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"0";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:4:"1352<?php echo $kategorimx['id']; ?>";s:5:"start";i:0;}',
              			type_show = 'slider';
              			
              		enableSelectBoxes();
              		function enableSelectBoxes() {
              			$tab_wrap = $('.ltabs-tabs-wrap', $element),
              				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
              			if ($(window).innerWidth() <= 991) {
              				$tab_wrap.addClass('ltabs-selectbox');
              			} else {
              				$tab_wrap.removeClass('ltabs-selectbox');
              			}
              		}
              
              		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
              			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
              				$('.ltabs-tabs', $element).removeClass('ltabs-open');
              			} else {
              				$('.ltabs-tabs', $element).addClass('ltabs-open');
              			}
              		});
              
              		$(window).resize(function () {
              			if ($(window).innerWidth() <= 991) {
              				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
              			} else {
              				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
              			}
              		});
              
              		function showAnimateItems(el) {
              			var $_items = $('.new-ltabs-item', el), nub = 0;
              			$('.ltabs-loadmore-btn', el).fadeOut('fast');
              			$_items.each(function (i) {
              				nub++;
              				switch(effect) {
              					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
              					default: animatesItems($(this),nub*delay,i,el);
              				}
              				if (i == $_items.length - 1) {
              					$('.ltabs-loadmore-btn', el).fadeIn(3000);
              				}
              				$(this).removeClass('new-ltabs-item');
              			});
              		}
              
              		function animatesItems($this,fdelay,i,el) {
              			var $_items = $('.ltabs-item', el);
              			$this.stop(true, true).attr("style",
              				"-webkit-animation:" + effect +" "+ duration +"ms;"
              				+ "-moz-animation:" + effect +" "+ duration +"ms;"
              				+ "-o-animation:" + effect +" "+ duration +"ms;"
              				+ "-moz-animation-delay:" + fdelay + "ms;"
              				+ "-webkit-animation-delay:" + fdelay + "ms;"
              				+ "-o-animation-delay:" + fdelay + "ms;"
              				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
              					opacity: 1,
              					filter: 'alpha(opacity = 100)'
              				}, {
              					delay: 1000
              				});
              			if (i == ($_items.length - 1)) {
              				$(".ltabs-items-inner").addClass("play");
              			}
              		}
              		if (type_show == 'loadmore') {
              			showAnimateItems($items_first_active);
              		}
              		$tab.on('click.ltabs-tab', function () {
              			var $this = $(this);
              			if ($this.hasClass('tab-sel')) return false;
              			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
              				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
              			}
              			$tab.removeClass('tab-sel');
              			$this.addClass('tab-sel');
              			var items_active = $this.attr('data-active-content-l');
              			var _items_active = $(items_active,$element);
              			$items_content.removeClass('ltabs-items-selected');
              			_items_active.addClass('ltabs-items-selected');
              			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
              			var $loading = $('.ltabs-loading', _items_active);
              			var $text_noproduct = $('.text_noproduct', _items_active);
              			var loaded = _items_active.hasClass('ltabs-items-loaded');
              			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
              			if (!loaded && !_items_active.hasClass('ltabs-process')) {
              				_items_active.addClass('ltabs-process');
              				var category_id 		= $this.attr('data-category-id');
              				$loading.show();
              				$.ajax({
              					type: 'POST',
              					url: ajax_url,
              					data: {
              						is_ajax_listing_tabs: 1,
              						ajax_reslisting_start: 0,
              						categoryid: category_id,
              						setting : setting,
              						lbmoduleid: 1352<?php echo $kategorimx['id']; ?>
              					},
              					success: function (data) {
              						if (data.items_markup != '') {
              							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
              							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
              							$loading.remove();
              							$text_noproduct.remove();
              							if (type_show != 'slider') {
              								showAnimateItems(_items_active);
              							}
              							updateStatus(_items_active);
              						}
              						if(typeof(_SoQuickView) != 'undefined'){
              							_SoQuickView();
              						}
              						
              												
              					},
              					dataType: 'json'
              				});
              
              			} else {
              				if (type_show == 'loadmore') {
              					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
              					showAnimateItems(_items_active);
              				}else{
              					 var owl = $('.owl2-carousel' , _items_active);
              					 owl = owl.data('owlCarousel2');
              					 if (typeof owl !== 'undefined') {
              						owl.onResize();
              					 }
              				}
              			}
              		});
              
              		function updateStatus($el) {
              			$('.ltabs-loadmore-btn', $el).removeClass('loading');
              			var countitem = $('.ltabs-item', $el).length;
              			$('.ltabs-image-loading', $el).css({display: 'none'});
              			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
              			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
              			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
              			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
              
              			if (countitem >= rl_total) {
              				$('.ltabs-loadmore-btn', $el).addClass('loaded');
              				$('.ltabs-image-loading', $el).css({display: 'none'});
              				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
              				$('.ltabs-loadmore-btn', $el).removeClass('loading');
              			}
              		}
              
              		$btn_loadmore.on('click.loadmore', function () {
              			var $this = $(this);
              			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
              				return false;
              			} else {
              				$this.addClass('loading');
              				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
              				var rl_start 				= $this.parent().attr('data-rl_start'),
              					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
              					effect 					= $this.parent().attr('data-effect'),
              					category_id 			= $this.parent().attr('data-categoryid'),
              					items_active 			= $this.parent().attr('data-active-content');
              					
              				var _items_active = $(items_active,$element);
              				
              				$.ajax({
              					type: 'POST',
              					url: rl_ajaxurl,
              					data: {
              						is_ajax_listing_tabs: 1,
              						ajax_reslisting_start: rl_start,
              						categoryid: category_id,
              						setting: setting,
              						lbmoduleid: 1352<?php echo $kategorimx['id']; ?>
              					},
              					success: function (data) {
              						if (data.items_markup != '') {
              							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
              							$('.ltabs-image-loading', $this).css({display: 'none'});
              							showAnimateItems(_items_active);
              							updateStatus(_items_active);
              						}
              						if(typeof(_SoQuickView) != 'undefined'){
              							_SoQuickView();
              						}
              					}, dataType: 'json'
              				});
              			}
              			return false;
              		});
              
              			
              	})('#so_listing_tabs_1352<?php echo $kategorimx['id']; ?>');
              });
              //]]>
            </script>
          </div>
        </div>
        <!-- /.modcontent-->
      </div>
    </div>
	
	
	
	
	
	
	<?php } ?>	
	
	
	
	
    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_yfvo  col-style">
          <script>
            //<![CDATA[
            	var listtabs1362 = [];
            //]]>
          </script>	
          <div class="module so-listing-tabs-ltr listingtab1">
            <div class="modcontent">
              <!--[if lt IE 9]>
              <div id="so_listing_tabs_1362" class="so-listing-tabs msie lt-ie9 first-load module">
                <![endif]-->
                <!--[if IE 9]>
                <div id="so_listing_tabs_1362" class="so-listing-tabs msie first-load module">
                  <![endif]-->
                  <!--[if gt IE 9]><!-->
                  <div id="so_listing_tabs_1362" class="so-listing-tabs first-load module">
                    <!--<![endif]-->
                    <div class="ltabs-wrap ">
                      <div class="ltabs-tabs-container" data-delay="500"
                        data-duration="800"
                        data-effect="none"
                       data-type_source="1"
                        data-type_show="slider" >
                        <div class="ltabs-tabs-wrap">
                          <span class='ltabs-tab-selected'></span>
                          <span class="ltabs-tab-arrow">▼</span>
                          <ul class="ltabs-tabs cf list-sub-cat font-title">
                            <li class="ltabs-tab   tab-sel tab-loaded "
                              data-category-id="p_date_added"
                              data-active-content-l=".items-category-p_date_added">
                              <span class="ltabs-tab-label">
                             Sizin İçin Seçtiklerimiz
                              </span>
                            </li>
                          
                          </ul>
                        </div>
                      </div>
                      <div class="wap-listing-tabs products-list grid">
                        <div class="ltabs-items-container">
                          <div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-p_date_added " data-total="25" >
                            <div class="ltabs-items-inner owl2-carousel  ltabs-slider ">
                  
				  
				  		     			<?php $grzszz = $ozy->query("select * from urunler where durum='1' and agoster='1' order by sira DESC limit 16")->fetchAll(PDO::FETCH_ASSOC); 
                           

                            $sayacx =0;
							foreach($grzszz as $agoster){
                            $sayacx++;
                            if ($sayacx==1){
                            echo ' <div class="ltabs-item ">';
                            }?>

						                        
																 			  
							  
							  
							  
				 
                      <div class="product-layout transition product-grid">
                        <div class="product-item-container product-grid-type1 item-1">
                          <div class="left-block">
                            <div class="product-image-container  second_img">
                              <a href="urun/<?php echo $agoster['seo']; ?>">
                              <img style="width: 115px;height: 115px;" data-sizes="auto" src="resimler/urunler/<?php echo $agoster['resim']; ?>" data-src="resimler/urunler/<?php echo $agoster['resim']; ?>" class="img-1 lazyload">
                              
							  	 <?php 
			 $sayfaidm = $agoster['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
												<?php 
			 $gelenid = $agoster['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
			 <img data-sizes="auto" style="width: 115px;height: 115px;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="img-2 lazyload">
             <?php }?>  
			<?php } else { ?>			  
		    <img data-sizes="auto" style="width: 115px;height: 115px;" src="resimler/urunler/<?php echo $agoster['resim']; ?>" data-src="resimler/urunler/<?php echo $agoster['resim']; ?>" class="img-2 lazyload">
                              
  				<?php }?>  		  
							  </a>						
                            </div>
							
							<?php if($agoster['yeni']=='1'){?>
                            <div class="box-label">
                              <span class="label-product label-sale"> Yeni </span>
                            </div>
							<?php } ?>
							
                          </div>
                          <div class="right-block">
                            <h4><a href="urun/<?php echo $agoster['seo']; ?>"><?php echo $agoster['adi']; ?></a></h4>
                            <div class="rate-history">
                              <div class="ratings">							
                                
                          
								
								           <?php echo $agoster['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $agoster['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $agoster['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $agoster['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $agoster['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
								
                              </div>
                            </div>
                            <div class="price">
                             	<?php echo urunfiyatbelirle($agoster['kdv'],$agoster['idurum'],$agoster['fiyat'],$agoster['ifiyat']);?>
											
							  
					
			<?php if($agoster['idurum']=='1'){?>
		    <span class="text_off">
			  -%<?php echo yuzdeHesaplama($agoster['fiyat'],$agoster['ifiyat']);?> İndirim
			</span>
			<?php } ?>
                                            
							  
							  
                            </div>
                            <div class="button-group">
                              <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							  onclick="javascript:location.href='urun/<?php echo $agoster['seo']; ?>'"><i class="icom-shopping-cart1"></i></button>											
      
                              <button type="button" class="wishlist btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $agoster['id']; ?>'"
							  ><i class="icom-wishlist"></i></button>
                              <button type="button" class="compare btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $agoster['id']; ?>'"
							  ><i class="icom-compare"></i></button>
                            </div>
                          </div>
                     
                        </div>
                      </div>
                   
							  
							  
						<?php if ($sayacx==2) {

																		echo '</div>';

																		$sayacx=0;

																	} ?>	
				  <?php } ?>
				  
				  
                            </div>
                            <script type="text/javascript">
                              jQuery(document).ready(function($){
                              	var $tag_id = $('#so_listing_tabs_1362'), 
                              	parent_active = 	$('.items-category-p_date_added', $tag_id),
                              	total_product = parent_active.data('total'),
                              	tab_active = $('.ltabs-items-inner',parent_active),
                              	nb_column0 = 4,
                              	nb_column1 = 3,
                              	nb_column2 = 2,
                              	nb_column3 = 2,
                              	nb_column4 = 1;
                              	tab_active.owlCarousel2({
                              		rtl: false,
                              		nav: true,
                              		dots: true,	
                              		margin: 0,
                              		loop:  true,
                              		autoplay: false,
                              		autoplayHoverPause: false,
                              		autoplayTimeout: 5000,
                              		autoplaySpeed: 1000,
                              		mouseDrag: true,
                              		touchDrag: true,
                              		navRewind: true,
                              		navText: [ '', '' ],
                              		responsive: {
                              			0: {
                              				items: nb_column4,
                              				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                              			},
                              			480: {
                              				items: nb_column3,
                              				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                              			},
                              			768: {
                              				items: nb_column2,
                              				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                              			},
                              			992: {
                              				items: nb_column1,
                              				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                              			},
                              			1200: {
                              				items: nb_column0,					
                              				nav: total_product <= nb_column0 ? false : ((true) ? true: false),
                              			}
                              		}
                              	});
                              });
                            </script>
                          </div>
                          <div class="products-list ltabs-items  items-category-rating " data-total="25" >
                            <div class="ltabs-loading" style="display: none"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      //<![CDATA[
                      jQuery(document).ready(function ($) {
                      	;
                      	(function (element) {
                      		var $element = $(element),
                      			$tab = $('.ltabs-tab', $element),
                      			$tab_label = $('.ltabs-tab-label', $tab),
                      			$tabs = $('.ltabs-tabs', $element),
                      			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
                      			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
                      			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
                      			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
                      			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
                      			$items_content = $('.ltabs-items', $element),
                      			$items_inner = $('.ltabs-items-inner', $items_content),
                      			$items_first_active = $('.ltabs-items-selected', $element),
                      			$load_more = $('.ltabs-loadmore', $element),
                      			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
                      			$select_box = $('.ltabs-selectbox', $element),
                      			$tab_label_select = $('.ltabs-tab-selected', $element),
                      			setting = 'a:76:{s:6:"action";s:9:"save_edit";s:4:"name";s:27:"Home 1 - listing tab fields";s:18:"module_description";a:2:{i:2;a:2:{s:9:"head_name";s:18:"listing tab fields";s:10:"custom_url";s:0:"";}i:1;a:2:{s:9:"head_name";s:18:"listing tab fields";s:10:"custom_url";s:0:"";}}s:9:"head_name";s:18:"listing tab fields";s:10:"custom_url";s:0:"";s:17:"disp_title_module";s:1:"0";s:6:"status";s:1:"1";s:12:"store_layout";s:7:"default";s:12:"class_suffix";s:11:"listingtab1";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"4";s:10:"nb_column1";s:1:"3";s:10:"nb_column2";s:1:"2";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"2";s:11:"type_source";s:1:"1";s:8:"category";a:4:{i:0;s:2:"24";i:1;s:3:"158";i:2;s:2:"25";i:3;s:2:"20";}s:14:"child_category";s:1:"1";s:11:"deal_status";s:1:"0";s:19:"show_datetime_deals";s:1:"0";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:12:"p.date_added";s:16:"product_ordering";s:3:"ASC";s:12:"source_limit";s:2:"12";s:13:"catid_preload";s:2:"24";s:17:"field_product_tab";a:2:{i:0;s:6:"rating";i:1;s:12:"p_date_added";}s:13:"field_preload";s:12:"p_date_added";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"50";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"0";s:14:"display_rating";s:1:"1";s:12:"display_sale";s:1:"0";s:11:"display_new";s:1:"0";s:8:"date_day";s:1:"7";s:17:"product_image_num";s:1:"1";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"200";s:6:"height";s:3:"200";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"0";s:12:"banner_image";s:12:"no_image.png";s:12:"banner_width";s:3:"150";s:13:"banner_height";s:3:"250";s:16:"banner_image_url";s:0:"";s:6:"effect";s:4:"none";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"1";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:4:"1362";s:5:"start";i:0;}',
                      			type_show = 'slider';
                      			
                      		enableSelectBoxes();
                      		function enableSelectBoxes() {
                      			$tab_wrap = $('.ltabs-tabs-wrap', $element),
                      				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
                      			if ($(window).innerWidth() <= 991) {
                      				$tab_wrap.addClass('ltabs-selectbox');
                      			} else {
                      				$tab_wrap.removeClass('ltabs-selectbox');
                      			}
                      		}
                      
                      		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
                      			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
                      				$('.ltabs-tabs', $element).removeClass('ltabs-open');
                      			} else {
                      				$('.ltabs-tabs', $element).addClass('ltabs-open');
                      			}
                      		});
                      
                      		$(window).resize(function () {
                      			if ($(window).innerWidth() <= 991) {
                      				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
                      			} else {
                      				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
                      			}
                      		});
                      
                      		function showAnimateItems(el) {
                      			var $_items = $('.new-ltabs-item', el), nub = 0;
                      			$('.ltabs-loadmore-btn', el).fadeOut('fast');
                      			$_items.each(function (i) {
                      				nub++;
                      				switch(effect) {
                      					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
                      					default: animatesItems($(this),nub*delay,i,el);
                      				}
                      				if (i == $_items.length - 1) {
                      					$('.ltabs-loadmore-btn', el).fadeIn(3000);
                      				}
                      				$(this).removeClass('new-ltabs-item');
                      			});
                      		}
                      
                      		function animatesItems($this,fdelay,i,el) {
                      			var $_items = $('.ltabs-item', el);
                      			$this.stop(true, true).attr("style",
                      				"-webkit-animation:" + effect +" "+ duration +"ms;"
                      				+ "-moz-animation:" + effect +" "+ duration +"ms;"
                      				+ "-o-animation:" + effect +" "+ duration +"ms;"
                      				+ "-moz-animation-delay:" + fdelay + "ms;"
                      				+ "-webkit-animation-delay:" + fdelay + "ms;"
                      				+ "-o-animation-delay:" + fdelay + "ms;"
                      				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
                      					opacity: 1,
                      					filter: 'alpha(opacity = 100)'
                      				}, {
                      					delay: 1000
                      				});
                      			if (i == ($_items.length - 1)) {
                      				$(".ltabs-items-inner").addClass("play");
                      			}
                      		}
                      		if (type_show == 'loadmore') {
                      			showAnimateItems($items_first_active);
                      		}
                      		$tab.on('click.ltabs-tab', function () {
                      			var $this = $(this);
                      			if ($this.hasClass('tab-sel')) return false;
                      			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
                      				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
                      			}
                      			$tab.removeClass('tab-sel');
                      			$this.addClass('tab-sel');
                      			var items_active = $this.attr('data-active-content-l');
                      			var _items_active = $(items_active,$element);
                      			$items_content.removeClass('ltabs-items-selected');
                      			_items_active.addClass('ltabs-items-selected');
                      			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
                      			var $loading = $('.ltabs-loading', _items_active);
                      			var $text_noproduct = $('.text_noproduct', _items_active);
                      			var loaded = _items_active.hasClass('ltabs-items-loaded');
                      			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
                      			if (!loaded && !_items_active.hasClass('ltabs-process')) {
                      				_items_active.addClass('ltabs-process');
                      				var category_id 		= $this.attr('data-category-id');
                      				$loading.show();
                      				$.ajax({
                      					type: 'POST',
                      					url: ajax_url,
                      					data: {
                      						is_ajax_listing_tabs: 1,
                      						ajax_reslisting_start: 0,
                      						categoryid: category_id,
                      						setting : setting,
                      						lbmoduleid: 1362
                      					},
                      					success: function (data) {
                      						if (data.items_markup != '') {
                      							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
                      							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
                      							$loading.remove();
                      							$text_noproduct.remove();
                      							if (type_show != 'slider') {
                      								showAnimateItems(_items_active);
                      							}
                      							updateStatus(_items_active);
                      						}
                      						if(typeof(_SoQuickView) != 'undefined'){
                      							_SoQuickView();
                      						}
                      						
                      												
                      					},
                      					dataType: 'json'
                      				});
                      
                      			} else {
                      				if (type_show == 'loadmore') {
                      					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
                      					showAnimateItems(_items_active);
                      				}else{
                      					 var owl = $('.owl2-carousel' , _items_active);
                      					 owl = owl.data('owlCarousel2');
                      					 if (typeof owl !== 'undefined') {
                      						owl.onResize();
                      					 }
                      				}
                      			}
                      		});
                      
                      		function updateStatus($el) {
                      			$('.ltabs-loadmore-btn', $el).removeClass('loading');
                      			var countitem = $('.ltabs-item', $el).length;
                      			$('.ltabs-image-loading', $el).css({display: 'none'});
                      			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                      			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
                      			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
                      			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');
                      
                      			if (countitem >= rl_total) {
                      				$('.ltabs-loadmore-btn', $el).addClass('loaded');
                      				$('.ltabs-image-loading', $el).css({display: 'none'});
                      				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
                      				$('.ltabs-loadmore-btn', $el).removeClass('loading');
                      			}
                      		}
                      
                      		$btn_loadmore.on('click.loadmore', function () {
                      			var $this = $(this);
                      			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
                      				return false;
                      			} else {
                      				$this.addClass('loading');
                      				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
                      				var rl_start 				= $this.parent().attr('data-rl_start'),
                      					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
                      					effect 					= $this.parent().attr('data-effect'),
                      					category_id 			= $this.parent().attr('data-categoryid'),
                      					items_active 			= $this.parent().attr('data-active-content');
                      					
                      				var _items_active = $(items_active,$element);
                      				
                      				$.ajax({
                      					type: 'POST',
                      					url: rl_ajaxurl,
                      					data: {
                      						is_ajax_listing_tabs: 1,
                      						ajax_reslisting_start: rl_start,
                      						categoryid: category_id,
                      						setting: setting,
                      						lbmoduleid: 1362
                      					},
                      					success: function (data) {
                      						if (data.items_markup != '') {
                      							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
                      							$('.ltabs-image-loading', $this).css({display: 'none'});
                      							showAnimateItems(_items_active);
                      							updateStatus(_items_active);
                      						}
                      						if(typeof(_SoQuickView) != 'undefined'){
                      							_SoQuickView();
                      						}
                      					}, dataType: 'json'
                      				});
                      			}
                      			return false;
                      		});
                      
                      			
                      	})('#so_listing_tabs_1362');
                      });
                      //]]>
                    </script>
                  </div>
                </div>
                <!-- /.modcontent-->
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_b998  col-style">
              <div class="module custom-content-w ">
                <h2>                   </h2>
                <div class="block-custom-content">
                  <div class="row">
                    <div class="item item1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="item-inner">
                        <a class="buzz-out-on-hover">
						<img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="<?php echo $sitetemasi;?>/image/f1.png" alt="image"></a>
                        <div class="b-content">
                          <h3><a>Konumumuz</a></h3>
                          <p>Dilerseniz konumuzdan bizleri ziyaret edebilirsiniz</p>
                          <a class="viewmore" href="iletisim/">Neredeyiz</a>
                        </div>
                      </div>
                    </div>
                    <div class="item item2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="item-inner">
                        <a class="buzz-out-on-hover"><img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="<?php echo $sitetemasi;?>/image/f2.png" alt="image"></a>
                        <div class="b-content">
                          <h3><a>Güvenli Alışveriş</a></h3>
                          <p>256 Bit SSL Şifreleme</p>
                          <a class="viewmore">Güvendesiniz</a>
                        </div>
                      </div>
                    </div>
                    <div class="item item3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="item-inner">
                        <a class="buzz-out-on-hover"><img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="<?php echo $sitetemasi;?>/image/f3.png" alt="image"></a>
                        <div class="b-content">
                          <h3><a>Ücretsiz Kargo İmkanı</a></h3>
                          <p><?php echo $system['ucretsizkargo']; ?> TL ve üzeri</p>
                          <a class="viewmore">Kargo Bizden</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_37kd  col-style">
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
 
        
        jQuery(document).ready(function ($) {
        	_SoQuickView();
        	// Hide tooltip when clicking on it
        	var hasTooltip = $("[data-toggle='tooltip']").tooltip({container: 'body'});
        	hasTooltip.on('click', function () {
        			$(this).tooltip('hide')
        	});
        });
        
        
      </script>
     
     
    </div>
    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
    <meta name=”author” content=”Medyaweb.NET”>
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	



      <div id="content" class="">
	  
        <div class="so-page-builder">
          <div class="container page-builder-ltr">
            <div class="row row_i4fp  content-top ">
			
			<?php require('hikaye.php');?> 
			
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_bxl4  main-left">
                <div class="row row_ybhn  row-megamenu ">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6d8l col-menu1">
                    <div class="responsive megamenu-style-dev">
                      <div class="so-vertical-menu no-gutter">
                        <nav class="navbar-default">
                          <div class=" container-megamenu  container   vertical  ">
                            <div id="menuHeading">
                              <div class="megamenuToogle-wrapper">
                                <div class="megamenuToogle-pattern">
                                  <div class="container">
                                    <div><span></span><span></span><span></span><span></span></div>
                                   Tüm Kategorilerimiz              
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="navbar-header">
                              <button type="button" id="show-verticalmenu" data-toggle="collapse"  class="navbar-toggle">
                                <!-- <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span> -->
                                <i class="fa fa-bars"></i>
                                <span> Tüm Kategorilerimiz                 </span>
                              </button>
                            </div>
                            <div class="vertical-wrapper">
                              <span id="remove-verticalmenu" class="fa fa-times"></span>
                              <div class="megamenu-pattern">
                                <div class="container">
                                  <ul class="megamenu"
                                    data-transition="slide" data-animationtime="300">
                              
							  			  			<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
						  
                     
                        
                          <li class="item-vertical css-menu with-sub-menu hover">
                            <p class='close-menu'></p>
                            <a href="kategori/<?php echo $katadi['seo']; ?>">
                            <span>
                            <strong>
							
							<img style="<?php echo $katadi['nikon'] == '0' ? 'display:none;' : null; ?>width: 16px;height: 16px;max-width: 16px;position: initial;float: left;margin-right: 6px;margin-top: 3px;" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>"></img> <?php echo $katadi['adi']; ?>
											
							
							
							</strong>
                            </span>
                            <b class="fa fa-angle-right"></b>
                            </a>
                            <div class="sub-menu" style="width:280px">
                              <div class="content">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="categories ">
                                      <div class="row">
                                        <div class="col-sm-12 hover-menu">
                                          <div class="menu">
                                            <ul>
											
														<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' and ac='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>		
								
                                              <li>
                                                <a href="kategori/<?php echo $katadi2['seo']; ?>" onclick="window.location = 'kategori/<?php echo $katadi2['seo']; ?>'" class="main-menu">
												<?php echo $katadi2['adi']; ?><b class="fa fa-angle-right"></b></a>
                                                <ul>
				            				<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>									
												
												
                                                  <li><a href="kategori/<?php echo $katadi22['seo']; ?>" onclick="window.location = 'kategori/<?php echo $katadi22['seo']; ?>'"><?php echo $katadi22['adi']; ?></a></li>
                                                  <?php } ?>	
												
												</ul>
                                              </li>
											  
											    <?php } ?>	
											  
                                          
                                           
										   
										   
										   
										   </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                     
                         <?php } else { ?>		  
						   
                         
                         
                          <li class="item-vertical">
                            <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix">
                            <span>
                            <strong>		<img style="<?php echo $katadi['nikon'] == '0' ? 'display:none;' : null; ?>width: 16px;height: 16px;max-width: 16px;position: initial;float: left;margin-right: 6px;margin-top: 3px;" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>"></img> <?php echo $katadi['adi']; ?></strong>
                            </span>
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
                    <script type="text/javascript">
                      $(document).ready(function() {
                      	var itemver =  11;
                      	if(itemver <= $( ".vertical ul.megamenu >li" ).length)
                      		$('.vertical ul.megamenu').append('<li class="loadmore"><i class="fa fa-plus-square"></i><span class="more-view"> Tüm Kategorilerimiz</span></li>');
                      	$('.horizontal ul.megamenu li.loadmore').remove();
                      
                      	var show_itemver = itemver-1 ;
                      	$('ul.megamenu > li.item-vertical').each(function(i){
                      		if(i>show_itemver){
                      				$(this).css('display', 'none');
                      		}
                      	});
                      	$(".megamenu .loadmore").click(function(){
                      		if($(this).hasClass('open')){
                      			$('ul.megamenu li.item-vertical').each(function(i){
                      				if(i>show_itemver){
                      					$(this).slideUp(200);
                      					$(this).css('display', 'none');
                      				}
                      			});
                      			$(this).removeClass('open');
                      			$('.loadmore').html('<i class="fa fa-plus-square"></i><span class="more-view">Tüm Kategorilerimiz</span>');
                      		}else{
                      			$('ul.megamenu li.item-vertical').each(function(i){
                      				if(i>show_itemver){
                      					$(this).slideDown(200);
                      				}
                      			});
                      			$(this).addClass('open');
                      			$('.loadmore').html('<i class="fa fa-minus-square"></i><span class="more-view">Kategorileri Kapat</span>');
                      		}
                      	});
                      });
                    </script>
                 
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_tojp  main-right">
                <div class="row row_3kdz  ">
                  <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col_bj7o col2">
                    <div class="row row_2tr4  row-style ">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_606u col-style">
                        <div class="module sohomepage-slider ">
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
                                    animateOut: 'fadeOut',
                                    animateIn: 'fadeIn',
                                    autoplay: false,
                                    autoplayTimeout: 5000,
                                    autoplaySpeed:  1000,
                                    smartSpeed: 500,
                                    autoplayHoverPause: true,
                                    startPosition: 0,
                                    mouseDrag:  true,
                                    touchDrag: true,
                                    dots: true,
                                    autoWidth: false,
                                    dotClass: "owl2-dot",
                                    dotsClass: "owl2-dots",
                                    loop: true,
                                    navText: ["Next", "Prev"],
                                    navClass: ["owl2-prev", "owl2-next"],
                                //  dotsContainer: '#carousel-custom-dots',
                                    responsive: {
                                    0:{ items: 1,
                                      nav: total_item <= 1 ? false : ((false ) ? true: false),
                                    },
                                    480:{ items: 1,
                                      nav: total_item <= 1 ? false : ((false ) ? true: false),
                                    },
                                    768:{ items: 1,
                                      nav: total_item <= 1 ? false : ((false ) ? true: false),
                                    },
                                    992:{ items: 1,
                                      nav: total_item <= 1 ? false : ((false ) ? true: false),
                                    },
                                    1200:{ items: 1,
                                      nav: total_item <= 1 ? false : ((false ) ? true: false),
                                    }
                                  },
                                });
                                
                                
                              </script>
                            </div>
                          </div>
                          <!--/.modcontent-->
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_gbcs col-style">
                        <div class="banners banners1">
                          <div class="row">
						  	 <?php $sliderx = $ozy->query("select * from kampanyalar where durum='1' order by sira desc limit 4")->fetchAll(PDO::FETCH_ASSOC); 
                                             foreach($sliderx as $demox){?> 
						  
						  
                            <div class="bn bn1 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <a href="<?php if($demox['link']=='0'){?>kampanya/<?php echo $demox['seo']; ?><?php } else { ?><?php echo $demox['link']; ?><?php } ?>">
							  <img style="width: 188px;height: 110px;" data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="resimler/kampanyalar/<?php echo $demox['resim']; ?>" alt="banner"></a>
                            </div>
                           <?php } ?> 	
					   
					   
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_jb98 col3">
                    <div class="module so-extraslider-ltr product-simple simple1">
                      <h3 class="modtitle">
                        <a><span>Günün Fırsatı</span></a>
                      </h3>
                      <div class="modcontent">
                        <div id="so_extra_slider_15652241581633896506" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                          <!-- Begin extraslider-inner -->
                          <div class="extraslider-inner products-list" data-effect="none">
                           
	                      
					
							
						  <?php $gr = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                           $sayac =0;
							foreach($gr as $gfirsat){
                            $sayac++;
                            if ($sayac==1){
                            echo ' <div class="item">';
                            }
                          
						   ?>	

                              <div class="product-layout item-inner style1 ">
                                <div class="item-image">
                                  <div class="item-img-info">
                                    <div class="box-label">
                                    </div>
                                    <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                       <img style="width: 80px;height: 95px;" data-sizes="auto" src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" data-src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" class="img-1 lazyload">
                              
                                    </a>
                                  </div>
                                 
                                </div>
                                <div class="item-info">
                                  <div class="item-title">
                                   <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                 <?php echo $gfirsat['adi']; ?>
                                    </a>
                                  </div>
                                  <div class="rating">
                                      <?php echo $gfirsat['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $gfirsat['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
                                  </div>
                                  <div  class="content_price price">
                                   	<?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
									
                                  </div>
                                </div>
                                <!-- End item-info -->
                                <!-- End item-wrap-inner -->
                              </div>
							  	<?php if ($sayac==5) {

																		echo '</div>';

																		$sayac=0;

																	} ?>
							<?php } ?>	
                     

												
					
						
                          </div>
                          <!--End extraslider-inner -->
                          <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                            	(function (element) {
                            		var $element = $(element),
                            				$extraslider = $(".extraslider-inner", $element),
                            				_delay = 500 ,
                            				_duration = 800 ,
                            				_effect = 'none ';
                            
                            		$extraslider.on("initialized.owl.carousel2", function () {
                            			var $item_active = $(".owl2-item.active", $element);
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			}
                            			else {
                            				var $item = $(".owl2-item", $element);
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            			}
                            			 
                            			if ($(".owl2-dot", $element).length < 2) {
                            				$(".owl2-prev", $element).css("display", "none");
                            				$(".owl2-next", $element).css("display", "none");
                            				$(".owl2-dot", $element).css("display", "none");
                            			}
                            			
                            			 
                            				$(".owl2-controls", $element).insertBefore($extraslider);
                            				$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
                            			
                            		});
                            
                            		$extraslider.owlCarousel2({
                            			rtl: false,
                            			margin: 0,
                            			slideBy: 1,
                            			autoplay: 0,
                            			autoplayHoverPause: 0,
                            			autoplayTimeout: 0 ,
                            			autoplaySpeed: 1000 ,
                            			startPosition: 0 ,
                            			mouseDrag: 1,
                            			touchDrag: 1 ,
                            			autoWidth: false,
                            			responsive: {
                            				0: 	{ items: 2 } ,
                            				480: { items: 2 },
                            				768: { items: 2 },
                            				992: { items: 2 },
                            				1200: {items: 1}
                            			},
                            			dotClass: "owl2-dot",
                            			dotsClass: "owl2-dots",
                            			dots: true ,
                            			dotsSpeed:500 ,
                            			nav: false ,
                            			loop: true ,
                            			navSpeed: 500 ,
                            			navText: ["&#171 ", "&#187 "],
                            			navClass: ["owl2-prev", "owl2-next"]
                            
                            		});
                            
                            		$extraslider.on("translate.owl.carousel2", function (e) {
                            			 
                            			if ($(".owl2-dot", $element).length < 2) {
                            				$(".owl2-prev", $element).css("display", "none");
                            				$(".owl2-next", $element).css("display", "none");
                            				$(".owl2-dot", $element).css("display", "none");
                            			}
                            			 
                            
                            			var $item_active = $(".owl2-item.active", $element);
                            			_UngetAnimate($item_active);
                            			_getAnimate($item_active);
                            		});
                            
                            		$extraslider.on("translated.owl.carousel2", function (e) {
                            
                            			 
                            			if ($(".owl2-dot", $element).length < 2) {
                            				$(".owl2-prev", $element).css("display", "none");
                            				$(".owl2-next", $element).css("display", "none");
                            				$(".owl2-dot", $element).css("display", "none");
                            			}
                            			 
                            
                            			var $item_active = $(".owl2-item.active", $element);
                            			var $item = $(".owl2-item", $element);
                            
                            			_UngetAnimate($item);
                            
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			} else {
                            
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            
                            			}
                            		});
                            
                            		function _getAnimate($el) {
                            			if (_effect == "none") return;
                            			//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                            			$extraslider.removeClass("extra-animate");
                            			$el.each(function (i) {
                            				var $_el = $(this);
                            				$(this).css({
                            					"-webkit-animation": _effect + " " + _duration + "ms ease both",
                            					"-moz-animation": _effect + " " + _duration + "ms ease both",
                            					"-o-animation": _effect + " " + _duration + "ms ease both",
                            					"animation": _effect + " " + _duration + "ms ease both",
                            					"-webkit-animation-delay": +i * _delay + "ms",
                            					"-moz-animation-delay": +i * _delay + "ms",
                            					"-o-animation-delay": +i * _delay + "ms",
                            					"animation-delay": +i * _delay + "ms",
                            					"opacity": 1
                            				}).animate({
                            					opacity: 1
                            				});
                            
                            				if (i == $el.size() - 1) {
                            					$extraslider.addClass("extra-animate");
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
                            					"opacity": 1
                            				});
                            			});
                            		}
                            
                            	})("#so_extra_slider_15652241581633896506 ");
                            });
                            //]]>
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container page-builder-ltr">
            <div class="row row_8wyu  row-main ">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_2pay  main-left">
                <div class="row row_j8hh  inner ">
                  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 col_zxaf col-style">
                    <div class="module so-extraslider-ltr product-simple simple2">
                      <h3 class="modtitle">
                        <span>Popüler Ürünler</span>
                      </h3>
                      <div class="modcontent">
                        <div id="so_extra_slider_13350955981633896506" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                          <!-- Begin extraslider-inner -->
                          <div class="extraslider-inner products-list" data-effect="none">
                       
                           <?php $grz = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            $sayac =0;
							foreach($grz as $pop){
                            $sayac++;
                            if ($sayac==0){
                         
                            }
                          
						   ?>	

                              <div class="product-layout item-inner style1 ">
                                <div class="item-image">
                                  <div class="item-img-info">
                                    <div class="box-label">
                                    </div>
                                    <a href="urun/<?php echo $pop['seo']; ?>">
                                       <img style="width: 80px;height:87px;" data-sizes="auto" src="resimler/urunler/<?php echo $pop['resim']; ?>" data-src="resimler/urunler/<?php echo $pop['resim']; ?>" class="img-1 lazyload">
                              
                                    </a>
                                  </div>
                                 
                                </div>
                                <div class="item-info">
                                  <div class="item-title">
                                   <a href="urun/<?php echo $pop['seo']; ?>">
                                 <?php echo $pop['adi']; ?>
                                    </a>
                                  </div>
                                  <div class="rating">
                                      <?php echo $pop['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $pop['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $pop['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $pop['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $pop['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
                                  </div>
                                  <div  class="content_price price">
                                   	<?php echo urunfiyatbelirle($pop['kdv'],$pop['idurum'],$pop['fiyat'],$pop['ifiyat']);?>
									
                                  </div>
                                </div>
                                <!-- End item-info -->
                                <!-- End item-wrap-inner -->
                              </div>
							  	<?php if ($sayac==3) {

																		

																		$sayac=0;

																	} ?>
							<?php } ?>	
                     

												
                          </div>
                          <!--End extraslider-inner -->
                          <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                            	(function (element) {
                            		var $element = $(element),
                            				$extraslider = $(".extraslider-inner", $element),
                            				_delay = 500 ,
                            				_duration = 800 ,
                            				_effect = 'none ';
                            
                            		$extraslider.on("initialized.owl.carousel2", function () {
                            			var $item_active = $(".owl2-item.active", $element);
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			}
                            			else {
                            				var $item = $(".owl2-item", $element);
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            			}
                            			
                            			 
                            				$(".owl2-controls", $element).insertBefore($extraslider);
                            				$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
                            			
                            		});
                            
                            		$extraslider.owlCarousel2({
                            			rtl: false,
                            			margin: 0,
                            			slideBy: 1,
                            			autoplay: 0,
                            			autoplayHoverPause: 0,
                            			autoplayTimeout: 0 ,
                            			autoplaySpeed: 1000 ,
                            			startPosition: 0 ,
                            			mouseDrag: 1,
                            			touchDrag: 1 ,
                            			autoWidth: false,
                            			responsive: {
                            				0: 	{ items: 2 } ,
                            				480: { items: 2 },
                            				768: { items: 2 },
                            				992: { items: 2 },
                            				1200: {items: 1}
                            			},
                            			dotClass: "owl2-dot",
                            			dotsClass: "owl2-dots",
                            			dots: false ,
                            			dotsSpeed:500 ,
                            			nav: true ,
                            			loop: true ,
                            			navSpeed: 500 ,
                            			navText: ["&#171 ", "&#187 "],
                            			navClass: ["owl2-prev", "owl2-next"]
                            
                            		});
                            
                            		$extraslider.on("translate.owl.carousel2", function (e) {
                            			 
                            
                            			var $item_active = $(".owl2-item.active", $element);
                            			_UngetAnimate($item_active);
                            			_getAnimate($item_active);
                            		});
                            
                            		$extraslider.on("translated.owl.carousel2", function (e) {
                            
                            			 
                            
                            			var $item_active = $(".owl2-item.active", $element);
                            			var $item = $(".owl2-item", $element);
                            
                            			_UngetAnimate($item);
                            
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			} else {
                            
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            
                            			}
                            		});
                            
                            		function _getAnimate($el) {
                            			if (_effect == "none") return;
                            			//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                            			$extraslider.removeClass("extra-animate");
                            			$el.each(function (i) {
                            				var $_el = $(this);
                            				$(this).css({
                            					"-webkit-animation": _effect + " " + _duration + "ms ease both",
                            					"-moz-animation": _effect + " " + _duration + "ms ease both",
                            					"-o-animation": _effect + " " + _duration + "ms ease both",
                            					"animation": _effect + " " + _duration + "ms ease both",
                            					"-webkit-animation-delay": +i * _delay + "ms",
                            					"-moz-animation-delay": +i * _delay + "ms",
                            					"-o-animation-delay": +i * _delay + "ms",
                            					"animation-delay": +i * _delay + "ms",
                            					"opacity": 1
                            				}).animate({
                            					opacity: 1
                            				});
                            
                            				if (i == $el.size() - 1) {
                            					$extraslider.addClass("extra-animate");
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
                            					"opacity": 1
                            				});
                            			});
                            		}
                            
                            	})("#so_extra_slider_13350955981633896506 ");
                            });
                            //]]>
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 col_llte col-style hidden-sm">
                    <div class="banners banners3">
                      <div>
                        <a href="<?php echo $tema['t5']; ?>">
						<img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="banner"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 col_r4zg col-style">
                    <div class="module so-extraslider-ltr product-simple simple2">
                      <h3 class="modtitle">
                        <a><span>Çok Satanlar</span></a>
                      </h3>
                      <div class="modcontent">
                         <div id="so_extra_slider_13350955981633896506444444" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                          <!-- Begin extraslider-inner -->
                          <div class="extraslider-inner products-list" data-effect="none">
                       
                           <?php $grzs = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by rand() limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            $sayac =0;
							foreach($grzs as $coksatan){
                            $sayac++;
                            if ($sayac==1){
                            echo ' <div class="item">';
                            }
                          
						   ?>	

                              <div class="product-layout item-inner style1 ">
                                <div class="item-image">
                                  <div class="item-img-info">
                                    <div class="box-label">
                                    </div>
                                    <a href="urun/<?php echo $coksatan['seo']; ?>">
                                       <img style="width: 80px;height:87px;" data-sizes="auto" src="resimler/urunler/<?php echo $coksatan['resim']; ?>" data-src="resimler/urunler/<?php echo $coksatan['resim']; ?>" class="img-1 lazyload">
                              
                                    </a>
                                  </div>
                                 
                                </div>
                                <div class="item-info">
                                  <div class="item-title">
                                   <a href="urun/<?php echo $coksatan['seo']; ?>">
                                 <?php echo $coksatan['adi']; ?>
                                    </a>
                                  </div>
                                  <div class="rating">
                                      <?php echo $coksatan['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $coksatan['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
                                  </div>
                                  <div  class="content_price price">
                                   	<?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
									
                                  </div>
                                </div>
                                <!-- End item-info -->
                                <!-- End item-wrap-inner -->
                              </div>
							  	<?php if ($sayac==3) {

																		echo '</div>';

																		$sayac=0;

																	} ?>
							<?php } ?>	
                     

												
                          </div>
                          <!--End extraslider-inner -->
                          <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                            	(function (element) {
                            		var $element = $(element),
                            				$extraslider = $(".extraslider-inner", $element),
                            				_delay = 500 ,
                            				_duration = 800 ,
                            				_effect = 'none ';
                            
                            		$extraslider.on("initialized.owl.carousel2", function () {
                            			var $item_active = $(".owl2-item.active", $element);
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			}
                            			else {
                            				var $item = $(".owl2-item", $element);
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            			}
                            			
                            			 
                            				$(".owl2-controls", $element).insertBefore($extraslider);
                            				$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
                            			
                            		});
                            
                            		$extraslider.owlCarousel2({
                            			rtl: false,
                            			margin: 0,
                            			slideBy: 1,
                            			autoplay: 0,
                            			autoplayHoverPause: 0,
                            			autoplayTimeout: 0 ,
                            			autoplaySpeed: 1000 ,
                            			startPosition: 0 ,
                            			mouseDrag: 1,
                            			touchDrag: 1 ,
                            			autoWidth: false,
                            			responsive: {
                            				0: 	{ items: 2 } ,
                            				480: { items: 2 },
                            				768: { items: 2 },
                            				992: { items: 2 },
                            				1200: {items: 1}
                            			},
                            			dotClass: "owl2-dot",
                            			dotsClass: "owl2-dots",
                            			dots: false ,
                            			dotsSpeed:500 ,
                            			nav: true ,
                            			loop: true ,
                            			navSpeed: 500 ,
                            			navText: ["&#171 ", "&#187 "],
                            			navClass: ["owl2-prev", "owl2-next"]
                            
                            		});
                            
                            		$extraslider.on("translate.owl.carousel2", function (e) {
                            			 
                            
                            			var $item_active = $(".owl2-item.active", $element);
                            			_UngetAnimate($item_active);
                            			_getAnimate($item_active);
                            		});
                            
                            		$extraslider.on("translated.owl.carousel2", function (e) {
                            
                            			 
                            
                            			var $item_active = $(".owl2-item.active", $element);
                            			var $item = $(".owl2-item", $element);
                            
                            			_UngetAnimate($item);
                            
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			} else {
                            
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            
                            			}
                            		});
                            
                            		function _getAnimate($el) {
                            			if (_effect == "none") return;
                            			//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                            			$extraslider.removeClass("extra-animate");
                            			$el.each(function (i) {
                            				var $_el = $(this);
                            				$(this).css({
                            					"-webkit-animation": _effect + " " + _duration + "ms ease both",
                            					"-moz-animation": _effect + " " + _duration + "ms ease both",
                            					"-o-animation": _effect + " " + _duration + "ms ease both",
                            					"animation": _effect + " " + _duration + "ms ease both",
                            					"-webkit-animation-delay": +i * _delay + "ms",
                            					"-moz-animation-delay": +i * _delay + "ms",
                            					"-o-animation-delay": +i * _delay + "ms",
                            					"animation-delay": +i * _delay + "ms",
                            					"opacity": 1
                            				}).animate({
                            					opacity: 1
                            				});
                            
                            				if (i == $el.size() - 1) {
                            					$extraslider.addClass("extra-animate");
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
                            					"opacity": 1
                            				});
                            			});
                            		}
                            
                            	})("#so_extra_slider_13350955981633896506444444 ");
                            });
                            //]]>
                          </script>
                        </div>
					  
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_adea col-style">
                    <div class="testimonials">
                      <div class="contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-hoverpause="yes">
                       
<?php $grzsz = $ozy->query("select * from tumyorumlar where durum='1' and konu='urunler' order by rand() limit 4")->fetchAll(PDO::FETCH_ASSOC); 
                                                        foreach($grzsz as $yorum){
														$urunidimiz = $yorum['sayfaid'];
														$kargomnerede = $ozy->query("select * from urunler where durum='1' and id='$urunidimiz'")->fetch(PDO::FETCH_ASSOC);
														
														?>

					   <div class="item">
                          <div class="cont">
                           <?php echo $yorum['yorum']; ?>
                          </div>
                          <a href="urun/<?php echo $kargomnerede['seo']; ?>"><img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="resimler/urunler/<?php echo $kargomnerede['resim']; ?>" alt="client">	</a>
                          <h4><?php echo $yorum['adi']; ?></h4>
                          <span><?php echo $yorum['tarih']; ?></span> 		
                        </div>
                      
                       	<?php } ?>	
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_q4xt col-style">
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_bomm  main-right">
                <div class="row row_lt7o  inner ">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_tvjh col-style">
                    <!-- default Grid  -->
                    <div class="module so-extraslider-ltr extra-layout24">
                      <h3 class="modtitle">
                        <a><span>Sizin İçin Seçtiğimiz Ürünler</span></a>
                      </h3>
                      <div class="modcontent">
                        <div id="so_extra_slider_716195051633896506" class="so-extraslider buttom-type1 preset00-5 preset01-3 preset02-3 preset03-2 preset04-1 button-type1">
                          <!-- Begin extraslider-inner -->
                          <div class="extraslider-inner products-list product-grid9" data-effect="none">
                         
						 			<?php $ukkz = $ozy->query("select * from urunler where durum='1' and agoster='1' order by sira desc limit 12")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>
 
                            <div class="item ">
                              <div class="product-layout style1 ">
                                <div class="product-item-container">
                                  <div class="left-block">
                                    <div class="product-image-container">
                                      <a href="urun/<?php echo $sizinicin['seo']; ?>" >
                                      <img style="width: 177px;height: 177px;" data-sizes="auto" src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" data-src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" class="lazyload">
                                      </a>						
                                    </div>
                                    <div class="box-label">
                                    </div>
                                    <div class="button-group so-quickview">
                                       <button type="button" class="wishlist btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $sizinicin['id']; ?>'"
							  ><i class="fa fa-heart"></i></button>
                                      <button type="button" class="compare btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $sizinicin['id']; ?>'"
							  ><i class="fa fa-refresh"></i></button>
                                      <a class="visible-lg btn-button" href="urun/<?php echo $sizinicin['seo']; ?>"><i class="fa fa-eye"></i></a>
                                    </div>
                                  </div>
                                  <div class="right-block">
                                    <div class="caption">
                                      <h4>
                                        <a href="urun/<?php echo $sizinicin['seo']; ?>" >
                                       <?php echo $sizinicin['adi']; ?>
                                        </a>
                                      </h4>
                                      <div class="rating">
                                            <?php echo $sizinicin['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $sizinicin['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $sizinicin['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $sizinicin['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $sizinicin['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
                                      </div>
                                      <div  class="price">
                                      	<?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>
								
                                      </div>
                                    </div>
                                     <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							          onclick="javascript:location.href='urun/<?php echo $coksatan['seo']; ?>'"><i class="fa fa-shopping-cart"></i></button>											
      
                                   
                                  </div>
                                </div>
                                <!-- End item-wrap-inner -->
                              </div>
                              <!-- End item-wrap -->
                            </div>
							
							
							
								<?php } ?>
							
							
							
							
							
							
							
							
						
                          </div>
                          <!--End extraslider-inner -->
                          <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                            	(function (element) {
                            		var $element = $(element),
                            				$extraslider = $(".extraslider-inner", $element),
                            				_delay = 500 ,
                            				_duration = 800 ,
                            				_effect = 'none ';
                            
                            		$extraslider.on("initialized.owl.carousel2", function () {
                            			var $item_active = $(".owl2-item.active", $element);
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			}
                            			else {
                            				var $item = $(".owl2-item", $element);
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            			}
                            			
                            			 
                            				$(".owl2-controls", $element).insertBefore($extraslider);
                            				$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
                            			
                            		});
                            
                            		$extraslider.owlCarousel2({
                            			rtl: false,
                            			margin: 30,
                            			slideBy: 1,
                            			autoplay: 0,
                            			autoplayHoverPause: 0,
                            			autoplayTimeout: 0 ,
                            			autoplaySpeed: 1000 ,
                            			startPosition: 0 ,
                            			mouseDrag: 1,
                            			touchDrag: 1 ,
                            			autoWidth: false,
                            			responsive: {
                            				0: 	{ items: 2 } ,
                            				480: { items: 2 },
                            				768: { items: 3 },
                            				992: { items: 3 },
                            				1200: {items: 5}
                            			},
                            			dotClass: "owl2-dot",
                            			dotsClass: "owl2-dots",
                            			dots: false ,
                            			dotsSpeed:500 ,
                            			nav: true ,
                            			loop: true ,
                            			navSpeed: 500 ,
                            			navText: ["&#171 ", "&#187 "],
                            			navClass: ["owl2-prev", "owl2-next"]
                            
                            		});
                            
                            		$extraslider.on("translate.owl.carousel2", function (e) {
                                    	 
                                    	var $item_active = $(".owl2-item.active", $element);
                                    	_UngetAnimate($item_active);
                                    	_getAnimate($item_active);
                                    });
                                    $extraslider.on("translated.owl.carousel2", function (e) {
                                    	 
                                    	var $item_active = $(".owl2-item.active", $element);
                                    	var $item = $(".owl2-item", $element);
                                    	_UngetAnimate($item);
                                    	if ($item_active.length > 1 && _effect != "none") {
                                    		_getAnimate($item_active);
                                    	} else {
                                    		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                    	}
                                    });
                                    function _getAnimate($el) {
                                    	if (_effect == "none") return;
                                    	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                    	$extraslider.removeClass("extra-animate");
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
                                    			$extraslider.addClass("extra-animate");
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
                            	})("#so_extra_slider_716195051633896506 ");
                            });
                            //]]>
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hzbj col-style">
                    <div class="banners banners2">
                      <div class="row">
					       <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($katiz as $kategorimx){?> 
			 		  
					  
                        <div class="bn bn1 col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom:10px;">
                          <a href="seo/<?php echo $kategorimx['seo']; ?>">
						  <img style="height: 200px;" data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="resimler/kategoriler/<?php echo $kategorimx['yanresim']; ?>" alt="banner"></a>
                        </div>
                       
					          <?php } ?>
					   
					   
					   
                      </div>
                    </div>
                  </div>
				  
				  
				  
				  
				     <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 
  
				  
				  
				  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vlxy col-style" style="margin-bottom:15px;">
                    <!-- default Grid  -->
                    <div class="module so-extraslider-ltr extra-layout24">
                      <h3 class="modtitle">
                        <a href="kategori/<?php echo $kategorimx['seo']; ?>"><span><?php echo $kategorimx['adi']; ?></span></a>
                      </h3>
                      <div class="modcontent">
                        <div id="so_extra_slider_3637760541633896506<?php echo $kategorimx['id']; ?>" class="so-extraslider buttom-type1 preset00-5 preset01-3 preset02-3 preset03-2 preset04-1 button-type1">
                          <!-- Begin extraslider-inner -->
                          <div class="extraslider-inner products-list product-grid9" data-effect="none">
                         
                         
					        <?php 
							$katimiz = $kategorimx['id']; 
							$ukk = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
                           
							foreach($ukk as $katurunler){
								?>
						 
                            <div class="item ">
                              <div class="product-layout style1 ">
                                <div class="product-item-container">
                                  <div class="left-block">
                                    <div class="product-image-container">
                                      <a href="urun/<?php echo $katurunler['seo']; ?>" >
                                      <img style="width: 177px;height: 177px;" data-sizes="auto" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" data-src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="lazyload">
                                      </a>						
                                    </div>
                                    <div class="box-label">
                                    </div>
                                    <div class="button-group so-quickview">
                                       <button type="button" class="wishlist btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'"
							  ><i class="fa fa-heart"></i></button>
                                      <button type="button" class="compare btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'"
							  ><i class="fa fa-refresh"></i></button>
 <a class="visible-lg btn-button" href="urun/<?php echo $katurunler['seo']; ?>"><i class="fa fa-eye"></i></a>
                                    </div>
                                  </div>
                                  <div class="right-block">
                                    <div class="caption">
                                      <h4>
                                        <a href="urun/<?php echo $katurunler['seo']; ?>" >
                                       <?php echo $katurunler['adi']; ?>
                                        </a>
                                      </h4>
                                      <div class="rating">
                                            <?php echo $katurunler['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
                                      </div>
                                      <div  class="price">
                                      	<?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
								
                                      </div>
                                    </div>
                                     <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							          onclick="javascript:location.href='urun/<?php echo $coksatan['seo']; ?>'"><i class="fa fa-shopping-cart"></i></button>											
      
                                   
                                  </div>
                                </div>
                                <!-- End item-wrap-inner -->
                              </div>
                              <!-- End item-wrap -->
                            </div>
							
								<?php }?>  
						 
                          </div>
                          <!--End extraslider-inner -->
                          <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function ($) {
                            	(function (element) {
                            		var $element = $(element),
                            				$extraslider = $(".extraslider-inner", $element),
                            				_delay = 500 ,
                            				_duration = 800 ,
                            				_effect = 'none ';
                            
                            		$extraslider.on("initialized.owl.carousel2", function () {
                            			var $item_active = $(".owl2-item.active", $element);
                            			if ($item_active.length > 1 && _effect != "none") {
                            				_getAnimate($item_active);
                            			}
                            			else {
                            				var $item = $(".owl2-item", $element);
                            				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                            			}
                            			
                            			 
                            				$(".owl2-controls", $element).insertBefore($extraslider);
                            				$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
                            			
                            		});
                            
                            		$extraslider.owlCarousel2({
                            			rtl: false,
                            			margin: 30,
                            			slideBy: 1,
                            			autoplay: 0,
                            			autoplayHoverPause: 0,
                            			autoplayTimeout: 0 ,
                            			autoplaySpeed: 1000 ,
                            			startPosition: 0 ,
                            			mouseDrag: 1,
                            			touchDrag: 1 ,
                            			autoWidth: false,
                            			responsive: {
                            				0: 	{ items: 2 } ,
                            				480: { items: 2 },
                            				768: { items: 3 },
                            				992: { items: 3 },
                            				1200: {items: 5}
                            			},
                            			dotClass: "owl2-dot",
                            			dotsClass: "owl2-dots",
                            			dots: false ,
                            			dotsSpeed:500 ,
                            			nav: true ,
                            			loop: true ,
                            			navSpeed: 500 ,
                            			navText: ["&#171 ", "&#187 "],
                            			navClass: ["owl2-prev", "owl2-next"]
                            
                            		});
                            
                            		$extraslider.on("translate.owl.carousel2", function (e) {
                                    	 
                                    	var $item_active = $(".owl2-item.active", $element);
                                    	_UngetAnimate($item_active);
                                    	_getAnimate($item_active);
                                    });
                                    $extraslider.on("translated.owl.carousel2", function (e) {
                                    	 
                                    	var $item_active = $(".owl2-item.active", $element);
                                    	var $item = $(".owl2-item", $element);
                                    	_UngetAnimate($item);
                                    	if ($item_active.length > 1 && _effect != "none") {
                                    		_getAnimate($item_active);
                                    	} else {
                                    		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                    	}
                                    });
                                    function _getAnimate($el) {
                                    	if (_effect == "none") return;
                                    	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                    	$extraslider.removeClass("extra-animate");
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
                                    			$extraslider.addClass("extra-animate");
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
                            	})("#so_extra_slider_3637760541633896506<?php echo $kategorimx['id']; ?> ");
                            });
                            //]]>
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  		<?php }?>  
				  
                 
                      </div>
                    </div>
					
					
					
                  </div>
                </div>
				
				 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_0xzg col-style" style="margin-bottom: 20px;background: white;">
                    <div class="block-policy24 module">
                      <ul>
                        <li class="item-1 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                          <a class="item-inner">
                            <div class="content">
                              <b>Ücretsiz Kargo</b>
                              <span><?php echo $system['ucretsizkargo']; ?> TL ve üzeri</span>
                            </div>
                          </a>
                        </li>
                        <li class="item-2 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                          <a class="item-inner">
                            <div class="content">
                              <b>Canlı Destek</b>
                              <span>7/24 Kesintisiz Destek Hattı</span>
                            </div>
                          </a>
                        </li>
                        <li class="item-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                          <a class="item-inner">
                            <div class="content">
                              <b>Güvenli Ödeme</b>
                              <span>256 Bit SSL Şifreleme</span>
                            </div>
                          </a>
                        </li>
                        <li class="item-4 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                          <a class="item-inner">
                            <div class="content">
                              <b>İade Garantili</b>
                              <span>14 Gün Kolay İade</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
				
				
              </div>
            </div>
     
      
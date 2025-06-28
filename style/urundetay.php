<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE urunler SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>

<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM urunler WHERE seo=:id and durum=:durum");
$page = $sayfaqq->execute([':id' => $id,':durum' => $durum]);
$page = $sayfaqq->fetch(PDO::FETCH_ASSOC);

////////URUN FİYAT BELİRMELE ALANI///////

if($page['idurum']=='1'){								
if($page['kdv']>'0'){
$eskifiyat = fiyatgoster(KdvDahil($page['fiyat'],$page['kdv']));
$yenifiyat = fiyatgoster(KdvDahil($page['ifiyat'],$page['kdv']));
} else {
$eskifiyat = fiyatgoster(KdvDahil($page['fiyat'],$system['kdv']));
$yenifiyat = fiyatgoster(KdvDahil($page['ifiyat'],$system['kdv']));
}
} else {
if($page['kdv']>'0'){
$yenifiyat = fiyatgoster(KdvDahil($page['fiyat'],$page['kdv']));
} else { 
$yenifiyat = fiyatgoster(KdvDahil($page['fiyat'],$system['kdv']));
}} 

////////URUN FİYAT BELİRMELE ALANI///////									

?>
<?php if($page['seodurum']=='1'){?>
<title><?php echo $page['stitle']; ?></title>
<meta name="keywords" content="<?php echo $page['skey']; ?>">
<meta name="description" content="<?php echo $page['sdesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $ayar['stitle']; ?>"/>
<meta property="og:description" content="<?php echo $page['sdesc']; ?>"/>
<?php } else { ?>
<title><?php echo $page['adi']; ?></title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $page['adi']; ?>"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php } ?>

<div class="content-main container product-detail  ">
	<div class="row">
		 <nav class="breadcrumb-nav mb-1">
                        <div class="container">
                            <ul class="breadcrumb">
                                <li><a href="anasayfa">Anasayfa</a></li>
                                <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); foreach($kat as $ukat){?>
                                <li>
                                    <a href="kategori/<?php echo $ukat['seo']; ?>"><?php echo $ukat['adi']; ?></a>
                                </li>
                                <?php } ?>
                                <li><?php echo $page['adi'];?></li>
                            </ul>
                        </div>
                    </nav>
<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas " >
		<span id="close-sidebar" class="fa fa-times"></span>
	  	  
<div class="module category-style">
  <h3 class="modtitle"><span>Kategoriler </span></h3>
  <div class="mod-content box-category">
    <ul class="accordion" id="accordion-category">
       
	   	<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
		<li class="panel">
			   
				<a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?> </a>
			 
						
			 
		</li>
          <?php } ?>	
		
           </ul>
  </div>
</div>

	  	  
<div class="module so-extraslider-ltr product-simple col-extra">
		 
					<h3 class="modtitle"><span>Popüler Ürünler</span></h3>
			
	

	<div class="modcontent">
		
						
				
						
															
			<div id="so_extra_slider_4132828171633695852" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
				<!-- Begin extraslider-inner -->
				<div class="extraslider-inner products-list" data-effect="none">
																	 
						<div class="item ">
						 
 <?php $grzsz = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 8")->fetchAll(PDO::FETCH_ASSOC); 
              foreach($grzsz as $popurunler){?>   


							<div class="product-item-container product-layout item-inner style1 ">							
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
								 
								
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

           
       <?php } ?>
            






						</div>
						 

						 
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
								$(".owl2-dots", $element).insertAfter($extraslider);
							
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
								0: 	{ items: 1 } ,
								480: { items: 1 },
								768: { items: 1 },
								992: { items: 1 },
								1200: {items: 1 },
								1650: {items: 1}
							},
							dotClass: "owl2-dot",
							dotsClass: "owl2-dots",
							dots: true ,
							dotsSpeed:500 ,
							nav: false ,
							loop: false ,
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

					})("#so_extra_slider_4132828171633695852 ");
				});
				//]]>
			</script>

			</div>
			
	</div> 
	
</div>
	  	</aside>

						
			 											    	
		<div id="content" class="product-view col-md-9 col-sm-12 col-xs-12 fluid-sidebar"> 
		
											
			<div class="sidebar-overlay "></div>
		

		<div class="content-product-mainheader clearfix"> 
			<div class="row">	
						<div class="content-product-left  col-md-5 col-sm-12 col-xs-12" >
									<div class="so-loadeding" ></div>
																

<div class="large-image  ">
                                
<img itemprop="image" class="product-image-zoom lazyload" data-sizes="auto" src="resimler/urunler/<?php echo $page['resim']; ?>" data-src="resimler/urunler/<?php echo $page['resim']; ?>" data-zoom-image="resimler/urunler/<?php echo $page['resim']; ?>"/>
</div>

<div id="thumb-slider" class="full_slider  contentslider" data-rtl="no" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="5"  data-items_column0="4" data-items_column1="3" data-items_column2="5" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
		

		<div class="image-additional">
		<a data-index="0" class="img thumbnail active" data-image="resimler/urunler/<?php echo $page['resim']; ?>">
			<img class="lazyload" data-sizes="auto" src="resimler/urunler/<?php echo $page['resim']; ?>" data-src="resimler/urunler/<?php echo $page['resim']; ?>"/>
		</a>
		</div>
		


		               <?php 
					    $i= "1";
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
			
			<div class="image-additional">
		<a data-index="<?php echo $i++;?>" class="img thumbnail " data-image="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">
			<img class="lazyload" data-sizes="auto" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"/>
		</a>
		</div>
		
		    <?php } ?>
		
		
		
	
			
			
			
			
			
		</ul>
</div>


<script type="text/javascript"><!--
	$(document).ready(function() {
		var zoomCollection = '.large-image img';
		$( zoomCollection ).elevateZoom({
			//value zoomType (window,inner,lens)
						zoomType        : "inner",
						lensSize    :'250',
			easing:false,
			scrollZoom : true,
			gallery:'thumb-slider',
			cursor: 'pointer',
			galleryActiveClass: "active",
			
		});
		$(zoomCollection).bind('touchstart', function(){
		    $(zoomCollection).unbind('touchmove');
		});
		
				$('.large-image img').magnificPopup({
			items: [
							{src: 'resimler/urunler/<?php echo $page["resim"]; ?>'},
				<?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
							
							{src: 'resimler/genel/<?php echo $genelresim["sayfaresim"];?>'},
	
	  <?php } ?>
		
	
						],
			gallery: { enabled: true, preload: [0,2] },
			type: 'image',
			mainClass: 'mfp-fade',
			callbacks: {
				open: function() {
											var activeIndex = parseInt($('#thumb-slider .img.active').attr('data-index'));
										var magnificPopup = $.magnificPopup.instance;
					magnificPopup.goTo(activeIndex);
				}
			}

		});
			});
//--></script>
													 
			</div>
        	
						<div class="content-product-right col-md-7 col-sm-12 col-xs-12">
				<div class="title-product">
					<h1><?php echo $page['adi'];?></h1>
				</div>
				
												<div class="box-review">
				  <div class="ratings">							
                                
                          
								
								           <?php echo $page['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
								
                              </div>
					<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"> <?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum</a>
						<span class="order-num"> 
						
						
										<?php if($page['havaledurum']=='1'){?>	
								
                                    <?php if($page['kdv']>='0'){?>	
								    <div class="alert-message"> <b style="font-size: 16px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$system['kdv']));?></span>
									</div><?php } else { ?>
									 <div class="alert-message"> <b style="font-size: 16px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$page['kdv']));?></span>
									</div><?php } ?>
                                    <?php } ?>
                                          
						
						
						</span>					
				</div>
				
				<div class="product_page_price price" itemprop="offerDetails" itemscope itemtype="http://data-vocabulary.org/Offer">
									      
     <div id="detayfiyat" data-price="<?php echo mb_substr($yenifiyat,0,-3);?>" class="product-price">
									<?php if($page['idurum']=='1'){?>	
								    <span style="font-size: 20px;" class="old-price"><?php echo $eskifiyat;?></span>&nbsp;&nbsp;
								    <span  style="font-size: 24px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } else { ?>
									<span style="font-size: 24px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } ?>
                                    </div><!-- End .product-price -->
									
									 
				</div>
									

				 			
											

				<div class="product-box-desc">
					<div class="inner-box-desc">

													<div class="brand"><span>Markası: </span>  <?php 
										$markaid = $page['marka'];
										$mmmm = $ozy->query("select * from markalar where durum='1' and id='$markaid' ORDER BY id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); foreach($mmmm as $markamm){?>

                                                    <img src="resimler/markalar/<?php echo $markamm['resim'];?>" alt="Brand" style="width: 70px; height: 35px;" width="102" height="48" />

                                                    <?php } ?></div>
												
												<div class="model"><span>Ürün Kodu: </span> <?php echo $page['urunkodu'];?></div>
												
											
												
						<div class="stock"><span>Stok Durumu:</span> 
						
						
								<?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
                                     
                                          
											<?php if($page['stok']=='0'){?>
											<span class="product-available outof-stock">Tükendi</span>
											<?php } else { ?>
											<span class="product-available in-stock">Stokta Var</span>
											<?php } ?>								
											
						
						
						</div>	
					</div>	
					
					<div class="inner-box-viewed ">
						<span><?php echo $page['kisa'];?></span> 
					</div>
					
					
				</div>
				
				

										

				

                <!-- Overide by module ask question -->
				<div id="product">
				<!-- End overide by module ask question -->
            <form action="" method="POST">
									   
                                       <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
                                        <div class="product-form product-variation product-color" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>> 
                                            <label style="font-weight:bold;">Renk:</label>
                                            <div class="d-flex align-items-center product">
                                                       <?php 
										$sayfaidmiz = $page['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
                                                <a href="urun/<?php echo $varyantbak['seo'];?>" style="margin-right: 4px !important;background:('resimler/urunler/<?php echo $varyantbak['resim'];?>')">
												
												<img style="width: 30px;height: 35px;" src="resimler/urunler/<?php echo $varyantbak['resim'];?>"></img>
												</a>
                                              <?php } ?>	
                                            </div>
                                        </div>
										   
				    <div class="badges" style="margin-bottom: 10px;">
					<?php if($page['alode']=='1'){?> 
					
                    <span class="badge" style="border: 1px solid #d2ab13;padding: 5px;line-height: 20px !important;color: #d2ab13;">
					<i style="font-size: 18px;" class="icon-shopping-cart"></i> BU ÜRÜNDE <?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI</span>
                    <?php } ?>
					<?php if($page['ucretsizkargo']=='1'){?>
					<span class="badge" style="border: 1px solid #2cc43c;padding: 5px;line-height: 20px !important;color: #2cc43c;">
					<i style="font-size: 18px;" class="icon-truck"></i> BU ÜRÜNDE KARGO ÜCRETSİZ
					</span>
                    <?php } ?>
					</div>
					
					<?php 
									$urunid = $page['id'];
									$ozellik = $ozy->query("select * from anaozellik where tip='0' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellik as $anaozellik){?>  
                                               <div class="details-filter-row details-row-size">
                                        <label for="size" style="width: 100%;font-weight: 500;"><?php echo $anaozellik['adi'];?> :</label>
                                        <div class="select-custom" style="width: 100%;">
                                    <select class="form-control varyantselect" onchange="detayfiyathesapla(this);" name="ozellik[]" required="required">
                                    <option data-price="0.00" value="">Seçim Yapınız</option>
									<?php 
									$altanaid = $anaozellik['id'];
									$ozellikalt = $ozy->query("select * from anaozellikalt where anaid='$altanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellikalt as $anaozellikalt){?> 		
                                    <option data-price="<?php echo KdvDahil($anaozellikalt['fiyat'],$ekkdv);?>" value="<?php echo $anaozellikalt['id'];?>" <?php echo $anaozellikalt['stok'] <= '0' ? 'disabled' : null; ?>><?php echo $anaozellikalt['adi'];?> <?php echo $anaozellikalt['stok'] <= '0' ? '(Tükendi)' : null; ?></option>
                                    <?php } ?>	  
                                    </select>
                                        </div><!-- End .select-custom -->

                                    </div><!-- End .details-filter-row -->
									
									</br>
								   <?php } ?>	
								
                                       
                                    <?php 
									$urunid = $page['id'];
									$iozellik = $ozy->query("select * from anaozellik where tip='1' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellik as $ianaozellik){?>  
									
                                    <div class="details-filter-row details-row-size" style="background: #fbf8f8;padding: 10px;width: 93%;">
                                    <label for="size" style="width: 100%;font-weight: 500;"><?php echo $ianaozellik['adi'];?> :</label>
									<?php 
									$ialtanaid = $ianaozellik['id'];
									$iozellikalt = $ozy->query("select * from anaozellikalt where anaid='$ialtanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellikalt as $ianaozellikalt){?>
			                        <label class="size-item">
				                    <input onclick="detayfiyathesapla(this);" data-price="<?php echo KdvDahil($ianaozellikalt['fiyat'],$ekkdv);?>" class="varyantradio" type="radio" name="ozellik[]" level="2" <?php echo $ianaozellikalt['stok'] <= '0' ? 'disabled' : null; ?> value="<?php echo $ianaozellikalt['id'];?>" stocksize="<?php echo $ianaozellikalt['adi'];?>" available="1" required>
				                    <span <?php echo $ianaozellikalt['stok'] <= '0' ? 'style="   border-color: #eee;color: #ccc;background: linear-gradient(to top, #e6e6e6 0px, #fff 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);"' : null; ?> class="size-slt-box" level="2" value="<?php echo $ianaozellikalt['id'];?>" name="ozellik[]"><?php echo $ianaozellikalt['adi'];?></span></label>
				                    <?php } ?>
                                    </div>
									
			                        <hr>
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
			   
				<div id="product">	
					
					
					<div class="box-cart clearfix form-group">
											  
						<div class="form-group box-info-product">
							<div class="option quantity">
								<label class="control-label" for="input-quantity">Adet</label>
								<div class="input-group quantity-control">
									  <span class="input-group-addon product_quantity_down fa fa-minus"></span>
									  <input onchange="detayfiyathesapla(this);" class="adetsayisi form-control" type="text" name="adet" value="1" />
									  					  
									  <span class="input-group-addon product_quantity_up fa fa-plus"></span>
								</div>
							</div>
							<div class="detail-action">
							<div class="cart">
							<?php if($page['stok']>='1'){?>
							<input type="submit"  name="sepetle" value="Sepete Ekle" class="btn btn-checkout "/>
							<?php } else { ?>
                            <input type="button"  value="Tükendi" class="btn btn-checkout "/>
							<?php } ?>
							
							<?php if($system['telefonal']=='1'){?>
			  <a style="width: 33%;
-webkit-box-pack: center;
justify-content: center;
padding-left: .75rem;
padding-right: .75rem;
border: 1px solid var(--color-border-dark);
background: #8d77f2 !important;
color: #fff;
margin-bottom: 2px !important;
font-size: 16px; text-transform: capitalize;" target="_blank" href="tel:<?php echo $ayar['ceptel']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span> Telefon İle Satın Al</span></a>
              <?php } ?>
			  <?php if($system['whatsapal']=='1'){?>
			  <a style="width: 33%;
-webkit-box-pack: center;
justify-content: center;
padding-left: .75rem;
padding-right: .75rem;
background: #38dd61 !important;
color: #fff;
border-radius: 6px !important;
margin-bottom: 2px !important;
font-size: 16px; text-transform: capitalize;" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span> WhatsApp ile Satın Al</span></a>
              <?php } ?>
							
							</div>
							</form>
								<div class="add-to-links wish_comp">
									<ul class="blank list-inline">
										<li class="wishlist">
											<a href="?favoriekle=<?php echo $katurunler['id']; ?>"><i class="fa fa-heart"></i> Favorilerime Ekle<a>
										</li>
										<li class="compare">
											<a href="?karsilastir=<?php echo $katurunler['id']; ?>"><i class="fa fa-retweet"></i> Karşılaştır </a>
										</li>										
									</ul>
								</div>
								
              	<!-- End overide by module ask question -->
            
							</div>
						</div>

						<div class="clearfix"></div>
											</div>

						
										
				
					 					<div id="tab-tags">
						Ürün Etiketleri:
												 
											<?php $etiketlerz = $page['skey'];
											$etiketlerz = explode(',', $etiketlerz);
                                            foreach( $etiketlerz as $anahtarz => $degerz ){?>
                                            <a class="btn btn-primary btn-sm 22"><?php echo $degerz;?></a>
											<?php } ?>								 
						
					 
					</div>
					
				</div>

                <!-- Overide by module ask question -->
				</div>
								<!-- End overide by module ask question -->
            
				<div class="ask-hiddencart"></div>
			</div>
						</div>
		</div>

					
				<div class="content-product-mainbody clearfix row">
			
										
		    <div class="content-product-content col-sm-12">
				<div class="content-product-midde clearfix">
																									 					
					<div class="producttab ">
						<div class="tabsslider   horizontal-tabs  col-xs-12">
																					<ul class="nav nav-tabs font-sn">
								<li class="active"><a data-toggle="tab" href="#tab-description">Ürün Detayı</a></li>
								
					         
					            					           	 <li><a href="#tab-review" data-toggle="tab">Ürün Değerlendirmesi (<?php echo $urunyorumsayimis;?>)</a></li>
					            								
																 <li><a href="#tab-contentshipping" data-toggle="tab">İade & Değişim Şartlar</a></li>
								
																
							</ul>

														
							<div class="tab-content  col-xs-12">
								<div class="tab-pane active" id="tab-description">
									
					
					   <?php echo $page['aciklama'];?>
					
					
					
								
															





															</div>
								

					            <div class="tab-pane" id="tab-review">
						        
								                
									      		<div class="comments">
                    <?php if($urunyorumsayimis>'0'){?>
                      
                    <?php } else { ?>
					<h5>Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h5><!-- End .title -->
					<?php } ?>	

                                <ul style="padding: 0px !important;">
								
								
				<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                                <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto" style="border: 1px solid #f6f3f3;padding: 18px">
                                                
                                            
                                                <span class="review-date" style="">
												
													  <div class="ratings" style="margin-left: 4%;width:
											<?php echo $blogyorum['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '5' ? '100%' : null; ?>
											;"></div>
												
												
												
												<?php echo $blogyorum['tarih']; ?></span>
                                           
   <h6><a><?php echo $blogyorum['adi']; ?></a></h6>

                                                <div class="review-content">
                                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                                </div><!-- End .review-content -->

										   </div><!-- End .col -->
                                            <div class="col">
                                            
                                        <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
                                                <div class="review-action" style="padding: 20px;border: 1px solid #f1ecec;border-radius: 4px;">
                                                
												<div class="comment">
                                                    <figure class="comment-media">
                                                        <a href="<?php echo  $url;?>">
                                                            <img class="lazyload" style="width: 120px;"  src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="User name">
                                                        </a>
                                                    </figure>

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h6><?php echo $ayar['siteadi']; ?></h6>
														
															<?php echo $blogyorum['cevap']; ?>
                                                        </div><!-- End .comment-user -->

                                                      
                                                    </div><!-- End .comment-body -->
                                                </div><!-- End .comment -->
												
												
												</div><!-- End .review-action -->
												
												<?php } ?>
												
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div> 

									
                       <?php } ?>
								 
								 
								 
								 
								 
								 
								 
								 
								 
                                </ul>
                            </div>
					
			   
			   
			     
              <form class="form-horizontal" method="POST" action="">
                <div id="review"></div>
                <h6>Yorum Yap</h6>
				 <p class="title-desc" style="color: #d81818;border: 1px solid #f4f3f3;padding: 10px;font-size: 14px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.</p>
                  <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Adınız Soyadınız</label>
                    <input style="    max-width: 100%;" type="text" class="form-control" name="adi" required="" value="<?php echo $uyebilgileri['isim'];?>">
                  </div>
                     <div class="col-sm-12">
                    <label class="control-label" for="input-name">Eposta Adresiniz</label>
                      <input style="    max-width: 100%;" type="email" class="form-control" id="reply-email" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                  </div>
				  
				  
				</div>
				
             
              
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Yorumunuz</label>
                    <textarea style="    max-width: 100%;" name="yorum" rows="5" id="input-review" class="form-control" required></textarea>
                    <div class="help-block"><span class="text-danger">Not:</span> HTML'e dönüştürülmez!</div>
                  </div>
                </div>
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label">Oylama</label>
                    &nbsp;&nbsp;&nbsp; Kötü&nbsp;
                    <input type="radio" name="yildiz" value="1">
                    &nbsp;
                    <input type="radio" name="yildiz" value="2">
                    &nbsp;
                    <input type="radio" name="yildiz" value="3">
                    &nbsp;
                    <input type="radio" name="yildiz" value="4">
                    &nbsp;
                    <input type="radio" name="yildiz" value="5">
                    &nbsp;İyi</div>
                </div>
                   <div class="buttons clearfix">
				    <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
                  <div class="pull-right">
                    <button type="submit" name="urunyorum" id="button-review" class="butonok btn btn-primary">Gönder</button>
                  </div>
                </div>
                              </form>

                                    <div class="clear"></div>
					            </div>
				<div class="tab-pane" id="tab-contentshipping">
					
 <?php echo $system['iade']; ?>

					</div>
								
														
							</div>
						</div>
					</div>
				</div>
				
												<div class="content-product-bottom clearfix">
				  	<div id="product-related">
				  		
						 
 

<div class="clearfix related-horizontal ">
	<h3 class="modtitle"><span>Benzer Ürünler </span></h3>
	
    <div class="related-products products-list  contentslider" data-rtl="no" data-autoplay="no" data-pagination="yes" data-arrows="no" data-delay="4" data-speed="0.6" data-margin="30"  data-items_column0="4" data-items_column1="3" data-items_column2="3"
			data-items_column3="2" data-items_column4="1" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
		<!-- Products list -->
		 
		 
		 	<?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 6")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>


		 
            <div class="product-layout product-grid">
			  	<div class="product-item-container">
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
						
		</div>
		
    
    </div>
         
			    </div>


</div>



<link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_askquestion/css/jquery.fancybox.css">
<script src="<?php echo $sitetemasi;?>/javascript/so_askquestion/js/jquery.fancybox.js"></script>
<script src="<?php echo $sitetemasi;?>/javascript/soconfig/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="<?php echo $sitetemasi;?>/javascript/soconfig/js/lightslider.js"></script>

<title>Arama Sonuçları</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php
$arama = temizle($_GET['arama']);

$ara = explode(" ", $arama);
$adi = "";
$urunkodu = "";
foreach($ara AS $a)
{
    $adi .= "adi LIKE '%".$a."%' AND ";
    $urunkodu .= "urunkodu LIKE '%".$a."%' AND ";
}
$adi = substr($adi, 0, -4);
$urunkodu = substr($urunkodu, 0, -4);

?>

	   

		   <main class="main">

     <nav class="breadcrumb-nav mb-1 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Arama Sonuçları</li>
                    </ul>
                </div>
            </nav>

        
	   <div class="container">

				
			  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_pd00  col-style">
  <script>
    //<![CDATA[
    	var listtabs1352150 = [];
    //]]>
  </script>	
  <div class="module so-listing-tabs-ltr listingtab-layout1 listtab-custom">
    <h3 class="modtitle"><span>Arama Sonuçları</a></span></h3>
    <div class="modcontent">
    
          <div id="so_listing_tabs_1352150" class="so-listing-tabs first-load module">
            <!--<![endif]-->
            <div class="ltabs-wrap ">
            
              <div class="wap-listing-tabs products-list grid">
           
                <div class="ltabs-items-container">
                  <div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-sell " data-total="10" >
                    <div class="ltabs-items-inner owl2-carousel  ltabs-slider ">
					
				      <?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 200000;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
		
		
		if (isset($_GET["siralama"]) && $_GET["siralama"] != "0") {
			
		if(temizle($_GET["siralama"]=='dusukfiyat')){
			
		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu order by simdikifiyat ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
	
        } elseif (temizle($_GET["siralama"]=='yuksekfiyat')) {

 		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu order by simdikifiyat DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='encokyorum')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by yorum DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='enbegenilen')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by hit DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='eskitarih')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='yenitarih')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='onerilen')) {	
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
		
		} else {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
	    
		
		$__URUN__ = false;
        foreach ($pageoku as $katurunler) {
        $__URUN__ = true;
		
		?>		
                 
				
                      <div class="product-layout transition product-grid urunduzen">
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

							  <?php }
							
                            if (!$__URUN__){
								
                            echo "".$_GET['arama']." kelimeye ait herhangi bir ürün bulunamadı :(";
							
							}
							?>				
								
                    
                   
				 
					  
					  
				
                    </div>
                    <script type="text/javascript">
                      jQuery(document).ready(function($){
                      	var $tag_id = $('#so_listing_tabs_1352<?php echo $kategorimx['id']; ?>'), 
                      	parent_active = 	$('.items-category-sell', $tag_id),
                      	total_product = parent_active.data('total'),
                      	tab_active = $('.ltabs-items-inner',parent_active),
                      	nb_column0 = 6,
                      	nb_column1 = 4,
                      	nb_column2 = 3,
                      	nb_column3 = 2,
                      	nb_column4 = 1;
                      	tab_active.owlCarousel2({
                      		rtl: false,
                      		nav: false,
                      		dots: true,	
                      		margin: 0,
                      		loop:  false,
                      		autoplay: false,
                      		autoplayHoverPause: false,
                      		autoplayTimeout: 5000,
                      		autoplaySpeed: 1000,
                      		mouseDrag: false,
                      		touchDrag: true,
                      		navRewind: true,
                      		navText: [ '', '' ],
                      		responsive: {
                      			0: {
                      				items: nb_column4,
                      				nav: total_product <= nb_column0 ? false : ((false) ? true: false),
                      			},
                      			480: {
                      				items: nb_column3,
                      				nav: total_product <= nb_column0 ? false : ((false) ? true: false),
                      			},
                      			768: {
                      				items: nb_column2,
                      				nav: total_product <= nb_column0 ? false : ((false) ? true: false),
                      			},
                      			992: {
                      				items: nb_column1,
                      				nav: total_product <= nb_column0 ? false : ((false) ? true: false),
                      			},
                      			1200: {
                      				items: nb_column0,					
                      				nav: total_product <= nb_column0 ? false : ((false) ? true: false),
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
              						lbmoduleid: 1352150
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
              						lbmoduleid: 1352150
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
              
              			
              	})('#so_listing_tabs_1352150');
              });
              //]]>
            </script>
          </div>
        </div>
        <!-- /.modcontent-->
      </div>
    </div>
	
	
	
									
      
	  
	  
	  
	  
	  
	  </div>
                                             

				
				
				
				
				
				
				
				
				
				
				 
                
				
				
				
				
				
				
                  
                   
               
            
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	 




	





        </main>
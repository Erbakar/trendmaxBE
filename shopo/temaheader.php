    <?php define("guvenlik",true);?>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
<link rel="preconnect" href="https://fonts.googleapis.com">
	
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&display=swap" rel="stylesheet">	
	
	<script src="<?php echo $sitetemasi;?>/tema/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
            <link href="<?php echo $sitetemasi;?>/tema/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
            <script src="<?php echo $sitetemasi;?>/tema/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <link href="<?php echo $sitetemasi;?>/tema/javascript/fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
            <link href="<?php echo $sitetemasi;?>/tema/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <?php include("tema.php");?>
		    <link href="<?php echo $sitetemasi;?>/tema//stylesheet/yo-menu/yo-fm.css" type="text/css" rel="stylesheet" media="screen">
            <link href="<?php echo $sitetemasi;?>/tema//stylesheet/yo-menu/yo-am.css" type="text/css" rel="stylesheet" media="screen">
            <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/tema/stylesheet/stil/carousel.css">
            <link href="<?php echo $sitetemasi;?>/tema/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen">
            <link href="<?php echo $sitetemasi;?>/tema/javascript/jquery/swiper/css/oziygo.css" type="text/css" rel="stylesheet" media="screen">
            <link href="<?php echo $sitetemasi;?>/tema/javascript/navaprakashspecialtimer/navaprakashspecialtimer.css" type="text/css" rel="stylesheet" media="screen">
            <link href="<?php echo $sitetemasi;?>/tema/javascript/jquery/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen">
            <script type="text/javascript" src="<?php echo $sitetemasi;?>/tema/js/stil/custom.js"></script>
            <script src="<?php echo $sitetemasi;?>/tema/js/jquery.lazyload.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo $sitetemasi;?>/tema/js/stil/carousel.min.js"></script>
            <script type="text/javascript" src="<?php echo $sitetemasi;?>/tema/js/stil/stil.min.js"></script>
            <script type="text/javascript" src="<?php echo $sitetemasi;?>/tema/js/stil/jquery.custom.min.js"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/common.js" type="text/javascript"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/jquery/yo-menu/jquery.menu-aim.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/tema/supermenu/supermenu.css?v=23">
            <script type="text/javascript" src="<?php echo $sitetemasi;?>/tema/supermenu/supermenu-responsive.js?v=23"></script>
            <script type="text/javascript" src="<?php echo $sitetemasi;?>/tema/supermenu/jquery.hoverIntent.minified.js"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/navaprakashspecialtimer/jquery.countdown.min.js" type="text/javascript"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/jquery/tabs.js" type="text/javascript"></script>
            <script src="<?php echo $sitetemasi;?>/tema/javascript/ocdevwizard/smart_cart/jquery.magnific-popup.min.js?v=2.0.2" type="text/javascript"></script>
            <link href="<?php echo $sitetemasi;?>/tema/javascript/ocdevwizard/smart_cart/magnific-popup.css?v=2.0.2" rel="stylesheet" media="screen">
            <link rel="stylesheet" type="text/css" href="<?php echo $sitetemasi;?>/tema//stylesheet/ocdevwizard/smart_cart/stylesheet.css?v=2.0.2">
            <link href="<?php echo $sitetemasi;?>/tema/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />

<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.prevent();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled: true
		}
	});
});
//--></script> 			
<style>
ul.yo-am li a.am-parent span.am-arrow::after {
  font-family: FontAwesome;
  float: right;
  margin-right: 16px !important;
  content: '\f105';
}
</style>		
<?php echo $ayar['google']; ?>
<?php echo $ayar['yandex']; ?>
<?php echo $ayar['reklam']; ?>



<!-- TEMA EKSTRALARI -->	
<?php if (isset($_GET['sepetsil'])) {
$sepetkaldiralim = temizle($_GET['sepetsil']);
$sil = $ozy->prepare("DELETE FROM sepet WHERE id=?");
$sil->execute(array($sepetkaldiralim));





header("Location: ".$url."");
}



    function yuzdeHesaplama($sayi,$sayi2){
    $newsayi = $sayi - $sayi2;	
	$yuzdelik = $sayi/100;
	$son = $newsayi/$yuzdelik;
    return substr($son,0,2);
   } 
   

   
?>
<style>


.old-price {
  color: #aba4a4;
  font-size: 14px;
  font-weight: 600;
  text-decoration: line-through;
}


.stories.carousel {
  white-space: nowrap;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  overflow-scrolling: touch;
  box-shadow: none !important;
}

.stories.snapgram .story > .item-link > .item-preview {
  border-radius: 50%;
  padding: 2px;
  background: <?php echo $tema['t37'];?> !important;
}

#zuck-modal-content .story-viewer .head .back, #zuck-modal-content .story-viewer .head .right .close {
  font-size: 42px;
  width: 48px;
  height: 48px;
  line-height: 48px;
  cursor: pointer;
  text-align: center;
  color:white !important;
}
</style>
<!-- TEMA EKSTRALARI -->
<?php if($_GET['oziywebs']=='urun'){	
$idx = temizle($_GET['id']); 
$durumx = "1";
$sayfaqqx = $ozy->prepare("SELECT * FROM urunler WHERE seo=:id and durum=:durum");
$pagex = $sayfaqqx->execute([':id' => $idx,':durum' => $durumx]);
$pagex = $sayfaqqx->fetch(PDO::FETCH_ASSOC);

if($pagex['idurum']=='1'){								
if($pagex['kdv']>'0'){
$yenifiyatx = fiyatgoster(KdvDahil($pagex['ifiyat'],$pagex['kdv']));
} else {
$yenifiyatx = fiyatgoster(KdvDahil($pagex['ifiyat'],$system['kdv']));
}
} else {
if($pagex['kdv']>'0'){
$yenifiyatx = fiyatgoster(KdvDahil($pagex['fiyat'],$pagex['kdv']));
} else { 
$yenifiyatx = fiyatgoster(KdvDahil($pagex['fiyat'],$system['kdv']));
}} 

if($pagex['ucretsizkargo']=='1'){
	$kargommmmmmmmmmmmmmmmmmmm = "/ KARGO BEDAVA"; 
}

if($pagex['alode']=='1'){
	$alodeeeeeee = "/ BU ÜRÜNDE ".$pagex['al']." AL ".$page['ode']." ÖDE FIRSATI"; 
}	
	
$metadesc ="".$pagex['adi']."  Sadece ".$yenifiyatx." ".$kargommmmmmmmmmmmmmmmmmmm." ".$alodeeeeeee."";

?>
<meta name="og:description" content="<?php echo $metadesc; ?>">
<meta property="og:image" content="<?php echo $url; ?>/resimler/urunler/<?php echo $pagex['resim']; ?>"/>
<?php }?>  
</head>
<body>
 

            <div class="outer-wrapper">
               <div class="mobile-menu-wrapper">
                  <div class="mobile-menu-inner">
                     <ul class="mobile-menu hidden-lg hidden-md">
					 
					 <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
                        <li><a href="hesabim/">
						<i class="fa fa-user-plus"></i> Hesabim</a></li>
					   <li><a href="cikis/" class="sign-in">
						<i class="fa fa-unlock-alt"></i> Çıkış Yap</a></li>
						
						
                       <?php } else { ?>	
					    <li><a href="uyeol/">
						<i class="fa fa-user-plus"></i> Kayıt Ol</a></li>	
						<li><a href="uyeol/" class="sign-in">
						<i class="fa fa-unlock-alt"></i> Giriş Yap</a></li>
                       
                        <?php } ?>


					   <li><a href="sepet/" title="Sepetim"><i class="fa fa-shopping-cart"></i> Sepetim</a></li>
                        <li><a href="iletisim/" title="İletişim">
						<i class="fa fa-send"></i> İletişim</a></li>
                     </ul>
                     <div class="clearfix"></div>
                     <div id="yo-1" class="yo-menu">
                        <div class="yo-wrapper">
                           <ul class="yo-am">
						   
						   
								
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>	   
						   
						   
                              <li>
                                 <a href="kategori/<?php echo $katadi['seo']; ?>">
                                 <img class="am-icon" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>">
                                 <span class="am-arrow"><?php echo $katadi['adi']; ?></span>
                                 </a>
                                 <ul>
								 
								 
								           <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?> 
									
                                    <li>
                                       <a href="kategori/<?php echo $katadi2['seo']; ?>">
                                       <span class="am-arrow"><?php echo $katadi2['adi']; ?></span>
                                       </a>
                                       <ul>
									   
									   
									                   <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>
                                          <li>
                                             <a href="kategori/<?php echo $katadi22['seo']; ?>">
                                             <span class="am-arrow"><?php echo $katadi22['adi']; ?></span>
                                             </a>
                                          </li>
										  
										  
				<?php } ?>    
                                       </ul>
                                    </li>
									
				<?php } ?>  					
                                 </ul>
                              </li>
							  
							  
      
	  <?php } else { ?>
	  
                              <li>
                                 <a href="kategori/<?php echo $katadi['seo']; ?>">
                                 <img class="am-icon" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>">
                                 <span class="am-arrow"><?php echo $katadi['adi']; ?></span>
                                 </a>
                              </li>
                              
							  
		   <?php }} ?>
                   
								  
							  
							  
                           </ul>
                        </div>
                     </div>
                     <script type="text/javascript"><!--
                        $('#yo-1 ul.yo-am ul').each(function() {
                        if ($(this).children('li').not('.am-image').length > 0) {
                          $(this).prev().addClass('am-parent');
                          $(this).parent('.active').addClass('am-item-open');
                        }
                        });
                        
                        $('#yo-1 a.am-parent, #yo-1 a.am-tb').click(function() {
                        var parent = $(this).parent();
                        parent.toggleClass('am-item-open').find('>ul').slideToggle(200,'linear');
                        parent.siblings('.am-item-open').removeClass('am-item-open').find('>ul').slideUp(200,'linear');
                        return false;
                        });
                        
                        if (0) {
                        if (!localStorage.getItem('yo-am-1')) {
                        if (0) {
                          localStorage.setItem('yo-am-1', 'close');
                        } else {
                          localStorage.setItem('yo-am-1', 'open');
                        }
                        }
                        
                        $('#yo-1 .yo-toggle').click(function() {
                        $(this).toggleClass('yo-open yo-close').next().slideToggle(200,'linear');
                        if ($(this).hasClass('yo-open')) {
                          localStorage.setItem('yo-am-1', 'open');
                        } else {
                          localStorage.setItem('yo-am-1', 'close');
                        }
                        });
                        
                        if (localStorage.getItem('yo-am-1') == 'open') { 
                        $('#yo-1 .yo-toggle').addClass('yo-open').removeClass('yo-close').next().show();
                        } else {
                        $('#yo-1 .yo-toggle').addClass('yo-close').removeClass('yo-open').next().hide();
                        }
                        } else {
                        localStorage.removeItem('yo-am-1');
                        $('#yo-1 .yo-toggle').click(function() {
                        $(this).toggleClass('yo-open yo-close').next().slideToggle(200,'linear');
                        });
                        }
                        //-->
                     </script>				
                  </div>
               </div>
               <div class="site-wrapper">
                  <div class="site-wrapper-overlay"></div>
                 
				 
				 
				 
				 <div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>
                  <nav id="top" class="hidden-sm hidden-xs">
                     <div class="container">
                        <div id="top-links" class="nav pull-left">
                           <ul class="list-inline">
             
                             
                              <li><b><?php echo $tema['t33']; ?></b></li>
                           </ul>
                        </div>
                        <div id="top-links" class="nav pull-right">
                           <ul class="list-inline">
                              <li><a href="tel:<?php echo $ayar['tel']; ?>" target=""><i class="fa fa-phone-square fa-lg"></i> <?php echo $ayar['tel']; ?></a></li>
                              <li style="border-left: 1px solid #d9d9e1;"><a href="favorilerim/" target=""><i class="fa fa-heart fa-lg"></i> Favorilerim</a></li>
							  <li style="border-right: 1px solid #d9d9e1;border-left: 1px solid #d9d9e1;"><a href="bankabilgilerimiz/" target=""><i class="fa fa-credit-card fa-lg"></i> Banka Hesaplarımız</a></li>
                              <li style="border-right: 1px solid #d9d9e1;"><a href="siparissorgulama/" target=""><i class="fa fa-truck fa-lg"></i> Kargo Takibi</a></li>
                              <li style="border-right: 1px solid #d9d9e1;"><a href="bloglar/" target=""><i class="fa fa-rss fa-lg"></i> Blog</a></li>
                              <li><a href="iletisim/" target=""><i class="fa fa-map-marker fa-lg"></i> Bize Ulaşın</a></li>
                           </ul>
                        </div>
                     </div>
                  </nav>
                  <div class="stk">
                     <header class="mobile-header  hidden-md hidden-lg">
                        <div class="container">
                           <div class="row">
                              <div style="padding:0px;" class="col-xs-3">
                                 <a href="javascript:void(0);" class="to-navigation"></a>
                              </div>
                              <div class="col-xs-6 text-center">
                                 <div id="logo">
                                    <a href="<?php echo $url;?>">
									<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" title="<?php echo $ayar['siteadi'];?>" alt="<?php echo $ayar['siteadi'];?>" class="img-responsive"></a>
                                 </div>
                              </div>
                              <div style="padding:0px;" class="col-xs-3">
                                 <a href="javascript:void(0);" class="to-search"></a>
                              </div>
                           </div>
                        </div>
                        <div class="mobile-search  hidden-md hidden-lg" id="hecader">
                            <form action="arama/" method="GET">
                         
						   <div id="search" class="input-group">
						   
                              <input type="text" name="arama" placeholder="Ne aramıştınız..." required class="form-control input-lg">
                              <span class="input-group-btn">
                              <button type="submit" class="btn btn- btn-lg" style="color:#fff;"> ARA</button>
                              </span>
							  
                           </div>
						   </form>
                        </div>
                     </header>
                  </div>
                  <div class="stk hidden-xs hidden-sm">
                     <header class=" hidden-xs hidden-sm" id="header">
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-1   hepkat1 hidden-xs hidden-sm hidden-md"> <a href="javascript:void(0);" class="to-navigation"><i class="fa fa-bars" style="color: white;margin-top:15px; font-size: 40px;
                                 "></i></a></div>
                              <div class="col-lg-3 col-sm-3 mcenter">
                                
								  <div id="logo">
                                    <a href="<?php echo $url;?>">
									<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" title="<?php echo $ayar['siteadi'];?>" alt="<?php echo $ayar['siteadi'];?>" class="img-responsive"></a>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-xs-10">
                                 <div class=" autosearch-wrapper">
                                    <form method="GET" action="arama/">
                                       <div id="search0" class="input-group">
                                          <input class="search_query form-control" type="text" value="" size="35" autocomplete="off" placeholder="Aradığınız Ürün Adını Yazınız.." name="arama" required>
                                      
                                          <button type="submit" class="button-search autosearch-submit" name="submit_search"> <i class="fa fa-search fa-lg"></i></button>
                                       </div>
                                    </form>
                                    <div class="clear clr"></div>
                                 </div>
                                 <script type="text/javascript">
                                    /* Autocomplete */
                                    (function($) {
                                    	function Autocomplete1(element, options) {
                                    		this.element = element;
                                    		this.options = options;
                                    		this.timer = null;
                                    		this.items = new Array();
                                    
                                    		$(element).attr('autocomplete', 'off');
                                    		$(element).on('focus', $.proxy(this.focus, this));
                                    		$(element).on('blur', $.proxy(this.blur, this));
                                    		$(element).on('keydown', $.proxy(this.keydown, this));
                                    
                                    		$(element).after('<ul class="dropdown-menu autosearch"></ul>');
                                    		$(element).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));
                                    	}
                                    
                                    	Autocomplete1.prototype = {
                                    		focus: function() {
                                    			this.request();
                                    		},
                                    		blur: function() {
                                    			setTimeout(function(object) {
                                    				object.hide();
                                    			}, 200, this);
                                    		},
                                    		click: function(event) {
                                    			event.prevent();
                                    			value = $(event.target).parent().attr("href");
                                    			if (value) {
                                    				window.location = value.replace(/&amp;/gi,'&');
                                    			}
                                    		},
                                    		keydown: function(event) {
                                    			switch(event.keyCode) {
                                    				case 27: // escape
                                    					this.hide();
                                    					break;
                                    				:
                                    					this.request();
                                    					break;
                                    			}
                                    		},
                                    		show: function() {
                                    			var pos = $(this.element).position();
                                    
                                    			$(this.element).siblings('ul.dropdown-menu').css({
                                    				top: pos.top + $(this.element).outerHeight(),
                                    				left: pos.left
                                    			});
                                    
                                    			$(this.element).siblings('ul.dropdown-menu').show();
                                    		},
                                    		hide: function() {
                                    			$(this.element).siblings('ul.dropdown-menu').hide();
                                    		},
                                    		request: function() {
                                    			clearTimeout(this.timer);
                                    
                                    			this.timer = setTimeout(function(object) {
                                    				object.options.source($(object.element).val(), $.proxy(object.response, object));
                                    			}, 200, this);
                                    		},
                                    		response: function(json) {
                                    			console.log(json);
                                    			html = '';
                                    
                                    			if (json.length) {
                                    				for (i = 0; i < json.length; i++) {
                                    					this.items[json[i]['value']] = json[i];
                                    				}
                                    
                                    				for (i = 0; i < json.length; i++) {
                                    					if (!json[i]['category']) {
                                    						html += '<li class="media" data-value="' + json[i]['value'] + '">';
                                    						if(json[i]['simage']) {
                                    							html += '	<a class="media-left" href="' + json[i]['link'] + '"><img class="pull-left" src="' + json[i]['image'] + '"></a>';	
                                    						}
                                    						html += '<div class="media-body">	<a href="' + json[i]['link'] + '"><span>' + json[i]['label'] + '</span></a>';
                                    						if(json[i]['sprice']){
                                    							html += '	<div class="price">';
                                    							if (!json[i]['special']) {
                                    								html += json[i]['price'];
                                    							} else {
                                    								html += '<span class="price-old">' + json[i]['price'] + '</span><span class="price-new">' + json[i]['special'] + '</span>';
                                    							}
                                    							if (json[i]['tax']) {
                                    								html += '<br />';
                                    								html += '<span class="price-tax">Vergiler Hariç:' + json[i]['tax'] + '</span>';
                                    							}
                                    							html += '	</div>';
                                    						}
                                    						html += '</div></li><li class="clearfix"></li>';
                                    					}
                                    				}
                                    				//html += '<li><a href="index.php?route=product/search&search='+g.term+'&category_id='+category_id+'&sub_category=true&description=true" onclick="window.location=this.href">'+text_view_all+'</a></li>';
                                    
                                    				// Get all the ones with a categories
                                    				var category = new Array();
                                    				for (i = 0; i < json.length; i++) {
                                    					if (json[i]['category']) {
                                    						if (!category[json[i]['category']]) {
                                    							category[json[i]['category']] = new Array();
                                    							category[json[i]['category']]['name'] = json[i]['category'];
                                    							category[json[i]['category']]['item'] = new Array();
                                    						}
                                    						category[json[i]['category']]['item'].push(json[i]);
                                    					}
                                    				}
                                    				for (i in category) {
                                    					html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';
                                    					for (j = 0; j < category[i]['item'].length; j++) {
                                    						html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
                                    					}
                                    				}
                                    			}
                                    			if (html) {
                                    				this.show();
                                    			} else {
                                    				this.hide();
                                    			}
                                    			$(this.element).siblings('ul.dropdown-menu').html(html);
                                    		}
                                    	};
                                    
                                    	$.fn.autocomplete1 = function(option) {
                                    		return this.each(function() {
                                    			var data = $(this).data('autocomplete');
                                    			if (!data) {
                                    				data = new Autocomplete1(this, option);
                                    				$(this).data('autocomplete', data);
                                    			}
                                    		});
                                    	}
                                    })(window.jQuery);
                                    $(document).ready(function() {
                                    	var selector = '#search0';
                                    	var total = 0;
                                    	var show_image = true;
                                    	var show_price = true;
                                    	var search_sub_category = true;
                                    	var search_description = true;
                                    	var width = 64;
                                    	var height = 64;
                                    
                                    	$(selector).find('input[name=\'search\']').autocomplete1({
                                    		delay: 500,
                                    		source: function(request, response) {
                                    			var category_id = $(".category_filter select[name=\"category_id\"]").first().val();
                                    			if(typeof(category_id) == 'undefined')
                                    				category_id = 0;
                                    			var limit = 5;
                                    			var search_sub_category = search_sub_category?'&sub_category=true':'';
                                    			var search_description = search_description?'&description=true':'';
                                    			$.ajax({
                                    				url: 'index.php?route=extension/module/pavautosearch/autocomplete&filter_category_id='+category_id+'&width='+width+'&height='+height+'&limit='+limit+search_sub_category+search_description+'&filter_name='+encodeURIComponent(request),
                                    				dataType: 'json',
                                    				success: function(json) {		
                                    					response($.map(json, function(item) {
                                    						if($('.pavautosearch_result')){
                                    							$('.pavautosearch_result').first().html("");
                                    						}
                                    						total = 0;
                                    						if(item.total){
                                    							total = item.total;
                                    						}
                                    						return {
                                    							price:   item.price,
                                    							speical: item.special,
                                    							tax:     item.tax,
                                    							label:   item.name,
                                    							image:   item.image,
                                    							link:    item.link,
                                    							value:   item.product_id,
                                    							sprice:  show_price,
                                    							simage:  show_image,
                                    						}
                                    					}));
                                    				}
                                    			});
                                    		},
                                    	}); // End Autocomplete 
                                    
                                    });// End document.ready
                                    
                                 </script>      
                              </div>
                              <div class="col-lg-4 col-sm-4 col-xs-0">
                                 <div class="hidden-xs hidden-sm" id="ust">
                              <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	 
                                    <div style="padding:0px;" class="col-sm-5">
                                       <div id="user-menu">
                                          <ul style="padding: 6px  6px 6px 6px;margin:0px 0px;" class="list-inline">
                                             <li><a href="hesabim/"><span class="hidden-xs hidden-sm hidden-md"> 
											 <i class="fa fa-user fa-lg" style="color:#fff;"></i>
											 <span class="girisyap" title="Hesabım">
											 Hoşgeldin</span></span></a>
											 <a href="hesabim/"><span class="uyeols" title="Hesabım"><?php echo $uyebilgileri['isim'];?></span></a></li>
                                          </ul>
                                       </div>
                                    </div>
									
								 <?php } else { ?>	
									
									   <div style="padding:0px;" class="col-sm-5">
                                       <div id="user-menu">
                                          <ul style="padding: 6px  6px 6px 6px;margin:0px 0px;" class="list-inline">
                                             <li><a href="uyeol/"><span class="hidden-xs hidden-sm hidden-md">
											 <i class="fa fa-user fa-lg" style="color:#fff;"></i>
											 <span class="girisyap" title="Giriş Yap">Giriş Yap</span></span></a>
											 <a href="uyeol/"><span class="uyeols" title="Kayıt Ol">veya  Kayıt Ol</span></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 <?php } ?>
                                    <div class="pull-right" class="col-lg-12">
                                       <div id="cart" class="btn-group btn-block">
                                          <a href="sepet/" class="btn btn-inverse btn-block btn-lg dropdown-toggle pull-right">
                                          <i class="fa fa-shopping-cart fa-lg"></i>Sepetim <span class="badgeAlert" id="cart-total"><?php echo $sepetsayi;?></span></button>
                                          </a>
                                       </div>
                                    
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </header>
                  </div>
                  <nav id="menu" class="navbar hidden-xs hidden-sm">
                     <div class="container">
                        <div style="padding:0px;" class="col-lg-11 col-sm-12 col-md-12 col-xs-12">
                           <script type="text/javascript"> 
                              $(document).ready(function(){ 
                              	var setari = {   
                              				over: function() { 
                              		  if ($('#supermenu').hasClass('superbig')) {
                              			$(this).find('.bigdiv').slideDown('fast'); 
                              		  }
                              		}, 
                              		out: function() { 
                              		  if ($('#supermenu').hasClass('superbig')) {
                              			$(this).find('.bigdiv').slideUp('fast'); 
                              		  }
                              		},
                              				timeout: 150
                              	};
                              	$("#supermenu ul li.tlli").hoverIntent(setari);
                              	var setariflyout = {   
                              		over: function() { 
                              		  if ($('#supermenu').hasClass('superbig')) {
                              			$(this).find('.flyouttoright').fadeIn('fast');
                              		  }
                              			}, 
                              		out: function() { 
                              		  if ($('#supermenu').hasClass('superbig')) {
                              			$(this).find('.flyouttoright').fadeOut('fast');
                              		  }
                              		},
                              		timeout: 200
                              	};
                              	$("#supermenu ul li div.bigdiv.withflyout > .withchildfo").hoverIntent(setariflyout);
                              });
                           </script>
                           <nav id="supermenu" class=" superbig">
                              <a class="mobile-trigger">Kategoriler</a>
                              <ul>
							  
							  		<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>	
                                 <li class="tlli m<?php echo $katadi['seo']; ?>">
                                    <a class="superdropper" href="#"><span>+</span><span>-</span></a>
                                    <a class="tll" href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                                    <div class="bigdiv" data-width="850" style="width: 850px;">
                                     
                                       <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?> 
									   
									   
                                          <div class="withchild has<?php echo $katadi2['seo']; ?>">
                                             <a class="theparent" href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                                             <span class="mainexpand"></span>
                                             <ul class="child-level">
                                               
											    <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>
                                                <li><a href="kategori/<?php echo $katadi22['seo']; ?>"> <?php echo $katadi22['adi']; ?></a></li>
                                         <?php } ?>     


											</ul>
                                          </div>
                                         
                                     <?php } ?>  
									 
									 
                                   
                                    </div>
                                 </li>
								 
								 
					             <li class="tlli sep"><span class="item-sep">&nbsp;</span></li>
                                			 
			                       <?php } else { ?>		
					  
								 
								 
        
                                 <li class="tlli">
                                    <a class="tll" href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                                 </li>
                                
                                <li class="tlli sep"><span class="item-sep">&nbsp;</span></li>
                                
								 <?php }} ?>
                   
								 
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </nav>
                 
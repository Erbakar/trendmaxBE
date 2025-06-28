    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
    <link rel="shortcut icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
  
   
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/soconfig/css/lib.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/ie9-and-up.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/icomoon/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_megamenu/so_megamenu.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_megamenu/wide-grid.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_home_slider/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_home_slider/css/animate.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_home_slider/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_extra_slider/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_extra_slider/css/css3.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_latest_blog/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_page_builder/css/style_render_281.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_page_builder/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_newletter_custom_popup/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_page_builder/css/style_render_289.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_countdown/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_basic_products/css/style.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_searchpro/css/chosen.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_searchpro/css/so_searchpro.css">
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/javascript/so_sociallogin/css/so_sociallogin.css">
	<?php include_once ("".$sitetemasi."/css/layout24/orange.php");?>
    <?php include_once ("".$sitetemasi."/css/header/header24.php");?>
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/footer/footer24.css">
	
	
	
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/responsive.css">
    <script src="<?php echo $sitetemasi;?>/javascript/jquery/jquery-2.1.1.min.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/soconfig/js/libs.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/soconfig/js/so.system.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/soconfig/js/sticky-kit.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/lazysizes/lazysizes.min.js"></script>
	<script src="<?php echo $sitetemasi;?>/js/jquery.nav.js"></script>
	<script src="<?php echo $sitetemasi;?>/js/so.custom.js"></script>
	<script src="<?php echo $sitetemasi;?>/js/custom.js"></script>
	<script src="<?php echo $sitetemasi;?>/js/common.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_megamenu/so_megamenu.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_home_slider/js/owl.carousel.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_page_builder/js/section.js"></script>
	<script src="<?php echo $sitetemasi;?>/avascript/so_page_builder/js/modernizr.video.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_page_builder/js/swfobject.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_page_builder/js/video_background.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_countdown/js/jquery.cookie.js"></script>
	<script src="<?php echo $sitetemasi;?>/javascript/so_searchpro/js/chosen.jquery.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Muli:300,400,600,700&amp;display=swap' rel='stylesheet' type='text/css'>

   <style type="text/css">
      body, #wrapper{font-family: Muli !important;}
    </style>
<!-- Tema Alanı -->
	

<style>

#newsletter-popup{
  margin: 70px auto;
  padding:30px 40px 40px;
  background: #f5828a;
  border-radius: 5px;
  width: 50%;
  position: relative;
  transition: all 1s ease-in-out;
  min-height: 300px;
}

.-popup{
display:none !important;
}

.webgizle{
display:none !important;
}

.mobilgizle{
display:block !important;
}

@media screen and (max-device-width: 480px) and (orientation: portrait){
.altbar{
display:block !important;
}


.webgizle{
display:block !important;
}

.mobilgizle{
display:none !important;
}



}	

@media screen and (max-width: 1366px){
  #newsletter-popup{
    width: 100%;
  }
  .altbar{
display:block !important;
}
}

@media screen and (max-width: 992px){
  #newsletter-popup{
    width: 100%;
  }
  .altbar{
display:block !important;
}
}

.newsletter-overlay{
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 1;
  display: none;
  z-index: 999999999999;
}

#newsletter-popup h3{
  color: #fff;
  font-size: 24px;
  margin: 0 0 10px;
  
}

#newsletter-popup input[type="text"]{
    width: 100%;
    height: 36px;
    border: none;
    text-indent: 10px;
    font-size: 13px;
    border-bottom: 2px solid #faeaec;
    border-top: 2px solid #fff;
    padding: 0;
    color: #666;
    margin-bottom: 15px;
}

#newsletter-popup input[type="submit"]{
  background: #6EC5D9;
    border: none;
    border-bottom: 3px solid #57B8CE;
    color: #fff;
    text-align: center;
    display: block;
    padding: 0;
    line-height: 1.5;
    width: 100%;
    cursor: pointer;
    margin: 0;
    font-size: 21px;

}

#newsletter-popup .popup-close{
  color: #fff;
  height: 30px;
  width: 30px;
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  text-decoration: none;
  line-height: 30px;

  font-weight: bold;
}
</style>
<script>
			$(function(){
				$(".yenile_buton").click(function(){
					$(".guvenlik_resmi").attr("src","<?php echo $sitetemasi;?>/captcha.php?d="+Math.random());
				});
			});
</script>
<script>
$(document).ready(function() {
		
		$('input[name="uyetip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#kurumsal").show();
			$("#kurumsal2").show();
			$("#kurumsal3").show();
			$("#bireysel").hide();
		}
		else{
			$("#kurumsal").hide();
			$("#kurumsal2").hide();
			$("#kurumsal3").hide();
			$("#bireysel").show();
		}
	});	
	
	
	$('input[name="yeniletip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#kurumsal").show();
			$("#kurumsal2").show();
			$("#kurumsal3").show();
			$("#bireysel").hide();
		}
		else{
			$("#kurumsal").hide();
			$("#kurumsal2").hide();
			$("#kurumsal3").hide();
			$("#bireysel").show();
		}
	});	
	
	
		$('input[name="sifretip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#sifre1").show();
		}
		else{
			$("#sifre1").hide();

		}
	});	
	
	
	
		$('input[name="faturatip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#faturaadres").show();
			$("#faturail").show();
			$("#faturailce").show();
		}
		else{
			$("#faturaadres").hide();
			$("#faturail").hide();
			$("#faturailce").hide();
		}
	});	
	
	

    
		$('#adresgeldi').on('change', function() {			
        $("#uyeadresal").val($(this).children("option:selected").attr("data-adres"));		
        $("#adresilce").val($(this).children("option:selected").attr("data-ilce"));
        $("#adresil").val($(this).children("option:selected").attr("data-il"));

        		 
			
		});	
       




    });	
		
		
	function detayfiyathesapla(obj){
		var detayfiyat=parseFloat($("#detayfiyat").attr("data-price"));
		$(".varyantselect option:selected").each(function(){
			detayfiyat+=parseFloat($(this).attr("data-price"));
		});
		$("input[type=radio]:checked").each(function(){
			detayfiyat+=parseFloat($(this).attr("data-price"));
		});
		detayfiyat*=parseInt($(".adetsayisi").val());
		$("#sonfiyat").html(detayfiyat.toFixed(2)+" TL");
		
	}
	

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }        

	   
	var delay = 1000; //in milleseconds

jQuery(document).ready(function($){
  setTimeout(function(){ showNewsletterPopup(); }, delay);
  
  $('.popup-close').click(function(){
      $('.newsletter-overlay').hide();
      
      //when closed create a cookie to prevent popup to show again on refresh
      setCookie('newsletter-popup', 'popped', 30);
  });
});

function showNewsletterPopup(){
  if( getCookie('newsletter-popup') == ""){
     $('.newsletter-overlay').show();
     setCookie('newsletter-popup', 'popped', 30);
  }
  else{
    console.log("Newsletter popup blocked.");
  }
}


function setCookie(cname,cvalue,exdays)
{
    var d = new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+"; path=/";
}

function getCookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) 
    {
        var c = jQuery.trim(ca[i]);
        if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
}
</script>
  <link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
   <script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>
	<?php if($tema['t11']){?>
   <div  class="newsletter-overlay">

  <div id="newsletter-popup" style="background:none !important;">
    <a href="#" class="popup-close">X</a>
      <div class="row justify-content-center">
            <div class="col-12">
              <a href="<?php echo $tema['t10']; ?>"><img style="box-shadow: 2px 2px 16px white;width: 100%;height: 100%;" src="resimler/temaayarlari/<?php echo $tema['t9']; ?>"></a></img>
                      
                  
                
            </div>
        </div>
  </div>
</div>
<?php } ?>

		   <link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
           <script src="boss/assets/toastr/toastr.min.js"></script>
           <?php require_once('func/global.php');?>
         <!-- Tema Alanı -->
	

	
   <?php echo $ayar['google']; ?>
   <?php echo $ayar['yandex']; ?>
   <?php echo $ayar['reklam']; ?>
      <?php 
    function yuzdeHesaplama($sayi,$sayi2){
    $newsayi = $sayi - $sayi2;	
	$yuzdelik = $sayi/100;
	$son = $newsayi/$yuzdelik;
    return substr($son,0,2);
   } 
   

   
   ?>  




</head>
 <body class="common-home ltr layout-24">
 
 
<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>

 
    <div id="wrapper" class="wrapper-full banners-effect-10">
      <div class="so-pre-loader no-pre-loader">
        <div class="so-loader-line" id="line-load"></div>
      </div>
      <header id="header" class=" variant typeheader-24">
        <div class="header-top hidden-compact">
          <div class="container">
            <div class="row">
              <div class="header-top-left col-lg-6 hidden-md hidden-xs hidden-sm">
                <div class="hidden-md hidden-sm hidden-xs welcome-msg">
                 <?php echo $tema['t4']; ?>
                </div>
              </div>
              <div class="header-top-right collapsed-block col-lg-6 col-md-12 col-sm-12 col-xs-12">
               
                <ul class="top-link list-inline">
                 
                <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
				<li class="log login hidden-xs"><i class="fa fa-lock"></i><a class="link-lg" href="hesabim">Hesabım </a> veya <a href="cikis/">Çıkış</a></li>
                <?php } else { ?>	
                <li class="log login hidden-xs"><i class="fa fa-lock"></i><a class="link-lg" href="uyeol/">Üye Ol </a> veya <a href="uyeol/">Giriş Yap</a></li>
                 <?php } ?>

			  <li class="log login hidden-xs"><i class="fa fa-university"></i><a class="link-lg" href="bankabilgilerimiz/">Banka Hesaplarımız</li>
                 <li class="log login hidden-xs"><i class="fa fa-map-marker"></i><a class="link-lg" href="iletisim/">Bize Ulaşın</li>
               
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="header-middle hidden-compact">
          <div class="container">
            <div class="row">
              <div class="navbar-logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <div class="logo">
              <a href="anasayfa">
			  <img class="lazyload" style="margin-top: -20px;width: 250px;" data-sizes="auto" src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" data-src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" title="Logo" alt="Logo" /></a>
            </div>
              </div>
              <div class="middle2 col-lg-5 col-md-6 col-sm-5">
                <div class="search-header-w">
                  <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>
                  <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                   <form method="GET" action="arama/">
                      <div  class="search input-group form-group">
                	<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" name="arama" placeholder="Ne aramıştınız ?" required>
                   
                        <button type="submit" class="button-search btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                      </div>
                    
                    </form>
                  </div>
                  <script type="text/javascript">
                    jQuery(document).ready(function($) {
                    	$(".chosen-select").chosen({
                    		width: '100%'
                    	});
                    })
                  </script><script type="text/javascript">
                    // Autocomplete */
                    (function($) {
                    	$.fn.Soautocomplete = function(option) {
                    		return this.each(function() {
                    			this.timer = null;
                    			this.items = new Array();
                    
                    			$.extend(this, option);
                    
                    			$(this).attr('autocomplete', 'off');
                    
                    			// Focus
                    			$(this).on('focus', function() {
                    				this.request();
                    			});
                    
                    			// Blur
                    			$(this).on('blur', function() {
                    				setTimeout(function(object) {
                    					object.hide();
                    				}, 200, this);
                    			});
                    
                    			// Keydown
                    			$(this).on('keydown', function(event) {
                    				switch(event.keyCode) {
                    					case 27: // escape
                    						this.hide();
                    						break;
                    					default:
                    						this.request();
                    						break;
                    				}
                    			});
                    
                    			// Click
                    			this.click = function(event) {
                    				event.preventDefault();
                    
                    				value = $(event.target).parent().attr('data-value');
                    
                    				if (value && this.items[value]) {
                    					this.select(this.items[value]);
                    				}
                    			}
                    
                    			// Show
                    			this.show = function() {
                    				var pos = $(this).position();
                    
                    				$(this).siblings('ul.dropdown-menu').css({
                    					top: pos.top + $(this).outerHeight(),
                    					left: pos.left
                    				});
                    
                    				$(this).siblings('ul.dropdown-menu').show();
                    			}
                    
                    			// Hide
                    			this.hide = function() {
                    				$(this).siblings('ul.dropdown-menu').hide();
                    			}
                    
                    			// Request
                    			this.request = function() {
                    				clearTimeout(this.timer);
                    
                    				this.timer = setTimeout(function(object) {
                    					object.source($(object).val(), $.proxy(object.response, object));
                    				}, 200, this);
                    			}
                    
                    			// Response
                    			this.response = function(json) {
                    				html = '';
                    
                    				if (json.length) {
                    					for (i = 0; i < json.length; i++) {
                    						this.items[json[i]['value']] = json[i];
                    					}
                    
                    					for (i = 0; i < json.length; i++) {
                    						if (!json[i]['category']) {
                    						html += '<li class="media" data-value="' + json[i]['value'] + '" title="' + json[i]['label'] + '">';
                    						if(json[i]['image'] && json[i]['show_image'] && json[i]['show_image'] == 1 ) {
                    							html += '	<a class="media-left" href="' + json[i]['link'] + '"><img class="pull-left" src="' + json[i]['image'] + '"></a>';
                    						}
                    
                    						html += '<div class="media-body">';
                    						html += '<a href="' + json[i]['link'] + '" title="' + json[i]['label'] + '"><span>' +json[i]['cate_name'] + json[i]['label'] + '</span></a>';
                    						if(json[i]['price'] && json[i]['show_price'] && json[i]['show_price'] == 1){
                    							html += '	<div class="box-price">';
                    							if (!json[i]['special']) {
                    								html += '<span class="price">Price : '+json[i]['price']+'</span>';;
                    							} else {
                    								html += '</span><span class="price-new">' + json[i]['special'] + '</span>'+'<span class="price-old" style="text-decoration:line-through;">' + json[i]['price']  ;
                    							}
                    							
                    							html += '	</div>';
                    						}
                    						html += '</div></li>';
                    						html += '<li class="clearfix"></li>';
                    						}
                    					}
                    
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
                    
                    				$(this).siblings('ul.dropdown-menu').html(html);
                    			}
                    
                    			$(this).after('<ul class="dropdown-menu"></ul>');
                    
                    		});
                    	}
                    })(window.jQuery);
                    
                    $(document).ready(function() {
                    	var selector = '#search';
                    	var total = 0;
                    	var showimage = 1;
                    	var showprice = 1;
                    	var character = 3      ;
                    	var height = 70;
                    	var width = 70;
                    
                    	$(selector).find('input[name=\'search\']').Soautocomplete({
                    		delay: 500,
                    		source: function(request, response) {
                    			var category_id = $(".select_category select[name=\"category_id\"]").first().val();
                    			if(typeof(category_id) == 'undefined')
                    				category_id = 0;
                    				var limit = 5;
                    			if(request.length >= character){
                    				$.ajax({
                    					url: 'index.php?route=extension/module/so_searchpro/autocomplete&filter_category_id='+category_id+'&limit='+limit+'&width='+width+'&height='+height+'&filter_name='+encodeURIComponent(request),
                    					dataType: 'json',
                    					success: function(json) {
                    						response($.map(json, function(item) {
                    							total = 0;
                    							if(item.total){
                    								total = item.total;
                    							}
                    
                    							return {
                    								price:   item.price,
                    								special: item.special,
                    								tax		:     item.tax,
                    								label:   item.name,
                    								cate_name:   (item.category_name) ? item.category_name + ' > ' : '',
                    								image:   item.image,
                    								link:    item.link,
                    								minimum:    item.minimum,
                    								show_price:  showprice,
                    								show_image:  showimage,
                    								value:   item.product_id,
                    							}
                    						}));
                    					}
                    				});
                    			}
                    		},
                    	});
                    });
                    
                  </script>
                </div>
              </div>
              <div class="middle3 col-lg-4 col-md-3 col-sm-4">
                <div class="shopping_cart">
                   <div id="cart" class="btn-shopping-cart">
                <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                  <div class="shopcart">
                   <span class="icon-c">
        <i class="fa fa-shopping-bag"></i>
      </span>
                    <div class="shopcart-inner">
                      <p class="text-shopping-cart">
                        Sepetiniz
                      </p>
                      <span class="total-shopping-cart cart-total-full">
                      <span class="items_cart"><?php echo $sepetsayi;?></span><span class="items_cart2"> ürün</span><span class="items_carts"> <?php echo fiyatgoster($sepetbedeli);?></span>
                      </span>
                    </div>
                  </div>
                </a>
				
				<?php if($sepetsayi>='1'){?>
				
				<ul class="dropdown-menu pull-right shoppingcart-box">
				<li class="content-item">
      <table class="table table-striped" style="margin-bottom:10px;">
        <tbody>
		        <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>			
			<tr>
          <td class="text-center size-img-cart"> 
		  <a href="urun/<?php echo $sepet['seo'];?>">
		  <img class="img-thumbnail lazyautosizes lazyloaded" data-sizes="auto" src="resimler/urunler/<?php echo $sepet['resim'];?>" data-src="resimler/urunler/<?php echo $sepet['resim'];?>" sizes="64px"></a> </td>
          <td class="text-left"><a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?><br><?php echo $sepet['ekurun'];?></a>            
		  </td>
          <td class="text-right">x <?php echo $sepet['adet'];?></td>
          <td class="text-right"><?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?></td>
          <td class="text-center">
		  <form action="" method="POST">
										<input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
		  <button name="delete" type="submit" title="Sil" class="btn btn-danger btn-xs">
		  <i class="fa fa-trash-o"></i></button>
		    </form>
		  </td>
        </tr>
           <?php }} ?>       
                     
					 </tbody>
					 </table>
    </li>
	
	<li>
		<div class="checkout clearfix">
		<a href="anasayfa" class="btn btn-view-cart inverse"> Alışverişe Devam</a>
		<a href="sepet/" class="btn btn-checkout pull-right">Satın Al</a>
		</div>
	</li></ul>
				
				<?php } else { ?>
                <ul class="dropdown-menu pull-right shoppingcart-box">
                  <li>
                    <p class="text-center empty">Alışveriş Sepetiniz Boş</p>
                  </li>
                </ul>
				<?php } ?>
				
              </div>
                </div>
				
				
				
				
                <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                  
                  <li class="wishlist hidden-xs">
				  <a href="favorilerim/" id="" class="top-link-wishlist" title="Favorilerim"><i class="fa fa-heart"></i></a></li>
                
				
				</ul>
				
				   <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                  
                  <li class="wishlist hidden-xs"><a href="urunkarsilastirma/" id="" class="top-link-wishlist" title="Karşılaştırma Listesi"><i class="fa fa-refresh"></i></a></li>
                
				
				</ul>
				
				    <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                  
                  <li class="wishlist hidden-xs"><a href="kampanyalar/" id="" class="top-link-wishlist" title="Kampanyalar"><i class="fa fa-gift"></i></a></li>
                
				
				</ul>
				
				
				
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom ">
          <div class="container">
            <div class="row">
              <div class="main-menu col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="responsive megamenu-style-dev">
                  <nav class="navbar-default">
                    <div class=" container-megamenu   horizontal mobilgizle">
                      <div class="navbar-header"><button type="button" id="show-megamenu" data-toggle="collapse"  class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                      <div class="megamenu-wrapper">
                        <span id="remove-megamenu" class="fa fa-times"></span>
                        <div class="megamenu-pattern">
                          <div class="container">
                            <ul class="megamenu"
                              data-transition="slide" data-animationtime="500">
                           
						          <li class="home">
                            <a href="anasayfa">
                            <span><strong>Anasayfa</strong></span>
                            </a>
                          </li>
						  
					

						  
						  
						  
						  
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustgoster='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
						  
                     
                        
                          <li class="item-vertical css-menu with-sub-menu hover mobilgizle" >
                            <p class='close-menu'></p>
                            <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix" >
                            <span>
                            <strong><?php echo $katadi['adi']; ?></strong>
                            </span>
                            <b class="fa fa-angle-down"></b>
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
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>		
								
                                              <li>
                                                <a href="kategori/<?php echo $katadi2['seo']; ?>" onclick="window.location = 'kategori/<?php echo $katadi2['seo']; ?>'" class="main-menu"><?php echo $katadi2['adi']; ?><b class="fa fa-angle-right"></b></a>
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
						   
                         
                         
                          <li class="item-vertical mobilgizle" >
                            <p class='close-menu'></p>
                            <a href="kategori/<?php echo $katadi['seo']; ?>" class="clearfix" >
                            <span>
                            <strong><?php echo $katadi['adi']; ?></strong>
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
              <div class="bottom2 col-lg-4 hidden-md hidden-sm hidden-xs">
                <div class="telephone hidden-xs hidden-sm hidden-md" >
                  <ul>
                    <li><a href="siparissorgulama/"><i class="fa fa-truck"></i>Sipariş Takip</a></li>
                    <li class="hotline"><i class="fa fa-phone-square"></i>Müşteri Hizmetleri    <a href="tel:<?php echo $ayar['tel'];?>"><?php echo $ayar['tel'];?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
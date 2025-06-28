    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <link rel="shortcut icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/js/jquery.min.js"></script><?php include('stil.php');?>
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/simple/css/simple-line-icons.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script type="text/javascript">
  var baseDir = "<?php echo $url;?>/";
  var compareNotifications = {"addCompare":"Karşılaştır","removeCompare":"Listeden Kaldır"};
  var compareProductsIds = [];
  var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"$0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"$0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"$0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"$0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":0,"summary_string":"0 items","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Ayo Responsive Prestashop 1.7","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-full-width":true,"page-index":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Ayo Responsive Prestashop 1.7","logo":"\/v17\/laber_ayo\/homepage2\/img\/home-page-2-logo-15941082572.jpg","stores_icon":"\/v17\/laber_ayo\/homepage2\/img\/logo_stores.png","favicon":"\/v17\/laber_ayo\/homepage2\/img\/favicon.ico"},"urls":{"base_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/","current_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/","shop_domain_url":"http:\/\/laberpresta.com","img_ps_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/","img_cat_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/c\/","img_lang_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/l\/","img_prod_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/","img_manu_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/m\/","img_sup_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/su\/","img_ship_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/s\/","img_store_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/st\/","img_col_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/co\/","img_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/themes\/laber_ayo_home2_v2\/assets\/img\/","css_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/themes\/laber_ayo_home2_v2\/assets\/css\/","js_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/themes\/laber_ayo_home2_v2\/assets\/js\/","pic_url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/upload\/","pages":{"address":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/address","addresses":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/addresses","authentication":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/login","cart":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/cart","category":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=category","cms":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=cms","contact":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/contact-us","discount":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/discount","guest_tracking":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/guest-tracking","history":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/order-history","identity":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/identity","index":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/","my_account":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/my-account","order_confirmation":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/order-confirmation","order_detail":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=order-detail","order_follow":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/order-follow","order":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/order","order_return":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=order-return","order_slip":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/credit-slip","pagenotfound":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/page-not-found","password":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/password-recovery","pdf_invoice":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=pdf-invoice","pdf_order_return":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=pdf-order-return","pdf_order_slip":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=pdf-order-slip","prices_drop":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/prices-drop","product":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/index.php?controller=product","search":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/search","sitemap":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/sitemap","stores":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/stores","supplier":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/supplier","register":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/login?create_account=1","order_login":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/order?login=1"},"alternative_langs":{"en-us":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/","fr-fr":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/fr\/"},"theme_assets":"\/v17\/laber_ayo\/homepage2\/themes\/laber_ayo_home2_v2\/assets\/","actions":{"logout":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/?mylogout="},"no_picture_image":{"bySize":{"cart_default":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-cart_default.jpg","width":125,"height":125},"small_default":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-small_default.jpg","width":190,"height":190},"home_default":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-home_default.jpg","width":410,"height":410},"home_default_fashion":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-home_default_fashion.jpg","width":410,"height":487},"medium_default":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-medium_default.jpg","width":550,"height":550},"medium_default_fashion":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-medium_default_fashion.jpg","width":550,"height":653},"large_default":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-large_default.jpg","width":800,"height":800},"large_default_fashion":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-large_default_fashion.jpg","width":800,"height":950}},"small":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-cart_default.jpg","width":125,"height":125},"medium":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-medium_default.jpg","width":550,"height":550},"large":{"url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/img\/p\/en-default-large_default_fashion.jpg","width":800,"height":950},"legend":""}},"configuration":{"display_taxes_label":false,"display_prices_tax_incl":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/"}],"count":1},"link":{"protocol_link":"http:\/\/","protocol_content":"http:\/\/"},"time":1644143051,"static_token":"8ab0a3ccf44b80cd252be4292f4264c3","token":"24352341e52ae341f16314d43a4cd51d"};
  var psemailsubscription_subscription = "<?php echo $url;?>/";
  var search_url = "<?php echo $url;?>/arama/";
</script>
<!-- module psproductcountdown start -->
<script type="text/javascript">
  var pspc_labels = ['gün', 'saat', 'dakika', 'saniye'];
  var pspc_labels_lang = {
  'gün': 'gün',
  'saat': 'saat',
  'dakika': 'dakika',
  'saniye': 'saniye'
  };
  var pspc_show_weeks = 0;
  var pspc_psv = 1.7;
</script>


<?php echo $ayar['google']; ?>
<?php echo $ayar['yandex']; ?>
<?php echo $ayar['reklam']; ?>



<!-- TEMA EKSTRALARI -->	
<?php if (isset($_GET['sepetsil'])) {
$sepetkaldiralim = temizle($_GET['sepetsil']);
$sil = $ozy->prepare("DELETE FROM sepet WHERE id=?");
$sil->execute(array($sepetkaldiralim));


$kuponne = $ozy->query("SELECT SUM(kupontutar) FROM sepet WHERE kim='$ip' and gelenkim='$sepetimdekikim'")->fetch(PDO::FETCH_ASSOC);
foreach( $kuponne as $kupongeldi ){
$kuponid = $kupongeldi['kuponid'];	
$kuponbilgileri = $ozy->query("select * from kuponlar where id='$kuponid'")->fetch(PDO::FETCH_ASSOC);	
if($toplamtutarim<$kuponbilgileri['slimit']){
$ozy->query("UPDATE sepet SET kuponid = '0', kupontutar='0.00' WHERE kim='$ip' and gelenkim='$sepetimdekikim'");

}
}

$cekne = $ozy->query("SELECT SUM(cektutar) FROM sepet WHERE kim='$ip' and gelenkim='$sepetimdekikim'")->fetch(PDO::FETCH_ASSOC);
foreach( $cekne as $cekgeldi ){
$cekid = $cekgeldi['cekid'];	
$cekbilgileri = $ozy->query("select * from kuponlar where id='$cekid'")->fetch(PDO::FETCH_ASSOC);	
if($toplamtutarim<$cekbilgileri['slimit']){
$ozy->query("UPDATE sepet SET cekid = '0', cektutar='0.00' WHERE kim='$ip' and gelenkim='$sepetimdekikim'");

}
}




header("Location: ".$url."");
}

$karsisay = $ozy->prepare("SELECT COUNT(*) FROM karsilastir where gelenkim='$sepetimdekikim'");
$karsisay->execute();
$karsilastirmasayisi = $karsisay->fetchColumn();


    function yuzdeHesaplama($sayi,$sayi2){
    $newsayi = $sayi - $sayi2;	
	$yuzdelik = $sayi/100;
	$son = $newsayi/$yuzdelik;
    return substr($son,0,2);
   } 
   

   
?>
<style>


.old-price {
color: #a4a4a4;
font-size: 16px;
margin-left: 5px;
font-weight: 400;
text-decoration: line-through;

}

#products img, .featured-products img, .product-accessories img, .product-miniature img {
  margin: 0;
  max-width: 100%;
  height: <?php echo $tema['t35'];?>px !important;
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
</head>
<body id="index" class="layout-full-width page-index tax-display-disabled">
 
<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>
 <main>
    <header id="header">
      <div class="header-banner">
      </div>
      <nav class="header-nav">
        <div class="container">
          <div class="row">
            <div class="hidden-sm-down">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-sm-center">
                <div class="laberIpad">
                  <div class="top-bar pull-left">
                    <div class="top-text"><?php echo $tema['t33']; ?></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-sm-center">
                <div class="laberIpad">
             
				  
				  
				  
                  <div class="pull-right">
                    <a class="laber-checkout" href="bankabilgilerimiz/">
                    Banka Hesaplarımız
                    </a>
                  </div>
				  
		
				  
                  <div id="_desktop_contact_link" class="pull-right">
                    <div id="contact-link">
                      <ul>
					   <li class="item">
                         <span> <a href="iletisim/">Bize Ulaşın</a></span>
                        </li>
                     
                       
                      </ul>
                    </div>
                  </div>
				  
				       <div class="pull-right" style="margin-right: 30px;">
				  
				  <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
				  
				     <div class="laberUserInfo dropdown js-dropdown ">
                      <div class="expand-more" data-toggle="dropdown">
                        <div class="laberUser">
                          <p class="nameuser">
                            <span>Hesabım</span>
                          </p>
                        </div>
                      </div>
                      <div class="laber-user-info dropdown-menu">
                        <div class="user-info">
                          <div class="signin">
                            <span>Hoşgeldin, <?php echo $uyebilgileri['isim'];?></span>
                            <a class="login" href="hesabim/"
                              title="Log in to your customer account"
                              rel="nofollow">
                           Hesabım
                            </a>
                            <a class="register" href="cikis/">
                            Çıkış Yap
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
				  
				  
				  
				  
				   <?php } else { ?>
                    <div class="laberUserInfo dropdown js-dropdown ">
                      <div class="expand-more" data-toggle="dropdown">
                        <div class="laberUser">
                          <p class="nameuser">
                            <span>Üyelik İşlemleri</span>
                          </p>
                        </div>
                      </div>
                      <div class="laber-user-info dropdown-menu">
                        <div class="user-info">
                          <div class="signin">
                            <span>Hoşgeldin Misafir.</span>
                            <a class="login" href="uyeol/"
                              title="Log in to your customer account"
                              rel="nofollow">
                            Üye Ol
                            </a>
                            <a class="register" href="uyeol/">
                            Giriş Yap
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
					
					<?php } ?>
					
                  </div>
				  
				  
				  

                </div>
              </div>
            </div>
            <div class="hidden-md-up text-sm-center mobile">
              <div class="float-xs-left" id="labermenu-icon">
                <i class="material-icons d-inline">&#xE5D2;</i>
              </div>
              <div class="float-xs-right" id="_mobile_cart"></div>
              <div class="top-logo" id="_mobile_logo"></div>
              <div class="clearfix"></div>
              <div class="Search_top" id="_mobile_Search_top"></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </nav>
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="top-logo col-lg-4 col-md-12 col-sm-12 col-xs-12 hidden-sm-down" id="_desktop_logo">
              <h1>
                <a href="<?php echo $url;?>">
                <img class="logo img-responsive" src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="<?php echo $ayar['siteadi'];?>">
                </a>
              </h1>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 displaySearch hidden-sm-down">
              <!-- Block search module TOP -->
             
			    <div  id="_desktop_Search_top">
                <div  class="laberSearch">
                  <div id="search_block_top">
                    <form id="searchbox" method="get" action="arama/">
                      <input class="search_query form-control" type="text" id="search_query_top" name="arama" placeholder="Ne aramıştınız..." value="" required>
                      <button type="submit" name="submit_search" class="btn btn-default button-search">
                      <span>Ara</span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
			  
			  
              <!-- /Block search module TOP -->
            </div>
            <div class="pull-right position-static hidden-sm-down">
              <div class="laberIpad">
                <div id="_desktop_cart" class=" pull-right">
                  <div style="" class="blockcart laber-cart dropdown js-dropdown " data-refresh-url="sepet/">
                    <div class="expand-more" data-toggle="dropdown">
                      <a class="cart" rel="nofollow" href="sepet/">
                      <span class="icon">
                      <i class="icon_cart icon-handbag"></i>
                      <span class="cart-products-count"><?php echo $sepetsayi;?></span>	
                      </span>	
                      <span class="totalCart">Sepetim</span>
                      </a>
                    </div>
					
					 <?php if($sepetsayi=='0'){?>
                    <div class="dropdown-menu">
                      <div class="cart_block block exclusive">
                        <p class="no-item">
                         Alışveriş sepetiniz boş.
                        </p>
                      </div>
                    </div>
					<?php }else{ ?>  
				 	
					<div class="dropdown-menu">
			<div class="cart_block block exclusive">
					
                      <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
					
					<div class="products">
						<div class="img">
							
								<a href="urun/<?php echo $sepet['seo'];?>" class="thumbnail product-thumbnail">
									<img src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="<?php echo $sepet['seo'];?>" data-full-size-image-url="resimler/urunler/<?php echo $sepet['resim'];?>">
								</a>
							
						</div>
						<div class="cart-info">
							<h2 class="h2 productName" itemprop="name">
								<a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?></a>
							</h2>
							<div class="laberPrice">
								<span class="quantity"><?php echo $sepet['adet'];?>X</span>
								<span class="price"><?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?></span>
							</div>
						</div>
						<p class="remove_link">
					
							<a href="?sepetsil=<?php echo $sepet['id']; ?>" class="remove-from-cart" rel="nofollow"><i class="fa fa-trash"></i></a>
						
						</p>	
					</div>
					
					
					  <?php }} ?> 
					
					
					
					
					<div class="cart-prices">
					
					<p><strong class="total">Ara Tutar:</strong><span class="amount pull-right"><?php echo fiyatgoster($sepetbedeli);?></span></p>
				
				</div>
				<div class="cart-buttons">
					<a href="anasayfa" class="btn-checkout"> Alışverişe Devam</a>
					<a href="sepet/" class="btn-cart">Satın Al</a>
				</div>
							</div>
		</div>
		
		
		 <?php } ?>
		
		
					
                  </div>
                </div>
         
                <div id="_desktop_wishtlistTop" class="pull-right">
                  <div class="laberwishtlistTop">
                    <a class="wishtlist_top" href="favorilerim/">
                    <span class="icon">
                    <i class="icon-star"></i>
                    <span class="cart-wishlist-number"><?php echo $favorisayisi;?></span>
                    </span>
                    <span class="laberwishlist">Favorilerim</span>
                    </a>
                  </div>
                </div>
				
				
			
				
				
                <div id="_desktop_compareTop" class="pull-right">
                  <div class="d-inline-block">
                    <a class="js-show-modal-compare" href="urunkarsilastirma/">
                    <span class="icon">
                    <i class="icon-layers" aria-hidden="true"></i> 
                    <span class="js-compare-nb"><?php echo $karsilastirmasayisi;?></span>
                    </span>
                    <span>Karşılaştırma</span>
                    </a>
                  </div>
                </div>
				
				  <div id="_desktop_wishtlistTop" class="pull-right">
                  <div class="laberwishtlistTop">
                    <a class="wishtlist_top" href="siparissorgulama/">
                    <span class="icon">
                <i class="fal fa-truck"></i>
                   
                    </span>
                    <span class="laberwishlist">Sipariş Sorgulama</span>
                    </a>
                  </div>
                </div>
				
				
				
				
				
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div id="labermobile_top_menu_wrapper" class="row hidden-md-up">
            <div class="laber_close">
              <i class="fa fa-close"></i>
            </div>
            <div class="js-top-menu mobile" id="_mobile_top_menu">
              <div class="top-logo">
                <a href="<?php echo $url;?>">
                <img class="logo img-responsive" src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="<?php echo $ayar['siteadi'];?>">
                </a>
              </div>
              <div id="_mobile_user_info" class="mobile_UserInfo">
              </div>
              <div id="_mobile_currency_selector"></div>
              <div id="_mobile_language_selector"></div>
            </div>
            <div class="js-top-menu-bottom">
              <!-- Module Megamenu-->
              <div class="container_lab_vegamenu pull-left">
                <div class="lab-menu-vertical clearfix">
                  <div class="title-menu">
                    <i class="icon-menu"></i>
                   Ürün Kategorilerimiz
                    <i class="icon-arrow-down"></i>
                  </div>
                  <div class="menu-vertical">
                    <a href="javascript:void(0);" class="close-menu-content"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
                    <ul class="menu-content">
                     
                  
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
                    
                      <li class="level-1 bg-image2 parent">
                        <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                          >
                        <span>
                        <?php echo $katadi['adi']; ?>
                        </span>
                        </a>
                        <span class="icon-drop-mobile"></span>
                        <div class="lab-sub-menu menu-dropdown col-xs-12 column-3 lab-sub-center">
                          <div class="lab-menu-row row ">
						  
						  <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
						  
                            <div class="lab-menu-col col-xs-12 col-sm-4  CAT">
                              <ul class="ul-column ">
							  
							  
                                <li class="menu-item  item-header ">
                                  <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                                </li>
								
								
							
							  		<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
															
                                                                <li class="menu-item  item-line "><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                                       <?php } ?>	
							  
							  
							  
							  
							  
							  
							  
                              </ul>
                            </div>
                          
                          	<?php } ?>	
						  
						  
                          </div>
                        </div>
                      </li>
					  
					   <?php } else { ?>		
					  
                      <li class="level-1 ">
                        <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                          >
                        <span>
                        <?php echo $katadi['adi']; ?>
                        </span>
                        </a>
                        <span class="icon-drop-mobile"></span>
                      </li>
                  
				    <?php }} ?>
                   
                     
                     
                      <li class="all-cat"><span><i>+</i> Tümünü Göster</span><span style="display:none"><i class="">-</i> Kapat</span></li>
                    </ul>
                  </div>
                </div>
              </div>
           
         
              <!-- Module Megamenu-->
              <div class="lab-menu-horizontal">
                <div class="title-menu hidden-md-up"><span>MENÜ</span><i class="icon-chevron-down"></i></div>
                <ul class="menu-content">
                  <li class="level-1  ">
                    <a href="<?php echo $url;?>">
                    <span>Anasayfa</span>
                    </a>
                    <span class="icon-drop-mobile"></span>
                  </li>
              
			    <li class="level-1  "><a href="favorilerim/">Favorilerim</a></li>
			    <li class="level-1  "><a href="urunkarsilastirma/">Karşılaştırma Listem</a></li>
			  	  <li class="level-1  "><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
								  <li class="level-1  "><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								  <li class="level-1  "><a href="uyeol/">Üyelik İşlemleri</a></li>
								  <li class="level-1  "><a href="kampanyalar/">Kampanyalar</a>
	            				  <li class="level-1  "><a href="bloglar/">Blog</a></li>
								  <li class="level-1  "><a href="sss/">Sıkça Sorulan Sorular</a></li>
							 	  <li class="level-1  "><a href="iletisim/">Bize Ulaşın</a></li>
			  
			  
			  
			  
			  
			  
			  
                </ul>
                <script type="text/javascript">
                  text_more = "More";
                  numLiItem = $(".lab-menu-horizontal .menu-content li.level-1").length;
                  nIpadHorizontal = 4;
                  nIpadVertical = 3;
                  function getHtmlHide(nIpad,numLiItem) 
                  	 {
                  		var htmlLiHide="";
                  		if($("#more_menu").length==0)
                  			for(var i=nIpad+1;i<numLiItem;i++){
                  				var tmp = $('.lab-menu-horizontal ul.menu-content li.level-1:nth-child('+i+')').html();
                  				if(tmp) htmlLiHide+='<li>'+$('.lab-menu-horizontal ul.menu-content li.level-1:nth-child('+i+')').html()+'</li>';
                  			}
                  		return htmlLiHide;
                  	}
                  
                  htmlLiH = getHtmlHide(nIpadHorizontal,numLiItem);
                  htmlLiV = getHtmlHide(nIpadVertical,numLiItem);
                  htmlMenu=$(".lab-menu-horizontal").html();
                  
                  $(window).load(function(){
                  addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
                  });
                  $(window).resize(function(){
                  addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
                  });
                </script>
              </div>
              <!-- /Module Megamenu -->
            </div>
          </div>
          <div class="mobile_bkg_show hidden-md-up"></div>
        </div>
      </div>
      <div class="container_lab_megamenu hidden-sm-down">
        <div class="container">
          <div class="row row-0">
            <div class="laberMegamenu">
              <div class="displayMegamenu">
                <!-- Module Megamenu-->
                <div class="container_lab_vegamenu pull-left">
                  <div class="lab-menu-vertical clearfix">
                    <div class="title-menu">
                      <i class="icon-menu"></i>
                     Ürün Kategorilerimiz
                      <i class="icon-arrow-down"></i>
                    </div>
                    <div class="menu-vertical" style="display:none;">
                      <a href="javascript:void(0);" class="close-menu-content"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
                      <ul class="menu-content">
                     
                     
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
                       
                        <li class="level-1 bg-image2 parent">
                          <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                            >
                          <span>
                          <?php echo $katadi['adi']; ?>
                          </span>
                          </a>
                          <span class="icon-drop-mobile"></span>
                          <div class="lab-sub-menu menu-dropdown col-xs-12 column-3 lab-sub-center">
                            <div class="lab-menu-row row ">
							
							
							
							
							
				<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	
                              <div class="lab-menu-col col-xs-12 col-sm-4  CAT">
                                <ul class="ul-column ">
								
                                  <li class="menu-item  item-header ">
                                    <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                                  </li>
								  
								  				<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
															
                  <li class="menu-item  item-line "><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                                       <?php } ?>
                                 
                               
								  
                                </ul>
                              </div>
                     	<?php } ?>		      
						   
						   
                            
							
							
							
							
							
							
							
                            </div>
                          </div>
                        </li>
						 <?php } else { ?>	
                        <li class="level-1 ">
                          <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                            >
                          <span>
                          <?php echo $katadi['adi']; ?>
                          </span>
                          </a>
                          <span class="icon-drop-mobile"></span>
                        </li>
                           <?php }} ?>
                       
                       
                        <li class="all-cat"><span><i>+</i> Tümünü Göster</span><span style="display:none"><i class="">-</i> Kapat</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /Module Megamenu -->
            
                <!-- Module Megamenu-->
                <div class="lab-menu-horizontal">
                  <div class="title-menu hidden-md-up"><span>Menü</span><i class="icon-chevron-down"></i></div>
                  <ul class="menu-content">
                    <li class="level-1  ">
                      <a href="<?php echo $url;?>">
                      <span>Anasayfa</span>
                      </a>
                      <span class="icon-drop-mobile"></span>
                    </li>
                   
                   
                  
				  <?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustgoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
                       
                        <li class="level-1 bg-image2 parent">
                          <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                            >
                          <span>
                          <?php echo $katadi['adi']; ?>
                          </span>
                          </a>
                          <span class="icon-drop-mobile"></span>
                          <div class="lab-sub-menu menu-dropdown col-xs-12 column-3 lab-sub-center">
                            <div class="lab-menu-row row ">
							
							
							
							
							
				<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	
                              <div class="lab-menu-col col-xs-12 col-sm-4  CAT">
                                <ul class="ul-column ">
								
                                  <li class="menu-item  item-header ">
                                    <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                                  </li>
								  
								  				<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
															
                  <li class="menu-item  item-line "><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                                       <?php } ?>
                                 
                               
								  
                                </ul>
                              </div>
                     	<?php } ?>		      
						   
						   
                            
							
							
							
							
							
							
							
                            </div>
                          </div>
                        </li>
						 <?php } else { ?>	
                        <li class="level-1 ">
                          <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                            >
                          <span>
                          <?php echo $katadi['adi']; ?>
                          </span>
                          </a>
                          <span class="icon-drop-mobile"></span>
                        </li>
                           <?php }} ?>
				  
				  
				  
				  
				  
				  
                  </ul>
                  <script type="text/javascript">
                    text_more = "More";
                    numLiItem = $(".lab-menu-horizontal .menu-content li.level-1").length;
                    nIpadHorizontal = 4;
                    nIpadVertical = 3;
                    function getHtmlHide(nIpad,numLiItem) 
                    	 {
                    		var htmlLiHide="";
                    		if($("#more_menu").length==0)
                    			for(var i=nIpad+1;i<numLiItem;i++){
                    				var tmp = $('.lab-menu-horizontal ul.menu-content li.level-1:nth-child('+i+')').html();
                    				if(tmp) htmlLiHide+='<li>'+$('.lab-menu-horizontal ul.menu-content li.level-1:nth-child('+i+')').html()+'</li>';
                    			}
                    		return htmlLiHide;
                    	}
                    
                    htmlLiH = getHtmlHide(nIpadHorizontal,numLiItem);
                    htmlLiV = getHtmlHide(nIpadVertical,numLiItem);
                    htmlMenu=$(".lab-menu-horizontal").html();
                    
                    $(window).load(function(){
                    addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
                    });
                    $(window).resize(function(){
                    addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
                    });
                  </script>
                </div>
                <!-- /Module Megamenu -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <aside id="notifications">
      <div class="container">
      </div>
    </aside>
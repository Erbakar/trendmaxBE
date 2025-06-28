 <footer id="footer">
      <div class="laberFooter-top">
        <div class="block_newsletter links">
          <p class="h3 newsletter-title hidden-sm-down">Ebülten Kaydı</p>
          <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_newsletter" data-toggle="collapse">
            <span class="h3">Ebülten Kaydı</span>
            <span class="float-xs-right">
          
            </span>
          </div>
          <div class="collapse" style="display: block !important;">
            <div class="conditions">
              <p>Ebülten listemize kayıt olarak güncel kampanya ve haberlerden
                anında haberdar olabilirsiniz
              </p>
            </div>
           <form action="" method="POST">
              <div class="input-wrapper">
                <div class="input-box">
                  <input name="eposta" type="email" value="" placeholder="Eposta Adresiniz" required>
                  <input class="btn btn-primary" name="ebulten" type="submit" value="Kaydol!">
                </div>
              </div>
             
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="laberFooter-center">
	  
	  			 <div class="container page-builder-ltr">
			 	 <div class="Etiketalani">
								<div class="etiketgenel">
									<div class="Etiketbaslik">En Çok Aranan Kelimeler:</div>
									<ul class="Etiketliste">
									<?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
					                <li><a target="_blank" href="<?php echo $etiket['link'];?>"><?php echo $etiket['adi'];?></a></li>
									<?php } ?>
									</ul>
								</div>
							</div>
							</div>
					<style>
.Etiketalani {
    float: left;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 30px;

    border: 1px solid #eee;
    padding: 20px;
}
.Etiketbaslik { display: inline-block; vertical-align: top; line-height: 31px; font-size: 14px; color: <?php echo $tema['t8']; ?>; font-weight: 500; margin-right: 12px; }

.Etiketliste { padding: 0px !important;display: inline-block; width: 100%;margin-left: -8px;padding-top: 5px;/*! margin-right: 50px !important; */}

.Etiketliste li { /*! border: 1px solid #f6f1f1; */display: inline-block; vertical-align: top; margin: 0px 4px; margin-bottom: 10px; /*! border-radius: 15px; *//*! color: red; */}

.Etiketliste li a:hover { background: #f0f0f0; }

.Etiketliste li a { display: block; line-height: 31px; background: #15151566; padding: 0px 15px; font-size: 14px; color: #fff; font-weight: 400; border-radius: 0px; }

          
                    </style>	
	  
	  
	  
	  
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="footer_contactinfo">
                <div class="logo_footer"><a href="<?php echo $url;?>"><img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" width="155" height="69" /></a></div>
                <div class="intro-footer"><?php echo $tema['t29'];?></div>
                <div class="hotlineFree">
                  <span class="icon">   </span>
                  <p>   Aklınıza takılan birşey mi var ?</p>
                  <h3>  <a href="tel:<?php echo $ayar['tel']; ?>"><?php echo $ayar['tel']; ?></a>         </h3>
                </div>
                <div class="contacinfo-address contactinfo-item"><?php echo $ayar['adres']; ?></div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="row">
                <div class="col-xs-12 col-sm-6 laberLinks links">
                  <div class="wrapper">
                    <p class="h3 hidden-sm-down">Hızlı Linkler</p>
                    <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_96680" data-toggle="collapse">
                      <span class="h3">Hızlı Linkler</span>
                      <span class="float-xs-right">
                      <span class="navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                      </span>
                      </span>
                    </div>
                    <ul id="footer_sub_menu_96680" class="collapse">
                 
                    
					
                    
					  
                    	<li><a class="cms-page-link" href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a class="cms-page-link" href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a class="cms-page-link" href="uyeol/">Üyelik İşlemleri</a></li>
								 <li><a class="cms-page-link" href="kampanyalar/">Kampanyalar</a>
	            				<li><a class="cms-page-link" href="bloglar/">Blog</a></li>
								<li><a class="cms-page-link" href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a class="cms-page-link" href="iletisim/">Bize Ulaşın</a></li>
					
					
					
					
                    </ul>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 laberLinks links">
                  <div class="wrapper">
                    <p class="h3 hidden-sm-down">Müşteri Hizmetleri</p>
                    <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_92754" data-toggle="collapse">
                      <span class="h3">Müşteri Hizmetleri</span>
                      <span class="float-xs-right">
                      <span class="navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                      </span>
                      </span>
                    </div>
                    <ul id="footer_sub_menu_92754" class="collapse">
                 
						<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a  class="cms-page-link" href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
					
					
					
					
					
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="row">
                <div id="block_myaccount_infos" class="col-xs-12 col-sm-6 laberLinks links wrapper">
                  <p class="h3 myaccount-title hidden-sm-down">
                    <a class="text-uppercase" href="http://laberpresta.comen/my-account" rel="nofollow">
                   Çözüm Merkezi
                    </a>
                  </p>
                  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
                    <span class="h3">Çözüm Merkezi</span>
                    <span class="float-xs-right">
                    <span class="navbar-toggler collapse-icons">
                    <i class="material-icons add">&#xE313;</i>
                    <i class="material-icons remove">&#xE316;</i>
                    </span>
                    </span>
                  </div>
                  <ul class="account-list collapse" id="footer_account_list">
                
				<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a class="cms-page-link" href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
				
                  </ul>
                </div>
                <div id="laberSocialBlock" class="col-xs-12 col-sm-6 laberLinks links wrapper">
                  <p class="h3  hidden-sm-down">
                    <span>Sosyal Medya</span>
                  </p>
                  <div class="title clearfix hidden-md-up" data-target="#footer_Social" data-toggle="collapse">
                    <span class="h3">Sosyal Medya</span>
                    <span class="float-xs-right">
                    <span class="navbar-toggler collapse-icons">
                    <i class="material-icons add">&#xE313;</i>
                    <i class="material-icons remove">&#xE316;</i>
                    </span>
                    </span>
                  </div>
                  <ul class="collapse" id="footer_Social">
		
				  
                    <li <?php echo $ayar['facebook'] == '' ? 'style="display:none;"' : null; ?> class="laber-facebook">
                      <a href="<?php echo $ayar['facebook']; ?>" title="Facebook" target="_blank">
                      <span><i class="fa fa-facebook"></i><span class="social-text">Facebook</span></span>
                      </a>
                    </li>
                    <li <?php echo $ayar['twitter'] == '' ? 'style="display:none;"' : null; ?>class="laber-twitter">
                      <a href="<?php echo $ayar['twitter']; ?>" title="Twitter" target="_blank"><span><i class="fa fa-twitter"></i><span class="social-text">Twitter</span></span></a>
                    </li>
                    <li <?php echo $ayar['youtube'] == '' ? 'style="display:none;"' : null; ?> class="laber-youtube">
                      <a href="<?php echo $ayar['youtube']; ?>" title="YouTube" target="_blank"><span><i class="fa fa-youtube"></i><span class="social-text">YouTube</span></span></a>
                    </li>
                    <li <?php echo $ayar['pinterest'] == '' ? 'style="display:none;"' : null; ?> class="laber-pinterest">
                      <a href="<?php echo $ayar['pinterest']; ?>" title="Pinterest" target="_blank"><span><i class="fa fa-pinterest-p"></i><span class="social-text">Pinterest</span></span></a>
                    </li>
                    <li <?php echo $ayar['instagram'] == '' ? 'style="display:none;"' : null; ?> class="laber-instagram">
                      <a href="<?php echo $ayar['instagram']; ?>" title="Instagram" target="_blank"><span><i class="fa fa-instagram"></i><span class="social-text">Instagram</span></span></a>
                    </li>
					
					 
					
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="laberFooter-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="copyright "><?php echo $ayar['copy']; ?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            	<img src="<?php echo $sitetemasi;?>/img/payments.png" alt="Payment methods" width="272" height="20">
	       </div>
          </div>
        </div>
      </div>
      <a href="javascript:void(0)" class="mypresta_scrollup hidden-phone open">
      <i class="icon-arrow-up"></i><span>Yukarı Çık</span>
      </a>         
      <div class="laber_Popup">
        <div id="laber_add_to_compare" class="">
          <div class="loadCompare"><i class="fa-li fa fa-spinner fa-spin"></i>yükleniyor...</div>
          <div class="loader_content"></div>
        </div>
      </div>
    </footer>

    <div class="shadow_bkg_show"></div>
  </main>
 


  <script type="text/javascript" src="<?php echo $sitetemasi;?>/assets/cache/bottom.js"></script>
  
  <?php if($tema['t11']){?>
   <div  class="newsletter-overlay">

  <div id="newsletter-popup" style="background:none !important;">
    <a href="#" class="popup-close">X</a>
      <div class="row justify-content-center">
            <div class="col-12">
              <a href="<?php echo $tema['t10']; ?>"><img style="width: 100%;height: 100%;" src="resimler/temaayarlari/<?php echo $tema['t9']; ?>"></a></img>
                      
                  
                
            </div>
        </div>
  </div>
</div>
<?php } ?>


<?php 
$cihaz = $_SERVER['HTTP_USER_AGENT']; 
$iphone = strpos($cihaz,"iPhone"); 
$android = strpos($cihaz,"Android"); 
$ipod = strpos($cihaz,"iPod"); 
if ($iphone == true || $android == true || $ipod == true) { ?> 
<div class="altbar">
<div id="footer-bar" class="footer-bar-1">
<a href="<?php echo $url;?>" class="active-nav"><i class="fa fa-home"></i><span>Anasayfa</span></a>
<a href="sepet/"><i class="fa fa-shopping-cart"></i><span>Sepetim</span></a>
<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
<a href="hesabim/"><i class="fa fa-user"></i><span>Hesabım</span></a>
<?php } else { ?>
<a href="uyeol/"><i class="fa fa-user"></i><span>Üyelik</span></a>
<?php } ?>
<a href="favorilerim/"><i class="fa fa-heart"></i><span>Favorilerim</span></a>
<a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $ayar['whatsapp'];?>&amp;text=Merhaba bilgi almak istiyorum."><i class="fab fa-whatsapp"></i><span>Destek</span></a>
</div>
</div>
<?php } ?>
  
<link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
    <script src="boss/assets/toastr/toastr.min.js"></script>
    <?php require_once('func/global.php');?>

<style>
.altbar{
display:none !important;
}
#footer-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 999999999999;
  background-color: rgba(249,249,249,.98);
  box-shadow: 0 -5px 10px 0 rgba(0,0,0,.06);
  min-height: 60px;
  min-height: calc(60px + (constant(safe-area-inset-bottom))*1.1);
  min-height: calc(60px + (env(safe-area-inset-bottom))*1.1);
  display: flex;
  text-align: center;
  transition: all 350ms ease;
  line-height: 30px;
  padding: 10px;
}
#footer-bar a {
    color: #1f1f1f;
    position: relative;
    flex: 1 1 auto;
    border: 1px solid #f5f6f9;
    background: white;
}
#footer-bar a span {
 position:relative;
 z-index:2;
 display:block;
 font-size:12px;
 font-weight:500;
 margin-top:-6px;
 opacity:.7;
}
#footer-bar a i {
 font-size:18px;
 position:relative;
 z-index:2
}
#footer-bar .badge {
 font-style:normal;
 z-index:5;
 top:0;
 position:absolute;
 margin-left:3px;
 color:#fff!important;
 width:18px;
 text-align:center;
 line-height:18px;
 padding:0;
 padding-left:0!important;
 border-radius:18px;
 margin-top:7px;
 font-size:11px
}
.footer-bar-2 .active-nav {
 color:#fff!important
}
.footer-bar-2 .active-nav strong {
 position:absolute;
 width:80px;
 left:50%;
 transform:translateX(-50%);
 top:0;
 bottom:0
}
.footer-bar-4 .active-nav {
 color:#fff!important
}
.footer-bar-4 .active-nav strong {
 position:absolute;
 width:47px;
 height:47px;
 border-radius:60px;
 left:50%;
 top:30px;
 transform:translate(-50%,-50%);
 bottom:0
}
.footer-bar-4 span {
 display:none!important
}
.footer-bar-4 i {
 padding-top:10px
}
.footer-bar-5 .active-nav strong {
 position:absolute;
 width:50px;
 height:2px;
 border-radius:60px;
 left:50%;
 top:0;
 transform:translateX(-50%)
}
.footer-bar-3 span {
 display:none!important
}
.footer-bar-3 .active-nav {
 padding-top:11px!important
}
.footer-bar-3 .active-nav span {
 display:block!important
}
.footer-bar-3 a {
 padding-top:18px!important
}
.footer-menu-hidden {
 transition:all 100ms ease;
 transform:translateY(100%)!important
}
.footer-bar-white * {
 color:#fff
}
#footer-bar.position-relative {
 z-index:2!important
}
.is-ios #footer-bar {
 height:calc(65px + (constant(safe-area-inset-bottom))*1.1);
 height:calc(65px + (env(safe-area-inset-bottom))*1.1)
}
.is-not-ios .footer-menu-clear {
 height:70px;
 display:block
}
.is-not-ios .footer {
 padding-bottom:0
}
.is-not-ios #footer-menu a i {
 padding-top:13px
}
.is-not-ios #footer-menu a span {
 opacity:.6
}
.footer-bar-scroll {
 display:block!important;
 overflow-x:auto;
 -webkit-overflow-scrolling:touch;
 white-space:nowrap;
 margin:0;
 padding:0
}
.footer-bar-scroll a {
 display:inline-block;
 width:19.5%
}
.footer-bar-scroll.footer-bar-4 .active-nav strong {
 margin-top:1px
}
.footer-bar-scroll.footer-bar-4 .badge {
 margin-left:-8px!important;
 margin-top:14px!important
}
.footer-bar-scroll.footer-bar-3 .badge {
 margin-left:-7px!important;
 margin-top:0!important
}
.footer-bar-scroll.footer-bar-3 i {
 transform:translateY(-10px)
}
.footer-bar-scroll.footer-bar-3 .active-nav i {
 transform:translateY(0px)
}
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




@media screen and (max-device-width: 480px) and (orientation: portrait){
.altbar{
display:block !important;
position: absolute;
z-index: 9;
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
  font-family: 'Gloria Hallelujah',cursive;
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
    font-family: "Gloria Hallelujah",cursive;
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
  font-family:  "Gloria Hallelujah",cursive;
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

<style>
.product-zoom-cover{
    display: none;
}
@media screen and (max-width: 768px) {
    .product-main-image{
        position: relative;
    }
    .product-zoom-cover{
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 48;
    }
}


</style>

    <link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
    <script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>  
  
</body>
</html>

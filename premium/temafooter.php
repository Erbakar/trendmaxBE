

       

        <!-- Start of Footer -->
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
            <div class="footer-newsletter bg-primary">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase font-weight-bold">E-Bülten
                                        </h4>
                                    <p class="text-white">Ebülten listemize kayıt olarak güncel kampanya ve duyurulardan anında haberdar olabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="POST" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="eposta" placeholder="Eposta Adresiniz" aria-label="Eposta Adresiniz" required>
                                <button  name="ebulten" class="btn btn-dark btn-rounded" type="submit">Kaydol<i class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="anasayfa" class="logo-footer">
                                    <img src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="logo-footer" style="width: 250px;height: 85px;">
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Müşteri Destek Hattı</p>
                                    <a href="tel:<?php echo $ayar['tel']; ?>" class="widget-about-call"><?php echo $ayar['tel']; ?></a>
                                    <p class="widget-about-desc">Aklınıza takılan birşey mi var ?
                                    </p>

                                    <div class="social-icons social-icons-colored">
                                       
										
										 <a <?php echo $ayar['facebook'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['facebook']; ?>" class="social-icon social-facebook w-icon-facebook" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a <?php echo $ayar['twitter'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['twitter']; ?>" class="social-icon social-twitter w-icon-twitter" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a <?php echo $ayar['pinterest'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['pinterest']; ?>" class="social-icon social-pinterest w-icon-pinterest" target="_blank" title="pinterest"><i class="icon-pinterest"></i></a>
                <a <?php echo $ayar['instagram'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['instagram']; ?>" class="social-icon social-instagram w-icon-instagram" target="_blank" title="instagram"><i class="icon-instagram"></i></a>
                <a <?php echo $ayar['youtube'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['youtube']; ?>" class="social-icon social-youtube w-icon-youtube" target="_blank" title="youtube"><i class="icon-youtube"></i></a>
                <a <?php echo $ayar['googleplus'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['googleplus']; ?>" class="social-icon social-google w-icon-google" target="_blank" title="googleplus"><i class="icon-google-plus"></i></a>
               
										
										
										
										
                                    </div>
                                </div>
                            </div>
                        </div>
						
						 <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Hızlı LİNKLER</h4>
                                <ul class="widget-body">
                                			<li><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a href="uyeol/">Üyelik İşlemleri</a></li>
								 <li><a href="kampanyalar/">Kampanyalar</a>
	            				<li><a href="bloglar/">Blog</a></li>
								<li><a href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a href="iletisim/">Bize Ulaşın</a></li>
                                </ul>
                            </div>
                        </div>
						
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">MÜŞTERİ HİZMETLERİ</h3>
                                <ul class="widget-body">
                                    			<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">ÇÖZÜM MERKEZİ</h4>
                                <ul class="widget-body">
                              	<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">En Çok Aranan Kelimeler:</h6>
                           <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
					               <a target="_blank" href="<?php echo $etiket['link'];?>"><?php echo $etiket['adi'];?></a>
						 <?php } ?>
                        </div>
                       
					   
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright"><?php echo $ayar['copy']; ?></p>
                    </div>
               </span>
                    <div class="footer-right">
                       
                        <figure class="payment">
                            <img src="<?php echo $sitetemasi;?>/assets/images/payment.png" alt="payment" width="159" height="25">
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="anasayfa" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Anasayfa</p>
        </a>
        <a href="favorilerim/" class="sticky-link">
            <i class="w-icon-heart"></i>
            <p>Favorilerim</p>
        </a>
		<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
<a href="hesabim/" class="sticky-link"> <i class="w-icon-account"></i><p>Hesabım</p></a>
<?php } else { ?>
<a href="uyeol/" class="sticky-link"> <i class="w-icon-account"></i><p>Üyelik</p></a>
<?php } ?>
     
		
		
        <div class="cart-dropdown dir-up">
            <a href="sepet/" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Sepet</p>
            </a>
            
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Arama</p>
            </a>
            <form action="arama/" method="GET" class="input-wrapper">
                <input type="text" class="form-control" name="arama"  placeholder="Ne aramıştınız ?" required>
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>



    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
       
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Kategorilerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Menü</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                          <ul class="mobile-menu">
                        
				        
                <?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
                <?php if($katadi['ac']=='1'){?>
                            <li>
                                <a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                                <ul>
								<?php 
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	
				<?php if($katadi2['ac']=='1'){?>				
                                    <li>
                                        <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>

                                        <ul>
										
										<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
										
                                            <li><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                           
										   
										<?php } ?>   
										   
                                        </ul>
                                    </li>
			  
						   <?php } else { ?>		  
			               
						   <li><a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a></li>
						   
						 
						    <?php }}?>
							
                  

                                </ul>
                            </li>

									  
						   <?php } else { ?>		  
			               
						   <li><a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a></li>
						   
						 
						    <?php }}?>
							
							
							
							
                            
                        </ul>
                </div>
                <div class="tab-pane" id="categories">
                   <ul class="mobile-menu">
                            <li><a href="anasayfa">Anasayfa</a></li>
                            <li><a href="kampanyalar/">Kampanyalar</a>
							<li><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
							<li><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
							<li><a href="bloglar/">Blog</a> 
							<li><a href="sss/">Sıkça Sorulan Sorular</a> 
							<li><a  href="iletisim/">Bize Ulaşın</a> 
                        </ul><!-- End .mobile-cats-menu -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

   

    <!-- Plugin JS File -->
    <script src="<?php echo $sitetemasi;?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/zoom/jquery.zoom.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/skrollr/skrollr.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="<?php echo $sitetemasi;?>/assets/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <!-- Main JS -->
    <script src="<?php echo $sitetemasi;?>/assets/js/main.min.js"></script>
	 <!-- ////////////////////LİGHTBOX ALANI /////////////-->
   <link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
   <script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>
    <!-- ////////////////////LİGHTBOX ALANI /////////////-->
	<link href="<?php echo $sitetemasi;?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
   <script src="<?php echo $sitetemasi;?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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

	
	
	
	
	<script src="eklentiler/lazysizes.min.js" async></script>
    <link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
    <script src="boss/assets/toastr/toastr.min.js"></script>
    <?php require_once('func/global.php');?>

<style>
.altbar{
display:none !important;
}
#footer-bar {
 position:fixed;
 bottom:0;
 left:0;
 right:0;
 z-index:98;
 background-color:rgba(249,249,249,.98);
 box-shadow:0 -5px 10px 0 rgba(0,0,0,.06);
 min-height:60px;
 min-height:calc(60px + (constant(safe-area-inset-bottom))*1.1);
 min-height:calc(60px + (env(safe-area-inset-bottom))*1.1);
 display:flex;
 text-align:center;
 transition:all 350ms ease
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

.-popup{
display:none !important;
}


@media screen and (max-device-width: 480px) and (orientation: portrait){
.altbar{
display:block !important;
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
	 
	 <script>
	 jQuery(document).ready(function(){
        // This button will increment the value
        $('.qtyplus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name='+fieldName+']').val(currentVal + 1);
                $('.qtyminus').val("-").removeAttr('style')
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(1);

            }
        });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 1) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(1);
            $('.qtyminus').val("-").css('color','#aaa');
            $('.qtyminus').val("-").css('cursor','not-allowed');
        }
    });
});
	 </script>
	 
<style>
.product-quantity {
width: 100%;
  display: block;
}

input {
  max-width: 8rem;
margin: 0;
padding: 0.75rem 0;
text-align: center;
border: 1px solid #e1dcdc;
    border-right-color: rgb(225, 220, 220);
    border-right-style: solid;
    border-right-width: 1px;
border-right: 0;
background: white;
color: #7c7c7c;
font-weight: 500;
height: 41px;
}

.quantity-selectors-container {
  display: inline-block;
  vertical-align: top;
  margin: 0;
  padding: 0;
}

.quantity-selectors {
  display: flex;
  flex-direction: column;
  margin: 0;
  padding: 0;
}

.quantity-selectors button {
  -webkit-appearance: none;

margin: 0;
border-radius: 0;
border: 1px solid #eeecec;
    border-bottom-color: rgb(238, 236, 236);
    border-bottom-style: solid;
    border-bottom-width: 1px;
background-color: #fff;
color: grey;
width: 30px;
}

.quantity-selectors button:first-child {
  border-bottom: 0;
}

.quantity-selectors button:hover {
  cursor: pointer;
}

.quantity-selectors button[disabled="disabled"] {
  cursor: not-allowed;
}

.quantity-selectors button[disabled="disabled"] span {
  opacity: 0.5;
}
.cc-color-override--1636365854.cc-window {
    color: rgb(255, 255, 255);
    background-color: rgba(0, 0, 0, 0.74);
    display: none !important;
}
</style>
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/cookieconsent.min.css">

<script src="<?php echo $sitetemasi;?>/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
 window.cookieconsent.initialise({
   "palette": {
     "popup": {
       "background": "#646478", // Uyarının arkaplan rengi
       "text": "#ffffff" // Uyarının üzerindeki yazı rengi
     },
     "button": {
       "background": "#8ec760", // Tamam butonunun arkaplan rengi - "transparent" kullanırsanız border özelliğini açabilirsiniz.
       //"border": "#14a7d0", // Arkaplan rengini transparent yapıp çerçeve kullanabilmek için
      "text": "#ffffff" // Tamam butonunun yazı rengi
     }
   },
   "theme": "block", // Kullanabileceğiniz temalar; block, edgeless, classic. Sitenizin görüntüsüne uygun olanı seçebilirsiniz.
   "type": "opt-out", // Gizle uyarısını aktif etmek için
   // "position": "top", // Aktif ederseniz uyarı üst kısımda görünür
   //"static": true, //Aktif ederseniz uyarı üst kısımda sabit olarak görünür
   // "position": "bottom-left", // Aktif ederseniz uyarı solda görünür.
   //"position": "bottom-right", // Aktif ederseniz uyarı sağda görünür.
   "content": {
      "message": "Sitemizden en iyi şekilde faydalanabilmeniz için çerezler kullanılmaktadır. Sitemize giriş yaparak çerez kullanımını kabul etmiş sayılıyorsunuz.",
      "dismiss": "Tamam",
      "link": "Daha fazla bilgi",
      "href": "kullanim-kosullari/"
    }
})});
</script>
</body>

</html>
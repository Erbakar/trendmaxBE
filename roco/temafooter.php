 <!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
 
            <div class="container">
                <div class="row footer-top">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="socials-w">
                          <h2>Sosyal Medyada Biz</h2>
                          <ul class="socials">
                            <li <?php echo $ayar['facebook'] == '' ? 'style="display:none;"' : null; ?> class="facebook"><a href="<?php echo $ayar['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                            <li <?php echo $ayar['twitter'] == '' ? 'style="display:none;"' : null; ?> class="twitter"><a href="<?php echo $ayar['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                            <li <?php echo $ayar['instagram'] == '' ? 'style="display:none;"' : null; ?> class="google_plus"><a href="<?php echo $ayar['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i><span>İnstagram</span></a></li>
                            <li <?php echo $ayar['pinterest'] == '' ? 'style="display:none;"' : null; ?> class="pinterest"><a href="<?php echo $ayar['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                            <li <?php echo $ayar['youtube'] == '' ? 'style="display:none;"' : null; ?> class="youtube"><a href="<?php echo $ayar['youtube']; ?>" target="_blank"><i class="fa fa-youtube-play"></i><span>Youtube</span></a></li>
                          </ul>
                        </div>
                        




                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="module newsletter-footer1">
                            <div class="newsletter">

                                <div class="title-block">
                                    <div class="page-heading font-title">
                                        EBÜLTEN KAYDI
                                    </div>
                                    
                                </div>

                                <div class="block_content">
                                    <form action="" method="POST" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="eposta" value="" placeholder="Eposta Adresiniz" required class="form-control" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" name="ebulten">
                                            Kaydol
                                        </button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!--/.modcontent-->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
      
        <!-- /Footer Top Container -->
        
        <div class="footer-middle ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-infos">
                        <div class="infos-footer">
                            <a href="<?php echo $url;?>">
							<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="image"></a>
                            <ul class="menu">
                                <li class="adres">
                                   <?php echo $ayar['adres'];?>
                                </li>
                                <li class="phone">
                                   <?php echo $ayar['tel'];?> - <?php echo $ayar['ceptel'];?>
                                </li>
                                <li class="mail">
                                    <a href="mailto:<?php echo $ayar['email'];?>"><?php echo $ayar['email'];?></a>
                                </li>
                             
                            </ul>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Hızlı Linkler</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                   
								<li><a class="link-ab" href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a class="link-ab" href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a class="link-ab" href="uyeol/">Üyelik İşlemleri</a></li>
								<li><a class="link-ab" href="kampanyalar/">Kampanyalar</a></li>
	            				<li><a class="link-ab" href="bloglar/">Blog</a></li>
								<li><a class="link-ab" href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a class="link-ab" href="iletisim/">Bize Ulaşın</a></li>
					
						
										
										
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">İşlem Rehberi</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                  	<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a  class="link-ab" href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-clear">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle">Çözüm Merkezi</h3>
                            <div class="modcontent">
                              <ul class="menu">
                         <?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a  class="link-ab" href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Popüler Sayfalar</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                          <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 7")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
              <li><a target="_blank" href="<?php echo $etiket['link'];?>" class="link-ab">
			 <?php echo $etiket['adi'];?></a></li>
            	<?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle">Popüler Sayfalar</h3>
                            <div class="modcontent">
                              <ul class="menu">
                               <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 7,7")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
              <li><a target="_blank" href="<?php echo $etiket['link'];?>" class="link-ab">
			 <?php echo $etiket['adi'];?></a></li>
            	<?php } ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
  
        <!-- Footer Bottom Container -->
        <div class="footer-bottom">
            <div class="container">
                <div class="col-lg-12 col-xs-12 payment-w">
                <img src="<?php echo $sitetemasi;?>/image/catalog/demo/payment/payment.png" alt="imgpayment">
                </div>
            </div>
            <div class="copyright-w">
                <div class="container">
                    <div class="copyright">
                   <?php echo $ayar['copy']; ?>
                    </div>
                </div>
            </div>            
        </div>
        <!-- /Footer Bottom Container -->
        
        
            <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- //end Footer Container -->

    </div>
   

<!-- End Color Scheme
============================================ -->



<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/themejs/libs.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/minicolors/jquery.miniColors.min.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/themejs/application.js"></script>

<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/themejs/homepage.js"></script>

<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="<?php echo $sitetemasi;?>/js/themejs/addtocart.js"></script>  

<div class="mobilbar">
   <ul>
      <li>
         <a href="<?php echo $url;?>" class="active-color">
            <p><i class="fa fa-home"></i></p>
            <p>Anasayfa</p>
         </a>
      </li>
	   <li>
         <a href="sepet/" class="">
            <p><i class="fa fa-shopping-basket"></i></p>
            <p>Sepetim</p>
         </a>
         <div class="mobilbar-badge"><?php echo $sepetsayi;?></div>
      </li>
	     <li>
	  <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
         <a href="hesabim/" class="">
            <p><i class="fa fa-user"></i></p>
            <p>Hesabım</p>
         </a>
	    <?php } else { ?> 
		  <a href="uyeol/" class="">
            <p><i class="fa fa-user"></i></p>
            <p>Üyelik</p>
          </a> 
		 <?php } ?>
		 
      </li>
      <li>
         <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $ayar['whatsapp'];?>&amp;text=Merhaba bilgi almak istiyorum." class="">
            <p><i class="fa fa-whatsapp"></i></p>
            <p>WhatsApp</p>
         </a>
      </li>
     
      <li>
         <a href="favorilerim/" class="">
            <p><i class="fa fa-heart"></i></p>
            <p>Favorilerim</p>
         </a>
      </li>
   
   </ul>
</div>



<?php if($tema['t11']){?>
   <div  class="newsletter-overlay">

  <div id="newsletter-popup" style="background:none !important;">
    <a href="#" class="popup-close">X</a>
      <div class="row justify-content-center">
            <div class="col-12">
              <a href="<?php echo $tema['t10']; ?>"><img style="box-shadow: 2px 2px 16px white;" src="resimler/temaayarlari/<?php echo $tema['t9']; ?>"></a></img>
                      
                  
                
            </div>
        </div>
  </div>
</div>
<?php } ?>


	
	
<style>
.mobilbar {
 width:100%;
 height:50px;
 z-index:50;
 position:fixed;
 bottom:0;
 left:0;
 border-top:1px solid #eee;
 background-color:#fff;
 display:none !important;
}
@media screen and (max-device-width: 480px) and (orientation: portrait){

.mobilbar {
 width:100%;
 height:50px;
 z-index:50;
 position:fixed;
 bottom:0;
 left:0;
 border-top:1px solid #eee;
 background-color:#fff;
 display:block !important;
}
.mobilbar-badge {
 width:auto;
 min-width:16px;
 height:16px;
 background-color:<?php echo $tema['t37'];?>;
 border-radius:10px;
 color:#fff;
 position:absolute;
 top:2px;
 right:calc(50% - 20px);
 text-align:center;
 line-height:16px;
 font-size:10px
}
.mobilbar ul {
 padding-left:0;
 display:flex
}
.mobilbar ul li {
 position:relative;
 padding:5px 0;
 flex:1 1
}
.mobilbar ul li>a {
 display:block;
 width:100%;
 height:40px;
 text-decoration:none;
 color:#777
}
.mobilbar ul li>a>p {
 width:100%;
 margin-bottom:0;
 text-align:center
}
.mobilbar ul li>a>p:first-child {
 font-size:17px;
 margin-bottom:0;
 color: #7e7b78;
}
.mobilbar ul li>a>p:last-child {
 font-size: 10px;
 font-weight: 600;
}
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
}
}	

@media screen and (max-width: 1366px){
  #newsletter-popup{
    width: 100%;
  }

}

@media screen and (max-width: 992px){
  #newsletter-popup{
    width: 100%;
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
  background: #b1a6a6;
  border-radius: 100%;
}


</style>	
	
	
	<link rel="stylesheet" href="<?php echo $sitetemasi;?>/user/swiper-bundle.min.css"/>
    <script src="<?php echo $sitetemasi;?>/user/swiper-bundle.min.js"></script>
	<style>
	.swiper {
  width: 100%;
  height: 100%;
  margin-top: 10px;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;

  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
	</style>

<script type="text/javascript">
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        // ve daha üstündeki ekranlar için >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // ve daha üstündeki ekranlar için >= 992px
        992: {
          slidesPerView: 4,
          spaceBetween: 10
        },
        // ve daha üstündeki ekranlar için >= 200px
        1200: {
          slidesPerView: 5,
          spaceBetween: 10
        },
        // ve daha üstündeki ekranlar için >= 1650px
        1400: {
            slidesPerView: 6,
            spaceBetween: 10
          }
      }
  });
</script>
<link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
<script src="boss/assets/toastr/toastr.min.js"></script>
<?php require_once('func/global.php');?>
<link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
<script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>  
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
			$(function(){
				$(".yenile_buton").click(function(){
					$(".guvenlik_resmi").attr("src","<?php echo $sitetemasi;?>/captcha.php?d="+Math.random());
				});
			});
</script>	







</body>
</html>
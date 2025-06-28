 <footer>
                     <div class=" footer-ust">
                        <div class="container">
                           <div class="inner">
                              <div class="row">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="box-module-bilgikutucu">
                                       <div class="row box-outer">
                                          <div class="inner">
                                             <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                   <div class="animation-element slide-left box-module-pavreassurances in-view">
                                                      <div class="row box-outer">
                                                         <div class="">
                                                            <div class="col-md-2 col-sm-2 col-xs-12 column">
                                                               <div class="reassurances">
                                                                  <span class="icon-name fa fa-truck fa-4x"></span>									
                                                                  <div class="description">
                                                                     <h4>KAPIDA ÖDEME</h4>
                                                                     <p4>Nakit &amp; Kredi Kartı</p4>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-12 column">
                                                               <div class="reassurances">
                                                                  <span class="icon-name fa fa-whatsapp  fa-4x"></span>									
                                                                  <div class="description">
                                                                     <h4>WHATSAPP<br></h4>
                                                                     <p4><?php echo $ayar['whatsapp'];?></p4>
                                                                  </div>
                                                               </div>
                                                            </div>
															 <div class="col-md-2 col-sm-2 col-xs-12 column">
                                                               <div class="reassurances">
                                                                  <span class="icon-name fa fa-shield fa-4x"></span>									
                                                                  <div class="description">
                                                                     <h4>GÜVENLİ ÖDEME<br></h4>
                                                                     <p4>256Bit Güvenli Ödeme</p4>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-12 column">
                                                               <div class="reassurances">
                                                                  <span class="icon-name fa fa-retweet fa-4x"></span>									
                                                                  <div class="description">
                                                                     <h4>İADE &amp; DEĞİŞİM<br></h4>
                                                                     <p4>14 Gün Koşulsuz</p4>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-12 column">
                                                               <div class="reassurances">
                                                                  <span class="icon-name fa fa-dropbox fa-4x"></span>									
                                                                  <div class="description">
                                                                     <h4>ÜCRETSİZ KARGO<br></h4>
                                                                     <p4>Yurtiçi Tüm Kargolar</p4>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-2 col-sm-2 col-xs-12 column">
                                                               <div class="reassurances">
                                                                  <span class="icon-name fa fa-credit-card fa-4x"></span>									
                                                                  <div class="description">
                                                                     <h4>12 TAKSİT<br></h4>
                                                                     <p4>Tüm Kredi Kartlarına</p4>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                           
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="footer" class="animation-element bounce-up container">
                        <div class="row">
                           <div class="footer_icerik">
                              <div class="footer_icerik_ust">
                                 <div class="content_alt_solcol">
                                    <div class="col-sm-3 column">
                                       <h5>Hızlı Linkler</h5>
                                       <ul>
                                <li><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a href="uyeol/">Üyelik İşlemleri</a></li>
								<li><a href="kampanyalar/">Kampanyalar</a></li>
	            				<li><a href="urunkarsilastirma/">Karşılaştırma Listem</a></li>
								<li><a href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a href="iletisim/">Bize Ulaşın</a></li>
					
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 column comun">
                                    <h5>İşlem Rehberi</h5>
                                    <ul class="list-unstyled">
                                               
					<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
			                  </ul>
                                 </div>
                                 <div class="col-sm-3 column">
                                    <h5>Destek Merkezi</h5>
                                    <ul class="list-unstyled">
                                      	<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="footer_logo">
                              <div class="content_alt_sol">
                                 <div id="footer_sol_block" class="col-sm-3 column">
                                    <h5>E-BÜLTEN KAYDI</h5>
                                    
                                    <ul class="hakkimizda-description">
                                       <li>Buradan ebülten listemize kayıt olabilirsiniz</li>
                                    </ul>
										  <form action="" method="POST">
              <div class="input-wrapper">
                <div class="input-box">
                  <input style="border-radius: 3px !important;" class="form-control" name="eposta" type="email" value="" placeholder="Eposta Adresiniz" required>
                  <input style="width: 100%;
  margin-top: 10px;" class="btn btn-primary" name="ebulten" type="submit" value="Kaydol!">
                </div>
              </div>
             
             
            </form>
			  
                                 </div>
                              </div>
                              <div class="clear"></div>
                              <div class="sosyal">
                                 <div class="social-footer">
                                    <ul class="link-follow">
                                       <li class="first"><a class="twitter" href="<?php echo $ayar['twiter']; ?>">				              <i class="fa fa-twitter"></i>				              <span>twitter</span>				            </a>				          </li>
                                       <li>	<a class="google " href="<?php echo $ayar['googleplus']; ?>"><i class="fa fa-google-plus"></i>				              <span>google</span>				            </a>				          </li>
                                       <li><a class="facebook " href="<?php echo $ayar['facebook']; ?>">
									   <i class="fa fa-facebook"></i>				              <span>facebook</span>				            </a>				          </li>
                                       <li><a class="youtube " href="<?php echo $ayar['youtube']; ?>">				            
									   <i class="fa fa-youtube"></i>				              <span>youtube</span>				            </a>				          </li>
                                       <li><a class="youtube " href="<?php echo $ayar['instagram']; ?>">				              <i class="fa fa-instagram"></i>				              <span>instagram</span>				            </a>				          </li>
                                    </ul>
                                    <div style="clear:both"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="footer_icerik_alt">
                           <div class="footer_sol_alt">
                              <div id="links">
                                 <ul>
                  <?php $etikets = $ozy->query("select * from etiketler")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
                 <li class="first"><a target="_blank" href="<?php echo $etiket['link'];?>">
			  <?php echo $etiket['adi'];?></a></li>
            	<?php } ?>
           
									
                                 </ul>
                              </div>
                              <p><?php echo $ayar['copy'];?></p>
                           </div>
                           <div class="footer_right_bottom"> </div>
                        </div>
                     </div>
                  
                  </footer>
               </div>
            </div>
			
			

         
       
            
               <script type="text/javascript">
                  var $animation_elements = $('.animation-element');
                  var $window = $(window);
                  
                  function check_if_in_view() {
                    var window_height = $window.height();
                    var window_top_position = $window.scrollTop();
                    var window_bottom_position = (window_top_position + window_height);
                   
                    $.each($animation_elements, function() {
                      var $element = $(this);
                      var element_height = $element.outerHeight();
                      var element_top_position = $element.offset().top;
                      var element_bottom_position = (element_top_position + element_height);
                   
                      //check to see if this current container is within viewport
                      if ((element_bottom_position >= window_top_position) &&
                          (element_top_position <= window_bottom_position)) {
                        $element.addClass('in-view');
                      } else {
                        $element.removeClass('in-view');
                      }
                    });
                  }
                  
                  $window.on('scroll resize', check_if_in_view);
                  $window.trigger('scroll');
                  
                  
                  
               </script> 
              
               
               <style type="text/css">
                  #ToTop {display: none;text-decoration: none;position: fixed;bottom: 20px;right: 20px;overflow: hidden;width: 71px;height: 51px;border: none;text-indent: -999px;background: url(image/top.png) no-repeat left top;}
                  #ToTop:hover{cursor:pointer;}
               </style>
               <script type="text/javascript">
                  /* toTop jQuery */
                  jQuery(document).ready(function(){$().UItoTop({easingType:'easeOutQuint'});});
                  (function($){
                  	$.fn.UItoTop = function(options) {
                  		var defaults = {
                  			text: 'To Top',
                  			min: 200,
                  			inDelay:600,
                  			outDelay:400,
                  			containerID: 'ToTop',
                  			containerHoverID: 'ToTopHover',
                  			scrollSpeed: 1600,
                  			easingType: 'linear'
                  		};
                  		var settings = $.extend(defaults, options);
                  		var containerIDhash = '#' + settings.containerID;
                  		var containerHoverIDHash = '#'+settings.containerHoverID;
                  		$('body').append('<span id="'+settings.containerID+'">'+settings.text+'</span>');
                  		$(containerIDhash).hide().click(function(event){
                  			$('html, body').animate({scrollTop: 0}, settings.scrollSpeed);
                  			event.preventDefault();
                  		})
                  		.prepend('<span id="'+settings.containerHoverID+'"></span>')
                  				
                  		$(window).scroll(function() {
                  			var sd = $(window).scrollTop();
                  			if(typeof document.body.style.maxHeight === "undefined") {
                  				$(containerIDhash).css({
                  					'position': 'absolute',
                  					'top': $(window).scrollTop() + $(window).height() - 50
                  				});
                  			}
                  			if ( sd > settings.min ) 
                  				$(containerIDhash).fadeIn(settings.inDelay);
                  			else 
                  				$(containerIDhash).fadeOut(settings.Outdelay);
                  		});
                  };
                  })(jQuery);
               </script>
    
			
		              
                <div class="mobilbar">
   <ul>
      <li>
         <a href="<?php echo $url;?>" class="active-color">
            <p><i style="font-size: 22px;" class="fa fa-home"></i></p>
            <p>Anasayfa</p>
         </a>
      </li>
	   <li>
         <a href="sepet/" class="">
            <p><i style="font-size: 22px;" class="fa fa-shopping-basket"></i></p>
            <p>Sepetim</p>
         </a>
         <div class="mobilbar-badge"><?php echo $sepetsayi;?></div>
      </li>
	     <li>
	  <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
         <a href="hesabim/" class="">
            <p><i style="font-size: 22px;" class="fa fa-user"></i></p>
            <p>Hesabım</p>
         </a>
	    <?php } else { ?> 
		  <a href="uyeol/" class="">
            <p><i style="font-size: 22px;" class="fa fa-user"></i></p>
            <p>Üyelik</p>
          </a> 
		 <?php } ?>
		 
      </li>
      <li>
         <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $ayar['whatsapp'];?>&amp;text=Merhaba bilgi almak istiyorum." class="">
            <p><i style="font-size: 22px;" class="fa fa-whatsapp"></i></p>
            <p>WhatsApp</p>
         </a>
      </li>
     
      <li>
         <a href="favorilerim/" class="">
            <p><i style="font-size: 22px;" class="fa fa-heart"></i></p>
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
              <a href="<?php echo $tema['t10']; ?>"><img style="width: 100%;box-shadow: 2px 2px 16px white;" src="resimler/temaayarlari/<?php echo $tema['t9']; ?>"></a></img>
                      
                  
                
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
position: fixed;
z-index: 1000;
width: 100%;
left: 0;
bottom: 0;
-webkit-box-shadow: 0 0 8px rgba(15, 15, 15, 0.15);
box-shadow: 0 0 8px rgba(15, 15, 15, 0.15);
background-color: #f99827;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
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
 list-style: none;
 flex:1 1
}
.mobilbar ul li>a {
 display:block;
 width:100%;
 height:40px;
 text-decoration:none;
 color:white;
}
.mobilbar ul li>a>p {
 width:100%;
 margin-bottom:0;
 text-align:center
}
.mobilbar ul li>a>p:first-child {
 font-size:17px;
 margin-bottom:0;
 color: white;
}
.mobilbar ul li>a>p:last-child {
 font-size: 12px;
 font-weight: 500;
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
  background: #b1a6a6;
  border-radius: 100%;
}


</style>	
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

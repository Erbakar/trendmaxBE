<div class="footer">
    <div class="div-block-499">
      <div class="div-block-4461292261">
        <div class="w-row">
          <div class="column-184 w-col w-col-2 w-col-medium-4 w-col-small-4 w-col-tiny-tiny-stack">
            <div class="div-block-4461292285">
              <div class="text-block-124-copy">Hızlı Linkler</div>
              <div class="div-block-4461292284"></div>
   
                    	       <a class="link-ab" href="siparissorgulama/"><strong class="bold-text-25">Sipariş Sorgulama</strong></a>
								<a class="link-ab" href="bankabilgilerimiz/"><strong class="bold-text-25">Banka Bilgilerimiz</strong></a>
								<a class="link-ab" href="uyeol/"><strong class="bold-text-25">Üyelik İşlemleri</strong></a>
								<a class="link-ab" href="kampanyalar/"><strong class="bold-text-25">Kampanyalar</strong></a>
	            				<a class="link-ab" href="bloglar/"><strong class="bold-text-25">Blog</strong></a>
								<a class="link-ab" href="sss/"><strong class="bold-text-25">Sıkça Sorulan Sorular</strong></a>
							 	<a class="link-ab" href="iletisim/"><strong class="bold-text-25">Bize Ulaşın</strong></a>
					
					
			
			
			
			
			
			</div>
          </div>
          <div class="column-183 w-col w-col-2 w-col-medium-4 w-col-small-4 w-col-tiny-tiny-stack">
            <div class="div-block-4461292287">
              <div class="text-block-124-copy">İşlem Rehberi</div>
              <div class="div-block-4461292284"></div>
            
					<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <a  class="link-ab" href="sayfa/<?php echo $hizmetler11['seo']; ?>"><strong class="bold-text-24"><?php echo $hizmetler11['adi']; ?></strong></a>
							<?php } ?>
			
			
			
			</div>
          </div>
		  
		  
		  
		     <div class="column-186 w-col w-col-2 w-col-medium-4 w-col-small-4 w-col-tiny-tiny-stack">
            <div class="div-block-4461292311">
              <div class="div-block-4461292284"></div>
            
         		<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <a  class="link-ab" href="sayfa/<?php echo $hizmetler11['seo']; ?>"><strong class="bold-text-24"><?php echo $hizmetler11['adi']; ?></strong></a>
							<?php } ?>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
          <div class="column-185 w-col w-col-2 w-col-medium-4 w-col-small-4 w-col-tiny-tiny-stack">
            <div class="div-block-4461292389">
              <div class="text-block-124-copy">Popüler Sayfalar</div>
              <div class="div-block-4461292284"></div>
            <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 7")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
              <a target="_blank" href="<?php echo $etiket['link'];?>" class="link-ab">
			  <strong class="bold-text-13"><?php echo $etiket['adi'];?></strong></a>
            	<?php } ?>
           
		   
            </div>
          </div>
          <div class="column-186 w-col w-col-2 w-col-medium-4 w-col-small-4 w-col-tiny-tiny-stack">
            <div class="div-block-4461292311">
              <div class="div-block-4461292284"></div>
            
              <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 7,7")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
              <a target="_blank" href="<?php echo $etiket['link'];?>" class="link-ab">
			  <strong class="bold-text-13"><?php echo $etiket['adi'];?></strong></a>
            	<?php } ?>
           
            </div>
          </div>
 
          <div class="column-168 w-col w-col-2 w-col-medium-4 w-col-small-4 w-col-tiny-tiny-stack">
            <div class="div-block-4461292281">
              <div class="text-block-124-copy">Ebülten Kaydı</div>
			  <h4 style="font-size: 9px;margin-top: 1px !important;">Buradan ebülten listemize kayıt olabilirsiniz</h4>
			  <form action="" method="POST">
              <div class="input-wrapper">
                <div class="input-box">
                  <input style="border-radius: 3px !important;" class="search-input w-input" name="eposta" type="email" value="" placeholder="Eposta Adresiniz" required>
                  <input class="w-button newbuton" name="ebulten" type="submit" value="Kaydol!">
                </div>
              </div>
             
             
            </form>
			  
        
           
            
           
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-stroke-copy"></div>
   
    </div>
  </div>
    <div class="footer-alt-bant">
    <div class="div-block-4461292294">
      <div class="columns-34 w-row">
        <div class="column-140 w-col w-col-4 w-col-small-small-stack w-col-tiny-tiny-stack">
          <div><img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" loading="lazy" width="219" alt="<?php echo $ayar['siteadi'];?>">
            <div class="text-block-130"><?php echo $ayar['copy']; ?></div>
          </div>
        </div>
        <div class="column-141 w-col w-col-4 w-col-small-small-stack w-col-tiny-tiny-stack">
          <div class="div-block-cozum-merkezi">
            <div class="text-block-128_b">Çözüm Merkezi</div>
           <div class="text-block-129-b">
			<?php echo $ayar['tel']; ?></div>
            <div class="text-block-128_b">veya</div>
             <a href="https://web.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>" target="_blank" class="button-14 w-button">Whatsapp Destek Hattı</a>      
          </div>
        </div>
        <div class="column-142 w-clearfix w-col w-col-4 w-col-small-small-stack w-col-tiny-tiny-stack">
          <div class="div-block-4461292293" style="text-align: center;">
		  <a href="<?php echo $tema['35'];?>" target="_blank"> <img src="<?php echo $sitetemasi;?>/css/images/google.png" width="72" alt="Google Play" class="image-78"></a>
		  <a href="<?php echo $tema['36'];?>" target="_blank"><img src="<?php echo $sitetemasi;?>/css/images/apple.png" width="90" alt="App Store" class="image-95"></a>

            
          </div>


        </div>
      </div>
    </div>
  </div>

  
    <script src="<?php echo $sitetemasi;?>/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo $sitetemasi;?>/js/webflow.js" type="text/javascript"></script>
    <script src="<?php echo $sitetemasi;?>/js/autocomplete.js"></script>
    <script src="<?php echo $sitetemasi;?>/js/maskedinput.js"></script>
    <script src="<?php echo $sitetemasi;?>/js/mobmenu.js"></script>
 
	
	
    <script src="<?php echo $sitetemasi;?>/js/jquery.fancybox.min.js"></script>

    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/jquery.fancybox.min.css"/>
  
    <script>
        $(document).ready(function () {
	        var owl = $('.owl-carousel');
	        owl.owlCarousel({
                items : 1, 
                responsive : {
                    0: { items: 1 },
                    480 : { items : 1  }, 
                    768 : { items : 2  }, 
                    1024 : { items : 4 }
                },
		        loop: false,
		        margin: 10,
		        autoplay: false,
		        autoplayTimeout: 1000,
		        autoplayHoverPause: true,
		        autoHeight: true,
		        nav: true,
		        navText: ['<span class="fa fa-chevron-left fa-2x"></span>', '<span class="fa fa-chevron-right fa-2x"></span>']
	        });
	        $('.play').on('click', function () {
		        owl.trigger('play.owl.autoplay', [1000])
	        })
	        $('.stop').on('click', function () {
		        owl.trigger('stop.owl.autoplay')
	        })
        });

        $('[data-fancybox]').fancybox({thumbs: {autoStart: true,
		        hideOnClose: true},keyboard: true,
        });

</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        //open popup
        $('.popup-trigger').on('click', function (event) {
            event.preventDefault();
            $('.popupcem').addClass('is-visible');
        });

        //close popup
        $('.popupcem').on('click', function (event) {
            if ($(event.target).is('.popupcem-close') || $(event.target).is('.popupcem')) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });
        //close popup when clicking the esc keyboard button
        $(document).keyup(function (event) {
            if (event.which == '27') {
                $('.popupcem').removeClass('is-visible');
            }
        });
        
            
            $("#NormalAdetArttir").on("click", function () {
                var adet = $("#NormalAdet").val();
                if (adet < 8) {
                adet++;
            $("#NormalAdet").val(adet);
            }
            });
            $("#NormalAdetAzalt").on("click", function () {
                var adet = $("#NormalAdet").val();
            if (adet > 0) {
                adet--;
                $("#NormalAdet").val(adet);
            }
            });
            $("#NormalAdet").keypress(function (e) {
            var regex = new RegExp("^[0-9]");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
            });
            

    });
</script>
    

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
	
	
	
	
	<link rel="stylesheet" href="<?php echo $sitetemasi;?>/css/swiper-bundle.min.css"/>
    <script src="<?php echo $sitetemasi;?>/js/swiper-bundle.min.js"></script>
	<style>
	.swiper {
  width: 100%;
  height: 100%;
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

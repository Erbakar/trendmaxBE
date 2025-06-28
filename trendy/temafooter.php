<footer>
  <div class="container">
    <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-ss-12">
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
							
					<style>
					.Etiketalani { float: left; width: 100%; /*! padding: 2px 0px; */ /*! border-top: 1px solid #000; */ margin-top: -20px;margin-bottom: 30px;}

.Etiketbaslik { display: inline-block; vertical-align: top; line-height: 31px; font-size: 14px; color: #fda380; font-weight: 500; margin-right: 12px; }

.Etiketliste { padding: 0px !important;display: inline-block; width: 100%;margin-left: -8px;padding-top: 5px;/*! margin-right: 50px !important; */}

.Etiketliste li { border: 1px solid #f6f1f1;display: inline-block; vertical-align: top; margin: 0px 4px; margin-bottom: 10px; }

.Etiketliste li a:hover { background: #f0f0f0; }

.Etiketliste li a { display: block; line-height: 31px; background: #ffffff; padding: 0px 15px; font-size: 14px; color: #000; font-weight: 500; /*! border-radius: 15.5px; */ }

                    </style>					
							
							
							
						</div>
				
	
	       <div class="col-md-3 col-sm-6 col-xs-6">
        <h5>Hızlı Linkler</h5>
        <ul class="list-unstyled footer-link">
        		<li><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a href="uyeol/">Üyelik İşlemleri</a></li>
								 <li><a href="kampanyalar/">Kampanyalar</a>
	            				<li><a href="bloglar/">Blog</a></li>
								<li><a href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a href="iletisim/">Bize Ulaşın</a></li>

							</ul>
      </div>
	
            <div class="col-md-3 col-sm-6 col-xs-6">
        <h5>Müşteri Hizmetleri</h5>
        <ul class="list-unstyled footer-link">
                		<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>                          </ul>
      </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
        <h5>Çözüm Merkezi</h5>
        <ul class="list-unstyled footer-link">
          
	<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
		  </ul>
      </div>
      
      <div class="col-md-3 col-sm-6 col-xs-6">
       
                                <h5>E-Bülten</h5>
                                <p style="color: black;" class="cta-desc text-black"><span class="font-weight-normal">Ebülten listemize kayıt olarak güncel kampanya ve duyurulardan anında haberdar olabilirsiniz.</span></p><!-- End .cta-desc -->
                      
                        
                            <form action="" method="POST">
                                <div class="" style="width: 100% !important;">
                                    <input type="email" class="form-control form-control-white" name="eposta" placeholder="Eposta Adresiniz" aria-label="Eposta Adresiniz" required>
                                    <div class="input-group-append">
                                        <button style="margin-top: 5px;background-color: #3b3939;font-size: 12px;width: 100%;" class="btn btn-primary" name="ebulten" type="submit"><span>Kaydet</span><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>   
            
      </div>
    </div>
    <hr>
    <div class="col-md-6 col-sm-6 col-xs-12" style="color:black;"><?php echo $ayar['copy']; ?></div>
    <div class="payments-metods col-md-6 col-sm-6 col-xs-12 text-right">
            <a href="#" rel="nofollow noopener" target="_blank"> <img src="<?php echo $sitetemasi;?>/image/cache/catalog/visa-50x30-50x30.png" alt="" title=""></a>
            <a href="#" rel="nofollow noopener" target="_blank"> <img src="<?php echo $sitetemasi;?>/image/cache/catalog/maestro-50x30-50x30.png" alt="" title=""></a>
            <a href="#" rel="nofollow noopener" target="_blank"> <img src="<?php echo $sitetemasi;?>/image/cache/catalog/mc-50x30-50x30.png" alt="" title=""></a>
            <a href="#" rel="nofollow noopener" target="_blank"> <img src="<?php echo $sitetemasi;?>/image/cache/catalog/ax-50x30-50x30.png" alt="" title=""></a>
            <a href="#" rel="nofollow noopener" target="_blank"> <img src="<?php echo $sitetemasi;?>/image/cache/catalog/security-50x30-50x30.png" alt="" title=""></a>
                </div>
  </div>
      <div id="back-top"><a href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
</div>
<script src="<?php echo $sitetemasi;?>/assets/common.js" type="text/javascript"></script>

<script src="<?php echo $sitetemasi;?>/assets/custom.js" type="text/javascript"></script>
<?php if($tema['t11']){?>
   <div  class="newsletter-overlay">

  <div id="newsletter-popup" style="background:none !important;">
    <a href="#" class="popup-close">X</a>
      <div class="row justify-content-center">
            <div class="col-12">
              <a href="<?php echo $tema['t10']; ?>"><img style="box-shadow: 2px 2px 16px white;width: 708px;height: 300px;" src="resimler/temaayarlari/<?php echo $tema['t9']; ?>"></a></img>
                      
                  
                
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
<a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $ayar['whatsapp'];?>&amp;text=Merhaba bilgi almak istiyorum."><i class="fa fa-whatsapp"></i><span>Destek</span></a>
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
 transition:all 350ms ease;
 line-height: 32px;
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
 font-weight:600;
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
      background: red;
    border-radius: 20px;
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



</body>
</html>
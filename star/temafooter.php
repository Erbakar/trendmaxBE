<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row sidebar"></div>
      </div>
      <div class="bytsys">
        <div class="ikon-container">
          <div class="footer-top-boxes container">
            <div class="footer-top-box">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <p class="footer-title">Güvenli Alışveriş</p>
              <p class="footer-top-content">En popüler ve güvenli ödeme yöntemlerini kullanın.</p>
            </div>
            <div class="footer-top-box">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <p class="footer-title">İndirimli Alımlar</p>
              <p class="footer-top-content">Geniş ürün yelpazesi.</p>
            </div>
            <div class="footer-top-box">
              <i class="fa fa-commenting" aria-hidden="true"></i>
              <p class="footer-title">7/24 Yardım</p>
              <p class="footer-top-content">7/24 müşteri desteği.</p>
            </div>
            <div class="footer-top-box">
              <i class="fa fa-shield" aria-hidden="true"></i>
              <p class="footer-title">Ödeme Koruma Sistemi</p>
              <p class="footer-top-content">Ödemeniz her zaman koruma altındadır.</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="row seo_text_box">
              <div class="col-md-12">
                <div class="seo_content">
                  <p><?php echo mb_substr($tema['t40'],0,500);?>
				  <a class="anasayfa_show_hide spc_link"><strong>Devamını Göster</strong></a>
                  </p>
				  </div>
                  <div class="anasayfaSeoDesc" style="display: block;">
                    <p><?php echo mb_substr($tema['t40'],500,1000);?>
                      <a class="anasayfa_hide_show spc_link"><strong> Devamını Gizle</strong> </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-12 ana-alan">
              <div class="col-sm widget spc-footer-content">
                <div class="first-head">
                  <div class="first-head-part">
                    <p class="cozum-merkezimizi-arayin">Çözüm Merkezimizi Arayın</p>
                    <span class="cozum-merkezi-numarasi">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="tel:<?php echo $ayar['tel'];?>"><?php echo $ayar['tel'];?></a>
                    </span>
                  </div>
                  <div class="or-content">
                    <hr>
                    <span>Veya</span>
                  </div>
                  <div class="first-head-part">
                    <p class="whatsapptan-destek-alin">Whatsapp'tan Destek Alın</p>
                    <span class="whatsapp-content">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp'];?>&text=Sipari%C5%9F%20%20vermek%20istiyorum."><?php echo $ayar['whatsapp'];?> </a>
                    </span>
                  </div>
                  <div class="or-content">
                    <hr>
                    <span>Veya</span>
                  </div>
                  <div class="first-head-part">
                    <p class="mail-yoluyla-iletisime-gecin">Mail Yoluyla İletişime Geçin</p>
                    <span class="mail-yolla">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo $ayar['email'];?>"><?php echo $ayar['email'];?></a>
                    </span>
                  </div>
                </div>
                <div class="content-2">
                  <div class="content-2-box">
                    EBÜLTEN KAYDI
                  </div>
                 <form action="" method="POST" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input style="font-size: 11px;" type="email" name="eposta" value="" placeholder="Eposta Adresiniz" required class="form-control" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button style="
background: <?php echo $tema['t37'];?>;
padding:20px;margin-top: 2px;
line-height: 1px;    width: 100%;" class="btn btn-primary btn-default font-title" type="submit" name="ebulten">
                                            Kaydol
                                        </button>
                                            </div>
                                        </div>
                                    </form>
				
				
				</div>
                <div class="app-content">
                  <p>Mobil Uygulamalar</p>
                  <ul class="app-list">
                    <li>
                      <a href="<?php echo $tema['36'];?>" target="_blank"><img alt="appstore.svg" src="<?php echo $sitetemasi;?>/theme/img/content/appstore.svg"></a>
                    </li>
                    <li>
                      <a href="<?php echo $tema['35'];?>" target="_blank"><img alt="google_play.svg" src="<?php echo $sitetemasi;?>/theme/img/content/google_play.svg"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-sm-12 ana-alan">
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Hızlı Linkler</h4>
                <ul>
                      
								<li><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a href="uyeol/">Üyelik İşlemleri</a></li>
								<li><a href="kampanyalar/">Kampanyalar</a></li>
	            				<li><a href="bloglar/">Blog</a></li>
								<li><a href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a href="iletisim/">Bize Ulaşın</a></li>
					
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Destek (Yardım Rehberi)</h4>
                <ul>
                  	<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a  href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Çözüm Merkezi</h4>
                <ul>
                  <?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Popüler Sayfalar</h4>
                <ul>
               <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
              <li><a target="_blank" href="<?php echo $etiket['link'];?>" class="link-ab">
			 <?php echo $etiket['adi'];?></a></li>
            	<?php } ?>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Popüler Sayfalar</h4>
                <ul>
                  <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($etikets as $etiket){?>
              <li><a target="_blank" href="<?php echo $etiket['link'];?>" class="link-ab">
			 <?php echo $etiket['adi'];?></a></li>
            	<?php } ?>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Popüler Kategoriler</h4>
                <ul>
                  <?php $etiketsz = $ozy->query("select * from kategoriler where durum='1' order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                  foreach($etiketsz as $etiketz){?>
                  <li><a href="kategori/<?php echo $etiketz['seo'];?>"><?php echo $etiketz['adi'];?></a></li>
				  
				  <?php } ?>
				  
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan">
                <h4 class="footer-baslik">Popüler Kategoriler</h4>
                <ul>
                     <?php $etiketsz = $ozy->query("select * from kategoriler where durum='1' order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                  foreach($etiketsz as $etiketz){?>
                  <li><a href="kategori/<?php echo $etiketz['seo'];?>"><?php echo $etiketz['adi'];?></a></li>
				  
				  <?php } ?>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 listalan social-area">
                <h4 class="footer-baslik">Bize Ulaşın</h4>
                <ul>
                  <li>
                    <a class="instagram social-link" href="<?php echo $ayar['facebook']; ?>" rel="nofollow" target="_blank" title="Facebook"><i class="fa fa-facebook-f"></i><span>Facebook</span></a>
                  </li>
                  <li>
                    <a class="instagram social-link" href="<?php echo $ayar['instagram']; ?>" rel="nofollow" target="_blank" title="Instagram"><i class="fa fa-instagram"></i><span>Instagram</span></a> 
                  </li>
                  <li>
                    <a class="twitter social-link" href="<?php echo $ayar['twitter']; ?>" rel="nofollow" target="_blank" title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                  </li>
                  <li>
                    <a class="youtube social-link" href="<?php echo $ayar['youtube']; ?>" rel="nofollow" target="_blank" title="Youtube"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                  </li>
                  <li>
                    <a class="linkedin social-link" href="<?php echo $ayar['linkedin']; ?>" rel="nofollow" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                  </li>
                  <li>
                    <a class="blog social-link" href="<?php echo $ayar['pinterest']; ?>" rel="nofollow" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                  </li>
                  <li>
                    <a class="blog social-link" href="bloglar/" rel="nofollow" target="_blank" title="Blog"><i class="fa fa-rss-square"></i><span>Blog</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      
          <script type="text/javascript">
            $(document).ready(function() {
                $(".anasayfaSeoDesc").hide();
                $('.anasayfa_show_hide').click(function() {
                    $('.anasayfaSeoDesc').fadeIn();
                    $(".anasayfa_show_hide").fadeOut();
                    $(".anasayfa_hide_show").fadeIn();
                });
                $('.anasayfa_hide_show').click(function() {
                    $('.anasayfaSeoDesc').fadeOut();
                    $(".anasayfa_hide_show").fadeOut();
                    $(".anasayfa_show_hide").fadeIn();
                });
            });
          </script>
         
          <div class="clearfix"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row col-sm-12 col-md-12">
          <p class="text-center">
		  <img src="<?php echo $sitetemasi;?>/footer_band4.png" width="998" height="53" alt="footer_band4.png" /></p>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="copyright col-xs-12 col-sm-9 col-md-9">
               <?php echo $ayar['copy'];?>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="up" title="Yukarı">
            <span class="glyphicon glyphicon-arrow-up"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="clearfix"></div>
</div>



<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i><span>Başa Dön</span></a>

<script>
  $(document).ready(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.scrollup').fadeIn();
          } else {
              $('.scrollup').fadeOut();
          }
      });
      $('.scrollup').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });
  });
</script>
<script>
  $(".prg-category #main > .container > .row:first-child").prepend("<div class='col-xs-12 fvs'><a class='filtrele' href='#'>Filtrele</a><a class='sirala' href='#'>Sırala</a></div><div class='clearfix'></div>");
  
  $(".filtrele").click(function() {
    $(".prg-category #main .sidebar").toggleClass("highlight-open");
    $(".toolbar").removeClass("highlight-open");
  });
  
  $(".sirala").click(function() {
    $(".toolbar").toggleClass("highlight-open");
    $(".prg-category #main .sidebar").removeClass("highlight-open");
  });
</script>

<script>
  var sortFixerInitalize={init:function(){$(".toolbar").on("change","#sort-by-select",function(){var curr=$(this);$("#queryData").find("input[name='r']").val(curr.find("option:selected").attr("data-sort"));$(".toolbar #"+curr.val()).click()})}}
  if($("#catalog .sort-by").length){var elem=$("#catalog .sort-by"),curr,sora='<option value="">Sıralama</option>',sorb="",sorc="";$(elem.find("a")).each(function(i){curr=$(this);curr.attr("id","sort-by-"+i);if(curr.attr("data-value")=="price"){sorb+='<option value="sort-by-'+i+'" data-sort="asc">'+curr.find("span").html()+' (Artan)</option>';sorb+='<option value="sort-by-'+i+'" data-sort="desc">'+curr.find("span").html()+' (Azalan)</option>'}else{sorc+='<option value="sort-by-'+i+'" data-sort="asc">'+curr.find("span").html()+' (Artan)</option>';sorc+='<option value="sort-by-'+i+'" data-sort="desc">'+curr.find("span").html()+' (Azalan)</option>'}});sora+=sorb+sorc;if(sora!=""){elem.append('<select id="sort-by-select" class="sort btn btn-default without-styles">'+sora+'</select>');sortFixerInitalize.init()}}
</script>

<script>
  $(document).ready(function(){
    $("#footer .sidebar .widget:nth-child(5) .title-block").click(function() {
  	$("#footer .sidebar .widget.links:nth-child(5) nav").toggleClass("open-footer-nav");
    })
    $("#footer .sidebar .widget:nth-child(6) .title-block").click(function() {
  	$("#footer .sidebar .widget.links:nth-child(6) nav").toggleClass("open-footer-nav");
    })
    $("#footer .sidebar .widget:nth-child(7) .title-block").click(function() {
  	$("#footer .sidebar .widget.links:nth-child(7) nav").toggleClass("open-footer-nav");
    })
    $("#footer .sidebar .widget:nth-child(8) .title-block").click(function() {
  	$("#footer .sidebar .widget.links:nth-child(8) nav").toggleClass("open-footer-nav");
    })
  });
</script>

<script>
  jQuery(document).ready(function() {
    var obj = $(".prg-products .row.product-page .col-xs-12.col-sm-12.col-md-9 > .row:first-child").find(".sub-title").clone();
    $(".prg-products .row.product-page .col-xs-12.col-sm-12.col-md-9 > .row .col-xs-12.col-sm-6.col-md-6:last-child").prepend(obj); 
  });
</script>

<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/buttons/buttons.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/buttons/social-icons.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/responsive.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/customizer/pages.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/ie/ie.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/jslider.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/settings.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/video-js.min.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/datepicker.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/timepicker.css">
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/jquery.scrollbar.css">
<script src="<?php echo $sitetemasi;?>/theme/component/bootstrap.min.js"></script>
<link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
<script src="boss/assets/toastr/toastr.min.js"></script>
<?php require_once('func/global.php');?>
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

	   

</script>
<script>
			$(function(){
				$(".yenile_buton").click(function(){
					$(".guvenlik_resmi").attr("src","<?php echo $sitetemasi;?>/captcha.php?d="+Math.random());
				});
			});
</script>	

<link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
<script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>  
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.touchSwipe.min.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.imagesloaded.min.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.appear.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.easing.1.3.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.fancybox.pack.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/isotope.pkgd.min.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.stellar.min.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.selectBox.min.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/SmoothScroll.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/layerslider/greensock.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/layerslider/layerslider.transitions.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/layerslider/layerslider.jquery.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.lazyload.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/bootbox.min.js"></script>    
<script src="<?php echo $sitetemasi;?>/theme/component/jquery.scrollbar.min.js"></script>
<script src="<?php echo $sitetemasi;?>/theme/component/main.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function(){
     $("img.lazy").lazyload({
         delay: 5000,
         threshold: 200,
  event: "lazyload",
         effect: "fadeIn",
         effectTime : '3000',
         skip_invisible : true,
         onError: function(element) {
           console.log('error loading ' + element.data('src'));
        }
     }).trigger("lazyload");
     $(window).scroll();
   });
   
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
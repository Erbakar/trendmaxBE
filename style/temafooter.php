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
							
			
    <footer class="footer-container typefooter-1">
	
      <div class="footer-main description-has-toggle collapse in" id="collapse-footer">
        <div class="so-page-builder">
          <div class="container page-builder-ltr">
            <div class="row row_btb5  row-footer-top ">
			
			

			
			
			
			
			
              <div class="col-lg-15 col-md-15 col-sm-15 col-xs-12 col_a3pj  col-border">
                <div class="box-service box-footer">
                  <div class="module clearfix">
                    <h3 class="modtitle">Hızlı Linkler</h3>
                    <div class="modcontent">
                      <ul class="menu">
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
                </div>
              </div>
              <div class="col-lg-15 col-md-15 col-sm-15 col-xs-12 col_mn65  col-border">
                <div class="box-information box-footer">
                  <div class="module clearfix">
                    <h3 class="modtitle">Müşteri Hizmetleri</h3>
                    <div class="modcontent">
                      <ul class="menu">
                       <?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-15 col-md-15 col-sm-15 col-xs-12 col_p36k  col-border">
                <div class="box-service box-footer">
                  <div class="module clearfix">
                    <h3 class="modtitle">Çözüm Merkezi</h3>
                    <div class="modcontent">
                      <ul class="menu">
                                   	<?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-15 col-md-15 col-sm-15 col-xs-12 col_8k4a  col-border">
                <div class="box-account box-footer">
                  <div class="module clearfix">
                    <h3 class="modtitle">Popüler Kategoriler</h3>
                    <div class="modcontent">
                      <ul class="menu">
                      			<?php $hzmetler1z = $ozy->query("select * from kategoriler where durum='1'order by rand() limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1z as $hizmetler11z){?>	
                                        <li>
										<a href="kategori/<?php echo $hizmetler11z['seo']; ?>"><?php echo $hizmetler11z['adi']; ?></a></li>
                                     
	                         <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-15 col-md-15 col-sm-15 col-xs-12 col_20he  col-border">
                <div class="box-last box-footer">
                  <div class="module clearfix">
                    <h3 class="modtitle">Trend Kategoriler</h3>
                    <div class="modcontent">
                      <ul class="menu">
                      	<?php $hzmetler1z = $ozy->query("select * from kategoriler where durum='1'order by rand() limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1z as $hizmetler11z){?>	
                                        <li>
										<a href="kategori/<?php echo $hizmetler11z['seo']; ?>"><?php echo $hizmetler11z['adi']; ?></a></li>
                                     
	                         <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section id="abc" class="section-style ">
            <div class="container-fluid page-builder-ltr">
              <div class="row row_gub2  footer-top ">
              </div>
            </div>
          </section>
          <div class="container page-builder-ltr">
            <div class="row row_cofu  footer-middle ">
              <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 col_vyj7  col1">
                <div class="infos-footer">
                  <a href="anasayfa"><img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" alt="logo-footer"></a>
                  <p><?php echo $tema['t4']; ?></p>
                 
                  <div class="copyrights">
                    <p><?php echo $ayar['copy']; ?>.</p>
                  </div>
                  <div class="payment">
                    <a><img data-sizes="auto" class="lazyload" src="<?php echo $sitetemasi;?>/image/loading.svg" data-src="<?php echo $sitetemasi;?>/image/catalog/demo/payment/payment.png" alt="app1"></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12 col_tpj2  col2">
                <div class="row row_mw18  row-style ">
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col_r5em col-style">
                    <div class="row row_u7ed  row-middle ">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_g8if col-style">
                        <ul class="socials">
						
					
						<li class="facebook"><a <?php echo $ayar['facebook'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['facebook']; ?>" target="_blank" title="Facebook"><i class="icom-facebook"></i></a></li>
               <li class="twitter"><a <?php echo $ayar['twitter'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['twitter']; ?>"  target="_blank" title="Twitter"><i class="icom-twitter"></i></a></li>
                <li class="pinterest"><a <?php echo $ayar['pinterest'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['pinterest']; ?>"  target="_blank" title="pinterest"><i class="icom-pinterest"></i></a></li>
                <li class="instagram"><a <?php echo $ayar['instagram'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['instagram']; ?>"  target="_blank" title="instagram"><i class="icom-instagram"></i></a></li>
                <li class="youtube"><a <?php echo $ayar['youtube'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['youtube']; ?>"  target="_blank" title="youtube"><i class="icom-youtube"></i></a></li>
                <li class="linkin"><a <?php echo $ayar['googleplus'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['googleplus']; ?>"  target="_blank" title="googleplus"><i class="icom-google-plus"></i></a></li>
               
					
						  
                        </ul>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_f5xd col-style">
                        <div class="module newsletter-footer1">
                          <div class="newsletter" style="width:100%                                  ;  ; ">
                            <div class="title-block">
                              <div class="page-heading font-title">
                                Yardımamı İhtiyacınız var ?
                              </div>
                              <div class="promotext">Müşteri Hizmetleri <a href="tel:<?php echo $ayar['tel']; ?>"> <?php echo $ayar['tel']; ?></a></div>
                            </div>
                            <div class="block_content">
                              <form method="POST" action="" class="form-group form-inline signup send-mail">
                                <div class="form-group">
                                  <div class="input-box">
                                    <input type="email"  value="" class="form-control" size="55" name="eposta" placeholder="Eposta Adresiniz" required>
                                  </div>
                                  <div class="subcribe">
                                    <button class="btn btn-primary btn-default" name="ebulten" type="submit">
                                    <span>Kaydol</span>
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
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col_8xcp col-style">
												<div class="contact-foot">
	<div class="item item1">
		<h4>İletişim Bilgilerimiz</h4>
		<p><?php echo $ayar['adres']; ?></p>
		<p>Telefon: <a href="tel:<?php echo $ayar['tel']; ?>"><?php echo $ayar['tel']; ?></a> 
		/ GSM: <a href="tel:<?php echo $ayar['ceptel']; ?>"><?php echo $ayar['ceptel']; ?></a></p>
		<p>Eposta: <a href="mailto:<?php echo $ayar['email']; ?>"><?php echo $ayar['email']; ?></a></p>
	</div>

</div>
										
			
					</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
	  
	  
	    
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
<a href="favorilerim/"><i class="fa fa-heart-o"></i><span>Favorilerim</span></a>
<a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $ayar['whatsapp'];?>&amp;text=Merhaba bilgi almak istiyorum."><i class="fa fa-whatsapp"></i><span>Destek</span></a>
</div>
</div>

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
 background: #1d1c1c87;
    border-radius: 20px;
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
color: #141313;
position: absolute;
top: 30px;
right: 15px;
text-align: center;
text-decoration: none;
line-height: 30px;
font-size: 24px;
z-index: 9999;
background: #f0eded4a;
padding: 10px;
border-radius: 30px;
}
.cc-color-override--1636365854.cc-window {
    color: rgb(255, 255, 255);
    background-color: rgba(0, 0, 0, 0.74);
    display: none !important;
}
</style>





<?php } ?>
  <!-- ////////////////////LİGHTBOX ALANI /////////////-->
    <link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
    <script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>
    <!-- ////////////////////LİGHTBOX ALANI /////////////-->
    </footer>
    <svg
      xmlns="http://www.w3.org/2000/svg" class="custom-svg hidden">
      <defs>
        <path id="stumbleupon-path-1" d="M0,0.0749333333 L31.9250667,0.0749333333 L31.9250667,31.984 L0,31.984"></path>
      </defs>
      <symbol viewBox="0 0 24 24" id="icon-add">
        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
      </symbol>
      <symbol viewBox="0 0 36 36" id="icon-arrow-down">
        <path d="M16.5 6v18.26l-8.38-8.38-2.12 2.12 12 12 12-12-2.12-2.12-8.38 8.38v-18.26h-3z"></path>
      </symbol>
      <symbol viewBox="0 0 12 8" id="icon-chevron-down">
        <path d="M6 6.174l5.313-4.96.23-.214.457.427-.23.214-5.51 5.146L6.03 7 6 6.972 5.97 7l-.23-.214L.23 1.64 0 1.428.458 1l.23.214L6 6.174z" stroke-linecap="square" fill-rule="evenodd"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-chevron-left">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-chevron-right">
        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-close">
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
      </symbol>
      <symbol viewBox="0 0 28 28" id="icon-envelope">
        <path d="M0 23.5v-12.406q0.688 0.766 1.578 1.359 5.656 3.844 7.766 5.391 0.891 0.656 1.445 1.023t1.477 0.75 1.719 0.383h0.031q0.797 0 1.719-0.383t1.477-0.75 1.445-1.023q2.656-1.922 7.781-5.391 0.891-0.609 1.563-1.359v12.406q0 1.031-0.734 1.766t-1.766 0.734h-23q-1.031 0-1.766-0.734t-0.734-1.766zM0 6.844q0-1.219 0.648-2.031t1.852-0.812h23q1.016 0 1.758 0.734t0.742 1.766q0 1.234-0.766 2.359t-1.906 1.922q-5.875 4.078-7.313 5.078-0.156 0.109-0.664 0.477t-0.844 0.594-0.812 0.508-0.898 0.422-0.781 0.141h-0.031q-0.359 0-0.781-0.141t-0.898-0.422-0.812-0.508-0.844-0.594-0.664-0.477q-1.422-1-4.094-2.852t-3.203-2.227q-0.969-0.656-1.828-1.805t-0.859-2.133z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-facebook">
        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
      </symbol>
      <symbol viewBox="0 0 20 28" id="icon-google">
        <path d="M1.734 21.156q0-1.266 0.695-2.344t1.852-1.797q2.047-1.281 6.312-1.563-0.5-0.641-0.742-1.148t-0.242-1.148q0-0.625 0.328-1.328-0.719 0.063-1.062 0.063-2.312 0-3.898-1.508t-1.586-3.82q0-1.281 0.562-2.484t1.547-2.047q1.188-1.031 2.844-1.531t3.406-0.5h6.516l-2.141 1.375h-2.063q1.172 0.984 1.766 2.078t0.594 2.5q0 1.125-0.383 2.023t-0.93 1.453-1.086 1.016-0.922 0.961-0.383 1.031q0 0.562 0.5 1.102t1.203 1.062 1.414 1.148 1.211 1.625 0.5 2.219q0 1.422-0.766 2.703-1.109 1.906-3.273 2.805t-4.664 0.898q-2.063 0-3.852-0.648t-2.695-2.148q-0.562-0.922-0.562-2.047zM4.641 20.438q0 0.875 0.367 1.594t0.953 1.18 1.359 0.781 1.563 0.453 1.586 0.133q0.906 0 1.742-0.203t1.547-0.609 1.141-1.141 0.43-1.703q0-0.391-0.109-0.766t-0.227-0.656-0.422-0.648-0.461-0.547-0.602-0.539-0.57-0.453-0.648-0.469-0.57-0.406q-0.25-0.031-0.766-0.031-0.828 0-1.633 0.109t-1.672 0.391-1.516 0.719-1.070 1.164-0.422 1.648zM6.297 4.906q0 0.719 0.156 1.523t0.492 1.609 0.812 1.445 1.172 1.047 1.508 0.406q0.578 0 1.211-0.258t1.023-0.68q0.828-0.875 0.828-2.484 0-0.922-0.266-1.961t-0.75-2.016-1.313-1.617-1.828-0.641q-0.656 0-1.289 0.305t-1.039 0.82q-0.719 0.922-0.719 2.5z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-instagram">
        <path d="M25.522709,13.5369502 C25.7256898,14.3248434 25.8455558,15.1480745 25.8455558,15.9992932 C25.8455558,21.4379334 21.4376507,25.8455558 15.9998586,25.8455558 C10.5623493,25.8455558 6.15416148,21.4379334 6.15416148,15.9992932 C6.15416148,15.1480745 6.27459295,14.3248434 6.4775737,13.5369502 L3.6915357,13.5369502 L3.6915357,27.0764447 C3.6915357,27.7552145 4.24280653,28.3062027 4.92355534,28.3062027 L27.0764447,28.3062027 C27.7571935,28.3062027 28.3084643,27.7552145 28.3084643,27.0764447 L28.3084643,13.5369502 L25.522709,13.5369502 Z M27.0764447,3.6915357 L23.384909,3.6915357 C22.7050083,3.6915357 22.1543028,4.24280653 22.1543028,4.92214183 L22.1543028,8.61509104 C22.1543028,9.29442633 22.7050083,9.84569717 23.384909,9.84569717 L27.0764447,9.84569717 C27.7571935,9.84569717 28.3084643,9.29442633 28.3084643,8.61509104 L28.3084643,4.92214183 C28.3084643,4.24280653 27.7571935,3.6915357 27.0764447,3.6915357 Z M9.84597988,15.9992932 C9.84597988,19.3976659 12.6009206,22.1537374 15.9998586,22.1537374 C19.3987967,22.1537374 22.1543028,19.3976659 22.1543028,15.9992932 C22.1543028,12.6003551 19.3987967,9.84569717 15.9998586,9.84569717 C12.6009206,9.84569717 9.84597988,12.6003551 9.84597988,15.9992932 Z M3.6915357,31.9997173 C1.65296441,31.9997173 0,30.3461875 0,28.3062027 L0,3.6915357 C0,1.6526817 1.65296441,0 3.6915357,0 L28.3084643,0 C30.3473183,0 32,1.6526817 32,3.6915357 L32,28.3062027 C32,30.3461875 30.3473183,31.9997173 28.3084643,31.9997173 L3.6915357,31.9997173 Z" id="instagram-Imported-Layers" ></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-keyboard-arrow-down">
        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-keyboard-arrow-up">
        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-linkedin">
        <path d="M27.2684444,27.2675556 L22.5226667,27.2675556 L22.5226667,19.8408889 C22.5226667,18.0702222 22.4924444,15.792 20.0568889,15.792 C17.5866667,15.792 17.2097778,17.7217778 17.2097778,19.7146667 L17.2097778,27.2675556 L12.4693333,27.2675556 L12.4693333,11.9964444 L17.0186667,11.9964444 L17.0186667,14.0844444 L17.0844444,14.0844444 C17.7173333,12.8835556 19.2657778,11.6177778 21.5742222,11.6177778 C26.3804444,11.6177778 27.2684444,14.7795556 27.2684444,18.8924444 L27.2684444,27.2675556 L27.2684444,27.2675556 Z M7.11822222,9.91022222 C5.59377778,9.91022222 4.36444444,8.67733333 4.36444444,7.15733333 C4.36444444,5.63822222 5.59377778,4.40533333 7.11822222,4.40533333 C8.63644444,4.40533333 9.86844444,5.63822222 9.86844444,7.15733333 C9.86844444,8.67733333 8.63644444,9.91022222 7.11822222,9.91022222 L7.11822222,9.91022222 Z M4.74133333,11.9964444 L9.49244444,11.9964444 L9.49244444,27.2675556 L4.74133333,27.2675556 L4.74133333,11.9964444 Z M29.632,0 L2.36,0 C1.05777778,0 0,1.03288889 0,2.30755556 L0,29.6906667 C0,30.9653333 1.05777778,32 2.36,32 L29.632,32 C30.9368889,32 31.9991111,30.9653333 31.9991111,29.6906667 L31.9991111,2.30755556 C31.9991111,1.03288889 30.9368889,0 29.632,0 L29.632,0 Z" id="linkedin-Fill-4"></path>
      </symbol>
      <symbol viewBox="0 0 70 32" id="icon-logo-american-express">
        <path d="M69.102 17.219l0.399 9.094c-0.688 0.313-3.285 1.688-4.26 1.688h-4.788v-0.656c-0.546 0.438-1.549 0.656-2.467 0.656h-15.053v-2.466c0-0.344-0.057-0.344-0.345-0.344h-0.257v2.81h-4.961v-2.924c-0.832 0.402-1.749 0.402-2.581 0.402h-0.544v2.523h-6.050l-1.434-1.656-1.577 1.656h-9.72v-10.781h9.892l1.405 1.663 1.548-1.663h6.652c0.775 0 2.037 0.115 2.581 0.66v-0.66h5.936c0.602 0 1.749 0.115 2.523 0.66v-0.66h8.946v0.66c0.516-0.43 1.433-0.66 2.265-0.66h4.988v0.66c0.546-0.372 1.32-0.66 2.323-0.66h4.578zM34.905 23.871c1.577 0 3.183-0.43 3.183-2.581 0-2.093-1.635-2.523-3.069-2.523h-5.878l-2.38 2.523-2.236-2.523h-7.427v7.67h7.312l2.351-2.509 2.266 2.509h3.556v-2.566h2.322zM46.001 23.556c-0.172-0.23-0.487-0.516-0.946-0.66 0.516-0.172 1.318-0.832 1.318-2.036 0-0.889-0.315-1.377-0.917-1.721-0.602-0.315-1.319-0.372-2.266-0.372h-4.215v7.67h1.864v-2.796h1.978c0.66 0 1.032 0.058 1.319 0.344 0.316 0.373 0.316 1.032 0.316 1.548v0.903h1.836v-1.477c0-0.688-0.058-1.032-0.288-1.405zM53.571 20.373v-1.605h-6.136v7.67h6.136v-1.563h-4.33v-1.549h4.244v-1.548h-4.244v-1.405h4.33zM58.245 26.438c1.864 0 2.926-0.759 2.926-2.393 0-0.774-0.23-1.262-0.545-1.664-0.459-0.372-1.119-0.602-2.151-0.602h-1.004c-0.258 0-0.487-0.057-0.717-0.115-0.201-0.086-0.373-0.258-0.373-0.545 0-0.258 0.058-0.43 0.287-0.602 0.143-0.115 0.373-0.115 0.717-0.115h3.383v-1.634h-3.671c-1.978 0-2.638 1.204-2.638 2.294 0 2.438 2.151 2.322 3.842 2.38 0.344 0 0.544 0.058 0.66 0.173 0.115 0.086 0.23 0.315 0.23 0.544 0 0.201-0.115 0.373-0.23 0.488-0.173 0.115-0.373 0.172-0.717 0.172h-3.555v1.62h3.555zM65.442 26.439c1.864 0 2.924-0.76 2.924-2.394 0-0.774-0.229-1.262-0.544-1.664-0.459-0.372-1.119-0.602-2.151-0.602h-1.003c-0.258 0-0.488-0.057-0.718-0.115-0.201-0.086-0.373-0.258-0.373-0.545 0-0.258 0.115-0.43 0.287-0.602 0.144-0.115 0.373-0.115 0.717-0.115h3.383v-1.634h-3.671c-1.921 0-2.638 1.204-2.638 2.294 0 2.438 2.151 2.322 3.842 2.38 0.344 0 0.544 0.058 0.66 0.174 0.115 0.086 0.229 0.315 0.229 0.544 0 0.201-0.114 0.373-0.229 0.488s-0.373 0.172-0.717 0.172h-3.556v1.62h3.556zM43.966 20.518c0.23 0.115 0.373 0.344 0.373 0.659 0 0.344-0.143 0.602-0.373 0.774-0.287 0.115-0.545 0.115-0.889 0.115l-2.237 0.058v-1.749h2.237c0.344 0 0.659 0 0.889 0.143zM36.108 8.646c-0.287 0.172-0.544 0.172-0.918 0.172h-2.265v-1.692h2.265c0.316 0 0.688 0 0.918 0.114 0.23 0.144 0.344 0.374 0.344 0.718 0 0.315-0.114 0.602-0.344 0.689zM50.789 6.839l1.262 3.039h-2.523zM30.775 25.792l-2.838-3.183 2.838-3.011v6.193zM35.019 20.373c0.66 0 1.090 0.258 1.090 0.918s-0.43 1.032-1.090 1.032h-2.437v-1.95h2.437zM5.773 9.878l1.291-3.039 1.262 3.039h-2.552zM18.905 20.372l4.616 0 2.036 2.237-2.093 2.265h-4.559v-1.549h4.071v-1.548h-4.071v-1.405zM19.077 13.376l-0.545 1.377h-3.24l-0.546-1.319v1.319h-6.222l-0.66-1.749h-1.577l-0.717 1.749h-5.572l2.389-5.649 2.237-5.104h4.789l0.659 1.262v-1.262h5.591l1.262 2.724 1.233-2.724h17.835c0.832 0 1.548 0.143 2.093 0.602v-0.602h4.903v0.602c0.803-0.459 1.864-0.602 3.068-0.602h7.082l0.66 1.262v-1.262h5.218l0.775 1.262v-1.262h5.103v10.753h-5.161l-1.003-1.635v1.635h-6.423l-0.717-1.749h-1.577l-0.717 1.749h-3.355c-1.318 0-2.294-0.316-2.954-0.659v0.659h-7.971v-2.466c0-0.344-0.057-0.402-0.286-0.402h-0.258v2.867h-15.398v-1.377zM43.363 6.409c-0.832 0.831-0.975 1.864-1.004 3.011 0 1.377 0.344 2.266 0.947 2.925 0.659 0.66 1.806 0.86 2.695 0.86h2.151l0.716-1.692h3.843l0.717 1.692h3.727v-5.763l3.47 5.763h2.638v-7.684h-1.892v5.333l-3.24-5.333h-2.839v7.254l-3.096-7.254h-2.724l-2.638 6.050h-0.832c-0.487 0-1.003-0.115-1.262-0.373-0.344-0.402-0.488-1.004-0.488-1.836 0-0.803 0.144-1.405 0.488-1.748 0.373-0.316 0.774-0.431 1.434-0.431h1.749v-1.663h-1.749c-1.262 0-2.265 0.286-2.81 0.889zM39.579 5.52v7.684h1.863v-7.684h-1.863zM31.12 5.52l-0 7.685h1.806v-2.781h1.979c0.66 0 1.090 0.057 1.376 0.315 0.316 0.401 0.258 1.061 0.258 1.491v0.975h1.892v-1.519c0-0.66-0.057-1.004-0.344-1.377-0.172-0.229-0.487-0.488-0.889-0.659 0.516-0.23 1.319-0.832 1.319-2.036 0-0.889-0.373-1.377-0.976-1.75-0.602-0.344-1.262-0.344-2.208-0.344h-4.215zM23.636 5.521v7.685h6.165v-1.577h-4.301v-1.549h4.244v-1.577h-4.244v-1.377h4.301v-1.606h-6.165z
          M16.124 13.205h1.577l2.695-6.021v6.021h1.864v-7.684h-3.011l-2.265 5.219-2.409-5.219h-2.953v7.254l-3.154-7.254h-2.724l-3.297 7.684h1.978l0.688-1.692h3.871l0.688 1.692h3.756v-6.021z"></path>
      </symbol>
      <symbol viewBox="0 0 95 32" id="icon-logo-discover">
        <path d="M50.431 8.059c4.546 0 8.092 3.49 8.092 7.936 0 4.471-3.571 7.961-8.093 7.961-4.638 0-8.115-3.444-8.115-8.051 0-4.334 3.635-7.845 8.115-7.845zM4.362 8.345c4.811 0 8.168 3.133 8.168 7.64 0 2.247-1.028 4.422-2.761 5.864-1.461 1.214-3.126 1.761-5.429 1.761h-4.339v-15.265h4.362zM7.832 19.81c1.027-0.912 1.639-2.379 1.639-3.847 0-1.464-0.612-2.882-1.639-3.798-0.984-0.892-2.146-1.235-4.065-1.235h-0.797v10.096h0.797c1.919 0 3.127-0.367 4.065-1.216zM13.9 23.611v-15.265h2.965v15.265h-2.965zM24.123 14.201c3.378 1.238 4.379 2.338 4.379 4.764 0 2.952-2.166 5.015-5.247 5.015-2.261 0-3.904-0.896-5.271-2.907l1.914-1.856c0.685 1.328 1.825 2.036 3.24 2.036 1.325 0 2.308-0.915 2.308-2.152 0-0.641-0.298-1.189-0.891-1.578-0.297-0.187-0.889-0.46-2.054-0.87-2.784-1.010-3.742-2.085-3.742-4.192 0-2.493 2.055-4.371 4.745-4.371 1.667 0 3.196 0.571 4.473 1.696l-1.549 2.033c-0.778-0.867-1.508-1.233-2.398-1.233-1.28 0-2.213 0.732-2.213 1.694 0 0.821 0.525 1.258 2.307 1.921zM29.438 15.986c0-4.436 3.605-7.985 8.101-7.985 1.278 0 2.352 0.273 3.653 0.935v3.504c-1.233-1.213-2.308-1.717-3.72-1.717-2.787 0-4.976 2.313-4.976 5.241 0 3.092 2.123 5.267 5.112 5.267 1.347 0 2.397-0.48 3.585-1.671v3.504c-1.347 0.638-2.443 0.892-3.72 0.892-4.519 0-8.034-3.478-8.034-7.97zM65.239 18.601l4.11-10.254h3.216l-6.573 15.655h-1.596l-6.46-15.655h3.24zM73.914 23.612v-15.265h8.418v2.585h-5.453v3.388h5.244v2.585h-5.244v4.123h5.453v2.584h-8.418zM94.081 12.852c0 2.336-1.23 3.87-3.469 4.329l4.794 6.43h-3.651l-4.105-6.135h-0.388v6.135h-2.969v-15.265h4.404c3.425 0 5.384 1.645 5.384 4.506zM88.125 15.372c1.9 0 2.903-0.827 2.903-2.359 0-1.486-1.004-2.266-2.856-2.266h-0.911v4.626h0.863z"></path>
      </symbol>
      <symbol viewBox="0 0 54 32" id="icon-logo-mastercard">
        <path d="M48.366 15.193c0.6 0 0.9 0.437 0.9 1.282 0 1.281-0.546 2.209-1.337 2.209-0.6 0-0.9-0.436-0.9-1.31 0-1.281 0.573-2.182 1.337-2.182zM38.276 18.275c0-0.655 0.491-1.009 1.472-1.009 0.109 0 0.191 0.027 0.382 0.027-0.027 0.982-0.545 1.636-1.227 1.636-0.382 0-0.628-0.245-0.628-0.655zM26.278 15.848c0 0.082-0 0.192-0 0.327h-1.909c0.164-0.763 0.545-1.173 1.091-1.173 0.518 0 0.818 0.3 0.818 0.845zM38.060 0.002c8.838 0 16.003 7.165 16.003 16.002s-7.165 15.999-16.003 15.999c-3.834 0-7.324-1.344-10.080-3.594 2.102-2.031 3.707-4.567 4.568-7.44h-1.33c-0.833 2.553-2.297 4.807-4.199 6.627-1.892-1.816-3.342-4.078-4.172-6.62h-1.33c0.858 2.856 2.435 5.401 4.521 7.432-2.749 2.219-6.223 3.594-10.036 3.594-8.837 0-16.002-7.163-16.002-15.999s7.164-16.001 16.002-16.001c3.814 0 7.287 1.377 10.036 3.603-2.087 2.023-3.664 4.568-4.521 7.424h1.33c0.83-2.542 2.28-4.804 4.172-6.607 1.903 1.808 3.367 4.060 4.199 6.614h1.33c-0.861-2.872-2.466-5.413-4.568-7.443 2.757-2.249 6.246-3.592 10.080-3.592zM7.217 20.213h1.691l1.336-8.044h-2.672l-1.637 4.99-0.082-4.99h-2.454l-1.336 8.044h1.582l1.037-6.135 0.136 6.135h1.173l2.209-6.189zM14.47 19.477l0.054-0.408 0.382-2.318c0.109-0.736 0.136-0.982 0.136-1.309 0-1.254-0.791-1.909-2.263-1.909-0.627 0-1.2 0.082-2.045 0.327l-0.246 1.473 0.163-0.028 0.246-0.081c0.382-0.109 0.928-0.164 1.418-0.164 0.79 0 1.091 0.164 1.091 0.6 0 0.109 0 0.191-0.055 0.409-0.273-0.027-0.518-0.054-0.709-0.054-1.909 0-2.999 0.927-2.999 2.536 0 1.064 0.627 1.773 1.554 1.773 0.791 0 1.364-0.246 1.8-0.791l-0.027 0.682h1.418l0.027-0.164 0.027-0.246zM17.988 16.314c-0.736-0.327-0.819-0.409-0.819-0.709 0-0.355 0.3-0.519 0.845-0.519 0.328 0 0.791 0.028 1.227 0.082l0.246-1.5c-0.436-0.082-1.118-0.137-1.5-0.137-1.909 0-2.59 1.009-2.563 2.208 0 0.818 0.382 1.391 1.282 1.828 0.709 0.327 0.818 0.436 0.818 0.709 0 0.409-0.3 0.6-0.982 0.6-0.518 0-0.982-0.082-1.527-0.245l-0.246 1.5 0.082 0.027 0.3 0.054c0.109 0.027 0.246 0.055 0.464 0.055 0.382 0.054 0.709 0.054 0.928 0.054 1.8 0 2.645-0.682 2.645-2.181 0-0.9-0.354-1.418-1.2-1.828zM21.75 18.741c-0.409 0-0.573-0.136-0.573-0.464 0-0.082 0-0.164 0.027-0.273l0.463-2.726h0.873l0.218-1.609h-0.873l0.191-0.982h-1.691l-0.737 4.472-0.082 0.518-0.109 0.654c-0.027 0.191-0.055 0.409-0.055 0.573 0 0.954 0.491 1.445 1.364 1.445 0.382 0 0.764-0.055 1.227-0.218l0.218-1.445c-0.109 0.054-0.273 0.054-0.464 0.054zM25.732 18.851c-0.982 0-1.5-0.381-1.5-1.145 0-0.055 0-0.109 0.027-0.191h3.382c0.163-0.682 0.218-1.145 0.218-1.636 0-1.446-0.9-2.373-2.318-2.373-1.718 0-2.973 1.663-2.973 3.899 0 1.936 0.982 2.945 2.89 2.945 0.628 0 1.173-0.082 1.773-0.273l0.273-1.636c-0.6 0.3-1.145 0.409-1.773 0.409zM31.158 15.524h0.109c0.164-0.79 0.382-1.363 0.655-1.881l-0.055-0.027h-0.164c-0.573 0-0.9 0.273-1.418 1.064l0.164-1.009h-1.554l-1.064 6.544h1.718c0.627-4.008 0.791-4.69 1.609-4.69zM36.122 20.133l0.3-1.827c-0.545 0.273-1.036 0.409-1.445 0.409-1.009 0-1.609-0.737-1.609-1.963 0-1.773 0.9-3.027 2.182-3.027 0.491 0 0.928 0.136 1.528 0.436l0.3-1.745c-0.163-0.054-0.218-0.082-0.436-0.163l-0.682-0.164c-0.218-0.054-0.491-0.082-0.791-0.082-2.263 0-3.845 2.018-3.845 4.88 0 2.155 1.146 3.491 3 3.491 0.463 0 0.872-0.082 1.5-0.246zM41.521 19.069l0.355-2.318c0.136-0.736 0.136-0.982 0.136-1.309 0-1.254-0.763-1.909-2.236-1.909-0.627 0-1.2 0.082-2.045 0.327l-0.246 1.473 0.164-0.028 0.218-0.081c0.382-0.109 0.955-0.164 1.446-0.164 0.791 0 1.091 0.164 1.091 0.6 0 0.109-0.027 0.191-0.082 0.409-0.246-0.027-0.491-0.054-0.682-0.054-1.909 0-3 0.927-3 2.536 0 1.064 0.627 1.773 1.555 1.773 0.791 0 1.363-0.246 1.8-0.791l-0.028 0.682h1.418v-0.164l0.027-0.246 0.054-0.327zM43.648 20.214c0.627-4.008 0.791-4.69 1.608-4.69h0.109c0.164-0.79 0.382-1.363 0.655-1.881l-0.055-0.027h-0.164c-0.572 0-0.9 0.273-1.418 1.064l0.164-1.009h-1.554l-1.037 6.544h1.691zM48.829 20.214l1.608 0 1.309-8.044h-1.691l-0.382 2.291c-0.464-0.6-0.955-0.9-1.637-0.9-1.5 0-2.782 1.854-2.782 4.035 0 1.636 0.818 2.7 2.073 2.7 0.627 0 1.118-0.218 1.582-0.709zM11.306 18.279c0-0.655 0.492-1.009 1.447-1.009 0.136 0 0.218 0.027 0.382 0.027-0.027 0.982-0.518 1.636-1.228 1.636-0.382 0-0.6-0.245-0.6-0.655z"></path>
      </symbol>
      <symbol viewBox="0 0 57 32" id="icon-logo-paypal">
        <path d="M47.11 10.477c2.211-0.037 4.633 0.618 4.072 3.276l-1.369 6.263h-3.159l0.211-0.947c-1.72 1.712-6.038 1.821-5.335-2.111 0.491-2.294 2.878-3.023 6.423-3.023 0.246-1.020-0.457-1.274-1.65-1.238s-2.633 0.437-3.089 0.655l0.281-2.293c0.913-0.182 2.106-0.583 3.615-0.583zM47.32 16.885c0.069-0.291 0.106-0.547 0.176-0.838h-0.773c-0.596 0-1.579 0.146-1.931 0.765-0.456 0.728 0.177 1.348 0.878 1.311 0.807-0.037 1.474-0.401 1.65-1.238zM53.883 8h3.242l-2.646 12.016h-3.209zM39.142 8.037c1.689 0 3.729 1.274 3.131 4.077-0.528 2.476-2.498 3.933-4.89 3.933h-2.428l-0.879 3.969h-3.412l2.603-11.979h5.874zM39.037 12.114c0.211-0.911-0.317-1.638-1.197-1.638h-1.689l-0.704 3.277h1.583c0.88 0 1.795-0.728 2.006-1.638zM16.346 10.476c2.184-0.037 4.611 0.618 4.056 3.276l-1.352 6.262h-3.155l0.208-0.947c-1.664 1.712-5.929 1.821-5.235-2.111 0.486-2.294 2.844-3.023 6.345-3.023 0.208-1.020-0.485-1.274-1.664-1.238s-2.601 0.437-3.017 0.655l0.277-2.293c0.867-0.182 2.046-0.583 3.537-0.583zM16.589 16.885c0.035-0.291 0.104-0.547 0.173-0.838h-0.797c-0.555 0-1.525 0.146-1.872 0.765-0.451 0.728 0.138 1.348 0.832 1.311 0.797-0.037 1.491-0.401 1.664-1.238zM28.528 10.648l3.255-0-7.496 13.351h-3.528l2.306-3.925-1.289-9.426h3.156l0.508 5.579zM8.499 8.036c1.728 0 3.738 1.274 3.139 4.077-0.529 2.476-2.504 3.933-4.867 3.933h-2.468l-0.847 3.969h-3.456l2.609-11.979h5.89zM8.393 12.114c0.247-0.911-0.317-1.638-1.164-1.638h-1.693l-0.741 3.277h1.623c0.882 0 1.763-0.728 1.975-1.638z"></path>
      </symbol>
      <symbol viewBox="0 0 49 32" id="icon-logo-visa">
        <path d="M14.059 10.283l4.24-0-6.302 15.472-4.236 0.003-3.259-12.329c2.318 0.952 4.379 3.022 5.219 5.275l0.42 2.148zM17.416 25.771l2.503-15.501h4.001l-2.503 15.501h-4.002zM31.992 16.494c2.31 1.106 3.375 2.444 3.362 4.211-0.032 3.217-2.765 5.295-6.97 5.295-1.796-0.020-3.526-0.394-4.459-0.826l0.56-3.469 0.515 0.246c1.316 0.579 2.167 0.814 3.769 0.814 1.151 0 2.385-0.476 2.396-1.514 0.007-0.679-0.517-1.165-2.077-1.924-1.518-0.74-3.53-1.983-3.505-4.211 0.024-3.012 2.809-5.116 6.765-5.116 1.55 0 2.795 0.339 3.586 0.651l-0.542 3.36-0.359-0.178c-0.74-0.314-1.687-0.617-2.995-0.595-1.568 0-2.293 0.689-2.293 1.333-0.010 0.728 0.848 1.204 2.246 1.923zM46.199 10.285l3.239 15.49h-3.714s-0.368-1.782-0.488-2.322c-0.583 0-4.667-0.008-5.125-0.008-0.156 0.42-0.841 2.331-0.841 2.331h-4.205l5.944-14.205c0.419-1.011 1.138-1.285 2.097-1.285h3.093zM41.263 20.274c0.781 0 2.698 0 3.322 0-0.159-0.775-0.927-4.474-0.927-4.474l-0.27-1.337c-0.202 0.581-0.554 1.52-0.531 1.479 0 0-1.262 3.441-1.594 4.332zM9.723 18.702c-1.648-4.573-5.284-6.991-9.723-8.109l0.053-0.322h6.453c0.87 0.034 1.573 0.326 1.815 1.308z"></path>
      </symbol>
      <symbol viewBox="0 0 34 32" id="icon-pinterest">
        <path d="M1.356 15.647c0 6.24 3.781 11.6 9.192 13.957-0.043-1.064-0.008-2.341 0.267-3.499 0.295-1.237 1.976-8.303 1.976-8.303s-0.491-0.973-0.491-2.411c0-2.258 1.319-3.945 2.962-3.945 1.397 0 2.071 1.041 2.071 2.288 0 1.393-0.895 3.477-1.356 5.408-0.385 1.616 0.817 2.935 2.424 2.935 2.909 0 4.869-3.708 4.869-8.101 0-3.34-2.267-5.839-6.39-5.839-4.658 0-7.56 3.447-7.56 7.297 0 1.328 0.394 2.264 1.012 2.989 0.284 0.333 0.324 0.467 0.221 0.849-0.074 0.28-0.243 0.955-0.313 1.223-0.102 0.386-0.417 0.524-0.769 0.381-2.145-0.869-3.145-3.201-3.145-5.822 0-4.329 3.679-9.519 10.975-9.519 5.863 0 9.721 4.21 9.721 8.729 0 5.978-3.349 10.443-8.285 10.443-1.658 0-3.217-0.889-3.751-1.899 0 0-0.892 3.511-1.080 4.189-0.325 1.175-0.963 2.349-1.546 3.264 1.381 0.405 2.84 0.625 4.352 0.625 8.48 0 15.355-6.822 15.355-15.238s-6.876-15.238-15.355-15.238c-8.48 0-15.356 6.822-15.356 15.238z"></path>
      </symbol>
      <symbol viewBox="0 0 26 28" id="icon-print">
        <path d="M0 21.5v-6.5q0-1.234 0.883-2.117t2.117-0.883h1v-8.5q0-0.625 0.438-1.062t1.062-0.438h10.5q0.625 0 1.375 0.313t1.188 0.75l2.375 2.375q0.438 0.438 0.75 1.188t0.313 1.375v4h1q1.234 0 2.117 0.883t0.883 2.117v6.5q0 0.203-0.148 0.352t-0.352 0.148h-3.5v2.5q0 0.625-0.438 1.062t-1.062 0.438h-15q-0.625 0-1.062-0.438t-0.438-1.062v-2.5h-3.5q-0.203 0-0.352-0.148t-0.148-0.352zM6 24h14v-4h-14v4zM6 14h14v-6h-2.5q-0.625 0-1.062-0.438t-0.438-1.062v-2.5h-10v10zM22 15q0 0.406 0.297 0.703t0.703 0.297 0.703-0.297 0.297-0.703-0.297-0.703-0.703-0.297-0.703 0.297-0.297 0.703z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-remove">
        <path d="M19 13H5v-2h14v2z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-rss">
        <path d="M-0.465347858,2.01048219 C-0.465347858,2.01048219 28.7009958,0.574406533 31,31.3201126 L25.1092027,31.3201126 C25.1092027,31.3201126 26.2597741,8.90749482 -0.465347858,6.89506416 L-0.465347858,2.01048219 L-0.465347858,2.01048219 Z M-0.465347858,12.2127144 C-0.465347858,12.2127144 16.6328276,11.6363594 19.9369779,31.3201126 L14.0472499,31.3201126 C14.0472499,31.3201126 13.3297467,19.6839434 -0.465347858,17.0940884 L-0.465347858,12.2127144 L-0.465347858,12.2127144 Z M2.73614917,25.0304648 C4.79776783,25.0304648 6.47229834,26.7007181 6.47229834,28.766614 C6.47229834,30.8282326 4.79776783,32.5016938 2.73614917,32.5016938 C0.6723919,32.5016938 -1,30.8293019 -1,28.766614 C-1,26.7017874 0.6723919,25.0304648 2.73614917,25.0304648 Z" id="rss-Shape"></path>
      </symbol>
      <symbol viewBox="0 0 26 28" id="icon-star">
        <path d="M0 10.109q0-0.578 0.875-0.719l7.844-1.141 3.516-7.109q0.297-0.641 0.766-0.641t0.766 0.641l3.516 7.109 7.844 1.141q0.875 0.141 0.875 0.719 0 0.344-0.406 0.75l-5.672 5.531 1.344 7.812q0.016 0.109 0.016 0.313 0 0.328-0.164 0.555t-0.477 0.227q-0.297 0-0.625-0.187l-7.016-3.687-7.016 3.687q-0.344 0.187-0.625 0.187-0.328 0-0.492-0.227t-0.164-0.555q0-0.094 0.031-0.313l1.344-7.812-5.688-5.531q-0.391-0.422-0.391-0.75z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-stumbleupon">
        <mask id="stumbleupon-mask-2" >
          <use
            xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stumbleupon-path-1">
          </use>
        </mask>
        <path d="M31.9250667,16.0373333 C31.9250667,24.8533333 24.7784,32 15.9624,32 C7.14666667,32 0,24.8533333 0,16.0373333 C0,7.2216 7.14666667,0.0749333333 15.9624,0.0749333333 C24.7784,0.0749333333 31.9250667,7.2216 31.9250667,16.0373333 Z M21.9205547,16.3600826 L21.9205547,18.9857015 C21.9205547,19.5214765 21.494073,19.9558236 20.968,19.9558236 C20.441927,19.9558236 20.0154453,19.5214765 20.0154453,18.9857015 L20.0154453,16.4101275 L18.1823358,16.9675798 L16.9525547,16.3839008 L16.9525547,18.9383327 C16.9717372,21.1844666 18.7659562,23 20.976146,23 C23.1984234,23 25,21.1651979 25,18.9019364 L25,16.3600826 L21.9205547,16.3600826 Z M16.9525547,14.2429415 L18.1823358,14.8266205 L20.0154453,14.2691683 L20.0154453,12.9736203 C19.9505401,10.7684323 18.1810219,9 16,9 C13.8268613,9 12.0618102,10.7555866 11.9845547,12.9492669 L11.9845547,18.8684839 C11.9845547,19.404259 11.558073,19.8386061 11.032,19.8386061 C10.505927,19.8386061 10.0794453,19.404259 10.0794453,18.8684839 L10.0794453,16.3600826 L7,16.3600826 L7,18.9019364 C7,21.1651979 8.80131387,23 11.0235912,23 C13.2264234,23 15.0119708,21.1965095 15.0429781,18.9608128 L15.0474453,13.114656 C15.0474453,12.578881 15.473927,12.1445339 16,12.1445339 C16.526073,12.1445339 16.9525547,12.578881 16.9525547,13.114656 L16.9525547,14.2429415 Z" id="stumbleupon-Fill-1"  mask="url(#stumbleupon-mask-2)"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-tumblr">
        <path d="M23.852762,25.5589268 C23.2579209,25.8427189 22.1195458,26.089634 21.2697728,26.1120809 C18.7092304,26.1810247 18.2121934,24.3131275 18.1897466,22.9566974 L18.1897466,12.9951133 L24.6159544,12.9951133 L24.6159544,8.15140729 L18.2137967,8.15140729 L18.2137967,0 L13.5256152,0 C13.4486546,0 13.3139736,0.0673405008 13.2963368,0.238898443 C13.0221648,2.73370367 11.8533261,7.11243957 7,8.86168924 L7,12.9951133 L10.2387574,12.9951133 L10.2387574,23.4521311 C10.2387574,27.0307977 12.8794671,32.1166089 19.8508122,31.9979613 C22.2013164,31.9578777 24.8131658,30.9718204 25.3919735,30.1236507 L23.852762,25.5589268"></path>
      </symbol>
      <symbol viewBox="0 0 43 32" id="icon-twitter">
        <path d="M36.575 5.229c1.756-0.952 3.105-2.46 3.74-4.257-1.644 0.882-3.464 1.522-5.402 1.867-1.551-1.495-3.762-2.429-6.209-2.429-4.697 0-8.506 3.445-8.506 7.694 0 0.603 0.075 1.19 0.22 1.753-7.069-0.321-13.337-3.384-17.532-8.039-0.732 1.136-1.152 2.458-1.152 3.868 0 2.669 1.502 5.024 3.784 6.404-1.394-0.040-2.706-0.386-3.853-0.962-0.001 0.032-0.001 0.064-0.001 0.097 0 3.728 2.932 6.837 6.823 7.544-0.714 0.176-1.465 0.27-2.241 0.27-0.548 0-1.081-0.048-1.6-0.138 1.083 3.057 4.224 5.281 7.946 5.343-2.911 2.064-6.579 3.294-10.564 3.294-0.687 0-1.364-0.036-2.029-0.108 3.764 2.183 8.235 3.457 13.039 3.457 15.646 0 24.202-11.724 24.202-21.891 0-0.334-0.008-0.665-0.025-0.995 1.662-1.085 3.104-2.439 4.244-3.982-1.525 0.612-3.165 1.025-4.885 1.211z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-youtube">
        <path d="M31.6634051,8.8527593 C31.6634051,8.8527593 31.3509198,6.64879843 30.3919217,5.67824658 C29.1757339,4.40441487 27.8125088,4.39809002 27.1873503,4.32353816 C22.7118278,4 15.9983092,4 15.9983092,4 L15.984407,4 C15.984407,4 9.27104501,4 4.79536595,4.32353816 C4.17017613,4.39809002 2.80745205,4.40441487 1.59082583,5.67824658 C0.631890411,6.64879843 0.319843444,8.8527593 0.319843444,8.8527593 C0.319843444,8.8527593 0,11.4409393 0,14.0290881 L0,16.4554834 C0,19.0436008 0.319843444,21.6317495 0.319843444,21.6317495 C0.319843444,21.6317495 0.631890411,23.8357417 1.59082583,24.8062935 C2.80745205,26.0801566 4.40557339,26.0398591 5.11736986,26.1733699 C7.67602348,26.4187241 15.9913894,26.4946536 15.9913894,26.4946536 C15.9913894,26.4946536 22.7118278,26.4845401 27.1873503,26.1610333 C27.8125088,26.0864501 29.1757339,26.0801566 30.3919217,24.8062935 C31.3509198,23.8357417 31.6634051,21.6317495 31.6634051,21.6317495 C31.6634051,21.6317495 31.9827789,19.0436008 31.9827789,16.4554834 L31.9827789,14.0290881 C31.9827789,11.4409393 31.6634051,8.8527593 31.6634051,8.8527593 Z M12.6895342,19.39582 L12.6880626,10.4095186 L21.3299413,14.9183249 L12.6895342,19.39582 Z" id="youtube-Imported-Layers"></path>
      </symbol>
      <symbol viewBox="0 0 26 26" id="logo-small">
        <path d="M17.647 12.125h-3.323c-.11 0-.197.087-.197.194v2.327c0 .107.087.193.197.193h3.323c.95 0 1.542-.524 1.542-1.357 0-.795-.594-1.358-1.543-1.358zm-2.62-2.423h3.233c2.51 0 3.988 1.57 3.988 3.296 0 1.35-.915 2.345-1.885 2.78-.155.07-.15.283.01.346 1.128.443 1.94 1.623 1.94 3 0 1.96-1.305 3.512-3.837 3.512h-6.96c-.11 0-.197-.087-.197-.194v-9.03L.237 24.49c-.51.508-.148 1.378.57 1.378h24.254c.446 0 .808-.362.808-.808V.81c0-.72-.87-1.08-1.38-.572L15.03 9.702zm-.703 7.562c-.11 0-.197.087-.197.194v2.56c0 .106.087.193.197.193h3.44c1.05 0 1.682-.542 1.682-1.472 0-.815-.593-1.474-1.68-1.474h-3.442z"  fill-rule="evenodd"></path>
      </symbol>
      <symbol id="icon-alignleft" viewBox="0 0 448 512" class="svg-inline--fa fa-align-left fa-w-14">
        <path fill="currentColor" d="M288 48v32c0 6.627-5.373 12-12 12H12C5.373 92 0 86.627 0 80V48c0-6.627 5.373-12 12-12h264c6.627 0 12 5.373 12 12zM12 220h424c6.627 0 12-5.373 12-12v-32c0-6.627-5.373-12-12-12H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12zm0 256h424c6.627 0 12-5.373 12-12v-32c0-6.627-5.373-12-12-12H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12zm264-184H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h264c6.627 0 12-5.373 12-12v-32c0-6.627-5.373-12-12-12z" class=""></path>
      </symbol>
      <symbol id="icon-caret-circle-down" data-icon="caret-circle-down" viewBox="0 0 512 512" class="svg-inline--fa fa-caret-circle-down fa-w-16 fa-3x">
        <path fill="currentColor" d="M157.1 216h197.8c10.7 0 16.1 13 8.5 20.5l-98.9 98.3c-4.7 4.7-12.2 4.7-16.9 0l-98.9-98.3c-7.7-7.5-2.3-20.5 8.4-20.5zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-48 0c0-110.5-89.5-200-200-200S56 145.5 56 256s89.5 200 200 200 200-89.5 200-200z" class=""></path>
      </symbol>
      <symbol id="icon-shopping-cart" viewBox="0 0 24 24">
        <path d="M20.756 5.345c-0.191-0.219-0.466-0.345-0.756-0.345h-13.819l-0.195-1.164c-0.080-0.482-0.497-0.836-0.986-0.836h-2.25c-0.553 0-1 0.447-1 1s0.447 1 1 1h1.403l1.86 11.164c0.008 0.045 0.031 0.082 0.045 0.124 0.016 0.053 0.029 0.103 0.054 0.151 0.032 0.066 0.075 0.122 0.12 0.179 0.031 0.039 0.059 0.078 0.095 0.112 0.058 0.054 0.125 0.092 0.193 0.13 0.038 0.021 0.071 0.049 0.112 0.065 0.116 0.047 0.238 0.075 0.367 0.075 0.001 0 11.001 0 11.001 0 0.553 0 1-0.447 1-1s-0.447-1-1-1h-10.153l-0.166-1h11.319c0.498 0 0.92-0.366 0.99-0.858l1-7c0.041-0.288-0.045-0.579-0.234-0.797zM18.847 7l-0.285 2h-3.562v-2h3.847zM14 7v2h-3v-2h3zM14 10v2h-3v-2h3zM10 7v2h-3c-0.053 0-0.101 0.015-0.148 0.030l-0.338-2.030h3.486zM7.014 10h2.986v2h-2.653l-0.333-2zM15 12v-2h3.418l-0.285 2h-3.133z"></path>
        <path d="M10 19.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5c0-0.828 0.672-1.5 1.5-1.5s1.5 0.672 1.5 1.5z"></path>
        <path d="M19 19.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5c0-0.828 0.672-1.5 1.5-1.5s1.5 0.672 1.5 1.5z"></path>
      </symbol>
      <symbol id="icon-shopping-basket"  viewBox="0 0 32 32">
        <path d="M 14.667 28 c 0 -0.359 -0.072 -0.704 -0.203 -1.02 c -0.136 -0.328 -0.333 -0.62 -0.579 -0.865 s -0.539 -0.443 -0.865 -0.579 c -0.316 -0.131 -0.661 -0.203 -1.02 -0.203 s -0.704 0.072 -1.02 0.203 c -0.328 0.136 -0.62 0.333 -0.865 0.579 s -0.443 0.539 -0.579 0.865 c -0.131 0.316 -0.203 0.661 -0.203 1.02 s 0.072 0.704 0.203 1.02 c 0.136 0.328 0.333 0.62 0.579 0.865 s 0.539 0.443 0.865 0.579 c 0.316 0.131 0.661 0.203 1.02 0.203 s 0.704 -0.072 1.02 -0.203 c 0.328 -0.136 0.62 -0.333 0.865 -0.579 s 0.443 -0.539 0.579 -0.865 c 0.131 -0.316 0.203 -0.661 0.203 -1.02 Z M 29.333 28 c 0 -0.359 -0.072 -0.704 -0.203 -1.02 c -0.136 -0.328 -0.333 -0.62 -0.579 -0.865 s -0.539 -0.443 -0.865 -0.579 c -0.316 -0.131 -0.661 -0.203 -1.02 -0.203 s -0.704 0.072 -1.02 0.203 c -0.328 0.136 -0.62 0.333 -0.865 0.579 s -0.443 0.539 -0.579 0.865 c -0.131 0.316 -0.203 0.661 -0.203 1.02 s 0.072 0.704 0.203 1.02 c 0.136 0.328 0.333 0.62 0.579 0.865 s 0.539 0.443 0.865 0.579 c 0.316 0.131 0.661 0.203 1.02 0.203 s 0.704 -0.072 1.02 -0.203 c 0.328 -0.136 0.62 -0.333 0.865 -0.579 s 0.443 -0.539 0.579 -0.865 c 0.131 -0.316 0.203 -0.661 0.203 -1.02 Z M 9.628 9.333 h 19.427 l -1.828 9.588 c -0.031 0.151 -0.085 0.291 -0.159 0.417 c -0.076 0.129 -0.172 0.244 -0.284 0.341 c -0.123 0.105 -0.264 0.189 -0.416 0.244 c -0.147 0.053 -0.307 0.081 -0.501 0.077 h -12.979 c -0.153 0.003 -0.303 -0.021 -0.441 -0.067 c -0.143 -0.047 -0.275 -0.116 -0.393 -0.204 c -0.129 -0.097 -0.241 -0.217 -0.327 -0.353 c -0.083 -0.132 -0.144 -0.281 -0.179 -0.451 Z M 1.333 2.667 h 4.24 l 1.109 5.54 c 0.005 0.037 0.013 0.076 0.023 0.112 l 2.228 11.129 c 0.097 0.489 0.281 0.944 0.536 1.348 c 0.263 0.417 0.597 0.777 0.984 1.067 c 0.352 0.264 0.747 0.469 1.168 0.607 c 0.413 0.135 0.855 0.204 1.305 0.197 h 12.941 c 0.475 0.009 0.959 -0.073 1.408 -0.236 c 0.464 -0.168 0.887 -0.417 1.252 -0.733 c 0.332 -0.287 0.617 -0.629 0.843 -1.012 c 0.22 -0.376 0.381 -0.791 0.471 -1.233 l 2.136 -11.203 c 0.137 -0.724 -0.336 -1.421 -1.06 -1.56 c -0.088 -0.016 -0.175 -0.024 -0.251 -0.023 h -21.573 l -1.12 -5.595 c -0.125 -0.616 -0.663 -1.072 -1.307 -1.072 h -5.333 c -0.736 0 -1.333 0.597 -1.333 1.333 s 0.597 1.333 1.333 1.333 Z" />
      </symbol>
      <symbol id="icon-shopping-bag" viewBox="0 0 832 1024">
        <path d="M768 159H577V97q0-26-13-48t-35-35-48-13H353q-15 0-30 5t-26.5 14T276 40.5 262 67t-5 30v62H64q-27 0-45.5 18.5T0 223v736q0 26 18.5 45t45.5 19h704q27 0 45.5-19t18.5-45V223q0-27-18.5-45.5T768 159zM321 97q0-13 9.5-22.5T353 65h128q13 0 22.5 9.5T513 97v62H321V97zm447 862H64V223h193v66q0 3 1 8.5t8.5 14.5 22.5 9q16 0 24-8t8-16v-74h192v69l1.5 7.5 4.5 10 9.5 8L545 321q9 0 15.5-3.5t9.5-8 4.5-9.5 2.5-8v-69h191v736z" />
      </symbol>
      <symbol id="icon-shopping-bag1" viewBox="0 0 32 32">
        <path d="M 25.333 6.667 h -18.667 l 2 -2.667 h 14.667 Z M 29.059 7.189 l -3.992 -5.323 c -0.261 -0.348 -0.659 -0.532 -1.067 -0.533 h -16 c -0.435 0 -0.821 0.208 -1.067 0.533 l -4 5.333 c -0.056 0.075 -0.103 0.152 -0.14 0.233 c -0.087 0.181 -0.128 0.376 -0.127 0.567 v 18.667 c 0 0.54 0.108 1.057 0.304 1.531 c 0.203 0.491 0.5 0.931 0.868 1.299 s 0.808 0.665 1.299 0.868 c 0.472 0.195 0.989 0.303 1.529 0.303 h 18.667 c 0.54 0 1.057 -0.108 1.531 -0.304 c 0.491 -0.203 0.931 -0.5 1.299 -0.868 s 0.665 -0.808 0.868 -1.299 c 0.195 -0.472 0.303 -0.989 0.303 -1.529 v -18.667 c 0 -0.292 -0.095 -0.563 -0.252 -0.78 c -0.005 -0.007 -0.009 -0.013 -0.015 -0.02 Z M 5.333 9.333 h 21.333 v 17.333 c 0 0.183 -0.036 0.355 -0.1 0.509 c -0.067 0.163 -0.167 0.309 -0.291 0.433 s -0.271 0.223 -0.433 0.291 c -0.155 0.064 -0.327 0.1 -0.509 0.1 h -18.667 c -0.183 0 -0.355 -0.036 -0.509 -0.1 c -0.163 -0.067 -0.309 -0.167 -0.433 -0.291 s -0.223 -0.271 -0.291 -0.433 c -0.064 -0.155 -0.1 -0.327 -0.1 -0.509 Z M 20 13.333 c 0 0.544 -0.108 1.06 -0.303 1.529 c -0.203 0.488 -0.5 0.929 -0.869 1.299 s -0.811 0.667 -1.299 0.869 c -0.469 0.195 -0.985 0.303 -1.529 0.303 s -1.06 -0.108 -1.529 -0.303 c -0.488 -0.203 -0.929 -0.5 -1.299 -0.869 s -0.667 -0.811 -0.869 -1.299 c -0.195 -0.469 -0.303 -0.985 -0.303 -1.529 c 0 -0.736 -0.597 -1.333 -1.333 -1.333 s -1.333 0.597 -1.333 1.333 c 0 0.9 0.179 1.763 0.505 2.549 c 0.339 0.817 0.833 1.551 1.447 2.164 s 1.348 1.109 2.164 1.447 c 0.788 0.328 1.651 0.507 2.551 0.507 s 1.763 -0.179 2.549 -0.505 c 0.817 -0.339 1.551 -0.833 2.164 -1.447 s 1.109 -1.348 1.447 -2.164 c 0.328 -0.788 0.507 -1.651 0.507 -2.551 c 0 -0.736 -0.597 -1.333 -1.333 -1.333 s -1.333 0.597 -1.333 1.333 Z" />
      </symbol>
      <symbol id="icon-shopping-briefcase" viewBox="0 0 1024 960">
        <path d="M960 159H704V97q0-26-12.5-48t-35-35T608 1H416q-40 0-68 28.5T320 97v62H64q-26 0-45 19T0 223v672q0 26 19 45t45 19h896q26 0 45-19t19-45V223q0-17-8.5-31.5T992 168t-32-9zM384 97q0-13 9.5-22.5T416 65h192q14 0 23 9.5t9 22.5v62H384V97zM64 223h896v225H608v-33q0-17-9-32t-23.5-23.5T544 351h-64q-27 0-45.5 19T416 415v33H64V223zm480 353h-64V415h64v161zM64 895V512h352v64q0 27 18.5 45.5T480 640h64q17 0 31.5-8.5T599 608t9-32v-64h352v383H64z" />
      </symbol>
      <symbol id="icon-shopping-handbag" viewBox="0 0 1024 1056">
        <path d="M1023 959l-84-504q-5-49-44-84t-88-35h-71v-85q0-48-16.5-91.5t-46-75.5-71-50.5T513 15q-64 0-115.5 32T317 133t-29 118v85h-77q-16 0-32 4.5t-30 12-26 18.5-21 24-15 28-8 30L2 958q-5 40 15 62 19 21 54 21h873q23 0 38-7t24-17q20-23 17-58zM352 251q0-72 45.5-122T513 79q35 0 65 13.5t50.5 37 32 55T672 251v85H352v-85zm595 725l-872 1q-12 0-10-11l77-504q2-12 8-23.5t15.5-20T187 405t24-5h77v73q-7 5-13 10.5T265 496t-6.5 15.5T256 528q0 27 18.5 45.5T320 592t45.5-18.5T384 528q0-36-32-55v-73h320v73q-32 19-32 55 0 27 18.5 45.5T704 592t45.5-18.5T768 528q0-36-32-55v-73h71q6 0 12 1.5t12 4 11.5 6 10 7.5 8.5 9 7 11 5 12 3 13l83 503q1 4-2 6.5t-10 2.5z" />
      </symbol>
      <symbol id="icon-shopping-bag2" viewBox="0 0 28 28">
        <path d="M27.453 22l0.547 4.891c0.031 0.281-0.063 0.562-0.25 0.781-0.187 0.203-0.469 0.328-0.75 0.328h-26c-0.281 0-0.562-0.125-0.75-0.328-0.187-0.219-0.281-0.5-0.25-0.781l0.547-4.891h26.906zM26 8.891l1.344 12.109h-26.688l1.344-12.109c0.063-0.5 0.484-0.891 1-0.891h4v2c0 1.109 0.891 2 2 2s2-0.891 2-2v-2h6v2c0 1.109 0.891 2 2 2s2-0.891 2-2v-2h4c0.516 0 0.938 0.391 1 0.891zM20 6v4c0 0.547-0.453 1-1 1s-1-0.453-1-1v-4c0-2.203-1.797-4-4-4s-4 1.797-4 4v4c0 0.547-0.453 1-1 1s-1-0.453-1-1v-4c0-3.313 2.688-6 6-6s6 2.688 6 6z" ></path>
      </symbol>
      <symbol id="icon-shopping-basket2" viewBox="0 0 32 28">
        <path d="M30 12c1.109 0 2 0.891 2 2s-0.891 2-2 2h-0.234l-1.797 10.344c-0.172 0.953-1 1.656-1.969 1.656h-20c-0.969 0-1.797-0.703-1.969-1.656l-1.797-10.344h-0.234c-1.109 0-2-0.891-2-2s0.891-2 2-2h28zM7.578 24.5c0.547-0.047 0.969-0.531 0.922-1.078l-0.5-6.5c-0.047-0.547-0.531-0.969-1.078-0.922s-0.969 0.531-0.922 1.078l0.5 6.5c0.047 0.516 0.484 0.922 1 0.922h0.078zM14 23.5v-6.5c0-0.547-0.453-1-1-1s-1 0.453-1 1v6.5c0 0.547 0.453 1 1 1s1-0.453 1-1zM20 23.5v-6.5c0-0.547-0.453-1-1-1s-1 0.453-1 1v6.5c0 0.547 0.453 1 1 1s1-0.453 1-1zM25.5 23.578l0.5-6.5c0.047-0.547-0.375-1.031-0.922-1.078s-1.031 0.375-1.078 0.922l-0.5 6.5c-0.047 0.547 0.375 1.031 0.922 1.078h0.078c0.516 0 0.953-0.406 1-0.922zM7.438 4.562l-1.453 6.438h-2.063l1.578-6.891c0.406-1.828 2.016-3.109 3.891-3.109h2.609c0-0.547 0.453-1 1-1h6c0.547 0 1 0.453 1 1h2.609c1.875 0 3.484 1.281 3.891 3.109l1.578 6.891h-2.063l-1.453-6.438c-0.219-0.922-1.016-1.563-1.953-1.563h-2.609c0 0.547-0.453 1-1 1h-6c-0.547 0-1-0.453-1-1h-2.609c-0.938 0-1.734 0.641-1.953 1.563z" ></path>
      </symbol>
      <symbol id="icon-shopbag" viewBox="0 0 32 32">
        <path d="M3.205 3.205v25.59h25.59v-25.59h-25.59zM27.729 27.729h-23.457v-23.457h23.457v23.457z"></path>
        <path d="M9.068 13.334c0 3.828 3.104 6.931 6.931 6.931s6.93-3.102 6.93-6.931v-3.732h1.067v-1.066h-3.199v1.066h1.065v3.732c0 3.234-2.631 5.864-5.864 5.864-3.234 0-5.865-2.631-5.865-5.864v-3.732h1.067v-1.066h-3.199v1.066h1.065v3.732z"></path>
      </symbol>
      <symbol id="icon-freeshipping" viewBox="0 0 40 40">
        <path d="M21.562,23.9a0.781,0.781,0,1,0,.781.782A0.781,0.781,0,0,0,21.562,23.9ZM20,14.529a0.782,0.782,0,1,0,.781.781A0.782,0.782,0,0,0,20,14.529ZM20,11.4a3.906,3.906,0,1,0,3.906,3.906A3.911,3.911,0,0,0,20,11.4Zm0,6.251a2.344,2.344,0,1,1,2.344-2.344A2.347,2.347,0,0,1,20,17.655ZM35.078,30.623a5.029,5.029,0,0,0-4.648,3.135,3.89,3.89,0,0,0-1.339.138,4.7,4.7,0,0,0-5.185-1.445V27.994l0.878-1.755,2.378,3.567a0.781,0.781,0,0,0,1.412-.261l1.085-4.8a5.373,5.373,0,0,0-1.94-6.17,5.441,5.441,0,0,0-1.252-.619l0.3-2.025c0-.005,0-0.011,0-0.017A17.715,17.715,0,0,0,24.8,5.167,17.685,17.685,0,0,0,20.455.144a0.787,0.787,0,0,0-.966.043l-0.065.053a17.43,17.43,0,0,0-6.076,9.586,18.225,18.225,0,0,0-.162,5.706l0,0.016,0.351,2.4a5.436,5.436,0,0,0-1.258.621,5.372,5.372,0,0,0-1.94,6.17l1.085,4.8a0.781,0.781,0,0,0,1.412.261l2.378-3.567,0.878,1.755v4.458A4.693,4.693,0,0,0,10.909,33.9a3.892,3.892,0,0,0-1.339-.138,5.029,5.029,0,0,0-4.648-3.135A4.873,4.873,0,0,0,0,35.31,4.875,4.875,0,0,0,4.922,40H35.078A4.874,4.874,0,0,0,40,35.31,4.873,4.873,0,0,0,35.078,30.623ZM26.234,19.536a3.626,3.626,0,0,1,1.93,4.75c-0.008.025-.015,0.05-0.021,0.075l-0.692,3.063L25.5,24.5ZM20.009,1.789a16.629,16.629,0,0,1,3.676,4.591,5.463,5.463,0,0,1-7.377-.007A16.79,16.79,0,0,1,20.009,1.789ZM12.548,27.423L11.856,24.36c-0.006-.025-0.013-0.05-0.021-0.075a3.864,3.864,0,0,1,1.312-4.414,3.917,3.917,0,0,1,.623-0.337L14.5,24.5Zm3.44-3.519L14.735,15.33a16.617,16.617,0,0,1,.137-5.163,14.394,14.394,0,0,1,.739-2.333,7.026,7.026,0,0,0,8.734.034,17.166,17.166,0,0,1,.872,7.84l-1.285,8.741L22.642,27.03H17.358l-0.781-1.562h1.861a0.781,0.781,0,0,0,0-1.563h-2.45Zm19.09,14.531H4.922A3.334,3.334,0,0,1,1.562,35.31a3.334,3.334,0,0,1,3.359-3.125,3.494,3.494,0,0,1,3.135,2,3.935,3.935,0,0,0-.975.711A0.781,0.781,0,0,0,8.187,36a2.327,2.327,0,0,1,1.027-.6h0A2.341,2.341,0,0,1,11.5,36a0.781,0.781,0,0,0,1.107-1.1c-0.086-.086-0.177-0.168-0.27-0.246a3.126,3.126,0,0,1,3.757-.48v1.924a0.781,0.781,0,1,0,1.563,0v-7.5h4.688v7.5a0.781,0.781,0,1,0,1.562,0V34.166a3.131,3.131,0,0,1,3.757.482c-0.093.078-.184,0.16-0.27,0.246A0.781,0.781,0,0,0,28.5,36a2.34,2.34,0,0,1,3.312,0,0.781,0.781,0,0,0,1.106-1.1,3.937,3.937,0,0,0-.975-0.711,3.494,3.494,0,0,1,3.135-2,3.334,3.334,0,0,1,3.359,3.125A3.334,3.334,0,0,1,35.078,38.436Z"/>
      </symbol>
      <symbol id="icon-lowestprice" viewBox="0 0 33 34">
        <path d="M24.72,7.176a2.335,2.335,0,0,0,2.323-2.354V2.36a2.323,2.323,0,1,0-4.646,0V4.824A2.333,2.333,0,0,0,24.72,7.176Zm8.255-3.1H28.3v1.2a3.537,3.537,0,1,1-7.073,0v-1.2H11.786v1.2a3.538,3.538,0,1,1-7.075,0v-1.2l-4.72-.06V34H30.651l2.358-.007ZM30.651,31.61H2.349V12.46h28.3V31.61h0ZM8.21,7.176a2.336,2.336,0,0,0,2.325-2.354V2.36a2.323,2.323,0,1,0-4.646,0V4.824A2.332,2.332,0,0,0,8.21,7.176Zm3.582,7.853H15.51v3.329H11.792V15.029Zm6.008,0h3.721v3.329H17.8V15.029Zm5.575,0h3.717v3.329H23.375V15.029ZM11.792,20.558H15.51v3.327H11.792V20.558Zm6.008,0h3.721v3.327H17.8V20.558Zm5.575,0h3.717v3.327H23.375V20.558ZM11.792,26.2H15.51v3.327H11.792V26.2Zm-5.9-5.639H9.6v3.327H5.889V20.558Zm0,5.639H9.6v3.327H5.889V26.2Zm11.911,0h3.721v3.327H17.8V26.2Zm5.575,0h3.717v3.327H23.375V26.2Z"/>
      </symbol>
      <symbol id="icon-moneyback" viewBox="0 0 40 40">
        <path d="M39.993,23.944c0-5.31-2.187-12.255-8.275-14.747V6.537l1.81-1.448a0.691,0.691,0,0,0,.259-0.539V0.688A0.69,0.69,0,0,0,33.1,0H31.028a0.689,0.689,0,0,0-.488.2l-0.892.891L28.758,0.2A0.689,0.689,0,0,0,28.27,0H25.512a0.689,0.689,0,0,0-.488.2l-0.892.891L23.241,0.2A0.689,0.689,0,0,0,22.753,0H20.684a0.69,0.69,0,0,0-.69.69V4.55a0.691,0.691,0,0,0,.259.539l1.81,1.448V9.2c-6.088,2.492-8.275,9.439-8.275,14.747a11.272,11.272,0,0,0,.572,3.666c-0.3-.016-0.6-0.026-0.893-0.026H11.72a0.69,0.69,0,0,0-.69-0.69H5.513a0.69,0.69,0,0,0-.69.69H0v1.378H4.824v6.9H0v1.378H4.824a0.689,0.689,0,0,0,.69.69H11.03a0.689,0.689,0,0,0,.69-0.69V36.976l5.149,2.138a11.931,11.931,0,0,0,8.776.1L36.3,35.149a2.509,2.509,0,0,0,1.409-1.343,2.535,2.535,0,0,0-.447-2.752A9.565,9.565,0,0,0,39.993,23.944Zm-29.652,12.6H6.2V28.274h4.138v8.275ZM21.374,4.218V1.378h1.094l1.177,1.177a0.689,0.689,0,0,0,.975,0L25.8,1.378h2.187l1.177,1.177a0.689,0.689,0,0,0,.975,0l1.177-1.177h1.094v2.84l-1.621,1.3H22.994Zm8.965,2.676V8.964h-6.9V6.895h6.9Zm6.1,26.355a1.139,1.139,0,0,1-.639.612L25.15,37.923a10.551,10.551,0,0,1-7.759-.083L11.72,35.483v-6.52h1.748a14.825,14.825,0,0,1,6.588,1.556,4.88,4.88,0,0,0,2.176.514H27.58a1.034,1.034,0,0,1,.227,2.041c-0.09.008-.178,0.027-0.27,0.027H19.305v1.38H27.58c0.014,0,.027,0,0.041,0a4.244,4.244,0,0,0,1.592-.337l5.766-2.448a1.1,1.1,0,0,1,.86,0,1.138,1.138,0,0,1,.621.642A1.183,1.183,0,0,1,36.441,33.249ZM36.03,30.313a2.451,2.451,0,0,0-1.59.109l-4.471,1.9a2.312,2.312,0,0,0-2.388-2.667H22.231a3.5,3.5,0,0,1-1.559-.369,16.188,16.188,0,0,0-4.752-1.5,9.453,9.453,0,0,1-.752-3.835c0-4.966,2.028-11.483,7.724-13.6h8c5.7,2.119,7.724,8.636,7.724,13.6A8.178,8.178,0,0,1,36.03,30.313ZM7.582,33.791H8.961V35.17H7.582V33.791ZM28.356,19.76l-2.493-.831a0.512,0.512,0,0,1,.161-1h1.734a0.513,0.513,0,0,1,.512.513v0.452h1.379V18.442a1.894,1.894,0,0,0-1.892-1.893H27.58V15.17H26.2V16.55H26.024a1.892,1.892,0,0,0-.6,3.687l2.493,0.831a0.513,0.513,0,0,1-.161,1H26.024a0.513,0.513,0,0,1-.512-0.514V21.1H24.132v0.452a1.893,1.893,0,0,0,1.892,1.893H26.2v1.379H27.58V23.446h0.177A1.892,1.892,0,0,0,28.356,19.76Zm-1.465-7.347A7.586,7.586,0,1,0,34.476,20,7.586,7.586,0,0,0,26.891,12.412Zm0,13.793A6.207,6.207,0,1,1,33.1,20,6.207,6.207,0,0,1,26.891,26.205Z"/>
      </symbol>
      <symbol id="icon-onlinesupport" viewBox="0 0 41 41">
        <path d="M30.951,11.031a1.859,1.859,0,0,0-1.373-.61H28.621l0.114-1.766,0.141-2.192a6.048,6.048,0,0,0-1.608-4.543A5.91,5.91,0,0,0,22.891,0h-4.77a5.91,5.91,0,0,0-4.377,1.919,6.049,6.049,0,0,0-1.609,4.543l0.212,3.288,0.043,0.67H11.352a1.859,1.859,0,0,0-1.373.61A1.9,1.9,0,0,0,9.5,12.467l0.311,3.667a1.867,1.867,0,0,0,1.223,1.612v3.417a0.817,0.817,0,1,0,1.634,0V17.858h0.22a7.729,7.729,0,0,0,3.922,5.871,7.56,7.56,0,0,0,7.4,0,7.7,7.7,0,0,0,2.7-2.508,4.152,4.152,0,0,0,1.562-.475c2.361-1.277,2.642-4.479,2.653-4.615h0l0.311-3.663A1.9,1.9,0,0,0,30.951,11.031ZM11.663,16.2a0.229,0.229,0,0,1-.229-0.211l-0.311-3.668a0.23,0.23,0,0,1,.06-0.177,0.224,0.224,0,0,1,.169-0.075H12.5L12.764,16.2h-1.1Zm2.1-9.849a4.4,4.4,0,0,1,1.17-3.305,4.3,4.3,0,0,1,3.185-1.4h4.77c0.106,0,.211,0,0.315.012L21.94,5.08c-0.2.344-2.061,3.169-8.016,3.732ZM26.539,17.321a6.185,6.185,0,0,1-.58,2.25,7.359,7.359,0,0,1-2.394-.785,2.04,2.04,0,1,0-2,1.633,2.008,2.008,0,0,0,1.024-.28,10.487,10.487,0,0,0,2.367.923,6.057,6.057,0,0,1-1.539,1.218,5.956,5.956,0,0,1-5.827,0,6.093,6.093,0,0,1-3.12-4.96L14.031,10.46c4.6-.427,7.111-2.128,8.348-3.349a4.716,4.716,0,0,0,1.413,1.055,15.911,15.911,0,0,0,3.268,1.08Zm-4.562,1.032a0.409,0.409,0,1,1-.409-0.413A0.411,0.411,0,0,1,21.977,18.354Zm5.269-12L27.168,7.571A12.944,12.944,0,0,1,24.542,6.7a1.825,1.825,0,0,1-1.1-.968,0.039,0.039,0,0,0,0-.005v0l1.346-3.628A4.427,4.427,0,0,1,27.246,6.356Zm0.6,12.843a7.88,7.88,0,0,0,.279-1.341h0.838A3.217,3.217,0,0,1,27.851,19.2ZM29.5,15.994a0.229,0.229,0,0,1-.229.211H28.248l0.266-4.131h1.063a0.224,0.224,0,0,1,.169.075,0.229,0.229,0,0,1,.059.177ZM41,40.029l-0.79-4.41a12.248,12.248,0,0,0-3.36-6.488,12.028,12.028,0,0,0-8.572-3.59H25.9a0.814,0.814,0,0,0-.578.241l-4.814,4.869-4.814-4.869a0.814,0.814,0,0,0-.578-0.242H12.735a12.032,12.032,0,0,0-2.25.213h0a12.029,12.029,0,0,0-6.322,3.378A12.247,12.247,0,0,0,.8,35.619l-0.79,4.41a0.833,0.833,0,0,0,.177.677,0.812,0.812,0,0,0,.627.3H40.195a0.812,0.812,0,0,0,.627-0.3A0.833,0.833,0,0,0,41,40.029ZM21.084,32.4l5.153-5.212h2.041c0.106,0,.212,0,0.317,0l-8.088,8.181-1.181-1.2Zm-8.349-5.212h2.041l4.575,4.627-1.181,1.2L12.418,27.2C12.524,27.194,12.629,27.193,12.735,27.193ZM1.8,39.35l0.616-3.437a10.622,10.622,0,0,1,7.96-8.449l9.557,9.667a0.729,0.729,0,0,0,.062.057,0.809,0.809,0,0,0,1.031,0,0.744,0.744,0,0,0,.062-0.057l9.557-9.667a10.623,10.623,0,0,1,7.96,8.449l0.616,3.437H1.8ZM11.846,22.816a0.821,0.821,0,0,0-.817.826v0.331a0.817,0.817,0,1,0,1.634,0V23.642A0.821,0.821,0,0,0,11.846,22.816Z"/>
      </symbol>
      <symbol id="icon-payment" viewBox="0 0 36 40">
        <path d="M11.9,3.057a0.626,0.626,0,1,0-.258.778A0.634,0.634,0,0,0,11.9,3.057Zm2.673,0a0.626,0.626,0,1,0-.2.739A0.633,0.633,0,0,0,14.574,3.057Zm-5.345,0a0.626,0.626,0,1,0-.221.754A0.632,0.632,0,0,0,9.229,3.057Zm3.43,33.015H9.987a0.627,0.627,0,0,0,0,1.253h2.672A0.627,0.627,0,1,0,12.659,36.072ZM8.65,26.72H5.31a0.626,0.626,0,1,0,0,1.253H8.65A0.626,0.626,0,1,0,8.65,26.72Zm2,2H5.31a0.626,0.626,0,0,0,0,1.253h5.345A0.626,0.626,0,0,0,10.655,28.724ZM11.323,14.7a1.962,1.962,0,1,0,1.963,1.961A1.964,1.964,0,0,0,11.323,14.7Zm0,2.672a0.71,0.71,0,1,1,.71-0.71A0.711,0.711,0,0,1,11.323,17.368ZM15.335,9A8.651,8.651,0,0,0,7.311,9a0.626,0.626,0,0,0,.582,1.109,7.4,7.4,0,0,1,6.859,0A0.626,0.626,0,1,0,15.335,9Zm-1.861,3.552a4.629,4.629,0,0,0-4.3,0,0.626,0.626,0,1,0,.582,1.108,3.385,3.385,0,0,1,3.138,0A0.626,0.626,0,1,0,13.474,12.553Zm0.93-1.776a6.638,6.638,0,0,0-6.162,0,0.626,0.626,0,1,0,.582,1.109,5.386,5.386,0,0,1,5,0,0.624,0.624,0,0,0,.291.072A0.626,0.626,0,0,0,14.4,10.777Zm21-2.425-1.9-.1A20.654,20.654,0,0,1,27.2,6.525l-0.9-.448a0.627,0.627,0,0,0-.56,0l-0.9.448a14.933,14.933,0,0,1-2.206.864V3.3A3.3,3.3,0,0,0,19.34,0H3.306a3.3,3.3,0,0,0-3.3,3.3V12.01a0.626,0.626,0,1,0,1.253,0V6.595H21.386V7.74a18.074,18.074,0,0,1-2.848.515l-1.9.1a0.627,0.627,0,0,0-.594.625V19.371H4.642a1.965,1.965,0,0,0-1.963,1.963v8.685A1.964,1.964,0,0,0,4.642,31.98H18a1.964,1.964,0,0,0,1.963-1.962V26.664c0.466,0.438.953,0.853,1.452,1.237a0.626,0.626,0,0,0-.032.2v5.3H1.259V14.626a0.626,0.626,0,1,0-1.253,0V36.7a3.3,3.3,0,0,0,3.3,3.3H19.34a3.3,3.3,0,0,0,3.3-3.3V28.763a14.347,14.347,0,0,0,2.405,1.263l0.744,0.3a0.631,0.631,0,0,0,.465,0l0.744-.3a17.389,17.389,0,0,0,5.863-4.143C34.294,24.366,36,22.039,36,19.567V8.977A0.627,0.627,0,0,0,35.407,8.352ZM21.386,36.7a2.049,2.049,0,0,1-2.046,2.045H3.306A2.049,2.049,0,0,1,1.259,36.7V34.653H21.386V36.7ZM1.259,5.343V3.3A2.049,2.049,0,0,1,3.306,1.251H19.34A2.049,2.049,0,0,1,21.386,3.3V5.343H1.259ZM3.932,21.334a0.711,0.711,0,0,1,.71-0.71h11.5a7.8,7.8,0,0,0,.734,2.088H3.932V21.334Zm0,2.631H17.624c0.178,0.26.363,0.511,0.551,0.75H3.932v-0.75Zm14.782,6.054a0.711,0.711,0,0,1-.71.71H4.642a0.711,0.711,0,0,1-.71-0.71v-4.05H18.714v4.05h0Zm13.237-5a16.084,16.084,0,0,1-5.417,3.84l-0.512.206-0.512-.206a16.084,16.084,0,0,1-5.417-3.84c-1.276-1.352-2.8-3.4-2.8-5.456V9.573L18.6,9.507a21.539,21.539,0,0,0,6.8-1.861l0.616-.308,0.616,0.308a21.539,21.539,0,0,0,6.8,1.861l1.308,0.066v9.994h0C34.748,21.626,33.227,23.671,31.95,25.022Zm-4.509-9.005h-2.13V15.1h3.466a1.879,1.879,0,0,0,0-3.758H27.984V11.216a1.879,1.879,0,1,0-3.758,0v0.171a3.22,3.22,0,0,0-2.673,3.169v2a3.218,3.218,0,0,0,3.215,3.215H26.9v0.919H23.432a1.879,1.879,0,1,0,0,3.758h0.793v0.124a1.879,1.879,0,1,0,3.758,0V24.406a3.22,3.22,0,0,0,2.672-3.169v-2A3.219,3.219,0,0,0,27.441,16.017Zm1.963,5.22A1.964,1.964,0,0,1,27.441,23.2H27.358a0.627,0.627,0,0,0-.626.627v0.751a0.626,0.626,0,1,1-1.253,0V23.826a0.627,0.627,0,0,0-.626-0.627h-1.42a0.626,0.626,0,1,1,0-1.252h4.009a0.711,0.711,0,0,0,.71-0.71v-2a0.711,0.711,0,0,0-.71-0.71H24.769a1.965,1.965,0,0,1-1.963-1.962v-2a1.965,1.965,0,0,1,1.963-1.962h0.084a0.627,0.627,0,0,0,.626-0.626V11.216a0.626,0.626,0,1,1,1.253,0v0.751a0.627,0.627,0,0,0,.627.626h1.42a0.626,0.626,0,1,1,0,1.253H24.769a0.71,0.71,0,0,0-.71.71v2a0.711,0.711,0,0,0,.71.71h2.672A1.964,1.964,0,0,1,29.4,19.233v2h0Z"/>
      </symbol>
      <symbol id="icon-user" viewBox="0 0 21 19">
        <path d="M10.465,10.663a5.487,5.487,0,0,0,5.621-5.34A5.473,5.473,0,0,0,10.465,0,5.484,5.484,0,0,0,4.845,5.323,5.5,5.5,0,0,0,10.465,10.663Zm0-9.271A4.05,4.05,0,0,1,14.6,5.323a4.05,4.05,0,0,1-4.138,3.931A4.05,4.05,0,0,1,6.327,5.323,4.05,4.05,0,0,1,10.465,1.392ZM0.741,19H20.259A0.718,0.718,0,0,0,21,18.3a6.891,6.891,0,0,0-7.052-6.7h-6.9A6.891,6.891,0,0,0,0,18.3,0.718,0.718,0,0,0,.741,19Zm6.31-6h6.9a5.478,5.478,0,0,1,5.517,4.586H1.534A5.492,5.492,0,0,1,7.052,13Z"/>
      </symbol>
      <symbol id="icon-user2" viewBox="0 0 350 350">
        <path d="M 175 171.173 c 38.914 0 70.463 -38.318 70.463 -85.586 C 245.463 38.318 235.105 0 175 0 s -70.465 38.318 -70.465 85.587 C 104.535 132.855 136.084 171.173 175 171.173 Z"/>
        <path d="M 41.909 301.853 C 41.897 298.971 41.885 301.041 41.909 301.853 L 41.909 301.853 Z"/>
        <path d="M 308.085 304.104 C 308.123 303.315 308.098 298.63 308.085 304.104 L 308.085 304.104 Z"/>
        <path d="M 307.935 298.397 c -1.305 -82.342 -12.059 -105.805 -94.352 -120.657 c 0 0 -11.584 14.761 -38.584 14.761 s -38.586 -14.761 -38.586 -14.761 c -81.395 14.69 -92.803 37.805 -94.303 117.982 c -0.123 6.547 -0.18 6.891 -0.202 6.131 c 0.005 1.424 0.011 4.058 0.011 8.651 c 0 0 19.592 39.496 133.08 39.496 c 113.486 0 133.08 -39.496 133.08 -39.496 c 0 -2.951 0.002 -5.003 0.005 -6.399 C 308.062 304.575 308.018 303.664 307.935 298.397 Z"/>
      </symbol>
      <symbol id="icon-cart" viewBox="0 0 31 40">
        <path d="M26.654,40H4.345A4.34,4.34,0,0,1,0,35.629v-0.1l1.932-25.34A1.471,1.471,0,0,1,3.38,8.833H27.62a1.471,1.471,0,0,1,1.449,1.359L31,35.532v0.1A4.34,4.34,0,0,1,26.654,40ZM2.9,35.726a1.489,1.489,0,0,0,1.449,1.456H26.654A1.426,1.426,0,0,0,28.1,35.726L26.268,11.842H4.732ZM21.826,11.648a1.489,1.489,0,0,1-1.449-1.456V7.765a4.829,4.829,0,1,0-9.657,0v2.427a1.449,1.449,0,1,1-2.9,0V7.765a7.726,7.726,0,1,1,15.452,0v2.427A1.489,1.489,0,0,1,21.826,11.648ZM9.174,13.784a1.748,1.748,0,1,1-1.738,1.749A1.743,1.743,0,0,1,9.174,13.784Zm12.651,0a1.748,1.748,0,1,1-1.738,1.749A1.743,1.743,0,0,1,21.826,13.784Z"/>
      </symbol>
      <symbol id="icon-endin" viewBox="0 0 20 18">
        <path d="M19.958,7.6a0.422,0.422,0,0,0-.381-0.236H18.332A9.194,9.194,0,0,0,9.244-.005,9.137,9.137,0,0,0,0,9a9.137,9.137,0,0,0,9.244,9,9.326,9.326,0,0,0,8.006-4.5,0.807,0.807,0,0,0-.307-1.119,0.852,0.852,0,0,0-1.148.3,7.633,7.633,0,0,1-6.551,3.683A7.476,7.476,0,0,1,1.68,9,7.476,7.476,0,0,1,9.244,1.631a7.53,7.53,0,0,1,7.368,5.73H15.376a0.421,0.421,0,0,0-.381.236,0.4,0.4,0,0,0,.058.435l2.1,2.456a0.428,0.428,0,0,0,.645,0l2.1-2.456A0.4,0.4,0,0,0,19.958,7.6ZM9.244,2.041a0.829,0.829,0,0,0-.84.818V7.826A1.421,1.421,0,0,0,7.773,9a1.454,1.454,0,0,0,1.471,1.433,1.483,1.483,0,0,0,.62-0.139l2.923,1.644a0.854,0.854,0,0,0,1.148-.3,0.808,0.808,0,0,0-.308-1.119L10.7,8.874a1.42,1.42,0,0,0-.617-1.047V2.859A0.831,0.831,0,0,0,9.244,2.041Zm0,7.571A0.614,0.614,0,1,1,9.874,9,0.623,0.623,0,0,1,9.244,9.612Z"/>
      </symbol>
    </svg>
  
 
    <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
  </div>
  
  

</body>
</html>


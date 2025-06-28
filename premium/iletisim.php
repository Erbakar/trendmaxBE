<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Bize Ulaşın"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>


		  
		   <main class="main">
         <nav class="breadcrumb-nav mb-1 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Bize Ulaşın</li>
                    </ul>
                </div>
            </nav>

       
        <div class="page-content" style="margin-top:10px;">
            	<div class="mb-5">
				<iframe  src="<?php echo $ayar['maps']; ?>" style="border:0;margin-top: -15px;" allowfullscreen="" width="100%" height="420" frameborder="0"></iframe>
                  
				</div><!-- End #map -->
          
		  
		  
		  <div class="page-content contact-us">
                <div class="container">
                    <section class="content-title-section mb-10">
                        <h3 class="title title-center mb-3">İletişim Bilgilerimiz
                        </h3>
                        <p class="text-center">Aşağıdaki irtibat numaralarımızdan bizlere ulaşabilirsiniz</p>
                    </section>
                    <!-- End of Contact Title Section -->

                    <section class="contact-information-section mb-10">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl-options="{
                        'items': 4,
                        'nav': false,
                        'dots': false,
                        'loop': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '480': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            }
                        }
                    }">
                            
                            
                            
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1260px;"><div class="owl-item active" style="width: 295px; margin-right: 20px;"><div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-email">
                                    <i class="w-icon-envelop-closed"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Eposta Adresimiz</h4>
                                    <p><a href="mailto:<?php echo $ayar['email']; ?>"><?php echo $ayar['email']; ?></a></p>
                                </div>
                            </div></div><div class="owl-item active" style="width: 295px; margin-right: 20px;"><div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-headphone">
                                    <i class="w-icon-headphone"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Telefon Numaralarımız</h4>
                                    <p><a href="tel:<?php echo $ayar['tel']; ?>"><?php echo $ayar['tel']; ?></a></p>
                                </div>
                            </div></div><div class="owl-item active" style="width: 295px; margin-right: 20px;"><div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-map-marker">
                                    <i class="w-icon-map-marker"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Adresimiz</h4>
                                    <p><?php echo $ayar['adres']; ?></p>
                                </div>
                            </div></div><div class="owl-item active" style="width: 295px; margin-right: 20px;"><div class="icon-box text-center icon-box-primary">
                                <span class="icon-box-icon icon-fax">
                                    <i class="w-icon-fax"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title">Gsm</h4>
                                    <p><a href="tel:<?php echo $ayar['ceptel']; ?>"><?php echo $ayar['ceptel']; ?></a></p>
                                </div>
                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="w-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="w-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                    </section>
                    <!-- End of Contact Information section -->

                    <hr class="divider mb-10 pb-1">

                    <section class="contact-section">
                        <div class="row gutter-lg pb-3">
                          
                            <div class="col-lg-12 mb-8">
                            	<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend style="text-align: center;margin-bottom:10px;">İletişim Formu</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Adınız Soyadınız</label>
            <div class="col-sm-10">
              <input style="text-align: left;" type="text" name="isim" id="input-name" class="form-control" required>
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Posta</label>
            <div class="col-sm-10">
              <input style="text-align: left;" type="text" name="email" value="" id="input-email" class="form-control" required>
                          </div>
          </div>
		  
		     <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">Telefon</label>
            <div class="col-sm-10">
              <input style="text-align: left;" type="tel" name="telefon" value=""  class="form-control" required>
                          </div>
          </div>
		  
		  
		    <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Konu</label>
            <div class="col-sm-10">
              <input style="text-align: left;" type="text" name="konu" class="form-control" required>
                          </div>
          </div>
		  
		  	   
		  
		  
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-enquiry">Mesajınız</label>
            <div class="col-sm-10">
              <textarea style="text-align: left;"  name="mesaj" rows="10" id="input-enquiry" class="form-control" required></textarea>
                          </div>
          </div>
		    <div class="form-group required">
            <label class="col-sm-5 control-label"for="input-name"><img class="guvenlik_resmi" style="width: 170px;height: 39.7px;" src="<?php echo $sitetemasi;?>/captcha.php"><div style="background: red;border: 1px solid red;color: white;" class="yenile_buton btn btn-outline-primary-2">Yenile</div>
			</label>
         
          </div>
		  
		        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Güvenlik Kodu </label>
            <div class="col-sm-10">
                 <input style="text-align: left;" type="text" placeholder="Güvenlik Kodunu Giriniz" name="captcha" class="form-control" required>
                   </div>
          </div>
		  
		  
		  
		  
		 
		    
		  
		  
		
		  
		  
		  
                  </fieldset>
        <div class="buttons">
          <div class="pull">
            <input class="butonok btn btn-primary" name="mesajgonder" type="submit" value="Gönder">
          </div>
        </div>
      </form>
                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Section -->
                </div>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div class="google-map contact-google-map" id="googlemaps"></div>
                <!-- End Map Section -->
            </div>
		  
		  
		  
            </div><!-- End .page-content -->
        </main>
	
<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>" />
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="Bize Ulaşın" />
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>" />


        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Bize Ulaşın</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
       <div class="container bottom-padding-mini">
		    <div class="row">

              <div id="contacts" class="services">
<div id="google-map" style="box-shadow: 2px 2px 2px 2px #aaaaaa; ">
    <iframe src="<?php echo $ayar['maps']; ?>" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="350" frameborder="0"></iframe>
    
    
    </div>
    <div id="contacts" class="services" style="margin-top: 100px !important;">
    
                    <div class="col-sm-6 col-md-3 big-services-box">
                      <div class="big-icon circle border"><i class="fa fa-building hover-ico"></i></div>
                      <h6 class="title bottom-padding-xs">Şirket Ünvanı</h6>
                      <div id="contact-phone"><?php echo $ayar['siteadi'];?></div>
                    </div>
                    <div class="col-sm-6 col-md-3 big-services-box">
                      <div class="big-icon circle border"><i class="fa fa-map-marker hover-ico"></i></div>
                      <h6 class="title bottom-padding-xs">Adres</h6>
                      <div id="contact-fax"><?php echo $ayar['adres'];?></div>
                    </div>
                    <div class="col-sm-6 col-md-3 big-services-box">
                      <div class="big-icon circle border"><i class="fa fa-phone hover-ico"></i></div>
                      <h6 class="title bottom-padding-xs">Telefonlar</h6>
                      <div id="contact-address"><?php echo $ayar['tel'];?></br><?php echo $ayar['ceptel'];?></div>
                    </div>
                    <div class="col-sm-6 col-md-3 big-services-box">
                      <div class="big-icon circle border"><i class="fa fa-envelope-o hover-ico"></i></div>
                      <h6 class="title bottom-padding-xs">Eposta Adresimiz</h6>
                      <div id="contact-mail"><a href="mailto:<?php echo $ayar['email'];?>" title="<?php echo $ayar['email'];?>"><?php echo $ayar['email'];?></a></div>
                    </div>
               
                             </div>

<style>
@media (min-width: 992px){
.big-services-box{
    width: 25% !important;
}}
</style>
		      <form  action="" method="POST" enctype="multipart/form-data" class="col-sm-12 col-md-12 form-box">
                <h4 class="title">Bize Ulaşın<br><span id="senderForm"></span></h4>
                <div class="row">
                  <div class="col-sm-6 col-md-6 alphForceName">
                    <input name="isim" id="contactAuthor" placeholder="Ad Soyad (gerekli)" class="form-control" type="text" required>
                    <input name="email" id="contactMail" placeholder="Eposta (gerekli)" class="form-control" type="email" required>
					 <input name="telefon" id="contactHead" placeholder="Telefon (gerekli)" class="form-control" type="tel" required>
                    <input name="konu" id="contactHead" placeholder="Konu (gerekli)" class="form-control" type="text" required>
                    <div class="form-group required">
								<img class="guvenlik_resmi" style="width: 170px;height: 60px;" src="<?php echo $sitetemasi;?>/captcha.php"> <div style="height: 60px;
line-height: 3;" class="guvenlikkodum yenile_buton btn btn-default buttonGray">Yenile</div>
								</div>
								
								
									<input type="text" name="captcha" placeholder="Güvenlik Kodu (gerekli)" value="" id="input-email" class="form-control" required>
								
				  
				  </div>
                  <div class="col-sm-6 col-md-6 alphForceName">
				
				  
				  
                    <textarea name="mesaj" id="contactMsg" style="height:144px;" placeholder="Mesajınız (gerekli)" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="buttons-box clearfix">

                  <button style="width: 100%;
height: 50px;
font-size: 15px;"  type="submit" name="mesajgonder" class="btn btn-sm btn-default">Gönder</button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <div class="clearfix"></div>  
		</div>
      
     
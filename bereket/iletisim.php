<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>" />
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="Bize Ulaşın" />
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>" />

  

<div class="container">

  <div class="row">
                <div id="content" class="col-sm-12">
		<div class="info-contact row">
			<div class="col-sm-12 col-xs-12 info-store">
			  			   		<div class="mapouter">
			   			<div class="gmap_canvas">
			   				 <iframe  src="<?php echo $ayar['maps']; ?>" style="border:0;margin-top: -15px;" allowfullscreen="" width="100%" height="420" frameborder="0"></iframe>
			   			</div>
			   			<style>
			   				.mapouter{position:relative;text-align:right;height:420px;width:100%;}
			   				.gmap_canvas {overflow:hidden;background:none!important;height:420px;width:100%;}
			   			</style>
			   		</div>
				
			</div>
			
			<div class="col-sm-12 col-xs-12 contact-form" style="background:white;padding-top:10px;margin-bottom:20px;">    	<div class="row">                		<div class="col-md-4">                			<div class="contact-box text-center">        						<h3>İletişim Adresimiz</h3>        						<address><?php echo $ayar['adres']; ?></address>        					</div><!-- End .contact-box -->                		</div><!-- End .col-md-4 -->                		<div class="col-md-4">                			<div class="contact-box text-center">        						<h3>Müşteri Hizmetleri</h3>        						<div><a href="mailto:<?php echo $ayar['email']; ?>"><?php echo $ayar['email']; ?></a></div>        						<div><a href="tel:<?php echo $ayar['tel']; ?>"><?php echo $ayar['tel']; ?></a>, <a href="tel:<?php echo $ayar['ceptel']; ?>"><?php echo $ayar['ceptel']; ?></a></div>        					</div><!-- End .contact-box -->                		</div><!-- End .col-md-4 -->                		<div class="col-md-4">                			<div class="contact-box text-center">        						<h3>Sosyal Medya Hesaplarımız</h3>        		<div class="social-icons social-icons-color justify-content-center">			    <a <?php echo $ayar['facebook'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['facebook']; ?>" class="social-icon" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>                <a <?php echo $ayar['twitter'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['twitter']; ?>" class="social-icon" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>                <a <?php echo $ayar['pinterest'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['pinterest']; ?>" class="social-icon" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a>                <a <?php echo $ayar['linkedin'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['linkedin']; ?>" class="social-icon" target="_blank" title="linkedin	"><i class="fab fa-linkedin"></i></a>                <a <?php echo $ayar['instagram'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['instagram']; ?>" class="social-icon" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>                <a <?php echo $ayar['youtube'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['youtube']; ?>" class="social-icon" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>                <a <?php echo $ayar['googleplus'] == '' ? 'style="display:none;"' : null; ?> href="<?php echo $ayar['googleplus']; ?>" class="social-icon" target="_blank" title="googleplus"><i class="fab fa-google-plus"></i></a>               </div><!-- End .soial-icons -->        					</div><!-- End .contact-box -->                		</div><!-- End .col-md-4 -->                	</div><!-- End .row -->
			   <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
				<fieldset>
					<legend><h2>İletişim Formu</h2></legend>
					 <p>Bizlere bu form üzerinden görüş, sorun, istek ve dileklerinizi yazabilirsiniz.

</p>
                  	
				  <div class="form-group required">
					<div class="col-sm-12">
					  <input type="text" value="" id="input-name" class="form-control" placeholder="Adınız Soyadınız *" type="text" name="isim" required>
					   
					</div>
				  </div>
				  <div class="form-group required">
					<div class="col-sm-12">
					  <input type="text" name="email" value="" id="input-email" class="form-control" placeholder="Eposta Adresiniz *" required>
					   
					</div>
				  </div>
				  
				  
				   <div class="form-group required">
					<div class="col-sm-12">
					  <input placeholder="Telefon Numaranız * " type="tel" name="telefon" value="" class="form-control" required>
					   
					</div>
				  </div>
				  
				  
				    <div class="form-group required">
					<div class="col-sm-12">
					  <input placeholder="Konu * " type="text" name="konu" value="" class="form-control" required>
					   
					</div>
				  </div>
				  
				    <div class="form-group required">
					<div class="col-sm-12">
					  <label class="col-sm-5 control-label"for="input-name">Güvenlik Kodu : <img class="guvenlik_resmi" style="width: 170px;height: 50px;" src="<?php echo $sitetemasi;?>/captcha.php"><div style="background: red;border: 1px solid red;color: white;" class="yenile_buton btn btn-outline-primary-2">Yenile</div>
			</label>
            <div class="col-sm-7" style="padding: 0px;max-width:100%;margin-top: 1.4%;">
                 <input style="text-align: left;" type="text" placeholder="Güvenlik Kodunu Giriniz" name="captcha" class="form-control" style="width: 170px;height: 50px;" required>
                   </div>
        
					</div>
				  </div>
				  
				  
				  
				  
				  <div class="form-group required">
					<div class="col-sm-12">
					  <textarea name="mesaj" placeholder="Mesajınız" rows="4" id="input-enquiry" class="form-control" required></textarea>
					   
					</div>
				  </div>
				   
				</fieldset>
				<div class="buttons">
				  
					<button class="butonok btn btn-outline-primary-2" name="mesajgonder"><span>Gönder </span></button>

				</div>
			  </form>
			</div>
		</div>
      </div>
    </div>
</div>
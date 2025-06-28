<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>" />
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="Bize Ulaşın" />
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>" />

   <nav class="breadcrumb-nav mb-1 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Bize Ulaşın</li>
                    </ul>
                </div>
            </nav>

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
			   				.mapouter{position:relative;text-align:right;height:480px;width:100%;}
			   				.gmap_canvas {overflow:hidden;background:none!important;height:480px;width:100%;}
			   			</style>
			   		</div>
				
			</div>
			
			<div class="col-sm-12 col-xs-12 contact-form">
			   <form  style="background: white;
padding: 20px;" action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
					  <label class="col-sm-5 control-label"for="input-name"><img class="guvenlik_resmi" style="width: 170px;height: 50px;" src="<?php echo $sitetemasi;?>/captcha.php"><div style="background: red;border: 1px solid red;color: white;" class="yenile_buton btn btn-outline-primary-2">Yenile</div>
			</label>
            <div class="col-sm-12" style="padding: 0px;max-width:100%;">
                 <input style="text-align: left;" type="text" placeholder="Güvenlik Kodunu Giriniz" name="captcha" class="form-control" required>
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
				  
					<button class="btn btn-info" name="mesajgonder"><span>Gönder </span></button>

				</div>
			  </form>
			</div>
		</div>
      </div>
    </div>
</div>
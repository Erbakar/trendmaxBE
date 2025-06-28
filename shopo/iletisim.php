<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>" />
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="Bize Ulaşın" />
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>" />


	   
<div id="information-information" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
	  <li><a>Bize Ulaşın</a></li>
   </ul>
   <div class="row">
   <div id="content" class="col-sm-12">
     <iframe src="<?php echo $ayar['maps']; ?>" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="350" frameborder="0"></iframe>
    
   
      <h1></h1>
      <h3>Konum Bilgilerimiz</h3>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
                        <div class="col-sm-3"><strong>Adres :</strong><br>
              <address>
              <?php echo $ayar['adres'];?>
              </address>
                          </div>
           
            <div class="col-sm-3">
                                          <strong>Eposta :</strong><br>
               <?php echo $ayar['email'];?>
                          </div>
						  
					 <div class="col-sm-3"><strong>Telefon :</strong><br>
               <?php echo $ayar['tel'];?><br>
              <br>
                          </div>	  
						   <div class="col-sm-3"><strong>GSM :</strong><br>
               <?php echo $ayar['ceptel'];?><br>
              <br>
                          </div>
						  
          </div>
        </div>
      </div>
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>İletişim Formu</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Adınız</label>
            <div class="col-sm-10">
              <input type="text" name="isim" value="" id="input-name" class="form-control" required>
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Posta Adresi</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" id="input-email" class="form-control" required>
                          </div>
          </div>
		  
		   <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Telefon</label>
            <div class="col-sm-10">
              <input type="tel" name="telefon" value="" id="input-name" class="form-control" required>
                          </div>
          </div>
		  
		   <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Konu</label>
            <div class="col-sm-10">
              <input type="text" name="konu" value="" id="input-name" class="form-control" required>
                          </div>
          </div>
		  
		   <div class="form-group required">
		   <label class="col-sm-2 control-label" for="input-name">Güvenlik Kodu</label>
		   <div class="col-sm-10">
								<img class="guvenlik_resmi" style="width: 170px;height: 60px;" src="<?php echo $sitetemasi;?>/captcha.php"> 
								
								
								<div style="height: 60px;
line-height: 3;" class="guvenlikkodum yenile_buton btn btn-default buttonGray">Yenile</div>
								<input style="width: 75%;
  float: right;
  height: 60px;" type="text" name="captcha" placeholder="Güvenlik Kodu (gerekli)" value="" id="input-email" class="form-control" required>
								
								 </div>
								</div>
		  
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-enquiry">Mesajınız</label>
            <div class="col-sm-10">
              <textarea name="mesaj" rows="10" id="input-enquiry" class="form-control" required></textarea>
                          </div>
          </div>
          
        </fieldset>
        <div class="buttons">
          <div class="pull-right">
            <input name="mesajgonder" class="btn btn-primary" type="submit" value="Gönder">
          </div>
        </div>
      </form>
   
</div>
   </div>
</div>
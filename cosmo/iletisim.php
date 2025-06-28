<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>" />
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="Bize Ulaşın" />
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>" />


       <section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
               Bize Ulaşın
               </h4></div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="<?php echo $url;?>">
					 <i class="icofont-ui-home"></i> Anasayfa</a>  /  
					 <span>Bize Ulaşın</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	 <section class="py-5 bg-light border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="p-4 h-100 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <h4 class="mt-0 mb-4 text-dark">İletişim Bilgilerimiz</h4>
                     <h6 class="text-dark"><i class="icofont-location-pin pr-1"></i> Adresimiz :</h6>
                     <p class="pl-4"><?php echo $ayar['adres'];?></p>
                     <h6 class="text-dark"><i class="icofont-smart-phone pr-1"></i> Telefonumuz :</h6>
                     <p class="pl-4"><?php echo $ayar['tel'];?></p>
                     <h6 class="text-dark"><i class="icofont-mobile-phone pr-1"></i> Gsm Numaramız:</h6>
                     <p class="pl-4"><?php echo $ayar['ceptel'];?></p>
                     <h6 class="text-dark"><i class="icofont-email pr-1"></i> Eposta Adresimiz :</h6>
                     <p class="pl-4"><?php echo $ayar['email'];?></p>
                    
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="p-4 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <h4 class="mt-0 mb-4 text-dark">İletişim Formu</h4>
                     <form action="" method="POST" enctype="multipart/form-data" novalidate="">
                        
                        <div class="row">
                           <div class="control-group form-group col-md-6">
                              <label>Adınız Soyadınız <span class="text-danger">*</span></label>
                              <div class="controls">
                                 <input type="text" name="isim" class="form-control" id="phone" required>
                              <div class="help-block"></div></div>
                           </div>
                           <div class="control-group form-group col-md-6">
                              <div class="controls">
                                 <label>Eposta Adresiniz <span class="text-danger">*</span></label>
                                 <input type="email" name="email"  class="form-control" required>
                              <div class="help-block"></div></div>
                           </div>
						   
						    <div class="control-group form-group col-md-6">
                              <label>Telefon Numaranız <span class="text-danger">*</span></label>
                              <div class="controls">
                                 <input type="tel" name="telefon" class="form-control" id="phone" required>
                              <div class="help-block"></div></div>
                           </div>
                           <div class="control-group form-group col-md-6">
                              <div class="controls">
                                 <label>Konu <span class="text-danger">*</span></label>
                                 <input type="text" name="konu"  class="form-control" required>
                              <div class="help-block"></div></div>
                           </div>
						   
						        <div class="form-group required">
								<img class="guvenlik_resmi" style="width: 170px;height: 50px;" src="<?php echo $sitetemasi;?>/captcha.php"> <div style="line-height: 3;
background: <?php echo $tema['t37'];?>;
color: white;" class="guvenlikkodum yenile_buton btn btn-default buttonGray">Yenile</div>
								</div>
								
							<div class="control-group form-group col-md-12">
                              <div class="controls">
                                 <label>Güvenlik Kodu <span class="text-danger">*</span></label>
                                 <input type="text" name="captcha"  class="form-control" required>
                              <div class="help-block"></div></div>
                           </div>
								
						   
						   
                        </div>
                        <div class="control-group form-group">
                           <div class="controls">
                              <label>Mesajınız <span class="text-danger">*</span></label>
                              <textarea rows="4" name="mesaj" cols="100" class="form-control" required maxlength="999" style="resize:none"></textarea>
                           <div class="help-block"></div></div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" name="mesajgonder" class="btn btn-primary btn-sm float-right">Gönder</button>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="h-100 p-4 bg-white rounded overflow-hidden position-relative shadow-sm">
                     <iframe src="<?php echo $ayar['maps']; ?>" style="border:0" allowfullscreen="" width="100%" height="520" frameborder="0"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  <style>
	  .rounded-sm, .rounded {
  border-radius: 2px !important;
  height: 570px !important;
  object-fit: cover;
}
.form-group {
  margin-bottom: 10px;
}
	  </style>
<title>Üye Girişi / Kayıt Ol</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	
	
	

       <section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
               Üye Ol & Giriş Yap    
               </h4></div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="<?php echo $url;?>">
					 <i class="icofont-ui-home"></i> Anasayfa</a>  /  
					 <span>Üye Ol & Giriş Yap</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  <section class="py-5 bg-light border-top">
         <div class="container">
       
			
			
	 <div class="content col-sm-12 col-md-12">
                <div class="row filter-elements">
               <div class="col-lg-6 col-md-6">
                        <div class="bg-white p-4 shadow-sm rounded h-100">
			   
                    <form  class="form-box login-form form-validator bv-form" action="" method="POST" enctype="multipart/form-data" style="background: white !important;">
                    	<input type="hidden" name="nereden" value="anauyelik"/>
                      <div class="title-box">
                        <h2 class="h1 title">Üye Girişi</h2>
                      </div>
                      <div class="row bottom-padding-xs">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <p>Lütfen giriş yapınız</p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                          <span class="required"><b>*</b> Gerekli Alanlar</span>
                        </div>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Eposta Adresiniz: <span class="required">*</span></label>
                        <input value="" name="email" class="form-control" required="" type="email" data-bv-emailaddress-message="Lütfen geçerli e-Mail adresi giriniz" data-bv-field="email" maxlength="60"><i class="form-control-feedback" style="display: none;" data-bv-icon-for="email"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Şifreniz: <span class="required">*</span></label>
                        <input value="" name="sifre" class="form-control" required="" type="password" data-bv-field="password" maxlength="20"><i class="form-control-feedback" style="display: none;" data-bv-icon-for="password"></i>
                      </div>
                      <div class="row forgot-holder">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <label class="checkbox">
                            <input type="checkbox" value="true">
                            Beni Anımsa
                          </label>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                          <a class="forgot" href="sifremiunuttum/" title="Parolamı unuttum?">Parolamı unuttum?</a>
                        </div>
                      </div>

                      <div class="buttons-box clearfix">
                        <button type="submit" name="girisyap" class="btn btn-lg btn-primary btn-block">Giriş</button>

              
                      </div>
                    </form>
                  </div>
				  
				   </div>
				   
				   
                
                           <div class="col-lg-6 col-md-6">
                        <div class="bg-white p-4 shadow-sm rounded h-100">
                    <form action="" method="POST" class="form-box login-form form-validator bv-form" novalidate="novalidate">
                    <input type="hidden" name="nereden" value="anauyelik"/>
                      <div class="title-box">
                        <h2 class="h1 title">Üyelik Oluştur</h2>
                      </div>
                      <div class="row bottom-padding-xs">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <p>Lütfen gerekli alanları doldurunuz</p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                          <span class="required"><b>*</b> Gerekli Alanlar</span>
                        </div>
                      </div>
					   <div class="form-group has-feedback">
                        <label>Adınız Soyadınız: <span class="required">*</span></label>
                        <input value="" name="text" class="form-control" required="" type="isim" data-bv-emailaddress-message="Lütfen geçerli değer giriniz" data-bv-field="isim" maxlength="60"><i class="form-control-feedback" style="display: none;" data-bv-icon-for="email"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Eposta Adresiniz: <span class="required">*</span></label>
                        <input value="" name="email" class="form-control" required="" type="email" data-bv-emailaddress-message="Lütfen geçerli e-Mail adresi giriniz" data-bv-field="email" maxlength="60"><i class="form-control-feedback" style="display: none;" data-bv-icon-for="email"></i>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Şifreniz: <span class="required">*</span></label>
                        <input value="" name="sifre" class="form-control" required="" type="password" data-bv-field="password" maxlength="20"><i class="form-control-feedback" style="display: none;" data-bv-icon-for="password"></i>
                      </div>
					  
					  <div class="form-group has-feedback">
                        <label>Telefon Numaranız: <span class="required">*</span></label>
                        <input value="" name="telefon" class="form-control" required="" type="tel" data-bv-field="password" maxlength="20"><i class="form-control-feedback" style="display: none;" data-bv-icon-for="telefon"></i>
                      </div>
					  
                      <div class="row forgot-holder">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <label class="checkbox">
                            <input type="checkbox" name="sozlesme" value="1" required>
                            <a href="rizametni/" target="_blank">Kullanıcı Sözleşmesini</a> okudum anladım ve kabul ediyorum.
                          </label>
                        </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <label class="checkbox">
                            <input type="checkbox" name="ebultensor" value="1">
                            Ebülten listesine kayıt olmak istiyorum .
                          </label>
                        </div>
                      </div>

                      <div class="buttons-box clearfix">
                        <button type="submit" name="kayitol"  class="btn btn-lg btn-primary btn-block">Kayıt Ol</button>

                        
                      </div>
                    </form>
                  </div>
                 </div>
				 
				 
				 
                </div>
              </div>
			
			
			
         </div>
      </section>
	  <!-- The Modal -->

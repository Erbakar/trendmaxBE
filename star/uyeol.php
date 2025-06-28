<title>Üye Girişi / Kayıt Ol</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 

        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Üye Girişi / Kayıt Ol</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
       <section class="login-register" id="main">
  
          
          <div id="shopping-login" class="container shopping-login-loader" style="background:white !important;">
            <div class="row">
              <div class="content col-sm-12 col-md-12">
                <div class="row filter-elements">
                <div id="login-holder" class="col-xs-12 col-sm-6 col-md-6 box login" style="background:white !important;">
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
                        <button type="submit" name="girisyap" class="btn btn-success">Giriş</button>

              
                      </div>
                    </form>
                  </div>
                
                  <div id="login-holder" class="col-xs-12 col-sm-6 col-md-6 box login">
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
                            <button id="myBtn" style="margin-left: -3px !important;font-size:13px;margin-top: -10px !important;color: red;background: none;border: none;font-weight: 500;" >Kullanıcı Sözleşmesini</button>okudum anladım ve kabul ediyorum.
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
                        <button type="submit" name="kayitol"  class="btn btn-success">Kayıt Ol</button>

                        
                      </div>
                    </form>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="clearfix"></div>  
		</div>
      
     <!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header" style="padding: 10px;">
          
          <h6 class="modal-title" id="myModalLabel">Üyelik Sözleşmesi</h6>
        </div>
        <div class="modal-body" style="padding: 10px;">
        <p><?php echo $system['rizametni'];?> </p>
				<button type="button" class="sozlesmebuton closex" data-dismiss="modal" aria-hidden="true">Kullanıcı ve üyelik sözleşmelerindeki maddeleri dikkatlica okudum ve kabul ediyorum.</button> 

        </div>

       
      </div>
 
  </div>
  
</div> 

<style>

.sozlesmebuton {
width: 100%;
font-size: 14px;
background: <?php echo $tema['t37'];?>;
opacity: 1;
padding: 10px;
color: #fff;
font-weight: 400;
}


.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999999999999999999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.closex {

}

.closex:hover,
.closex:focus {

}



@media screen and (max-device-width: 480px) and (orientation: portrait){
.modal-content {

  width: 100% !important; /* Full width */

}


}



</style>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closex")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>
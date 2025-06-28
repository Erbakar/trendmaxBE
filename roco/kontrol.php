<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	
	
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			<li><a>Üyelik İşlemleri</a></li>
			<li><a>Giriş Yap</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
				
				
				
				
				
					<div class="account-border">
						<div class="row">
						
						<?php if($system['misafirok']=='1'){?>
						
						
						
								<form action="" method="POST" enctype="multipart/form-data">
								<div class="col-sm-4 customer-login">
									<div class="well">
									<input type="hidden" name="nereden" value="kontrol"/>
										<h2>Üye Girişi</h2>
										<div class="form-group">
											<label class="control-label " for="input-email">Eposta Adresiniz</label>
											<input type="email" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Şifreniz</label>
											<input type="password" value="" name="sifre" id="input-password" class="form-control" required>
										</div>
									</div>
									<div class="bottom-form">
										<a href="sifremiunuttum/" title="Şifremi unuttum" target="_blank" class="forgot">Şifremi Unuttum ?</a>
										<input type="submit" name="girisyap" value="Giriş Yap" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
							
								
								<div class="col-sm-4 customer-login">
									<div class="well">
									<input type="hidden" name="nereden" value="kontrol"/>
										<h2>Misafir Alışverişi</h2>
										<div class="form-group">
										     
					<img src="<?php echo $sitetemasi;?>/user/misafir.png"></img>
	Dilerseniz sitemize üye olmadanda alışverişinizi hızlı bir şekilde tamamlayabilirsiniz.
						</br></br>
					
						
						
                         
                    </div>
										
									</div>
									<div class="bottom-form" style="padding:0px !important;">
										<a style="width: 100%;" href="odeme/" class="btn btn-default pull-center">Üye olmadan misafir olarak alışverişine devam et</a>
									</div>
								</div>
							
							
							
							
							
							<form action="" method="post" enctype="multipart/form-data">
								<div class="col-sm-4 customer-login">
								 <input type="hidden" name="nereden" value="kontrol"/>
									<div class="well">
										<h2>Üye Ol</h2>
										<div class="form-group">
											<label class="control-label " for="input-email">Adınız Soyadınız</label>
											<input type="text" name="isim" value="" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-email">Eposta Adresiniz</label>
											<input type="email" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Şifreniz</label>
											<input type="password" name="sifre" value="" id="input-password" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-tel">Telefon Numaranız</label>
											<input type="tel" name="telefon" value="" id="input-tel" class="form-control" required>
										</div>
										<div class="form-group">
						   
							
							<label class="radio-button-field-17 w-radio">
                                <input type="checkbox" name="sozlesme" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                  <button id="myBtn" style="color: red;background: none;border: none;font-weight: 500;" >Kullanıcı Sözleşmesini</button>okudum anladım ve kabul ediyorum.
                                </span>
                            </label>
							&nbsp;&nbsp;
							 <label class="radio-button-field-17 w-radio">
                                <input type="checkbox" name="ebultensor" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                   Ebülten listesine kayıt olmak istiyorum .
                                </span>
                            </label>
                             </div>							
									</div>
									<div class="bottom-form">
										
										<input type="submit" name="kayitol" value="Kayıt Ol" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
							
						
						
						
						<?php } else { ?>	
						
						
						
						
								<form action="" method="POST" enctype="multipart/form-data">
								<div class="col-sm-6 customer-login">
									<div class="well">
									<input type="hidden" name="nereden" value="kontrol"/>
										<h2>Üye Girişi</h2>
										<div class="form-group">
											<label class="control-label " for="input-email">Eposta Adresiniz</label>
											<input type="email" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Şifreniz</label>
											<input type="password" value="" name="sifre" id="input-password" class="form-control" required>
										</div>
									</div>
									<div class="bottom-form">
										<a href="sifremiunuttum/" title="Şifremi unuttum" target="_blank" class="forgot">Şifremi Unuttum ?</a>
										<input type="submit" name="girisyap" value="Giriş Yap" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
							
							<form action="" method="post" enctype="multipart/form-data">
								<div class="col-sm-6 customer-login">
								 <input type="hidden" name="nereden" value="kontrol"/>
									<div class="well">
										<h2>Üye Ol</h2>
										<div class="form-group">
											<label class="control-label " for="input-email">Adınız Soyadınız</label>
											<input type="text" name="isim" value="" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-email">Eposta Adresiniz</label>
											<input type="email" name="email" value="" id="input-email" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Şifreniz</label>
											<input type="password" name="sifre" value="" id="input-password" class="form-control" required>
										</div>
										<div class="form-group">
											<label class="control-label " for="input-tel">Telefon Numaranız</label>
											<input type="tel" name="telefon" value="" id="input-tel" class="form-control" required>
										</div>
										<div class="form-group">
						   
							
							<label class="radio-button-field-17 w-radio">
                                <input type="checkbox" name="sozlesme" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                  <button id="myBtn" style="color: red;background: none;border: none;font-weight: 500;" >Kullanıcı Sözleşmesini</button>okudum anladım ve kabul ediyorum.
                                </span>
                            </label>
							&nbsp;&nbsp;
							 <label class="radio-button-field-17 w-radio">
                                <input type="checkbox" name="ebultensor" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                   Ebülten listesine kayıt olmak istiyorum .
                                </span>
                            </label>
                             </div>							
									</div>
									<div class="bottom-form">
										
										<input type="submit" name="kayitol" value="Kayıt Ol" class="btn btn-default pull-right">
									</div>
								</div>
							</form>
							
							
							
							
							<?php } ?>	
							
							
							
							
							
							
						</div>
					</div>
					
					
					
					
					
					
					
					
					
					
				</div>
			</div>
		</div>
	</div>
	
<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header" style="padding: 20px;">
          
          <h4 class="modal-title" id="myModalLabel">Üyelik Sözleşmesi</h4>
        </div>
        <div class="modal-body" style="padding: 20px;">
        <p><?php echo $system['rizametni'];?> </p>
				<button type="button" class="sozlesmebuton closex" data-dismiss="modal" aria-hidden="true">Kullanıcı ve üyelik sözleşmelerindeki maddeleri dikkatlica okudum ve kabul ediyorum.</button> 

        </div>

       
      </div>
 
  </div>
  
</div> 

<style>

.sozlesmebuton {
width: 100%;
font-size: 12px;
background: #464141;
opacity: 1;
padding: 10px;
color: #fff;
font-weight: 400;
border-radius: 10px;
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
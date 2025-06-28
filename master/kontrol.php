<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	
	
	
	
	<div class="uye-ol">
        <div class="div-block-uye-ol">
		
		 <div class="w-row">
              <?php if($system['misafirok']=='1'){?>
			  
			   <div class="column-128 w-col w-col-4 w-col-medium-3 w-col-small-6 w-col-tiny-12">
		
		          <div class="div-block-uye-ol-box">
                <div class="div-block-4461292339-24">
                    <h4 class="heading-50">Üye Girişi Yap</h4>
                </div>
                <div>
                    <div class="w-formss">

				        

                         <form action="" method="POST">
									<input type="hidden" name="nereden" value="kontrol"/>

                       
                            <input type="email" class="text-field-10---35-copy w-input" placeholder="E-Posta Adresiniz"  name="email" autocapitalize="none" tabindex="3" size="32" maxlength="64" autocomplete="off" required>

                           
                           <input type="password" class="text-field-10---35-copy w-input" placeholder="Şifreniz"  name="sifre" tabindex="4" autocomplete="off" minlength="4" maxlength="15"  title="Parola en az 4 karakterden oluşmalı" required>
                           
                            <label class="radio-button-field-17 w-radio">
                                <input type="checkbox"  class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                   Beni Hatırla
                                </span>
                            </label>
                            <div class="div-block-4461292306"></div>
                            <p class="paragraph-39">
                             Eğer şifrenizi hatırlamıyorsanız  <a href="sifremiunuttum/" title="Şifremi unuttum" target="_blank">buradan</a> ilgili bağlantıya giderek yenileyebilirsiniz.
							
                            </p>
                            <button type="submit" name="girisyap" class="button-uye-ol w-button">Siteye Giriş Yap</button>

                        </form>

                         
                    </div>
                </div>
            </div>
			</div>
		
		
		   <div class="column-128 w-col w-col-4 w-col-medium-3 w-col-small-6 w-col-tiny-12">
		
		          <div class="div-block-uye-ol-box">
                <div class="div-block-4461292339-24">
                    <h4 class="heading-50">Misafir Alışverişi</h4>
                </div>
                <div>
                    <div class="w-formss">
					<img src="<?php echo $sitetemasi;?>/css/images/misafir.png"></img>
	Dilerseniz sitemize üye olmadanda alışverişinizi hızlı bir şekilde tamamlayabilirsiniz.
						</br></br>
					
						
						<a href="odeme/"  style="font-weight: 500;" class="gributton text-center">Üye olmadan misafir olarak alışverişe devam et</a>
				
						
                         
                    </div>
                </div>
            </div>
			</div>
		
		
		
		
		
		
		
		
		 <div class="column-128 w-col w-col-4 w-col-medium-3 w-col-small-6 w-col-tiny-12">
		
            <div class="div-block-uye-ol-box">
                <div class="div-block-4461292339-24">
                    <h4 class="heading-50">Ücretsiz Üye Ol</h4>
                </div>
                <div>
                    <div class="w-formss">

				        

                            <form action="" method="POST">
						    <input type="hidden" name="nereden" value="kontrol"/>
                            <input type="text" class="text-field-10---35-copy w-input" placeholder="Adınız Soyadınız"  name="isim" tabindex="1" required="">
                            <input type="email" class="text-field-10---35-copy w-input" placeholder="E-Posta Adresiniz"  name="email" autocapitalize="none" tabindex="3" size="32" maxlength="64" autocomplete="off" required>
                         
                       <input type="password" class="text-field-10---35-copy w-input" placeholder="Şifreniz"  name="sifre" tabindex="4" autocomplete="off" minlength="4" maxlength="15"  title="Parola en az 4 karakterden oluşmalı" required>
                     
                            
                            
                            <input type="tel" class="text-field-10---35-copy w-input" placeholder="Cep Telefonu Numaranız (05320000000)" name="telefon" data-type="tel" maxlength="15" size="14" tabindex="5" autocomplete="off" required>
                            
                            <label class="radio-button-field-17 w-radio">
                                <input type="checkbox"name="ebultensor" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                   Ebülten listesine kayıt olmak istiyorum .
                                </span>
                            </label>
                            <div class="div-block-4461292306"></div>
							 <label class="radio-button-field-17 w-radio">
                            <input type="checkbox" name="sozlesme" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
							
                             <button id="myBtn" style="background: white;color: red;display:block !important;" >Kullanıcı Sözleşmesini</button>okudum anladım ve kabul ediyorum.
								
								 </span>
						
						 </label>
                        
                        <button type="submit" name="kayitol" class="gributton text-center">Üyelik Oluştur</button>
                        </form>

                         
                        

                    </div>
                </div>
            </div>
			</div>
			
			  
			  
			  
			  
			  
				<?php } else { ?>	  
			  
			  
		 <div class="column-128 w-col w-col-6 w-col-medium-3 w-col-small-6 w-col-tiny-12">
		
		          <div class="div-block-uye-ol-box">
                <div class="div-block-4461292339-24">
                    <h4 class="heading-50">Üye Girişi Yap</h4>
                </div>
                <div>
                    <div class="w-formss">

				        

                         <form action="" method="POST">
									<input type="hidden" name="nereden" value="kontrol"/>

                       
                            <input type="email" class="text-field-10---35-copy w-input" placeholder="E-Posta Adresiniz"  name="email" autocapitalize="none" tabindex="3" size="32" maxlength="64" autocomplete="off" required>
                         
                           
                           <input type="password" class="text-field-10---35-copy w-input" placeholder="Şifreniz"  name="sifre" tabindex="4" autocomplete="off" minlength="4" maxlength="15"  title="Parola en az 4 karakterden oluşmalı" required>
                           
                            <label class="radio-button-field-17 w-radio">
                                <input type="checkbox" class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                   Beni Hatırla
                                </span>
                            </label>
                            <div class="div-block-4461292306"></div>
                            <p class="paragraph-39">
                             Eğer şifrenizi hatırlamıyorsanız  <a href="sifremiunuttum/" title="Şifremi unuttum" target="_blank">buradan</a> ilgili bağlantıya giderek yenileyebilirsiniz.
							
                            </p>
                            <button type="submit" name="girisyap" class="button-uye-ol w-button">Siteye Giriş Yap</button>

                        </form>

                         
                    </div>
                </div>
            </div>
			</div>
		
		
		 <div class="column-128 w-col w-col-6 w-col-medium-3 w-col-small-6 w-col-tiny-12">
		
            <div class="div-block-uye-ol-box">
                <div class="div-block-4461292339-24">
                    <h4 class="heading-50">Ücretsiz Üye Ol</h4>
                </div>
                <div>
                    <div class="w-formss">

				        

                            <form action="" method="POST">
						    <input type="hidden" name="nereden" value="kontrol"/>
                            <input type="text" class="text-field-10---35-copy w-input" placeholder="Adınız Soyadınız"  name="isim" tabindex="1" required="">
                            <input type="email" class="text-field-10---35-copy w-input" placeholder="E-Posta Adresiniz"  name="email" autocapitalize="none" tabindex="3" size="32" maxlength="64" autocomplete="off" required>
                           
                            <input type="password" class="text-field-10---35-copy w-input" placeholder="Şifreniz" name="sifre" tabindex="4" autocomplete="off" minlength="6" maxlength="15" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$" title="Parola en az 6 karakterden oluşmalı, en az 1 küçük ve 1 büyük harf ve en az 1 rakam içermelidir." required>

                    
                            
                            
                            <input type="tel" class="text-field-10---35-copy w-input" placeholder="Cep Telefonu Numaranız (05320000000)" name="telefon" data-type="tel" maxlength="15" size="14" tabindex="5" autocomplete="off" required>
                            
                            <label class="radio-button-field-17 w-radio">
                                <input type="checkbox"name="ebultensor" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
                                   Ebülten listesine kayıt olmak istiyorum .
                                </span>
                            </label>
                            <div class="div-block-4461292306"></div>
							 <label class="radio-button-field-17 w-radio">
                            <input type="checkbox" name="sozlesme" value="1" required class="w-form-formradioinput w-radio-input">
                                <span class="radio-button-label-362 w-form-label">
							
                             <button id="myBtn" style="background: white;color: red;display:block !important;" >Kullanıcı Sözleşmesini</button>okudum anladım ve kabul ediyorum.
								
								 </span>
						
						 </label>
                        
                        <button type="submit" name="kayitol" class="gributton text-center">Üyelik Oluştur</button>
                        </form>

                         
                        

                    </div>
                </div>
            </div>
			</div>
			
			
			
			
			
			
			
		<?php } ?>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
        </div>
    </div>
	




<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header" style="padding: 20px;">
          
          <h4 class="modal-title" id="myModalLabel">Üyelik Sözleşmesi</h4>
        </div>
        <div class="modal-body" style="padding: 20px;">
        <p><?php echo $system['rizametni'];?> </p>
        </div>
		<button style="height: 38px;
font-size: 12px;
line-height: 12px;
color: white;
padding: 10px;
font-weight: 500;" type="button" class="close gributton text-center" data-dismiss="modal" aria-hidden="true">Kullanıcı ve üyelik sözleşmelerindeki maddeleri dikkatlica okudum ve kabul ediyorum.</button> 

       
      </div>
 
  </div>
  
</div> 

<style>
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
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
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
var span = document.getElementsByClassName("close")[0];

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
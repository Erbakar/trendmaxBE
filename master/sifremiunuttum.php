<title>Şifremi Unuttum</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   <div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="javascript:;" class="link-12">Şifremi Unuttum</a>
            </div>
        </div>
        <div class="div-block-4461292330">
            <div class="w-row">
 
                <div class="column-188 w-col w-col-12">
                    <div class="div-block-4-46129247472ip">
                       
                        <div class="div-block-496">
    
         			<form action="" method="POST"/>
		                	           	<div class="row" style="margin-top: 15px;background: white;
padding: 20px;">
		             
		                		
							
							   <div class="div-block-4461292339-24">
                    <h4 class="heading-50">Şifremi Unuttum</h4>
                </div>
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
							<input name="sadsoyad" placeholder="Adınız Soyadınız" type="text" class="text-field-10---35-copy w-input" required>
                           
                            </div>
				            </div>
							
							
							<div class="col-sm-12">	
                            <?php if($system['sifrehatirlat']=='1'){?>							
						    <div class="md-form md-outline" style="width: 48%;float: left;">
						    <div class="kutu">
							<input value="0" name="yeniletip" type="radio" class="login-check" id="register-check-20" required> 
							Eposta ile Şifre Alma
						    </div>
                            
                            </div>
							<?php } ?>
							<?php if($system['ssifrehatirlat']=='1'){?>
				            <div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;">
						    <div class="kutu">
							<input  value="1" name="yeniletip" type="radio" class="login-check" id="register-check-20" required> 
							SMS ile Şifre Alma
						    </div>
                          
                            </div>
							<?php } ?>
				            </div>
							
			
							
							<div class="col-sm-12" id="bireysel" style="display:none;">			
						    <div class="md-form md-outline">
							<input name="seposta" type="email" placeholder="Eposta Adresiniz" class="text-field-10---35-copy w-input">
                         
                            </div>
				            </div>
							
							<div class="col-sm-12" id="kurumsal" style="display:none;">			
						    <div class="md-form md-outline">
							<input name="stelefon" type="text"  placeholder="Telefon Numaranız" class="text-field-10---35-copy w-input" size="11" maxlength="11">
                         
                            </div>
				            </div>
							
	                		


							

	                			</div><!-- End .col-lg-9 -->
		                			<button type="submit" name="sifremiunuttum" class="gributton text-center">
                                                <span>ŞİFREMİ UNUTTUM</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
		                	</div><!-- End .row -->
							
							
							
							
							
            			</form>
						
			
                    </div>
                </div>
            </div>
        </div>
    </div>
	<style>
.kutu {
background: #e7e7e7;
padding: 15px;
  padding-top: 15px;
  padding-right: 15px;
  padding-bottom: 15px;
  padding-left: 15px;
margin-bottom: 10px;
font-size: 13px;
font-weight: bold;
border-radius: 4px;
}
	</style>
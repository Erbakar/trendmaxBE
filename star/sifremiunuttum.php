<title>Şifremi Unuttum</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>


        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Şifremi Unuttum</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
          <div class="container">
          		<div class="row">
								
						<div class="col-sm-12 customer-login" style="text-align: center;border: 1px solid #d4d2d2;padding: 10px;">
							<form action="" method="POST"/>

		             
		                		
							
				<div class="div-block-4461292339-24">
                    <h4 class="heading-50">Şifremi Unuttum</h4>
                </div>
							<div class="col-sm-12" style="margin-bottom:10px;">			
						    <div class="md-form md-outline">
							<input name="sadsoyad" class="form-control" placeholder="Adınız Soyadınız" type="text" class="text-field-10---35-copy w-input" required>
                           
                            </div>
				            </div>
							
							
							<div class="col-sm-12">	
                            <?php if($system['sifrehatirlat']=='1'){?>							
						    <div class="md-form md-outline" style="z-index: 99999999999;
position: relative;width: 48%;float: left;">
						    <div class="kutu">
							<input value="0" name="yeniletip" type="radio" class="login-check" id="register-check-20" required> 
							Eposta ile Şifre Alma
						    </div>
                            
                            </div>
							<?php } ?>
							<?php if($system['ssifrehatirlat']=='1'){?>
				            <div class="md-form md-outline" style="z-index: 99999999999;
position: relative;width: 48%;float: left;margin-left: 4%;">
						    <div class="kutu">
							<input  value="1" name="yeniletip" type="radio" class="login-check" id="register-check-20" required> 
							SMS ile Şifre Alma
						    </div>
                          
                            </div>
							<?php } ?>
				            </div>
							
			
							
							<div class="col-sm-12" id="bireysel" style="display:none;">			
						    <div class="md-form md-outline">
							<input name="seposta" class="form-control" type="email" placeholder="Eposta Adresiniz" class="text-field-10---35-copy w-input">
                         
                            </div>
				            </div>
							
							<div class="col-sm-12" id="kurumsal" style="display:none;">			
						    <div class="md-form md-outline">
							<input name="stelefon" class="form-control" type="text"  placeholder="Telefon Numaranız" class="text-field-10---35-copy w-input" size="11" maxlength="11">
                         
                            </div>
				            </div>
							
	                		<div class="col-sm-12">	

<button style="display: block;
width: 100%;
padding: 15px;
margin: 8px 0;
font-size: 14px;
background-color: #0cc51f;" type="submit" name="sifremiunuttum" class="btn btn-default pull-right">
                                                <span>ŞİFREMİ UNUTTUM</span>
                                               
                                            </button>
							    </div>

	                			</div><!-- End .col-lg-9 -->
		                			
							
						</div>
			
			
          </div>
        </section>
<style>

.selectBox, .form-control {
  box-shadow: none !important;
  border: 1px solid #d6d6d6;
  margin-bottom: 0px !important;
}
.customer-login{

text-align: center;
border: 1px solid #d4d2d2;
padding: 10px;
width: 50%;
margin-left: 25%;
}


@media screen and (max-device-width: 480px) and (orientation: portrait){
.customer-login{
text-align: center;
border: 1px solid #d4d2d2;
padding: 10px;
width: 94%;
margin-left: 3%;
}
}	
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
        <div class="clearfix"></div>  
		</div>
      
     
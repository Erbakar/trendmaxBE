<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

             <?php if($system['misafirok']!='1'){?>
			 <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
             <?php } else { ?>			 
             <meta http-equiv="refresh" content="0; url='<?php echo $url;?>/kontrol/">
			 <?php } ?>
			 
	         <?php } ?>

      <section class="checkout-body py-5 bg-light">
         <div class="container">
            <div class="row">
			
			
			<?php if($sepetsayi<='0'){?>
						 <div class="col-md-12">
           
             
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center" style="text-align: center;"> 
					<img style="margin: auto !important;width: 200px;" src="<?php echo $sitetemasi;?>/user/sepetbos.png" width="100" height="100" class="img-fluid mb-4 mr-3">
                        <h5><strong>Alışverişiz Sepetiniz Boş</strong></h5>
                        <h5>Biraz Gezinmeye Ne Dersin :)</h5> <a href="<?php echo $url;?>" style="background: <?php echo $tema['t37'];?>;border: none;" class="btn btn-primary cart-btn-transform m-3" data-abc="true">hadi gezinelim :)</a>
                    </div>
                </div>
           
        </div>
<?php } else { ?>
			
			
					 
		 
               <div class="col-md-8">
			    <form action="alisverisi-tamamla/" method="POST"/>
                  <div class="checkout-body-left">
                     <div class="accordion checkout-step" id="accordionExample">
                       
                        <div class="bg-white rounded shadow-sm mb-3 overflow-hidden">
                        <h2 class="checkout-title" style="font-size: 14px;
display: block;
text-align: center;
box-shadow: none;
padding: 14px;
font-weight: 500;
background: <?php echo $tema['t37'];?>;
color: white;">Sipariş Detayları</h2><!-- End .checkout-title -->
		  
                           <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                              <div class="card-body p-0">
                                 <div class="cart-table">
                                    <div class="table-responsive" style="padding: 15px;">
                                 	<div class="col-sm-12">			
						    <div class="md-form md-outline">
							<label for="form15" class="active">Adınız Soyadınız</label>
                            <input value="<?php echo $uyebilgileri['isim'];?>" name="adsoyad" type="text" id="form15" class="form-control"  required>
                            
                            </div>
				            </div>
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
							 <label for="form15" class="active">Telefon Numaranız</label>
                            <input value="<?php echo $uyebilgileri['telefon'];?>" name="telefon" type="tel"   class="form-control" required>
                           
                            </div>
				            </div>
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
							<label for="form15" class="active">Eposta Adresiniz</label>
                            <input value="<?php echo $uyebilgileri['email'];?>" name="email" type="email"   class="form-control" required>
                            
                            </div>
				            </div>
							
							<?php if ($_SESSION['uyegirisdurumu'] == 'true') { 
                            $adresbak = $ozy->prepare("SELECT COUNT(*) FROM adreslerim where uyeid='{$uyeid}'");
                            $adresbak->execute();
                            $adressay = $adresbak->fetchColumn();
							if($adressay>='1'){?>
							
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
							<label for="form15" class="active">Kayıtlı Adreslerim</label>
                            <select id="adresgeldi" class="form-control">
							<option>Kayıtlı Adreslerimden Kullan</option>
							<?php $adresim = $ozy->query("select * from adreslerim where uyeid='{$uyeid}' order by id DESC")->fetchAll(PDO::FETCH_ASSOC);
							foreach($adresim as $adresoku){?>
                            <option data-il="<?php echo $adresoku['il']; ?>" data-ilce="<?php echo $adresoku['ilce']; ?>" data-adres="<?php echo $adresoku['adres']; ?>"> <?php echo $adresoku['adi']; ?> / <?php echo $adresoku['adres']; ?> <?php echo $adresoku['il']; ?> <?php echo $adresoku['ilce']; ?></option>
                            <?php } ?>
							</select>
                           
                            </div>
	
				            </div>
							
							
							
							
							<?php }} ?>	
							
							
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
							<label for="form15" class="active">Sipariş Adresiniz</label>
                            <textarea name="adres" style="min-height:200px;" class="form-control" id="uyeadresal" cols="30" rows="4" placeholder="" required></textarea>
                            
                            </div>
				            </div>
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline" style="width: 48%;float: left;">
							<label for="form15" class="active">Sipariş İli</label>
                            <select name="il" id="adresil" class="form-control" required>
							<?php foreach($sehir as $key => $val){?>
                            <option value="<?=$val;?>"><?=$val;?></option>
                            <?php }?>
							</select>
                            
                            </div>
							<div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;">
                            <label for="form15" class="active">Sipariş İlçesi</label>
							<input name="ilce" type="text" id="adresilce"  class="form-control" required>
                            
                            </div>
				            </div>
							
						
							<div class="col-sm-12">			
						    <div class="md-form md-outline" style="z-index: 99999999999;
position: relative;width: 48%;float: left;">
							 <label for="form15" class="active">Fatura Bilgisi</label>
						    <div class="kutu">
							<input checked value="0" name="uyetip" type="radio" class="new-radio" id="register-check-20" required> 
							Bireysel
						    </div>
                           
                            </div>
				            <div class="md-form md-outline" style="z-index: 99999999999;
position: relative;width: 48%;float: left;margin-left: 4%;">
						    <label for="form15" class="active">Fatura Bilgisi</label>
						    <div class="kutu">
							<input  value="1" name="uyetip" type="radio" class="new-radio" id="register-check-20" required> 
							Kurumsal
						    </div>
                            
                            </div>
				            </div>
							<style>@media screen and (max-device-width: 480px) and (orientation: portrait){.mobilodemekismi {}}	.mobilodemekismi {margin-top:0px;}</style>
							
						    <div class="col-lg-12 mobilodemekismi">	
							<div class="col-sm-12" id="bireysel">			
						    <div class="md-form md-outline">
							 <label for="form15" class="active">TC. Numaranız</label>
                            <input value="<?php echo $uyebilgileri['tc'];?>" name="tc" type="text"  class="form-control" size="11" maxlength="11">
                           
                            </div>
				            </div>
							
							<div class="col-sm-12" id="kurumsal" style="display:none;">			
						    <div class="md-form md-outline">
							<label for="form15" class="active">Firma Adı</label>
                            <input value="<?php echo $uyebilgileri['vergi1'];?>" name="vergi1" type="text"  class="form-control">
                            
                            </div>
				            </div>
							
							<div class="col-sm-12" id="kurumsal2" style="display:none;">			
						    <div class="md-form md-outline">
							 <label for="form15" class="active">Vergi Dairesi Adı</label>
                            <input value="<?php echo $uyebilgileri['vergi2'];?>" name="vergi2" type="text"  class="form-control">
                           
                            </div>
				            </div>
							</div>
							
							<div class="col-sm-12" id="kurumsal3" style="display:none;">			
						    <div class="md-form md-outline">
							<label for="form15" class="active">Vergi No</label>
                            <input value="<?php echo $uyebilgileri['vergi3'];?>" name="vergi3" type="text"  class="form-control">
                           
                            </div>
				            </div>
						 
						 
						 
					        <div class="col-sm-12">			
						    <div class="md-form md-outline" style="z-index: 99999999999;
position: relative;width: 48%;float: left;">
							 <label for="form15" class="active">Fatura Adres Bilgisi</label>
						    <div class="kutu">
							<input checked value="0" name="faturatip" type="radio" class="new-radio" id="register-check-202" required> 
							Fatura Adresim Sipariş Adresimle Aynı
						    </div>
                           
                            </div>
				            <div class="md-form md-outline" style="z-index: 99999999999;
position: relative;width: 48%;float: left;margin-left: 4%;">
						     <label for="form15" class="active">Fatura Adres Bilgisi</label>
							<div class="kutu">
							<input  value="1" name="faturatip" type="radio" class="new-radio" id="register-check-202" required> 
							Yeni Fatura Adresi Oluştur
						    </div>
                           
                            </div>
				            </div>
					  
					   
					
							<div class="col-sm-12 mobilodemekismi" id="faturaadres" style="display:none;">		
						    <div class="md-form md-outline">
							<label for="form15" class="active">Fatura Adresiniz</label>
                            <textarea name="faturaadres" style="min-height:200px;" class="form-control" cols="30" rows="4" placeholder=""></textarea>
                            
                            </div>
				            </div>
							
							<div class="col-sm-12" id="faturail" style="display:none;">		
						    <div class="md-form md-outline" style="width: 48%;float: left;">
							<label for="form15" class="active">Fatura İli</label>
                            <select name="faturail" id="sehir" class="form-control">
							<?php foreach($sehir as $key => $val){?>
                            <option value="<?=$val;?>"><?=$val;?></option>
                            <?php }?>
							</select>
                            
                            </div>
							<div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;display:none;" id="faturailce">	
                            <label for="form15" class="active">Fatura İlçesi</label>
							<input name="faturailce" type="text"   class="form-control">
                            
                            </div>
				            </div> 
						
							
							
							<div class="col-sm-12 mobilodemekismi">		
						    <div class="md-form md-outline">
							 <label for="form15" class="active">Notunuz </label>
                            <textarea name="mesaj" style="min-height:200px;" class="form-control" cols="30" rows="4" placeholder="Bırakmak istediğiniz not ."></textarea>
                           
                            </div>
				            </div>
							
							
							<div class="col-sm-12">	
							
                            <input class="yenisoz" type="checkbox" name="onay" value="1" class="new-check" id="register-policy" required>
 
				
							     <button id="myBtn" style="font-weight: bold !important;color: red;background: none;border: none;" >Mesafeli Satış Sözleşmesi ve Ön Bilgilendirme Formunu</button> okudum ve kabul ediyorum.
                            </div><!-- End .custom-checkbox -->
													 
							
	                		


                                    </div>
								
								 </div>
                              </div>
                           </div>
                        </div>
                     
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="osahan-cart-item">
                    					   <h2 class="checkout-title" style="
					  font-size: 14px;
display: block;
text-align: center;
box-shadow: none;
padding: 14px;
font-weight: 500;
background: <?php echo $tema['t37'];?>;
color: white;">Ödeme Yöntemleri</h2><!-- End .checkout-title -->
                     <div class="mb-3 bg-white rounded shadow-sm p-3 clearfix" style="padding-left: 0px !important;">

		   
                        <table cellspacing="0" cellpadding="0" style="width: 100% !important;">
                           <tbody>
						    <?php if($system['havaleok']=='1'){?>
                              <tr>
                              <td>
							 <label class="custom-control custom-radio custom-control-inline">
					         <input onclick="kapidaodemeekle(2)" type="radio" name="odemetipi" value="Havale/EFT" required class="new-radio">
					         <div class="custom-control-label"><b class="yontemyazi">Havale/EFT</b></div>
					         </label>
							 </td>  
                              </tr>
							 <?php } ?>
							  <?php if($system['kapidaok']=='1'){?>
							   <tr>
                                 <td>
					<label class="custom-control custom-radio custom-control-inline">
					  <input onclick="kapidaodemeekle(1)" type="radio" name="odemetipi" value="Kapıda Ödeme" required class="new-radio">
					  <div class="custom-control-label"><b class="yontemyazi">Kapıda Ödeme + <?php echo fiyatgoster($system['kapitutar']);?></b></div>
					</label>
								 </td>
                              </tr>
							    <?php } ?>
								<?php if($system['kartok']=='1'){?>
								
							    <tr>
                                 <td>
					<label class="custom-control custom-radio custom-control-inline">
					  <input onclick="kapidaodemeekle(0)" type="radio" name="odemetipi" value="Kredi Kartı" required class="new-radio">
					  <div class="custom-control-label"><b class="yontemyazi">Kredi Kartı</b></div>
					</label>
								 </td>
                              </tr>
							  <?php } ?>
							 
						
						
							  
                              <tr>
                                 <td colspan="2">
                                    <hr>
                                 </td>
                              </tr>

                           </tbody>
                        </table>  
					 </div>
                  </div>
                 
				      <div class="osahan-cart-item">
                         					   <h2 class="checkout-title" style="
					  font-size: 14px;
display: block;
text-align: center;
box-shadow: none;
padding: 14px;
font-weight: 500;
background: <?php echo $tema['t37'];?>;
color: white;">Ödeme Bilgileri</h2><!-- End .checkout-title -->
                     <div class="mb-3 bg-white rounded shadow-sm p-3 clearfix">
                        <p class="mb-1">Ara Tutar : <span class="float-right text-dark"><?php echo $aratutari;?></span></p>
                        <p class="mb-1">Kdv : <span class="float-right text-dark"><?php echo $kdvtutari;?></span></p>
                        <p class="mb-1">Kargo : <span class="text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $kargometni;?>">
                           <i class="icofont-info-circle"></i>
                           </span> <span class="float-right text-dark"><?php echo $kargometni;?></span>
                        </p>
						
						
						
                        <p id="kapidaodemediv" style="display:none;" class="mb-1 text-info">Kapıda Ödeme :
                           <span class="float-right text-info" ><?php echo fiyatgoster($system['kapitutar']);?></span>
                       </p>
				
					
						<?php if($havaleindirimbedeli!='0'){?>
                        <p id="havaleodemediv" style="display:none;" class="mb-1 text-info">Havale/EFT İndirimi :
                           <span class="float-right text-info" style="color:red !important;">- <?php echo fiyatgoster($havaleindirimbedeli)?></span>
                       </p>
						<?php } ?>
						
						<?php if($kuponindirim!='0'){?>
                        <p style="color:red !important;" class="mb-1 text-info">İndirim Bedeli :
                           <span class="float-right text-info" style="color:red !important;">- <?php echo fiyatgoster($kuponindirim)?></span>
                        </br><a style="padding:2px;font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?kuponsil">Kuponu Sil</a> 
						</p>
						<?php } ?>
						
						
						<?php if($cekindirim!='0'){?>
                        <p style="color:red !important;" class="mb-1 text-info">Çek İndirimi :
                           <span class="float-right text-info" style="color:red !important;">- <?php echo fiyatgoster($cekindirim)?></span>
                        </br><a style="padding:2px;font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?ceksil">Çeki Sil</a> 
						</p>
						<?php } ?>
						
						
						
						
						
						
						
						
						
						
                        <hr>
                        <h6 style="font-weight:500 !important;" class="font-weight-bold text-danger mb-0">ÖDENECEK TUTAR  <span class="float-right" id="toplam-price-val" data-price="<?php echo $toplamtutarim;?>"><?php echo $toplamtutari;?></span></h6>
                     
					 
					 	 <button type="submit"  style="height: 40px;text-align: center !important;margin-top:20px;" class="btn btn-primary btn-lg btn-block text-left">
									<span class=""><i class="icofont icofont-cart"></i>
										ALIŞVERİŞİ TAMAMLA</span>
									
									</button>
                                   
					 
					 
					 </div>
                  </div>
                 
				
				 
				 
				 
               </div>
			   
			    </form>
			   
			   
			     <?php } ?>
					
			   
			   
			   
			   
            </div>
         </div>
      </section>
	  <style>
	  .rounded-sm, .rounded {
  border-radius: 2px !important;
  height: auto;
  object-fit: cover;
}



.select2-container .select2-selection--single .select2-selection__rendered {

    padding: 0.375rem 0.75rem;
    width: 249px !important;

}
	  </style>
	  <style>

.sozlesme {
color: black;
font-weight: 400;
display: block;
margin: auto;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
margin-left: 2%;
margin-top: -23px;
font-size: 17px;
margin-bottom: 20px;
}
.yenisoz {

}


.cart-container {
 padding:0
}
.cart-container,
.cart-container-title {
 width:100%;
 height:auto
}
.cart-container-title h1 {
 font-size:22px;
 color:#555
}
.cart-container-left {
 position:relative;
 float:left;
 width:100%;
 height:auto;
 z-index: 9999999999999;
}
.cart-container-right {
 width:calc(100% - 15px);
 height:auto;
 border-radius:10px;
 margin-left:15px;
}
.cart-product-container {
 position:relative;
 float:left;
 width:100%;
 height:auto;
 border:2px solid #f5f5f5;
 background-color:#fff;
 border-radius:5px;
 padding:15px;
 margin-bottom:15px
}
.cart-product-container-left {
 position:relative;
 float:left;
 width:100px;
 height:auto
}
.cart-product-container-left img {
 width:100%;
 height:120px;
 -o-object-fit:cover;
 object-fit:cover;
 border-radius:5px
}
.cart-product-container-middle {
 position:relative;
 float:left;
 width:calc(100% - 140px);
 height:auto;
 padding-left:20px
}
.cart-product-container-right {
 position:relative;
 float:left;
 width:40px;
 height:auto;
 margin-top: 2% !important;
}
.cart-product-title>a {
 text-decoration:none
}
.cart-product-title h2 {
 font-size:15px;
 margin-bottom:3px;
 color:#555;
 font-weight:500;
}
.cart-product-variant-title h3 {
 color:#555;
 font-weight:400;
 font-size:12px;
 margin-bottom:0
}
.cart-product-quantity-changer {
 width:100%;
 height:100px;
 border:1px solid #e0e0e0;
 border-radius:10px
}
.cart-product-quantity-changer-decreaser,
.cart-product-quantity-changer-increaser,
.cart-product-quantity-changer-quantity {
 height:40px;
 text-align:center;
 font-size:10px;
 color:#777;
 width:100%;
 cursor:pointer
}
.cart-product-quantity-changer-quantity {
 height:20px
}
.cart-product-quantity-changer-decreaser:hover,
.cart-product-quantity-changer-increaser:hover {
 color:#000
}
.cart-product-quantity-changer-decreaser,
.cart-product-quantity-changer-increaser {
 line-height:40px
}
.cart-product-quantity-changer-quantity input[type=text] {
 width:100%;
 height:20px;
 text-align:center;
 border:none;
 font-size:13px;
 font-weight:500;
 color:#555
}
.cart-product-remove {
 width:40px;
 height:40px;
 line-height:40px;
 text-align:center;
 border:1px dashed #e0e0e0;
 border-radius:8px;
 margin-top:5px;
 font-size:14px;
 color:#777;
 cursor:pointer;
 line-height: 0px;
 display: block !important;
}
.cart-product-remove:hover {
 border:1px dashed var(--themeColor);
 color:var(--themeColor)
}
.cart-product-prices span {

}
.cart-product-quantity {
 font-size:12px;
 color:#555;
 font-weight:400
}
.product-card-min {
 position:relative;
 float:left;
 display:block;
 width:150px;
 height:auto;
 background:#fff;
 border-radius:10px;
 margin-right:0;
 transition:transform .3s
}
.product-card-min:hover {
 transform:scale(1)
}
.product-card-min a {
 text-decoration:none
}
.product-card-min>img {
 vertical-align:baseline!important;
 width:100%;
 height:245px;
 border-radius:5px;
 -o-object-fit:cover;
 object-fit:cover;
 -o-object-position:50% 50%;
 object-position:50% 50%
}
.product-card-min-image {
 width:100%
}
.product-card-min-image img {
 width:100%;
 height:200px;
 -o-object-fit:cover;
 object-fit:cover;
 border-radius:5px
}
.product-card-min-image img:first-child {
 display:block
}
.product-card-min-image img:last-child {
 display:none
}
.product-card-min:hover>.product-card-min-image img:last-child {
 display:block
}
.product-card-min:hover>.product-card-min-image img:first-child {
 display:none
}
.product-card-min-title {
 width:100%;
 height:25px;
 line-height:25px;
 margin-top:5px;
 padding:0 10px;
 color:#777;
 font-size:13px;
 word-wrap:break-word;
 overflow-wrap:break-word;
 white-space:nowrap;
 overflow:hidden;
 text-overflow:ellipsis
}
.product-card-min-price {
 width:100%;
 height:25px;
 position:relative;
 padding:0 10px
}
.product-card-min-price1 {
 font-weight:500;
 color:var(--themeColor)
}
.product-card-min-price1,
.product-card-min-price2 {
 float:left;
 height:25px;
 line-height:25px;
 font-size:14px
}
.product-card-min-price2 {
 text-decoration:line-through;
 color:#999;
 margin-right:5px
}
.message-container {
 position:fixed;
 top:10px;
 right:10px;
 width:250px;
 height:auto;
 z-index:15
}
.message-box {
 height:auto;
 background:#fff;
 font-size:12px;
 box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
 margin-bottom:10px
}
.cart-confirm,
.message-box {
 width:100%;
 padding:10px 15px;
 border-radius:5px;
 color:#fff;
 font-weight:500;
 width: 100% !important;
margin-bottom: 10%;
margin-top:20px;
}
.cart-confirm {
background: <?php echo $tema['t37'];?>;
text-align: center;
font-size: 16px;
cursor: pointer;
}
.cart-confirm-disabled {
 background:#bdbdbd;
 cursor:not-allowed
}
.cart-gift-certificate-container {
 width:100%;
 height:auto;
 padding:15px;
 background:#f5f5f5;
 box-shadow:0 1px 3px rgb(0 0 0/20%);
 border-radius:3px
}
.cart-gift-certificate-container h2 {
 font-size:14px;
 color:#555;
 font-weight:400;
 padding-bottom:10px
}
.cart-summary {
width: 100%;
height: auto;
padding: 15px 20px;
background: #fff;
box-shadow: 0 1px 3px rgba(37, 35, 35, 0.14);
border-radius: 3px
}
.cart-summary h2 {
 font-size:18px;
 color:#555;
 margin-bottom:10px
}
.cart-summary table {
 width:100%;
 height:auto
}
.cart-summary table tr {
height: 30px;
line-height: 1px;
font-size: 13px;
color: #555;
margin-top: 14px;
}
.cart-summary-total-price {
text-align: right;
font-size: 18px;
font-weight: bold;
color: <?php echo $tema['t37'];?>;
}
.cart-recommended-products-container,
.cart-recommended-products-title {
 width:100%;
 height:auto
}
.cart-recommended-products-title h2 {
 font-size:20px;
 color:#555
}
.cart-recommended-products {
 width:100%;
 height:auto;
 overflow-x:auto;
 overflow-y:hidden;
 white-space:nowrap;
 -webkit-overflow-scrolling:touch;
 padding-bottom:10px
}
.link-block {
  width: 120px;
  text-decoration: none;
  color: #fff;
  font-size: 12px;
}
.badge1 {
width: 18% !important;
color: #e41313;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
}

.badge2 {
width: 20% !important;
color: #a88f0a;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
padding-right: 8px;
padding-left: 8px;
margin-left: 2%;
}
.okey {

}	
.yontemyazi {
font-size: 14px;
position: absolute;
font-weight: 500;
}	
.text-end {
font-size: 14px;
font-weight: 500;
}	
	
@media screen and (max-device-width: 480px) and (orientation: portrait){
.cart-confirm,
.message-box {
 width:100%;
 padding:10px 15px;
 border-radius:5px;
 color:#fff;
 font-weight:500;
 width: 96% !important;
margin-bottom: 10%;
margin-top:20px;
}	
#myBtn{	
font-size: 10px !important;	
}	
.kutu {
  background: #e7e7e7;
    background-attachment: scroll;
  padding: 15px;
  padding-top: 15px;
  padding-right: 15px;
  padding-bottom: 15px;
  padding-left: 15px;
  margin-bottom: 10px;
  font-size: 14px !important;
  font-weight: bold;
  border-radius: 4px;
  line-height: 26px;
}	
	
	
	
.okey {

padding-right: 6% !important;
}	
	
	
.sozlesme {
color: black;
font-weight: 400;
display: block;
float: right;
margin: auto;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: auto;
margin-left: 5%;
margin-top: -6%;
font-size: 12px;
margin-bottom: 20px
}	
	
	
.badge1 {
width: 85% !important;
color: #e41313;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
}

.badge2 {
width: 85% !important;
color: #a88f0a;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
padding-right: 8px;
padding-left: 8px;
margin-left: 2%;
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
.black{
font-weight: bold;
}


.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.7rem;
}

.custom-control-inline {
  display:block;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #3167eb;
  background-color: #3167eb;
}
.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(49, 103, 235, 0.25);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #a5bdf6;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #d4dffb;
  border-color: #d4dffb;
}
.custom-control-input:disabled ~ .custom-control-label {
  color: #545454;
}
.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e4e4e4;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}
.custom-radio {
  display: inline-block;
  position: relative;
 width: 100%;
  height: 20px;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
  border: 0px !important;
  background: #fff;
  margin-right: 1.25rem;
}

.custom-control-label::before {
  position: absolute;
  top: 0.15rem;
  left: -1.7rem;
  display: block;
  width: 1.2rem;
  height: 1.2rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #969696 solid 1px;
  display:none;
}
.custom-control-label::after {
  position: absolute;
  top: 0.15rem;
  left: -1.7rem;
  display: block;
  width: 1.2rem;
  height: 1.2rem;
  content: "";
  background: no-repeat 50%/50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.2rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #3167eb;
  background-color: #3167eb;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(49, 103, 235, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(49, 103, 235, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(49, 103, 235, 0.5);
}

.custom-switch {
  padding-left: 2.6rem;
}
.custom-switch .custom-control-label::before {
  left: -2.6rem;
  width: 2.1rem;
  pointer-events: all;
  border-radius: 0.6rem;
}
.custom-switch .custom-control-label::after {
  top: calc(0.15rem + 2px);
  left: calc(-2.6rem + 2px);
  width: calc(1.2rem - 4px);
  height: calc(1.2rem - 4px);
  background-color: #969696;
  border-radius: 0.6rem;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  transform: translateX(0.9rem);
}
.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(49, 103, 235, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.9rem + 2px);
  padding: 0.45rem 1.85rem 0.45rem 0.85rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.85rem center/8px 10px;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.37rem;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.custom-select:focus {
  border-color: #a5bdf6;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(49, 103, 235, 0.25);
}
.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}
.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.85rem;
  background-image: none;
}
.custom-select:disabled {
  color: #545454;
  background-color: #e4e4e4;
}
.custom-select::-ms-expand {
  display: none;
}

.custom-select-sm {
  height: calc(1.2em + 0.7rem + 2px);
  padding-top: 0.35rem;
  padding-bottom: 0.35rem;
  padding-left: 0.5rem;
  font-size: 0.82rem;
}

.custom-select-lg {
  height: calc(1.5em + 1.2rem + 2px);
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
  padding-left: 1rem;
  font-size: 1.2rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.9rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.9rem + 2px);
  margin: 0;
  opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
  border-color: #a5bdf6;
  box-shadow: 0 0 0 0.2rem rgba(49, 103, 235, 0.25);
}
.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e4e4e4;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.9rem + 2px);
  padding: 0.45rem 0.85rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.37rem;
}
.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.9rem);
  padding: 0.45rem 0.85rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e4e4e4;
  border-left: inherit;
  border-radius: 0 0.37rem 0.37rem 0;
}

.custom-range {
  width: 100%;
  height: calc(1rem + 0.4rem);
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.custom-range:focus {
  outline: none;
}
.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(49, 103, 235, 0.25);
}
.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(49, 103, 235, 0.25);
}
.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(49, 103, 235, 0.25);
}
.custom-range::-moz-focus-outer {
  border: 0;
}
.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #3167eb;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.mobilodemekismi{
padding: 0px !important;
}
.col-sm-12{
margin: 0px !important;
padding: 0px !important;
}


.new-radio, .new-checkbox {
  background: #fff;
  border: 1px solid #ccc;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  cursor: pointer;
  float: left;
  height: 15px;
  margin: 2px 0 0 -20px;
  position: relative;
  width: 18px;
  height: 18px;
  display: block;
  opacity: 1 !important;
  margin-right: 1%;
margin-left: 1%;
background: #e7e7e7;
border: none !important;
margin-right: 5px !important;
}
.new-radio input[type="radio"], .new-checkbox input[type="checkbox"], .form-inline .radio input[type="radio"], .form-inline .checkbox input[type="checkbox"] {
  cursor: pointer;
  height: 100%;
  margin: 0;
  opacity: 1 !important;
  filter: alpha(opacity=0);
  position: absolute;
  vertical-align: top;
  width: 100%;
}



</style>

<script type="text/javascript">
    	var kapifiyat = parseFloat(<?php echo $system['kapitutar'];?>);
    var havalefiyat = parseFloat(<?php echo $havaleindirimbedeli;?>);
	var odemefiyati = parseFloat(<?php echo $toplamtutarim;?>);
    function kapidaodemeekle(id) {
   
        if (id == 1) {
			var yenifiyat = kapifiyat + odemefiyati;
            $("#toplam-price-val").html(yenifiyat.toFixed(2).toString() + " TL");
            $("#kapidaodemediv").show();
			 $("#havaleodemediv").hide();
        } else if (id == 2){
			var yenifiyat1 = odemefiyati - havalefiyat;
            $("#toplam-price-val").html(yenifiyat1.toFixed(2).toString() + " TL");
            $("#havaleodemediv").show();
			$("#kapidaodemediv").hide();
        }else{
		$("#toplam-price-val").html(odemefiyati.toFixed(2).toString() + " TL");
            $("#havaleodemediv").hide();
			$("#kapidaodemediv").hide();
		} 

    }
</script>
<div id="myModal" class="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title" id="myModalLabel">Mesafeli Satış Sözleşmesi ve Ön Bilgilendirme Formu</h4>
        </div>
        <div class="modal-body">
        <?php echo $system['sozlesme'];?> 
				<button style="width: 100%;
padding: 6px !important;
margin: 0px !important;
border-radius: 5px !important;" type="button" class="sozlesmebuton closex" data-dismiss="modal" aria-hidden="true">Mesafeli Satış Sözleşmesi ve Ön Bilgilendirme Formundaki maddeleri dikkatlica okudum ve kabul ediyorum.</button> 

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

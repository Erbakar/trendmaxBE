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
		   <main class="main">
     
         
   <div class="page-content pb-3">
                <div class="cart">
	                <div class="container">
	                	<div class="row">
						<?php if($sepetsayi<='0'){?>
						 <div class="col-md-12">
           
             
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
					<img style="margin: auto !important;" src="eklentiler/sepetbos.png" width="100" height="100" class="img-fluid mb-4 mr-3">
                        <h5><strong>Alışverişiz Sepetiniz Boş</strong></h5>
                        <h5>Biraz Gezinmeye Ne Dersin :)</h5> <a href="<?php echo $url;?>" class="btn btn-primary cart-btn-transform m-3" data-abc="true">hadi gezinelim</a>
                    </div>
                </div>
           
        </div>
<?php } else { ?>

        		<div class="col-lg-9" style="border: 1px solid #e9e7e7;

background: white;
padding: 10px;">
		  <form action="alisverisi-tamamla/" method="POST"/>
		  <h2 class="checkout-title" style="
text-align: center;
background: <?php echo $tema['t8'];?>;color:white;border-radius: 0.37rem;
padding: 10px;

font-size: 14px;margin-bottom:20px;">Sipariş Detayları</h2><!-- End .checkout-title -->
		                				<div class="row">
							
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['isim'];?>" name="adsoyad" type="text" id="form15" class="form-control"  onblur="this.value.split(' ').length < 2 ? alert('Adınızı ve Soyadınızı eksiksiz girmelisiniz.') : '';"  required>
                            <label for="form15" class="active">Adınız Soyadınız</label>
                            </div>
				            </div>
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['telefon'];?>" name="telefon" type="tel"   class="form-control" required>
                            <label for="form15" class="active">Telefon Numaranız</label>
                            </div>
				            </div>
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['email'];?>" name="email" type="email"   class="form-control" required>
                            <label for="form15" class="active">Eposta Adresiniz</label>
                            </div>
				            </div>
							
							<?php if ($_SESSION['uyegirisdurumu'] == 'true') { 
                            $adresbak = $ozy->prepare("SELECT COUNT(*) FROM adreslerim where uyeid='{$uyeid}'");
                            $adresbak->execute();
                            $adressay = $adresbak->fetchColumn();
							if($adressay>='1'){?>
							
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
                            <select id="adresgeldi" class="form-control">
							<option>Kayıtlı Adreslerimden Kullan</option>
							<?php $adresim = $ozy->query("select * from adreslerim where uyeid='{$uyeid}' order by id DESC")->fetchAll(PDO::FETCH_ASSOC);
							foreach($adresim as $adresoku){?>
                            <option data-il="<?php echo $adresoku['il']; ?>" data-ilce="<?php echo $adresoku['ilce']; ?>" data-adres="<?php echo $adresoku['adres']; ?>"> <?php echo $adresoku['adi']; ?> / <?php echo $adresoku['adres']; ?> <?php echo $adresoku['il']; ?> <?php echo $adresoku['ilce']; ?></option>
                            <?php } ?>
							</select>
                            <label for="form15" class="active">Kayıtlı Adreslerim</label>
                            </div>
	
				            </div>
							
							
							
							
							<?php }} ?>	
							
							
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline">
                            <textarea name="adres" style="min-height:200px;" class="form-control" id="uyeadresal" cols="30" rows="4" placeholder="" required></textarea>
                            <label for="form15" class="active">Sipariş Adresiniz</label>
                            </div>
				            </div>
							
							<div class="col-sm-12">			
						    <div class="md-form md-outline" style="width: 48%;float: left;">
                            <select name="il" id="adresil" class="form-control" required>
							<?php foreach($sehir as $key => $val){?>
                            <option value="<?=$val;?>"><?=$val;?></option>
                            <?php }?>
							</select>
                            <label for="form15" class="active">Sipariş İli</label>
                            </div>
							<div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;">
                            <input name="ilce" type="text" id="adresilce"  class="form-control" required>
                            <label for="form15" class="active">Sipariş İlçesi</label>
                            </div>
				            </div>
							
						
							<div class="col-sm-12">			
						    <div class="md-form md-outline" style="width: 48%;float: left;">
						    <div class="kutu">
							<input checked value="0" name="uyetip" type="radio" class="login-check" id="register-check-20" required> 
							Bireysel
						    </div>
                            <label for="form15" class="active">Fatura Bilgisi</label>
                            </div>
				            <div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;">
						    <div class="kutu">
							<input  value="1" name="uyetip" type="radio" class="login-check" id="register-check-20" required> 
							Kurumsal
						    </div>
                            <label for="form15" class="active">Fatura Bilgisi</label>
                            </div>
				            </div>
							<style>@media screen and (max-device-width: 480px) and (orientation: portrait){.mobilodemekismi {margin-top: 120px !important;padding: 0px !important;}}	.mobilodemekismi {margin-top:0px;padding: 0px !important;}</style>
							
						    <div class="col-lg-12 mobilodemekismi">	
							<div class="col-sm-12" id="bireysel">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['tc'];?>" name="tc" type="text"  class="form-control" size="11" maxlength="11">
                            <label for="form15" class="active">TC. Numaranız</label>
                            </div>
				            </div>
							
							<div class="col-sm-12" id="kurumsal" style="display:none;">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['vergi1'];?>" name="vergi1" type="text"  class="form-control">
                            <label for="form15" class="active">Firma Adı</label>
                            </div>
				            </div>
							
							<div class="col-sm-12" id="kurumsal2" style="display:none;">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['vergi2'];?>" name="vergi2" type="text"  class="form-control">
                            <label for="form15" class="active">Vergi Dairesi Adı</label>
                            </div>
				            </div>
							</div>
							
							<div class="col-sm-12" id="kurumsal3" style="display:none;">			
						    <div class="md-form md-outline">
                            <input value="<?php echo $uyebilgileri['vergi3'];?>" name="vergi3" type="text"  class="form-control">
                            <label for="form15" class="active">Vergi No</label>
                            </div>
				            </div>
						 
						 
						 
					        <div class="col-sm-12">			
						    <div class="md-form md-outline" style="width: 48%;float: left;">
						    <div class="kutu">
							<input checked value="0" name="faturatip" type="radio" class="login-check" id="register-check-202" required> 
							Fatura Adresim Sipariş Adresimle Aynı
						    </div>
                            <label for="form15" class="active">Fatura Adres Bilgisi</label>
                            </div>
				            <div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;">
						    <div class="kutu">
							<input  value="1" name="faturatip" type="radio" class="login-check" id="register-check-202" required> 
							Yeni Fatura Adresi Oluştur
						    </div>
                            <label for="form15" class="active">Fatura Adres Bilgisi</label>
                            </div>
				            </div>
					  
					   
					
							<div class="col-sm-12 mobilodemekismi" id="faturaadres" style="display:none;">		
						    <div class="md-form md-outline">
                            <textarea name="faturaadres" style="min-height:200px;" class="form-control" cols="30" rows="4" placeholder=""></textarea>
                            <label for="form15" class="active">Fatura Adresiniz</label>
                            </div>
				            </div>
							
							<div class="col-sm-12" id="faturail" style="display:none;">		
						    <div class="md-form md-outline" style="width: 48%;float: left;">
                            <select name="faturail" id="sehir" class="form-control">
							<?php foreach($sehir as $key => $val){?>
                            <option value="<?=$val;?>"><?=$val;?></option>
                            <?php }?>
							</select>
                            <label for="form15" class="active">Fatura İli</label>
                            </div>
							<div class="md-form md-outline" style="width: 48%;float: left;margin-left: 4%;display:none;" id="faturailce">	
                            <input name="faturailce" type="text"   class="form-control">
                            <label for="form15" class="active">Fatura İlçesi</label>
                            </div>
				            </div> 
						
							
							
							<div class="col-sm-12 mobilodemekismi">		
						    <div class="md-form md-outline">
                            <textarea name="mesaj" style="min-height:200px;" class="form-control" cols="30" rows="4" placeholder="Bırakmak istediğiniz not ."></textarea>
                            <label for="form15" class="active">Notunuz </label>
                            </div>
				            </div>
							
							
							<div class="col-sm-12">	
							<div class="custom-control custom-checkbox">
                            <input type="checkbox" name="onay" value="1" class="custom-control-input" id="register-policy" required>
                            <label class="custom-control-label" for="register-policy"><a data-toggle="modal" data-target=".bannerformmodal"><b>Mesafeli Satış Sözleşmesi Şartlarını</b></a> okudum ve kabul ediyorum *</label>
                            </div><!-- End .custom-checkbox -->
													 
							</div>
	                		


							

	                			</div><!-- End .col-lg-9 -->
		                		
		                	</div><!-- End .row -->
							
							<aside class="col-lg-3" style="border: 1px solid #e9e7e7;

background: white;
padding: 10px;">
								<div class="summary summary-cart" style="background: white !important;">
	                				<h3 class="summary-title" style="
text-align: center;
background: <?php echo $tema['t8'];?>;color:white;border-radius: 0.37rem;

font-size: 14px;padding: 8px;">Ödeme Detayları</h3><!-- End .summary-title -->
<div class="card">
<div class="card-body">
		<dl class="dlist-align">
		  <dt>Ara Tutar:</dt>
		  <dd class="text-right"><?php echo $aratutari;?></dd>
		</dl>
		<dl class="dlist-align">
		  <dt>KDV:</dt>
		  <dd class="text-right"><?php echo $kdvtutari;?></dd>
		</dl>
		
		<dl class="dlist-align">
		  <dt>Kargo Bedeli:</dt>
		  <dd class="text-right"><?php echo $kargometni;?></dd>
		</dl>
		
		<dl class="dlist-align" id="kapidaodemediv" style="display:none;">
		  <dt>Kapıda Ödeme Bedeli</dt>
		  <dd class="text-right"><?php echo fiyatgoster($system['kapitutar']);?></dd>
		</dl>
		
		
		
		<?php if($havaleindirimbedeli!='0'){?>
		<dl class="dlist-align" id="havaleodemediv" style="display:none;">
		  <dt>Havale/EFT İndirimi :</label></dt>
		  <dd class="text-right text-danger">- <?php echo fiyatgoster($havaleindirimbedeli)?></dd>
		</dl>
		<?php } ?>
		
		
		<?php if($kuponindirim!='0'){?>
		<dl class="dlist-align">
		  <dt>İndirim Kuponu Bedeli :</label></br><a style="font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?kuponsil">Kuponu Sil</a></dt>
		  <dd class="text-right text-danger">- <?php echo fiyatgoster($kuponindirim)?></dd>
		</dl>
		<?php } ?>
		
		<?php if($cekindirim!='0'){?>
		<dl class="dlist-align">
		  <dt>Hediye Çeki Bedeli :</label></br><a style="font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?ceksil">Hediye Çeki Sil</a></dt>
		  <dd class="text-right text-danger">- <?php echo fiyatgoster($cekindirim)?></dd>
		</dl>
		<?php } ?>
		
		
		
		
		
		
		<dl class="dlist-align">
		  <dt>Ödenecek Tutar:</dt>
		  <dd id="toplam-price-val" class="text-right text-dark b" style="font-size: 18px;font-weight: bold;" data-price="<?php echo $toplamtutarim;?>"><strong><?php echo $toplamtutari;?></strong></dd>
		</dl>
		<hr>
		
		<h3 class="summary-title" style="
text-align: center;
background: <?php echo $tema['t8'];?>;color:white;border-radius: 0.37rem;

font-size: 14px;padding: 8px;">Ödeme Yöntemleri</h3><!-- End .summary-title -->
		
		<div class="form-group col-md">
				
				<div class="mt-2">
				 <?php if($system['havaleok']=='1'){?>
					<label class="custom-control custom-radio custom-control-inline">
					  <input onclick="kapidaodemeekle(2)" type="radio" name="odemetipi" value="Havale/EFT" required class="custom-control-input">
					  <div class="custom-control-label">Havale/EFT</div>
					</label>
                   <?php } ?>
				   <?php if($system['kapidaok']=='1'){?>
					<label class="custom-control custom-radio custom-control-inline">
					  <input onclick="kapidaodemeekle(1)" type="radio" name="odemetipi" value="Kapıda Ödeme" required class="custom-control-input">
					  <div class="custom-control-label">Kapıda Ödeme <b>+ <?php echo fiyatgoster($system['kapitutar']);?></b></div>
					</label>
                  <?php } ?>
				   <?php if($system['kartok']=='1'){?>
					<label class="custom-control custom-radio custom-control-inline">
					  <input onclick="kapidaodemeekle(0)" type="radio" name="odemetipi" value="Kredi Kartı" required class="custom-control-input">
					  <div class="custom-control-label">Kredi Kartı</div>
					</label>
                 <?php } ?>

				</div>
		</div>
		
		
		
		
	    <button type="submit" class="butonok btn btn-outline-primary-2">ALIŞVERİŞİ TAMAMLA</button>
	    
	
		
		

</div> <!-- card-body.// -->
</div> <!-- card.// -->
	                				</table><!-- End .table table-summary -->

	                			</div><!-- End .summary -->
		                
                                            
							
							
	</form>   


		                			
		                			
		                		</aside><!-- End .col-lg-3 -->
							
							
							
        		
						
						
						<?php } ?>



	<link href="<?php echo $sitetemasi;?>/cart/css/ui.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $sitetemasi;?>/cart/css/responsive.css" rel="stylesheet" />

	<!-- fonticon -->
	<link href="<?php echo $sitetemasi;?>/cart/fonts/fontawesome/css/all.min.cs" type="text/css" rel="stylesheet">
	<link href="<?php echo $sitetemasi;?>/cart/css/style.css" rel="stylesheet" />
	<script src="<?php echo $sitetemasi;?>/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
<style>


@media screen and (max-device-width: 480px) and (orientation: portrait){
.coll {
max-width: 25%;
}


.table-shopping-cart td:first-child {
 width: 100%;
max-width: 100%;
}

.table-shopping-cart.table th {
    max-width: 25%;
    float: left;
    padding: 5px !important;
    width: 15%;
}

.coll {
max-width: 100%;
float: left;
}

}		
.site-footer .footer-subscribe {


    display: none;
}

</style>
	

							
	                	</div><!-- End .row -->
						
						
						</div>
						
						</div>
						
						</div>
	<script>
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

	
<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Mesafeli Satış Sözleşmesi</h4>
        </div>
        <div class="modal-body">
        <p><?php echo $system['sozlesme'];?> </p>
        </div>
        <div class="modal-footer">
          <button style="background: <?php echo $tema['t8']; ?>;color: white;opacity: 1;font-size: 12px;padding: 10px;" type="button" class="butonok close" data-dismiss="modal" aria-hidden="true">Sözleşmeyi okudum ve kabul ediyorum.</button>
        </div>        
      </div>
    </div>
  </div>
</div>

<style>
.modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
    width: 50%;
    height:auto;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.7rem;
}

.custom-control-inline {
  display: inline-flex;
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


</style>					

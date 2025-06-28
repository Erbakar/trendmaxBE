<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Alışveriş Sepetim"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php 


if (isset($_POST['sepetupdate'])) {

$urunid  = temizle($_POST['urunid']);
$adet  = temizle($_POST['adet']);
$sepetid  = temizle($_POST['sepetid']);
$sepeturunid = $ozy->query("select * from urunler where id='$urunid'")->fetch(PDO::FETCH_ASSOC);
if($sepeturunid['alode']=='1' and $_POST['adet']>=$sepeturunid['al'] ){
$sonadet = temizle($_POST['adet']);	
$alodedurum = "1";	
$yeniadet  = ($sonadet/$sepeturunid['al']);
$adet = ceil($yeniadet*$sepeturunid['ode']);
$alodedurum = "1";
$kazanc = $sonadet - $adet;
$alodemetin = "".$kazanc." ADET ÜRÜN HEDİYE";
$alodeadet = $kazanc;
} else { 
$adet  = temizle($_POST['adet']);
$alodedurum = "0";
$alodemetin = "";
$alodeadet = "";
}	

$stok = $sepeturunid['stok'];

if($system['sinirsizstok']!='1'){	
if($adet>$stok){	

echo '<script type="text/javascript">$(document).ready(function(){toastr["error"]("'.$sepeturunid['adi'].' isimli üründen en fazla '.$stok.' adet alabilirsiniz.", "Başarısız");});</script>';
   
	
} else {


        $sepguncelle = $ozy->prepare("update sepet set adet=?, alodedurum=?, alodemetin=?, alodeadet=? where id=?");
        $sepguncelle->execute(array($adet,$alodedurum,$alodemetin,$alodeadet,$sepetid));
        
		
		if ($sepguncelle) {

	    header("Location:".$url."/sepet/");
	 
		
		}

}





} else {	
	
	
		$sepguncelle = $ozy->prepare("update sepet set adet=?, alodedurum=?, alodemetin=?, alodeadet=? where id=?");
        $sepguncelle->execute(array($adet,$alodedurum,$alodemetin,$alodeadet,$sepetid));
        
		
		if ($sepguncelle) {

	     header("Location:".$url."/sepet/");
	 
		
		}
	
	
}	



 } 
 
 ?>

<?php 

if (isset($_POST['deletex'])) {

$sepetidm = temizle($_POST['sepetid']);

$silxy = $ozy->prepare("DELETE FROM sepet WHERE id=?");

$silxy->execute(array($sepetidm));

echo '<meta http-equiv="refresh" content="0; url='.$url.'/sepet/">'; 

}

?>

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
                  <div class="checkout-body-left">
                     <div class="accordion checkout-step" id="accordionExample">
                       
                        <div class="bg-white rounded shadow-sm mb-3 overflow-hidden">
                      
                           <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                              <div class="card-body p-0">
                                 <div class="cart-table">
                                    <div class="table-responsive">
                                       <table class="table cart_summary">
                                          <thead>
                                             <tr>
                                                <th>Resim</th>
                                                <th>Ürün</th>
                                                <th>Birim</th>
                                                <th>Adet</th>
                                                <th>Toplam</th>
                                             </tr>
                                          </thead>
                                          <tbody>
										  
								       <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
					  
										  
										  
										   <form action="" method="POST">  
                                             <tr>
                                                <td class="cart_product">
												<a href="urun/<?php echo $sepet['seo'];?>">
												<img class="img-fluid" src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="<?php echo $sepet['seo'];?>"></a></td>
                                                <td class="cart_description">
                                                   <h6 class="product-name"><a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?> </a></h6>
                                                   <p class="f-12 text-secondary mb-1 pt-1 pb-1"><?php echo $sepet['ekurun'];?></p>
                                                   <hr>
                                                 
                     <input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
					  <input type="hidden" name="sepetupdate" value="1"/>
					 <input type="hidden" name="urunid" value="<?php echo $sepet['urunid']; ?>"/>
					 <button name="deletex" type="submit" style="color: #f53434;
border: none;
background: none;" class="cart-product-remove">
					<i class="icofont-trash"></i> Ürünü Kaldır
					 </button>
										
                                                </td>
                                                <td>
                                                    <p class="f-14 mb-0 text-dark"><?php echo fiyatgoster($sepet['fiyat']);?></p>
                                                </td>
                                                <td class="qty">
                        <?php if($sepet['alodedurum']=='1'){?> 
						<?php $newstok = $sepet['adet']+$sepet['alodeadet'];?>
						<?php } else { ?>
						<?php $newstok = $sepet['adet'];?>
						<?php } ?>
			            <?php if($system['sinirsizstok']!='1'){	?>
			            <input class="submit_on_enter" type="text" data-type="number"  pattern="[0-9]*" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="<?php echo $sepet['stok'];?>"  size="2">
                        <?php } else { ?>
                        <input class="submit_on_enter" type="text" data-type="number"  pattern="[0-9]*" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="9999999999999999999">
                        <?php } ?>
												</td>
                                                <td class="price">
                                                   <p class="f-14 mb-0 text-dark" style="font-weight: 500;"><?php echo fiyatgoster($sepet['fiyat']*$sepet['adet']);?></p>
                                                </td>
                                             </tr>
                                            
											 </form>
											
									<?php }} ?> 				
											
                                          </tbody>
                                          <tfoot>
                                             <tr>
                                                <td>
                                                   <form class="form-inline float-right" method="POST" action="">
                                                      <div class="form-group">
                                                         <input type="text"  name="kuponadi" placeholder="İndirim Kuponu Kodunuz" class="form-control border-form-control form-control-sm">
                                                      </div>
                                                      &nbsp;
                                                      <button class="btn btn-outline-primary float-left btn-sm" name="kuponguncelle" type="submit">Uygula</button>
                                                   </form>
                                                </td>
                                                
												   <td colspan="4">
                                                   <form class="form-inline float-right" method="POST" action="">
                                                      <div class="form-group">
                                                        <select name="kuponadi" class="form-control border-form-control form-control-sm" style="background: #f9f9f9;margin-bottom: 10px;font-weight: 400;" onchange='this.form.submit()'>
											<option value="0">Aktif Hediye Çeklerim</option>
											<?php $uyeepostamiz = temizle($uyebilgileri['email']);
		                                    $cekoku = $ozy->query("select * from kuponlar where durum='1' and sekil='1' and epostalar like '%$uyeepostamiz%' and gtarih>='$buguntarihim' and kullanildi not like '%$uyeepostamiz%' order by id DESC")->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($cekoku as $hediyecek) {?>
											<option value="<?php echo $hediyecek['adi']?>"><?php echo $hediyecek['adi']?></option>
											<?php } ?>
				        					</select>
											
				        					<input type="hidden" name="cekguncelle">
                                                      </div>
                                                      &nbsp;
                                         
                                                   </form>
                                                </td>
                                             </tr>
											 
											 
											        
                                             
                                                
                                           
                                           
                                          </tfoot>
                                       </table>
                                    </div>
									<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
                                    <a style="height: 40px;" href="odeme/" class="btn btn-primary btn-lg btn-block text-left">
									<span class="float-left"><i class="icofont icofont-cart"></i>
										SEPETİ ONAYLA</span>
									<span class="float-right">
									<strong><?php echo $toplamtutari;?></strong> 
									<span class="icofont icofont-bubble-right">
									</span>
									</span>
									</a>
                                    <?php } else { ?>
									  <a style="height: 40px;" href="kontrol/" class="btn btn-primary btn-lg btn-block text-left">
									<span class="float-left"><i class="icofont icofont-cart"></i>
										SEPETİ ONAYLA</span>
									<span class="float-right">
									<strong><?php echo $toplamtutari;?></strong> 
									<span class="icofont icofont-bubble-right">
									</span>
									</span>
									</a>
								    <?php } ?>
								 </div>
                              </div>
                           </div>
                        </div>
                     
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="osahan-cart-item">
                    
                     <div class="mb-3 bg-white rounded shadow-sm p-3 clearfix">
                        <p class="mb-1">Ara Tutar : <span class="float-right text-dark"><?php echo $aratutari;?></span></p>
                        <p class="mb-1">Kdv : <span class="float-right text-dark"><?php echo $kdvtutari;?></span></p>
                        <p class="mb-1">Kargo : <span class="text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $kargometni;?>">
                           <i class="icofont-info-circle"></i>
                           </span> <span class="float-right text-dark"><?php echo $kargometni;?></span>
                        </p>
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
                        <h6 style="font-weight:500 !important;" class="font-weight-bold text-danger mb-0">ÖDENECEK TUTAR  <span class="float-right"><?php echo $toplamtutari;?></span></h6>
                     </div>
                  </div>
                 
               </div>
			   
			   
			   
			   
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
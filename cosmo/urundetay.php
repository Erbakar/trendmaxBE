<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE urunler SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>

<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM urunler WHERE seo=:id and durum=:durum");
$page = $sayfaqq->execute([':id' => $id,':durum' => $durum]);
$page = $sayfaqq->fetch(PDO::FETCH_ASSOC);

////////URUN FİYAT BELİRMELE ALANI///////

if($page['idurum']=='1'){								
if($page['kdv']>'0'){
$eskifiyat = fiyatgoster(KdvDahil($page['fiyat'],$page['kdv']));
$yenifiyat = fiyatgoster(KdvDahil($page['ifiyat'],$page['kdv']));
} else {
$eskifiyat = fiyatgoster(KdvDahil($page['fiyat'],$system['kdv']));
$yenifiyat = fiyatgoster(KdvDahil($page['ifiyat'],$system['kdv']));
}
} else {
if($page['kdv']>'0'){
$yenifiyat = fiyatgoster(KdvDahil($page['fiyat'],$page['kdv']));
} else { 
$yenifiyat = fiyatgoster(KdvDahil($page['fiyat'],$system['kdv']));
}} 

////////URUN FİYAT BELİRMELE ALANI///////									

?>
<?php if($page['seodurum']=='1'){?>
<title><?php echo $page['stitle']; ?></title>
<meta name="keywords" content="<?php echo $page['skey']; ?>">
<meta name="description" content="<?php echo $page['sdesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $ayar['stitle']; ?>"/>
<meta property="og:description" content="<?php echo $page['sdesc']; ?>"/>
<?php } else { ?>
<title><?php echo $page['adi']; ?></title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $page['adi']; ?>"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php } ?>

 <section class="py-2  inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-12">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="<?php echo $url;?>">
					 <span class="icofont icofont-ui-home"></span> Anasayfa</a>
					 
					
			<?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
			<span class="icofont icofont-thin-right"></span> <a href="kategori/<?php echo $ukat['seo'];?>"><?php echo $ukat['adi'];?></a>
			 <?php } ?>
					 <span class="icofont icofont-thin-right"></span>
					 <span><?php echo $page['adi']; ?></span>
					 
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-5 shop-single bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="shop-detail-left">
                     <div class="shop-detail-slider position-relative">
                        <div class="favourite-icon"> <a class="fav-btn" title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="59% OFF"><i class="icofont-ui-tag"></i></a>
                        </div>
                        <div id="sync1" class="border rounded shadow-sm bg-white mb-2 owl-carousel text-center">
                           
						   
						   <div class="item bg-w">
                              <img src="resimler/urunler/<?php echo $page['resim']?>" class="img-fluid img-center">
                           </div>
						   
						    <?php 
						$i =0;
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>
						   
						   <div class="item bg-w">
                              <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="img-fluid img-center">
                           </div>
                           <?php } ?>	 
                        </div>
                       
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="shop-detail-right">
                     <div class="border rounded shadow-sm bg-white p-4">
					   <form action="" method="POST" autocomplete="off">
                        <div class="product-name">
						
						<?php if($page['idurum']=='1'){?>
                           <p class="text-danger text-uppercase mb-0"> 
						   <i class="icofont-sale-discount"></i> - %<?php echo yuzdeHesaplama($page['fiyat'],$page['ifiyat']);?> İNDİRİMLİ</p>
						 <?php } ?>   
						   
                           <h2><?php echo $page['adi'];?></h2>
                           <span>Ürün Kodu: <b><?php echo $page['urunkodu'];?></b>
						   <?php if($page['ucretsizkargo']=='1'){?>
						   | <strong style="font-weight: 500;" class="text-info">ÜCRETSİZ KARGO</strong>
						  
						     <?php } ?>
							 <?php if($page['alode']=='1'){?>
						   | <strong style="font-weight: 500;" class="text-warning"><?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI</strong>
						  
						     <?php } ?>
						   </span>
                        </div>
                        <div class="price-box">
                           <h5>
						    <?php if($page['idurum']=='1'){?>
						   
                              <span class="product-desc-price"><?php echo $eskifiyat;?></span>
                              <span class="product-price text-danger"><?php echo $yenifiyat;?></span></br>
							  <?php }else{?>  
							  
                              <span class="product-price text-danger"><?php echo $yenifiyat;?></span></br>
							 
							  
							  <?php } ?>
							  <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
									<?php if($page['havaledurum']=='1'){?>	
                              <small class="text-success">İndirimli Havale Fiyatı : <?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$ekkdv));?></small>
							  <?php } ?>
							  
                           </h5>
                        </div>
                        <div class="ratings">
                           <div class="stars-rating"> 
					  <?php echo $page['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $page['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $page['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $page['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $page['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   




							
                             
							 <span class="rating-links float-right">
							 <a><?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum</a> 
							 <span class="separator"> </span> 
						
                              </span>
                           </div>
                        </div>
						
						
						<div class="clearfix"></div>
                        <div class="product-color-size-area mt-3">
                            <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
							<div <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
								<h5 style="font-size: 14px;
margin-bottom: 10px;">Renk Seçenekleri</h5>
								<div class="image_option_type form-group required" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
									<ul style="padding: 0px;list-style: none;
" class="product-options clearfix" id="input-option231">
									<?php 
										$sayfaidmiz = $page['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
										<li class="" style="float:left;margin-left:5px;">
											<a href="urun/<?php echo $varyantbak['seo'];?>">
												<img style="width: 40px;
height: 50px;" src="resimler/urunler/<?php echo $varyantbak['resim'];?>"  class="img-thumbnail icon icon-color">	
										</a>
										</li>
										<?php } ?>	
										
									
									</ul>
								</div>
								</div>
                        </div>
						
						
						
						<div class="clearfix"></div>
						
						 <?php 
									$urunid = $page['id'];
									$ozellik = $ozy->query("select * from anaozellik where tip='0' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellik as $anaozellik){?>  
                                    <div class="details-filter-row details-row-size">
                                        <label for="size" style="width: 100%;font-weight: 500;"><?php echo $anaozellik['adi'];?> :</label>
                                        <div class="select-custom" style="width: 100%;">
                                    <select class="form-control varyantselect" onchange="detayfiyathesapla(this);" name="ozellik[]" id="size"  required>
                                    <option data-price="0.00" value="">Seçim Yapınız</option>
									<?php 
									$altanaid = $anaozellik['id'];
									$ozellikalt = $ozy->query("select * from anaozellikalt where anaid='$altanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellikalt as $anaozellikalt){?> 		
                                    <option data-price="<?php echo KdvDahil($anaozellikalt['fiyat'],$ekkdv);?>" value="<?php echo $anaozellikalt['id'];?>" <?php echo $anaozellikalt['stok'] <= '0' ? 'disabled' : null; ?>><?php echo $anaozellikalt['adi'];?> <?php echo $anaozellikalt['stok'] <= '0' ? '(Tükendi)' : null; ?></option>
                                    <?php } ?>	  
                                    </select>
                                        </div><!-- End .select-custom -->

                                    </div><!-- End .details-filter-row -->
								
								   <?php } ?>	
								   
								   
                                    <?php 
									$urunid = $page['id'];
									$iozellik = $ozy->query("select * from anaozellik where tip='1' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellik as $ianaozellik){?>  
									
                                    <div class="details-filter-row details-row-size" style="background: #fbf8f8;padding: 10px;width: 100%;display: flex;">
                                    <label for="size" style="width: 100%;font-weight: 500;"><?php echo $ianaozellik['adi'];?> :</label>
									<?php 
									$ialtanaid = $ianaozellik['id'];
									$iozellikalt = $ozy->query("select * from anaozellikalt where anaid='$ialtanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellikalt as $ianaozellikalt){?>
			                        <label class="size-item">
				                    <input onclick="detayfiyathesapla(this);" data-price="<?php echo KdvDahil($ianaozellikalt['fiyat'],$ekkdv);?>" class="varyantradio form-control" type="radio" name="ozellik[]" level="2" <?php echo $ianaozellikalt['stok'] <= '0' ? 'disabled' : null; ?> value="<?php echo $ianaozellikalt['id'];?>" stocksize="<?php echo $ianaozellikalt['adi'];?>" available="1" required>
				                    <span <?php echo $ianaozellikalt['stok'] <= '0' ? 'style="border-color: #eee;
color: #3f3a3a;
background: #fbf8f8;"' : null; ?> class="size-slt-box" level="2" value="<?php echo $ianaozellikalt['id'];?>" name="ozellik[]"><?php echo $ianaozellikalt['adi'];?></span></label>
				                    <?php } ?>
                                    </div>
									 
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
						
						
						
						
						
                        <div class="product-variation">
                          
                              <div class="mt-1 pt-2 float-left mr-2">Adet :</div>
                              <div class="input-group quantity-input"> <span class="input-group-btn">
                                 
                                 <input type="text" value="1" name="adet" max="<?php echo $page['stok'];?>" min="1" class="text-center form-control border-form-control form-control-sm input-number"> <span class="input-group-btn">
                               
                              </div>
                              <span class="float-right">
							   <?php if($page['stok']>='1'){?>
                              <button type="submit" name="sepetle" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp; <i class="icofont icofont-shopping-cart"></i> Sepete Ekle &nbsp;&nbsp;&nbsp;</button>
                               <?php } else { ?>  
							    <button type="button" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp; <i class="icofont icofont-shopping-cart"></i> Tükendi &nbsp;&nbsp;&nbsp;</button>
                               
							   <?php } ?>
							   
							 
							  <button type="button"  onclick="location.href='?favoriekle=<?php echo $page['id']; ?>'"  class="btn btn-outline-primary btn-lg"><i class="icofont icofont-heart"></i></button>
							  <button type="button" onclick="location.href='?karsilastir=<?php echo $page['id']; ?>'"  class="btn btn-outline-primary btn-lg"><i class="icofont icofont-random"></i></button>
                             
							<?php if($system['whatsapal']=='1'){?>	
							   <button type="button" style="border: 1px solid green !important;
color: green !important;"  onclick="location.href='https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>'"  class="btn btn-outline-primary btn-lg"><i class="icofont icofont-whatsapp"></i></button>
                              <?php } ?>
							  <?php if($system['telefonal']=='1'){?>
							  <button type="button" style="border: 1px solid blue !important;
color: blue !important;" onclick="location.href='tel:<?php echo $ayar['ceptel']; ?>'"  class="btn btn-outline-primary btn-lg"><i class="icofont icofont-phone"></i></button>
							<?php } ?>
							  </span>
                         
                        </div>
						
						
						
						
						
						
                        <div class="short-description border-bottom">
                           <h6 class="mb-3">
  
                              <small class="float-right">Stok: 
							
							    <?php if($page['stok']>='1'){?>
								  <strong class="badge badge-danger">Stokta var</strong>
								<?php } else { ?>
								  <strong class="badge badge-warning">Tükendi</strong>
								<?php } ?></td>
							  </small>
                           </h6>
						   <?php echo $page['kisa'];?>
                        </div>
                        
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="det" class="pb-5 pt-0 shop-single-detail bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="rounded shadow-sm bg-white">
                     <ul class="nav nav-pills p-3" id="pills-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ürün Açıklaması</a>
                        </li>
           
                        <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ürün Yorumları</a>
                        </li>
						<li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">İade & Değişim Şartları</a>
                        </li>
                     </ul>
                     <div class="tab-content p-4 border-top" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                           <?php echo $page['aciklama'];?>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <?php echo $system['iade']; ?>	
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                           <div class="card-body p-0 reviews-card">
                            
							
							<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                              <div class="media">
                                <div class="media-body">
                                    <div class="mt-0 mb-1">
                                       <span class="h6 mr-2 font-weight-bold"><?php echo $blogyorum['adi']; ?></span> <span><i class="icofont-ui-calendar"></i> <?php echo $blogyorum['tarih']; ?></span>
                                       <div class="stars-rating float-right"> 
                                          
										<?php echo $blogyorum['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
                                       </div>
                                    </div>
                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                    
									         <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
									<div class="media mt-4">
                                      
                                       <div class="media-body">
                                          <div class="mt-0 mb-1">
                                             <span class="h6 mr-2 font-weight-bold"><?php echo $ayar['siteadi']; ?></span> <span><i class="icofont-ui-calendar"></i> Yanıtlandı</span>
                                             <div class="stars-rating float-right"> 	<?php echo $blogyorum['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
										<?php echo $blogyorum['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
                                       
                                             </div>
                                          </div>
                                          <p><?php echo $blogyorum['cevap']; ?></p>
                                       </div>
                                    </div>
									<?php } ?>
												
									
                                 </div>
                              </div>
                              
							  <?php } ?>
												
							  
							  
							  
                           </div>
                           <div class="p-4 bg-light rounded mt-4">
                              <h5 class="card-title mb-4">Yorum Yap</h5>
                              <form method="POST" action="">
                                 <div class="row">
                                    <div class="control-group form-group col-lg-4 col-md-4">
                                       <div class="controls">
                                          <label class="control-label" for="input-name">Adınız Soyadınız</label>
                    <input style="    max-width: 100%;" type="text" class="form-control" name="adi" required="" value="<?php echo $uyebilgileri['isim'];?>">
                 
                                       </div>
                                    </div>
                                    <div class="control-group form-group col-lg-4 col-md-4">
                                       <div class="controls">
                                        <label class="control-label" for="input-name">Eposta Adresiniz</label>
                      <input style="    max-width: 100%;" type="email" class="form-control" id="reply-email" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                   </div>
                                    </div>
                                    <div class="control-group form-group col-lg-4 col-md-4">
                                       <div class="controls">
                                          <label>Yıldız Sayısı <span class="text-danger">*</span></label>
                                          <select name="yildiz" class="form-control custom-select">
                                             <option>1 Yıldız</option>
                                             <option>2 Yıldız</option>
                                             <option>3 Yıldız</option>
                                             <option>4 Yıldız</option>
                                             <option>5 Yıldız</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                       <label>Yorumunuz <span class="text-danger">*</span></label>
                                       <textarea rows="3" cols="100" class="form-control" name="yorum" required></textarea>
                                    </div>
                                 </div>
                                 <div class="text-right">
                                    <button type="submit" name="urunyorum" class="btn btn-primary">Gönder</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="product-list pt-5 bg-light pb-4 pbc-5 border-top">
         <div class="container">
   
            <h4 class="mt-0 mb-3 text-dark">Benzer Ürünler</h4>
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-carousel-category owl-theme">
                     
                   <?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 12")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>

      <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon">
						 <a href="?favoriekle=<?php echo $katurunler['id']; ?>">
				         <i class="icofont icofont-heart"></i></a></span>
                        <a href="urun/<?php echo $katurunler['seo']; ?>">
				   <?php if($katurunler['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
					<?php } ?> 	 
					 
                     <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="card-img-top urunresim" alt="<?php echo $katurunler['adi']; ?>"></a>
					 <div class="card-body">
                     <h6 class="card-title mb-1"><?php echo $katurunler['adi']; ?></h6>
                     <div class="stars-rating">
					 
					  <?php echo $katurunler['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   
						  
						   

						   <span>
						              <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> 
						   </span>
                     </div>
                     <p class="mb-0 text-dark" style="  font-size: 15px;
  font-weight: 500;">
					
  					 <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>

					 
					 </p>
						
						</div>
                     </div>
                  </div>


		<?php } ?>	

				
				   
                  </div>
               </div>
            </div>
         </div>
      </section>
	   <style>
	.size-item {
 position:relative;
 margin-right:5px;
 margin-bottom:10px;
 cursor:pointer;
 -webkit-user-select:none;
 -moz-user-select:none;
 -ms-user-select:none;
 user-select:none;
 width: 10%;
float: left;
display: block;

}
.size-item .size-slt-box {

 position:relative;
 border:1px solid #fff;
 text-align:center;
 padding:8px 14px;
 color:#000;
 -webkit-box-shadow:0 0 2px 0 rgba(50,50,50,0);
 box-shadow:0 0 2px 0 rgba(50,50,50,0);
 background: white;
}
.size-item .size-slt-box .size-last {
 position:absolute;
 top:-7px;
 right:-5px;
 font-size:10px;
 line-height:12px;
 height:13px;
 font-weight:700;
 text-align:center;
 background:#e82222;
 padding:0 4px;
 color:#fff;
 border-radius:8px;
 display:block
}
.size-item input {
 position:absolute;
 opacity:0;
 cursor:pointer
}
.size-item input:checked~.size-slt-box {
 background: #ff6f38;
 color: white;
}
.size-item input[available="0"]~.size-slt-box {
 color:#a6a6a6;
 background:linear-gradient(to top right,#fff calc(50% - 1px),#d3d3d3,#fff calc(50% + 1px))
}
.size-item input:not([available="0"])~.size-slt-box:hover {
 background: #e1a635;
 color: #fff;
}
@media screen and (max-device-width: 480px) and (orientation: portrait){
.left-content-product .content-product-right .box-info-product .add-to-links ul li a {
  display: inline-block;
  padding: 10px 15px;
  font-size: 14px;
  color: #666;
  border: 1px solid #e6e6e6;
  cursor: pointer;
  width: 320px;
  margin-top: 10px;
  text-align: center;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px;
  width: 320px;
}


.anaresim {
  display: none !important;
 
}


}

.details-row-size {
margin-bottom:5px;
}
.rounded-sm, .rounded {
  border-radius: 2px !important;
  height: auto;
  object-fit: cover;
}
	</style>
     
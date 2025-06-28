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
	   
	

<section>


   <div class="container">
      <div class="row">
        
		  	<nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>
						
													
   <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
						<li class="breadcrumb-item"><a href="kategori/<?php echo $ukat['seo'];?>"><?php echo $ukat['adi'];?></a></li>
<?php } ?>

						
						
						
						
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page['adi'];?></li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <!-- End of Breadcrumb -->


		
		
		
         <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
            <div class="block-categories hidden-sm-down">
               <ul class="category-top-menu">
                  <li><a class="text-uppercase h6">Ürün Kategorilerimiz</a></li>
                  <li>
                     <ul class="category-sub-menu">
					 
					 
					 <?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
                    
					 
					 
					 
                        <li data-depth="0">
                           <a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                           <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar3"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div>
                           <div class="collapse" id="exCollapsingNavbar3">
                              <ul class="category-sub-menu">
                                 
							  <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	 
								 
								 <li data-depth="1">
                                    <a class="category-sub-link" href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar5<?php echo $katadi2['id']; ?>"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span>
                                    <div class="collapse" id="exCollapsingNavbar5<?php echo $katadi2['id']; ?>">
                                       <ul class="category-sub-menu">
									   
									   	<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                                          <li data-depth="2"><a class="category-sub-link" href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                         <?php } ?>	
										
										</ul>
                                    </div>
                                 </li>
                               <?php } ?>	
							  
							  
							  </ul>
                           </div>
                        </li>
                    
					  <?php } else { ?>		
					
                        <li data-depth="0"><a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a></li>
                        
						
					 <?php }} ?>		
						
						
                     
                     </ul>
                  </li>
               </ul>
            </div>
           
         </div>
         <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
            <section id="main" itemscope itemtype="https://schema.org/Product">
               <div class="laberProduct margin-bottom-30 padding-0-15">
                  <div class="row">
                     <div class="col-md-6">
                        <section class="page-content" id="content">
                           <!-- 
                              <ul class="product-flags">
                                                    <li class="product-flag new">New</li>
                                                </ul>
                              -->
                           <div class="images-container">
                              <div class="product-cover">
                                 <img class="js-qv-product-cover" src="resimler/urunler/<?php echo $page['resim']?>" alt="<?php echo $page['seo']?>" title="<?php echo $page['seo']?>" style="width:100%;" itemprop="image">
                                 <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                    <i class="material-icons zoom-in">&#xE8FF;</i>
                                 </div>
                              </div>
                              <div class="js-qv-mask mask">
                                 <ul class="product-images js-qv-product-images">
                                    <li class="thumb-container">
                                       <img
                                          class="thumb js-thumb  selected "
                                          data-image-medium-src="resimler/urunler/<?php echo $page['resim']?>"
                                          data-image-large-src="resimler/urunler/<?php echo $page['resim']?>"
                                          src="resimler/urunler/<?php echo $page['resim']?>"
                                          alt="ürün"
                                          title="ürün"
                                          width="100"
                                          itemprop="image"
                                          >
                                    </li>
									 <?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>
                                    <li class="thumb-container">
                                       <img
                                          class="thumb js-thumb "
                                          data-image-medium-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"
                                          data-image-large-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"
                                          src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"
                                          alt="ürün"
                                          title="ürün"
                                          width="100"
                                          itemprop="image"
                                          >
                                    </li>
								   <?php } ?>	
                                 </ul>
                              </div>
                           </div>
                           <div class="scroll-box-arrows">
                              <i class="icon-chevron-left left" aria-hidden="true"></i>
                              <i class="icon-chevron-right right" aria-hidden="true"></i>
                           </div>
                        </section>
                     </div>
                     <div class="col-md-6">
                        <div class="laberNextPrev pull-right">
                           <div class="labPrev_product nextPrevProduct pull-left">
                              <a href="resimler/urunler/<?php echo $page['resim']?>" class="button button_prev">
                              <i class="icon-chevron-left icon" aria-hidden="true"></i>
                              </a>
                              <div class="laberContent">
                              
                                 <a class="product-name" href="resimler/urunler/<?php echo $page['resim']?>" title="<?php echo $page['adi']?>">
                                 <img class="img-responsive"  src="resimler/urunler/<?php echo $page['resim']?>" itemprop="image" />
                                 </a>
                              </div>
                           </div>
						  				 <?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
						   
                           <div class="labNext_product nextPrevProduct pull-left">
                              <a  href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="button button_next">
                              <i class="icon-chevron-right icon" aria-hidden="true"></i>
                              </a>
                              <div class="laberContent">
                          
                                 <a class="product-img" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" title="<?php echo $page['adi']?>">
                                 <img class="img-responsive"  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" itemprop="image" />
                                 </a>
                              </div>
                           </div>
						   
						   <?php } ?>	 
						   
                        </div>
                        <h1 class="h1" itemprop="name"><?php echo $page['adi']?></h1>
						
                        <div class="comments_note">
                           <div class="star_content pull-left">
                                   <?php echo $page['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $page['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $page['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $page['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $page['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
                           </div>
                        </div>
						
							  <div style="margin-bottom:10px;">
							  <b>Ürün Kodu :</b> <?php echo $page['urunkodu'];?></br>
		   <b>Stok Durumu : </b>
						<?php if($page['stok']>='1'){?>	
						<span style="color:green;">Stokta var</span>
						<?php } else { ?>
						<span style="color:red;">Tükendi</span>
						<?php } ?>
						
		  </div>
		  
						
                        <div class="product-prices">
                           <div
                              class="product-price h5 "
                              itemprop="offers"
                              itemscope
                              itemtype="https://schema.org/Offer"
                              >
                        
                              <div class="current-price">
                              
							  
							             <div id="detayfiyat" data-price="<?php echo mb_substr($yenifiyat,0,-3);?>" class="product-price">
									<?php if($page['idurum']=='1'){?>	
								    <span style="font-size: 21px;text-decoration: line-through;" class="old-price"><?php echo $eskifiyat;?></span>&nbsp;&nbsp;
								    <span style="font-weight: 600;font-size: 24px;color: <?php echo $tema['t8']; ?>;margin: 0;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } else { ?>
									<span style="font-weight: 600;font-size: 24px;color: <?php echo $tema['t8']; ?>;margin: 0;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } ?>
                                    </div><!-- End .product-price -->
									
									
							  
                                    <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
                                     
				                   
							  
                              </div>
							 		<?php if($page['havaledurum']=='1'){?>	
									<div>
									<hr>
                                    <?php if($page['kdv']>='0'){?>	
								    <b style="font-weight:600;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$system['kdv']));?></span>
									<?php } else { ?>
									 <b style="font-weight:600;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$page['kdv']));?></span>
									<?php } ?>
									 </div>
									 	<hr>
                                    <?php } ?>	
							  
                           </div>
                           <div class="tax-shipping-delivery-label">
                           </div>
                        </div>
                        <div class="product-description-short" id="product-description-short-5" itemprop="description">
                          <?php echo $page['kisa'];?> 
                        </div>
                        <div class="product-information">
                           <div class="product-actions">
                             <form action="" method="POST">
        
		
		   <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
                    <div class="cl-product-colors" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
                     <hr>
					 <span></span>
                        <div class="cl-product-colors-images">
						     <div class="details-filter-row details-row-size" >
                                        <label>Renk: </label>

                                        <div class="product-nav product-nav-thumbs">
                                        <?php 
										$sayfaidmiz = $page['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
                                            <a href="urun/<?php echo $varyantbak['seo'];?>">
                                                <img style="border: 2px solid #f4f4f4;width: 50px !important;" class="lazyload"  data-src="resimler/urunler/<?php echo $varyantbak['resim'];?>">
                                            </a>
										<?php } ?>		
											
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .details-filter-row -->
                        </div>
                    </div>
					
					<div class="badges" style="margin-bottom: 10px;">
					<?php if($page['alode']=='1'){?> 
                    <span class="badge" style="border: 1px solid #d2ab13;padding: 5px;line-height: 20px !important;color: #d2ab13;">
					<i style="font-size: 18px;" class="icon-shopping-cart"></i> BU ÜRÜNDE <?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI</span>
                    <?php } ?>
					<?php if($page['ucretsizkargo']=='1'){?>
					<span class="badge" style="border: 1px solid #2cc43c;padding: 5px;line-height: 20px !important;color: #2cc43c;">
					<i style="font-size: 18px;" class="icon-truck"></i> BU ÜRÜNDE KARGO ÜCRETSİZ
					</span>
                    <?php } ?>
					</div>
										
									
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
									
									   <hr>
								   <?php } ?>	
								
								
			                    
	
			              
									

                                    <?php 
									$urunid = $page['id'];
									$iozellik = $ozy->query("select * from anaozellik where tip='1' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellik as $ianaozellik){?>  
									
                                    <div class="details-filter-row details-row-size" style="background: #fbf8f8;padding: 10px;width: 93%;">
                                    <label for="size" style="width: 100%;font-weight: 500;"><?php echo $ianaozellik['adi'];?> :</label>
									<?php 
									$ialtanaid = $ianaozellik['id'];
									$iozellikalt = $ozy->query("select * from anaozellikalt where anaid='$ialtanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellikalt as $ianaozellikalt){?>
			                        <label class="size-item">
				                    <input onclick="detayfiyathesapla(this);" data-price="<?php echo KdvDahil($ianaozellikalt['fiyat'],$ekkdv);?>" class="varyantradio" type="radio" name="ozellik[]" level="2" <?php echo $ianaozellikalt['stok'] <= '0' ? 'disabled' : null; ?> value="<?php echo $ianaozellikalt['id'];?>" stocksize="<?php echo $ianaozellikalt['adi'];?>" available="1" required>
				                    <span <?php echo $ianaozellikalt['stok'] <= '0' ? 'style="border-color: #eee;
color: #3f3a3a;
background: #fbf8f8;"' : null; ?> class="size-slt-box" level="2" value="<?php echo $ianaozellikalt['id'];?>" name="ozellik[]"><?php echo $ianaozellikalt['adi'];?></span></label>
				                    <?php } ?>
                                    </div>
									   <hr>
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
			   
		
		
		
		
		
		
		
                                 <div class="product-add-to-cart">
                                    <span class="control-label">Adet</span>
                                    <div class="product-quantity clearfix">
                                       <div class="qty">
                                        
											  <input  id="quantity_wanted" type="number" onchange="detayfiyathesapla(this);" class="cl-product-quantity-input" name="adet" style="display:block !important" value="1" min="1" max="<?php echo $page['stok'];?>" size="2" class="input-group" required> 
											 
											 
											 
											 
                                       </div>
                                       <div class="add">
									   <?php if($page['stok']>='1'){?>
									   
                                          <button
                                             class="btn btn-primary add-to-cart"
                                             type="submit" name="sepetle"
                                             >
                                          <i class="icon-handbag"></i>
                                        Sepete Ekle
                                          </button>
										 <?php } else { ?>  
										 
										      <button
                                             class="btn btn-primary add-to-cart"
                                             data-button-action="add-to-cart"
                                             type="button" style="background: #d50e0e;border: #d50e0e;" 
                                             >
                                          <i class="icon-handbag"></i>
                                        Tükendi
                                          </button>
						  
										    <?php } ?>
										  
										  
                                       </div>
									
									   
									   
                                    </div>
                                 </div>
								 
								    <div>
									   						 
										  
												  <?php if($system['telefonal']=='1'){?>
			  <a style="margin-top: 0px !important;width: 48%;margin-right: 10px !important;
float: left;margin: 0px;background: #474747 !important;
border: none !important;" target="_blank" href="tel:<?php echo $ayar['ceptel']; ?>" class="butonlar urunmobilbuton butonok btn btn-primary btn-lg"><span><i class="fa fa-phone"></i> Telefon İle Satın Al</span></a>
              <?php } ?>
			  <?php if($system['whatsapal']=='1'){?>
			  <a style="margin-top: 0px !important;width: 48%;
float: left;border: none !important;margin: 0px;margin-top:10px;background: green !important;" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="butonlar butonok btn btn-primary btn-lg"><span><i class="fab fa-whatsapp"></i> WhatsApp ile Satın Al</span></a>
              <?php } ?>  
								
									   </div>
                                 <div class="social-sharing">
								 
								 
								 
                                    <span>Paylaş</span>
                                    <ul>
                                       <li class="laberfacebook icon-gray">
                                          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="text-hide" title="Share" target="_blank">
                                          <i class="fab fa-facebook"></i>
                                          </a>
                                       </li>
                                       <li class="labertwitter icon-gray">
                                          <a href="https://twitter.com/intent/tweet?url=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="text-hide" title="Tweet" target="_blank">
                                          <i class="fab fa-twitter"></i>
                                          </a>
                                       </li>
                                       <li class="labergoogleplus icon-gray">
                                          <a href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text= Baksana ne buldum:) <?php echo $page['adi']; ?> <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="text-hide" title="Google+" target="_blank">
                                          <i class="fab fa-whatsapp"></i>
                                          </a>
                                       </li>
                                       <li class="laberpinterest icon-gray">
                                          <a href="https://plus.google.com/share?url=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="text-hide" title="Pinterest" target="_blank">
                                          <i class="fab fa-google-plus"></i>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                
                              </form>
                           </div>
                        
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tabs laberTabs padding-0-15">
                  <div class="nav nav-tabs">
                     <ul>
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#description">Ürün Açıklaması</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#product-details">Yorumlar</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#laberProductcomments">İade & Değişim Şartları</a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content" id="tab-content">
                     <div class="tab-pane fade in active" id="description">
                      
                         <?php echo $page['aciklama'];?>
						
                     </div>
                     <div class="tab-pane fade"
                        id="product-details"
                        data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;2&quot;,&quot;id_supplier&quot;:&quot;0&quot;,&quot;reference&quot;:&quot;demo_7&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;delivery_in_stock&quot;:null,&quot;delivery_out_stock&quot;:null,&quot;id_category_default&quot;:&quot;9&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:0,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;low_stock_threshold&quot;:null,&quot;low_stock_alert&quot;:&quot;0&quot;,&quot;price&quot;:&quot;$29.00&quot;,&quot;unity&quot;:null,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;301-category&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;19&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2020-04-30 06:21:30&quot;,&quot;date_upd&quot;:&quot;2020-07-27 12:20:02&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:null,&quot;meta_keywords&quot;:null,&quot;meta_title&quot;:null,&quot;link_rewrite&quot;:&quot;today-is-a-good-day-framed-poster&quot;,&quot;name&quot;:&quot;Amcrest Security Camera in White Color&quot;,&quot;description&quot;:&quot;&lt;h4&gt;The standard passage, used since the 1500s&lt;\/h4&gt;\r\n&lt;p&gt;Embodying the raw, wayward spirit of rock \u2018n\u2019 roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.&lt;\/p&gt;\r\n&lt;p&gt;Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.&lt;\/p&gt;\r\n&lt;h4&gt;Section 1.10.32 of \&quot;de Finibus Bonorum et Malorum\&quot;, written by Cicero in 45 BC&lt;\/h4&gt;\r\n&lt;p&gt;Sound of Marshall, unplugs the chords, and takes the show on the road.&lt;br \/&gt;Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.&lt;\/p&gt;\r\n&lt;p&gt;The FM radio is perhaps gone for good, the assumption apparently being that the jury has ruled in favor of streaming over the internet. The IR blaster is another feature due for retirement \u2013 the S6 had it, then the Note5 didn\u2019t, and now with the S7 the trend is clear.&lt;\/p&gt;\r\n&lt;p&gt;&lt;img src=\&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/img\/cms\/banner-detail.jpg\&quot; alt=\&quot;\&quot; width=\&quot;1570\&quot; height=\&quot;460\&quot; \/&gt;&lt;\/p&gt;\r\n&lt;h4&gt;Perfectly Done&lt;\/h4&gt;\r\n&lt;p&gt;Meanwhile, the IP68 water resistance has improved from the S5, allowing submersion of up to five feet for 30 minutes, plus there\u2019s no annoying flap covering the charging port&lt;\/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;No FM radio (except for T-Mobile units in the US, so far)&lt;\/li&gt;\r\n&lt;li&gt;No IR blaster&lt;\/li&gt;\r\n&lt;li&gt;No stereo speakers&lt;\/li&gt;\r\n&lt;\/ul&gt;\r\n&lt;p&gt;If you\u2019ve taken the phone for a plunge in the bath, you\u2019ll need to dry the charging port before plugging in. Samsung hasn\u2019t reinvented the wheel with the design of the Galaxy S7, but it didn\u2019t need to. The Gala S6 was an excellently styled device, and the S7 has managed to improve on that.&lt;\/p&gt;&quot;,&quot;description_short&quot;:&quot;&lt;ul&gt;\r\n&lt;li&gt;Soft interior to ensure Electronics and accessories protect&lt;\/li&gt;\r\n&lt;li&gt;Hand Strap For keeping your devices safe and handy&lt;\/li&gt;\r\n&lt;li&gt;Lightweight, Packed inclued: One Case&lt;\/li&gt;\r\n&lt;li&gt;Backed by 100% Money back Guarantee&lt;\/li&gt;\r\n&lt;\/ul&gt;&quot;,&quot;available_now&quot;:null,&quot;available_later&quot;:null,&quot;id&quot;:5,&quot;id_product&quot;:5,&quot;out_of_stock&quot;:2,&quot;new&quot;:1,&quot;id_product_attribute&quot;:19,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;category&quot;:&quot;furniture-decor&quot;,&quot;category_name&quot;:&quot;Furniture &amp; Decor&quot;,&quot;link&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/en\/furniture-decor\/5-today-is-a-good-day-framed-poster.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:29,&quot;price_without_reduction&quot;:29,&quot;reduction&quot;:0,&quot;specific_prices&quot;:false,&quot;quantity&quot;:300,&quot;quantity_all_versions&quot;:900,&quot;id_image&quot;:&quot;en-default&quot;,&quot;features&quot;:[{&quot;name&quot;:&quot;Composition&quot;,&quot;value&quot;:&quot;Matt paper&quot;,&quot;id_feature&quot;:&quot;1&quot;,&quot;position&quot;:&quot;0&quot;}],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;3&quot;:{&quot;id_attribute&quot;:&quot;19&quot;,&quot;id_attribute_group&quot;:&quot;3&quot;,&quot;name&quot;:&quot;40x60cm&quot;,&quot;group&quot;:&quot;Dimension&quot;,&quot;reference&quot;:&quot;demo_7&quot;,&quot;ean13&quot;:null,&quot;isbn&quot;:null,&quot;upc&quot;:null}},&quot;rate&quot;:0,&quot;tax_name&quot;:&quot;&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:&quot;&quot;,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;Items&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0,&quot;images&quot;:[{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-cart_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-small_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:190,&quot;height&quot;:190},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-home_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:410,&quot;height&quot;:410},&quot;home_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-home_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:410,&quot;height&quot;:487},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-medium_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:550},&quot;medium_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-medium_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:653},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-large_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;large_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-large_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:950}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-cart_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-medium_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:550},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-large_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:950},&quot;legend&quot;:null,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;50&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-cart_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-small_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:190,&quot;height&quot;:190},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-home_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:410,&quot;height&quot;:410},&quot;home_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-home_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:410,&quot;height&quot;:487},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-medium_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:550},&quot;medium_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-medium_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:653},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-large_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;large_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-large_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:950}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-cart_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-medium_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:550},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/51-large_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:950},&quot;legend&quot;:null,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;51&quot;,&quot;position&quot;:&quot;2&quot;,&quot;associatedVariants&quot;:[]}],&quot;cover&quot;:{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-cart_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-small_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:190,&quot;height&quot;:190},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-home_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:410,&quot;height&quot;:410},&quot;home_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-home_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:410,&quot;height&quot;:487},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-medium_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:550},&quot;medium_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-medium_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:653},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-large_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;large_default_fashion&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-large_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:950}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-cart_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-medium_default\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:550,&quot;height&quot;:550},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/laberpresta.com\/v17\/laber_ayo\/homepage2\/50-large_default_fashion\/today-is-a-good-day-framed-poster.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:950},&quot;legend&quot;:null,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;50&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[]},&quot;has_discount&quot;:false,&quot;discount_type&quot;:null,&quot;discount_percentage&quot;:null,&quot;discount_percentage_absolute&quot;:null,&quot;discount_amount&quot;:null,&quot;discount_amount_to_display&quot;:null,&quot;price_amount&quot;:29,&quot;unit_price_full&quot;:&quot;&quot;,&quot;show_availability&quot;:true,&quot;availability_date&quot;:null,&quot;availability_message&quot;:&quot;&quot;,&quot;availability&quot;:&quot;available&quot;}"
                        role="tabpanel"
                        >
                      
					  
			<?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
			
           		<div class="comments" style="border: 1px solid #dad8d8;margin-bottom:20px;
border-radius: 6px;
background: #fff;">
                    <?php if($urunyorumsayimis>'0'){?>
                      
                    <?php } else { ?>
					<h4 class="title">Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h4><!-- End .title -->
					<?php } ?>	

                                <ul>
								
								
				<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                                <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto" style="padding-left: 30px;padding-top: 34px;">
                                                
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                            
														  <div class="ratings-val" style="width:
											<?php echo $blogyorum['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '5' ? '100%' : null; ?>
											;"></div><!-- End .ratings-val -->
														
														<!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <span class="review-date"><?php echo $blogyorum['tarih']; ?></span>
                                           
   <h4><a style="color: black !important;"><?php echo $blogyorum['adi']; ?></a></h4>

                                                <div class="review-content">
                                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                                </div><!-- End .review-content -->

										   </div><!-- End .col -->
                                            <div class="col" style="padding: 16px;">
                                            
                                        <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
                                                <div class="review-action" style="padding: 20px;border: 1px solid #f1ecec;border-radius: 4px;">
                                                
												<div class="comment">
                                                    <figure class="comment-media">
                                                        <a href="<?php echo  $url;?>">
                                                            <img class="lazyload" style="width: 100px;"  src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="User name">
                                                        </a>
                                                    </figure>

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h4><?php echo $ayar['siteadi']; ?></h4>
                                                        </div><!-- End .comment-user -->

                                                        <div class="comment-content">
                                                            <p style="font-weight: 500 !important;"><?php echo $blogyorum['cevap']; ?></p>
                                                        </div><!-- End .comment-content -->
                                                    </div><!-- End .comment-body -->
                                                </div><!-- End .comment -->
												
												
												</div><!-- End .review-action -->
												
												<?php } ?>
												
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div> 

									
                       <?php } ?>
								 
								 
								 
								 
								 
								 
								 
								 
								 
                                </ul>
                            </div>
					
			   
			   
			   
			   
			   
			   
              <form class="form-horizontal" method="POST" action="">
                <div id="review"></div>
                <h2>Yorum Yap</h2>
				 <p class="title-desc" style="color: #d81818;border: 1px solid #d81818;padding: 10px;font-size: 14px;border-radius: 2px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.</p>
                  <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Adınız Soyadınız</label>
                    <input type="text" class="form-control" name="adi" required="" value="<?php echo $uyebilgileri['isim'];?>">
                  </div>
                     <div class="col-sm-12">
                    <label class="control-label" for="input-name">Eposta Adresiniz</label>
                      <input type="email" class="form-control" id="reply-email" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                  </div>
				  
				  
				</div>
				
             
              
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Yorumunuz</label>
                    <textarea name="yorum" rows="5" id="input-review" class="form-control" required></textarea>
                    <div class="help-block"><span class="text-danger">Not:</span> HTML'e dönüştürülmez!</div>
                  </div>
                </div>
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label">Oylama</label>
                    &nbsp;&nbsp;&nbsp; Kötü&nbsp;
                    <input type="radio" name="yildiz" value="1">
                    &nbsp;
                    <input type="radio" name="yildiz" value="2">
                    &nbsp;
                    <input type="radio" name="yildiz" value="3">
                    &nbsp;
                    <input type="radio" name="yildiz" value="4">
                    &nbsp;
                    <input type="radio" name="yildiz" value="5">
                    &nbsp;İyi</div>
                </div>
                   <div class="buttons clearfix">
				    <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
                  <div class="pull-right">
                    <button type="submit" name="urunyorum" id="button-review" class="butonok btn btn-primary">Gönder</button>
                  </div>
                </div>
                              </form>
					  
					  
					  
                     </div>
                     <div class="tab-pane fade in" id="laberProductcomments">
                   
                          <?php echo $system['iade']; ?>
                     </div>
                  </div>
               </div>
               <section class="padding-0-15 clearfix margin-bottom-60">
                  <div class="laberthemes">
                     <div class="Categoryproducts laberProductGrid">
                        <div class="title_block">
                           <h3>
                              <span class="strong">
                             Benzer
                              </span> <span>
                            Ürünler
                              </span>
                           </h3>
                        </div>
                        <div class="laberCate product_list">
                           <div class="row">
                              <div class="laberCategoryproducts">
                            
							
							
								<?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 6")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>


 <div class="item-inner ajax_block_product">
   <div class="item">
      <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope="" itemtype="http://schema.org/Product">
         <div class="laberProduct-container">
            <div class="laberProduct-image">
			
			
			
               <a href="urun/<?php echo $katurunler['seo']; ?>" class="thumbnail product-thumbnail">
               <span class="cover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410">
               </span>
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
			 <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
               <span class="hover_image">
               <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" width="410" height="410"> 
               </span>
			 <?php }?>    
			 <?php } else { ?>	
              <span class="hover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410"> 
               </span>
            <?php }?> 
			 
               </a>
			   
			   
               <ul class="laberProduct-flags">
			   <?php if($katurunler['idurum']=='1'){?>
                  <li class="laber-flag laber-discount"><span>-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span></li>
				<?php } ?> 
				<?php if($katurunler['yeni']=='1'){?>
                  <li class="laber-flag laber-new"><span>Yeni</span></li>
				  <?php } ?> 
               </ul>
               <div class="laberActions">
                  <div class="laberActions-i">
                     <div class="laberItem">
                        <div class="laberwishlist product-item-wishlist">
                           <a class="addToWishlist wishlistProd_2" title="Favorilerime Ekle" href="?favoriekle=<?php echo $katurunler['id']; ?>" rel="2">
                           <i class="icon-heart"></i> <span>Favorilerime Ekle</span>
                           </a>
                        </div>
                     </div>
                     <div class="laberItem">		
                        <a class="button-action" data-id-product="2" href="?karsilastir=<?php echo $katurunler['id']; ?>"  title="Karşılaştır">
                       <i class="icon-layers" aria-hidden="true"></i>
                        <i class="removeCompare icon-close"></i><span>Karşılaştır</span>
                        </a>
                     </div>
                     <div class="laberItem">
                        <a href="urun/<?php echo $katurunler['seo']; ?>" class="" title="İncele">
                        <i class="icon-eye"></i>
                        <span>İncele</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="laberCart">
                  
                     <button onclick="window.location.href='urun/<?php echo $katurunler['seo']; ?>'" class="laberBottom
                        ">
                     <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i>
                     <span>+ Sepete Ekle</span>
                
               </div>
            </div>
            <div class="laber-product-description">
               <h2 class="productName" itemprop="name"><a href="urun/<?php echo $katurunler['seo'];?>"><?php echo $katurunler['adi'];?></a></h2>
               <div class="comments_note">
                  <div class="star_content pull-left">
                                      <?php echo $katurunler['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
					 
					 
                  </div>
               </div>
			  <div class="manufacturer_name">
                  <span>Ürün Kodu:</span> <?php echo $katurunler['urunkodu'];?>
               </div>
			   
			   
			   
               <div class="laber-product-price-and-shipping has_discount">
                  <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               </div>
            
            </div>
         </div>
      </article>
   </div>
</div>
		
			<?php } ?>
											
							
                              </div>
                           </div>
                        </div>
                        <div class="owl-buttons">
                           <p class="owl-prev prevCategoryproducts"><i class="icon-arrow-left"></i></p>
                           <p class="owl-next nextCategoryproducts"><i class="icon-arrow-right"></i></p>
                        </div>
                     </div>
                  </div>
               </section>
               <script type="text/javascript">
                  $(document).ready(function() {
                  	var owl = $(".laberCategoryproducts");
                  	owl.owlCarousel({
                  		items : 5,
                  		itemsDesktop : [1199,3],
                  		itemsDesktopSmall : [991,2],
                  		itemsTablet: [767,2],
                  		itemsMobile : [480,1],
                  		rewindNav : false,
                  		autoPlay :  false,
                  		stopOnHover: false,
                  		pagination : false,
                  		addClassActive : true,
                  	});
                  	$(".nextCategoryproducts").click(function(){
                  	owl.trigger('owl.next');
                  	})
                  	$(".prevCategoryproducts").click(function(){
                  	owl.trigger('owl.prev');
                  	})
                  });
               </script>
               <div class="modal fade js-product-images-modal" id="product-modal">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-body">
                           <figure>
                              <img class="js-modal-product-cover product-cover-modal" width="800" src="resimler/urunler/<?php echo $page['resim']; ?>" alt="" title="" itemprop="image">
                            
                           </figure>
                           <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
                              <div class="js-modal-mask mask  nomargin ">
                                 <ul class="product-images js-modal-product-images">
                                    <li class="thumb-container">
                                       <img data-image-large-src="resimler/urunler/<?php echo $page['resim']; ?>" class="thumb js-modal-thumb" src="resimler/urunler/<?php echo $page['resim']; ?>" alt="" title="" width="550" itemprop="image">
                                    </li>
									    <?php 
					    $i= "1";
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
                                    <li class="thumb-container">
                                       <img data-image-large-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="thumb js-modal-thumb" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="" title="" width="550" itemprop="image">
                                    </li>
									
							 <?php }?>  		
									
                                 </ul>
                              </div>
                           </aside>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <footer class="page-footer">
                  <!-- Footer content -->
               </footer>
            </section>
         </div>
      </div>
   </div>
</section>
<style>
.badge {
  padding: 5px !important;
    padding-bottom: 5px;
  padding-bottom: 5px;
  padding-bottom: 6px !important;
  background: white !important;
  border-radius: 0px !important;
  font-size: 9px;
  margin-top: 8%;
  display: block;
  width: 50%;
  text-align: center;
  font-weight: bold;
}
</style>



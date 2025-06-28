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
	   
<main class="main">
          

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
						   <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
						 <li><a href="kategori/<?php echo $ukat['seo']; ?>"><?php echo $ukat['adi']; ?></a></li>
			            <?php } ?>	
                        <li><?php echo $page['adi'];?></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
			
			
				 </div>
             
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content">
                            <div class="product product-single row">
                                <div class="col-md-6 mb-6">
                                    <div class="product-gallery product-gallery-sticky">
                                        <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                            <figure class="product-image">
											<a href="resimler/urunler/<?php echo $page['resim']; ?>" data-lightbox="image-1">
                                                <img src="resimler/urunler/<?php echo $page['resim']?>" data-zoom-image="resimler/urunler/<?php echo $page['resim']?>" alt="ürün" width="800" height="900">
                                           </a>
										   </figure>
											 <?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
                                            <figure class="product-image">
												<a href="resimler/genel/<?php echo $genelresim['sayfaresim']; ?>" data-lightbox="image-1">
                                                <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-zoom-image="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="ürün" width="488" height="549">
                                           </a>
										   </figure>
                                            <?php } ?>
                                        </div>
                                        <div class="product-thumbs-wrap">
                                            <div class="product-thumbs row cols-4 gutter-sm">
                                                <div class="product-thumb active">
                                                    <img src="resimler/urunler/<?php echo $page['resim']?>" alt="Product Thumb" width="800" height="900">
                                                </div>
											 <?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 	
												
                                                <div class="product-thumb">
                                                    <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="Product Thumb" width="800" height="900">
                                                </div>
                                               <?php } ?>
                                            </div>
                                            <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                                            <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 mb-md-6">
                                    <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                        <h2 class="product-title"><?php echo $page['adi'];?></h2>
                                        <div class="product-bm-wrapper">
										<?php 
										$markaid = $page['marka'];
										$mmmm = $ozy->query("select * from markalar where durum='1' and id='$markaid' ORDER BY id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($mmmm as $markamm){?>  
                                            <figure class="brand">
                                                <img src="resimler/markalar/<?php echo $markamm['resim'];?>" alt="Brand" style="width: 102px;height: 48px;" width="102" height="48">
                                            </figure>
											 <?php } ?>
                                            <div class="product-meta">
                                                <div class="product-categories">
                                                    Kategori:
                                                    <span class="product-category"><a href="kategori/<?php echo $ukat['seo']; ?>"><?php echo $ukat['adi']; ?></a></span>
                                                </div>
                                                <div class="product-sku">
                                                    Ürün Kodu: <span><?php echo $page['urunkodu']; ?></span>
                                                </div>
												
												  <div class="product-sku" style="margin-top: 10px;">
                                                    Stok: <span>	<?php if($page['stok']>='1'){?>	
						<span style="color:green;">Stokta var</span>
						<?php } else { ?>
						<span style="color:red;">Tükendi</span>
						<?php } ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="product-divider">

                                        <div class="product-price">
										
									<div id="detayfiyat" data-price="<?php echo mb_substr($yenifiyat,0,-3);?>" class="product-price">
									<?php if($page['idurum']=='1'){?>	
								    <span class="old-price"><?php echo $eskifiyat;?></span>&nbsp;&nbsp;
								    <span  id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } else { ?>
									<span  id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } ?>
                                    </div><!-- End .product-price -->
									
									<?php if($page['havaledurum']=='1'){?>	
									<hr>
                                    <?php if($page['kdv']>='0'){?>	
								    <b style="font-weight:600;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$system['kdv']));?></span>
									<?php } else { ?>
									 <b style="font-weight:600;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$page['kdv']));?></span>
									<?php } ?>
                                    <?php } ?>


                    		
                                    <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
                                     
				
            
           
	                                        		<hr>
										
										
										
										</div>

                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                               <span class="ratings" style="width:
													<?php echo $page['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $page['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $page['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $page['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $page['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#product-tab-reviews" class="rating-reviews scroll-to">(<?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                        <?php echo $urunyorumsayimis;?> Yorum)</a>
                                        </div>

                                        <div class="product-short-desc">
                                            <ul class="list-type-check list-style-none">
                                                <?php echo $page['kisa'];?>
                                            </ul>
                                        </div>

                                        <hr class="product-divider">
                                       <form action="" method="POST">
									   
                                       <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
                                        <div class="product-form product-variation product-color" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>> 
                                            <label>Renk:</label>
                                            <div class="d-flex align-items-center product">
                                                       <?php 
										$sayfaidmiz = $page['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
                                                <a href="urun/<?php echo $varyantbak['seo'];?>" style="margin-right: 4px !important;background:('resimler/urunler/<?php echo $varyantbak['resim'];?>')">
												
												<img style="width: 30px;height: 35px;" src="resimler/urunler/<?php echo $varyantbak['resim'];?>"></img>
												</a>
                                              <?php } ?>	
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
                                    <option data-price="0.00" value="0">Seçim Yapınız</option>
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
				                    <span <?php echo $ianaozellikalt['stok'] <= '0' ? 'style="   border-color: #eee;color: #ccc;background: linear-gradient(to top, #e6e6e6 0px, #fff 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);"' : null; ?> class="size-slt-box" level="2" value="<?php echo $ianaozellikalt['id'];?>" name="ozellik[]"><?php echo $ianaozellikalt['adi'];?></span></label>
				                    <?php } ?>
                                    </div>
									
			                        <hr>
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
			   
			   
			   
			   

                                        <div class="fix-bottom product-sticky-content sticky-content">
                                            <div class="product-form container">
                                                <div class="product-quantity">
       <input type='button' value='-' class='qtyminus' field='adet' style="font-weight: bold;" />
    <input type='text' name='adet' value='1' class='qty' style="margin-bottom: 0px !important"/>
    <input type='button' value='+' class='qtyplus' field='adet' style="font-weight: bold;" />
     </div> 
	 
	 <script>
	 
	 </script>
	 
  
  
                                               <?php if($page['stok']>='1'){?>	
                                                <input type="submit" name="sepetle" class="butonok urunbotun btn-primary" value="Sepete Ekle">
                                                   
                                               
												 <?php } else { ?>
												<input class="butonok urunbotun btn-primary">
                                                    <i class="w-icon-cart"></i>
                                                    <span>Tükendi</span>
                                         
												<?php } ?>
												
												
												
												
                                            </div>
											
											  <?php if($system['telefonal']=='1'){?>
			  <a style="width: 100%;
margin: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
padding: 0px !important;
line-height: 36px;
background: red !important;
font-family: Poppins !important;
font-size: 13px !important;
margin-bottom: 0px !important;
border-radius: 2px !important;text-transform: capitalize;" target="_blank" href="tel:<?php echo $ayar['ceptel']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span><i class="w-icon-phone"></i> Telefon İle Satın Al</span></a>
              <?php } ?>
			  <?php if($system['whatsapal']=='1'){?>
			  <a style="width: 100%;
margin: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
padding: 0px !important;
line-height: 36px;
background: #0fb338  !important;
font-family: Poppins !important;
font-size: 13px !important;
margin-bottom: 0px !important;
border-radius: 2px !important;text-transform: capitalize;" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span><i class="w-icon-whatsapp"></i> WhatsApp ile Satın Al</span></a>
              <?php } ?>
											
											
                                        </div>
					
                                         </form>
                                        <div class="social-links-wrapper">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                              		   <a class="social-icon social-facebook w-icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="social-icon" title="Facebook" target="_blank"></a>
                                            <a class="social-icon social-twitter w-icon-twitter"  href="https://twitter.com/intent/tweet?url=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="social-icon" title="Twitter" target="_blank"></a>
                                            <a class="social-icon social-whatsapp fab fa-whatsapp"  href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text= Baksana ne buldum:) <?php echo $page['adi']; ?> <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="social-icon" title="WhatsApp" target="_blank"></a>
											<a class="social-icon social-google w-icon-google" href="https://plus.google.com/share?url=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="social-icon" title="Google Plus" target="_blank"></a>
                                         </div>
                                            </div>
                                            <span class="divider d-xs-show"></span>
                                            <div class="product-link-wrapper d-flex">
                                                <a href="?favoriekle=<?php echo $page['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                    <a href="?karsilastir=<?php echo $page['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#product-tab-description" class="nav-link active">Ürün Detayı</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#product-tab-specification" class="nav-link">İade & Değişim Şartları</a>
                                    </li>
                           
                                    <li class="nav-item">
                                        <a href="#product-tab-reviews" class="nav-link">Ürün Değerlendirmesi (<?php echo $urunyorumsayimis;?>)</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-tab-description">
                                  <?php echo $page['aciklama'];?>
                                    </div>
                                    <div class="tab-pane" id="product-tab-specification">
                                  <?php echo $system['iade']; ?>
                                    </div>
                                
                                    <div class="tab-pane" id="product-tab-reviews" style="border: 1px solid #ddd8d8;
padding: 15px;">
                               	   
			       		<div class="comments">
                    <?php if($urunyorumsayimis>'0'){?>
                      
                    <?php } else { ?>
					<h5>Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h5><!-- End .title -->
					<?php } ?>	

                                <ul>
								
								
				<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                                <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto" style="border: 1px solid #f6f3f3;padding: 18px">
                                                
                                            
                                                <span class="review-date" style="">
												
													  <div class="ratings" style="margin-left: 4%;width:
											<?php echo $blogyorum['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $blogyorum['yildiz'] == '5' ? '100%' : null; ?>
											;"></div>
												
												
												
												<?php echo $blogyorum['tarih']; ?></span>
                                           
   <h4><a><?php echo $blogyorum['adi']; ?></a></h4>

                                                <div class="review-content">
                                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                                </div><!-- End .review-content -->

										   </div><!-- End .col -->
                                            <div class="col">
                                            
                                        <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
                                                <div class="review-action" style="padding: 20px;border: 1px solid #f1ecec;border-radius: 4px;">
                                                
												<div class="comment">
                                                    <figure class="comment-media">
                                                        <a href="<?php echo  $url;?>">
                                                            <img class="lazyload" style="width: 120px;"  data-src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="User name">
                                                        </a>
                                                    </figure>

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h5><?php echo $ayar['siteadi']; ?></h5>
															</br>
															<?php echo $blogyorum['cevap']; ?>
                                                        </div><!-- End .comment-user -->

                                                      
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
                <h4>Yorum Yap</h4>
				 <p class="title-desc" style="color: #d81818;border: 1px solid #f4f3f3;padding: 10px;font-size: 14px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.</p>
                  <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Adınız Soyadınız</label>
                    <input style="    max-width: 100%;" type="text" class="form-control" name="adi" required="" value="<?php echo $uyebilgileri['isim'];?>">
                  </div>
                     <div class="col-sm-12">
                    <label class="control-label" for="input-name">Eposta Adresiniz</label>
                      <input style="    max-width: 100%;" type="email" class="form-control" id="reply-email" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                  </div>
				  
				  
				</div>
				
             
              
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Yorumunuz</label>
                    <textarea style="    max-width: 100%;" name="yorum" rows="5" id="input-review" class="form-control" required></textarea>
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
                                </div>
                            </div>
                       
                         
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                            <div class="sidebar-content scrollable">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-icon-box mb-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-truck"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Ücretsiz Kargo İmkanı</h4>
                                                <p><?php echo $system['ucretsizkargo']; ?> TL ve üzeri</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-bag"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Güvenli Alışveriş</h4>
                                                <p>256 Bit SSL Şifreleme</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-money"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Para İadesi Garantili</h4>
                                                <p>14 Gün Kolay İade</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Icon Box -->

                               

                                    <div class="widget widget-products">
                                       
                                                   <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2" style="padding-left:10px;">Trend Ürünler</h4>
                                <div class="owl-carousel owl-theme owl-nav-top row cols-lg-1 cols-md-3" data-owl-options="{
                                    'nav': true,
                                    'dots': false,
                                    'margin': 20,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3
                                        },
                                        '992': {
                                            'items': 1
                                        }
                                    }
                                }">
                                    <div class="product-widget-wrap">
                                      
							<?php $ukkz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 8")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>

									  
                                        <div class="product product-widget bb-no" style="border:none !important;">
                                            <figure class="product-media">
                                                <a href="urun/<?php echo $sizinicin['seo']; ?>">
                                                    <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="Product" style="width: 105px;height: 118px;">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:  <?php echo $sizinicin['yildiz'] == '1' ? '20%' : null; ?>	
							   <?php echo $sizinicin['yildiz'] == '2' ? '40%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '3' ? '60%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '4' ? '80%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>          
							   
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
										
										
                                      
                                    </div>
                                    <div class="product-widget-wrap">
                                 			<?php $ukkz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 4,4")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>

									  
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="urun/<?php echo $sizinicin['seo']; ?>">
                                                    <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="Product" style="width: 105px;height: 118px;">
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:  <?php echo $sizinicin['yildiz'] == '1' ? '20%' : null; ?>	
							   <?php echo $sizinicin['yildiz'] == '2' ? '40%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '3' ? '60%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '4' ? '80%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>          
							   
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
                                    </div>
                                    <div class="product-widget-wrap">
                                           			<?php $ukkz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 8,4")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>

									  
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="urun/<?php echo $sizinicin['seo']; ?>">
                                                    <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="Product" style="width: 105px;height: 118px;">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:  <?php echo $sizinicin['yildiz'] == '1' ? '20%' : null; ?>	
							   <?php echo $sizinicin['yildiz'] == '2' ? '40%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '3' ? '60%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '4' ? '80%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>          
							   
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
                                    </div>
                                </div>
                            </div>

                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
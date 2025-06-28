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
	<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="<?php echo $url;?>" title="Anasayfa" itemprop="url">
									<span itemprop="title">Anasayfa</span></a>
									</span>
									<span class="arrow-space">></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
												   <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); foreach($kat as $ukat){?>
                               
										<a href="kategori/<?php echo $ukat['seo']; ?>" title="All Products" itemprop="url">
										<span itemprop="title"><?php echo $ukat['adi']; ?></span></a>
									    <?php } ?>
									</span>
						
                            
									
									
									<span class="arrow-space">></span>
									<strong><?php echo $page['adi'];?></strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="product-detail-content">
				<div class="detail-content-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-product-template" class="shopify-section">
								<div class="detail-content-inner" itemscope="" itemtype="http://schema.org/<?php echo $page['adi'];?>">
									<meta itemprop="name" content="<?php echo $page['adi'];?>">
									<meta itemprop="url" content="<?php echo $url;?>/urun/<?php echo $page['seo'];?>">
									<meta itemprop="image" content="resimler/urunler/<?php echo $page['resim'];?>">
									<div id="product" class="neque-porro-quisquam-est-qui-dolor-ipsum-quia-9 detail-content">
										<div class="col-md-12 info-detail-pro clearfix">
												<div class="col-md-5" id="product-image">
												<div class="show-image-load" style="display: none;">
													<div class="show-image-load-inner">
														<i class="fa fa-spinner fa-pulse fa-2x"></i>
													</div>
												</div>
												<div id="featuted-image" class="image featured">
													<div class="image-item">
														<a href="resimler/urunler/<?php echo $page['resim']; ?>" class="thumbnail" data-lightbox="image-1"> 
															<img src="resimler/urunler/<?php echo $page['resim']; ?>">
														</a>
														
													</div>
													
														               <?php 
					    $i= "1";
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
													<div class="image-item">
														<a href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="thumbnail" data-lightbox="image-1"> 
															<img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">
														</a>
													
													</div>
													<?php } ?>
													
												</div>
											</div>
											<div class="col-md-7" id="product-information">
												<h1 itemprop="name" class="title"><?php echo $page['adi'];?></h1>
												<div class="product-price">
														     <div id="detayfiyat" data-price="<?php echo mb_substr($yenifiyat,0,-3);?>" class="product-price">
									<?php if($page['idurum']=='1'){?>	
								    <span style="font-size: 20px;text-decoration: line-through;" class="old-price"><?php echo $eskifiyat;?></span>&nbsp;&nbsp;
								    <span  style="font-size: 24px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } else { ?>
									<span style="font-size: 24px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } ?>
                                    </div><!-- End .product-price --></div>
										<?php if($page['havaledurum']=='1'){?>	
								
                                    <?php if($page['kdv']>='0'){?>	
								    <div class="alert-message"> <b style="font-size: 16px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$system['kdv']));?></span>
									</div><?php } else { ?>
									 <div class="alert-message"> <b style="font-size: 16px;
margin-bottom: .625rem;
color: var(--color-price);
font-weight: 500;">Havale Fiyatı :</b> <span style="font-weight: 500;font-size: 18px;margin: 0;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$page['kdv']));?></span>
									</div><?php } ?>
                                    <?php } ?>
												<div class="description" itemprop="description">
													<?php echo $page['kisa'];?>
												</div>
												<form action="" method="POST" enctype="multipart/form-data">
													<div class="product-options " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
													
														<div class="vendor-type">
														<span class="product_type">Stok :<span class="_title"></span><?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
                                     
                                          
											<?php if($page['stok']=='0'){?>
											<span class="product-available outof-stock">Tükendi</span>
											<?php } else { ?>
											<span class="product-available in-stock">Stokta Var</span>
											<?php } ?>	 </span>/
															<span class="product_vendor"><span class="_title">Markası:</span>   <?php 
										$markaid = $page['marka'];
										$mmmm = $ozy->query("select * from markalar where durum='1' and id='$markaid' ORDER BY id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); foreach($mmmm as $markamm){?>

                                                    <?php echo $markamm['adi'];?>

                                                    <?php } ?></span>/
															
															<span class="product_sku"><span class="_title">Ürün Kodu: </span><?php echo $page['urunkodu'];?></span>
														</div>
														<div class="rating-star">
															<span class="spr-badge" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
															   <?php echo $page['yildiz'] == '1' ? '<i class="spr-icon spr-icon-star" style=""></i>' : null; ?>
			<?php echo $page['yildiz'] == '2' ? '<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>' : null; ?>
			<?php echo $page['yildiz'] == '3' ? '<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>' : null; ?>
			<?php echo $page['yildiz'] == '4' ? '<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>' : null; ?>
			<?php echo $page['yildiz'] == '5' ? '<i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i>' : null; ?>
														
															</span><span class="spr-badge-caption"> <?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum</span>
															</span>
														</div>
														<div class="product-type">
														   <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
                                        <div class="product-form product-variation product-color" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>> 
                                            <label style="font-weight:bold;">Renk:</label>
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
									
									</br>
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
									
			   
														</div>
														
														<div class="purchase-section multiple">
															<div class="quantity-wrapper clearfix">
																<div class="wrapper">
																	<input onchange="detayfiyathesapla(this);" class="adetsayisi form-control" type="text" name="adet" value="1" maxlength="5" size="5" class="item-quantity">
																</div>
															</div>
															<div class="purchase">
															<?php if($page['stok']>='1'){?>
																<button class="btn add-to-cart" type="submit" style="height: 50px;" name="sepetle"><i class="fa fa-shopping-bag"></i>Sepete Ekle</button>
															<?php } else { ?>
																 <input type="btn add-to-cart"  value="Tükendi" style="height: 50px;" class="btn btn-checkout "/>
															<?php } ?>
															</div>
														</div>
													</div>
												</form>
												
													<a style="background: #f5f5f5;
height: 50px;
padding: 19px;
position: absolute;
line-height: 15px;" href="?favoriekle=<?php echo $katurunler['id']; ?>"><i class="fa fa-heart"></i> Favorilerime Ekle<a>
												
											
													<a style="background: #f5f5f5;
height: 50px;
padding: 19px;
position: absolute;
line-height: 15px;margin-left: 26%;" href="?karsilastir=<?php echo $katurunler['id']; ?>"><i class="fa fa-retweet"></i> Karşılaştır </a>
												
												<div class="supports-fontface">
													<div class="social-sharing is-clean">
													<?php if($system['telefonal']=='1'){?>
													<a style="width: 33%;min-height: 50px !important;
-webkit-box-pack: center;
justify-content: center;
padding-left: .75rem;
padding-right: .75rem;
border: 1px solid var(--color-border-dark);
background: #8d77f2 !important;
color: #fff;
margin-bottom: 2px !important;
font-size: 16px; text-transform: capitalize;" target="_blank" href="tel:<?php echo $ayar['ceptel']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span> Telefon İle Satın Al</span></a>
              <?php } ?>
			  <?php if($system['whatsapal']=='1'){?>
			  <a style="width: 33%;min-height: 50px !important;
-webkit-box-pack: center;
justify-content: center;
padding-left: .75rem;
padding-right: .75rem;
background: #38dd61 !important;
color: #fff;
border-radius: 6px !important;
margin-bottom: 2px !important;
font-size: 16px; text-transform: capitalize;" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span> WhatsApp ile Satın Al</span></a>
              <?php } ?>
													</div>
												</div>
											</div>
										</div>
										<div id="tabs-information" class="col-md-12">
											<div class="information_content panel panel-default">
												<div class="panel-heading" role="tab" id="heading_des">
													<h4 class="panel-title" data-toggle="collapse" href="#collapse_des" aria-expanded="true" aria-controls="collapse_des">
														Ürün Detayı
														<i class="fa-icon fa fa-angle-up"></i>
													</h4>
												</div>
												<div id="collapse_des" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_des">
													<div class="panel-body">
														
					   <?php echo $page['aciklama'];?>
					   </div>
												</div>
											</div>
											
											<div class="information_content panel panel-default">
												<div class="panel-heading" role="tab" id="heading_review">
													<h4 class="panel-title" data-toggle="collapse" href="#collapse_review" aria-expanded="true" aria-controls="collapse_review">
														Ürün Değerlendirmesi (<?php echo $urunyorumsayimis;?>)
														<i class="fa-icon fa fa-angle-up"></i>
													</h4>
												</div>
												<div id="collapse_review" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_review">
													<div class="panel-body">
												                
									      		<div class="comments">
                    <?php if($urunyorumsayimis>'0'){?>
                      
                    <?php } else { ?>
					<h5>Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h5><!-- End .title -->
					<?php } ?>	

                                <ul style="padding: 0px !important;">
								
								
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
                                           
   <h6><a><?php echo $blogyorum['adi']; ?></a></h6>

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
                                                            <img class="lazyload" style="width: 120px;"  src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="User name">
                                                        </a>
                                                    </figure>

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h6><?php echo $ayar['siteadi']; ?></h6>
														
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
					
			   
			   <style>
			   body .panel-default > .panel-heading + .panel-collapse > .panel-body * {
    font-size: 12px;
    text-align: left;
}
			   </style>
			     
              <form class="form-horizontal" method="POST" action="">
                <div id="review"></div>
                
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

                                    <div class="clear"></div>
													</div>
												</div>
											</div>
											<script>
												$(".information_content .panel-title").click(function() {
													if ($(this).find("i").hasClass("fa-angle-up")) {
														$(this).find("i").removeClass("fa-angle-up");
														$(this).find("i").addClass("fa-angle-down");
													} else {
														$(this).find("i").removeClass("fa-angle-down");
														$(this).find("i").addClass("fa-angle-up");
													}
												});
											</script>
											
											<div class="information_content panel panel-default">
												<div class="panel-heading" role="tab" id="heading_tags">
													<h4 class="panel-title" data-toggle="collapse" href="#collapse_tags" aria-expanded="true" aria-controls="collapse_tags">
														İade & Değişim Şartları
														<i class="fa-icon fa fa-angle-up"></i>
													</h4>
												</div>
												<div id="collapse_tags" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_tags">
													<div class="panel-body">
														<div class="relative product-detail-tag">
														 <?php echo $system['iade']; ?>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<div class="related-products col-sm-12">
											<div class="collection-title home-title page-title"><span>Benzer Ürünler</span></div>
											<div class="group-related">
												<div class="group-related-inner">
													<div class="rp-slider">
												
												<?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 6")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>
												
														<div class="content_product">
															<div class="row-container product list-unstyled clearfix">
																			<div class="row-left">
														<a href="urun/<?php echo $katurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($katurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $katurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $katurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $katurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>

																<div class="row-right animMix">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
																		</div>
																	</div>
															</div>
														</div>
														
														
																<?php } ?>
														
													</div>
												</div>
											</div>
											<!--END -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
							function active_review_form(){
								if($("#form_6537875078").attr('style')=='display: none;'){
									$("#form_6537875078").css('display','block');
								}
								else {
									$("#form_6537875078").css('display','none');
								}
							}
							jQuery(document).ready(function($){
								$('#gallery-images div.image').on('click', function() {
									var $this = $(this);
									var parent = $this.parents('#gallery-images');
									parent.find('.image').removeClass('active');
									$this.addClass('active');
								});
							});
						</script>
					</div>
				</div>
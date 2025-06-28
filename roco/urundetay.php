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
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			            <?php 
						$kategori_ids = explode(',', $page['kategori']);
						foreach ($kategori_ids as $number) {
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$number'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
			<li><a href="kategori/<?php echo $ukat['seo'];?>"><?php echo $ukat['adi'];?></a></li>
			 <?php }} ?>
			<li><a><?php echo $page['adi']; ?></a></li>
			
		</ul>
		
		<div class="row">
	
		

			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				
				<div class="product-view row">
					<div class="left-content-product">
				
						<div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
							
							<a class="anaresim" data-lightbox="image-1"  href="resimler/urunler/<?php echo $page['resim']?>" >
								
								<img itemprop="image" src="resimler/urunler/<?php echo $page['resim']?>">
							</a>
							
							<style>
							.zoomWindow{
							background:none !important;	
								
							}
							</style>
						
							
							<div  class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
								<a data-lightbox="image-1" data-index="0" class="img thumbnail " href="resimler/urunler/<?php echo $page['resim']?>" data-image="resimler/urunler/<?php echo $page['resim']?>" title="<?php echo $page['seo']?>">
									<img src="resimler/urunler/<?php echo $page['resim']?>" title="<?php echo $page['adi']?>" alt="<?php echo $page['adi']?>">
								</a>
								
								
                        <?php 
						$i =0;
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>
								<a data-lightbox="image-1" data-index="<?php echo $i++;?>" class="img thumbnail " href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-image="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" title="<?php echo $page['seo']?>">
									<img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" title="<?php echo $page['adi']?>" alt="<?php echo $page['adi']?>">
								</a>
						<?php } ?>	 		
								
								
							</div>
							
						</div>

						<div class="content-product-right col-md-7 col-sm-12 col-xs-12">
							<div class="title-product">
								<h1><?php echo $page['adi']?></h1>
								 Ürün Kodu : <?php echo $page['urunkodu']?><br>
							</div>
							<!-- Review ---->
							<div class="box-review form-group">
								<div class="ratings">
									<div class="rating-box">
											<?php echo $page['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $page['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $page['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
												
									</div>
								</div>

								<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">( <?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum )</a>	| 
								<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Yorum Yaz</a>
							</div>

							<div class="product-label form-group">
								<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
									 <?php if($page['idurum']=='1'){?>
									<span class="price-new" itemprop="price"><?php echo $yenifiyat;?></span>
									<span class="price-old"><?php echo $eskifiyat;?></span>
									<?php } else { ?>
									<span class="price-new" itemprop="price"><?php echo $yenifiyat;?></span>
									<span class="price-old"></span>
									<?php } ?>
									
								</div>
								<div class="stock"><span>Stok Durumu:</span> 
								<?php if($page['stok']>='1'){?>
								<span class="status-stock" style="color:green;">Stokta var</span>
								<?php } else { ?>
								<span class="status-stock" style="color:red;">Tükendi</span>
								<?php } ?>
								</div>
							</div>
								<div class="product-box-desc">
									<div class="inner-box-desc">
									<?php echo $page['kisa'];?>
									</div>
								</div>	
							
							
                             <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
									<?php if($page['havaledurum']=='1'){?>	
							<div class="product-box-desc">
								<div class="inner-box-desc">
								Havale İndirimli Fiyatı :
								<span class="price-new" itemprop="price"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$ekkdv));?></span>
								</div>
							</div>
                            <?php } ?>

							<div id="product">
							
								<form action="" method="POST">
								<div class="box-checkbox form-group required">


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
									
			   
		 
								   
								   
								   
									
								</div>

								<div class="form-group box-info-product">
									<div class="option quantity">
										<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
											<label>Adet</label>
											<input class="form-control" type="text" name="adet" maxlength="<?php echo $page['stok'];?>" value="1">
											
											<span class="input-group-addon product_quantity_down">−</span>
											<span class="input-group-addon product_quantity_up">+</span>
										</div>
									</div>
									<div class="cart">
										<?php if($page['stok']>='1'){?>
										<input type="submit" name="sepetle" data-toggle="tooltip" title="" value="Sepete Ekle" data-loading-text="Sepete Ekle..." id="button-cart" class="btn btn-mega btn-lg">
									    <?php } else { ?>  
										<input type="button" data-toggle="tooltip" title="" value="Tükendi" data-loading-text="Tükendi..." id="button-cart" class="btn btn-mega btn-lg">
									    
									    <?php } ?>
									</div>
									</form>
									<div class="add-to-links wish_comp">
										<ul class="blank list-inline">
											<li class="wishlist">
												<a class="icon" data-toggle="tooltip" title="" onclick="javascript:location.href='?favoriekle=<?php echo $page['id']; ?>'" data-original-title="Favorilerime Ekle"><i class="fa fa-heart"></i>
												</a>
											</li>
											<li class="compare">
												<a class="icon" data-toggle="tooltip" title="" onclick="javascript:location.href='?karsilastir=<?php echo $page['id']; ?>'" data-original-title="Karşılaştırma Listeme Ekle"><i class="fa fa-exchange"></i>
												</a>
											</li>
											<?php if($system['whatsapal']=='1'){?>
											<li class="compare ">
												<a style="background: green;color: white;font-size: 13px;font-weight: 600;" class="icon" data-toggle="tooltip" title="" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" data-original-title="WhatsApp ile Satın Al"><i class="fa fa-whatsapp"></i> WHATSAPP İLE SİPARİŞ VER
												</a>
											</li>
											 <?php } ?> 
												<?php if($system['telefonal']=='1'){?>
											<li class="compare ">
												<a style="background: #d10909;color: white;font-size: 13px;font-weight: 600;" class="icon" data-toggle="tooltip" title="" target="_blank"  href="tel:<?php echo $ayar['ceptel']; ?>" data-original-title="Telefon ile Satın Al"><i class="fa fa-phone"></i> TELEFON İLE SİPARİŞ VER
												</a>
											</li>
											 <?php } ?> 
										</ul>
										
										
                   <div class="badges" style="margin-bottom: 10px;">
					<?php if($page['alode']=='1'){?> 
					
                   <span class="badge" style="border-radius: 0px;
padding: 10px;
margin-top: 10px;
background: red;
line-height: 17px;
height: 40px;">
					<i style="font-size: 18px;" class="icon-shopping-cart"></i> BU ÜRÜNDE <?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI</span>
                    <?php } ?>
					<?php if($page['ucretsizkargo']=='1'){?>
					 <span class="badge" style="border-radius: 0px;
padding: 10px;
margin-top: 10px;
background: #0f0269;
line-height: 17px;
height: 40px;">
					<i style="font-size: 18px;" class="icon-truck"></i> BU ÜRÜNDE KARGO ÜCRETSİZ
					</span>
                    <?php } ?>
					</div>		
										
										
										
									</div>

								</div>

							</div>
							<!-- end box info product -->

						</div>
				
					</div>
				</div>
				<!-- Product Tabs -->
				<div class="producttab ">
					<div class="tabsslider  vertical-tabs col-xs-12">
						<ul class="nav nav-tabs col-lg-2 col-sm-3">
							<li class="active"><a data-toggle="tab" href="#tab-1">Ürün Açıklaması</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Ürün Yorumları (<?php echo $urunyorumsayimis;?>)</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">İade & Değişim Şartları</a></li>
					
						</ul>
						<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
							<?php echo $page['aciklama'];?>
								
							</div>
							<div id="tab-review" class="tab-pane fade">
											                
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
					
			   
			   
			     
              <form class="form-horizontal" method="POST" action="">
                <div id="review"></div>
                <h6>Yorum Yap</h6>
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
							<div id="tab-4" class="tab-pane fade">
							<?php echo $system['iade']; ?>		
							</div>
						
						</div>
					</div>
				</div>
				<!-- //Product Tabs -->

				<!-- Related Products -->
    			<div class="related titleLine products-list grid module ">
    				<h3 class="modtitle">Benzer Ürünler  </h3>
    		
    				<div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="5" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
    					
							<?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 6")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>

						
						
						
						
                              
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
											    <?php if($katurunler['idurum']=='1'){?>
                                                <div class="box-label">
                                                    <span class="label-product label-sale"> -% <?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
                                                </div>
												<?php } ?>  
													 <?php if($katurunler['yeni']=='1'){?>
												<div class="box-label">
                                                        <span class="label-product label-new">Yeni</span>
                                               </div>
												<?php } ?>
												
                                                <div class="product-image-container second_img">
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>">
                                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" 
												  href="urun/<?php echo $katurunler['seo']; ?>"><i class="fa fa-eye"></i><span>Sepete Ekle</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="addToCart">
                                                        <span>Sepete Ekle</span>   
                                                    </a>
                                                    <button  onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'" type="button" class="wishlist btn-button" title="Favorilerine Ekle"><i class="fa fa-heart-o"></i><span>Favorilerine Ekle</span>
                                                    </button>
                                                    <button  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'" type="button" class="compare btn-button" title="Karşılaştır"><i class="fa fa-retweet"></i><span>Karşılaştır</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">   
											<?php echo $katurunler['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $katurunler['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
												
														</div>
                                                        <span class="rating-num">( <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum )</span>
                                                    </div>
                                                    <h4><a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                   <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                                </p>
                                            </div>

                                       
                                        </div>
                                    </div>      
                                </div>

						
						<?php } ?>	
						
						
    				</div>
    			</div>

    			<!-- end Related  Products-->
			</div>
				
				
				
			
			
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->	   
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
border: 1px solid #c4c4c4;
}
.size-item .size-slt-box {
 display:block;
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
	</style>
	
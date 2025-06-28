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
   
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                 <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>
			            <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
						 <li class="breadcrumb-item"><a href="kategori/<?php echo $ukat['seo']; ?>"><?php echo $ukat['adi']; ?></a></li>
			            <?php } ?>			 
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page['adi'];?></li>
                    </ol>
					
						
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content pb-3" style="background: #f4f4f4;">
           <div class="container">
 

  <div style="margin-top:20px;" class="col-sm-12 urun-sayfasi">    
  <div class="row">
  
<div class="container-fluid mt-2 mb-3">
    <div class="row no-gutters">
        <div class="col-md-6 pr-2">
            <div class="card">
                <div class="demo">
                    <ul id="lightSlider">
					
                        <li data-thumb="resimler/urunler/<?php echo $page['resim']?>">
						<a href="resimler/urunler/<?php echo $page['resim']?>" data-lightbox="image-1">
						<img style="width: 100%;" src="resimler/urunler/<?php echo $page['resim']?>" />
						</a></li>
                        <?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>   
					   <li data-thumb="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">
                       <a href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-lightbox="image-1">					   
					   <img style="width: 100%;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" />
					   </a>
					  </li>
                      <?php } ?>
					  
					  </ul>
                </div>
            </div>
        
        </div>
		
        <div class="col-md-6" style="background:white; padding:15px;">
		<h1 itemprop="name"><?php echo $page['adi'];?></h1>
		
             
                    <ul class="list-unstyled product-view">
					  <li>Ürün Kodu: <span itemprop="model"><?php echo $page['urunkodu'];?></span></li>
                        <li>Stok Durumu: 
						<?php if($page['stok']>='1'){?>	
						<span style="color:green;">Stokta var</span>
						<?php } else { ?>
						<span style="color:red;">Tükendi</span>
						<?php } ?>
						</li>
                        <li>Değerlendirme: <span itemprop="brand"><?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                        <?php echo $urunyorumsayimis;?> Yorum </span></a></li>
           <?php echo $page['kisa'];?>
			        
          </ul>
          <hr>
          <div class="wishlist-compare pull-right">
          <a style="line-height: 39px;" href="?favoriekle=<?php echo $page['id']; ?>" data-toggle="tooltip" class="btn btn-default wishlist"  data-original-title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
          <a style="line-height: 39px;" href="?karsilastir=<?php echo $page['id']; ?>" data-toggle="tooltip" class="btn btn-default compare"  data-original-title="Karşılaştırma listesine ekle"><i class="fa fa-exchange"></i></a>
          </div>
           
                                    <div id="detayfiyat" data-price="<?php echo mb_substr($yenifiyat,0,-3);?>" class="product-price">
									<?php if($page['idurum']=='1'){?>	
								    <span style="font-size: 21px;" class="old-price"><?php echo $eskifiyat;?></span>&nbsp;&nbsp;
								    <span style="font-weight: 600;font-size: 24px;color: #FF6F38;margin: 0;" id="sonfiyat"><?php echo $yenifiyat;?></span>
									<?php } else { ?>
									<span style="font-weight: 600;font-size: 24px;color: #FF6F38;margin: 0;" id="sonfiyat"><?php echo $yenifiyat;?></span>
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
        
                        
				      <div>
               
			   
			                <form action="" method="POST">
									  
                                      <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
                                      
                                    <div class="details-filter-row details-row-size" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
                                        <label>Renk: </label>

                                        <div class="product-nav product-nav-thumbs">
                                        <?php 
										$sayfaidmiz = $page['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
                                            <a href="urun/<?php echo $varyantbak['seo'];?>" style="border: 1px solid gainsboro;border-radius: 2px;">
                                                <img style="border: 2px solid #f4f4f4;width: 50px !important;" class="lazyload"  data-src="resimler/urunler/<?php echo $varyantbak['resim'];?>">
                                            </a>
										<?php } ?>		
											
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .details-filter-row -->
				
										
					
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
									
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
			   
			   
			   
			   
			   
			                 <hr>
			   
			   
			   
			   
                                                                                                                                                                
				     
            <div class="form-group">
              <div class="btn-quantity">
			   <?php if($system['sinirsizstok']!='1'){	?>
			   <input type="text" onchange="detayfiyathesapla(this);" class="adetsayisi" name="adet" value="1" min="1" max="<?php echo $page['stok'];?>" size="2" id="input-quantity" class="form-control" required>
               <?php } else { ?>
               <input type="text" onchange="detayfiyathesapla(this);" class="adetsayisi"  name="adet" value="1" min="1" max="999999999999999999999999999999" size="2" id="input-quantity" class="form-control" required>
               <?php } ?>

			   <span class="qty-plus"><i class="fa fa-plus"></i></span>
                <span class="qty-minus"><i class="fa fa-minus"></i></span>
              </div>
              <?php if($page['stok']>='1'){?>	
              <button style="width: 42%;margin: 0px;"  type="submit" name="sepetle" class="urunmobilbuton butonok btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
              <?php } else { ?>
			  <button style="width: 42%;margin: 0px;" class="urunmobilbuton butonok btn btn-primary btn-lg">Ürün Tükendi</button>
              <?php } ?>
			  <?php if($system['telefonal']=='1'){?>
			  <a style="width: 42%;margin: 0px;background: #474747;" target="_blank" href="tel:<?php echo $ayar['ceptel']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span><i class="icon-phone"></i> Telefon İle Satın Al</span></a>
              <?php } ?>
			  <?php if($system['whatsapal']=='1'){?>
			  <a style="width: 100%;margin: 0px;margin-top:10px;background: green;" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="urunmobilbuton butonok btn btn-primary btn-lg"><span><i class="fa fa-whatsapp"></i> WhatsApp ile Satın Al</span></a>
              <?php } ?>
				</div>
                      </div>
          
          
          
				        
				                  
          </form>
          
          
          
               
        </div>
    </div>
</div>


      </div>
        
            </div>
 


<div class="col-md-12" style="margin-top: 20px;">
          <ul class="nav nav-tabs" style="background:white;">
            <li class="active"><a href="#tab-description" data-toggle="tab">Açıklama</a></li>
            <li><a href="#tab-review" data-toggle="tab">Yorumlar ( <?php echo $urunyorumsayimis;?> )</a></li>
            <li><a href="#taksit" data-toggle="tab">İade & Değişim Şartları</a></li>
          </ul>
          <div class="tab-content" style="background:white;">
            <div class="tab-pane active" id="tab-description" itemprop="description">
			  <?php echo $page['aciklama'];?>
			</div>
             <div class="tab-pane" id="taksit">
              <?php echo $system['iade']; ?>
					
              </div>
               <div class="tab-pane" id="tab-review">
			   
			       		<div class="comments">
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
                                            <div class="col-auto" style="border: 1px solid #f6f3f3;padding: 18px">
                                                
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
                                                            <img class="lazyload" style="width: 200px;"  data-src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="User name">
                                                        </a>
                                                    </figure>

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h4><a><?php echo $ayar['siteadi']; ?></a></h4>
                                                        </div><!-- End .comment-user -->

                                                        <div class="comment-content">
                                                            <p><?php echo $blogyorum['cevap']; ?></p>
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
                      </div>
        </div>






  <div class="col-sm-12 urun-sayfasi">   
<div class="title-module mb-3"><h3>Benzer Ürünler</h3></div>
<div class="row">


 				<?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 4")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $anaurunler) {?>
              <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			 <?php if($anaurunler['stok']=='0'){?>
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi2.png'>
			 </div>	
			 <?php } ?>
			 
			 
			 <?php 
			 $sayfaidm = $anaurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $anaurunler['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" alt="<?php echo $anaurunler['adi']; ?>" title="<?php echo $anaurunler['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $anaurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $anaurunler['adi']; ?>" title="<?php echo $anaurunler['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $anaurunler['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" alt="<?php echo $anaurunler['adi']; ?>" title="<?php echo $anaurunler['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $anaurunler['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $anaurunler['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $anaurunler['seo']; ?>"><?php echo $anaurunler['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($anaurunler['kdv'],$anaurunler['idurum'],$anaurunler['fiyat'],$anaurunler['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($anaurunler['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $anaurunler['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>
	
	
	
	
	
	
	
	
</div>







</div>
</div>







                <div class="mb-2"></div><!-- End .mb-2 -->

            </div><!-- End .page-content -->
        </main>
<link rel="stylesheet" href="<?php echo $sitetemasi;?>/lightslider.css">	
<script src="<?php echo $sitetemasi;?>/lightslider.js"></script>
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>
<style>
.card {
    background-color: #fff;
    padding: 14px;
    border: none
}

.stars i {
    color: #f6d151
}

.stars span {
    font-size: 13px
}

hr {
    color: #d4d4d4
}

.badge {
    padding: 5px !important;
    padding-bottom: 6px !important
}

.badge i {
    font-size: 10px
}

.profile-image {
    width: 35px
}

.comment-ratings i {
    font-size: 13px
}

.username {
    font-size: 12px
}

.comment-profile {
    line-height: 17px
}

.date span {
    font-size: 12px
}

.p-ratings i {
    color: #f6d151;
    font-size: 12px
}

.btn-long {
    padding-left: 35px;
    padding-right: 35px
}

.buttons {
    margin-top: 15px
}

.buttons .btn {
    height: 46px
}

.buttons .cart {
    border-color: #ff7676;
    color: #ff7676
}

.buttons .cart:hover {
    background-color: #e86464 !important;
    color: #fff
}

.buttons .buy {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676
}

.buttons .buy:focus,
.buy:active {
    color: #fff;
    background-color: #ff7676;
    border-color: #ff7676;
    box-shadow: none
}

.buttons .buy:hover {
    color: #fff;
    background-color: #e86464;
    border-color: #e86464
}

.buttons .wishlist {
    background-color: #fff;
    border-color: #ff7676
}

.buttons .wishlist:hover {
    background-color: #e86464;
    border-color: #e86464;
    color: #fff
}

.buttons .wishlist:hover i {
    color: #fff
}

.buttons .wishlist i {
    color: #ff7676
}

.comment-ratings i {
    color: #f6d151
}

.followers {
    font-size: 9px;
    color: #d6d4d4
}

.store-image {
    width: 42px
}

.dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px
}

.bullet-text {
    font-size: 12px
}

.my-color {
    margin-top: 10px;
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    border: 2px solid #8f37aa;
    display: inline-block;
    color: #8f37aa;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-transform: uppercase;
    transition: 0.5s all
}

label.radio .red {
    background-color: red;
    border-color: red
}

label.radio .blue {
    background-color: blue;
    border-color: blue
}

label.radio .green {
    background-color: green;
    border-color: green
}

label.radio .orange {
    background-color: orange;
    border-color: orange
}

label.radio input:checked+span {
    color: #fff;
    position: relative
}

label.radio input:checked+span::before {
    opacity: 1;
    content: '\2713';
    position: absolute;
    font-size: 13px;
    font-weight: bold;
    left: 4px
}

.card-body {
    padding: 0.3rem 0.3rem 0.2rem
}
</style>

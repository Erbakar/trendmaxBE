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
 $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();
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

<div id="product-product" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
         <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
			<li><a href="kategori/<?php echo $ukat['seo'];?>"><?php echo $ukat['adi'];?></a></li>
			 <?php } ?>
			<li><a><?php echo $page['adi']; ?></a></li>
   </ul>
   <div class="row">
      <div id="content" class="col-sm-9">
         <div class="row">
            <div class="col-sm-6">
               <ul class="thumbnails">
                  <li><a class="thumbnail" href="resimler/urunler/<?php echo $page['resim']?>">
				  <img src="resimler/urunler/<?php echo $page['resim']?>" id="zoom_01" data-zoom-image="resimler/urunler/<?php echo $page['resim']?>"/></a></li>
                 <?php 
						$i =0;
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?> 
				  <li class="image-additional"><a class="thumbnail" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">
				  <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"/></a></li>
               <?php } ?>	
			   </ul>
            </div>
            <div class="col-sm-6">
               <div id="product">
                  <h1 style="font-weight:300;"><?php echo $page['adi'];?></h1>
                  <ul class="list-unstyled">
                     <li><b style="text-align:left; color:#000;"> Ürün Kodu:</b> <?php echo $page['urunkodu'];?></li>
                  </ul>
				  
				  
				  
				  
                  <ul class="list-unstyled">
                     
					  <?php if($page['idurum']=='1'){?>
                          
                        <h2 id="live-price" style="font-weight: 700;
  margin-right: 2px;
  font-size: 18px;
  text-decoration: line-through;
  display: inline-block;"><?php echo $eskifiyat;?></h2>
                        <span id="live-special"></span>
                    
                       
                        <h2 id="live-price" style="display: inline-block; font-size:36px; font-weight:bold; color:#3cb228;"><?php echo $yenifiyat;?></h2>
                        <span id="live-special"></span>
                     
						  <?php }else{?>  
						    
                  
                        <h2 id="live-price" style="display: inline-block; font-size:36px; font-weight:bold; color:#3cb228;"><?php echo $yenifiyat;?></h2>
                        <span id="live-special"></span>
                     
						  <?php } ?>
					 
					 
					 
					 
                  </ul>
				      <form action="" method="POST">
                 
                             <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
									<?php if($page['havaledurum']=='1'){?>	
				 <ul class="list-unstyled">
                     <li><b style="text-align:left; color:#000;"> Havale Fiyatı:</b> <h2 style="display: inline-block; font-size: 19px;
  font-weight: 500;
  color: #1d1e1d;" id=""><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$ekkdv));?></h2></li>
                  </ul>
				  
				  <?php } ?>
			 <ul class="list-unstyled">
<?php if($page['ucretsizkargo']=='1'){?>
                         <div style="text-align: center;
background: #d90a0a;
color: white;
padding: 5px;
border-radius: 3px;
margin-bottom: 5px;
font-size: 11px;"><i class="fa fa-truck"></i>
						
BU ÜRÜNDE KARGO ÜCRETSİZ                   
                        
						  </div>	
						  <?php } ?>
						  
						  <?php if($page['alode']=='1'){?>
						  <div style="text-align: center;
background: #dedee2;
color: #3c3b3b;
padding: 5px;
border-radius: 3px;
margin-bottom: 5px;
font-size: 11px;">
						  <i class="fa fa-gift"></i>
BU ÜRÜNDE <?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI                 
                         
					</div>	  
						  <?php } ?>
				  
				   </ul>
				  <ul class="list-unstyled"> 
				  
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
									
			   
				  
				  </ul>
				  
				  
				  
				  
                  <div class="form-group">
                     <div class="quantity">
                        <input type="text" name="adet" value="1" size="1" max="<?php echo $page['stok'];?>" id="input-quantity" class="form-control" />
                        <a href="#" id="q_up"><i class="fa fa-plus"></i></a>
                        <a href="#" id="q_down"><i class="fa fa-minus"></i></a> 
                     </div>
                    <?php if($page['stok']>='1'){?>
                     <button type="submit" style="width: 40%;" name="sepetle" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                     <?php } else { ?>
                     <button style="width: 40%;" type="button" style="padding:10px;" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Tükendi</button>
                     
					 <?php } ?>
					</form>
					<?php if($system['telefonal']=='1'){?>	
					<button type="button" data-toggle="tooltip" style="padding:10px;" class="btn btn-default" title="Telefonla Sipariş Ver"  onclick="location.href='tel:<?php echo $ayar['ceptel']; ?>';"><i class="fa fa-phone"></i></button>
					<?php } ?>
					<button type="button" data-toggle="tooltip" style="padding:10px;" class="btn btn-default" title="Alışveriş Listeme Ekle" onclick="location.href='?favoriekle=<?php echo $page['id']; ?>';"><i class="fa fa-heart"></i></button>
                     <button type="button" data-toggle="tooltip" style="padding:10px;" class="btn btn-default" title="Karşılaştırma listesine ekle" onclick="location.href='?karsilastir=<?php echo $page['id']; ?>';"><i class="fa fa-exchange"></i></button>
                  </div>
                  <div style="margin: 20px 0px 15px;"><img src="<?php echo $sitetemasi;?>/garanti.png" class="img-responsive" alt="garanti"></div>
               </div>
            </div>
         </div>
         
      </div>
      <aside id="row sub-row" class="col-sm-3 hidden-sm hidden-md hidden-xs">
        
         <div class="row">
                  <div id="superdeal" class="owl-carousel" style="margin-top:-10px;">
                                            
											 <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
      foreach($ukzzz as $gfirsat){?>		
									
                                             <div class="leftrightx col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div style="background:none;" class="product-layout">
                                                   <div class="product-thumb transition">
                                                      <div class="image" style="min-height: 310px !important;" >
                                                         <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="<?php echo $gfirsat['adi']; ?>" title="<?php echo $gfirsat['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="<?php echo $gfirsat['adi']; ?>">
                                                         </a>
														 <?php if($gfirsat['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
														 
                                                          <div class="firsat-kose"><i class="fa fa-bullhorn" aria-hidden="true"></i> GÜNÜN FIRSATI</div>
                                                      
                                                      </div>
                                                      <div class="caption text-center animation-element slide-right">
                                                         <h4><a href="urun/<?php echo $gfirsat['seo']; ?>"><?php echo $gfirsat['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                      <div style="clear:both"></div>
                                                   </div>
                                                </div>
                                             </div>
											 
											  <?php }?> 		
								
											
                                          </div>
            <div style="clear:both"></div>
         </div>
         <script type="text/javascript"><!--
            $('#superdeal').owlCarousel({
            	items: 1,
            	autoPlay: true,
            	navigation: false,
            	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
            	pagination: false
            });
            -->
         </script>  
      </aside>
   </div>
   <ul class="nav nav-tabs">
      <li class="active"><a href="#tab-description" data-toggle="tab">Ürün Açıklaması</a></li>
      <li><a href="#tab-review" data-toggle="tab">Yorumlar (<?php echo $urunyorumsayimis;?>)</a></li>
	  <li><a href="#tab-review2" data-toggle="tab">İade & Değişim Şartları</a></li>
   </ul>
   <div class="tab-content">
      <div class="tab-pane active" id="tab-description">
	  <?php echo $page['aciklama'];?>
	  </div>
	  
	  
	  
	  
      <div class="tab-pane" id="tab-review">
       
	              <div class="storesComments" style="margin-top:30px;">
					<div class="comments">
                    <?php if($urunyorumsayimis>'0'){?>
                      
                    <?php } else { ?>
					<h4>Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h4><!-- End .title -->
					<?php } ?>	

                                <ul style="padding: 0px !important;">
								
								
				<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                                <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto" style="border-radius: 6px;text-align: left;border: 1px solid #f6f3f3;padding: 18px">
                                                
                                            
                                                <span class="review-date" style="">
												
										
									
												
												
												
												<?php echo $blogyorum['tarih']; ?></span>
                                           
   <h6 style="  margin-bottom: 10px;"><a><?php echo $blogyorum['adi']; ?></a></h6>
											  <div class="ratings" style="color: #eee006;">
										 <?php echo $blogyorum['yildiz'] == '1' ? '<i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '2' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '3' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '4' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '5' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
</div>
			
                                                <div class="review-content">
                                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                                </div><!-- End .review-content -->

										   </div><!-- End .col -->
                                            <div class="col">
                                            
                                        <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
                                                <div class="review-action" style="text-align: left;
padding: 20px;
border: 1px solid #e7e3e3;
border-radius: 0%;
background: #fafafa;">
                                                
												<div class="comment">
                                                   

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h6 style="  margin-bottom: 10px;"><?php echo $ayar['siteadi']; ?></h6>
														
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
					
			   
			   
			     
              <form class="form-horizontal" method="POST" action="" style="  text-align: left;">
                <div id="review"></div>
                <h43>Yorum Yap</h3>
				 <p class="title-desc" style="color: #d81818;border: 1px solid #f4f3f3;padding: 10px;font-size: 14px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.</p>
                  <div class="form-group required" style="width: 100%;
text-align: left;">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Adınız Soyadınız</label>
                    <input style="    max-width: 100%;" type="text" class="form-control" name="adi" required="" value="<?php echo $uyebilgileri['isim'];?>">
                  </div>
                     <div class="col-sm-12">
                    <label class="control-label" for="input-name">Eposta Adresiniz</label>
                      <input style="    max-width: 100%;" type="email" class="form-control" id="reply-email" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                  </div>
				  
				  
				</div>
				
             
              
                <div class="form-group required" style="width: 100%;
text-align: left;">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Yorumunuz</label>
                    <textarea style="    max-width: 100%;" name="yorum" rows="5" id="input-review" class="form-control" required></textarea>
                    <div class="help-block"><span class="text-danger">Not:</span> HTML'e dönüştürülmez!</div>
                  </div>
                </div>
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label">Oylama</label>
                   
                  <input type="radio" name="yildiz" value="1"> 1
                   
                 <input type="radio" name="yildiz" value="2"> 2
                  
                  <input type="radio" name="yildiz" value="3"> 3
                   
                   <input type="radio" name="yildiz" value="4"> 4
                
                    <input type="radio" name="yildiz" value="5"> 5
                  </div>
                </div>
                   <div class="buttons clearfix">
				    <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
               
				  <div class="buttons-box clearfix">

                  <button style="width: 100%;
height: 50px;
font-size: 15px;" type="submit" name="urunyorum" class="btn btn-sm btn-default">Gönder</button>
                </div>
				  
                </div>
                              </form>

                                    <div class="clear"></div>
                           
                          </div>  
	   
	   
      </div>
	  
	  
	  <div class="tab-pane" id="tab-review2">
        <?php echo $system['iade']; ?>	
      </div>
	  
	  
	  
	  
   </div>
   <div class="urunbaslik"><b>Benzer Ürünler</b></div>
   <div class="row">
       <?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 4")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>
      <div class="leftrightx col-xs-6 col-md-3">
             <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $katurunler['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>">
                                                         </a>
                                                         				 <?php if($katurunler['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $katurunler['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $katurunler['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                                        </p>
                                                       </div>
                                                         </div>
                                                      </div>
      </div>
      
	  
	    <?php } ?>
	  
      <div class="clearfix visible-md"></div>
   </div>
   <p>Etiketler:
          
            	<?php $etiketlerz = $page['skey'];

											$etiketlerz = explode(',', $etiketlerz);

                                            foreach( $etiketlerz as $anahtarz => $degerz ){?>

                                            <a><?php echo $degerz;?></a>,

											<?php } ?>

  </p>
</div>
  <style>
  
 fieldset[disabled] input[type="checkbox"], fieldset[disabled] input[type="radio"], input[type="checkbox"].disabled, input[type="checkbox"][disabled], input[type="radio"].disabled, input[type="radio"][disabled] {
  cursor: not-allowed;
  display: none;
} 
  
  
  
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





}
	</style>
     
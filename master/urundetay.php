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
	   
	<div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
               
   <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
						<a href="kategori/<?php echo $ukat['seo'];?>" class="link-12"><?php echo $ukat['adi'];?></a><i class="fa fa-angle-right" aria-hidden="true"></i>
<?php } ?>

				

			   <a href="javascript:;" class="link-12"><?php echo $page['adi']; ?></a>
            </div>
        </div>
            <div class="div-block-4461292330">
            <div class="w-row">
                <div class="column-218 w-col w-col-6 w-col-stack">
                    <div class="div-block-vasita--box-detay">

                        <div class="div-block-product-big">
                            <a href="resimler/urunler/<?php echo $page['resim']?>" class="lightbox-link w-inline-block w-lightbox" data-fancybox="gallery">
                                <img style="max-width: 350px !important;" src="resimler/urunler/<?php echo $page['resim']?>" alt="<?php echo $page['seo']?>">
                            </a>
                        </div>
                        <div class="div-block-4461292417">

                            <div class="owl-theme">
                                     
                                    <div class="w-col w-col-2 w-col-medium-2 w-col-small-2 w-col-tiny-2">
                                       
                                            <a data-fancybox="gallery" href="resimler/urunler/<?php echo $page['resim']?>" class=" w-inline-block vasitagaleri" title="<?php echo $page['adi']?>">
                                                <img src="resimler/urunler/<?php echo $page['resim']?>" alt="<?php echo $page['adi']?>">
                                            </a>
                                  
                                    </div>
                        <?php 
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>
                                    <div class="w-col w-col-2 w-col-medium-2 w-col-small-2 w-col-tiny-2">
                                      
                                            <a data-fancybox="gallery" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class=" w-inline-block vasitagaleri" title="<?php echo $page['adi']?>">
                                                <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $page['adi']?>">
                                            </a>
                                       
                                    </div>
                         <?php } ?>	         
                            </div>
                                    

                        </div>
                    </div>
                </div>

                
                <div class="column-188 w-col w-col-6">
                    <div class="div-block-4461292354">
                        <div class="div-block-4461292358">
                            <div class="w-row">
                                <div class="w-col w-col-9 w-col-small-6 w-col-tiny-6">
                                    <div>
                                        <?php if($page['firsat']=='1'){?>	
                                            <a href="javascript:;" class="button-19 w-button" style="background-color: #dd1e31;">Günün Fırsat Ürünü</a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="w-clearfix w-col w-col-3 w-col-small-6 w-col-tiny-6">
                                    <div class="div-block-4461292357" style="display:flex">

                                            
                                            <div style="display:flex" id="FavOnay175">
                                              <a href="?karsilastir=<?php echo $page['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                                                            <a href="?favoriekle=<?php echo $page['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                            </div>
                                            


                                            <div class="link-block-paylas w-inline-block sosyalmedyasss">
                                                <span class="sosacil">
                                                    <a href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text= Baksana ne buldum:) <?php echo $page['adi']; ?> <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" rel="nofollow" data-action="share/whatsapp/share" title="WhatsApp'ta Paylaş" target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>                                             
													<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" rel="nofollow" title="Facebook ile paylaş" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a href="https://twitter.com/intent/tweet?url=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" rel="nofollow" title="Twitter ile paylaş" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                                 </span>
                                            </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-block-4461292359">
                            <div class="text-block-140-heading"><?php echo $page['adi']?></div>
                        </div>
                        <div class="div-block-4461292360">
                            <div class="w-col w-col-12 w-col-small-12 w-col-tiny-12">

                                Ürün Kodu : <?php echo $page['urunkodu']?><br>

                                <div class="w-col w-col-2 w-col-small-6 w-col-tiny-6" style="overflow:hidden">
                                    <div class="Urating">
                                        <img src="<?php echo $sitetemasi;?>/css/images/yildiz.png"></img>
                                        <div class="Uback" style="width:0%;"></div>
                                    </div>
                                </div>
                                <div class="w-col w-col-10 w-col-small-6 w-col-tiny-6">
                                    <div class="UDetails">
                                        <a  class="link-puan"></a>
                                        <a  class="link-urun-yorumu">(0 ürün yorumu)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
						 
                        
						
                            <div class="w-row">
                                <?php if($page['idurum']=='1'){?>	
                                <div class="w-col w-col-2 w-col-small-2 w-col-tiny-2">
                                    <div class="div-block-indiirm-box-big">
                                        <div class="text-block-131-big">% <?php echo yuzdeHesaplama($page['fiyat'],$page['ifiyat']);?></div>
                                    </div>
                                </div>
								<?php } ?>
						
								
								
                                
                                <div class="w-col w-col-6 w-col-small-6 w-col-tiny-6" style="">
                                    <div class="div-block-4461292372">
                                        <div class="Fiyatguncelle">
                                        <?php if($page['idurum']=='1'){?>
                                        <div class="text-block-133"><?php echo $eskifiyat;?></div>
                                        <div class="text-block-122-buyuk"><?php echo $yenifiyat;?></div>
										<?php } else { ?>
										<div class="text-block-122-buyuk"><?php echo $yenifiyat;?></div>
										
										<?php } ?>
										
										
                                        </div>
                                        <div><b>Kdv dahildir.</b></div>
                                    </div>
                                </div>
								    <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
									
								<?php if($page['havaledurum']=='1'){?>		
								 <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4" style="background: #e7e7e7;padding: 10px;border-radius: 4px;">
                                    <div class="div-block-4461292372">
                                        <div class="Fiyatguncelle">
                                       
                                        <div style="display: block;
font-size: ;
text-decoration: unset;
font-weight: bold;
font-size: 12px;" class="text-block-133">Havale İndirimli Fiyatı : </div>
                                       
										<div class="text-block-122-buyuk"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$ekkdv));?></div>
									   	
										
                                        </div>
                                       
                                    </div>
                                </div>
								
								 <?php } ?>	
								
								
                            </div>
                        </div>
							 <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
						
                        <div class="div-block-4461292306" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>></div>
                        
						
						<div class="columns-42 w-row">
                                    <div class="w-col w-col-12">
                                        <div>
                                           
									
                    <div class="cl-product-colors" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
                    
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
                                                <img style="border: 2px solid #f4f4f4;width: 50px !important;" class="lazyload"  src="resimler/urunler/<?php echo $varyantbak['resim'];?>">
                                            </a>
										<?php } ?>		
											
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .details-filter-row -->
                        </div>
                    </div>   
										   
										   
                                        </div>
                                    </div>
                              
                                </div>
						
						
						
									 <div class="div-block-4461292306"></div>
                        
						
						
						  <form action="" method="POST">
                            <div class="columns-42 w-row">
                                    <div class="w-col w-col-12">
                                        <div>
                                           
										  <?php 
									$urunid = $page['id'];
									$ozellik = $ozy->query("select * from anaozellik where tip='0' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellik as $anaozellik){?>  
                                    <div class="details-filter-row details-row-size">
                                        <label for="size" style="width: 100%;font-weight: 500;"><?php echo $anaozellik['adi'];?> :</label>
                                        <div class="select-custom" style="width: 100%;">
                                    <select class="text-field-10---35-copy w-input varyantselect" onchange="detayfiyathesapla(this);" name="ozellik[]" id="size"  required>
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
				                    <input onclick="detayfiyathesapla(this);" data-price="<?php echo KdvDahil($ianaozellikalt['fiyat'],$ekkdv);?>" class="varyantradio text-field-10---35-copy w-input" type="radio" name="ozellik[]" level="2" <?php echo $ianaozellikalt['stok'] <= '0' ? 'disabled' : null; ?> value="<?php echo $ianaozellikalt['id'];?>" stocksize="<?php echo $ianaozellikalt['adi'];?>" available="1" required>
				                    <span <?php echo $ianaozellikalt['stok'] <= '0' ? 'style="border-color: #eee;
color: #3f3a3a;
background: #fbf8f8;"' : null; ?> class="size-slt-box" level="2" value="<?php echo $ianaozellikalt['id'];?>" name="ozellik[]"><?php echo $ianaozellikalt['adi'];?></span></label>
				                    <?php } ?>
                                    </div>
									 
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
			   
		 
										   
										   
                                        </div>
                                    </div>
                                
                                </div>
						
						
						
						
						
						
						 <div class="div-block-4461292306"></div>
                        
						
						
						
                            <div class="columns-42 w-row">
                                    <div class="w-col w-col-1">
                                        <div>
                                            <div class="text-block-142-2">Adet:</div>
                                        </div>
                                    </div>
                                    <div class="w-col w-col-4">
                                        <div>
                                            <div class="form-block w-forms w100">
                                                <div class="columns-43 w-row">
                                                    

                                                    <div class="w-col w-col-4">
                                                        <div>
                                                            <a href="#" class="button-20-eksi w-button" id="NormalAdetAzalt"></a>
                                                        </div>
                                                    </div>
                                                    <div class="w-col w-col-4">
                                                        <div>
                            

                                                            <input required data-type="number" type="text" min="1" max="8" pattern="[0-9]*" value="1" id="NormalAdet" name="adet" maxlength="<?php echo $page['stok'];?>" autocomplete="off" class="text-field-6 w-input" style="padding:0px">
                            
                                                        </div>
                                                    </div>
                                                    <div class="w-col w-col-4">
                                                        <a href="#" class="button-20-arti w-button" id="NormalAdetArttir"></a>
                                                    </div>

                                              
                                                    
                                                </div>

                                            </div>
                                        </div>
                                    </div>
									
									
									 <div class="w-col w-col-7">
                                              <div>
													<?php if($page['stok']>='1'){?>
                                                        <button name="sepetle" type="submit" class="button-12-sepet-detay-22 w-button w100">Sepete Ekle</a>
                                                    <?php } else { ?>  
													<a class="w-button tukendi">Tükendi</a>
													 <?php } ?>
													</div>
                                                 
                                    </div>
									
									
									
									
									
                                </div>
                             </form>
                        

                        <div class="div-block-4461292306"></div>
                        <div class="div-block-4461292367">
                            <div class="columns-48 w-row">
                             
                                 
                                <div class="column-201 w-col w-col-12 w-col-small-12 w-col-tiny-tiny-stack">
                                    <div>
                            <?php if($system['whatsapal']=='1'){?>
			  <a  target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>" class="butonlar butonok btn btn-primary btn-lg"><span><i class="fa fa-whatsapp" style="font-size: 14px;"></i> WhatsApp ile Satın Al</span></a>
              <?php } ?> 
                                    </div>
                              
                                
                             
                                    <div>
                                     		<?php if($system['telefonal']=='1'){?>
			  <a target="_blank" href="tel:<?php echo $ayar['ceptel']; ?>" class="butonlar urunmobilbuton butonok btn btn-primary btn-lg" style="background: #dba608;border: #dba608;"><span><i class="fa fa-phone" style="font-size: 14px;"></i> Telefon İle Satın Al</span></a>
              <?php } ?>
                                    </div>
                               </div>
                            </div>
                        </div>


                    <?php if($page['ucretsizkargo']=='1'){?>
                        <div class="div-block-4461292306"></div>
                        
                        <div class="div-block-4461292361">
                            <div class="w-row">
                                <div class="w-col w-col-1 w-col-small-1 w-col-tiny-1">
                                    <div>
                                        <img src="<?php echo $sitetemasi;?>/css/images/kargom.png" loading="lazy" width="36" alt=""></div>
                                </div>
                                <div class="w-col w-col-11 w-col-small-11 w-col-tiny-11">
                                    <div class="div-block-4461292362">
                                        <div class="text-block-134-02">Ücretsiz Kargo İmkanı</div>
                                        <div class="text-block-145">BU ÜRÜNDE KARGO BEDAVA !</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>  
						
						
						
                      <?php if($page['alode']=='1'){?> 
                        <div class="div-block-4461292306"></div>
                        
                        <div class="div-block-4461292361">
                            <div class="w-row">
                                <div class="w-col w-col-1 w-col-small-1 w-col-tiny-1">
                                    <div>
                                        <img src="<?php echo $sitetemasi;?>/css/images/gift.png" loading="lazy" width="36" alt=""></div>
                                </div>
                                <div class="w-col w-col-11 w-col-small-11 w-col-tiny-11">
                                    <div class="div-block-4461292362">
                                        <div class="text-block-134-02">Çok Al Az Öde Fırsatı</div>
                                        <div class="text-block-145">BU ÜRÜNDE <?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI !</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>  
                    </div>
                </div>
                
            </div>
                <div class="div-block-4461292364">
                    <div>
                        <div data-duration-in="300" data-duration-out="100" class="w-tabs">
                            <div class="w-tab-menu">
                                
                                <a data-w-tab="Tab 2" class="tab-link-tab-2-2 w-inline-block w-tab-link w--current">
                                    <div>Ürün Açıklaması</div>
                                </a>
								<a data-w-tab="Tab 4" class="tab-link-tab-4 w-inline-block w-tab-link">
                                    <div>Ürün Yorumları</div>
                                </a>
                                <a data-w-tab="Tab 3" class="tab-link-tab-3-2 w-inline-block w-tab-link">
                                    <div>İade & Değişim Şartları</div>
                                </a>
                            
                            </div>
                            <div class="tabs-content-2 w-tab-content">
                                
                                <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane w--tab-active">
                                    <div>
                                <?php echo $page['aciklama'];?>
                                    </div>
                                </div>
                                <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane">
                                    <div>
                             <?php echo $system['iade']; ?>
                                    </div>
                                </div>
                                <div data-w-tab="Tab 4" class="tab-pane-tab-4 w-tab-pane">
                                    <div>
									  <?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                        <div>
                                            <div class="text-block-140-heading"><strong>İncelediğiniz ürünle ilgili kullanıcı yorumları (<?php echo $urunyorumsayimis;?> yorum)</strong></div>
                                        
										<a href="javascript:;" class="link-block-raporet w-inline-block popup-trigger" data-tooltip="Ürüne Yorum Yap">Ürüne Yorum Yap</a>
										
										</div>
                                        <div class="div-block-4461292379">
                                       

			
           		<div class="comments" style="border: 1px solid #dad8d8;margin-bottom:20px;
border-radius: 6px;
background: #fff;">
                    <?php if($urunyorumsayimis>'0'){?>
                     <h4 class="title" style="  font-size: 11px;line-height: 24px;margin-top: 10px;padding-left: 10px;"></h4><!-- End .title -->
					 
                    <?php } else { ?>
                    
					<h4 class="title" style="  font-size: 11px;line-height: 24px;margin-top: 10px;padding-left: 10px;">Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h4><!-- End .title -->
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
					
			   
                                        </div>
                                
                                        <div class="div-block-4461292306"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>    
	
	
	<form method="POST" action="">
    <div class="popupcem" role="alert" style="display:flex;">
	
        <div class="popup-container" style="display:inline-block;">
        <a href="#0" class="popupcem-close img-replace">Kapat</a>
                <div class="w-col w-col-12">
                    <label for="name-5" class="field-label-2"><?php echo $page['adi'];?> isimli ürüne yorum yap<br><p class="title-desc" style="color: #d81818;border: 1px solid #d81818;padding: 10px;font-size: 10px;border-radius: 2px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.</p></label>
                    
					 <input type="text" class="text-field-10---35-copy w-input" name="adi" required="" placeholder="Adınız Soyadınız" value="<?php echo $uyebilgileri['isim'];?>">
					
					     <input type="email" class="text-field-10---35-copy w-input" id="reply-email" placeholder="Eposta Adresiniz (Gizlenecektir)" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                 
					
					<select name="yildiz" class="select-field-banka w-select" required>
                        <option value="" selected>Yıldız</option>
                        <option value="1">1 Yıldız</option>
                        <option value="2">2 Yıldız</option>
                        <option value="3">3 Yıldız</option>
                        <option value="4">4 Yıldız</option>
                        <option value="5">5 Yıldız</option>
                      
                    </select>
                </div>
              <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
                <div class="w-col w-col-12">
                        <label for="name-5" class="field-label-2">
</label><textarea placeholder="Yorumunuzu buraya yazabilirsiniz..." maxlength="4000" name="yorum" minlength="10" title="Girilen değer en az 10 karakter olmalıdır." required class="textarea-2 w-input"></textarea>
                        <input type="submit" name="urunyorum" value="Gönder" class="submit-button-3 w-button"/>
                </div>

        </div> 
		</form>
		
    </div> 	
		
<style>

ul, ol {
  margin-top: 0px;
  margin-bottom: 10px;
  padding-left: 0px !important;
  margin-bottom: 0px !important;
}

.owl-carousel {
  display: block !important;
  width: 100%;
  z-index: 1;
}


.div-block-4461292417 {
  margin-top: 0px;
  height: auto;
  display: flex;
 background: #e7e7e7;
}

.butonlar {
padding: 10px 10px 10px 28px;
float: none;
border-style: solid;
border-width: 1px;
border-color: #4cad16;
border-radius: 20px;
background-color: #09c81e;
background-position: 10% 50%;
background-size: 16px;
background-repeat: no-repeat;
font-family: Montserrat, sans-serif;
color: #fff;
font-size: 14px;
text-align: center;
float: left;
width: 47%;
margin-right: 10px;
font-weight: 500;
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
</style>		
		
		
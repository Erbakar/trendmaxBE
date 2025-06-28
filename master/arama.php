<title>Arama Sonuçları</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php
$arama = temizle($_GET['arama']);

$ara = explode(" ", $arama);
$adi = "";
$urunkodu = "";
$aciklama = "";
foreach($ara AS $a)
{
    $adi .= "adi LIKE '%".$a."%' AND ";
    $urunkodu .= "urunkodu LIKE '%".$a."%' AND ";
	$aciklama .= "aciklama LIKE '%".$a."%' AND ";
}
$adi = substr($adi, 0, -4);
$urunkodu = substr($urunkodu, 0, -4);
$aciklama = substr($aciklama, 0, -4);
?>


<div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>

			   <a href="arama/" class="link-12">Arama Sonuçları</a>
				
			  
			   
            </div>
        </div>
		


 
		
		
		
		
		
		
		
        <div class="div-block-4461292330">
            <div class="w-row">
			
			
			
			
			
			
				
                <div class="column-188 w-col w-col-12">
                    
                    <div class="div-block-4461292333" style="margin-top:0;  margin-left: 0px !important;">
                        <div class="columns-38 w-row">
                            <div class="column-191 w-col w-col-8 w-col-tiny-tiny-stack">
                                <div>
                                    <div class="text-block-138"><strong style="color: #ff0000"><?php echo $arama;?> </strong> kelimesine ait  <strong style="color: #ff0000"><?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and $adi or $urunkodu or $aciklama");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..</div>
                                </div>
                            </div>
                            <div class="w-clearfix w-col w-col-4 w-col-tiny-tiny-stack">
                                <div class="div-block-4461292336">
                                    <div class="form-block w-forms">
									


									
									
                                       <form  action="" method="GET">
							
							
									<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>
								
                                            <select name="siralama" class="select-field w-select" onchange='this.form.submit()'>
                            	             <option selected <?php echo $_GET['siralama'] == 'onerilen' ? 'selected="selected"' : null; ?> value="onerilen">Akıllı Sıralama</option>

											<option <?php echo $_GET['siralama'] == 'dusukfiyat' ? 'selected="selected"' : null; ?> value="dusukfiyat">Önce En Düşük Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'yuksekfiyat' ? 'selected="selected"' : null; ?> value="yuksekfiyat">Önce En Yüksek Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'encokyorum' ? 'selected="selected"' : null; ?> value="encokyorum">En Çok Yorum Alan</option>

											<option <?php echo $_GET['siralama'] == 'enbegenilen' ? 'selected="selected"' : null; ?> value="enbegenilen">En Çok Beğenilen</option>

											<option <?php echo $_GET['siralama'] == 'eskitarih' ? 'selected="selected"' : null; ?> value="eskitarih">En Eski Tarihe Göre</option>

											<option <?php echo $_GET['siralama'] == 'yenitarih' ? 'selected="selected"' : null; ?> value="yenitarih">En Yeni Tariha Göre</option>

                                            </select>
                                        </form>
 <button style="width: 100%;margin-top: 10px;height: 38px;line-height: 13px;text-align: left;padding: 10px;font-size: 14px;background: <?php echo $tema['t37'];?>;" onclick="myFunction()" class="search-button-2 w-button dropbtn mobilgoster">Ürün Filtreleme</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-block-4461292334">
                        <div class="columns-37 w-row">
                            
							
							
							
							
							
                           
                            
									<?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu or $aciklama");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 24;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
		
		
		if (isset($_GET["siralama"]) && $_GET["siralama"] != "0") {
			
		if(temizle($_GET["siralama"]=='dusukfiyat')){
			
		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by simdikifiyat ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
	
        } elseif (temizle($_GET["siralama"]=='yuksekfiyat')) {

 		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by simdikifiyat DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='encokyorum')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by yorum DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='enbegenilen')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by hit DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='eskitarih')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='yenitarih')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='onerilen')) {	
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
		
		} else {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
	    
		
		$__URUN__ = false;
        foreach ($pageoku as $katurunler) {
        $__URUN__ = true;
		
		?>		
				
							
							
							   <div class="column-128 w-col w-col-3 w-col-medium-3 w-col-small-6 w-col-tiny-6">
                                <div class="div-block-box-new">
                                        <a href="urun/<?php echo $katurunler['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" loading="lazy"  alt="<?php echo $katurunler['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $katurunler['adi']; ?></div>
                  <div>
                     <div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($katurunler['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                               <a href="?karsilastir=<?php echo $katurunler['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favoriekle=<?php echo $katurunler['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                                        
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($katurunler['stok']>='1'){?>
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                                <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
	  
	  
	  </div>     


	  </div>
									<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center" style="padding: 40px;font-weight: 500;">
	
	
		<div class="notfound_content">
		<img src="<?php echo $sitetemasi;?>/css/images/urunyok.png"></img>
			<div class="title fs-5">Aradığın özellikte ürüne maalesef ulaşılmıyor.</div>
			<div class="text fs-5 fw-bold mt-1"><a href="<?php echo $url;?>">Tekrar denemek ister misin ?</a></div>
		</div>
	</div>													








													<?php }

													?>		
							
							
							
					
                        </div>


                        

                        <div class="block">
                            <div class="w-col w-col-12">
                                <div class="div-block-sayfa-sayilari">

                                    
                                    <a  class="button-18-sol-ok2 w-button"></a>
                                    <a  class="button-18-sol-ok w-button"></a>
									
									
																<?php

															for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

																if ($i>0 and $i<=$sayfasayisi) {

																	

																	if ($i == $pages) {

																		

																		echo "<a class='button-18-aktif w-button'>".$i."</a></li>";

																		

																	}else{

																		

																		$eklenecekstr="";

																		foreach($_GET as $key=>$value) {

																			if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=".$value;

																		}

																		$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

																		

																		echo "<a class='button-18-aktif w-button' href='arama/?pages=".$i.$eklenecekstr."'>".$i."</a></li>";

																		

																	}



																}

															}

															

															

															

															

															?> 

									
									
									
									
									
									
									
									
									
									<a  class="button-18-sag-ok w-button"></a>
                                    
									
									<a class="button-18-sag-ok2 w-button"></a>
                                    
                                </div>
                            </div>

                        </div>

                        <div class="c20"></div>


                    </div>

                </div>
            </div>
        </div>
    </div>
		  




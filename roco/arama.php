<title>Arama Sonuçları</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php
$arama = temizle($_GET['arama']);
$kategori = temizle($_GET['kategori']);
if($kategori=='0'){
$katok ="";
}else{
if($kategori==''){	
$kategori =0;
}else{
$kategori = temizle($_GET['kategori']);	
}
$katok ="AND FIND_IN_SET(".$kategori.",kategori)";	
}	
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

	
	
	
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
		
		<li><a>Arama Sonuçları</a></li>	
		</ul>
		
		<div class="row">
	
			
        	<!--Middle Part Start-->
        	<div id="content" class="col-md-12 col-sm-12">
        		<div class="products-category">
                    <h3 class="title-category ">Arama Sonuçları</h3>
				
					
					
        			<!-- Filters -->
                    <div class="product-filter product-filter-top filters-panel">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12 view-mode">
                              
                                    <div class="list-view">
								     <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                        <button style="margin-right: 10px;" class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                   	
									
                        <div class="text-block-138"><strong style="color: #ff0000;font-weight: 500;"><?php echo $arama;?></strong> kelimesine ait toplam <strong style="font-weight: 500;color: #ff0000"><?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and $adi or $urunkodu or $aciklama $katok");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..</div>
								  
								  </div>
                        
                            </div>
                            <div class="short-by-show form-inline text-right col-md-4 col-sm-6 col-xs-12">
                           <form  action="" method="GET">
									  
								<div class="form-group short-by">
                                    <label class="control-label" for="input-sort">Sıralama:</label>
                                  <select name="siralama" class="form-control" onchange='this.form.submit()'>
                            	             <option selected <?php echo $_GET['siralama'] == 'onerilen' ? 'selected="selected"' : null; ?> value="onerilen">Akıllı Sıralama</option>

											<option <?php echo $_GET['siralama'] == 'dusukfiyat' ? 'selected="selected"' : null; ?> value="dusukfiyat">Önce En Düşük Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'yuksekfiyat' ? 'selected="selected"' : null; ?> value="yuksekfiyat">Önce En Yüksek Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'encokyorum' ? 'selected="selected"' : null; ?> value="encokyorum">En Çok Yorum Alan</option>

											<option <?php echo $_GET['siralama'] == 'enbegenilen' ? 'selected="selected"' : null; ?> value="enbegenilen">En Çok Beğenilen</option>

											<option <?php echo $_GET['siralama'] == 'eskitarih' ? 'selected="selected"' : null; ?> value="eskitarih">En Eski Tarihe Göre</option>

											<option <?php echo $_GET['siralama'] == 'yenitarih' ? 'selected="selected"' : null; ?> value="yenitarih">En Yeni Tariha Göre</option>

                                            </select>
                                        </form>
                                </div>
                             
                            </div>
                           
                        </div>
                    </div>
                    <!-- //end Filters -->

        			<!--changed listings-->
                    <div class="products-list row nopadding-xs so-filter-gird grid">
            	
				
				                     
                            
		<?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu or $aciklama $katok");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 24;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
		
		
		if (isset($_GET["siralama"]) && $_GET["siralama"] != "0") {
			
		if(temizle($_GET["siralama"]=='dusukfiyat')){
			
		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by simdikifiyat ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
	
        } elseif (temizle($_GET["siralama"]=='yuksekfiyat')) {

 		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by simdikifiyat DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='encokyorum')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by yorum DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='enbegenilen')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by hit DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='eskitarih')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='yenitarih')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='onerilen')) {	
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
		
		} else {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu  or $aciklama  $katok order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
	    
		
		$__URUN__ = false;
        foreach ($pageoku as $katurunler) {
        $__URUN__ = true;
		
		?>		
				
				
				
				
        				<div class="product-layout col-lg-15 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block left-b">
                                    
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
                                    <div class="description item-desc hidden">
                                        <p> <?php echo strip_tags(mb_substr($katurunler['aciklama'],0,150));?>...</p>
                                    </div>
                                    <div class="list-block hidden">
                                        <button class="addToCart btn-button" type="button" onclick="javascript:location.href='urun/<?php echo $katurunler['seo']; ?>'"><i class="fa fa-shopping-basket"></i>
                                        </button>
                                        <button class="wishlist btn-button" type="button" onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'"><i class="fa fa-heart"></i>
                                        </button>
                                        <button class="compare btn-button" type="button"  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'"><i class="fa fa-refresh"></i>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="urun/<?php echo $katurunler['seo']; ?>"><i class="fa fa-eye"></i></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>

                            </div>
                        </div>




<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center" style="padding: 40px;font-weight: 500;">
	
	
		<div class="notfound_content">
		<img style="width: 250px;" src="<?php echo $sitetemasi;?>/user/urunyok.png"></img>
			<div class="title fs-5">Aradığın özellikte ürüne maalesef ulaşılmıyor.</div>
			<div class="text fs-5 fw-bold mt-1"><a href="<?php echo $url;?>">Tekrar denemek ister misin ?</a></div>
		</div>
	</div>													








													<?php }

													?>		
							





                    </div>
        			<!--// End Changed listings-->
        			<!-- Filters -->
        			<div class="product-filter product-filter-bottom filters-panel">
                        <div class="row">
                             <ul class="pagination">
            
			  <?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo "<li aria-current='page' class='active' aria-current='page'><a>".$i."</a></li>";

                                      

                   }else{

					   

				   $eklenecekstr="";

				   foreach($_GET as $key=>$value) {

							if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=".$value."&";

						}

						$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

							

                  echo "<li class='page-numbers'><a class='' href='arama/?pages=".$i.$eklenecekstr.$GET['siralama']."'>".$i."</a></li>";

          

          }



                  }

                }

          

          

          

          

                   ?> 

             
			  
			  
			  </ul>
                        </div>
                    </div>
        			<!-- //end Filters -->
        			
        		</div>
        		
        	</div>
        	

        	<!--Middle Part End-->
        </div>
    </div>
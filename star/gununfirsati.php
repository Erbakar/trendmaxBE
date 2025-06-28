<title>Fırsat Ürünleri</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Fırsat Ürünleri"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php
$adi = "";
$urunkodu = "";
$aciklama = "";

?>


	<style>

.prg-category .product {
  width: 24.7% !important;
}
	</style>
	
        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
		
				<li><a>Fırsat Ürünleri</a></li>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
      
          <div class="container prg-category">
            <div class="row">

            
              <div class="content blog blog-post col-sm-12 col-md-12" id="catalog">

              <div class="toolbar clearfix">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="sort-catalog">
         <span class="grid"><span class="fa fa-th-large"></span></span><a rel="nofollow" href="#" class="sort list" data-mode="t" data-value="list"><span class="fa fa-th-list"></span></a>
      </div>
      <div class="sort-catalog" style="display: block !important;">
	      <form  action="" method="GET" style="margin-bottom: 0px;">
						
									<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>
									<input type="hidden" name="fiyatfiltre" value="<?php echo temizle($_GET['fiyatfiltre']);?>"/>	
									
								
								
       <select id="sort-by-select"  name="siralama" onchange='this.form.submit()' class="sort btn btn-default without-styles">
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
      <div class="sort-catalog">
         <div class="btn-group show-by btn-select">
            <a rel="nofollow" class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#"><span>50</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a rel="nofollow" class="sort" href="#" data-mode="l" data-value="50">50</a></li>
               <li><a rel="nofollow" class="sort" href="#" data-mode="l" data-value="100">100</a></li>
               <li><a rel="nofollow" class="sort" href="#" data-mode="l" data-value="150">150</a></li>
            </ul>
         </div>
         <span class="per-page">ürün</span>
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6"></div>
</div>
                

                <div class="row products">

 							<?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and firsat='1'");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 44;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
		
		
		if (isset($_GET["siralama"]) && $_GET["siralama"] != "0") {
			
		if(temizle($_GET["siralama"]=='dusukfiyat')){
			
		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and firsat='1'  order by simdikifiyat ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
	
        } elseif (temizle($_GET["siralama"]=='yuksekfiyat')) {

 		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and firsat='1'  order by simdikifiyat DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='encokyorum')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and firsat='1'  order by yorum DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='enbegenilen')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and firsat='1'  order by hit DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='eskitarih')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and firsat='1'  order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='yenitarih')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and firsat='1'  order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='onerilen')) {	
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and firsat='1'  order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
		
		} else {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and firsat='1'  order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
	    
		
		$__URUN__ = false;
        foreach ($pageoku as $katurunler) {
        $__URUN__ = true;
		
		?>		
			



                  <div class="col-xs-4 col-sm-4 col-md-3 product productsType product-mini-3" id="products4609">

                       <div class="default">
			  <?php if($katurunler['idurum']=='1'){?>
                <div class="discountRate"><span class="discountRateMid">%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
				<span class="discountRateText"> İNDİRİM</span>
				</div>
				<?php } ?> 
                <div class="band5312"></div>
                <a class="employeeLink" href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>">
                  <div class="product-image">
                    <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="lazyloader.gif" />
                  </div>
                </a>
                <div class="messages"></div>
                <div class="actions not-rotation-actions">
                  <div class="actions-holder" style="width:168px;" data-productsID="5312" data-productsTitle="Haftanın Fırsatları">
                    <a class="add-wishlist" href="?favoriekle=<?php echo $katurunler['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                    <a class="product-quick" href="urun/<?php echo $katurunler['seo']; ?>" title="Gözat"><i class="fa fa-search"></i></a>
                    <a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="product-description">
                  <div class="vertical">
                    <h3 class="product-name">
                      <a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>"><?php echo $katurunler['adi']; ?></a>
                    </h3>
                    <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>

					
					</div>
                    <div class="storeTitle"></div>
                  </div>
                </div>
              </div>






                  </div>
				  
				  
		<?php }

													

													if (!$__URUN__){?>

														

<div id="notfound" style="text-align: center;border: 1px solid #d4d2d2;padding: 10px;"> 
<div class="notfound">
<div class="notfound-404">
<h1>4<span></span>4</h1>
</div>
<h2>Fırsat Ürünü Bulunamadı</h2>
<p>malesef aradığın ürünü bulamadım. Ya ürünü hiç olmadı yada hatalı bir linke tıkladın :)</p>
<a href="<?php echo $url;?>">Anasayfaya Geri Dön</a>
</div>
</div> 
			







													<?php }

													?>		
				  
	

<style>
  .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
  .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
  .discountRateText{font-size: 9px;}
  #notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
}

.notfound .notfound-404 h1 {
  font-size: 146px;
  font-weight: 700;
  margin: 0px;
  color: #232323;
}

.notfound .notfound-404 h1>span {
  display: inline-block;
  width: 120px;
  height: 120px;
  background-image: url('<?php echo $sitetemasi;?>/user/emoji.png');
  background-size: cover;
  -webkit-transform: scale(1.4);
      -ms-transform: scale(1.4);
          transform: scale(1.4);
  z-index: -1;
}

.notfound h2 {
  font-size: 22px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  color: #232323;
}

.notfound p {
  color: #787878;
  font-weight: 500;
}

.notfound a {
  display: inline-block;
  padding: 12px 30px;
  font-weight: 700;
  background-color: <?php echo $tema['t37'];?>;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 115px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h1>span {
    width: 86px;
    height: 86px;
  }
</style>
                </div>
                
                <div class="pagination-box bottom-padding-xp">

                  <ul class="pagination">

                    <li class="disabled"><a  onclick="return false;" title="İlk Sayfa"><i class="fa fa-angle-double-left"></i></a></li>

                    <li class="disabled"><a  onclick="return false;" title="Önceki Sayfa"><i class="fa fa-angle-left"></i></a></li>

                   
					
					  <?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo "<li class='active'><span>".$i."</span></li>";

                                      

                   }else{

					   

				   $eklenecekstr="";

				   foreach($_GET as $key=>$value) {

							if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=&".$value;

						}

						$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

							

                  echo "<li class='page-numbers'><a class='' href='gununfirsati/?pages=".$i.$eklenecekstr."'><span>".$i."</span></a></li>";

          

          }



                  }

                }

          

          

          

          

                   ?> 
					
					

                    <li class="disabled"><a onclick="return false;" title="Sonraki Sayfa"><i class="fa fa-angle-right"></i></a></li>

                    <li class="disabled"><a  onclick="return false;" title="Son Sayfa"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                  <span class="pagination-text"><strong style="color: #ff0000;font-weight: 500;">Fırsat ürünlerinde</strong> toplam <strong style="font-weight: 500;color: #ff0000"><?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and firsat='1'");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..</span>
                </div>
                <div class="clearfix"></div>

              

              </div>

            </div>
          </div>
        </section>
	
        <div class="clearfix"></div>  
		</div>
      
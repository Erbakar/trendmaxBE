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



      <section class="py-5 products-listing bg-light">
         <div class="container">
            <div class="row">
               
               <div class="col-md-12">
                  <div class="shop-head mb-3">
                     <div class="btn-group float-right mt-2 d-none d-sm-none d-md-block">
                       <form  action="" method="GET" style="margin-bottom: 0px;">
									   	<?php 
							if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {
								$fitregelenveri = temizle($_GET["filtreleme"]);
								foreach($fitregelenveri as $filtreverisi){?>
									<input type="hidden" name="filtreleme[]" value="<?php echo $filtreverisi;?>"/>
								<?php  }}?>
								
								<?php 
								if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {
									$markagelenveri = temizle($_GET["markalar"]);
									foreach($markagelenveri as $markaverisi){?>
										<input type="hidden" name="markalar[]" value="<?php echo $markaverisi;?>"/>
									<?php  }}?>
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
                     <h5 class="mb-1 text-dark">Arama Sonuçları</h5>
                     <a href="<?php echo $url;?>"><span class="icofont icofont-ui-home"></span> Anasayfa</a>

			
					 <span class="icofont icofont-thin-right"></span> 
					 <span>Arama Sonuçları</span>
					 
                  </div>
                  <div class="row" style="background: white;
padding: 10px;">
				  
				  
				  
				  
								<?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu or $aciklama");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 44333333;
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
			
	

								
				  
				  
                     <div class="col-6 col-md-4">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                           <span class="like-icon">
						   <a href="?favoriekle=<?php echo $katurunler['id']; ?>"> <i class="icofont icofont-heart"></i></a></span>
                           <a href="urun/<?php echo $katurunler['seo']; ?>">
                    <?php if($katurunler['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
					<?php } ?> 	
                            <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="card-img-top urunresim" alt="<?php echo $pop['adi']; ?>"></a>
					 
                           <div class="card-body">
                              <h6 class="card-title mb-1"><?php echo $katurunler['adi']; ?></h6>
                              
							  
							   <div class="stars-rating">
					 
					  <?php echo $katurunler['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   
						  
						   

						   <span>
						              <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> 
						   </span>
                     </div>
                             <p class="mb-0 text-dark" style="  font-size: 15px;
  font-weight: 500;">
					
  					 <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>

					 
					 </p>
                           </div>
						   
						   		
						   
						   
                        </div>
                     </div>
                    
                  
  <?php }

													

													if (!$__URUN__){?>

														

<div id="notfound" style="text-align: center;padding: 10px;"> 
<div class="notfound">
<div class="notfound-404">
<h1>4<span></span>4</h1>
</div>
<h2>Oops! Aradığın Ürün Bulunamadı</h2>
<p>malesef aradığın ürünü bulamadım. Ya ürünü hiç olmadı yada hatalı bir linke tıkladın :)</p>
<a href="<?php echo $url;?>">Anasayfaya Geri Dön</a>
</div>
</div> 
			







													<?php }

													?>		
				  

				 
				 
				 
				 
                  </div>
				
				  
               </div>
			   
			   
			   
            </div>
         </div>
         
      </section>
	   <style>
	#notfound {
 
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 60%;
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
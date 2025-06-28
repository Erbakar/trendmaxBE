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
	   
<div id="product-category" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
	  
				<li><a>Arama Sonuçları</a></li>	
   </ul>
   <div class="row">
 
   <div id="content" class="col-sm-12">
      <h2>Arama Sonuçları</h2>
      <div style="margin-bottom:25px;" class="row">
         <div class="col-sm-10">Arama sonuçları</div>
      </div>
      <hr>
      
      <div class="row">
         <div class="col-md-6 col-xs-6">
            <div class="form-group input-group input-group-sm">
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
         </div>
        
      </div>
      <div class="row">
					<?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu or $aciklama");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 44;
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

       
		 
		 
		 		  	   <div class="leftrightx col-lg-3 col-md-3 col-sm-12 col-xs-6">
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
<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center" style="padding: 40px;font-weight: 500;">
	
	
		<div class="notfound_content">
			<div class="title fs-5">malesef aradığın ürünü bulamadım. Ya ürünü hiç olmadı yada hatalı bir linke tıkladın :)</div>
			
		</div>
	</div>													








													<?php }

													?>		
							
		 
		 
		 
      </div>
      <div class="row">
        
         <div class="col-sm-12">
		 </div>
      </div>
  
   </div>
</div>

</div>
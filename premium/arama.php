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
foreach($ara AS $a)
{
    $adi .= "adi LIKE '%".$a."%' AND ";
    $urunkodu .= "urunkodu LIKE '%".$a."%' AND ";
}
$adi = substr($adi, 0, -4);
$urunkodu = substr($urunkodu, 0, -4);

?>

	   

	   

		   <main class="main">

     <nav class="breadcrumb-nav mb-1 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Arama Sonuçları</li>
                    </ul>
                </div>
            </nav>

       
	   <div class="container">
	   
	        <h2 class="title title-underline mb-4 ls-normal appear-animate">Favorilerim</h2>
                <div class="owl-carousel owl-theme owl-shadow-carousel appear-animate row cols-xl-8 cols-lg-6 cols-md-4 cols-2 pb-2 mb-10" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 5
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 8,
                            'dots': false
                        }
                    }
                }">
				
				 
     <?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 200000;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
		
		
		if (isset($_GET["siralama"]) && $_GET["siralama"] != "0") {
			
		if(temizle($_GET["siralama"]=='dusukfiyat')){
			
		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu order by simdikifiyat ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
	
        } elseif (temizle($_GET["siralama"]=='yuksekfiyat')) {

 		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and $adi or $urunkodu order by simdikifiyat DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='encokyorum')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by yorum DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='enbegenilen')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by hit DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='eskitarih')) {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		} elseif (temizle($_GET["siralama"]=='yenitarih')) {
			
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    	
		} elseif (temizle($_GET["siralama"]=='onerilen')) {	
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
		
		} else {
		
		$pageoku = $ozy->query("select * from urunler where durum='1' and $adi or $urunkodu order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
  	    
		}
		
	    
		
		$__URUN__ = false;
        foreach ($pageoku as $rastgele) {
        $__URUN__ = true;
		
		?>				
                    <div class="product-wrap mb-0">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="product-defaproduct-default.html">
                                    <img src="resimler/urunler/<?php echo $rastgele['resim'];?>" alt="Category image" width="130" height="146" style="width: 130px;height: 146px;background-color: #fff">
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="urun/<?php echo $rastgele['seo'];?>"><?php echo $rastgele['adi'];?></a>
                            </h4>
							
                        </div>
					
                    </div>
                    <!-- End of Product Wrap -->
                  
                   
              <?php }
							
                            if (!$__URUN__){
								
                            echo "".$_GET['arama']." kelimeye ait herhangi bir ürün bulunamadı :(";
							
							}
							?>				
									
										
				
                    
                   
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Reviewed Producs -->
	   
	   
	   
	   
	   </div>
	   
	   
	   











	





        </main>
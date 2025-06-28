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
  
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Arama Sonuçları</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

<div class="page-content">
            	<div class="container">
			<div class="title-module"><h3>Arama Sonuçları</h3></div>
<div class="row">
						
	                  <?php 

     
        $pages = intval(@$_GET['pages']);
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from urunler where durum='1' and $adi or $urunkodu");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 20;
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
        foreach ($pageoku as $anaurunler) {
        $__URUN__ = true;
		
		?>					



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
                
	
                    
							<?php }
							
                            if (!$__URUN__){
								
                            echo "".$_GET['arama']." kelimeye ait herhangi bir ürün bulunamadı :(";
							
							}
							?>				
									
									
									


	            	
            	</div><!-- End .container -->
            </div>
   </div>



	


        </main>
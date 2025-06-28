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



<section id="wrapper">
   <div class="container">
      <div class="row">
         <nav data-depth="2" class="breadcrumb hidden-sm-down">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                  <a itemprop="item" href="<?php echo $url;?>">
                  <span itemprop="name">Anasayfa</span>
                  </a>
                  <meta itemprop="position" content="1">
               </li>
               <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                  <a itemprop="item">
                  <span itemprop="name">Arama Sonuçları</span>
                  </a>
                  <meta itemprop="position" content="2">
               </li>
            </ol>
         </nav>
       
         <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12">
            <section id="main">
              
                     <div id="js-product-list">
                        <div class="laberProductGrid laberProducts">
                           <div class="row">
						   
						   
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
        foreach ($pageoku as $katurunler) {
        $__URUN__ = true;
		
		?>		
							  
							  
							  
                              <div class="item-inner 
                                 col-lg-3 col-md-6 col-sm-6 col-xs-6
                                 last-item-of-tablet-line
                                 last-item-of-mobile-line
                                 ">
                                  <div class="item">
      <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope="" itemtype="http://schema.org/Product">
         <div class="laberProduct-container">
            <div class="laberProduct-image">
			
			
			
               <a href="urun/<?php echo $katurunler['seo']; ?>" class="thumbnail product-thumbnail">
               <span class="cover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410">
               </span>
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
			 <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
               <span class="hover_image">
               <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" width="410" height="410"> 
               </span>
			 <?php }?>    
			 <?php } else { ?>	
              <span class="hover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410"> 
               </span>
            <?php }?> 
			 
               </a>
			   
			   
               <ul class="laberProduct-flags">
			   <?php if($katurunler['idurum']=='1'){?>
                  <li class="laber-flag laber-discount"><span>-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span></li>
				<?php } ?> 
				<?php if($katurunler['yeni']=='1'){?>
                  <li class="laber-flag laber-new"><span>Yeni</span></li>
				  <?php } ?> 
               </ul>
               <div class="laberActions">
                  <div class="laberActions-i">
                     <div class="laberItem">
                        <div class="laberwishlist product-item-wishlist">
                           <a class="addToWishlist wishlistProd_2" title="Favorilerime Ekle" href="?favoriekle=<?php echo $katurunler['id']; ?>" rel="2">
                           <i class="icon-heart"></i> <span>Favorilerime Ekle</span>
                           </a>
                        </div>
                     </div>
                     <div class="laberItem">		
                        <a class="button-action" data-id-product="2" href="?karsilastir=<?php echo $katurunler['id']; ?>"  title="Karşılaştır">
                       <i class="icon-layers" aria-hidden="true"></i>
                        <i class="removeCompare icon-close"></i><span>Karşılaştır</span>
                        </a>
                     </div>
                     <div class="laberItem">
                        <a href="urun/<?php echo $katurunler['seo']; ?>" class="" title="İncele">
                        <i class="icon-eye"></i>
                        <span>İncele</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="laberCart">
                  
                     <button onclick="window.location.href='urun/<?php echo $katurunler['seo']; ?>'" class="laberBottom
                        ">
                     <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i>
                     <span>+ Sepete Ekle</span>
                
               </div>
            </div>
            <div class="laber-product-description">
               <h2 class="productName" itemprop="name"><a href="urun/<?php echo $katurunler['seo'];?>"><?php echo $katurunler['adi'];?></a></h2>
               <div class="comments_note">
                  <div class="star_content pull-left">
                                      <?php echo $katurunler['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
					 
					 
                  </div>
               </div>
			  <div class="manufacturer_name">
                  <span>Ürün Kodu:</span> <?php echo $katurunler['urunkodu'];?>
               </div>
			   
			   
			   
               <div class="laber-product-price-and-shipping has_discount">
                  <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               </div>
            
			
			
            </div>
			
		
			
         </div>
      </article>
   </div>
                              </div>
							  
							  
                            			<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center">
	
	
		<div class="notfound_content">
			<div class="title fs-5"><?php  echo "".$_GET['arama']." kelimeye ait herhangi bir ürün bulunamadı :(";?></div>
		</div>
	</div>													








													<?php }

													?>			
													
							  
							  
                           </div>
                        </div>
                    
                       
                     
                     </div>
                  </div>
                  <div id="js-product-list-bottom">
                     <div id="js-product-list-bottom"></div>
                  </div>
               </section>
            </section>
         </div>
      </div>
   </div>
</section>

<style>
.form-check-label {
  padding-left: 0px !important;
  margin-bottom: 0;
  cursor: pointer;
}

#laber-products-top .total-products p {
  margin: 0;
  text-align: left;
  line-height: 45px;
}
</style>
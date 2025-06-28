<title>Favori Ürünlerim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   
		   <main class="main">
  
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Favori Ürünlerim</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

<div class="page-content">
            	<div class="container">
			<div class="title-module"><h3>Favorilerim</h3></div>
<div class="row">
						
	                    <?php $uyesepeti11 = $ozy->prepare("SELECT * FROM urunler 
	                    INNER JOIN favoriler ON urunler.id = favoriler.urunid  
	                    WHERE favoriler.gelenkim=? ORDER BY favoriler.id DESC");                
	                    $uyesepeti11->execute(array($sepetimdekikim));
	                    foreach ($uyesepeti11 as $anaurunler) {?>
	



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

		<button type="button">
		<a style="color: white !important;" href="?favorilsil=<?php echo $anaurunler['id']; ?>">
		<i style="margin-right: 6px;" class='fa fa-close'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Favorilerimden Çıkar</span></a>
		</button>
		 
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $anaurunler['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
		
		<button type="button">
		<a style="color: white !important;" href="?favorilsil=<?php echo $anaurunler['id']; ?>">
		<i style="margin-right: 6px;" class='fa fa-close'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Favorilerimden Çıkar</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>


	            	
            	</div><!-- End .container -->
            </div>
   </div>



	


        </main>
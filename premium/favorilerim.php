<title>Favori Ürünlerim</title>

<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">

<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">

<meta property="og:url" content="<?php echo $url; ?>"/>

<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>

<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>



	   

		   <main class="main">

     <nav class="breadcrumb-nav mb-1 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Favorilerim</li>
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
				
				    <?php $uyesepeti11 = $ozy->prepare("SELECT * FROM urunler 

	                    INNER JOIN favoriler ON urunler.id = favoriler.urunid  

	                    WHERE favoriler.gelenkim=? ORDER BY favoriler.id DESC");                

	                    $uyesepeti11->execute(array($sepetimdekikim));

	$__URUN__ = false;

        foreach ($uyesepeti11 as $rastgele) {
			
     
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
						 <button class="add-to-cart-button" style="background:<?php echo $tema['t8']; ?>;" type="button" onclick="location.href='?favorilsil=<?php echo $rastgele['id']; ?>'">Sil </button>
       
                    </div>
                    <!-- End of Product Wrap -->
                  
                   
                 <?php }

							

                            if (!$__URUN__){

								

                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Ürün Yok:(</b>";

							

							}

							?>	
                    
                   
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Reviewed Producs -->
	   
	   
	   
	   
	   </div>
	   
	   
	   











	





        </main>
<title>Favori Ürünlerim</title>

<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">

<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">

<meta property="og:url" content="<?php echo $url; ?>"/>

<meta property="og:title" content="Favori Ürünlerim"/>

<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
	
	
	
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
		
		<li><a>Favori Ürünlerim</a></li>	
		</ul>
		
		<div class="row">
	
			
        	<!--Middle Part Start-->
        	<div id="content" class="col-md-12 col-sm-12">
        		<div class="products-category">
                    <h3 class="title-category ">Favorilerim</h3>
				
					
					
        			
        			<!--changed listings-->
                    <div class="products-list row nopadding-xs so-filter-gird grid">
            	
				
				                     
                            
					<?php $uyesepeti11 = $ozy->prepare("SELECT * FROM urunler 

	                    INNER JOIN favoriler ON urunler.id = favoriler.urunid  

	                    WHERE favoriler.gelenkim=? ORDER BY favoriler.id DESC");                

	                    $uyesepeti11->execute(array($sepetimdekikim));

	$__URUN__ = false;

        foreach ($uyesepeti11 as $katurunler) {
			
     
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
                                                    <button  onclick="javascript:location.href='?favorilsil=<?php echo $katurunler['id']; ?>'" type="button" class="wishlist btn-button" title="Favorilerine Ekle"><i class="fa fa-heart-o"></i><span>Favorilerimden Kaldır</span>
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
                                        <button class="wishlist btn-button" type="button" onclick="javascript:location.href='?favorilsil=<?php echo $katurunler['id']; ?>'"><i class="fa fa-heart"></i>
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
			<div class="title fs-5">Favorilerinizde henüz ürün bulunmuyor.</div>
			<div class="text fs-5 fw-bold mt-1"><a href="<?php echo $url;?>">Hemen eklemek ister misiniz ?</a></div>
		</div>
	</div>													








													<?php }

													?>		
							




                    </div>
        			<!--// End Changed listings-->
   
        		</div>
        		
        	</div>
        	

        	<!--Middle Part End-->
        </div>
    </div>
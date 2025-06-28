    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 

    
 <!-- Start of Main-->
        <main class="main">
            <section class="intro-section">
                <div class="owl-carousel owl-theme owl-nav-inner owl-dot-inner owl-nav-lg animation-slider gutter-no row cols-1" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'items': 1,
                    'responsive': {
                        '1600': {
                            'nav': true,
                            'dots': false
                        }   
                    }
                }">
				
				
				
				 <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($slider as $demo){?> 
                  <a href="<?php echo $demo['link'];?>"> <div class="banner banner-fixed intro-slide intro-slide1"><img  src="resimler/slider/<?php echo $demo['resim'];?>">
                    </img>
                    </div></a>
                    <!-- End of .intro-slide1 -->
	<?php } ?> 	
                  
                    <!-- End of .intro-slide3 -->
                </div>
                <!-- End of .owl-carousel -->
            </section>
            <!-- End of .intro-section -->

            <div class="container">
                <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1icon-box-wrapper appear-animate br-sm mt-6 mb-6" data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">
                    <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Ücretsiz Kargo İmkanı</h4>
                            <p class="text-default"><?php echo $system['ucretsizkargo']; ?> TL ve üzeri</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Güvenli Alışveriş</h4>
                            <p class="text-default">256 Bit SSL Şifreleme</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Para İadesi Garantili</h4>
                            <p class="text-default">14 Gün Kolay İade</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Müşteri Hizmetleri</h4>
                            <p class="text-default">7/24 Kesintisiz Destek Hattı</p>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
                 
				    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                               <a href="<?php echo $tema['t5']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="Category Banner" width="610" height="160px" style="width: 610px;height: 160px;background-color: #ecedec;"></a>
                            </figure>
                        
                        </div>
                    </div>
				 
                     <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                               <a href="<?php echo $tema['t6']; ?>"> <img src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" alt="Category Banner" width="610" height="160px" style="width: 610px;height: 160px;background-color: #ecedec;"></a>
                            </figure>
                        
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-lg-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal">Günün Fırsatları</h4>
                            <div class="owl-carousel owl-theme owl-nav-top owl-nav-lg row cols-1 gutter-no" data-owl-options="{
                                'nav': true,
                                'dots': false,
                                'margin': 20,
                                'items': 1
                            }">
                              
									
			 <?php $gr = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 1")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($gr as $gfirsat){?>


                                <div class="product product-single row">
                                    <div class="col-md-6">
                                            <div class="product-gallery product-gallery-vertical mb-0">
                                            <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                                <figure class="product-image">
													<a href="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" data-lightbox="image-1">
                                                    <img src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" data-zoom-image="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" alt="Product Image" style="width: 362;height: 478px;">
                                                    </a>
												</figure>
												
												 <?php 
			 $sayfaidm = $gfirsat['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>		
												<?php 
			 $gelenid = $gfirsat['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 4")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
                                                <figure class="product-image">
												<a href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-lightbox="image-1">
                                                    <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-zoom-image="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="Product Image" style="width: 362;height: 478px;">
                                                </a>
												</figure>
                                             <?php } }?>  
											 
											  
                                            </div>
                                            <div class="product-thumbs-wrap">
                                                <div class="product-thumbs">
                                                    <div class="product-thumb active">
                                                        <img src="resimler/urunler/<?php echo $gfirsat['firsatresim']; ?>" style="width: 60px;height: 68px;">
                                                    </div>
													
													
								 <?php 
			 $sayfaidm = $gfirsat['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>					
													<?php 
			 $gelenid = $gfirsat['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 4")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
                                                    <div class="product-thumb">
                                                        <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" style="width: 60px;height: 68px;">
                                                    </div>
                                                <?php }} ?>  
												
												
                                                </div>
                                            </div>
											
				 <?php if($gfirsat['idurum']=='1'){?>
		        <div class="product-label-group">
			  <label class="product-label label-discount">
			  -%<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?> İndirimli
			</label>
			</div>
			<?php } ?>
                                            
											
											
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-details scrollable">
                                            <h2 class="product-title mb-1"><a href="urun/<?php echo $gfirsat['seo']; ?>"><?php echo $gfirsat['adi']; ?></a></h2>

                                            <hr class="product-divider">

                                            <div class="product-price">
											
											<?php echo urunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
											
											
											</div>

                                            <div class="product-countdown-container flex-wrap">
                                                <label class="mr-2 text-default"><?php echo $gfirsat['kisa']; ?></label>
                                               
                                            </div>

                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 
											<?php echo $gfirsat['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $gfirsat['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $gfirsat['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $gfirsat['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $gfirsat['yildiz'] == '5' ? '100%' : null; ?>
											;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="urun/<?php echo $gfirsat['seo']; ?>" class="rating-reviews">( <?php 
								      $sayfaid = $gfirsat['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum )</a>
                                            </div>

                                    <?php 
								      $kod = $gfirsat['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
                                            <div class="product-variation-price" <?php echo $varyantsayi <= '1' ? 'style="display:none;padding-top:0px !important;"' : null; ?>>
                                               <h5>Renk: </h5>

                                        <div class="product-nav product-nav-thumbs">
                                        <?php 
										$sayfaidmiz = $gfirsat['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
                                            <a href="urun/<?php echo $varyantbak['seo'];?>" style="border: 1px solid #f4f4f4;

margin-right: 2px;">
                                                <img style="border: 2px solid #f4f4f4;width: 40px !important;
height: 60px !important;" class="lazyload" src="resimler/urunler/<?php echo $varyantbak['resim'];?>">
                                            </a>
										<?php } ?>		
											
                                        </div><!-- End .product-nav -->
                                            </div>
											
										
											
											
											

                                            <div class="product pt-4">
                                              
                                                <a style="width: 100%;" href="urun/<?php echo $gfirsat['seo']; ?>" class="btn btn-primary">
                                                    <i class="w-icon-cart"></i>
                                                    <span>Sepete Ekle</span>
                                                </a>
                                            </div>

                                            <div class="social-links-wrapper mt-1">
                                                <div class="social-links">
                                                    <div class="social-icons social-no-color border-thin">
                                                       
														   <a class="social-icon social-facebook w-icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>/urun/<?php echo $gfirsat['seo']; ?>" class="social-icon" title="Facebook" target="_blank"></a>
                                            <a class="social-icon social-twitter w-icon-twitter"  href="https://twitter.com/intent/tweet?url=<?php echo $url;?>/urun/<?php echo $gfirsat['seo']; ?>" class="social-icon" title="Twitter" target="_blank"></a>
                                            <a class="social-icon social-whatsapp fab fa-whatsapp"  href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text= Baksana ne buldum:) <?php echo $gfirsat['adi']; ?> <?php echo $url;?>/urun/<?php echo $gfirsat['seo']; ?>" class="social-icon" title="WhatsApp" target="_blank"></a>
											<a class="social-icon social-google w-icon-google" href="https://plus.google.com/share?url=<?php echo $url;?>/urun/<?php echo $gfirsat['seo']; ?>" class="social-icon" title="Google Plus" target="_blank"></a>
                                         
                                                    </div>
                                                </div>
                                                <span class="divider d-xs-show"></span>
                                                <div class="product-link-wrapper d-flex">
                                                    <a href="?favoriekle=<?php echo $gfirsat['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                    <a href="?karsilastir=<?php echo $gfirsat['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="widget widget-products widget-products-bordered h-100">
                            <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2" style="padding-left:10px;">Trend Ürünler</h4>
                                <div class="owl-carousel owl-theme owl-nav-top row cols-lg-1 cols-md-3" data-owl-options="{
                                    'nav': true,
                                    'dots': false,
                                    'margin': 20,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3
                                        },
                                        '992': {
                                            'items': 1
                                        }
                                    }
                                }">
                                    <div class="product-widget-wrap">
                                      
							<?php $ukkz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 4")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>

									  
                                        <div class="product product-widget bb-no" style="border:none !important;">
                                            <figure class="product-media">
                                                <a href="urun/<?php echo $sizinicin['seo']; ?>">
                                                    <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="Product" style="width: 105px;height: 118px;">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:  <?php echo $sizinicin['yildiz'] == '1' ? '20%' : null; ?>	
							   <?php echo $sizinicin['yildiz'] == '2' ? '40%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '3' ? '60%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '4' ? '80%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>          
							   
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
										
										
                                      
                                    </div>
                                    <div class="product-widget-wrap">
                                 			<?php $ukkz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 4,4")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>

									  
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="urun/<?php echo $sizinicin['seo']; ?>">
                                                    <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="Product" style="width: 105px;height: 118px;">
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:  <?php echo $sizinicin['yildiz'] == '1' ? '20%' : null; ?>	
							   <?php echo $sizinicin['yildiz'] == '2' ? '40%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '3' ? '60%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '4' ? '80%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>          
							   
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
                                    </div>
                                    <div class="product-widget-wrap">
                                           			<?php $ukkz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc limit 8,4")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ukkz as $sizinicin){?>

									  
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="urun/<?php echo $sizinicin['seo']; ?>">
                                                    <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="Product" style="width: 105px;height: 118px;">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:  <?php echo $sizinicin['yildiz'] == '1' ? '20%' : null; ?>	
							   <?php echo $sizinicin['yildiz'] == '2' ? '40%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '3' ? '60%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '4' ? '80%' : null; ?>
							   <?php echo $sizinicin['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>          
							   
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Deals Wrapper -->
            </div>

            <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">Çok Satan Ürün Kategorilerimiz</h2>
                    <div class="owl-carousel owl-theme row cols-lg-6 cols-md-5 cols-sm-3 cols-2" data-owl-options="{
                        'nav': false,
                        'dots': false,
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
                            }
                        }
                    }">
                       
					   
					   		<?php $kati = $ozy->query("select * from kategoriler where durum='1' and ikongoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($kati as $kategori){?>
                        <div class="category category-classic category-absolute overlay-zoom br-xs">
                            <a href="kategori/<?php echo $kategori['seo']; ?>" class="category-media">
                                <img src="resimler/kategoriler/<?php echo $kategori['ikon']; ?>" alt="Category" style="width: 190px;height: 184px;">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?php echo $kategori['adi']; ?></h4>
                                <a href="kategori/<?php echo $kategori['seo']; ?>" class="btn btn-primary btn-link btn-underline">Ürünleri
                                    Gör</a>
                            </div>
                        </div>
                        
                       <?php } ?>  
                        
						
                    </div>
                </div>
            </section>
            <!-- End of .category-section top-category -->

            <div class="container">
			
			
			
			   <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
           foreach($katiz as $kategorimx){?> 
			  <div class="product-wrapper-1 appear-animate mt-5">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0"><?php echo $kategorimx['adi']; ?></h2>
                        <a href="kategori/<?php echo $kategorimx['seo']; ?>" class="font-size-normal font-weight-bold ls-25 mb-0">Tüm
                            Ürünler<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(resimler/kategoriler/<?php echo $kategorimx['yanresim']; ?>); 
                                background-color: #ebeced;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">POPÜLER</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                        <?php echo $kategorimx['adi']; ?><br> <span style="font-size: 15px;" class="font-weight-normal"><?php 
										$katid = $kategorimx['id'];
										$katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

                                         $katsorgu->execute();

                                         $katsay = $katsorgu->fetchColumn();

                                         echo ''.$katsay.''; ?> adet ürün mevcut.</span>
                                    </h3>
                                    <a href="kategori/<?php echo $kategorimx['seo']; ?>" class="btn btn-dark btn-outline btn-rounded btn-sm">Alışverişe Başla</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 3
                                    },
                                    '1200': {
                                        'items': 4
                                    }
                                }
                            }">
                              
							  
							 <?php 
							$katimiz = $kategorimx['id']; 
							$ukk = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katimiz,kategori) order by rand() limit 16")->fetchAll(PDO::FETCH_ASSOC); 
                            $sayac =0;
							foreach($ukk as $katurunler){
                            $sayac++;
                            if ($sayac==1){
                            echo '<div class="product-col">';
                            }?>
								
								
								
								
                                    <div class="product-wrap product text-center">
									
                                        <figure class="product-media">
										
                                           
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $katurunler['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" style="width: 216px;height: 290px;">
             <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" style="width: 216px;height: 290px;">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $katurunler['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" style="width: 216px;height: 290px;">
             </a>
			 <?php } ?>
                                            <div class="product-action-vertical">
                                               <a href="?favoriekle=<?php echo $katurunler['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                               <a href="?karsilastir=<?php echo $katurunler['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                               <a href="urun/<?php echo $katurunler['seo']; ?>" class="btn-product-icon w-icon-cart" title="Sepete Ekle"></a>
                                                 

										   </div>
												 <?php if($katurunler['idurum']=='1'){?>
		        <div class="product-label-group">
			  <label class="product-label label-discount">
			  -%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?> İndirimli
			</label>
			</div>
			<?php } ?>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?> </a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:
													<?php echo $katurunler['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="urun/<?php echo $katurunler['seo']; ?>" class="rating-reviews">
												( <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum )
												</a>
                                            </div>
                                            <div class="product-price">
                                            <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
                                            </div>
                                        </div>
                                    </div>
                                
								
								
																	<?php if ($sayac==2) {

																		echo '</div>';

																		$sayac=0;

																	} ?>
								
									<?php } ?>







								
								
								
								
								
								
								
								
								
								
								
								
								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

			
			   <?php } ?>
			
			
			
			
			
			
			  

                <div class="banner banner-fashion appear-animate br-sm mb-9" style="padding: 0px !important;background-color: #383839;">
                   <figure> <a href="<?php echo $tema['t14']; ?>">
				  <img src="resimler/temaayarlari/<?php echo $tema['anabanner']; ?>">
				  </img>
				   
				   </a>
				   
				     </figure>
                </div>
                <!-- End of Banner Fashion -->

			
			
			
			
			
                <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popüler Ürünlerimiz
                </h2>
                <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">Yeni Ürünler</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Çok Satan Ürünlerimiz</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">Son Eklenen Ürünler</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    <div class="tab-pane active pt-4" id="tab1-1">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
							<?php $grz = $ozy->query("select * from urunler where durum='1' and yeni='1' order by rand() limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($grz as $yeni){?>

						
						
                            <div class="product-wrap">
<div class="product text-center">
									
      <figure class="product-media">
										
                                           
			 <?php 
			 $sayfaidm = $yeni['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $yeni['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $yeni['resim']; ?>" alt="<?php echo $yeni['adi']; ?>" title="<?php echo $yeni['adi']; ?>" style="width: 216px;height: 290px;">
             <?php 
			 $gelenid = $yeni['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $yeni['adi']; ?>" title="<?php echo $yeni['adi']; ?>" style="width: 216px;height: 290px;">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $yeni['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $yeni['resim']; ?>" alt="<?php echo $yeni['adi']; ?>" title="<?php echo $yeni['adi']; ?>" style="width: 216px;height: 290px;">
             </a>
			 <?php } ?>
                                            <div class="product-action-vertical">
                                               <a href="?favoriekle=<?php echo $yeni['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                               <a href="?karsilastir=<?php echo $yeni['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                               <a href="urun/<?php echo $yeni['seo']; ?>" class="btn-product-icon w-icon-cart" title="Sepete Ekle"></a>
                                                 

										   </div>
												 <?php if($yeni['idurum']=='1'){?>
		        <div class="product-label-group">
			  <label class="product-label label-discount">
			  -%<?php echo yuzdeHesaplama($yeni['fiyat'],$yeni['ifiyat']);?> İndirimli
			</label>
			</div>
			<?php } ?>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="urun/<?php echo $yeni['seo']; ?>"><?php echo $yeni['adi']; ?> </a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:
													<?php echo $yeni['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $yeni['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $yeni['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $yeni['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $yeni['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="urun/<?php echo $yeni['seo']; ?>" class="rating-reviews">
												( <?php 
								      $sayfaid = $yeni['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum )
												</a>
                                            </div>
                                            <div class="product-price">
                                            <?php echo urunfiyatbelirle($yeni['kdv'],$yeni['idurum'],$yeni['fiyat'],$yeni['ifiyat']);?>
											
                                            </div>
                                        </div>
                                    </div>
									 </div>
                          
						<?php } ?>
						
						
					 </div>	
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-2">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
						
						
						<?php $grzs = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by rand() limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($grzs as $coksatan){?>

						
						
                            <div class="product-wrap">
<div class="product text-center">
									
      <figure class="product-media">
										
                                           
			 <?php 
			 $sayfaidm = $coksatan['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $coksatan['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $coksatan['resim']; ?>" alt="<?php echo $coksatan['adi']; ?>" title="<?php echo $coksatan['adi']; ?>" style="width: 216px;height: 290px;">
             <?php 
			 $gelenid = $coksatan['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $coksatan['adi']; ?>" title="<?php echo $coksatan['adi']; ?>" style="width: 216px;height: 290px;">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $coksatan['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $coksatan['resim']; ?>" alt="<?php echo $coksatan['adi']; ?>" title="<?php echo $coksatan['adi']; ?>" style="width: 216px;height: 290px;">
             </a>
			 <?php } ?>
                                            <div class="product-action-vertical">
                                               <a href="?favoriekle=<?php echo $coksatan['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                               <a href="?karsilastir=<?php echo $coksatan['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                               <a href="urun/<?php echo $coksatan['seo']; ?>" class="btn-product-icon w-icon-cart" title="Sepete Ekle"></a>
                                                 

										   </div>
												 <?php if($coksatan['idurum']=='1'){?>
		        <div class="product-label-group">
			  <label class="product-label label-discount">
			  -%<?php echo yuzdeHesaplama($coksatan['fiyat'],$coksatan['ifiyat']);?> İndirimli
			</label>
			</div>
			<?php } ?>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="urun/<?php echo $coksatan['seo']; ?>"><?php echo $coksatan['adi']; ?> </a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                     <span class="ratings" style="width:
													<?php echo $coksatan['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $coksatan['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $coksatan['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $coksatan['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $coksatan['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="urun/<?php echo $coksatan['seo']; ?>" class="rating-reviews">
												( <?php 
								      $sayfaid = $coksatan['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum )
												</a>
                                            </div>
                                            <div class="product-price">
                                            <?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
											
                                            </div>
                                        </div>
                                    </div>
									 </div>
                          
						<?php } ?>
						
						
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-3">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                           
						   
						   <?php $grzszzzz = $ozy->query("select * from urunler where durum='1'  order by id desc limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($grzszzzz as $enson){?>

						
						
                            <div class="product-wrap">
<div class="product text-center">
									
      <figure class="product-media">
										
                                           
			 <?php 
			 $sayfaidm = $enson['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $enson['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $enson['resim']; ?>" alt="<?php echo $enson['adi']; ?>" title="<?php echo $enson['adi']; ?>" style="width: 216px;height: 290px;">
             <?php 
			 $gelenid = $enson['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $enson['adi']; ?>" title="<?php echo $enson['adi']; ?>" style="width: 216px;height: 290px;">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $enson['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $enson['resim']; ?>" alt="<?php echo $enson['adi']; ?>" title="<?php echo $enson['adi']; ?>" style="width: 216px;height: 290px;">
             </a>
			 <?php } ?>
                                            <div class="product-action-vertical">
                                               <a href="?favoriekle=<?php echo $enson['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                               <a href="?karsilastir=<?php echo $enson['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                               <a href="urun/<?php echo $enson['seo']; ?>" class="btn-product-icon w-icon-cart" title="Sepete Ekle"></a>
                                                 

										   </div>
												 <?php if($enson['idurum']=='1'){?>
		        <div class="product-label-group">
			  <label class="product-label label-discount">
			  -%<?php echo yuzdeHesaplama($enson['fiyat'],$enson['ifiyat']);?> İndirimli
			</label>
			</div>
			<?php } ?>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="urun/<?php echo $enson['seo']; ?>"><?php echo $enson['adi']; ?> </a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                       <span class="ratings" style="width:
													<?php echo $enson['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $enson['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $enson['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $enson['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $enson['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="urun/<?php echo $enson['seo']; ?>" class="rating-reviews">
												( <?php 
								      $sayfaid = $enson['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum )
												</a>
                                            </div>
                                            <div class="product-price">
                                            <?php echo urunfiyatbelirle($enson['kdv'],$enson['idurum'],$enson['fiyat'],$enson['ifiyat']);?>
											
                                            </div>
                                        </div>
                                    </div>
									 </div>
                          
						<?php } ?>
						   
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                   
                </div>
                <!-- End of Tab Content -->

           

              
			  
			  
			  
			  

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Markalar</h2>
                <div class="owl-carousel owl-theme brands-wrapper mb-9 row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 appear-animate" data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'margin': 0,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        },
                        '1200': {
                            'items': 6
                        }
                    }
                }">
				
				
				
						 <?php 
							
							$ukkz = $ozy->query("select * from markalar where durum='1' order by rand() desc limit 12")->fetchAll(PDO::FETCH_ASSOC); 
                            $sayacx =0;
							foreach($ukkz as $markalar){
                            $sayacx++;
                            if ($sayacx==1){
                            echo '<div class="brand-col">';
                            }?>
								
								
								
								
                                     <figure class="brand-wrapper">
                            <img src="resimler/markalar/<?php echo $markalar['resim']; ?>" alt="Brand" style="width: 200px;height: 100px;">
                        </figure>
								
								
																	<?php if ($sayacx==2) {

																		echo '</div>';

																		$sayacx=0;

																	} ?>
								
									<?php } ?>
					
					
					
					
					
					
					
					
                    
                </div>
                <!-- End of Brands Wrapper -->

                <div class="post-wrapper appear-animate mb-4">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Blog</h2>
                        <a href="blog/" class="font-weight-bold font-size-normal">Tümünü Gör</a>
                    </div>
                    <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 4,
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '576': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false
                            }
                        }
                    }">
					
					
					      <?php 
							
							$bbbbbbb = $ozy->query("select * from haberler where durum='1' order by sira desc limit 5")->fetchAll(PDO::FETCH_ASSOC); 
                          
							foreach($bbbbbbb as $blog){
                           ?>
					
					
                        <div class="post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="blog/<?php echo $blog['seo']; ?>">
                                    <img src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="Post" style="width: 280px;height: 180px;background-color: #4b6e91;">
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                     <a  class="post-author"><?php echo $blog['hit']; ?> defa okundu</a>
                                    - <a  class="post-date mr-0"><?php echo $blog['tarih']; ?></a>
                                </div>
                                <h4 class="post-title"><a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a>
                                </h4>
                                <a href="blog/<?php echo $blog['seo']; ?>" class="btn btn-link btn-dark btn-underline">Daha Fazla<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        
                    
					
					<?php } ?>	
					
					
					
					
                    </div>
                </div>
                <!-- Post Wrapper -->

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Rastgele Ürünler</h2>
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
							
							$rrrr = $ozy->query("select * from urunler where durum='1' order by rand() desc limit 8")->fetchAll(PDO::FETCH_ASSOC); 
                          
							foreach($rrrr as $rastgele){
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
                  
                   
                   <?php } ?>	
                    
                   
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Reviewed Producs -->
            </div>
            <!--End of Catainer -->
        </main>
        <!-- End of Main -->
        
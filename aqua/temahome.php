    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 

        <section class="slider mt-5">
            <div class="container-lg">
                <div class="sliderbox">
                    <div class="mainslider">
					
					<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                foreach($slider as $demo){?> 
                               <div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                      
			 <a href="<?php echo $demo['link'];?>" title="<?php echo $demo['adi'];?>">
			 <img src="resimler/slider/<?php echo $demo['resim'];?>" alt="<?php echo $demo['adi'];?>" 
			  height="550"/></a>
                                         
                                    </div>
                                </div>
                            </div>
                             
                      <?php } ?>                              
                                      
                                            </div>
                    <div class="thumbslider">
                           
						  <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                foreach($slider as $demo){?>  
						   <div style="background: url('resimler/slider/<?php echo $demo['resim'];?>') center center no-repeat; background-size: cover;">
                                <span><?php echo $demo['adi'];?></span>
                            </div>
                                                   
									
                                <?php } ?>       
                                    
                                
                                  
                                            </div>
											
			<?php require('hikaye.php');?> 
                </div>
            </div>
        </section>
		
		 
		
		

        <section class="banner mt-5">
            <div class="container-lg">
                <div class="title text-center mb-5">FIRSATLARI YAKALAYIN</div>
                <div class="row">
			
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="<?php echo $tema['t5']; ?>">
                            <img src="resimler/temaayarlari/<?php echo $tema['t1']; ?>" class="img-fluid" height="225" width="338" alt="">
                        </a>
                    </div>
					
					 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="<?php echo $tema['t6']; ?>">
                            <img src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" class="img-fluid" height="225" width="338" alt="">
                        </a>
                    </div>
					
					 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="<?php echo $tema['t7']; ?>">
                            <img src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" class="img-fluid" height="225" width="338" alt="">
                        </a>
                    </div>
					
					
					 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="<?php echo $tema['t8']; ?>">
                            <img src="resimler/temaayarlari/<?php echo $tema['t4']; ?>" class="img-fluid" height="225" width="338" alt="">
                        </a>
                    </div>
              
			    
                </div>
            </div>
        </section>

        <section class="bestsellers mt-5 pt-5 pb-5">
            <div class="container-lg">
                <div class="group d-flex align-items-center justify-content-between">
                    <div class="title">GÜNÜN FIRSATLARI</div>
                    <a href="gununfirsati/" class="btn-all">Tüm Ürünleri Göster</a>
                </div>
                <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 productlist">
                <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 10")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ukzzz as $gfirsat){?>     
                               
                            <div class="col">
                            <div class="item">
                                <div class="img">
                                <span class="d-flex bdgs">
								    <?php if($gfirsat['ucretsizkargo']=='1'){?>
                                    <span class="bdg green">Ücretsiz Kargo!</span>
									<?php } ?> 
									<?php if($gfirsat['idurum']=='1'){?>
                                    <span class="bdg orange">%<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?> İndirimli</span>    
                                    <?php } ?> 
									</span>
                                    <a href="urun/<?php echo $gfirsat['seo']; ?>">
                                        <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" width="238" height="175" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <a href="urun/<?php echo $gfirsat['seo']; ?>" class="title"><h3><?php echo $gfirsat['adi']; ?></h3></a>
                                <div class="pb">
                                    <?php echo xurunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>
                                    <a href="urun/<?php echo $gfirsat['seo']; ?>" class="addcart">SEPETE EKLE</a>
                                </div>
                            </div>
                        </div>
						
						<?php } ?>	
						
                   
				   </div>
            </div>
        </section>

        <section class="dual pt-5 pb-5 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
            <div class="container-lg">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="title">
                       
                            EN ÇOK SEVİLENLER
                        </div>
                <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 0,7")->fetchAll(PDO::FETCH_ASSOC); 
                          foreach($etikets as $etiket){?>
                            <a href="<?php echo $etiket['link'];?>" class="tag"><?php echo $etiket['adi'];?></a>
							<?php } ?>
						
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 d-flex justify-content-end offset-xl-2 offset-lg-2 offset-md-2">
                        <div class="group">
                            <div class="title">
                            
                                EN ÇOK ARANANLAR
                            </div>
                          <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc limit 7,7")->fetchAll(PDO::FETCH_ASSOC); 
                          foreach($etikets as $etiket){?>
                            <a href="<?php echo $etiket['link'];?>" class="tag"><?php echo $etiket['adi'];?></a>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="onsale pt-5 pb-5">
            <div class="container-lg">
                <div class="group d-flex align-items-center justify-content-between flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column">
                    <div class="title">İNDİRİMLER</div>
                    <div class="scrolllr">
                        <ul class="nav nav-pills nav-filter mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#hepsi">HEPSİ</a>
                            </li>
							
			<?php $kkz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($kkz as $kampiz) {?>
                            <li class="nav-item">
                                <a class="nav-link" href="#kat<?php echo $kampiz['id']; ?>"><?php echo $kampiz['adi']; ?></a>
                            </li>
              <?php } ?>                
                        </ul>
                    </div>
                </div>
                <div class="row mt-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 productlist">
                            
							
							
				<?php 
				$kkz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
                foreach ($kkz as $kampiz) {
				$katid = $kampiz['id'];
				$urunler = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) order by rand() limit 15")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($urunler as $katurunler){?>     
                               
                            <div class="col kat<?php echo $katid;?>">
                            <div class="item">
                                <div class="img">
                                <span class="d-flex bdgs">
								    <?php if($katurunler['ucretsizkargo']=='1'){?>
                                    <span class="bdg green">Ücretsiz Kargo!</span>
									<?php } ?> 
									<?php if($katurunler['idurum']=='1'){?>
                                    <span class="bdg orange">%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?> İndirimli</span>    
                                    <?php } ?> 
									</span>
                                    <a href="urun/<?php echo $katurunler['seo']; ?>">
                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="238" height="175" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <a href="urun/<?php echo $katurunler['seo']; ?>" class="title"><h3><?php echo $katurunler['adi']; ?></h3></a>
                                <div class="pb">
                                    <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="addcart">SEPETE EKLE</a>
                                </div>
                            </div>
                        </div>
						
						<?php }} ?>	
							
							
							
							
					
                        
               </div>
			   
			   
            </div>
            <div class="bar"></div>
        </section>

  
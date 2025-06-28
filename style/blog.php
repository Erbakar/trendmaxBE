<title>Blog</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   
	   
		<main class="main">
            <!-- Start of Page Header -->
           
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                   
                        <li>Blog</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

         <div class="page-content mb-8">
                <div class="container">
           

                    <!-- Start of Vendor Store -->
                    <div class="row cols-lg-3 cols-sm-2">
					
										<?php 

     
        $pages = intval(temizle(@$_GET['pages']));
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from haberler where durum='1'");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 16;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
	
        $pr = $ozy->query("select * from haberler where durum='1' order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
        



        $__URUN__ = false;
       foreach ($pr as $blog) {
        $__URUN__ = true;?>

					
					
					
					
					
                        <div class="store-wrap col-lg-4">
                            <div class="store store-wcmp br-sm">
                                <figure class="store-banner">
                                    <img src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="Vendor" style="background-color: #454b63;" width="400" height="318">
                                </figure>
                                <div class="store-content">
                               
                                    <div class="seller-date">
                                        <h4 class="store-title">
                                            <a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a>
                                        </h4>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End of Store -->
                        </div>
                       
                     
					 
					    <?php }

                        if (!$__URUN__){
                            echo "Henüz blog eklenmemiş.";
                        }

                         ?>		      
					 
					 
					 
                    </div>
                    <!-- End of Vendor Store -->
					
					
					  <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
						<?php $geri = $_GET['pages']-1;?>
                            <li class="page-item  <?php echo $_GET['pages'] == '1' ? 'disabled' : null; ?>">
                                <a class="page-link page-link-prev" href="bloglar/?pages=<?php echo $geri;?>" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Geri
                                </a>
                            </li>
			
						
                      		 <?php
                for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 
                  if ($i>0 and $i<=$sayfasayisi) {
                    
                    if ($i == $pages) {
          
                  echo "<li class='page-item active' aria-current='page'><a class='page-link'>".$i."</a></li>
				 
				  ";
                                      
                             }else{
          
                  echo "<li class='page-item'><a class='page-link' href='bloglar/?pages=".$i."'>".$i."</a></li>";
          
          }

                  }
                }
          
          
          
          
                   ?> 
							
                            <li class="page-item">
							<?php $ileri = 1+$_GET['pages'];?>
                                <a class="page-link page-link-next" href="bloglar/?pages=<?php echo $ileri;?>" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                   İleri <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>

					
                </div>
				
				
				
            </div>
            <!-- End of Page Content -->
        </main>
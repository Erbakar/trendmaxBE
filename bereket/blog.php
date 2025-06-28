<title>Blog</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   
	  <div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
	          
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>
					
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            
			<section class="blog-content">
				<div class="blog-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-blog-template" class="shopify-section">
								<div class="blog-inner">
									<div id="blog" style="margin-top:20px;">
									
										<div class="col-sm-12 articles">
										
										
											<div class="blog-items">
											
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

												<div style="border: 1px solid #dddcdc;
float: left;
padding: 10px;" class="article clearfix col-sm-6 blog_Grid">
														<a class="article-img" href="blog/<?php echo $blog['seo']; ?>">
															<img src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="Blog">
														</a>
													<div class="articleinfo_group">
														<div class="article-title">
															<h2 class="article-name"><a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a></h2>
														</div>
																	<ul class="article-info list-inline">
															<li class="article-date"><?php echo $blog['tarih']; ?>
															
															
																<a href="blog/<?php echo $blog['seo']; ?>">
																	<span> - </span>
																	<i class="comment"><?php echo $blog['hit']; ?> okunma</i>
																</a>
															</li>
															
														</ul>
														<div class="article-content">
															<p><?php echo strip_tags(mb_substr($blog['aciklama'],0,70));?>....</p>
														</div>
													</div>
												</div>
												<?php }

                        if (!$__URUN__){
                            echo "Henüz blog eklenmemiş.";
                        }

                         ?>		      
					 
											
											
											</div>
											<div class="blog-bottom-toolbar">
												
												<div class="blog-pagination">
												
					  <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
						
			
						
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
							
                           
                        </ul>
                    </nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
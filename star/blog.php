<title>Blog</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Blog"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>



        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Blog</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
      <section id="main">
          <div class="container prg-news-category">
            <div class="row">

     
            
              <div class="content blog blog-post col-sm-12 col-md-12 pull-right" id="catalog">

                <div class="row products">


<?php 

     
        $pages = intval(temizle(@$_GET['pages']));
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from haberler where durum='1'");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 15000;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
	
        $pr = $ozy->query("select * from haberler where durum='1' order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
        



        $__URUN__ = false;
       foreach ($pr as $blog) {
        $__URUN__ = true;

                           ?>
					

                  <div class="col-xs-4 col-sm-4 col-md-3 employee product newsType product-mini-3" id="news26">

                    <div class="default">
                      
					  <div></div>
                      <a class="employeeLink" href="blog/<?php echo $blog['seo']; ?>">
                        <div class="image">

                          <img class="lazy load" style="height: 150px;" src="<?php echo $sitetemasi;?>/theme/progressive/img/lazyloader.gif" data-src="resimler/haberler/<?php echo $blog['resim']; ?>" alt="lazyloaderxWidth.gif" width="870" height="500">

                        </div>
                      </a>

                      <div class="description">
                        
                        <div class="vertical">

                          <h3 class="name">
                            <a href="blog/<?php echo $blog['seo']; ?>" title="<?php echo $blog['adi']; ?>"><?php echo $blog['adi']; ?></a>
                          </h3>
<div class="role"><a class="no-border" href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['tarih']; ?></a></div>
                        </div>
                      </div>
                    </div>

                  </div>
				  
				  
						 	
					 <?php }

                        if (!$__URUN__){
                            echo "Henüz blog veya yazı eklenmemiş.";
                        }

                         ?>	
				 	  
				  
				  
				  

<style>
  .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
  .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
  .discountRateText{font-size: 9px;}
</style>
                </div>
                
            
              

              </div>

            </div>
          </div>
        </section>

        <div class="clearfix"></div>  
		</div>
      
     
	 
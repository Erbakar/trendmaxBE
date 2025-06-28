<title>Blog</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Blog"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			<li><a>Blog</a></li>
			
		</ul>
		
		<div class="row">
	
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				<div class="blog-header">
					<h3>Our Blog</h3>
					
				</div>
				<div class="blog-category clearfix">
              
             
                    <div class="blog-listitem row">
					
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
					
					
                        <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item-inner clearfix">
                                <div class="itemBlogImg clearfix">
                                    <div class="article-image">
                                        <div>
                                            <a class="popup-gallery" href="resimler/haberler/<?php echo $blog['resim']; ?>">
                                                <img src="resimler/haberler/<?php echo $blog['resim']; ?>">
                                            </a>
                                        </div>
                                        <div class="article-date">
                                            <div class="date">  <span class="article-date">
                                                <b><?php echo strip_tags(mb_substr($blog['tarih'],0,2));?></b> <?php echo strip_tags(mb_substr($blog['tarih'],3,2));?>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="itemBlogContent clearfix ">
                                    <div class="blog-content">
                                        <div class="article-title font-title">
                                            <h4><a href="blog/<?php echo $blog['seo']; ?>"><?php echo $blog['adi']; ?></a></h4>
                                        </div>
                                        <div class="blog-meta"> <span class="author"><i class="fa fa-eye"></i><span><?php echo $blog['hit']; ?> </span>defa okundu</span>
                                        </div>
                                        <p class="article-description"><?php echo strip_tags(mb_substr($blog['aciklama'],0,300));?>...</p>
                                        <div class="readmore">  <a class="btn-readmore font-title" href="blog/<?php echo $blog['seo']; ?>"><i class="fa fa-caret-right"></i>Devamı</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
				 
				 	
					 <?php }

                        if (!$__URUN__){
                            echo "Henüz blog veya yazı eklenmemiş.";
                        }

                         ?>	
				 
				 
                    </div>
                    <div class="product-filter product-filter-bottom filters-panel clearfix">
                        <div class="row">
                            <div class="col-md-12">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--Middle Part End-->
	</div>
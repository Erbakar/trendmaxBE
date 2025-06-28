<title>Kampanyalar</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Kampanyalar"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>


<div id="information-information" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
	    <li><a>Kampanyalar</a></li>
     </ul>
   <div class="row">
     <div id="content" class="col-sm-12">
      

            <div id="blog-list" class="row">
			
			<?php 

     
        $pages = intval(temizle(@$_GET['pages']));
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from kampanyalar where durum='1'");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 15000;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
	
        $pr = $ozy->query("select * from kampanyalar where durum='1' order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
        



        $__URUN__ = false;
       foreach ($pr as $blog) {
        $__URUN__ = true;

                           ?>
					
			
          <div class="col-sm-6 col-md-4" style="border: 1px solid #f1f1f1;
  border-radius: 4px;">
          <figure>
            <a href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>">
			<img src="resimler/haberler/<?php echo $blog['resim']; ?>" class="img-responsive" alt="<?php echo $blog['adi']; ?>" title="<?php echo $blog['adi']; ?>"></a>
          </figure>
          <article>
          <h3><a href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>"><?php echo $blog['adi']; ?></a></h3>
          <p><?php echo strip_tags(mb_substr($blog['aciklama'],0,200));?>...</p>
          </article>
          <hr>
          <p><a style="width: 100%;" href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>" class="btn btn-primary">Detay</a></p>
        </div>
		
		
		 <?php }

                        if (!$__URUN__){
                            echo "Henüz kampanya eklenmemiş.";
                        }

                         ?>	
		
		
              </div>
      <div class="row">
        <div class="col-sm-6">
          
        </div>
    
      </div>
      


    </div>
   </div>
</div>
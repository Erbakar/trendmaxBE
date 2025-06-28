<title>Kampanyalar</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Kampanyalar"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	  <div class="kategori1">
            <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="kampanyalar/" class="link-12">Kampanyalar</a>
            </div>
      
            </div>
            <div class="div-block-4-461292474723282e-25"></div>
            <div class="div-block-4nasil">
            <div class="div-block-447y">
            <div class="w-row">
               
                <div class="column-318 w-col w-col-12 w-col-small-12 w-col-tiny-12">
                <div>
                    
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
		
					
                    <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
					<a href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>"
					class="link-abc marbaslik">
					     <img src="resimler/kampanyalar/<?php echo $blog['resim']; ?>" alt="Vendor" style="background-color: #40475E;width: 400px;height: 340px;">
                               
					
					<strong class="bold-text-18">
					<?php echo $blog['adi']; ?></strong></a>
					</div>
					
					
					 <?php }

                        if (!$__URUN__){
                            echo "Henüz kampanya eklenmemiş.";
                        }

                         ?>	
			
                </div>
                </div>




            </div>
            </div>

            </div>
            </div>
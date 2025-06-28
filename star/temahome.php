    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 

    <script src="<?php echo $sitetemasi;?>/theme/component/mansetslider/manset.js" type='text/javascript'></script>
    <link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/mansetslider/mansetslider.css">
    <section id="main">
      <div class="container bottom-padding-mini ">
        <div class="row">
          <div class="manset-slider">
            <ul class="manset-img">
                   <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                foreach($slider as $demo){?> 
			 <li><a href="<?php echo $demo['link'];?>" title="<?php echo $demo['adi'];?>">
			 <img src="resimler/slider/<?php echo $demo['resim'];?>" alt="<?php echo $demo['adi'];?>" 
			 width="1500" height="450" /></a></li>
          	      <?php } ?>    
		  </ul>
            <ul class="manset_butonlar">
			   <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                foreach($slider as $demo){?> 
              <li><a href="<?php echo $demo['link'];?>" title="<?php echo $demo['adi'];?>">
			  <img src="resimler/slider/<?php echo $demo['resim'];?>" width="102" height="72" 
			  alt="<?php echo $demo['adi'];?>" /></a></li>
            <?php } ?>    
			</ul>
          </div>
        </div>
      </div>
      <div class="container megaTab">
        <div class="row">
          <style>
            @media (min-width: 480px) and (max-width: 767px){
            /*TAB CONTENT*/
            .spc-tab-content .box.closed ul li{float:left; width:33.3333%; padding: 0 10px; margin-bottom:20px; list-style-type:none;}
            /*TAB CONTENT*/
            }
            @media (max-width: 479px){
            /*TAB CONTENT*/
            .spc-tab-content .box.closed ul li{float:left; width:50%; padding: 0 10px; margin-bottom:20px; list-style-type:none;}
            /*TAB CONTENT*/
            }
            @media (min-width: 768px){
            /*TAB CONTENT*/
            .spc-tab-content .nav-tabs > li > a{margin:0;}
            .spc-tab-content .box.closed ul li{float:left; width:25%; padding: 0 10px; margin-bottom:20px; list-style-type:none;}
            .spc-tab-content .box.closed{padding:25px 0;}
            /*TAB CONTENT*/
            }
            .spc-tab-content .box.closed ul{padding:0;}
            .spc-tab-content .accordion-tab > li > a, .spc-tab-content .products-tab .accordion-tab > li > a, .spc-tab-content .tabs-left > .accordion-tab > li > a,  .spc-tab-content .tabs-right > .accordion-tab > li > a{padding: 9px 0 9px 60px;}
            .spc-tab-content .box.closed ul li img{width:100%;}
            .spc-tab-content .sub{list-style-type:none; padding:0;}
            .spc-tab-content .megamenu-link{display:inline-block;}
            .spc-tab-content .megamenu-link .title{font-weight:bold;}
          </style>
        </div>
      </div>
      <div class="container">
        <div class="service prg-home-AC">
          <div class="title-box">
            <h2 class="h1 title">Haftanın Fırsatları</h2>
          </div>
          <div class="row  products">
		  
		  
		  <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 15")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($ukzzz as $gfirsat){?>
		  
            <div class="col-xs-4 col-sm-4 col-md-2 product productsType product-mini-6" id="products5312">
              <div class="default">
			  <?php if($gfirsat['idurum']=='1'){?>
                <div class="discountRate"><span class="discountRateMid">%<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?></span>
				<span class="discountRateText"> İNDİRİM</span>
				</div>
				<?php } ?> 
                <div class="band5312"></div>
                <a class="employeeLink" href="urun/<?php echo $gfirsat['seo']; ?>" title="<?php echo $gfirsat['adi']; ?>">
                  <div class="product-image">
                    <img  class="lazy load"  src="<?php echo $sitetemasi;?>/theme/progressive/img/lazyloader.gif" data-src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" alt="lazyloader.gif" />
                  </div>
                </a>
                <div class="messages"></div>
                <div class="actions not-rotation-actions">
                  <div class="actions-holder" style="width:168px;" data-productsID="5312" data-productsTitle="Haftanın Fırsatları">
                    <a class="add-wishlist" href="?favoriekle=<?php echo $gfirsat['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                    <a class="product-quick" href="urun/<?php echo $gfirsat['seo']; ?>" title="Gözat"><i class="fa fa-search"></i></a>
                    <a href="urun/<?php echo $gfirsat['seo']; ?>" title="<?php echo $gfirsat['adi']; ?>"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="product-description">
                  <div class="vertical">
                    <h3 class="product-name">
                      <a href="urun/<?php echo $gfirsat['seo']; ?>" title="<?php echo $gfirsat['adi']; ?>"><?php echo $gfirsat['adi']; ?></a>
                    </h3>
                    <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>

					
					</div>
                    <div class="storeTitle"></div>
                  </div>
                </div>
              </div>
            </div>
   
         	<?php } ?>	
		
		
            <style>
              .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
              .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
              .discountRateText{font-size: 9px;}
            </style>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="row-card-5">
		          <div class="swiper mySwiper">
                <div class="swiper-wrapper">
			<?php $kk = $ozy->query("select * from kampanyalar where durum='1' order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($kk as $kampi) {?>
                  <div class="swiper-slide">
				  <a href="<?php echo $kampi["link"] == "0" ? "kampanya/".$kampi["seo"]."" : "".$kampi["link"].""; ?>">
				  <img class="gorsel" src="resimler/kampanyalar/<?php echo $kampi['resim']; ?>">
				  </a>
				  </div>
            <?php } ?>   



			   </div>
               </div>  
        </div>
        <style>
          body{background-color:#E2F9F9}
          .row-card-5{font-size:0; margin: 8px -18px;}
          .cover-card-5{width:20%; height: 400px; display: inline-block; padding: 0px 5px; background-color:transparent; font-size:0px;}
          .card-5{width:100%; height: 100%; border-radius: 10px; transition: 0.2s all;}
          .card-5:hover{box-shadow: 0px 11px 22px -18px rgba(0,0,0,0.9);}
          .card-5 a{}
          .card-5 img{width:100%; height: 100%; object-fit: cover; border-radius: 10px; }
          @media (max-width: 1200px) {.cover-card-5{height: 320px;}}
          @media (max-width: 991px) {.row-card-5{margin: 5px -4px;} .cover-card-5{height: 243px;}}
          @media (max-width: 767px) {.row-card-5{margin: 12.5px -4px;} .cover-card-5{height: 100%}}
          @media (max-width: 600px) {.cover-card-5{width: 50%; height: 100%; margin-bottom:10px;}.cover-card-5:nth-child(4){display:none;}}
        </style>
       
     
        <style>
          .two-banner{font-size:0;text-align:center;width:1200px;margin-left:-15px;margin-top:-10px;}
          .two-banner-part{width:50%;display:inline-block;text-align:center;}
          .two-banner-part:first-child{padding-right:5px;}
          .two-banner-part:last-child{padding-left:5px;}
          .two-banner-part img{border-radius:12.5px;width:100%;height:100%; transition:0.2s;}
          .two-banner-part img:hover{box-shadow: 0px 8px 22px -18px rgba(0,0,0,0.9)}
          @media (max-width: 1199px){
          .two-banner{width:970px;}
          }
          @media (max-width: 991px){
          .two-banner{width:750px;}
          }
          @media (max-width: 767px){
          .two-banner{width:100%; margin:auto;}
          .two-banner img{border-radius:10px;}
          }
          @media (max-width: 750px){
          .two-banner{width:100%; margin:auto;}
          .two-banner-part{width:100%;}
          .two-banner-part:first-child{padding-right:0px; margin-bottom:10px;}
          .two-banner-part:last-child{padding-left:0px;}
          }
        </style>
         <div class="service prg-home-CC">
          <div class="title-box">
            <h2 class="h1 title">Popüler Ürünler</h2>
          </div>
          <div class="row products">
       
	     <?php $ukzzzszt = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 15")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($ukzzzszt as $pop){?>
		  
            <div class="col-xs-4 col-sm-4 col-md-2 product productsType product-mini-6" id="products5312">
              <div class="default">
			  <?php if($pop['idurum']=='1'){?>
                <div class="discountRate"><span class="discountRateMid">%<?php echo yuzdeHesaplama($pop['fiyat'],$pop['ifiyat']);?></span>
				<span class="discountRateText"> İNDİRİM</span>
				</div>
				<?php } ?> 
                <div class="band5312"></div>
                <a class="employeeLink" href="urun/<?php echo $pop['seo']; ?>" title="<?php echo $pop['adi']; ?>">
                  <div class="product-image">
                    <img  class="lazy load"  src="<?php echo $sitetemasi;?>/theme/progressive/img/lazyloader.gif" data-src="resimler/urunler/<?php echo $pop['resim']; ?>" alt="lazyloader.gif" />
                  </div>
                </a>
                <div class="messages"></div>
                <div class="actions not-rotation-actions">
                  <div class="actions-holder" style="width:168px;" data-productsID="5312" data-productsTitle="Haftanın Fırsatları">
                    <a class="add-wishlist" href="?favoriekle=<?php echo $pop['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                    <a class="product-quick" href="urun/<?php echo $pop['seo']; ?>" title="Gözat"><i class="fa fa-search"></i></a>
                    <a href="urun/<?php echo $pop['seo']; ?>" title="<?php echo $pop['adi']; ?>"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="product-description">
                  <div class="vertical">
                    <h3 class="product-name">
                      <a href="urun/<?php echo $pop['seo']; ?>" title="<?php echo $pop['adi']; ?>"><?php echo $pop['adi']; ?></a>
                    </h3>
                    <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($pop['kdv'],$pop['idurum'],$pop['fiyat'],$pop['ifiyat']);?>

					
					</div>
                    <div class="storeTitle"></div>
                  </div>
                </div>
              </div>
            </div>
   
         	<?php } ?>	
		
            <style>
              .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
              .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
              .discountRateText{font-size: 9px;}
            </style>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="one-cikan-kategoriler">
          <div class="title-box">
            <h2 class="h1 title">Öne Çıkan Kategoriler</h2>
          </div>
          <div class="row">
		  <?php $kat = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($kat as $kategorim){?>   
		  
            <div class="col-md-3">
              <a href="kategori/<?php echo $kategorim['seo'];?>">
                <h3><?php echo $kategorim['adi'];?></h3>
                <div class="img-box"><img src="resimler/kategoriler/<?php echo $kategorim['yanresim'];?>" width="262" height="170" alt="<?php echo $kategorim['seo'];?>" /></div>
                <div class="category-content"><?php echo $kategorim['sdesc'];?></div>
                <div class="category-link">Tümünü İncele</div>
              </a>
            </div>
           
		    <?php } ?>    
		   
          </div>
        </div>
        <style>
          .one-cikan-kategoriler .row{margin: 0 -18px;font-size:0;text-align:center;}
          .one-cikan-kategoriler .col-md-3{padding: 0 5px;margin-bottom: 10px; text-align:left;display:inline-block;}
          .one-cikan-kategoriler .col-md-3 a{display: block;background: #fff;border-radius: 12.5px;overflow: hidden;text-decoration: none;}
          .one-cikan-kategoriler .col-md-3 a h3{margin: 0;font-size: 18px;padding: 20px 15px;color: #000;}
          .one-cikan-kategoriler .col-md-3 a .img-box{padding: 0 15px;}
          .one-cikan-kategoriler .col-md-3 a .img-box img{width:100%; height:auto;}
          .one-cikan-kategoriler .col-md-3 a .category-content{padding: 15px;font-size:14px; height:120px!important;}
          .one-cikan-kategoriler .col-md-3 a .category-link{padding: 15px;color: #0a67ec;font-size:14px;}
          @media (max-width:1200px){
          .one-cikan-kategoriler .col-md-3 a h3{height:75px!important;}
          .one-cikan-kategoriler .col-md-3 a .category-content{height:150px!important;}
          }
          @media (min-width:992px){
          .one-cikan-kategoriler .title-box{margin: 0 -14px !important;}
          }
          @media (max-width: 991px) {
          .one-cikan-kategoriler .title-box{margin-left:-13px;}
          .one-cikan-kategoriler .col-md-3{width:33.33%;}
          .one-cikan-kategoriler .col-md-3 a .category-content{height:145px!important;}
          }
          @media (max-width: 767px) {
          .one-cikan-kategoriler{padding: 0px 15px;}
          .one-cikan-kategoriler .col-md-3{width:50%;}
          .one-cikan-kategoriler .col-md-3 a h3{padding:10px 15px; height:40px!important;}
          .one-cikan-kategoriler .col-md-3 a .category-content{height:115px!important;}
          }
          @media (max-width: 600px) {
          .one-cikan-kategoriler .col-md-3 a h3{padding:10px; height:40px!important; font-size:16px}
          .one-cikan-kategoriler .col-md-3 a .img-box{padding: 0 10px;}
          .one-cikan-kategoriler .col-md-3 a .category-content{height:120px!important;padding:10px;}
          .one-cikan-kategoriler .col-md-3 a .category-link{padding:10px;}
          }
          @media (max-width: 525px) {
          .one-cikan-kategoriler .col-md-3 a h3{padding:10px; height:55px!important; font-size:16px}
          .one-cikan-kategoriler .col-md-3 a .img-box{padding: 0 10px;}
          .one-cikan-kategoriler .col-md-3 a .category-content{height:140px!important;padding:10px;}
          .one-cikan-kategoriler .col-md-3 a .category-link{padding:10px;}
          }
          @media (max-width: 470px) {
          .one-cikan-kategoriler .col-md-3{width:100%;}
          .one-cikan-kategoriler .col-md-3 a h3{padding:10px;height:40px!important;}
          .one-cikan-kategoriler .col-md-3 a .img-box{padding: 0 10px;}
          .one-cikan-kategoriler .col-md-3 a .category-content{padding:10px;height:100px!important;}
          .one-cikan-kategoriler .col-md-3 a .category-link{padding:10px;}
          }
          @media (max-width: 420px) {
          .one-cikan-kategoriler .col-md-3 a h3{font-size: 15px;height:40px!important;}
          .one-cikan-kategoriler .col-md-3 a .category-content{height:100px!important;font-size:12px;}
          .one-cikan-kategoriler .col-md-3 a .category-link{font-size:12px;}
          }
          @media (max-width: 400px) {
          .one-cikan-kategoriler .col-md-3 a .category-content{height:100px!important;font-size:12px;}
          .one-cikan-kategoriler .col-md-3 a .category-link{font-size:12px;}
          }
          @media (max-width: 350px) {
          .one-cikan-kategoriler .col-md-3 a .category-content{height:100px!important;font-size:12px;}
          .one-cikan-kategoriler .col-md-3 a .category-link{font-size:12px;}
          }
        </style>
        <div class="service prg-home-BC">
          <div class="title-box">
            <h2 class="h1 title">Sizin İçin Seçtiklerimiz</h2>
          </div>
          <div class="row products">

  <?php $ukzzzs = $ozy->query("select * from urunler where durum='1' and agoster='1' order by rand() limit 15")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($ukzzzs as $agoster){?>
		  
            <div class="col-xs-4 col-sm-4 col-md-2 product productsType product-mini-6" id="products5312">
              <div class="default">
			  <?php if($agoster['idurum']=='1'){?>
                <div class="discountRate"><span class="discountRateMid">%<?php echo yuzdeHesaplama($agoster['fiyat'],$agoster['ifiyat']);?></span>
				<span class="discountRateText"> İNDİRİM</span>
				</div>
				<?php } ?> 
                <div class="band5312"></div>
                <a class="employeeLink" href="urun/<?php echo $agoster['seo']; ?>" title="<?php echo $agoster['adi']; ?>">
                  <div class="product-image">
                    <img  class="lazy load"  src="<?php echo $sitetemasi;?>/theme/progressive/img/lazyloader.gif" data-src="resimler/urunler/<?php echo $agoster['resim']; ?>" alt="lazyloader.gif" />
                  </div>
                </a>
                <div class="messages"></div>
                <div class="actions not-rotation-actions">
                  <div class="actions-holder" style="width:168px;" data-productsID="5312" data-productsTitle="Haftanın Fırsatları">
                    <a class="add-wishlist" href="?favoriekle=<?php echo $agoster['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                    <a class="product-quick" href="urun/<?php echo $agoster['seo']; ?>" title="Gözat"><i class="fa fa-search"></i></a>
                    <a href="urun/<?php echo $agoster['seo']; ?>" title="<?php echo $agoster['adi']; ?>"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="product-description">
                  <div class="vertical">
                    <h3 class="product-name">
                      <a href="urun/<?php echo $agoster['seo']; ?>" title="<?php echo $agoster['adi']; ?>"><?php echo $agoster['adi']; ?></a>
                    </h3>
                    <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($agoster['kdv'],$agoster['idurum'],$agoster['fiyat'],$agoster['ifiyat']);?>

					
					</div>
                    <div class="storeTitle"></div>
                  </div>
                </div>
              </div>
            </div>
   
         	<?php } ?>	
		


            <style>
              .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
              .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
              .discountRateText{font-size: 9px;}
            </style>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="three-banner">
          <div class="three-banner-part">
		  <a href="<?php echo $tema['t4']; ?>">
		  <img src="resimler/temaayarlari/<?php echo $tema['t1']; ?>" width="375" height="175" alt="banner" /></a></div>
          <div class="three-banner-part">
		  <a href="<?php echo $tema['t5']; ?>">
		  <img src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" width="375" height="175" alt="banner" /></a></div>
          <div class="three-banner-part">
		  <a href="<?php echo $tema['t6']; ?>">
		  <img src="resimler/temaayarlari/<?php echo $tema['t3']; ?>" width="375" height="175" alt="banner" /></a></div>
        </div>
        <style>
          .three-banner{font-size:0;text-align:center;width:1200px;margin-left:-15px;margin-top:-10px;}
          .three-banner-part{width:33.33%;display:inline-block;text-align:center;padding:5px;}
          .three-banner-part:first-child{padding-left:0;}
          .three-banner-part:last-child{padding-right:0;}
          .three-banner-part img{border-radius:12.5px;width:100%;height:100%; transition:0.2s;}
          .three-banner-part img:hover{box-shadow: 0px 8px 22px -18px rgba(0,0,0,0.9)}
          @media (max-width: 1199px){
          .three-banner{width:970px;}
          }
          @media (max-width: 991px){
          .three-banner{width:750px;}
          }
          @media (max-width: 767px){
          .three-banner{width:100%; margin:auto; margin-top:-10px;}
          .three-banner img{border-radius:10px;}
          }
          @media (max-width: 600px){
          .three-banner-part{width:100%; padding-left:0; padding-right:0;}
          }
        </style>
        <div class="service prg-home-CC">
          <div class="title-box">
            <h2 class="h1 title">Çok Satan Ürünler</h2>
          </div>
          <div class="row products">
       
	     <?php $ukzzzsz = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by rand() limit 15")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($ukzzzsz as $coksatan){?>
		  
            <div class="col-xs-4 col-sm-4 col-md-2 product productsType product-mini-6" id="products5312">
              <div class="default">
			  <?php if($coksatan['idurum']=='1'){?>
                <div class="discountRate"><span class="discountRateMid">%<?php echo yuzdeHesaplama($coksatan['fiyat'],$coksatan['ifiyat']);?></span>
				<span class="discountRateText"> İNDİRİM</span>
				</div>
				<?php } ?> 
                <div class="band5312"></div>
                <a class="employeeLink" href="urun/<?php echo $coksatan['seo']; ?>" title="<?php echo $coksatan['adi']; ?>">
                  <div class="product-image">
                    <img  class="lazy load"  src="<?php echo $sitetemasi;?>/theme/progressive/img/lazyloader.gif" data-src="resimler/urunler/<?php echo $coksatan['resim']; ?>" alt="lazyloader.gif" />
                  </div>
                </a>
                <div class="messages"></div>
                <div class="actions not-rotation-actions">
                  <div class="actions-holder" style="width:168px;" data-productsID="5312" data-productsTitle="Haftanın Fırsatları">
                    <a class="add-wishlist" href="?favoriekle=<?php echo $coksatan['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                    <a class="product-quick" href="urun/<?php echo $coksatan['seo']; ?>" title="Gözat"><i class="fa fa-search"></i></a>
                    <a href="urun/<?php echo $coksatan['seo']; ?>" title="<?php echo $coksatan['adi']; ?>"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="product-description">
                  <div class="vertical">
                    <h3 class="product-name">
                      <a href="urun/<?php echo $coksatan['seo']; ?>" title="<?php echo $coksatan['adi']; ?>"><?php echo $coksatan['adi']; ?></a>
                    </h3>
                    <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>

					
					</div>
                    <div class="storeTitle"></div>
                  </div>
                </div>
              </div>
            </div>
   
         	<?php } ?>	
		
            <style>
              .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
              .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
              .discountRateText{font-size: 9px;}
            </style>
          </div>
          <div class="clearfix"></div>
        </div>
       
      </div>
    </section>
    <div class="clearfix"></div>
  </div>
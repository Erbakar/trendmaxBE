<title>Favori Ürünlerim</title>

<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">

<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">

<meta property="og:url" content="<?php echo $url; ?>"/>

<meta property="og:title" content="Favori Ürünlerim"/>

<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>



	<style>

.prg-category .product {
  width: 24.7% !important;
}
	</style>
	
        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
		
				<li><a>Favori Ürünlerim</a></li>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
      
          <div class="container prg-category">
            <div class="row">

            
              <div class="content blog blog-post col-sm-12 col-md-12" id="catalog">

      

                <div class="row products">

 			<?php $uyesepeti11 = $ozy->prepare("SELECT * FROM urunler 

	                    INNER JOIN favoriler ON urunler.id = favoriler.urunid  

	                    WHERE favoriler.gelenkim=? ORDER BY favoriler.id DESC");                

	                    $uyesepeti11->execute(array($sepetimdekikim));

	$__URUN__ = false;

        foreach ($uyesepeti11 as $katurunler) {
			
     
        $__URUN__ = true;



	                    ?>


                  <div class="col-xs-4 col-sm-4 col-md-3 product productsType product-mini-3" id="products4609">

                       <div class="default">
			  <?php if($katurunler['idurum']=='1'){?>
                <div class="discountRate"><span class="discountRateMid">%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
				<span class="discountRateText"> İNDİRİM</span>
				</div>
				<?php } ?> 
                <div class="band5312"></div>
                <a class="employeeLink" href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>">
                  <div class="product-image">
                    <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="lazyloader.gif" />
                  </div>
                </a>
                <div class="messages"></div>
                <div class="actions not-rotation-actions">
                  <div class="actions-holder" style="width:168px;" data-productsID="5312" data-productsTitle="Haftanın Fırsatları">
                    <a class="add-wishlist" href="?favoriekle=<?php echo $katurunler['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                    <a class="product-quick" href="urun/<?php echo $katurunler['seo']; ?>" title="Gözat"><i class="fa fa-search"></i></a>
                    <a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>"><i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="product-description">
                  <div class="vertical">
                    <h3 class="product-name">
                      <a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>"><?php echo $katurunler['adi']; ?></a>
                    </h3>
                    <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>

					
					</div>
                    <div class="storeTitle">
					 <button style="width: 100%;
color: #e60808;
font-size: 12px;
margin-bottom: 20px;
font-weight: 500;" class="wishlist btn-button" type="button" onclick="javascript:location.href='?favorilsil=<?php echo $katurunler['id']; ?>'"><i class="fa fa-heart"></i> Favorilerimden Kaldır
                                        </button>
					</div>
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
							

				  
	

<style>
  .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
  .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
  .discountRateText{font-size: 9px;}
  #notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
}

.notfound .notfound-404 h1 {
  font-size: 146px;
  font-weight: 700;
  margin: 0px;
  color: #232323;
}

.notfound .notfound-404 h1>span {
  display: inline-block;
  width: 120px;
  height: 120px;
  background-image: url('<?php echo $sitetemasi;?>/user/emoji.png');
  background-size: cover;
  -webkit-transform: scale(1.4);
      -ms-transform: scale(1.4);
          transform: scale(1.4);
  z-index: -1;
}

.notfound h2 {
  font-size: 22px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  color: #232323;
}

.notfound p {
  color: #787878;
  font-weight: 500;
}

.notfound a {
  display: inline-block;
  padding: 12px 30px;
  font-weight: 700;
  background-color: <?php echo $tema['t37'];?>;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 115px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h1>span {
    width: 86px;
    height: 86px;
  }
</style>
                </div>
                
               
                <div class="clearfix"></div>

              

              </div>

            </div>
          </div>
        </section>
	
        <div class="clearfix"></div>  
		</div>
      
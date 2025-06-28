<title>Kampanyalar</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   
		<main class="main">
           	<nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kampanyalar</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-10 pb-2">
                <div class="container">
              
			  
			                 
							<?php 

     
        $pages = intval(temizle(@$_GET['pages']));
        if (!$pages) {
          $pages = 1;
        }
        
        $bak = $ozy->prepare("select * from kampanyalar where durum='1'");
        $bak->execute(array());
        $toplam= $bak->rowCount();
        $limit = 15;
        $goster = $pages*$limit-$limit;
        $sayfasayisi = ceil($toplam/$limit);
        $forlimit = 200;
		
	
	
        $pr = $ozy->query("select * from kampanyalar where durum='1' order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);
        



        $__URUN__ = false;
       foreach ($pr as $blog) {
        $__URUN__ = true;

                           ?>
		
			  
			  
			  
                    <div class="store store-list mt-4" style="background:white;">
                        <div class="store-header">
                            <a href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>">
                                <figure class="store-banner">
                                    <img src="resimler/kampanyalar/<?php echo $blog['resim']; ?>" alt="Vendor" style="background-color: #40475E;width: 400px;height: 228px;" width="400" height="228">
                                </figure>
                            </a>
                            <label class="featured-label"><?php echo $blog['tarih']; ?></label>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                          
                            <div class="seller-date">
                                <h2 class="store-title">
                                    <a href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>"><?php echo $blog['adi']; ?></a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        
                                    </div>
                                </div>
                                <div class="store-address">
                                    <?php echo strip_tags(mb_substr($blog['aciklama'],0,100));?> ...
                                </div>
                                <a href="<?php if($blog['link']=='0'){?>kampanya/<?php echo $blog['seo']; ?><?php } else { ?><?php echo $blog['link']; ?><?php } ?>" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                   Kampanya Detayı<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div>
                    <!-- End of Store List -->
 <?php }

                        if (!$__URUN__){
                            echo "Henüz kampanya eklenmemiş.";
                        }

                         ?>		      
							
				<nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
						<?php $geri = $_GET['pages']-1;?>
                            <li class="page-item  <?php echo $_GET['pages'] == '1' ? 'disabled' : null; ?>">
                                <a class="page-link page-link-prev" href="kampanyalar/?pages=<?php echo $geri;?>" aria-label="Previous" tabindex="-1" aria-disabled="true">
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
          
                  echo "<li class='page-item'><a class='page-link' href='kampanyalar/?pages=".$i."'>".$i."</a></li>";
          
          }

                  }
                }
          
          
          
          
                   ?> 
             
						
                      
							
                            <li class="page-item">
							<?php $ileri = 1+$_GET['pages'];?>
                                <a class="page-link page-link-next" href="kampanyalar/?pages=<?php echo $ileri;?>" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                   İleri <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav> 
					 
                </div>
				
				
				<style>




.store-grid {
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
}
.store-grid .store-banner img {
  min-height: 19.4rem;
}
.store-grid .store-content {
  top: 2.5rem;
  left: 3rem;
  max-width: 19.2rem;
}
.store-grid .seller-brand {
  right: 1.9rem;
  top: -58%;
}
.store-grid:hover .seller-brand img {
  transform: translateY(-1rem);
}
.store-grid .store-title:hover {
  color: #336699;
}

.store-list {
  display: flex;
  border: 1px solid #eee;
}
.store-list .store-header {
  flex: 0 0 40rem;
  max-width: 40rem;
}
.store-list .store-header a {
  display: block;
  height: 100%;
}
.store-list .store-banner {
  height: 100%;
}
.store-list .store-content {
  position: relative;
}
.store-list .featured-label {
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
  margin-left: 0;
}
.store-list .store-content {
  display: flex;
  align-items: center;
  padding: 2rem 2rem 2rem 6rem;
}
.store-list .store-title {
  color: #333;
}
.store-list .store-title a {
  text-shadow: none;
  font-size: 15px;
}
.store-list .ratings-container {
  margin-bottom: 0.3rem;
}
.store-list .store-address {
  color: #666;
  opacity: 1;
  margin-bottom: 0.9rem;
}
.store-list .seller-brand {
  top: 50%;
  left: 0;
  transform: translate(-50%, -50%);
}
.store-list:hover .seller-brand img {
  transform: translateX(-1rem);
}

.store-grid .seller-brand,
.store-list .seller-brand {
  position: absolute;
}
.store-grid .seller-brand img,
.store-list .seller-brand img {
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  max-width: calc(100% + 2px);
  margin: -1px;
  box-shadow: 0px 0px 0px 1px #eee;
}

.store.store-banner .store-media img {
  min-height: 44rem;
  width: 100%;
}
.store.store-banner .store-content {
  top: 0;
  left: 0;
  max-width: 34.5rem;
  padding: 5rem 4rem 5rem 5rem;
  background-color: rgba(37, 38, 42, 0.9);
  height: 100%;
}
.store.store-banner .seller-brand {
  margin-bottom: 2.3rem;
}
.store.store-banner .store-title {
  margin-bottom: 1.6rem;
  font-size: 2rem;
  letter-spacing: -0.025em;
}
.store.store-banner .social-icon {
  margin-right: 0.5rem;
  color: #fff;
  border-color: #ccc;
  opacity: 0.8;
}

.store-wcmp .store-content {
  left: 0;
  right: 0;
  bottom: 0;
  height: 30%;
  background-color: #20212491;
  display: flex;
  padding: 10px;
  width: 100% !important;
}
.store-wcmp .seller-brand {
  flex: 0 0 8rem;
  max-width: 8rem;
  margin-right: 2.2rem;
}
.store-wcmp .seller-date {
  /*! flex: 0 0 calc(100% - 10rem); */
  /*! max-width: calc(100% - 10rem); */
}
.store-wcmp .store-title {
  margin: 0.4rem 0 1.1rem;
  /*! margin-top: 15%; */
}
.store-wcmp .store-title a {
  font-size: 1.8rem;
}
.store-wcmp .store-title a:hover {
  text-decoration: underline;
}
.store-wcmp .seller-info-list {
  margin: 0;
  padding: 0px !important;
}
.store-wcmp .seller-info-list li {
  display: flex;
  margin-bottom: 0;
  letter-spacing: 0;
  opacity: 0.7;
}
.store-wcmp .seller-info-list li p {
  margin-bottom: 0;
  line-height: 2;
}
.store-wcmp .seller-info-list .store-address p {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.store-wcmp .seller-info-list .store-rating p {
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.store-wcmp .seller-info-list i {
  margin-top: 1.3rem;
  margin-right: 0.8rem;
  font-size: 1.4rem;
}
.store-wcmp .ratings-container {
  margin-top: 0.5rem;
  margin-bottom: 0;
}

.store-wcmp-banner .store-media img {
  width: 100%;
}
.store-wcmp-banner .store-content {
  left: 0;
  right: 0;
  bottom: 0;
  min-height: 40%;
  padding: 2rem;
  background: rgba(0, 0, 0, 0.6);
}
.store-wcmp-banner .seller-brand {
  margin: -7rem auto 2rem auto;
}
.store-wcmp-banner .social-icons {
  position: absolute;
  right: 2rem;
  top: -5rem;
}
.store-wcmp-banner .store-title {
  margin-bottom: 1rem;
  font-size: 2rem;
  justify-content: center;
}
.store-wcmp-banner .seller-info-list {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding-left: 0;
}
.store-wcmp-banner .seller-info-list > * {
  margin: 0 0.6rem;
  opacity: 0.6;
  text-align: center;
}
.store-wcmp-banner .seller-info-list > * i {
  margin-right: 0.4rem;
  margin-left: 0;
}

.store-wcmp-banner .seller-brand,
.store-wcfm-banner .seller-brand {
  width: 10rem;
  height: 10rem;
}
.store-wcmp-banner .seller-brand img,
.store-wcfm-banner .seller-brand img {
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  max-width: calc(100% + 2px);
  margin: -1px;
}
.store-wcmp-banner .social-icon:not(:last-child),
.store-wcfm-banner .social-icon:not(:last-child) {
  margin-right: 0.5rem;
}
.store-wcmp-banner .social-icon,
.store-wcfm-banner .social-icon {
  border-radius: 0.3rem;
}

.store-wcfm-banner .store-content {
  left: 0;
  bottom: 0;
  width: 100%;
  background: rgba(34, 34, 34, 0.8);
  display: flex;
  align-items: center;
  min-height: 16rem;
  padding: 2.3rem 3rem 2.6rem;
}
.store-wcfm-banner .store-content-left {
  display: flex;
}
.store-wcfm-banner .personal-info {
  margin-right: 4rem;
}
.store-wcfm-banner .seller-brand {
  margin: -7.2rem 0 2rem;
}
.store-wcfm-banner .ratings-container {
  justify-content: center;
  font-size: 1.2rem;
}
.store-wcfm-banner .ratings-full {
  margin: 0;
}
.store-wcfm-banner .store-title {
  margin-bottom: 0.9rem;
  font-size: 2rem;
  font-weight: 600;
}
.store-wcfm-banner .seller-info-list {
  padding-left: 2.4rem;
}
.store-wcfm-banner .seller-info-list li {
  margin-bottom: 0.4rem;
  letter-spacing: 0;
}
.store-wcfm-banner .seller-info-list li i {
  margin: 0 0.4rem 0 -2.4rem;
  font-size: 1.4rem;
}
.store-wcfm-banner .store-content-right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
.store-wcfm-banner .btn-inquiry {
  margin-bottom: 3rem;
}

.btn-inquiry,
.btn-visit:not(.btn-link) {
  padding: 0.8em 1.6em;
  font-size: 1.3rem;
  background-color: #eee;
  border-color: #eee;
  color: #333;
  margin-right: 0.6rem;
}
.btn-inquiry:hover, .btn-inquiry:active, .btn-inquiry:focus,
.btn-visit:not(.btn-link):hover,
.btn-visit:not(.btn-link):active,
.btn-visit:not(.btn-link):focus {
  background-color: #333;
  border-color: #333;
  color: #fff;
}

.vendor-toolbox .vendor-search-toggle {
  margin-right: 1.5rem;
  padding: 0.73em 0.9em 0.86em;
  font-weight: 700;
}
.vendor-toolbox .vendor-search-toggle i {
  margin: 0 0.8rem 0 0;
  font-size: 1.5rem;
  font-weight: 600;
}
.vendor-toolbox .toolbox-left label {
  font-weight: 400;
  color: #333;
}
.vendor-toolbox .toolbox-layout {
  margin-left: 1.5rem;
}
.vendor-toolbox .btn-layout {
  color: #ccc;
}
.vendor-toolbox .btn-layout.icon-mode-list i {
  font-size: 2rem;
}

.vendor-search-wrapper {
  display: none;
  padding: 2rem;
  border-radius: 5px;
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
  margin-top: 3.2rem;
}
.vendor-search-wrapper .vendor-search-form {
  display: flex;
}
.vendor-search-wrapper input {
  min-height: 3.8rem;
  height: 3.8rem;
  color: #777;
  border-radius: 0.3rem;
}
.vendor-search-wrapper input:focus {
  border-color: #8080809e;
}
.vendor-search-wrapper .btn {
  padding: 0.7em 1.65em;
}

.vendor-product-title {
  font-size: 1.4rem;
  font-weight: 600;
  padding: 1.9rem 1.5rem;
  border: 1px solid #eee;
  border-radius: 0.3rem;
}
.vendor-product-title a {
  color: #333;
}
.vendor-product-title a:hover {
  color: #336699;
}

.vendor-map {
  border: 1px solid #eee;
}

.google-map {
  height: 35rem;
  background-color: #98c3e5;
}

@media (max-width: 991px) {
.store-wcmp {
    height: 100%;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
  .store-wcmp .store-content {
    display: block;
    position: relative;
    background: #fff;
  }
  .store-wcmp .seller-brand {
    margin-bottom: 2rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
  .store-wcmp .seller-brand img {
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    max-width: calc(100% + 2px);
    margin: -1px;
    border: 1px solid #eee;
  }
  .store-wcmp .seller-date {
    flex: auto;
    max-width: 100%;
  }
  .store-wcmp .store-title a {
    color: #336699;
    text-shadow: none;
  }
  .store-wcmp .store-address, .store-wcmp .store-rating {
    color: #333;
  }

  .store-wcfm-banner .store-content {
    display: block;
  }
  .store-wcfm-banner .store-content-right {
    align-items: flex-start;
    margin: 1rem 0 0 14rem;
  }
  .store-wcfm-banner .store-content-right .btn {
    margin-bottom: 1.5rem;
  }
}
@media (max-width: 767px) {
  .toolbox.vendor-toolbox {
    display: block;
  }

  .store-list .store-header {
    flex: 0 0 30rem;
    max-width: 30rem;
  }

  .store.store-banner .store-content {
    background: none;
    padding-left: 2rem;
    padding-right: 2rem;
    max-width: 27rem;
  }

  .store-wcmp-banner .social-icons {
    display: flex;
    justify-content: center;
    position: relative;
    top: auto;
    right: auto;
    margin-top: 1rem;
  }
}
@media (max-width: 575px) {
  .store-list {
    display: block;
  }
  .store-list .store-header {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .store-list .store-content {
    padding-left: 2rem;
  }
  .store-list .seller-brand {
    left: auto;
    transform: none;
    right: 2rem;
    top: -27%;
  }

  .store-wcfm-banner .store-content-left {
    display: block;
    text-align: center;
  }
  .store-wcfm-banner .personal-info {
    margin-right: 0;
  }
  .store-wcfm-banner .seller-brand {
    margin-right: auto;
    margin-left: auto;
  }
  .store-wcfm-banner .store-title {
    justify-content: center;
  }
  .store-wcfm-banner .store-content-right {
    align-items: center;
    margin-left: 0;
  }
}
@media (max-width: 479px) {
  .store-list .seller-brand {
    top: -22%;
    width: 7rem;
    height: 7rem;
  }
}




				


				</style>
		

            </div>
            <!-- End of Page Content -->
        </main>
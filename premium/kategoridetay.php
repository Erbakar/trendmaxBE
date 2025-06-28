<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE kategoriler SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>


<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM kategoriler WHERE seo=:id and durum=:durum");
$page = $sayfaqq->execute([':id' => $id,':durum' => $durum]);
$page = $sayfaqq->fetch(PDO::FETCH_ASSOC);
$katid = $page['id'];
$maxfiyat=0;
$maxfiyatz = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and FIND_IN_SET($katid,kategori)  order by simdikifiyat DESC")->fetchAll(PDO::FETCH_ASSOC);
foreach ($maxfiyatz as $max) {
	$maxfiyat = floatval($max['simdikifiyat'])>$maxfiyat ? $max['simdikifiyat'] : $maxfiyat;
}
$maxfiyat = ceil(intval($maxfiyat*2));
$minfiyat=0;
$minfiyatz = $ozy->query("select *, if( idurum=1,ifiyat,fiyat ) AS simdikifiyat from urunler where durum='1' and FIND_IN_SET($katid,kategori)  order by simdikifiyat ASC")->fetchAll(PDO::FETCH_ASSOC);
foreach ($minfiyatz as $min) {
	$minfiyat = floatval($min['simdikifiyat'])<$minfiyat ? $min['simdikifiyat'] : $minfiyat;
}
?>
<?php if($page['seodurum']=='1'){?>
<title><?php echo $page['stitle']; ?></title>
<meta name="keywords" content="<?php echo $page['skey']; ?>">
<meta name="description" content="<?php echo $page['sdesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $ayar['stitle']; ?>"/>
<meta property="og:description" content="<?php echo $page['sdesc']; ?>"/>
<?php } else { ?>
<title><?php echo $page['adi']; ?></title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $page['adi']; ?>"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php } ?>

	  
<?php 
$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
$urunmarkalari.="";
foreach ($pageoku as $katurunler) {
$urunmarkalari.="".$katurunler['marka'].",";
?>
<?php } ?>		  	  

  <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        
<?php if($page['level']=='2'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<li><a href="kategori/<?php echo $ustu2['seo'];?>"><?php echo $ustu2['adi'];?></a></li>
<li><a href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a></li>
<?php } ?>

<?php if($page['level']=='1'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<li><a href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a></li>
<?php } ?>

			<li>
                                        <a>
                                            <?php echo $page['adi'];?>
                                        </a>
                                    </li>			
						
						
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <!-- Start of Shop Banner -->
                    <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs" style="margin-top: 10px;background-image: url(resimler/kategoriler/<?php echo $page['resim'];?>); background-color: #FFC74E;">
                        <div class="banner-content">
                            <h4 class="banner-subtitle font-weight-bold"> <?php echo $page['adi'];?></h4>
                            <h3 style="font-size: 11px;
text-transform: none !important;
color: black !important;
font-weight: 400 !important;" class="banner-title text-white text-uppercase font-weight-bolder ls-normal"><?php echo $page['sdesc'];?></h3>
                     
                        </div>
                    </div>
                    <!-- End of Shop Banner -->

                   <?php if($page['level']=='0' or $page['level']=='1'){?>
                    <!-- Start of Shop Category -->
                    <div class="shop-default-category category-ellipse-section mb-6">
                        <div class="owl-carousel owl-theme row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '480': {
                                    'items': 3
                                },
                                '576': {
                                    'items': 4
                                },
                                '768': {
                                    'items': 6
                                },
                                '992': {
                                    'items': 7
                                },
                                '1200': {
                                    'items': 8,
                                    'margin': 30
                                }
                            }
                        }">
						
						
						
						<?php $ustkat1 = $page['id'];
						$ustu2 = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkat1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($ustu2 as $ustu2mmm){?>

                            <div class="category-wrap">
                                <div class="category category-ellipse">
                                    <figure class="category-media">
                                        <a href="kategori/<?php echo $ustu2mmm['seo'];?>">
                                            <img src="resimler/kategoriler/<?php echo $ustu2mmm['ikon']; ?>" style="width: 190px;height: 115px;background-color: #5C92C0;" width="190" height="115">
                                        </a>
                                    </figure>
                                    <div class="category-content">
                                        <h4 class="category-name">
                                            <a href="kategori/<?php echo $ustu2mmm['seo'];?>"><?php echo $ustu2mmm['adi'];?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                         <?php } ?>
                          
                         
                           
                        </div>
                    </div>
                    <!-- End of Shop Category -->
                    <?php } ?>
                    <!-- Start of Shop Content -->
                    <div class="shop-content row gutter-lg mb-10">
                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <!-- Start of Sticky Sidebar -->
                                <div class="sticky-sidebar">
                                    <div class="filter-actions">
                                        <label>Filtreleme :</label>
                                        <a href="kategori/<?php echo $page['seo'];?>" class="btn btn-dark btn-link filter-clean">Filtreyi Temizle</a>
                                    </div>
									
									 <?php if($page['level']=='0' or $page['level']=='1'){?>
									
                                    <!-- Start of Collapsible widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Alt Kategoriler</span></h3>
                                        <ul class="widget-body filter-items search-ul">
                                        <?php $ustkat1 = $page['id'];
						$ustu2 = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkat1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($ustu2 as $ustu2mmm){?>

                           
                                        <li><a href="kategori/<?php echo $ustu2mmm['seo'];?>">
                                            <?php echo $ustu2mmm['adi'];?>
                                        </a></li>
                                  
                                 
                         <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
                          <?php } ?>


                       <form action="" method="GET">

						<input type="hidden" name="siralama" value="<?php echo temizle($_GET['siralama']);?>"/>	

						<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>	

						<input type="hidden" name="fiyatfiltre" value="<?php echo temizle($_GET['fiyatfiltre']);?>"/>	

						<?php 

						if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {

			            $markagelenveri = temizle($_GET["markalar"]);

			            foreach($markagelenveri as $markaverisi){?>

				        <input type="hidden" name="markalar[]" value="<?php echo $markaverisi;?>"/>

						<?php  }}?>

								
                                    <!-- Start of Collapsible Widget -->
                                   	<div class="widget widget-collapsible" style="border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">

                                        <h3 class="widget-title"><span>Fiyat Aralığı</span></h3>
                                        <ul class="widget-body filter-items item-check mt-1">
                                            <?php $bolumfiyat=intval($maxfiyat/5);

												

												for($i=0;$i<5;$i++){

													$basfiyat=intval($minfiyat+$i*$bolumfiyat);

													$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);

												?>
											
											<li><input <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" class="custom-control-input" id="size-1<?php echo $i;?>" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>">
                                             								<label style="    font-size: 14px;" class="custom-control-label" for="size-1<?php echo $i;?>"><?php echo $basfiyat." - ".$sonfiyat;?> TL</label>
    
												 
												 </li>
                                          <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
									
									

									
									

                                    <?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

                            foreach($filtre as $filtregel){?>


                                    <!-- Start of Collapsible Widget -->
                                   		<div class="widget widget-collapsible" style="border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">

                                        <h3 class="widget-title"><span><?php echo $filtregel['fadi']; ?></span></h3>
                                        <ul class="widget-body filter-items item-check mt-1">
                                              <?php

													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	?>

											

												<div class="filter-item">

													<div class="custom-control custom-checkbox">

														<input <?php 
																
																if (in_array($verimiz,$gelenfiltreleme)){
																
																echo "checked";
																}; ?> type="checkbox" class="custom-control-input" id="size-1<?php echo $verimiz;?>" name="filtreleme[]" value="<?php echo $verimiz;?>">

														<label class="custom-control-label" for="size-1<?php echo $verimiz;?>"><?php echo $verimiz;?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->

												<?php } ?>

                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
									<?php } ?>
									
									
									
									

                                    <!-- Start of Collapsible Widget -->
                                   	<div class="widget widget-collapsible" style="border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">
                                    <h3 class="widget-title"><span>Markalar</span></h3>
                                        <ul class="widget-body filter-items item-check mt-1">
                                      <?php
												$gid = 0;
												$array = array($urunmarkalari);
												
												foreach($array as $key => $value){
													if($key && $array[$key-1] != $value){
														$gid++; 
													}
													$array2[$gid][] = $value;
												}

												$markalarimiz="";
												$kelimeler= explode(",",$value); 
												foreach($kelimeler as $markamid){
													if($markamid==''){
														$newid = "0";  
													}else{
														$newid = $markamid;    
													}
													
													$markalarimiz.="".$newid.",";
												}
												$markalarimiz = mb_substr($markalarimiz,0,-1);
												
												$mark = $ozy->query("select adi,id from markalar where durum='1' AND id IN ($markalarimiz) group by adi asc")->fetchAll(PDO::FETCH_ASSOC); 

												foreach($mark as $marka){
													
												if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {	
													$markafiltreleme = $_GET['markalar'];
                                                   
												}
													
													$markaidmmmm = $marka['id'];
													?>	
												<div class="filter-item">

													<div class="custom-control custom-checkbox">

														<input <?php 
																
																if (in_array($markaidmmmm,$markafiltreleme)){
																
																echo "checked";
																};?>
															 type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" class="custom-control-input" id="brand-1<?php echo $marka['id']; ?>">

														<label class="custom-control-label" for="brand-1<?php echo $marka['id']; ?>"><?php echo $marka['adi']; ?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->



                                    <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
									
										
		                	

		                		<button type="submit" class="butonok btn-primary btn-rounded">Filteyi Uygula</a>

		                	
		              
									
                                </div>
                                <!-- End of Sidebar Content -->
                            </div>
							</form>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->

                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top" style="border-bottom: 1px solid #f4f4f4;
margin-bottom: 10px;">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left d-block d-lg-none"><i class="w-icon-category"></i><span>Filtreleme</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Ürün Sıralama:</label>
                                       <form action="" method="GET"> 

										<?php 

										if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {

			                            $fitregelenveri = temizle($_GET["filtreleme"]);

			                            foreach($fitregelenveri as $filtreverisi){?>

										

				                        <input type="hidden" name="filtreleme[]" value="<?php echo $filtreverisi;?>"/>

										

		                                <?php  }}?>

										<?php 

										if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {

			                            $markagelenveri = temizle($_GET["markalar"]);

			                            foreach($markagelenveri as $markaverisi){?>

				                        <input type="hidden" name="markalar[]" value="<?php echo $markaverisi;?>"/>

										<?php  }}?>

									

										

										<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>

										<input type="hidden" name="fiyatfiltre" value="<?php echo temizle($_GET['fiyatfiltre']);?>"/>	

											<select name="siralama" class="form-control" onchange='this.form.submit()'>

												<option <?php echo $_GET['siralama'] == 'onerilen' ? 'selected="selected"' : null; ?> value="onerilen">Önerilen Sıralama</option>

												<option <?php echo $_GET['siralama'] == 'dusukfiyat' ? 'selected="selected"' : null; ?> value="dusukfiyat">Önce En Düşük Fiyat</option>

												<option <?php echo $_GET['siralama'] == 'yuksekfiyat' ? 'selected="selected"' : null; ?> value="yuksekfiyat">Önce En Yüksek Fiyat</option>

												<option <?php echo $_GET['siralama'] == 'encokyorum' ? 'selected="selected"' : null; ?> value="encokyorum">En Çok Yorum Alan</option>

												<option <?php echo $_GET['siralama'] == 'enbegenilen' ? 'selected="selected"' : null; ?> value="enbegenilen">En Çok Beğenilen</option>

												<option <?php echo $_GET['siralama'] == 'eskitarih' ? 'selected="selected"' : null; ?> value="eskitarih">En Eski Tarihe Göre</option>

												<option <?php echo $_GET['siralama'] == 'yenitarih' ? 'selected="selected"' : null; ?> value="yenitarih">En Yeni Tariha Göre</option>

											</select>

									    </form>

                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show">
                                  	 Bu kategoride toplam <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

                                         $katsorgu->execute();

                                         $katsay = $katsorgu->fetchColumn();

                                         echo ''.$katsay.''; ?> adet ürün bulunmaktadır.
                                    </div>
                                
                                </div>
                            </nav>
                            <div class="product-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-2">
                               
                        
						
						
					<?php 



     

        $pages = intval(@$_GET['pages']);

        if (!$pages) {

          $pages = 1;

        }

        

        $bak = $ozy->prepare("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori)");

        $bak->execute(array());

        $toplam= $bak->rowCount();

        $limit = 40;

        $goster = $pages*$limit-$limit;

        $sayfasayisi = ceil($toplam/$limit);

        $forlimit = 10;

		$where = " ";

		$marka = " ";

		$wherex = " ";

		

		if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {

			$fitregelenveri = temizle($_GET["filtreleme"]);

			foreach($fitregelenveri as $filtreverisi){

				

			$where .= " and FIND_IN_SET('".$filtreverisi."', filtre)";

			

			

		    }

		

		}

		

		if (isset($_GET["fiyatfiltre"]) && $_GET["fiyatfiltre"] != "") {

			$gelenfiyat = temizle($_GET["fiyatfiltre"]);

			$fiyatexp=explode("-",$gelenfiyat);

			

			$wherex = " and if(idurum=1,ifiyat,fiyat)>=".intval($fiyatexp[0])." and if(idurum=1,ifiyat,fiyat)<=".intval($fiyatexp[1]);



		

		}

		

		if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {

			$markagelenveri = temizle($_GET["markalar"]);

			foreach($markagelenveri as $markaverisi){

				
            if($markaverisi==''){
			$newid = "0";  
            }else{
			$newid = $markaverisi;    
			}
									  
			$markammmmm.="".$newid.",";
			}
			$markammmmm = mb_substr($markammmmm,0,-1);
			

			$marka = " AND marka IN (".$markammmmm.") ";

			

		    }

		




		

		if (isset($_GET["siralama"]) && $_GET["siralama"] != "") {

			

		if(temizle($_GET["siralama"]=='dusukfiyat')){

			

		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat) AS simdikifiyat from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by simdikifiyat ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

	

        } elseif (temizle($_GET["siralama"]=='yuksekfiyat')) {



 		$pageoku = $ozy->query("select *, if( idurum=1,ifiyat,fiyat) AS simdikifiyat from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by simdikifiyat DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    	

		} elseif (temizle($_GET["siralama"]=='encokyorum')) {

			

		$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by yorum DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    

		} elseif (temizle($_GET["siralama"]=='enbegenilen')) {

		

		$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by hit DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    

		} elseif (temizle($_GET["siralama"]=='eskitarih')) {

		

		$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    

		} elseif (temizle($_GET["siralama"]=='yenitarih')) {

			

		$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    	

		} elseif (temizle($_GET["siralama"]=='onerilen')) {	

		

		$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    

		}

		

		

		} else {

		

		$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by sira DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

  	    

		}

		

	  
        $urunmarkalari.="";
		
		$__URUN__ = false;

        foreach ($pageoku as $katurunler) {
			
        $urunmarkalari.="".$katurunler['marka'].",";
		
        $__URUN__ = true;

		

		?>					
	
				
                                    <div class="product-wrap product text-center">
									
                                        <figure class="product-media">
										
                                           
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $katurunler['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" style="width: 216px;height: 290px;">
             <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" style="width: 216px;height: 290px;">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $katurunler['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" style="width: 216px;height: 290px;">
             </a>
			 <?php } ?>
                                            <div class="product-action-vertical">
                                               <a href="?favoriekle=<?php echo $katurunler['id']; ?>" class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                               <a href="?karsilastir=<?php echo $katurunler['id']; ?>" class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                               <a href="urun/<?php echo $katurunler['seo']; ?>" class="btn-product-icon btn-cart w-icon-cart" title="Sepete Ekle"></a>
                                                 

										   </div>
												 <?php if($katurunler['idurum']=='1'){?>
		        <div class="product-label-group">
			  <label class="product-label label-discount">
			  -%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?> İndirimli
			</label>
			</div>
			<?php } ?>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?> </a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                         <span class="ratings" style="width:
													<?php echo $katurunler['yildiz'] == '1' ? '20%' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '40%' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? '60%' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '80%' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '100%' : null; ?>;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="urun/<?php echo $katurunler['seo']; ?>" class="rating-reviews">
												( <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'");
                                      $urunyorumsayisi->execute();
                                      $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> Yorum )
												</a>
                                            </div>
                                            <div class="product-price">
                                            <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
                                            </div>
                                        </div>
                                    </div>
                                		
						
						
				<?php }

							

                            if (!$__URUN__){

								

                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Üzgünüm Böyle bir ürün bulunamadı</b>";

							

							}

							?>					
						
						
                            </div>

                            <div class="toolbox toolbox-pagination justify-content-between">
                               
                                <ul class="pagination">
                                   <?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo "<li class='page-item active' aria-current='page'><a>".$i."</a></li>";

                                      

                   }else{

					   

				   $eklenecekstr="";

				   foreach($_GET as $key=>$value) {

							if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=&".$value;

						}

						$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

							

                  echo "<li class='page-item'><a class='page-link' href='kategori/".$page['seo']."?pages=".$i.$eklenecekstr."'>".$i."</a></li>";

          

          }



                  }

                }

          

          

          

          

                   ?> 

             

						

                      

							

                                </ul>
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
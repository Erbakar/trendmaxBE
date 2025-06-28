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

$bakz = $ozy->prepare("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori)");
$bakz->execute(array());
$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori)  order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
$urunmarkalari.="";
foreach ($pageoku as $katurunler) {

$urunmarkalari.="".$katurunler['marka'].",";


	?>



<?php } ?>	





<section id="wrapper">
   <div class="container">
      <div class="row">
         <nav data-depth="2" class="breadcrumb hidden-sm-down">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
               <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                  <a itemprop="item" href="<?php echo $url;?>">
                  <span itemprop="name">Anasayfa</span>
                  </a>
                  <meta itemprop="position" content="1">
               </li>
               <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                  <a itemprop="item">
                  <span itemprop="name"><?php echo $page['adi'];?></span>
                  </a>
                  <meta itemprop="position" content="2">
               </li>
            </ol>
         </nav>
         <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
            <div id="search_filters_wrapper" class="hidden-sm-down">
               <div id="search_filter_controls" class="hidden-md-up">
                  <span id="_mobile_search_filters_clear_all"></span>
                  <button class="btn btn-secondary ok">
                  <i class="material-icons rtl-no-flip"></i>
                  KAPAT
                  </button>
               </div>
               <div id="search_filters">
                 <div class="block-categories hidden-sm-down">
               <ul class="category-top-menu">
                  <li><a class="text-uppercase h6">Ürün Kategorilerimiz</a></li>
                  <li>
                     <ul class="category-sub-menu">
					 
					 
					 <?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>
                    
					 
					 
					 
                        <li data-depth="0">
                           <a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                           <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar3"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div>
                           <div class="collapse" id="exCollapsingNavbar3">
                              <ul class="category-sub-menu">
                                 
							  <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	 
								 
								 <li data-depth="1">
                                    <a class="category-sub-link" href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar5<?php echo $katadi2['id']; ?>"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span>
                                    <div class="collapse" id="exCollapsingNavbar5<?php echo $katadi2['id']; ?>">
                                       <ul class="category-sub-menu">
									   
									   	<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                                          <li data-depth="2"><a class="category-sub-link" href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                         <?php } ?>	
										
										</ul>
                                    </div>
                                 </li>
                               <?php } ?>	
							  
							  
							  </ul>
                           </div>
                        </li>
                    
					  <?php } else { ?>		
					
                        <li data-depth="0"><a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a></li>
                        
						
					 <?php }} ?>		
						
						
                     
                     </ul>
                  </li>
               </ul>
            </div>
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
										
                  <section class="facet clearfix">
                     <p class="h6 facet-title hidden-sm-down">Fiyat Aralığı</p>
                     <div class="title hidden-md-up" data-target="#facet_22585" data-toggle="collapse">
                        <p class="h6 facet-title">Fiyat Aralığı</p>
                     
                     </div>
                     <ul id="facet_22585" class="collapse">
                     	<?php $bolumfiyat=intval($maxfiyat/6);
												for($i=0;$i<6;$i++){
													$basfiyat=intval($minfiyat+$i*$bolumfiyat);
													$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);
													?>
													
													
													<li>
														<div class="form-check">
															<input class="form-check-input" <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>" id="flexCheckDefaultf" onchange='this.form.submit()'>
															<label class="form-check-label" for="flexCheckDefaultf">
																<?php echo $basfiyat;?> TL - <?php echo $sonfiyat;?> TL
															</label>
														</div>
													</li>
												<?php } ?>	
                     </ul>
                  </section>
				  
				  	<?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

										foreach($filtre as $filtregel){?>
				  
				  
				  
				  
                  <section class="facet clearfix">
                     <p class="h6 facet-title hidden-sm-down"><?php echo $filtregel['fadi']; ?></p>
                     <div class="title hidden-md-up" data-target="#facet_74185<?php echo $filtregel['id']; ?>" data-toggle="collapse">
                        <p class="h6 facet-title"><?php echo $filtregel['fadi']; ?></p>
                       
                     </div>
                     <ul id="facet_74185<?php echo $filtregel['id']; ?>" class="collapse">
                       		 
													<?php
													
													


													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	
														
														?>
														<li data-filter-item="<?php echo $verimiz;?>" data-name="<?php echo $verimiz;?>">
														
															<div class="form-check">
																<input class="form-check-input"
																<?php 
																
																if (in_array($verimiz,$gelenfiltreleme)){
																
																echo "checked";
																}; ?> type="checkbox" name="filtreleme[]" value="<?php echo $verimiz;?>" id="flexCheckDefault">
																<label class="form-check-label" for="flexCheckDefault">
																	<?php echo $verimiz;?>
																</label>
															</div>
														</li>
														
													<?php } ?>
                     </ul>
                  </section>
				  
				  
				  <?php } ?>	
				  
				  
				  
                  <section class="facet clearfix">
                     <p class="h6 facet-title hidden-sm-down">Markalar</p>
                     <div class="title hidden-md-up" data-target="#facet_59971" data-toggle="collapse">
                        <p class="h6 facet-title">Markalar</p>
                        
                     </div>
                     <ul id="facet_59971" class="collapse">
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
													
													
													<li data-filter-item="<?php echo $marka['id']; ?>" data-name="<?php echo $marka['id']; ?>">
														<div class="form-check">
															<input class="form-check-input" 
															
															<?php 
																
																if (in_array($markaidmmmm,$markafiltreleme)){
																
																echo "checked";
																}; ?>
															
															
															type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" id="flexCheckDefaultC">
															<label class="form-check-label" for="flexCheckDefaultC">
																<?php echo $marka['adi']; ?>
															</label>
														</div>
													</li>
													
												<?php } ?>
                     </ul>
					 
					 
					 
					 
                  </section>
               
                 
                  
                  <section class="facet clearfix">
			
                    <button type="submit" class="btn btn-primary w-100">Filtrele</button>
						  <a style="margin-top: 10px;
background: white;
color: <?php echo $tema['t37'];?>;
border: 1px solid <?php echo $tema['t37'];?>;" href="kategori/<?php echo $page['seo'];?>" class="btn btn-primary w-100">Temizle</a>
					</form>
                  </section>
               </div>
            </div>
         
         </div>
         <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
            <section id="main">
               <div id="js-product-list-header">
                  <div class="block-category card card-block">
                     <div class="category-cover">
                        <img src="resimler/kategoriler/<?php echo $page['resim']; ?>" alt="<?php echo $page['seo']; ?>">
                     </div>
                     <h1 class="h1"><?php echo $page['adi']; ?></h1>
                     <div class="block-category-inner">
                        <div id="category-description" class="text-muted">
                           <p><?php echo $page['sdesc']; ?></p>
                        </div>
                     </div>
                  </div>
                
               </div>
               <section id="products" class="active_grid">
                  <div id="laber-products-top">
                     <div class="row">
                      
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-sm-down total-products">
                           <p>"<span><?php echo $page['adi'];?></span> kategorisi " için <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>  sonuç listeleniyor.</p>
                        </div>
                        <div id="js-product-list-top" class="products-selection" style="width: 50% !important;
float: left !important;
padding: 0px !important;">
                           <div class="row sort-by-row">
                              <span class="col-sm-3 col-md-3 hidden-sm-down sort-by">Sıralama :</span>
                              <div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
                               <form  action="" method="GET">
						<div class="row justify-content-end gx-lg-4 gx-3">
							<!-- For get orderby from loop -->
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
									
									<div class="col-xl-6 col-md-6 col-6">
										
										<select  style="background: whitesmoke;
padding: 5px;" name="siralama" class="form-select" onchange='this.form.submit()'>
											<option selected <?php echo $_GET['siralama'] == 'onerilen' ? 'selected="selected"' : null; ?> value="onerilen">Önerilen Sıralama</option>

											<option <?php echo $_GET['siralama'] == 'dusukfiyat' ? 'selected="selected"' : null; ?> value="dusukfiyat">Önce En Düşük Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'yuksekfiyat' ? 'selected="selected"' : null; ?> value="yuksekfiyat">Önce En Yüksek Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'encokyorum' ? 'selected="selected"' : null; ?> value="encokyorum">En Çok Yorum Alan</option>

											<option <?php echo $_GET['siralama'] == 'enbegenilen' ? 'selected="selected"' : null; ?> value="enbegenilen">En Çok Beğenilen</option>

											<option <?php echo $_GET['siralama'] == 'eskitarih' ? 'selected="selected"' : null; ?> value="eskitarih">En Eski Tarihe Göre</option>

											<option <?php echo $_GET['siralama'] == 'yenitarih' ? 'selected="selected"' : null; ?> value="yenitarih">En Yeni Tariha Göre</option>

										</select>
										
									</div>
									
									
									
									
								</div>
							</form>
                              </div>
                              <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
                                 <button id="search_filter_toggler" class="btn btn-secondary">
                                 Filtreleme
                                 </button>
                              </div>
                           </div>
                           <div class="col-sm-12 hidden-md-up text-sm-center showing">
                              "<span><?php echo $page['adi'];?></span> kategorisi " için <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>  sonuç listeleniyor.
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <div>
                     <div id="js-product-list">
                        <div class="laberProductGrid laberProducts">
                           <div class="row">
						   
						   
						   		<?php 



										

										$pages = intval(@$_GET['pages']);

										if (!$pages) {

											$pages = 1;

										}
										$bak = $ozy->prepare("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori)");

										$bak->execute(array());

										$toplam= $bak->rowCount();

										$limit = 24;

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
											if (isset($_GET["ilkfiyat"]) && $_GET["ilkfiyat"] != "" && isset($_GET["sonfiyat"]) && $_GET["sonfiyat"] != "") {
										
												if($_GET['ilkfiyat']==''){
												echo $fiyatexp1 = "0";	
												} else { 	
												$fiyatexp1 = $_GET['ilkfiyat'];
                                                echo $fiyatexp1 = str_replace('TL','',$fiyatexp1);												
												} 
												
												
												if($_GET['sonfiyat']==''){
												echo $fiyatexp2 = $maxfiyat;	
												} else { 	
												$fiyatexp2 = $_GET['sonfiyat'];
                                                echo $fiyatexp2 = str_replace('TL','',$fiyatexp2);												
												} 
												$wherex = " and if(idurum=1,ifiyat,fiyat)>=".intval($fiyatexp1)." and if(idurum=1,ifiyat,fiyat)<=".intval($fiyatexp2);

												
											}else{   
												
												
												$gelenfiyat = temizle($_GET["fiyatfiltre"]);

												$fiyatexp=explode("-",$gelenfiyat);

												$wherex = " and if(idurum=1,ifiyat,fiyat)>=".intval($fiyatexp[0])." and if(idurum=1,ifiyat,fiyat)<=".intval($fiyatexp[1]);

											}

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

												

												$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by tarih DESC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

												

											} elseif (temizle($_GET["siralama"]=='yenitarih')) {

												

												$pageoku = $ozy->query("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori) ".$where." ".$wherex." ".$marka." order by tarih ASC limit $goster,$limit")->fetchAll(PDO::FETCH_ASSOC);

												

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
						   
						   
							  
							  
							  
							  
                              <div class="item-inner 
                                 col-lg-3 col-md-6 col-sm-6 col-xs-6
                                 last-item-of-tablet-line
                                 last-item-of-mobile-line
                                 ">
                                  <div class="item">
      <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope="" itemtype="http://schema.org/Product">
         <div class="laberProduct-container">
            <div class="laberProduct-image">
			
			
			
               <a href="urun/<?php echo $katurunler['seo']; ?>" class="thumbnail product-thumbnail">
               <span class="cover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410">
               </span>
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
     
			 <?php if($urunyorumsayimizzz>='1'){?>		
			 <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?> 
               <span class="hover_image">
               <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" width="410" height="410"> 
               </span>
			 <?php }?>    
			 <?php } else { ?>	
              <span class="hover_image">
               <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['seo']; ?>" data-full-size-image-url="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="410" height="410"> 
               </span>
            <?php }?> 
			 
               </a>
			   
			   
               <ul class="laberProduct-flags">
			   <?php if($katurunler['idurum']=='1'){?>
                  <li class="laber-flag laber-discount"><span>-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span></li>
				<?php } ?> 
				<?php if($katurunler['yeni']=='1'){?>
                  <li class="laber-flag laber-new"><span>Yeni</span></li>
				  <?php } ?> 
               </ul>
               <div class="laberActions">
                  <div class="laberActions-i">
                     <div class="laberItem">
                        <div class="laberwishlist product-item-wishlist">
                           <a class="addToWishlist wishlistProd_2" title="Favorilerime Ekle" href="?favoriekle=<?php echo $katurunler['id']; ?>" rel="2">
                           <i class="icon-heart"></i> <span>Favorilerime Ekle</span>
                           </a>
                        </div>
                     </div>
                     <div class="laberItem">		
                        <a class="button-action" data-id-product="2" href="?karsilastir=<?php echo $katurunler['id']; ?>"  title="Karşılaştır">
                       <i class="icon-layers" aria-hidden="true"></i>
                        <i class="removeCompare icon-close"></i><span>Karşılaştır</span>
                        </a>
                     </div>
                     <div class="laberItem">
                        <a href="urun/<?php echo $katurunler['seo']; ?>" class="" title="İncele">
                        <i class="icon-eye"></i>
                        <span>İncele</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="laberCart">
                  
                     <button onclick="window.location.href='urun/<?php echo $katurunler['seo']; ?>'" class="laberBottom
                        ">
                     <i class="fa fa-spinner fa-spin fa-3x fa-fw" aria-hidden="true"></i>
                     <span>+ Sepete Ekle</span>
                
               </div>
            </div>
            <div class="laber-product-description">
               <h2 class="productName" itemprop="name"><a href="urun/<?php echo $katurunler['seo'];?>"><?php echo $katurunler['adi'];?></a></h2>
               <div class="comments_note">
                  <div class="star_content pull-left">
                                      <?php echo $katurunler['yildiz'] == '1' ? ' <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? ' <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div> <div class="star star_on"><i class="icon-star"></i></div>' : null; ?>
					 
					 
					 
                  </div>
               </div>
			  <div class="manufacturer_name">
                  <span>Ürün Kodu:</span> <?php echo $katurunler['urunkodu'];?>
               </div>
			   
			   
			   
               <div class="laber-product-price-and-shipping has_discount">
                  <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               </div>
            
            </div>
         </div>
      </article>
   </div>
                              </div>
							  
							  
                            			<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center">
	
	
		<div class="notfound_content">
			<div class="title fs-5">Aradığın özellikte ürüne maalesef ulaşılmıyor.</div>
			<div class="text fs-5 fw-bold mt-1"><a href="kategori/<?php echo $page['seo'];?>">Tekrar denemek ister misin ?</a></div>
		</div>
	</div>													








													<?php }

													?>			
													
							  
							  
                           </div>
                        </div>
                    
                        <nav class="pagination">
                           <div class="row">
                              <div class="col-md-6">
                                "<span><?php echo $page['adi'];?></span> kategorisi " için <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>  sonuç listeleniyor.
                              </div>
                              <div class="col-md-6">
                                
														<ul class="pagination">
															
															<?php

															for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

																if ($i>0 and $i<=$sayfasayisi) {

																	

																	if ($i == $pages) {

																		

																		echo "<li class='active' aria-current='page'><a>".$i."</a></li>";

																		

																	}else{

																		

																		$eklenecekstr="";

																		foreach($_GET as $key=>$value) {

																			if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=".$value;

																		}

																		$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

																		

																		echo "<li><a class='' href='kategori/".$page['seo']."?pages=".$i.$eklenecekstr."'>".$i."</a></li>";

																		

																	}



																}

															}

															

															

															

															

															?> 

															
															
															
														</ul>
														
												
                              </div>
                           </div>
                        </nav>
                     
                     </div>
                  </div>
                  <div id="js-product-list-bottom">
                     <div id="js-product-list-bottom"></div>
                  </div>
               </section>
            </section>
         </div>
      </div>
   </div>
</section>

<style>
.form-check-label {
  padding-left: 0px !important;
  margin-bottom: 0;
  cursor: pointer;
}

#laber-products-top .total-products p {
  margin: 0;
  text-align: left;
  line-height: 45px;
}
</style>
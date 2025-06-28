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
<!-- Main Content -->
	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="collection-heading heading-content ">
				<a>
					
				<?php if($page['resim']=='resimyok.jpg'){?>
 
			<?php } else { ?>
			<img class="img_heading" src="resimler/kategoriler/<?php echo $page['resim'];?>">
            <?php } ?>
					
				</a>
				<div class="container">
					<div class="row">
						<div class="collection-wrapper">
							
							<div class="breadcrumb-group">
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="<?php echo $url;?>" title="Anasayfa" itemprop="url">
									<span itemprop="title">Anasayfa</span></a>
									</span>
									
									<?php if($page['level']=='2'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<span class="arrow-space">></span>
<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="kategori/<?php echo $ustu2['seo'];?>" title="<?php echo $ustu2['adi'];?>" itemprop="url">
<span itemprop="title"><?php echo $ustu2['adi'];?></span>
</a>
</span>

<span class="arrow-space">></span>
<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="kategori/<?php echo $ustu['seo'];?>" title="<?php echo $ustu['adi'];?>" itemprop="url">
<span itemprop="title"><?php echo $ustu['adi'];?></span>
</a>
</span>
<?php } ?>

<?php if($page['level']=='1'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<span class="arrow-space">></span>
<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="kategori/<?php echo $ustu['seo'];?>" title="<?php echo $ustu['adi'];?>" itemprop="url">
<span itemprop="title"><?php echo $ustu['adi'];?></span>
</a>
</span>

<?php } ?>

<span class="arrow-space">></span>
<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="kategori/<?php echo $page['seo'];?>" title="<?php echo $page['adi'];?>" itemprop="url">
<span itemprop="title"><?php echo $page['adi'];?></span>
</a>
</span>								
									
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="collection-content">
				<div class="collection-wrapper">
					<div class="container">
						<div class="row">
							<div id="shopify-section-collection-template" class="shopify-section">
								<div class="collection-inner">
									<!-- Tags loading -->
									<div id="tags-load" style="display:none;"><i class="fa fa-spinner fa-pulse fa-2x"></i></div>
									<div id="collection">
										<div class="collection_inner">
											<div class="collection-leftsidebar sidebar col-sm-3 clearfix">
											
												<?php if($page['level']=='0' or $page['level']=='1'){?>
											
												<div class="sidebar-block collection-block">
													<div class="sidebar-title">
														<span>Alt Kategoriler</span>
														<i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
													</div>
													<div class="sidebar-content">
														<ul class="list-cat">
															     <?php $ustkat1 = $page['id'];
						$ustu2 = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkat1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($ustu2 as $ustu2mmm){?>
															
															         <li><a href="kategori/<?php echo $ustu2mmm['seo'];?>">
                                            <?php echo $ustu2mmm['adi'];?>
                                        </a></li>
                                  
                                 
                         <?php } ?>
                                    
														</ul>
													</div>
												</div>
												
												
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
												<div class="sidebar-block filter-block">
												<div class="sidebar-title">
														<span>Ürün Filtreleme</span>
														<i class="fa fa-caret-down show_sidebar_content" aria-hidden="true"></i>
													</div>
													<div id="tags-filter-content" class="sidebar-content">
														<!-- filter tags group -->
														<div class="filter-tag-group">
														
														<div class="tag-group" id="coll-filter-1">
																<p class="title">
																	<span class="filter-title">Fiyat Aralığı</span>
																	<span class="show_filter_content">+</span>
																</p>
																<ul class="filter-content">
																
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
														
														
														   <?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

                            foreach($filtre as $filtregel){?>

														
															<div class="tag-group" id="coll-filter-2<?php echo $filtregel['id']; ?>">
																<p class="title">
																	<span class="filter-title"><?php echo $filtregel['fadi']; ?></span>
																	<span class="show_filter_content">+</span>
																</p>
																<ul class="filter-content">
																
																                  <?php

													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	?>

												<div class="filter-item">

													<div class="custom-control custom-checkbox">

														<input  <?php 																																if (in_array($verimiz,$gelenfiltreleme)){																																echo "checked";																}; ?> type="checkbox" class="custom-control-input" id="size-1<?php echo $verimiz;?>" name="filtreleme[]" value="<?php echo $verimiz;?>">

														<label class="custom-control-label" for="size-1<?php echo $verimiz;?>"><?php echo $verimiz;?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->

												<?php } ?>
																
																</ul>
															</div>
															
														<?php } ?>	
															
															
															
															
																<div class="tag-group" id="coll-filter-99999">
																<p class="title">
																	<span class="filter-title">Markalar</span>
																	<span class="show_filter_content">+</span>
																</p>
																<ul class="filter-content">
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

														<input <?php 																																if (in_array($markaidmmmm,$markafiltreleme)){																																echo "checked";																}; ?> name="markalar[]" value="<?php echo $marka['id']; ?>" class="custom-control-input" id="brand-1<?php echo $marka['id']; ?>">

														<label class="custom-control-label" for="brand-1<?php echo $marka['id']; ?>"><?php echo $marka['adi']; ?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->



                                    <?php } ?>
									</ul>
															</div>
															 <a class="butonok btn btn-outline-primary-2" href="kategori/<?php echo $page['seo'];?>">Filtreyi Temizle</a>
													
															<button type="submit" class="butonok btn btn-outline-primary-2">Filteyi Uygula</a>
								
                             </form>	
															
														</div>
														<script>
															$(function() {
																$("#coll-filter-1 ul li a, #coll-filter-2 ul li a, #coll-filter-3 ul li a, #coll-filter-4 ul li a").click(function(event) {
																	event.preventDefault();
																	var url = $(this).attr('href');
																	$.ajax({
																		type: 'GET',
																		url: url,
																		data: {},
																		beforeSend: function(xhr) {
																			$("#tags-load").show();
																		},
																		complete: function(data) {
																			$('#collection').html($("#collection", data.responseText).html());
																			history.pushState({
																				page: url
																			}, url, url);
																			$("#tags-load").hide();
																			handleGridList();
																			toggleTagsFilter();
																		}
																	});
																});
															});
														</script>
													</div>
												</div>
											
											

											</div>
											<div class="collection-mainarea col-sm-9 clearfix">
												
												
												<div class="collection_toolbar">
													<div class="toolbar_left">
														Bu kategoride toplam <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

                                         $katsorgu->execute();

                                         $katsay = $katsorgu->fetchColumn();

                                         echo ''.$katsay.''; ?> adet ürün bulunmaktadır.
													</div>
													<div class="toolbar_right">
														<div class="group_toolbar">
															<!-- View as -->
														
															<!-- Sort by -->
															<div class="sortBy">
																
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

											<select name="siralama" class="list-unstyled option-set text-left list-styled" onchange='this.form.submit()'>

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
													</div>
												</div>
												<div class="collection-items clearfix">
													<div class="products">
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
			
		  
		  
													
														<div class="product-item col-sm-3">
															<div class="product">
																	<div class="row-left">
														<a href="urun/<?php echo $katurunler['seo']; ?>" class="hoverBorder container_item">
																			<div class="hoverBorderWrapper">
																				<img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="not-rotation img-responsive front" alt="Ürün">
																				<div class="mask"></div>
																				<img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="rotation img-responsive" alt="Ürün">
																			</div>
														</a>
														<?php if($katurunler['idurum']=='1'){?>
														<span class="sale_banner">
															<span class="sale_text">-%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
														</span>
														<?php } ?>
					
														<div class="hover-mask">
															<div class="group-mask">
																<div class="inner-mask">
																					<div class="group-actionbutton">
																						
																							<div class="effect-ajax-cart">
																								
																								<a class="btn select-option" href="?karsilastir=<?php echo $katurunler['id']; ?>"><i class="fa fa-random"></i></a>
																							</div>
																						
																						<ul class="quickview-wishlist-wrapper">
																							<li class="quickview">
																								<div class="product-ajax-cart">
																									<span class="overlay_mask"></span>
																									<div class="quick_shop">
																										<a href="urun/<?php echo $katurunler['seo']; ?>" class=""><i class="fa fa-shopping-basket" title="Sepete Ekle"></i></a>
																									</div>
																								</div>
																							</li>
																							<li class="wishlist">
																								<a class="wish-list" href="?favoriekle=<?php echo $katurunler['id']; ?>">
																								<span class=""><i class="fa fa-heart" title="Favorilerim"></i></span></a>
																							</li>
																						</ul>
																					</div>
																				</div>
																<!--inner-mask-->
															</div>
															<!--Group mask-->
														</div>
													</div>

																<div class="row-right animMix">
																		<div class="product-title"><a class="title-5" href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></div>
																		
																		<div class="price">
																			 <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
																		</div>
																	</div>
															
															</div>
														</div>
														
														
														
															<?php }

							

                            if (!$__URUN__){

								

                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Üzgünüm Böyle bir ürün bulunamadı</b>";

							

							}

							?>		
														
									
													</div>
												</div>
												<div class="collection-bottom-toolbar">
													<div class="product-counter col-sm-6">
														
													</div>
													<div class="product-pagination col-sm-6">
														<div class="pagination_group">
															<ul class="pagination">
															
			  <?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo "<li aria-current='page' class='active' aria-current='page'><a>".$i."</a></li>";

                                      

                   }else{

					   

				   $eklenecekstr="";

				   foreach($_GET as $key=>$value) {

							if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=&".$value;

						}

						$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

							

                  echo "<li class='page-numbers'><a class='' href='kategori/".$page['seo']."?pages=".$i.$eklenecekstr."'>".$i."</a></li>";

          

          }



                  }

                }

          

          

          

          

                   ?> 
</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<script type="text/javascript">
									/* Handle Grid - List */
									function handleGridList() {
										if ($('#goList').length) {
											$('#goList').on(clickEv, function(e) {
												$(this).parent().find('li').removeClass('active');
												$(this).addClass('active');
												$('.collection-items').addClass('full_width ListMode');
												$('.collection-items').removeClass('no_full_width GridMode');
												$('.collection-items .row-left').addClass('col-md-5');
												$('.collection-items .row-right').addClass('col-md-7');
												$('.collection-items .product-item').removeClass('col-sm-3 col-sm-4');
												$('.grid-mode').addClass("hide");
												$('.list-mode').removeClass("hide");
											});
										}
										if ($('#goGrid').length) {
											$('#goGrid').on(clickEv, function(e) {
												$(this).parent().find('li').removeClass('active');
												$(this).addClass('active');
												$('.collection-items').removeClass('full_width ListMode');
												$('.collection-items').addClass('no_full_width GridMode');
												$('.collection-items .row-left').removeClass('col-md-5');
												$('.collection-items .row-right').removeClass('col-md-7');

												$('.collection-items .product-item').addClass('col-sm-3');

												$('.grid-mode').removeClass("hide");
												$('.list-mode').addClass("hide");
											});
										}
									}
									$(document).ready(function() {
										if (location.search.search("sort_by=") == -1) {

										} else {
											if (location.search != "") {
												var stpo = location.search.search("sort_by=") + 8,
													sortby_url = '.' + location.search.substr(stpo).split('='),
													sortby_url_a = sortby_url + " a";
												$(sortby_url).addClass("active");
												$('#sortButton .name').html($(sortby_url_a).html());
											} else {
												$('.manual').addClass("active");
											}
										}
										handleGridList();
									});
								</script>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	

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
	
	
	
	
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			
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
		<li><a><?php echo $page['adi']; ?></a></li>	
		</ul>
		
		<div class="row">
			<!--Left Part Start -->
		<aside class="col-sm-4 col-md-3 content-aside" id="column-left">
				
				<div class="module">
   <h3 class="modtitle">Filtreleme </h3>
   <div class="modcontent ">
		<form class="type_2" action="" method="GET">

									<input type="hidden" name="siralama" value="<?php echo temizle($_GET['siralama']);?>"/>	

									<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>	

									<input type="hidden" name="fiyatfiltre" value="<?php echo temizle($_GET['fiyatfiltre']);?>"/>	

									<?php 

									if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {

										$markagelenveri = temizle($_GET["markalar"]);

										foreach($markagelenveri as $markaverisi){?>

											<input type="hidden" name="markalar[]" value="<?php echo $markaverisi;?>"/>

										<?php  }}?>

		<div class="table_layout filter-shopby">
			<div class="table_row">
			
				<div class="table_cell">
					<fieldset>
						<legend>Fiyat Aralığı</legend>
						<ul class="checkboxes_list">
						
		<?php $bolumfiyat=intval($maxfiyat/6);
		for($i=0;$i<6;$i++){
		$basfiyat=intval($minfiyat+$i*$bolumfiyat);
		$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);
		?>
						
							<li>
								<input <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" id="category_1<?php echo $basfiyat;?>" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>" onchange='this.form.submit()'>
								<label for="category_1<?php echo $basfiyat;?>"><?php echo $basfiyat;?> TL - <?php echo $sonfiyat;?> TL</label>
							</li>
						
        <?php } ?>
						</ul>

					</fieldset>

				</div><!--/ .table_cell -->
				
				<?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

	foreach($filtre as $filtregel){?>
				
				<div class="table_cell">
					<fieldset>
						<legend><?php echo $filtregel['fadi']; ?></legend>
						<ul class="checkboxes_list">
						
						<?php
													
													


													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	
														
														?>    
						
							<li>
								<input <?php if (in_array($verimiz,$gelenfiltreleme)){echo "checked";}; ?> type="checkbox" name="filtreleme[]" value="<?php echo $verimiz;?>" id="manufacturer_2<?php echo $verimiz;?>">
								<label for="manufacturer_2<?php echo $verimiz;?>"><?php echo $verimiz;?></label>
							</li>
							
  <?php } ?>

						</ul>

					</fieldset>

				</div><!--/ .table_cell -->
				<!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->
  <?php } ?>	
					





	<!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
				<div class="table_cell">
					<fieldset>
						<legend>Markalar</legend>
						<ul class="checkboxes_list">
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
													     
						
						
							<li>
								<input <?php if (in_array($markaidmmmm,$markafiltreleme)){echo "checked";}; ?> type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" id="markalar_2<?php echo $marka['id']; ?>">
								<label for="markalar_2<?php echo $marka['id']; ?>"><?php echo $marka['adi']; ?></label>
							</li>
							
 	  <?php } ?>	



						</ul>

					</fieldset>

				</div><!--/ .table_cell -->
				
			</div><!--/ .table_row -->
			<footer class="bottom_box">
				<div class="buttons_row">
					<button type="submit" class="button_grey button_submit">Filtrele</button>
					<a href="kategori/<?php echo $page['seo'];?>" class="button_grey filter_reset">Temizle</a>
				</div>
			        <!--Back To Top-->
        <div class="back-to-top hidden-top"><i class="fa fa-angle-up"></i></div>
    </footer>
		</div><!--/ .table_layout -->

		

	</form>
   </div>
   
</div>


			</aside>
			
        	<!--Middle Part Start-->
        	<div id="content" class="col-md-9 col-sm-8">
        		<div class="products-category">
                    <h3 class="title-category "><?php echo $page['adi'];?></h3>
					<?php if($page['resim']=='resimyok.jpg'){?>
					<?php } else { ?>
        			<div class="category-desc">
        				<div class="row">
        					<div class="col-sm-12">
        						<div class="banners">
        							<div>
        								
										<img src="resimler/kategoriler/<?php echo $page['resim']?>" alt="img cate"><br>
        							</div>
        						</div>
        					
        					</div>
        				</div>
        			</div>
					 <?php } ?>
					
					
        			<!-- Filters -->
                    <div class="product-filter product-filter-top filters-panel">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12 view-mode">
                              
                                    <div class="list-view">
								     <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                        <button style="margin-right: 10px;" class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                   	
									
                        <div class="text-block-138"><strong style="color: #ff0000;font-weight: 500;"><?php echo $page['adi'];?></strong> kategorisinde toplam <strong style="font-weight: 500;color: #ff0000"><?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..</div>
								  
								  </div>
                        
                            </div>
                            <div class="short-by-show form-inline text-right col-md-4 col-sm-6 col-xs-12">
                           <form  action="" method="GET">
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
									
								
								
								<div class="form-group short-by">
                                    <label class="control-label" for="input-sort">Sıralama:</label>
                                  <select name="siralama" class="form-control" onchange='this.form.submit()'>
                            	             <option selected <?php echo $_GET['siralama'] == 'onerilen' ? 'selected="selected"' : null; ?> value="onerilen">Akıllı Sıralama</option>

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
                    <!-- //end Filters -->

        			<!--changed listings-->
                    <div class="products-list row nopadding-xs so-filter-gird grid">
            	
				
				
				 <?php 
							 $pages = intval(@$_GET['pages']);

										if (!$pages) {

											$pages = 1;

										}
										$bak = $ozy->prepare("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori)");

										$bak->execute(array());

										$toplam= $bak->rowCount();

										$limit = 25;

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
				
				
				
        				<div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block left-b">
                                    
                                      <div class="product-image-container second_img">
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>">
                                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                     </div>
                                    <!--quickview--> 
                                       <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" 
												  href="urun/<?php echo $katurunler['seo']; ?>"><i class="fa fa-eye"></i><span>Sepete Ekle</span></a>
                                                </div>                                                        
                                    <!--end quickview-->

                                    
                                </div>
                                <div class="right-block">
                                          <div class="button-group so-quickview cartinfo--left">
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="addToCart">
                                                        <span>Sepete Ekle</span>   
                                                    </a>
                                                    <button  onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'" type="button" class="wishlist btn-button" title="Favorilerine Ekle"><i class="fa fa-heart-o"></i><span>Favorilerine Ekle</span>
                                                    </button>
                                                    <button  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'" type="button" class="compare btn-button" title="Karşılaştır"><i class="fa fa-retweet"></i><span>Karşılaştır</span>
                                                    </button>
                                                    
                                                </div>
                                    <div class="caption hide-cont">
                                        <div class="ratings">
                                            <div class="rating-box">  
													<?php echo $katurunler['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>			
											<?php echo $katurunler['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>' : null; ?>
												
											
											</div>
                                         
									<span class="rating-num">( <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum )</span>
                                                   
											
										
                                        </div>
                                          <h4><a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                                                    
                                    </div>
                                     <p class="price">
                                                   <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                     </p>
                                    <div class="description item-desc hidden">
                                        <p> <?php echo strip_tags(mb_substr($katurunler['aciklama'],0,150));?>...</p>
                                    </div>
                                    <div class="list-block hidden">
                                        <button class="addToCart btn-button" type="button" onclick="javascript:location.href='urun/<?php echo $katurunler['seo']; ?>'"><i class="fa fa-shopping-basket"></i>
                                        </button>
                                        <button class="wishlist btn-button" type="button" onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'"><i class="fa fa-heart"></i>
                                        </button>
                                        <button class="compare btn-button" type="button"  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'"><i class="fa fa-refresh"></i>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="urun/<?php echo $katurunler['seo']; ?>"><i class="fa fa-eye"></i></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>

                            </div>
                        </div>




<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center" style="padding: 40px;font-weight: 500;">
	
	
		<div class="notfound_content">
			<div class="title fs-5">Aradığın özellikte ürüne maalesef ulaşılmıyor.</div>
			<div class="text fs-5 fw-bold mt-1"><a href="kategori/<?php echo $page['seo'];?>">Tekrar denemek ister misin ?</a></div>
		</div>
	</div>													








													<?php }

													?>		
							





                    </div>
        			<!--// End Changed listings-->
        			<!-- Filters -->
        			<div class="product-filter product-filter-bottom filters-panel">
                        <div class="row">
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
        			<!-- //end Filters -->
        			
        		</div>
        		
        	</div>
        	

        	<!--Middle Part End-->
        </div>
    </div>
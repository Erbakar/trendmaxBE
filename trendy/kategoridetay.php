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




	  

		   <main class="main">
		   
         

            <nav aria-label="breadcrumb" class="breadcrumb-nav">

                <div class="container">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="anasayfa">Anasayfa</a></li>


<?php if($page['level']=='2'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<li class="breadcrumb-item"><a href="kategori/<?php echo $ustu2['seo'];?>"><?php echo $ustu2['adi'];?></a></li>
<li class="breadcrumb-item"><a href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a></li>
<?php } ?>

<?php if($page['level']=='1'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<li class="breadcrumb-item"><a href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a></li>
<?php } ?>




                        <li class="breadcrumb-item active" aria-current="page"><?php echo $page['adi'];?></li>

                    </ol>

                </div><!-- End .container -->

            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">

                <div class="container">

                	<div class="row">
					
					
                		<aside class="col-lg-3 order-lg-first">

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

								

							<div class="sidebar sidebar-shop"  style="background: white;">

                			
								

									<div class="widget widget-collapsible" style="border: 1px solid #f7d1c2;padding: 10px">

    								<h3 class="widget-title">

									    <a data-toggle="collapse" href="#widget-2Fiyat" role="button" aria-expanded="true" aria-controls="widget-2">

									        Fiyat Aralığı

									    </a>

									</h3><!-- End .widget-title -->



									<div class="collapse show" id="widget-2Fiyat">

										<div class="widget-body">

											<div class="filter-items">

												<?php $bolumfiyat=intval($maxfiyat/5);

												

												for($i=0;$i<5;$i++){

													$basfiyat=intval($minfiyat+$i*$bolumfiyat);

													$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);

												?>

												<div class="filter-item">

													<div class="custom-control custom-checkbox">

														<input <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" class="custom-control-input" id="size-1<?php echo $i;?>" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>">

														<label class="custom-control-label" for="size-1<?php echo $i;?>"><?php echo $basfiyat." - ".$sonfiyat;?> TL</label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->

												<?php } ?>

											</div><!-- End .filter-items -->

										</div><!-- End .widget-body -->

									</div><!-- End .collapse -->

        						</div><!-- End .widget -->



								

								

								

								

                            <?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

                            foreach($filtre as $filtregel){?>

         

        						<div class="widget widget-collapsible" style="border: 1px solid #f7d1c2;padding: 10px">

    								<h3 class="widget-title">

									    <a data-toggle="collapse" href="#widget-2<?php echo $filtregel['fid']; ?>" role="button" aria-expanded="true" aria-controls="widget-2">

									        <?php echo $filtregel['fadi']; ?>

									    </a>

									</h3><!-- End .widget-title -->



									<div class="collapse show" id="widget-2<?php echo $filtregel['fid']; ?>">

										<div class="widget-body">

											<div class="filter-items">

											    <?php

												$katoz= $filtregel['ozellik'];

												$katozel = explode(',', $katoz);

												foreach( $katozel as $katozellik => $verimiz ){?>

											

												<div class="filter-item">

													<div class="custom-control custom-checkbox">

														<input type="checkbox" class="custom-control-input" id="size-1<?php echo $verimiz;?>" name="filtreleme[]" value="<?php echo $verimiz;?>">

														<label class="custom-control-label" for="size-1<?php echo $verimiz;?>"><?php echo $verimiz;?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->

												<?php } ?>

												

												



												

											</div><!-- End .filter-items -->

										</div><!-- End .widget-body -->

									</div><!-- End .collapse -->

        						</div><!-- End .widget -->



                            <?php } ?>

















        						<div class="widget widget-collapsible" style="max-height: 500px;overflow: auto;border: 1px solid #f7d1c2;padding: 10px">

    								<h3 class="widget-title">

									    <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">

									        Markalar

									    </a>

									</h3><!-- End .widget-title -->



									<div class="collapse show" id="widget-4">

										<div class="widget-body">

											<div class="filter-items">

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

														<input <?php if (in_array($markaidmmmm,$markafiltreleme)){echo "checked";}; ?> type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" class="custom-control-input" id="brand-1<?php echo $marka['id']; ?>">

														<label class="custom-control-label" for="brand-1<?php echo $marka['id']; ?>"><?php echo $marka['adi']; ?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->



                                    <?php } ?>



											</div><!-- End .filter-items -->

										</div><!-- End .widget-body -->

									</div><!-- End .collapse -->

        						</div><!-- End .widget -->



        					<div class="col-12 col-lg-12 col-xl-2" style="padding: 0px;">

	                		<div class="btn-wrap">

		                	
                				

		                		<button type="submit" class="butonok btn btn-primary btn-rounded">Filteyi Uygula</a>
	

                			
		                	</div><!-- End .btn-wrap -->
							<a href="kategori/<?php echo $page['seo']; ?>" style="background: #3b3939;" class="butonok btn btn-primary btn-rounded">Filtreyi Temizle</a>

		                </div>

                			</div><!-- End .sidebar sidebar-shop -->

							</form>

                		</aside><!-- End .col-lg-3 -->

						
					
					
					
					
					
					
					

                		<div class="col-lg-9">

                			<div class="toolbox">
	                         <div class="col-lg-5">
								<div class="toolbox-left">

                					<div class="toolbox-sort">

                						<label for="sortby">Ürün Sıralama:</label>

                						<div class="select-custom">

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

                					</div><!-- End .toolbox-sort -->

                				

                				</div><!-- End .toolbox-right -->
                                 </div><!-- End .toolbox-right -->
							

							
                               <div class="col-lg-7">
                				<div class="toolbox-right">

                					<div class="toolbox-info">

                						 <span>	

										 Bu kategoride toplam <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

                                         $katsorgu->execute();

                                         $katsay = $katsorgu->fetchColumn();

                                         echo ''.$katsay.''; ?> adet ürün bulunmaktadır.</span> 

                					</div><!-- End .toolbox-info -->

                				</div><!-- End .toolbox-left -->
                           </div><!-- End .toolbox-left -->


                			

                			</div><!-- End .toolbox -->



                            <div class="products mb-3">

                                <div class="row justify-content-center">

								

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
															

								

								
  <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			 <?php if($katurunler['stok']=='0'){?>
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi2.png'>
			 </div>	
			 <?php } ?>
			 
			 
			 <?php 
			 $sayfaidm = $katurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $katurunler['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $katurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $katurunler['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $katurunler['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $katurunler['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($katurunler['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $katurunler['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
								 
                                    
                                   

                                    

							<?php }

							

                            if (!$__URUN__){

								

                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Üzgünüm Böyle bir ürün bulunamadı</b>";

							

							}

							?>				

									

									

									

									

									

									

									

                                </div><!-- End .row -->

                            </div><!-- End .products -->





                			<nav aria-label="Page navigation">

                        <ul class="pagination justify-content-center">

			

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

                    </nav>

                		</div><!-- End .col-lg-9 -->

						


                	</div><!-- End .row -->

                </div><!-- End .container -->

            </div>

        <style>
		.widget .widget-title {
    display: table;
    text-align: center !important;
    margin-bottom: 10px;
    border-bottom: 1px solid;
    font-size: 16px;
}
		</style>

        </main>
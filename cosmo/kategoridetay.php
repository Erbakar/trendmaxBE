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
	

      <section class="py-5 products-listing bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="filters mobile-filters shadow-sm rounded bg-white mb-4 d-none d-block d-md-none">
                     <div class="border-bottom">
                        <a class="h6 font-weight-bold text-dark d-block m-0 p-3" data-toggle="collapse" href="#mobile-filters" role="button" aria-expanded="false" aria-controls="mobile-filters">Filtreleme <i class="icofont-arrow-down float-right mt-1"></i></a>
                     </div>
                     <div id="mobile-filters" class="filters-body collapse multi-collapse">
                        <div id="accordion">
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
						
                           <div class="filters-card border-bottom p-3">
                              <div class="filters-card-header" id="headingOffer">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseSort" aria-expanded="true" aria-controls="collapseSort">
                                    Fiyat Aralığı <i class="icofont-arrow-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapseSort" class="collapse" aria-labelledby="headingOffer" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                    <?php $bolumfiyat=intval($maxfiyat/6);
		for($i=0;$i<6;$i++){
		$basfiyat=intval($minfiyat+$i*$bolumfiyat);
		$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);
		?>
									
									<div class="custom-control custom-checkbox">
                                       <input <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" class="custom-control-input" id="osahan111<?php echo $basfiyat."-".$sonfiyat;?>" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>" onchange='this.form.submit()'>
                                       <label class="custom-control-label" for="osahan111<?php echo $basfiyat."-".$sonfiyat;?>"><?php echo $basfiyat;?> TL - <?php echo $sonfiyat;?> TL </label>
                                    </div>
                           <?php } ?>
					          
                                   
                                 </div>
                              </div>
                           </div>
						   
						  	<?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

	foreach($filtre as $filtregel){?> 
                           <div class="filters-card border-bottom p-3">
                              <div class="filters-card-header" id="headingTwo<?php echo $filtregel['fid']; ?>">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapsetwo<?php echo $filtregel['fid']; ?>" aria-expanded="true" aria-controls="collapsetwo<?php echo $filtregel['fid']; ?>">
                                    <?php echo $filtregel['fadi']; ?>
                                    <i class="icofont-arrow-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapsetwo<?php echo $filtregel['fid']; ?>" class="collapse" aria-labelledby="headingTwo<?php echo $filtregel['fid']; ?>" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                 <?php
													
													


													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	
														
														?>     
                                    <div class="custom-control custom-checkbox">
                                       <input <?php if (in_array($verimiz,$gelenfiltreleme)){echo "checked";}; ?> type="checkbox" name="filtreleme[]" value="<?php echo $verimiz;?>" class="custom-control-input" id="osahan116<?php echo $verimiz;?>">
                                       <label class="custom-control-label" for="osahan116<?php echo $verimiz;?>"><?php echo $verimiz;?> </label>
                                    </div>
                                    <?php } ?> 
                                   
                                 </div>
                              </div>
                           </div>
						   
                       
					   
					     <?php } ?>	
					
					   
					    <div class="filters-card border-bottom p-3">
                              <div class="filters-card-header" id="headingTwo">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                   Markalar
                                    <i class="icofont-arrow-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapsetwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                  
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
													     
						 
                                    <div class="custom-control custom-checkbox">
                                       <input <?php if (in_array($markaidmmmm,$markafiltreleme)){echo "checked";}; ?> type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" class="custom-control-input" id="osahan1122<?php echo $marka['id']; ?>">
                                       <label class="custom-control-label" for="osahan1122<?php echo $marka['id']; ?>"> <?php echo $marka['adi']; ?></label>
                                    </div>
                                    
									
									  <?php } ?>
									
                                   
                                 </div>
                              </div>
                           </div>
						   
                       <div class="buttons_row">
					<button type="submit" style="width: 100%;
padding: 10px;
margin-bottom: 2px;margin-top:2px;background: <?php echo $tema['t37'];?>;
color: white;" class="btn btn-sm btn-default">Filtrele</button>
					<a style="width: 100%;background:black;color:white;height: 42px;
line-height: 35px;" href="kategori/<?php echo $page['seo'];?>" class="btn btn-sm btn-default">Temizle</a>
				</div>
					   
					   
					   
					   
					   
					   </form>
					   
                        </div>
                     </div>
                  </div>
                  <div class="filters shadow-sm rounded bg-white mb-3 d-none d-sm-none d-md-block">
                     <div class="filters-header border-bottom pl-4 pr-4 pt-3 pb-3">
                        <h5 class="m-0 text-dark">Filtreleme</h5>
                     </div>
                     <div class="filters-body" style="background: white;">
                        <div id="accordion">
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
						
                           <div class="filters-card border-bottom p-3">
                              <div class="filters-card-header" id="headingOffer">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseSort" aria-expanded="true" aria-controls="collapseSort">
                                    Fiyat Aralığı <i class="icofont-arrow-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapseSort" class="collapse show" aria-labelledby="headingOffer" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                    <?php $bolumfiyat=intval($maxfiyat/6);
		for($i=0;$i<6;$i++){
		$basfiyat=intval($minfiyat+$i*$bolumfiyat);
		$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);
		?>
									
									<div class="custom-control custom-checkbox">
                                       <input <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" class="custom-control-input" id="osahan111<?php echo $basfiyat."-".$sonfiyat;?>" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>" onchange='this.form.submit()'>
                                       <label class="custom-control-label" for="osahan111<?php echo $basfiyat."-".$sonfiyat;?>"><?php echo $basfiyat;?> TL - <?php echo $sonfiyat;?> TL </label>
                                    </div>
                           <?php } ?>
					          
                                   
                                 </div>
                              </div>
                           </div>
						   
						  	<?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

	foreach($filtre as $filtregel){?> 
                           <div class="filters-card border-bottom p-3">
                              <div class="filters-card-header" id="headingTwo<?php echo $filtregel['fid']; ?>">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapsetwo<?php echo $filtregel['fid']; ?>" aria-expanded="true" aria-controls="collapsetwo<?php echo $filtregel['fid']; ?>">
                                    <?php echo $filtregel['fadi']; ?>
                                    <i class="icofont-arrow-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapsetwo<?php echo $filtregel['fid']; ?>" class="collapse show" aria-labelledby="headingTwo<?php echo $filtregel['fid']; ?>" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                 <?php
													
													


													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	
														
														?>     
                                    <div class="custom-control custom-checkbox">
                                       <input <?php if (in_array($verimiz,$gelenfiltreleme)){echo "checked";}; ?> type="checkbox" name="filtreleme[]" value="<?php echo $verimiz;?>" class="custom-control-input" id="osahan116<?php echo $verimiz;?>">
                                       <label class="custom-control-label" for="osahan116<?php echo $verimiz;?>"><?php echo $verimiz;?> </label>
                                    </div>
                                    <?php } ?> 
                                   
                                 </div>
                              </div>
                           </div>
						   
                       
					   
					     <?php } ?>	
					
					   
					    <div class="filters-card border-bottom p-3">
                              <div class="filters-card-header" id="headingTwo">
                                 <h6 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                   Markalar
                                    <i class="icofont-arrow-down float-right"></i>
                                    </a>
                                 </h6>
                              </div>
                              <div id="collapsetwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                 <div class="filters-card-body card-shop-filters">
                                  
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
													     
						 
                                    <div class="custom-control custom-checkbox">
                                       <input <?php if (in_array($markaidmmmm,$markafiltreleme)){echo "checked";}; ?> type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" class="custom-control-input" id="osahan1122<?php echo $marka['id']; ?>">
                                       <label class="custom-control-label" for="osahan1122<?php echo $marka['id']; ?>"> <?php echo $marka['adi']; ?></label>
                                    </div>
                                    
									
									  <?php } ?>
									
                                   
                                 </div>
                              </div>
                           </div>
						   
                       <div class="buttons_row">
					<button type="submit" style="width: 100%;
padding: 10px;
margin-bottom: 2px;margin-top:2px;background: <?php echo $tema['t37'];?>;
color: white;" class="btn btn-sm btn-default">Filtrele</button>
					<a style="width: 100%;background:black;color:white;height: 42px;
line-height: 35px;" href="kategori/<?php echo $page['seo'];?>" class="btn btn-sm btn-default">Temizle</a>
				</div>
					   
					   
					   
					   
					   
					   </form>
                        </div>
                     </div>
                  </div>
				</div>
               <div class="col-md-9">
                  <div class="shop-head mb-3">
                     <div class="btn-group float-right mt-2 d-none d-sm-none d-md-block">
                       <form  action="" method="GET" style="margin-bottom: 0px;">
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
									
								 
					   
                            <select id="sort-by-select"  name="siralama" onchange='this.form.submit()' class="sort btn btn-default without-styles">
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
                     <h5 class="mb-1 text-dark"><?php echo $page['adi']; ?></h5>
                     <a href="<?php echo $url;?>"><span class="icofont icofont-ui-home"></span> Anasayfa</a>
<?php if($page['level']=='2'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<span class="icofont icofont-thin-right"></span><a href="kategori/<?php echo $ustu2['seo'];?>"><?php echo $ustu2['adi'];?></a>
<span class="icofont icofont-thin-right"></span><a href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a>
<?php } ?>
<?php if($page['level']=='1'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<span class="icofont icofont-thin-right"></span><a href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a>
<?php } ?>
			
					 <span class="icofont icofont-thin-right"></span> 
					 <span><?php echo $page['adi']; ?></span>
					 
                  </div>
                  <div class="row">
				  
				  
				  
				  
				  
				  <?php 
							 
						
							 
							 $pages = intval(@$_GET['pages']);

										if (!$pages) {

											$pages = 1;

										}
										$bak = $ozy->prepare("select * from urunler where durum='1' and FIND_IN_SET($katid,kategori)");

										$bak->execute(array());

										$toplam= $bak->rowCount();

										$limit = 36;

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
											
											$__URUN__ = true;?>

											

								
				  
				  
                     <div class="col-6 col-md-4">
                        <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                           <span class="like-icon">
						   <a href="?favoriekle=<?php echo $katurunler['id']; ?>"> <i class="icofont icofont-heart"></i></a></span>
                           <a href="urun/<?php echo $katurunler['seo']; ?>">
                    <?php if($katurunler['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></span>
					<?php } ?> 	
                            <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="card-img-top urunresim" alt="<?php echo $pop['adi']; ?>"></a>
					 
                           <div class="card-body">
                              <h6 class="card-title mb-1"><?php echo $katurunler['adi']; ?></h6>
                              
							  
							   <div class="stars-rating">
					 
					  <?php echo $katurunler['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $katurunler['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   
						  
						   

						   <span>
						              <?php 
								      $sayfaid = $katurunler['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> 
						   </span>
                     </div>
                             <p class="mb-0 text-dark" style="  font-size: 15px;
  font-weight: 500;">
					
  					 <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>

					 
					 </p>
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
				  
				  <nav aria-label="Page navigation">

                        <ul class="pagination justify-content-center">

			

				  <?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo "<li style='background: ".$tema['t37'].";
padding: 8px;
color: white;' class='page-item active' aria-current='page'><a>".$i."</a></li>";

                                      

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

				  
				  
				  
               </div>
			   
			   
			   
            </div>
         </div>
         
      </section>
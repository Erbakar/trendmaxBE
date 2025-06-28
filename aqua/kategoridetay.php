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



 
   <section class="cover pt-5 pb-5">
        <div class="container-lg">
            <h1><?php echo $page['adi'];?></h1>
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Ana Sayfa</a></li>
                   
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
					
					
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $page['adi']; ?></li>
                </ol>
            </nav>
        </div>
    </section>
	
	
	
	 <section class="page category">
        <div class="container-lg">
            <div class="row">
			
			
			
                <div class="col-lg-2 mb-0 sbr">
                    <div class="pt-4 pb-4">
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
                        <div class="kategori-box-durum">
                          
                            <div class="content-kategori" id="menucontentleft1open">

                                <div class="div-block-4461292342" style="height:auto">
                                <div data-w-id="7ca51662-fc7f-9641-58ff-a459ef548868" class="dropdown-trigger-kat w-clearfix" id="menucontentleft5">
                                <a href="javascript:;" class="link-7">Fiyat Aralığı</a><img src="/images/down-arrow.png" loading="lazy" alt="" class="image-106" width="16">
                            </div>
                            <div class="content-kategori" id="menucontentleft5open">
                                <div style="display: inline-flex; width: 100%;">

                                    <div class="w-col w-col-12">
                                        <div>
							
										
										
		<?php $bolumfiyat=intval($maxfiyat/6);
		for($i=0;$i<6;$i++){
		$basfiyat=intval($minfiyat+$i*$bolumfiyat);
		$sonfiyat=intval($minfiyat+($i+1)*$bolumfiyat);
		?>
											
		<label>
            <input <?php echo $_GET['fiyatfiltre'] == $basfiyat."-".$sonfiyat ? 'checked' : null; ?> type="radio" name="fiyatfiltre" value="<?php echo $basfiyat."-".$sonfiyat;?>" onchange='this.form.submit()'>
            <span><?php echo $basfiyat;?> TL - <?php echo $sonfiyat;?> TL</span>
        </label>
      
       <?php } ?>
	 
										
                                    
													
												
                                        </div>
                                    </div>
                                

                                </div>
                            </div>
                                </div>
                            </div>
                        </div>



	<?php $filtre = $ozy->query("select * from filtre where FIND_IN_SET($katid,kategori) order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 

										foreach($filtre as $filtregel){?>
				  


                        <div class="kategori-box-durum">
                            <div data-w-id="ae143abe-97db-3644-3d02-5926c81887e0" class="dropdown-trigger-kat w-clearfix" id="menucontentleft3">
                                <a href="#" class="link-7"><?php echo $filtregel['fadi']; ?></a>
                            </div>
                            <div class="content-kategori" id="menucontentleft3open">

                                   <div style="display: inline-flex; width: 100%;">

                                    <div class="w-col w-col-12">
         					<?php
													
													


													$katoz= $filtregel['ozellik'];
													$katozel = explode(',', $katoz);
													foreach( $katozel as $katozellik => $verimiz ){
													if (isset($_GET["filtreleme"]) && $_GET["filtreleme"] != "") {	
													$gelenfiltreleme = $_GET['filtreleme'];
                                                   
													}	
														
														?>                              
	<p>
    <input <?php if (in_array($verimiz,$gelenfiltreleme)){echo "checked";}; ?> type="checkbox" name="filtreleme[]" value="<?php echo $verimiz;?>" id="<?php echo $verimiz;?>1" />
    <label for="<?php echo $verimiz;?>1"><?php echo $verimiz;?></label>
   </p>
									
   	  <?php } ?>	                                    
                                    </div>
                                

                                </div>
                                                                                
                                 
                            </div>
                        </div>

                    
					
						  <?php } ?>	
					
					
					    <div class="kategori-box-durum">
                            <div data-w-id="ae143abe-97db-3644-3d02-5926c81887e0" class="dropdown-trigger-kat w-clearfix" id="menucontentleft3">
                                <a style="" class="link-7">Markalar</a>
                            </div>
                            <div class="content-kategori" id="menucontentleft3open">

                                   <div style="display: inline-flex; width: 100%;">

                                    <div class="w-col w-col-12">
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
													                            
	<p>
    <input 	<?php if (in_array($markaidmmmm,$markafiltreleme)){echo "checked";}; ?> type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" id="Markalar-<?php echo $marka['id']; ?>" />
    <label for="Markalar-<?php echo $marka['id']; ?>"><?php echo $marka['adi']; ?></label>
   </p>
									
   	  <?php } ?>							
   	                                    
                                    </div>
                                

                                </div>
                                                                                
                                 
                            </div>
                        </div>
					
					
					
					
					
					    <div class="kategori-box-durum">
                            <div data-w-id="ae143abe-97db-3644-3d02-5926c81887e0" class="dropdown-trigger-kat w-clearfix" id="menucontentleft3">
                               <input style="height: 40px;
line-height: 0px;
text-align: center;" type="submit" value="Filtrele" class="gonderbuton">
                            

			<a href="kategori/<?php echo $page['seo'];?>" class="tagdelete"> Temizle</a>
							</div>
                           
                        </div>
					
					
					
<style>
label {
display: inline-block;
font-size: 15px !important;
margin-top: 10px !important;
font-weight: 500 !important;
border-radius: 14px;
padding: 5px 5px 0px 0px;
text-align: left;
color: #8d94a6;
transition: all 0.3s;
}


</style>			
					
					

                   
					</form>
                    </div>
                </div>
				
				
				
                <div class="col-lg-10 mb-0">
                    <div class="pt-4 pb-4">
                        <div class="d-flex align-items-center justify-content-between filterbottom pb-4 mb-4">
                            <div class="scrolllr">
                                <div class="">
                                 <strong style="color: #ff0000;font-weight: 500;"><?php echo $page['adi'];?></strong> kategorisinde toplam <strong style="font-weight: 500;color: #ff0000">  <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..
								 </div>
                            </div>
                            <div class="r">
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
									
                                            <select name="siralama" class="form-select selectorder" onchange='this.form.submit()'>
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

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 productlist">
                                                          

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
											
											$__URUN__ = true;

											

											?>	
				
				

   <div class="col">
                            <div class="item">
                                <div class="img">
                                <span class="d-flex bdgs">
								    <?php if($katurunler['ucretsizkargo']=='1'){?>
                                    <span class="bdg green">Ücretsiz Kargo!</span>
									<?php } ?> 
									<?php if($katurunler['idurum']=='1'){?>
                                    <span class="bdg orange">%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?> İndirimli</span>    
                                    <?php } ?> 
									</span>
                                    <a href="urun/<?php echo $katurunler['seo']; ?>">
                                        <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" width="238" height="175" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <a href="urun/<?php echo $katurunler['seo']; ?>" class="title"><h3><?php echo $katurunler['adi']; ?></h3></a>
                                <div class="pb">
                                    <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="addcart">SEPETE EKLE</a>
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

                        <div class="text-center d-flex align-items-center justify-content-center mt-4">
                            <nav class="pagination" aria-label="Page navigation example">
                                <ul class="pagination">
                              


		
				<?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo " <li class='page-item'><a class='page-link active'>".$i."</a></li>";

                                      

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
            </div>
        </div>
    </section>
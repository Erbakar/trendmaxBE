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



<div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
<?php if($page['level']=='2'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<a  class="link-12" href="kategori/<?php echo $ustu2['seo'];?>"><?php echo $ustu2['adi'];?></a><i class="fa fa-angle-right" aria-hidden="true"></i>
<a  class="link-12" href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a><i class="fa fa-angle-right" aria-hidden="true"></i>
<?php } ?>

<?php if($page['level']=='1'){?>
<?php $ustkat1 = $page['ustkat'];
$ustu = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat1'")->fetch(PDO::FETCH_ASSOC);
$ustkat2 = $ustu['ustkat'];
$ustu2 = $ozy->query("select * from kategoriler where durum='1' and id='$ustkat2'")->fetch(PDO::FETCH_ASSOC);?>
<a  class="link-12" href="kategori/<?php echo $ustu['seo'];?>"><?php echo $ustu['adi'];?></a><i class="fa fa-angle-right" aria-hidden="true"></i>
<?php } ?>
			   
			   <a href="kategori/<?php echo $page['seo']; ?>" class="link-12"><?php echo $page['adi']; ?></a>
				
			  
			   
            </div>
        </div>
		


 
		
		
		
		
		
		
		
        <div class="div-block-4461292330">
            <div class="w-row">
			
			
			
			
			
			
			         <div class="column-190 w-col w-col-3 webgoster">
                    <div class="div-block-4461292332">
					
					
					
                        <div class="div-block-4461292339">
                            <a href="kategori/<?php echo $page['seo'];?>" class="text-d"><h4 class="heading-50"><?php echo $page['adi'];?></h4></a>
                        </div>
				<?php if($page['level']=='0'){?>		
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='$katid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
                        <div class="kategori-box">
                            <div data-w-id="9be551c0-cc56-4bdb-b3e8-88503c9ef7bc" class="dropdown-trigger-kat w-clearfix">
                                <a href="kategori/<?php echo $katadi['seo']; ?>" class="link-7" style=""><?php echo $katadi['adi']; ?></a>
                            </div>
                            
                            
							
							
							<div class="content-kategori-close"> 
							
							<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	 
                                <a href="kategori/<?php echo $katadi2['seo']; ?>" class="link-9" style=""><?php echo $katadi2['adi']; ?></a>
                              <?php } ?>	  
                                 
                            </div>
							
							
							
							
                        </div>
						
						
				<?php }} ?>	
							  
						<?php if($page['level']=='1'){?>		
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='$katid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
                        <div class="kategori-box">
                            <div data-w-id="9be551c0-cc56-4bdb-b3e8-88503c9ef7bc" class="dropdown-trigger-kat w-clearfix">
                                <a href="kategori/<?php echo $katadi['seo']; ?>" class="link-7" style=""><?php echo $katadi['adi']; ?></a>
                            </div>
                            
                            
							
							
						
							
							
							
							
                        </div>
						
						
						   <?php }} ?>	
						
						
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
                                <a href="#" class="link-7">Markalar</a>
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
                               <input style="width: 100% !important;" type="submit" value="Filtrele" class="search-button-2 w-button">
                            
<a class="newlink" href="kategori/<?php echo $page['seo'];?>" class="btn btn-primary w-100">Temizle</a>
			
							</div>
                           
                        </div>
					
					
					
					
					
					

                    </div>
					</form>
                </div>
			
			
			
			
			
			
			
			
			
			
			
			
                <div class="column-190 w-col w-col-3 dropdown-content" id="myDropdown">
                    <div class="div-block-4461292332">
			
						
						
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
                                <a href="#" class="link-7">Markalar</a>
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
                               <input style="width: 100% !important;" type="submit" value="Filtrele" class="search-button-2 w-button">
                            
<a class="newlink" href="kategori/<?php echo $page['seo'];?>" class="btn btn-primary w-100">Temizle</a>
			
							</div>
                           
                        </div>
					
					
					
					
					
					

                    </div>
					</form>
                </div>
				
                <div class="column-188 w-col w-col-9">
                    
                    <div class="div-block-4461292333" style="margin-top:0">
                        <div class="columns-38 w-row">
                            <div class="column-191 w-col w-col-8 w-col-tiny-tiny-stack">
                                <div>
                                    <div class="text-block-138"><strong style="color: #ff0000"><?php echo $page['adi'];?></strong> kategorisinde <strong style="color: #ff0000"><?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..</div>
                                </div>
                            </div>
                            <div class="w-clearfix w-col w-col-4 w-col-tiny-tiny-stack">
                                <div class="div-block-4461292336">
                                    <div class="form-block w-forms">
									


									
									
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
									
                                            <select name="siralama" class="select-field w-select" onchange='this.form.submit()'>
                            	             <option selected <?php echo $_GET['siralama'] == 'onerilen' ? 'selected="selected"' : null; ?> value="onerilen">Akıllı Sıralama</option>

											<option <?php echo $_GET['siralama'] == 'dusukfiyat' ? 'selected="selected"' : null; ?> value="dusukfiyat">Önce En Düşük Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'yuksekfiyat' ? 'selected="selected"' : null; ?> value="yuksekfiyat">Önce En Yüksek Fiyat</option>

											<option <?php echo $_GET['siralama'] == 'encokyorum' ? 'selected="selected"' : null; ?> value="encokyorum">En Çok Yorum Alan</option>

											<option <?php echo $_GET['siralama'] == 'enbegenilen' ? 'selected="selected"' : null; ?> value="enbegenilen">En Çok Beğenilen</option>

											<option <?php echo $_GET['siralama'] == 'eskitarih' ? 'selected="selected"' : null; ?> value="eskitarih">En Eski Tarihe Göre</option>

											<option <?php echo $_GET['siralama'] == 'yenitarih' ? 'selected="selected"' : null; ?> value="yenitarih">En Yeni Tariha Göre</option>

                                            </select>
                                        </form>
 <button style="width: 100%;margin-top: 10px;height: 38px;line-height: 13px;text-align: left;padding: 10px;font-size: 14px;background: <?php echo $tema['t37'];?>;" onclick="myFunction()" class="search-button-2 w-button dropbtn mobilgoster">Ürün Filtreleme</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-block-4461292334">
                        <div class="columns-37 w-row">
                            
							
							
							
							
							
                           
                            
							
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
							
							
							
							 <div class="w-col w-col-3 w-col-medium-6 w-col-small-6 w-col-tiny-6 urunboy">
                                
                                <div class="div-block-box-kategori-01">
                                        <a href="urun/<?php echo $katurunler['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" loading="lazy"  alt="<?php echo $katurunler['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $katurunler['adi']; ?></div>
                  <div>
                   
					  
					   <div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($katurunler['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
					  
					  
					  
					  
					  
					  
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                               <a href="?karsilastir=<?php echo $katurunler['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favoriekle=<?php echo $katurunler['id']; ?>"  data-tooltip="Favorime Ekle" class="favoripasif w-inline-block"></a>
                                                        
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($katurunler['stok']>='1'){?>
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                                <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
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


                        

                        <div class="block">
                            <div class="w-col w-col-12">
                                <div class="div-block-sayfa-sayilari">

                                    
                                    <a  class="button-18-sol-ok2 w-button"></a>
                                    <a  class="button-18-sol-ok w-button"></a>
									
									
																<?php

															for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

																if ($i>0 and $i<=$sayfasayisi) {

																	

																	if ($i == $pages) {

																		

																		echo "<a class='button-18-aktif w-button'>".$i."</a></li>";

																		

																	}else{

																		

																		$eklenecekstr="";

																		foreach($_GET as $key=>$value) {

																			if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=".$value;

																		}

																		$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

																		

																		echo "<a class='button-18-aktif w-button' href='kategori/".$page['seo']."?pages=".$i.$eklenecekstr."'>".$i."</a></li>";

																		

																	}



																}

															}

															

															

															

															

															?> 

									
									
									
									
									
									
									
									
									
									<a  class="button-18-sag-ok w-button"></a>
                                    
									
									<a class="button-18-sag-ok2 w-button"></a>
                                    
                                </div>
                            </div>

                        </div>

                        <div class="c20"></div>


                    </div>

                </div>
            </div>
        </div>
    </div>
		  
<style>
label {
    display: flex;
    cursor: pointer;
    font-weight: 500;
    position: relative;
    overflow: hidden;
    margin-bottom: 0.375em;
    /* Accessible outline */
    /* Remove comment to use */
    /*
  	&:focus-within {
  			outline: .125em solid $primary-color;
  	}
  */
}

label input {
    position: absolute;
    left: -9999px;
}

label input:checked+span {
    background-color: #d6d6e5;
}

label input:checked+span:before {
    box-shadow: inset 0 0 0 0.4375em <?php echo $tema['t37'];?>;
}

label span {
    display: flex;
    align-items: center;
    padding: 0.375em 0.75em 0.375em 0.375em;
    border-radius: 99em;
    transition: 0.25s ease;
}

label span:hover {
    background-color: #d6d6e5;
}

label span:before {
    display: flex;
    flex-shrink: 0;
    content: "";
    background-color: #fff;
    width: 1.5em;
    height: 1.5em;
    border-radius: 50%;
    margin-right: 0.375em;
    transition: 0.25s ease;
    box-shadow: inset 0 0 0 0.125em #00005c;
}
	[type="checkbox"]:not(:checked),
	[type="checkbox"]:checked {
		position: absolute;
		left: 0;
		opacity: 0.01;
	}
	[type="checkbox"]:not(:checked) + label,
	[type="checkbox"]:checked + label {
		position: relative;
		padding-left: 2em;
		font-size: 1.05em;
		line-height: 1.7;
		cursor: pointer;
	}

	/* checkbox aspect */
	[type="checkbox"]:not(:checked) + label:before,
	[type="checkbox"]:checked + label:before {
		content: '';
		position: absolute;
		left: 0;
		top: 0;
		width: 1.4em;
		height: 1.4em;
		border: 1px solid #aaa;
		background: #FFF;
		border-radius: .2em;
		
		-webkit-transition: all .275s;
				transition: all .275s;
	}

	/* checked mark aspect */
	[type="checkbox"]:not(:checked) + label:after,
	[type="checkbox"]:checked + label:after {

				
		content: '▇';
position: absolute;
top: .525em;
left: .18em;
font-size: 14px;
	color: <?php echo $tema['t37'];?>;
line-height: 0;
transition: all .2s;
margin-left: 2px;
margin-top:1px;		
				
				
				
	}

	/* checked mark aspect changes */
	[type="checkbox"]:not(:checked) + label:after {
		opacity: 0;
		-webkit-transform: scale(0) rotate(45deg);
				transform: scale(0) rotate(45deg);
	}

	[type="checkbox"]:checked + label:after {
		opacity: 1;
		-webkit-transform: scale(1) rotate(0);
				transform: scale(1) rotate(0);
	}

	/* Disabled checkbox */
	[type="checkbox"]:disabled:not(:checked) + label:before,
	[type="checkbox"]:disabled:checked + label:before {
		box-shadow: none;
		border-color: #bbb;
		background-color: #e9e9e9;
	}

	[type="checkbox"]:disabled:checked + label:after {
		color: #777;
	}

	[type="checkbox"]:disabled + label {
		color: #aaa;
	}

	/* Accessibility */
	[type="checkbox"]:checked:focus + label:before,
	[type="checkbox"]:not(:checked):focus + label:before {

	}
.karpasif {
  width: 40px;
  height: ;
  margin-right: 5px;
  border-style: none;
  border-width: 1px;
  border-color: #c4bebe;
  border-radius: 42px;
  background-color: #eee;
  background-position: 50% 50%;
  background-size: 18px;
  background-repeat: no-repeat;
  background-image: url('images/kar.png');
  display: none;
}
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  min-width: 160px;
  overflow: auto;
  z-index: 1;
}

.dropdown-content a {

}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


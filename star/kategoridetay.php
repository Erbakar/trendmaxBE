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
	
	
        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
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
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
      
          <div class="container prg-category">
            <div class="row">

              <div class="col-sm-12 col-md-3 sidebar" id="newpost">


            <aside class="widget  minimal-menu prg-category-sideA1 mobilgizle">

   
   <div id="scrollMenu">
   
   <?php if($page['level']=='0'){?>	
   <nav>
   <ul class="minimal">
      <li id="minimal0" class="minimal-main">
      <li id="minimal282" class="minimal-main">
         <a href="kategori/<?php echo $page['seo'];?>" class="active" title="<?php echo $page['seo'];?>"><?php echo $page['adi'];?> 
         <span class="count right"> (<?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>)</span></a>
	
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='$katid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
         <ul class="minimal">
            <li id="minimal291" class="minimal-main">
               <a href="kategori/<?php echo $katadi['seo']; ?>" title="<?php echo $katadi['adi']; ?>"><?php echo $katadi['adi']; ?> 
               <span class="count right"> (<?php 
			   $katidx = $katadi['id'];
			   $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katidx,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>)</span></a>
               <ul class="minimal">
			   		<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	
                  <li id="minimal1114" class="minimal-sub">
                     <a href="kategori/<?php echo $katadi2['seo']; ?>" title="<?php echo $katadi2['adi']; ?>">
					 <?php echo $katadi2['adi']; ?> <span class="count right"> (<?php 
			   $katidy = $katadi2['id'];
			   $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katidy,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>)</span></a>
                  </li>
				<?php } ?>
			   </ul>
            </li>
         </ul>
		 <?php } ?>
      </li>
   </ul>
</nav>
<?php } ?>
<?php if($page['level']=='1'){?>	
   <nav>
   <ul class="minimal">
      <li id="minimal0" class="minimal-main">
      <li id="minimal282" class="minimal-main">
         <a href="kategori/<?php echo $page['seo'];?>" class="active" title="<?php echo $page['seo'];?>"><?php echo $page['adi'];?> 
         <span class="count right"> (<?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>)</span></a>
	
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='$katid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>
         <ul class="minimal">
            <li id="minimal291" class="minimal-main">
               <a href="kategori/<?php echo $katadi['seo']; ?>" title="<?php echo $katadi['adi']; ?>"><?php echo $katadi['adi']; ?> 
               <span class="count right"> (<?php 
			   $katidz = $katadi['id'];
			   $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katidz,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?>)</span></a>
           
            </li>
         </ul>
		 <?php } ?>
      </li>
   </ul>
</nav>
<?php } ?>
              </div>
            </aside>
<style>
  /*FILTRE---------------------------------------------------------------------------------------*/
  .widget-address-search{margin:0 !important; background: #f8f8f8;}
  .widget-address-search .select2-container{margin-bottom:15px;}
  .widget-address-search .select2-container > .selection > .select2-selection{height:36px;}
  .widget-address-search .select2-container > .selection > .select2-selection > span{line-height: 36px;}
  .widget-address-search .select2-container > .selection > .select2-selection > .select2-selection__arrow{height:36px;}
  .select2-results__option{line-height: 13px; font-size: 12px;}
  .widget-price-search{margin:0 !important; background: #f8f8f8;}
  .widget-address-search .title-box .title, .widget-price-search .title-box .title{margin:0;}
  .widget-address-search .title-box, .widget-price-search .title-box{margin-bottom:20px;}
  .searchwidget.prg-category-sideWizard{background: #f8f8f8;}
  #address-search{margin:0;}
  #price-search{margin:0px;}
  
  @media (min-width: 992px){
  .ps-col1{padding:0 3px 0 0;}
  .ps-col2{padding:0 0 0 3px;}
  .ps-col3{padding:0 0 0 6px; line-height: 25px;}
  .top-space{margin-top: 25px;}
  }
  
  @media (min-width: 768px) and (max-width: 991px){
  .ps-col1{padding:0 3px 0 0;}
  .ps-col2{padding:0 0 0 3px;}
  .ps-col3{padding:0 0 0 6px; line-height: 25px;}
  .top-space{margin-top: 25px;}
  }
  
  @media (max-width: 767px){
  .ps-col1{padding:0 0;}
  .ps-col2{padding:0 0;}
  .ps-col3{padding:0 0;}
  }
  
  @media (max-width: 991px){
  .widget-option-custom-search .title-box{margin-bottom: 30px !important; border-bottom:1px solid #e1e1e1 !important;}
  }
  /*FILTRE---------------------------------------------------------------------------------------*/

.yeniyim {
padding: 0 0 0 0px;
margin: 0px !important;
list-style-type: none;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 15px;
  line-height: inherit;
  color: #333;
  border: 0;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: 0px;
  border-bottom: 1px solid #e5e5e5;
}
.table_cell {
background: #f2f1f13d;
padding: 10px;
  padding-left: 10px;
margin-bottom: 10px;
padding-left: 20px;
}
label {
  font-weight: 400;
  margin: 0 0 3px;
}

@media screen and (max-device-width: 480px) and (orientation: portrait){
.mobilgizle {
display:none !important;
}
.masaustugizle {
display:block !important;
}
}

.masaustugizle {
display:none;
width: 93%;
margin: auto;
  margin-bottom: auto;
margin-bottom: 10px;
padding: 10px;
background: <?php echo $tema['t37'];?>;
border-radius: 4px;
color: white;

}
</style>

         
          <div class="col-md-12 widget-detail widget-price-search">
           
		   
		   
		   
		   		<div class="module">
  
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
						<ul class="checkboxes_list yeniyim">
						
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
						<ul class="checkboxes_list yeniyim">
						
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
						<ul class="checkboxes_list yeniyim">
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
					<button type="submit" style="width: 100%;
padding: 10px;
margin-bottom: 4px;" class="btn btn-sm btn-default">Filtrele</button>
					<a style="width: 100%;background:black;color:white;"href="kategori/<?php echo $page['seo'];?>" class="btn btn-sm btn-default">Temizle</a>
				</div>
			        <!--Back To Top-->
        <div class="back-to-top hidden-top"><i class="fa fa-angle-up"></i></div>
    </footer>
		</div><!--/ .table_layout -->

		

	</form>
   </div>
   
</div>

          </div>  

		  <aside class="col-md-12 widget searchwidget prg-category-sideWizard" data-id="282">
            <div class="search-result"></div>
 

          <div class="clearfix"></div>
		  </aside>
          
      
              </div>
            
              <div class="content blog blog-post col-sm-12 col-md-9" id="catalog">
<button id='filtreleme' class="masaustugizle">Filtreleme</button>
 <script>
var button = document.getElementById('filtreleme');

button.onclick = function() {
    var div = document.getElementById('newpost');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};
 </script>
              <div class="toolbar clearfix">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="sort-catalog">
         <span class="grid"><span class="fa fa-th-large"></span></span><a rel="nofollow" href="#" class="sort list" data-mode="t" data-value="list"><span class="fa fa-th-list"></span></a>
      </div>
      <div class="sort-catalog">
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
      <div class="sort-catalog">
         <div class="btn-group show-by btn-select">
            <a rel="nofollow" class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#"><span>50</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
               <li><a rel="nofollow" class="sort" href="#" data-mode="l" data-value="50">50</a></li>
               <li><a rel="nofollow" class="sort" href="#" data-mode="l" data-value="100">100</a></li>
               <li><a rel="nofollow" class="sort" href="#" data-mode="l" data-value="150">150</a></li>
            </ul>
         </div>
         <span class="per-page">ürün</span>
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6"></div>
</div>
                

                <div class="row products">

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
                    <img  class="lazy load"  src="<?php echo $sitetemasi;?>/theme/progressive/img/lazyloader.gif" data-src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="lazyloader.gif" />
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
                    <div class="storeTitle"></div>
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
							
				  
	

<style>
  .discountRate{background:#f23648; position: absolute; padding: 6px 0; width:44px; min-height:47px; height:47px; max-height:47px; color: #fff; text-align: center; z-index: 1; line-height: 16px;}
  .discountRateMid{display: block; font-size: 14px; font-weight: bold;}
  .discountRateText{font-size: 9px;}
</style>
                </div>
                
                <div class="pagination-box bottom-padding-xp">

                  <ul class="pagination">

                    <li class="disabled"><a  onclick="return false;" title="İlk Sayfa"><i class="fa fa-angle-double-left"></i></a></li>

                    <li class="disabled"><a  onclick="return false;" title="Önceki Sayfa"><i class="fa fa-angle-left"></i></a></li>

                   
					
					  <?php

                  for ($i= $pages - $forlimit ; $i < $pages + $forlimit + 1 ; $i++) { 

                  if ($i>0 and $i<=$sayfasayisi) {

                    

                  if ($i == $pages) {

          

                  echo "<li class='active'><span>".$i."</span></li>";

                                      

                   }else{

					   

				   $eklenecekstr="";

				   foreach($_GET as $key=>$value) {

							if($key!="pages" and $key!="oziywebs" and $key!="id") $eklenecekstr.=$key."=&".$value;

						}

						$eklenecekstr=$eklenecekstr!="" ? "&".$eklenecekstr : "";

							

                  echo "<li class='page-numbers'><a class='' href='kategori/".$page['seo']."?pages=".$i.$eklenecekstr."'><span>".$i."</span></a></li>";

          

          }



                  }

                }

          

          

          

          

                   ?> 
					
					

                    <li class="disabled"><a onclick="return false;" title="Sonraki Sayfa"><i class="fa fa-angle-right"></i></a></li>

                    <li class="disabled"><a  onclick="return false;" title="Son Sayfa"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                  <span class="pagination-text"><strong style="color: #ff0000;font-weight: 500;"><?php echo $page['adi'];?></strong> kategorisinde toplam <strong style="font-weight: 500;color: #ff0000"><?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

						$katsorgu->execute();

						$katsay = $katsorgu->fetchColumn();

						echo ''.$katsay.''; ?> </strong> adet ürün bulundu..</span>
                </div>
                <div class="clearfix"></div>

              

              </div>

            </div>
          </div>
        </section>
        <div class="clearfix"></div>  
		</div>
      
     
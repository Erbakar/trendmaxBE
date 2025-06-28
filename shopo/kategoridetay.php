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
	
	   
<div id="product-category" class="container">
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
   <aside id="column-left" class="col-sm-3 hidden-sm hidden-md hidden-xs">
      <div id="yo-1" class="yo-menu">
         <div class="yo-wrapper">
            <ul class="yo-fm fm-one">
        
			<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>	   
		
			   
			   
			   
			   
               <li>
                  <a href="kategori/<?php echo $katadi['seo']; ?>" class="fm-parent">
                  <img class="fm-icon" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>">
                  <span><?php echo $katadi['adi']; ?></span>
                  </a>
                  <ul style="display: none;">
				  
				             <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?> 
				  
                     <li>
                        <a href="kategori/<?php echo $katadi2['seo']; ?>" class="fm-parent">
                        <span><?php echo $katadi2['adi']; ?></span>
                        </a>
                        <ul>
                           
						             <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>
                                          <li>
                                             <a href="kategori/<?php echo $katadi22['seo']; ?>">
                                             <span><?php echo $katadi22['adi']; ?></span>
                                             </a>
                                          </li>
										  
										  
				<?php } ?>     
						   
                        </ul>
                     </li>
					 							  
				<?php } ?>   
					 
					 
				
                  </ul>
               </li>
               
			   	  <?php } else { ?>
               <li>
                  <a href="kategori/<?php echo $katadi['seo']; ?>" class="">
                  <img class="fm-icon" src="resimler/kategoriler/<?php echo $katadi['nikon']; ?>">
                  <span><?php echo $katadi['adi']; ?></span>
                  </a>
               </li>
              <?php }} ?> 
			  
			  
            </ul>
         </div>
      </div>
      <script type="text/javascript"><!--
         var offset1 = $('#yo-1').offset();
         var offset2 = $('#yo-1 .yo-fm').offset();
         $('#yo-1 .fm-container').css('top', offset1.top-offset2.top);
         $(window).on('resize', function() {
           var container = $('#yo-1').closest('.container').width();
           var menu = $('#yo-1').outerWidth();
           $('#yo-1 .fm-container').outerWidth(container-menu);
           if ($(this).width() > '768') {
             $('#yo-1 .fm-container > ul').width(100/3 + '%');
           } else {
             $('#yo-1 .fm-container > ul').width('50%');
           }
         }).resize();
         
         $('#yo-1 ul.yo-fm,#yo-1 ul.fm-one ul').menuAim({
           submenuDirection: $('#yo-1').parent().is('#column-right') ? 'left' : 'right',
           activate: function(item){
             $(item).find('>a.fm-parent').next().show();
             $(item).siblings().find('>a.fm-parent').next().hide();
           },
           deactivate: function(item){
             $(item).find('>a.fm-parent').next().fadeOut(100);
           },
           exitMenu: function(item){
             $(item).find('.fm-container:visible').delay(500).fadeOut(100);
             return true;
           }
         });
         
         $('#yo-1 .fm-parent').has('span.fm-badge').closest('ul').children('li').not('.fm-image').find('>a').addClass('fm-item');
         
         if (0) {
           if (!localStorage.getItem('yo-fm-1')) {
             if (0) {
               localStorage.setItem('yo-fm-1', 'close');
             } else {
               localStorage.setItem('yo-fm-1', 'open');
             }
           }
         
           $('#yo-1 .yo-toggle').click(function() {
             $(this).toggleClass('yo-open yo-close').next().slideToggle(200,'linear');
             if ($(this).hasClass('yo-open')) {
               localStorage.setItem('yo-fm-1', 'open');
             } else {
               localStorage.setItem('yo-fm-1', 'close');
             }
           });
         
           if (localStorage.getItem('yo-fm-1') == 'open') { 
             $('#yo-1 .yo-toggle').addClass('yo-open').removeClass('yo-close').next().show();
           } else {
             $('#yo-1 .yo-toggle').addClass('yo-close').removeClass('yo-open').next().hide();
           }
         } else {
           localStorage.removeItem('yo-fm-1');
           $('#yo-1 .yo-toggle').click(function() {
             $(this).toggleClass('yo-open yo-close').next().slideToggle(200,'linear');
             var offset1 = $('#yo-1').offset();
             var offset2 = $('#yo-1 .yo-fm').offset();
             $('#yo-1 .fm-container').css('top', offset1.top-offset2.top);
           });
         }
         //-->
      </script>    
      <style type="text/css">
         .bf-responsive.bf-active.bf-layout-id-new .bf-check-position {
         top: 80px;
         }
         .bf-responsive.bf-active.bf-layout-id-new .bf-btn-show, 
         .bf-responsive.bf-active.bf-layout-id-new .bf-btn-reset {
         top: 80px;
         }
         .bf-layout-id-new .bf-btn-show {
         background: rgb(25, 163, 223);
         }
         .bf-layout-id-new .bf-btn-reset {
         background: rgb(245, 56, 56);
         }
         .bf-layout-id-new .bf-attr-header{
         background: rgb(247, 247, 247);
         color: rgb(0, 0, 0); 
         }
         .bf-layout-id-new .bf-count{
         background: rgb(244, 98, 52); 
         color: rgb(255, 255, 255); 
         }
         .bf-layout-id-new .ui-widget-header {
         background: rgb(246, 168, 40); 
         }
         .bf-layout-id-new .ui-widget-content {
         background: rgb(238, 238, 238); 
         border:1px solidrgb(221, 221, 221); 
         }
         .bf-layout-id-new .ui-state-default {
         background:rgb(246, 246, 246); 
         border:1px solidrgb(204, 204, 204); 
         }
         .bf-layout-id-new .bf-attr-group-header{
         background:rgb(206, 203, 203); 
         color:rgb(0, 0, 0); 
         }
      </style>
      
      <div class="bf-panel-wrapper bf-responsive  bf-left bf-layout-id-new">

       
         <div class="box bf-check-position " style="width: inherit; max-height: none;background: #F9F9F9;
  border-radius: 5px;
  padding: 10px;">
            
            <div class="brainyfilter-panel box-content  bf-hide-panel ">
               <form class="bf-form bf-with-counts"  action="" method="GET">
               <input type="hidden" name="siralama" value="<?php echo temizle($_GET['siralama']);?>"/>	

									<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>	

									<input type="hidden" name="fiyatfiltre" value="<?php echo temizle($_GET['fiyatfiltre']);?>"/>	

									<?php 

									if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {

										$markagelenveri = temizle($_GET["markalar"]);

										foreach($markagelenveri as $markaverisi){?>

											<input type="hidden" name="markalar[]" value="<?php echo $markaverisi;?>"/>

										<?php  }}?>
                  
                  <div class="bf-attr-block bf-price-filter">
                  
                     <div class="bf-sliding-cont">
                        <div class="bf-sliding bf-expanded">
                     
					 <div class="table_row">
			
				<div class="table_cell">
					<fieldset>
						<legend>Fiyat Aralığı</legend>
						<ul class="checkboxes_list yeniyim" style="list-style: none;
  padding: 0px;
  font-size: 16px;
  font-weight: bold;">
						
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
						<ul class="checkboxes_list yeniyim" style="list-style: none;
  padding: 0px;
  font-size: 16px;
  font-weight: bold;">
						
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
						<ul class="checkboxes_list yeniyim" style="list-style: none;
  padding: 0px;
  font-size: 16px;
  font-weight: bold;">
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
                        </div>
                     </div>
                  </div>
     


                  <div class="bf-buttonclear-box">
                       <input type="submit" value="Filtreyi Uygula" class="btn btn-primary bf-buttonsubmit">
                     <a href="kategori/<?php echo $page['seo'];?>" style="background: #939292;
  padding: 6px;
    padding-bottom: 6px;
  border-radius: 5px;
  color: white;
  padding-bottom: 8px !important;" class="bf-buttonclear">Filtrelemeyi Sıfırla</a> 
                  </div>
               </form>
            </div>
         </div>
      </div>
   </aside>
   <div id="content" class="col-sm-9">
      <h2><?php echo $page['adi'];?></h2>
      <div style="margin-bottom:25px;" class="row">
         <div class="col-sm-10"><?php echo $page['adi'];?></div>
      </div>
      <hr>
      
      <div class="row">
         <div class="col-md-6 col-xs-6">
            <div class="form-group input-group input-group-sm">
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
         </div>
		 
		 
		  <div class="col-md-6 col-xs-6">
		 
		 <button class="filtre-ac"><i class="fa fa-sliders-h"></i> Filtreleme</button>
		   </div>
		   
		 <div class="mobil-filtre">
  
  <div class="filtre-icerik">
    <h3>Filtreler</h3>
    <div class="bf-panel-wrapper bf-responsive  bf-left bf-layout-id-new">

       
         <div class="box bf-check-position " style="width: inherit; max-height: none;background: #F9F9F9;
  border-radius: 5px;
  padding: 10px;">
            
            <div class="brainyfilter-panel box-content  bf-hide-panel ">
               <form class="bf-form bf-with-counts"  action="" method="GET">
               <input type="hidden" name="siralama" value="<?php echo temizle($_GET['siralama']);?>"/>	

									<input type="hidden" name="pages" value="<?php echo temizle($_GET['pages']);?>"/>	

									<input type="hidden" name="fiyatfiltre" value="<?php echo temizle($_GET['fiyatfiltre']);?>"/>	

									<?php 

									if (isset($_GET["markalar"]) && $_GET["markalar"] != "") {

										$markagelenveri = temizle($_GET["markalar"]);

										foreach($markagelenveri as $markaverisi){?>

											<input type="hidden" name="markalar[]" value="<?php echo $markaverisi;?>"/>

										<?php  }}?>
                  
                  <div class="bf-attr-block bf-price-filter">
                  
                     <div class="bf-sliding-cont">
                        <div class="bf-sliding bf-expanded">
                     
					 <div class="table_row">
			
				<div class="table_cell">
					<fieldset>
						<legend>Fiyat Aralığı</legend>
						<ul class="checkboxes_list yeniyim" style="list-style: none;
  padding: 0px;
  font-size: 16px;
  font-weight: bold;">
						
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
						<ul class="checkboxes_list yeniyim" style="list-style: none;
  padding: 0px;
  font-size: 16px;
  font-weight: bold;">
						
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
						<ul class="checkboxes_list yeniyim" style="list-style: none;
  padding: 0px;
  font-size: 16px;
  font-weight: bold;">
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
                        </div>
                     </div>
                  </div>
     


                  <div class="bf-buttonclear-box">
                     <input type="submit" value="Filtreyi Uygula" class="btn btn-primary bf-buttonsubmit">
                     <a href="kategori/<?php echo $page['seo'];?>" style="background: #939292;
  padding: 6px;
    padding-bottom: 6px;
  border-radius: 5px;
  color: white;
  padding-bottom: 8px !important;" class="bf-buttonclear">Filtrelemeyi Sıfırla</a>  
                  </div>
               </form>
            </div>
         </div>
      </div>
  </div>
</div>

		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
        
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
											
											$__URUN__ = true;

											

											?>	
				
				

	  
       
		 
		 
		 		  	   <div class="leftrightx col-lg-3 col-md-3 col-sm-12 col-xs-6">
                                                      <div class="product-layout">
                                                         <div style="margin-bottom:0px;margin-top:0px;" class="product-thumb transition">
                                                            <div class="image">
                                                            <a href="urun/<?php echo $katurunler['seo']; ?>">
                                                         <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" title="<?php echo $katurunler['adi']; ?>" class="img-responsive">						
                                                         <img class="img-responsive hover-image" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>">
                                                         </a>
                                                         				 <?php if($katurunler['idurum']=='1'){?> 
                                                         <div class="indirim">İndirim<br>
                                                            	  %<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?>
                             
                                                         </div>
														    <?php } ?>  
														 
                                                               <div class="button-group">
                                                                  <button type="button" data-toggle="tooltip" title="Sepete Ekle" onclick="window.open('urun/<?php echo $katurunler['seo']; ?>', '_self') "><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Sepete Ekle</span></button>
                                                                  <button data-toggle="tooltip" title="Karşılaştır" type="button" onclick="window.open('?karsilastir=<?php echo $katurunler['id']; ?>', '_self') "><i class="fa fa-search-plus"></i> <span class="hidden-xs hidden-sm hidden-md">KARŞILAŞTIR</span></button>
                                                               </div>
                                                            </div>
                                                              <div class="caption text-center">
                                                         <h4><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                                                        
                                                         <p class="price">
                                                            
															  <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
                                                        </p>
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
      <div class="row">
        
         <div class="col-sm-12">
		   <div class="pagination-box bottom-padding-xp" style="margin-top:30px;">

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
                 
                </div></div>
      </div>
  
   </div>
</div>

</div>

<style>

@media screen and (max-device-width: 480px) and (orientation: portrait){
 .filtre-ac {
  border: none;
  font-size: 14px;
  color: #000;
  cursor: pointer;
  background: #e8e5e5;
  width: 100%;
  padding: 7px;
  border-radius: 5px;
  display:block !important;
    }
}	


    .mobil-filtre {
      position: relative;
    }
    
  .filtre-ac {
  border: none;
  font-size: 14px;
  color: #000;
  cursor: pointer;
  background: #e8e5e5;
  width: 100%;
  padding: 7px;
  border-radius: 5px;
  display:none;
    }
    
    .filtre-icerik {
      display: none;
      background: #fff;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      z-index: 999;
    }
 
  </style>





<script>
  $(document).ready(function(){
    $(".filtre-ac").click(function(){
      $(".filtre-icerik").slideToggle();
    });
  });
</script>

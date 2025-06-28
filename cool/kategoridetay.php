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



<div class="container product-listing content-main ">

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


  <div class="row">
    <aside id="sidebar" class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas ">
     
                        <div class="site-scroll ps">
                            <div class="sidebar-inner">
                                <div class="sidebar-mobile-header">
                                    <h3 class="entry-title">Ürün Filtreleme</h3>

                                     <span id="close-sidebar" class="fa fa-times"></span>
                                </div>

                                <div class="widget widget_klb_product_categories">
                            <div class="filter-actions" style="text-align: center;
background: #ececec;
line-height: 20px;
padding: 10px;
font-size: 14px;background: white;">
                                    	  <a href="kategori/<?php echo $page['seo'];?>">Filtreyi Temizle</a>
                                    </div>
									
					<?php if($page['level']=='0' || $page['level']=='1'){?>
									
                                    <!-- Start of Collapsible widget -->
                                    <div class="widget widget-collapsible"  style="background: white;border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">
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

                                </div>
                               
                                <!-- Start of Collapsible Widget -->
                                   	<div class="widget widget-collapsible" style="background: white;border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">

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
                                   		<div class="widget widget-collapsible" style="background: white;border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">

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
                                   	<div class="widget widget-collapsible" style="background: white;border: 1px solid #f5f5f5;padding: 10px;margin-bottom:10px;">
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
																}; ?> type="checkbox" name="markalar[]" value="<?php echo $marka['id']; ?>" class="custom-control-input" id="brand-1<?php echo $marka['id']; ?>">

														<label class="custom-control-label" for="brand-1<?php echo $marka['id']; ?>"><?php echo $marka['adi']; ?></label>

													</div><!-- End .custom-checkbox -->

												</div><!-- End .filter-item -->



                                    <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
									
										
		                	

		                		<button type="submit" class="butonok btn btn-primary btn-rounded">Filteyi Uygula</a>
                             <div>
						
							 </div>
                                   </form>
		                	
                                
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                      
                    </div> 
      
    </aside>
    <div id="content" class="col-md-9 col-sm-12 col-xs-12 fluid-sidebar" style="background: white;">
      <div class="products-category clearfix">
        <h3 class="title-category" style="padding-top:10px;"><?php echo $page['adi'];?></h3>
        <div class="form-group category-info">
          <div class=" row">
            <div class="col-sm-12 col-xs-12">
              <p><?php echo $page['sdesc'];?><br></p>
            </div>
          </div>
        </div>
		     <?php if($page['level']=='0' or $page['level']=='1'){?>
		
		
        <div class="refine-search form-group clearfix">
          <h3 class="title-category"></h3>
          <!-- <ul class="refine-search__content refine-style--2"> -->
          <ul class="refine-search__content refine-style--default">
         
            
						<?php $ustkat1 = $page['id'];
						$ustu2 = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkat1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($ustu2 as $ustu2mmm){?>
           
            <li class="refine-search__subitem">				
              <a href="kategori/<?php echo $ustu2mmm['seo'];?>" class="thumbnail--title text-center"><?php echo $ustu2mmm['adi'];?></a>				
            </li>
			 <?php } ?>
			
          </ul>
      
        </div>
		 <?php } ?>
		
		
        <div class="product-filter product-filter-top filters-panel">
          <div class="row">
            <div class="com-md-4 col-sm-4 view-mode">
			
			<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Ürün Filtreleme</a>
			
            <div class="form-group short-by">
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
            <div class="short-by-show form-inline text-right col-md-8 col-sm-8 col-xs-12">
            
              <div class="form-group">
                <label class="control-label" for="input-limit">Bu kategoride toplam <?php $katsorgu = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and FIND_IN_SET($katid,kategori)");

                                         $katsorgu->execute();

                                         $katsay = $katsorgu->fetchColumn();

                                         echo ''.$katsay.''; ?> adet ürün bulunmaktadır.</label>
          
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="products-list nopadding-xs so-filter-gird">
		  
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
			
		  
		  
			
			
            <div class="product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12 urunduzen" style="border: 1px solid #f2ecec;background: white;">
              <div class="product-item-container product-grid-type1 ">
                <div class="left-block">
                            <div class="product-image-container  second_img">
                              <a href="urun/<?php echo $katurunler['seo']; ?>">
                              <img style="width: 230px;height: 230px;" data-sizes="auto" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" data-src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-1 lazyload">
                              
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
			 <img data-sizes="auto" style="width: 230px;height: 230px;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" data-src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" class="img-2 lazyload">
             <?php }?>  
			<?php } else { ?>			  
		    <img data-sizes="auto" style="width: 230px;height: 230px;" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" data-src="resimler/urunler/<?php echo $katurunler['resim']; ?>" class="img-2 lazyload">
                              
  				<?php }?>  		  
							  </a>						
                            </div>
							
							<?php if($katurunler['yeni']=='1'){?>
                            <div class="box-label">
                              <span class="label-product label-sale"> Yeni </span>
                            </div>
							<?php } ?>
							
                          </div>
                 <div class="right-block">
                            <h4><a href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a></h4>
                            <div class="rate-history">
                              <div class="ratings">							
                                
                          
								
								           <?php echo $katurunler['yildiz'] == '1' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '2' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '3' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '4' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>
											<?php echo $katurunler['yildiz'] == '5' ? '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>' : null; ?>	
								
								
								
                              </div>
                            </div>
                            <div class="price">
                             	<?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
							  
					
			<?php if($katurunler['idurum']=='1'){?>
		    <span class="text_off">
			  -%<?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?> İndirim
			</span>
			<?php } ?>
                                            
							  
							  
                            </div>
                            <div class="button-group">
                              <button type="button" class="addToCart btn-button" title="Sepete Ekle" 
							  onclick="javascript:location.href='urun/<?php echo $katurunler['seo']; ?>'"><i class="icom-shopping-cart1"></i></button>											
      
                              <button type="button" class="addToCart btn-button" title="Favorilerime Ekle"
							  onclick="javascript:location.href='?favoriekle=<?php echo $katurunler['id']; ?>'"
							  ><i class="icom-wishlist"></i></button>
                              <button type="button" class="addToCart btn-button" title="Karşılaştırma Listeme Ekle" 
							  onclick="javascript:location.href='?karsilastir=<?php echo $katurunler['id']; ?>'"
							  ><i class="icom-compare"></i></button>
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
        <div class="product-filter product-filter-bottom filters-panel">
          <div class="row">
            <div class="col-sm-6 text-left">
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
            <div class="col-sm-6 text-right">Bu kategoride <?php echo ''.$katsay.''; ?> adet ürün mevcut.</div>
          </div>
        </div>
        <script type="text/javascript"><!--
          reinitView();
          
          function reinitView() {
          
          	$( '.product-card__gallery .item-img').hover(function() {
          		$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
          		var thumb_src = $(this).attr("data-src");
          		$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);
          	}); 
          
          	$('.view-mode .list-view button').bind("click", function() {
          		$(this).parent().find('button').removeClass('active');
          		$(this).addClass('active');
          	});	
          	// Product List
          	$('#list-view').click(function() {
          		$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');
          		localStorage.setItem('listview', 'list');
          	});
          
          	// Product Grid
          	$('#grid-view').click(function() {
          		var cols = $('.left_column , .right_column ').length;
          		$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12');
          		localStorage.setItem('listview', 'grid');
          	});
          
          	// Product Grid 2
          	$('#grid-view-2').click(function() {
          		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
          		localStorage.setItem('listview', 'grid-2');
          	});
          
          	// Product Grid 3
          	$('#grid-view-3').click(function() {
          		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
          		localStorage.setItem('listview', 'grid-3');
          	});
          
          	// Product Grid 4
          	$('#grid-view-4').click(function() {
          		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
          		localStorage.setItem('listview', 'grid-4');
          	});
          
          	// Product Grid 5
          	$('#grid-view-5').click(function() {
          		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');
          		localStorage.setItem('listview', 'grid-5');
          	});
          
          	// Product Table
          	$('#table-view').click(function() {
          		$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');
          		localStorage.setItem('listview', 'table');
          	})
          
          	
          			localStorage.setItem('listview', 'grid-4');
          	
          	if (localStorage.getItem('listview') == 'table') {
          		$('#table-view').trigger('click');
          	} else if (localStorage.getItem('listview') == 'grid-2'){
          		$('#grid-view-2').trigger('click');
          	} else if (localStorage.getItem('listview') == 'grid-3'){
          		$('#grid-view-3').trigger('click');
          	} else if (localStorage.getItem('listview') == 'grid-4'){
          		$('#grid-view-4').trigger('click');
          	} else if (localStorage.getItem('listview') == 'grid-5'){
          		$('#grid-view-5').trigger('click');
          	} else {
          		$('#list-view').trigger('click');
          	}
          	
          
          }
          
          //-->
        </script> 				
      </div>
    </div>
    <script type="text/javascript"><!--
      $(window).load(sidebar_sticky_update());
      $(window).resize(sidebar_sticky_update());
      
        	function sidebar_sticky_update(){
        		 var viewportWidth = $(window).width();
        		 if (viewportWidth > 1200) {
         		// Initialize the sticky scrolling on an item 
      		sidebar_sticky = 'disable';
      		
      		if(sidebar_sticky=='left'){
      			$(".left_column").stick_in_parent({
      			    offset_top: 10,
      			    bottoming   : true
      			});
      		}else if (sidebar_sticky=='right'){
      			$(".right_column").stick_in_parent({
      			    offset_top: 10,
      			    bottoming   : true
      			});
      		}else if (sidebar_sticky=='all'){
      			$(".content-aside").stick_in_parent({
      			    offset_top: 10,
      			    bottoming   : true
      			});
      		}
      	}
        	}
      
      
      //-->
    </script> 
  </div>
</div>

<style>





.site-sidebar {
  position: relative; 
  width: 100% !important;
  padding: 0px !important;
}
  @media screen and (max-width: 64rem) {
    .site-sidebar {
      position: fixed;
      -webkit-box-flex: 0;
          -ms-flex: 0 0 100%;
              flex: 0 0 100%;
      max-width: 100%;
      width: 100%;
      top: 0;
      bottom: 0;
      left: 0;
      margin-top: 0;
      padding: 1.25rem 1.25rem 0;
      background-color: var(--color-background);
      -webkit-transform: translateX(-100%);
              transform: translateX(-100%);
      z-index: 10001; } }
  @media screen and (max-width: 64rem) and (min-width: 64rem) {
    .site-sidebar {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 26.25rem;
              flex: 0 0 26.25rem;
      max-width: 26.25rem;
      padding: 1.875rem; } }
  @media screen and (max-width: 64rem) {
      .site-sidebar .ps__rail-y {
        top: 0 !important; }
      .site-sidebar .sidebar-inner {
        padding-bottom: 1.875rem; }
      .site-sidebar .widget + .widget {
        border-top: 1px solid var(--color-border);
        padding-top: 1.75rem; } }

.sidebar-mobile-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 1.875rem;
  padding-bottom: 1.75rem;
  border-bottom: 1px solid var(--color-border); }
  @media screen and (min-width: 64rem) {
    .sidebar-mobile-header {
      display: none; } }
  .sidebar-mobile-header .entry-title {
    font-size: 15px;
    margin-bottom: 0; }
  .sidebar-mobile-header .close-sidebar {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    font-size: .8125rem;
    width: 1.375rem;
    height: 1.375rem;
    color: #fff;
    background-color: #c2c2d3;
    border-radius: 50%; }

.widget + .widget {
  margin-top: 1.875rem; }
  @media screen and (min-width: 75rem) {
    .widget + .widget {
      margin-top: 10px !important; } }

.widget .widget-title {
  font-family: var(--font-secondary);
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0;
  margin-bottom: 1.25rem; 
  border-bottom: 1px solid #f6f6f6;
  padding-bottom: 5px;
}

.widget .widget-body {
  position: relative;
  color: var(--color-text-lighter); }
  .widget .widget-body ul {
    font-size: .875rem;
    font-weight: 400;
    margin: 0;
    padding: 0;
    list-style: none; }
    .widget .widget-body ul a {
      color: currentColor;
      text-decoration: none; }

.widget .site-checkbox-lists .site-scroll {
  max-height: 18.75rem; }
  .widget .site-checkbox-lists .site-scroll .ps__rail-y {
    opacity: 1;
    width: 10px;
    top: 0 !important;
    background-color: var(--color-info-light); }
    .widget .site-checkbox-lists .site-scroll .ps__rail-y .ps__thumb-y {
      width: 5px;
      background-color: var(--color-info);
      opacity: .6; }
    .widget .site-checkbox-lists .site-scroll .ps__rail-y:hover .ps__thumb-y {
      opacity: 1; }
  .widget .site-checkbox-lists .site-scroll .ps__rail-x {
    opacity: 1; }

.widget .site-checkbox-lists li {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
  overflow: hidden; }
  .widget .site-checkbox-lists li a {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    margin-bottom: .625rem; }
  .widget .site-checkbox-lists li .menu-dropdown {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    font-size: .8125rem;
    font-weight: 600;
    width: 1.125rem;
    height: 1.125rem;
    border-radius: 50%;
    background-color: var(--color-info-light);
    top: 2px;
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
    cursor: pointer; }
    .widget .site-checkbox-lists li .menu-dropdown:hover {
      color: #fff;
      background-color: var(--color-info); }
  .widget .site-checkbox-lists li .children {
    width: 100%;
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3; }
  .widget .site-checkbox-lists li.active > .menu-dropdown {
    color: #fff;
    background-color: var(--color-info); }
    .widget .site-checkbox-lists li.active > .menu-dropdown i::before {
      content: '\e8c8'; }

.widget .site-checkbox-lists .children {
  margin-left: 1.75rem; }

.widget .site-checkbox-lists input[type="checkbox"] {
  display: none !important; }
  .widget .site-checkbox-lists input[type="checkbox"]:checked + label {
    color: #379bff;
    text-shadow: 0px 0px 0px; }
    .widget .site-checkbox-lists input[type="checkbox"]:checked + label span {
      background-color: #379bff;
      border-color: #379bff; }
      .widget .site-checkbox-lists input[type="checkbox"]:checked + label span::before {
        color: #fff;
        opacity: 1; }

.widget .site-checkbox-lists label {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  cursor: pointer;
  margin-bottom: 0; }
  .widget .site-checkbox-lists label span {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 .875rem;
            flex: 0 0 .875rem;
    max-width: .875rem;
    width: 100%;
    height: .875rem;
    border: 1px solid var(--color-border-dark);
    margin-right: .9375rem;
    top: -1px;
    border-radius: 2px; }
    .widget .site-checkbox-lists label span::before {
      position: relative;
      font-family: 'klbtheme';
      font-size: .5rem;
      content: '\e8e1';
      line-height: 1;
      left: .5px;
      opacity: 0; }
  .widget .site-checkbox-lists label:hover span {
    background-color: var(--color-border-light); }

.widget .site-checkbox-lists.hidden-sub ul.children {
  height: 0; }

.widget .site-checkbox-lists .scroll-active .menu-dropdown {
  margin-right: 1.25rem; }

.ui-widget-content {
  height: 4px;
  background-color: var(--color-info-light);
  margin-bottom: 1.5625rem;
  border-radius: 4px; }
  .ui-widget-content .ui-slider-range {
    position: absolute;
    display: block;
    width: 100%;
    height: 4px;
    border: 0;
    background-color: var(--color-text);
    border-radius: 8px;
    z-index: 1; }
  .ui-widget-content .ui-slider-handle {
    left: 0%;
    position: absolute;
    z-index: 2;
    outline: 0;
    cursor: pointer;
    background-color: var(--color-text);
    border-radius: 100%;
    border: 0;
    height: 14px;
    top: -5px;
    width: 14px;
    margin: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
    -webkit-transform: translateX(0px);
            transform: translateX(0px); }
    .ui-widget-content .ui-slider-handle:last-child {
      left: 100%;
      -webkit-transform: translateX(-100%);
              transform: translateX(-100%); }

.price_slider_amount {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .price_slider_amount .button {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
    font-size: .75rem;
    font-weight: 600;
    text-transform: uppercase;
    height: auto;
    margin-left: auto;
    padding: 0;
    border: 0;
    background-color: transparent; }
  .price_slider_amount .price_label {
    font-size: .75rem; }
    .price_slider_amount .price_label span {
      font-weight: 600;
      color: var(--color-text); }

@media screen and (min-width: 36rem) {
  .widget-posts {
    padding: 1.25rem;
    border: 1px solid var(--color-border-light);
    border-radius: var(--size-border-radius); } }

.widget-posts .post {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .widget-posts .post .post-thumbnail {
    position: relative;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 3.75rem;
            flex: 0 0 3.75rem;
    max-width: 3.75rem;
    height: 3.75rem;
    margin-right: .9375rem;
    margin-bottom: 0; }
    .widget-posts .post .post-thumbnail a {
      position: relative;
      display: block;
      border-radius: 50%;
      overflow: hidden; }
    .widget-posts .post .post-thumbnail .post-number {
      position: absolute;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      font-size: .6875rem;
      font-weight: 600;
      width: 1.5rem;
      height: 1.5rem;
      top: -2px;
      right: -2px;
      border-radius: 50%;
      color: #fff;
      background-color: var(--color-secondary);
      border: 2px solid var(--color-background);
      z-index: 1; }
  .widget-posts .post .entry-title {
    font-size: .875rem;
    font-weight: 500;
    margin-bottom: 0;
    line-height: 1.4; }
    .widget-posts .post .entry-title a {
      color: var(--color-text);
      text-decoration: none; }
  .widget-posts .post + .post {
    margin-top: 2.25rem; }

}
}
.widget .widget-body {
    position: relative;
    color: var(--color-text-lighter);
    padding: 0px !important;
}


label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 0px;
    font-weight: 500;
    font-size: 16px !important;
}

</style>
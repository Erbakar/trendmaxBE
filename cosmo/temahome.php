    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 

	  
	  <div class="py-0">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 px-0">
<header>
<div id="owl-carousel-one" class="owl-carousel">
	  <?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                foreach($slider as $demo){?> 
<div class="item">
<a href="<?php echo $demo['link'];?>" title="<?php echo $demo['adi'];?>">
						
<img class="img-fluid mx-auto" src="resimler/slider/<?php echo $demo['resim'];?>"></div>
 </a> 
  
  <?php } ?> 
</div>
</header>
</div>
</div>
</div>
</div>
	  
	  
   </div>
   
<section class="py-5">
<div class="container">
<div class="row">

<?php $kat = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
foreach($kat as $katt){?> 
<div class="col-4">
<div class="offers-block"><a href="kategori/<?php echo $katt['seo'];?>">
<img class="img-fluid" src="resimler/kategoriler/<?php echo $katt['yanresim'];?>" alt="<?php echo $katt['seo'];?>"></a>
</div>
</div>
<?php } ?> 

<div class="col-4">
<?php $kat = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc limit 1,2")->fetchAll(PDO::FETCH_ASSOC); 
foreach($kat as $katt){?> 
<div class="offers-block">
 <a href="kategori/<?php echo $katt['seo'];?>">
 <img class="img-fluid mb-3" src="resimler/kategoriler/<?php echo $katt['yanresim'];?>" alt="<?php echo $katt['seo'];?>">
 </a>
</div>
<?php } ?> 
</div>
<?php $kat = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc limit 3,1")->fetchAll(PDO::FETCH_ASSOC); 
foreach($kat as $katt){?> 
<div class="col-4">
<div class="offers-block"><a href="kategori/<?php echo $katt['seo'];?>">
<img class="img-fluid" src="resimler/kategoriler/<?php echo $katt['yanresim'];?>" alt="<?php echo $katt['seo'];?>"></a>
</div>
</div>
<?php } ?> 
</div>
</div>
</section>
   
   
   
   
   
   <section class="py-2">
      <div class="container">
         <div class="row">
            <div class="col-12">
              <?php require('hikaye.php');?> 
            </div>
           
         </div>
      </div>
   </section>
   
   
   <section class="product-list pbc-5 pb-4 pt-5 bg-light">
      <div class="container">
         
         <h4 class="mt-0 mb-3 text-dark font-weight-normel">Günün Fırsatları</h4>
         <div class="row">
		 
				  
		  <?php $ukzzz = $ozy->query("select * from urunler where durum='1' and firsat='1' order by rand() limit 8")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($ukzzz as $gfirsat){?>
		   
		 
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon">
				  <a href="?favoriekle=<?php echo $gfirsat['id']; ?>">
				  <i class="icofont icofont-heart"></i></a></span>
				  
                  <a href="urun/<?php echo $gfirsat['seo']; ?>">
				   <?php if($gfirsat['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($gfirsat['fiyat'],$gfirsat['ifiyat']);?></span>
					<?php } ?> 	 
					 
                     <img src="resimler/urunler/<?php echo $gfirsat['resim']; ?>" class="card-img-top urunresim" alt="<?php echo $gfirsat['adi']; ?>"></a>
					 
                  <div class="card-body">
                     <h6 class="card-title mb-1"><?php echo $gfirsat['adi']; ?></h6>
                     <div class="stars-rating">
					 
					  <?php echo $gfirsat['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $gfirsat['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $gfirsat['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $gfirsat['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $gfirsat['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   
						  
						   

						   <span>
						              <?php 
								      $sayfaid = $gfirsat['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> 
						   </span>
                     </div>
                     <p class="mb-0 text-dark" style="  font-size: 15px;
  font-weight: 500;">
					
  					 <?php echo xurunfiyatbelirle($gfirsat['kdv'],$gfirsat['idurum'],$gfirsat['fiyat'],$gfirsat['ifiyat']);?>

					 
					 </p>
                  </div>
               </div>
            </div>
			
		
			<?php } ?>	
		
		
         </div>
      </div>
      </div>
   </section>
   
   
   <section class="offer-product py-5">
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="offers-block">
			   <a href="<?php echo $tema['t4']; ?>">
			   <img class="img-fluid" src="resimler/temaayarlari/<?php echo $tema['t1']; ?>" alt="Banner"></a></div>
            </div>
            <div class="col-6">
               <div class="offers-block">
			   <a href="<?php echo $tema['t5']; ?>">
			   <img class="img-fluid" src="resimler/temaayarlari/<?php echo $tema['t2']; ?>" alt="Banner"></a></div>
            </div>
         </div>
      </div>
   </section>
   
   
      <section class="product-list pbc-5 pb-4 pt-5 bg-light" style="background: #f6fdfe !important;">
      <div class="container">
         
         <h4 class="mt-0 mb-3 text-dark font-weight-normel">Popüler Ürünler</h4>
         <div class="row">
		 
				  
		  <?php $pp = $ozy->query("select * from urunler where durum='1' and populer='1' order by rand() limit 8")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($pp as $pop){?>
		   
		 
            <div class="col-6 col-md-3">
               <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                  <span class="like-icon">
				  <a href="?favoriekle=<?php echo $pop['id']; ?>">
				  <i class="icofont icofont-heart"></i></a></span>
				  
                  <a href="urun/<?php echo $pop['seo']; ?>">
				   <?php if($pop['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($pop['fiyat'],$pop['ifiyat']);?></span>
					<?php } ?> 	 
					 
                     <img src="resimler/urunler/<?php echo $pop['resim']; ?>" class="card-img-top urunresim" alt="<?php echo $pop['adi']; ?>"></a>
					 
                  <div class="card-body">
                     <h6 class="card-title mb-1"><?php echo $pop['adi']; ?></h6>
                     <div class="stars-rating">
					 
					  <?php echo $pop['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $pop['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $pop['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $pop['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $pop['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   
						  
						   

						   <span>
						              <?php 
								      $sayfaid = $pop['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> 
						   </span>
                     </div>
                     <p class="mb-0 text-dark" style="  font-size: 15px;
  font-weight: 500;">
					
  					 <?php echo xurunfiyatbelirle($pop['kdv'],$pop['idurum'],$pop['fiyat'],$pop['ifiyat']);?>

					 
					 </p>
                  </div>
               </div>
            </div>
			
		
			<?php } ?>	
		
		
         </div>
      </div>
      </div>
   </section>
   
   
   <section class="product-list pbc-5 pb-4 pt-5 bg-light">
      <div class="container">
     
         <h4 class="mt-0 mb-3 text-dark">Sizin İçin Seçtiklerimiz</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel owl-carousel-category owl-theme">
			   
		  <?php $ukzzzs = $ozy->query("select * from urunler where durum='1' and agoster='1' order by rand() limit 12")->fetchAll(PDO::FETCH_ASSOC); 
          foreach($ukzzzs as $agoster){?> 
			   
                  <div class="item">
                     <div class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                        <span class="like-icon">
						 <a href="?favoriekle=<?php echo $agoster['id']; ?>">
				         <i class="icofont icofont-heart"></i></a></span>
                        <a href="urun/<?php echo $agoster['seo']; ?>">
				   <?php if($agoster['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($agoster['fiyat'],$agoster['ifiyat']);?></span>
					<?php } ?> 	 
					 
                     <img src="resimler/urunler/<?php echo $agoster['resim']; ?>" class="card-img-top urunresim" alt="<?php echo $agoster['adi']; ?>"></a>
					 <div class="card-body">
                     <h6 class="card-title mb-1"><?php echo $agoster['adi']; ?></h6>
                     <div class="stars-rating">
					 
					  <?php echo $agoster['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $agoster['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $agoster['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $agoster['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $agoster['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
						   
						  
						   

						   <span>
						              <?php 
								      $sayfaid = $agoster['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                      <?php echo $urunyorumsayimis;?> 
						   </span>
                     </div>
                     <p class="mb-0 text-dark" style="  font-size: 15px;
  font-weight: 500;">
					
  					 <?php echo xurunfiyatbelirle($agoster['kdv'],$agoster['idurum'],$agoster['fiyat'],$agoster['ifiyat']);?>

					 
					 </p>
						
						</div>
                     </div>
                  </div>

               <?php } ?> 


               </div>
            </div>
         </div>
      </div>
   </section>
   
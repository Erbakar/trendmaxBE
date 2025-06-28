<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE kampanyalar SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>

<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM kampanyalar WHERE seo=:id and durum=:durum");
$page = $sayfaqq->execute([':id' => $id,':durum' => $durum]);
$page = $sayfaqq->fetch(PDO::FETCH_ASSOC);

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

       <section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
                  <?php echo $page['adi']; ?>      
               </h4></div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="<?php echo $url;?>">
					 <i class="icofont-ui-home"></i> Anasayfa</a>  /  
					 <span><?php echo $page['adi']; ?></span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  <section class="py-5 bg-light border-top" style="background: white !important;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                	<?php if($page['resim']=='resimyok.jpg'){?>
						<div class="col-lg-12 col-md-12 about-info">
							<h5 class="about-title" style="text-align: center;margin: 10px;"><?php echo $page['adi']; ?></h5>
							<div class="about-text">
							 <?php echo $page['aciklama'];?>
							 </div>
						</div>
						<?php } else { ?>
						<div class="col-lg-12 col-md-6 about-image"> 
                           <a href="resimler/kampanyalar/<?php echo $page['resim']?>" data-lightbox="image-1">
                                    
						   <img src="resimler/kampanyalar/<?php echo $page['resim']?>" alt="Banner" style="background-color: #D0C1AE;" width="1240" height="540">
                         </a>
						 </div>
						 	<div class="col-lg-12 col-md-6 about-info">
							<h5 class="about-title" style="text-align: center;margin: 10px;"><?php echo $page['adi']; ?></h5>
							<div class="about-text">
							 <?php echo $page['aciklama'];?>
							 </div>
						</div>
						 <?php } ?>
               </div>
              
               
            </div>
			
			
			<div class="row">
				<div class="col-lg-12">		
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='kampanyalar' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                      <div class="col-lg-3 col-md-3" style="float:left;display:block;" >
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img style="width: 100% !important;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image">
                        </a>
						</div>
						
                     <?php } ?>
					 </div>
					</div>
			
			
			
			
         </div>
      </section>
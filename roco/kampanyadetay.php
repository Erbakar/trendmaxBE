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
<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			<li><a href="kampanyalar/">Kampanyalar</a></li>
			<li><a><?php echo $page['adi']; ?></a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="about-us about-demo-3">
					<div class="row">
						
						<?php if($page['resim']=='resimyok.jpg'){?>
						<div class="col-lg-12 col-md-12 about-info">
							<h2 class="about-title"><?php echo $page['adi']; ?></h2>
							<div class="about-text">
							 <?php echo $page['aciklama'];?>
							 </div>
						</div>
						<?php } else { ?>
						<div class="col-lg-6 col-md-6 about-image"> 
                           <a href="resimler/kampanyalar/<?php echo $page['resim']?>" data-lightbox="image-1">
                                    
						   <img src="resimler/kampanyalar/<?php echo $page['resim']?>" alt="Banner" style="background-color: #D0C1AE;" width="1240" height="540">
                         </a>
						 </div>
						 	<div class="col-lg-6 col-md-6 about-info">
							<h2 class="about-title"><?php echo $page['adi']; ?></h2>
							<div class="about-text">
							 <?php echo $page['aciklama'];?>
							 </div>
						</div>
						 <?php } ?>
						
					
						
						
						
					</div>
					<div class="row">
						
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='kampanyalar' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                      <div class="col-lg-3 col-md-3">
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image" class="mx-auto mb-6">
                        </a>
						</div>
						
                     <?php } ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
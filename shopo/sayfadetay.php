<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE sayfalar SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>

<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM sayfalar WHERE seo=:id and durum=:durum");
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
	   
<div id="information-information" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
	    <li><a>İşlem Rehberi</a></li>
      <li><a href="sayfa/<?php echo $page['seo']; ?>"><?php echo $page['adi']; ?></a></li>
   </ul>
   <div class="row">
      <div id="content" class="col-sm-12">
      
		 
		 	  	<?php if($page['resim']=='resimyok.jpg'){?>
						
						<?php } else { ?>
						
                           <a href="resimler/sayfalar/<?php echo $page['resim']?>" data-lightbox="image-1">
                                    
						   <img src="resimler/sayfalar/<?php echo $page['resim']?>" alt="Banner" style="background-color: #D0C1AE;" width="1240" height="540">
                         </a>
						 <?php } ?>
		    <h1 style="margin-top:20px;"><?php echo $page['adi']; ?></h1>
         <?php echo $page['aciklama']; ?>
		 
		   <div class="row" style="margin-bottom:20px;">
			  
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='sayfalar' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                     <div class="col-lg-4">
                      
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img style="width: 100%;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image" >
                        </a>
						
						</div>
                     <?php } ?>
			  
			  </div>
		 
		 
		 
		 
      </div>
   </div>
</div>
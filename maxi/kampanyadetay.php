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
	<main class="main">
          

            
            <!-- Start of Page Content -->
            <div class="page-content">
                  <div class="container" style="margin-top: 15px;background: white;
padding: 20px;">
		         
                    <section class="introduce mb-10 pb-10">
                     <?php if($page['resim']=='resimyok.jpg'){?>
						
						<?php } else { ?>
                        <figure class="br-lg">
                           <a href="resimler/kampanyalar/<?php echo $page['resim']?>" data-lightbox="image-1">
                                    
						   <img src="resimler/kampanyalar/<?php echo $page['resim']?>" alt="Banner" style="background-color: #D0C1AE;" width="1240" height="540">
                         </a>
						</figure>
						 <?php } ?>
						
						
						   <h2 style="font-size: 21px;
margin-top: 10px;
border-bottom: 1px solid #c8c6c6;
text-align: center;
padding-bottom: 10px;" class="title title-center">
                            <?php echo $page['adi'];?>
                        </h2>
                      
						 <?php echo $page['aciklama'];?>
                    </section>

                   
                
                </div>

					
					
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='kampanyalar' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                        <div class="col-lg-3">
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img style="width: 100%;text-align: center;margin: auto;float:left;" src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image" class="mx-auto mb-6">
                        </a>
						</div><!-- End .col-lg-4 col-sm-6 -->
                     <?php } ?>
					 
			
            </div>
        </main>	
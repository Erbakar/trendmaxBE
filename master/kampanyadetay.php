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
<div class="kategori1">
    <div class="div-block-linkler-divbox">
      <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="kampanyalar/" class="link-12">Kampanyalar</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="sayfa/<?php echo $page['seo']; ?>" class="link-12"><?php echo $page['adi']; ?></a>
      </div>
    </div>
    <div class="div-block-4461292330">
      <div class="w-row">
        <div class="column-190 w-col w-col-3 w-col-stack">
          <div class="div-block-4461292332">
            <div class="div-block-4461292339">
              <h4 class="heading-50">Kampanyalar</h4>
            </div>
            <div class="content-kategori-close">
                
				
               
                
           <?php $hzmetler1 = $ozy->query("select * from kampanyalar where durum='1'order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <a  class="link-9-2 <?php echo $page['id'] == $hizmetler11['id'] ? 'kurumsalaktif' : null; ?>" href="<?php if($hizmetler11['link']=='0'){?>kampanya/<?php echo $hizmetler11['seo']; ?><?php } else { ?><?php echo $hizmetler11['link']; ?><?php } ?>"><strong class="bold-text-24" <?php echo $page['id'] == $hizmetler11['id'] ? 'style="font-weight:bold !important;"' : null; ?>><?php echo $hizmetler11['adi']; ?></strong></a>
							<?php } ?>
			
            </div>
          </div>
        </div>
        <div class="column-188 w-col w-col-9 w-col-stack">
          <div class="div-block-4-461292474723282e-32">
            <div class="div-block-kategori-filtre-box24">
              <div class="text-block-138-28"><?php echo $page['adi'];?></div>
            </div>
            <div>
              <div class="text-block-210612">
			 
			       <?php echo $page['aciklama'];?>
			  
			  
			  <div class="div-block-4461292274">
  <div class="w-row">
			  
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='kampanyalar' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                       <div class="w-col w-col-4">
                       <div class="div-block-4461292276">
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image" class="mx-auto mb-6">
                        </a>
						</div>
						</div>
                     <?php } ?>
			  
			  </div></div>
			  
			  
			</div>
			
			
			
			
			
			
			
            </div>
			
			
	

    
  </div>
			
			
			
			
			
			
          </div>
        </div>
      </div>
    </div>
  </div>
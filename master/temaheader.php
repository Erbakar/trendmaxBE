    <?php define("guvenlik",true);?>
	<script type="text/javascript" >
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo $tema['t14'];?>', 'auto');
    ga('send', 'pageview');
</script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<link href="<?php echo $sitetemasi;?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php echo $sitetemasi;?>/css/tooltip.css" rel="stylesheet" type="text/css">
<link href="<?php echo $sitetemasi;?>/css/webflow.css" rel="stylesheet" type="text/css">
<?php include("".$sitetemasi."/css/oziy.php");?>
<link href="<?php echo $sitetemasi;?>/css/root.css" rel="stylesheet" type="text/css">
<link href="<?php echo $sitetemasi;?>/css/jquery-ui.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  




<?php echo $ayar['yandex']; ?>
<?php echo $ayar['reklam']; ?>



<!-- TEMA EKSTRALARI -->	
<?php if (isset($_GET['sepetsil'])) {
$sepetkaldiralim = temizle($_GET['sepetsil']);
$sil = $ozy->prepare("DELETE FROM sepet WHERE id=?");
$sil->execute(array($sepetkaldiralim));





header("Location: ".$url."");
}



    function yuzdeHesaplama($sayi,$sayi2){
    $newsayi = $sayi - $sayi2;	
	$yuzdelik = $sayi/100;
	$son = $newsayi/$yuzdelik;
    return substr($son,0,2);
   } 
   

   
?>
<style>


.old-price {
  color: #aba4a4;
  font-size: 14px;
  font-weight: 600;
  text-decoration: line-through;
}


.stories.carousel {
  white-space: nowrap;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  overflow-scrolling: touch;
  box-shadow: none !important;
}

.stories.snapgram .story > .item-link > .item-preview {
  border-radius: 50%;
  padding: 2px;
  background: <?php echo $tema['t37'];?> !important;
}

#zuck-modal-content .story-viewer .head .back, #zuck-modal-content .story-viewer .head .right .close {
  font-size: 42px;
  width: 48px;
  height: 48px;
  line-height: 48px;
  cursor: pointer;
  text-align: center;
  color:white !important;
}
</style>
<!-- TEMA EKSTRALARI -->
<?php if($_GET['oziywebs']=='urun'){	
$idx = temizle($_GET['id']); 
$durumx = "1";
$sayfaqqx = $ozy->prepare("SELECT * FROM urunler WHERE seo=:id and durum=:durum");
$pagex = $sayfaqqx->execute([':id' => $idx,':durum' => $durumx]);
$pagex = $sayfaqqx->fetch(PDO::FETCH_ASSOC);

if($pagex['idurum']=='1'){								
if($pagex['kdv']>'0'){
$yenifiyatx = fiyatgoster(KdvDahil($pagex['ifiyat'],$pagex['kdv']));
} else {
$yenifiyatx = fiyatgoster(KdvDahil($pagex['ifiyat'],$system['kdv']));
}
} else {
if($pagex['kdv']>'0'){
$yenifiyatx = fiyatgoster(KdvDahil($pagex['fiyat'],$pagex['kdv']));
} else { 
$yenifiyatx = fiyatgoster(KdvDahil($pagex['fiyat'],$system['kdv']));
}} 

if($pagex['ucretsizkargo']=='1'){
	$kargommmmmmmmmmmmmmmmmmmm = "/ KARGO BEDAVA"; 
}

if($pagex['alode']=='1'){
	$alodeeeeeee = "/ BU ÜRÜNDE ".$pagex['al']." AL ".$page['ode']." ÖDE FIRSATI"; 
}	
	
$metadesc ="".$pagex['adi']."  Sadece ".$yenifiyatx." ".$kargommmmmmmmmmmmmmmmmmmm." ".$alodeeeeeee."";

?>
<meta name="og:description" content="<?php echo $metadesc; ?>">
<meta property="og:image" content="<?php echo $url; ?>/resimler/urunler/<?php echo $pagex['resim']; ?>"/>
<?php }?>  
</head>
<body class="body">
 
<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>
 
 <div class="section-bant-01">
    <div class="div-block-4461292308">
        <div class="w-row">
            <div class="column-163 w-col w-col-2 w-col-small-4 w-col-tiny-6">
                <div class="div-block-4461292309">
                    <a href="gununfirsati/" class="link-up"><strong class="bold-text-25">Süper Fırsatlar</strong></a>
                </div>
            </div>
            <div class="column-165 w-col w-col-2 w-col-small-4 w-col-tiny-6">
                <div class="div-block-4461292309">
                    <a href="kampanyalar/" class="link-up"><strong class="bold-text-25">Kampanyalar</strong></a>
                </div>
            </div>
           
            <div class="column-164 w-col w-col-2 w-col-small-4 w-col-tiny-6">
                <div class="div-block-4461292309">
                    <a href="siparissorgulama/" class="link-up"><strong class="bold-text-25">Kargom Nerede ?</strong></a>
                </div>
            </div>
         
            <div class="w-col w-col-2 w-col-small-4 w-col-tiny-6">
                <div class="div-block-4461292309">
                    <a href="urunkarsilastirma/" class="link-up"><strong class="bold-text-25">Karşılaştırma Listem</strong></a>
                </div>
            </div>
			
			 <div class="w-col w-col-2 w-col-small-4 w-col-tiny-6">
                <div class="div-block-4461292309">
                    <a href="iletisim/" class="link-up"><strong class="bold-text-25">Çözüm Merkezi</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="HEADER" class="section-header">
    <a href="#HEADER" class="link-block w-inline-block"><i class="fa fa-arrow-up"></i> <span>Yukarı Çık</span></a>

    <div class="div-block-4461292266">
        <div class="header">
            <div class="columns-19 w-row">
                <div class="column-161 w-col w-col-3">
                    <div class="div-block-4461292290">
                        <a href="<?php echo $url;?>" aria-current="page" class="w-inline-block w--current">
                            <img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" loading="lazy" width="252" alt=""></a>
                    </div>
                </div>
                <div class="column-118 w-col w-col-5">
                    <div class="div-block-4461292289">
                        <form name="myform" action="arama/" method="GET" class="search w-form">
                            <input type="text" class="search-input w-input" maxlength="256" name="arama" placeholder="Ne aramıştınız..." required>
                            <div id="citylist"></div>
                            <input type="submit" value="" class="search-button w-button">

                        </form>
                        
                    </div>
                </div>
                <div class="column-119 w-col w-col-4">
                    <div class="div-block-489 w-clearfix">
                        <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	 
                        <a href="hesabim/" class="button-login w-button">Hoşgeldin, <?php echo $uyebilgileri['isim'];?></a>
                        <a href="cikis/" class="button-registerx w-button">Çıkış Yap</a>
                        <?php } else { ?>
						<a href="uyeol/" class="button-login w-button">Giriş Yap</a>
                        <a href="uyeol/" class="button-register w-button">Üye Ol</a>
                        <?php } ?>
						
						
                            <div data-hover="" data-delay="0" class="dropdown-88 w-dropdown">
                                 <a href="favorilerim/">
								 <div class="dropdown-toggle-99 w-dropdown-toggle"></div></a>
                             
                            </div>
							
							
                         
							
							<div class="dropdown-8 w-dropdown">
                                <a href="sepet/"><div class="dropdown-toggle-9 w-dropdown-toggle"></div>
                                <nav class="dropdown-list-6 w-dropdown-list" id="HeaderSepet">
        
                                </nav></a>
                            </div>
							
							
                            <div class="div-block-4461292295">
                                <div class="text-block-131" id="SepetAdetListesi"><?php echo $sepetsayi;?></div>
                            </div>

							
							
							

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div-block-nav-menu">
        <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar-2 w-nav">
            <div class="container-2 w-container" style="padding:0">
                <div class="webgoster">
                <nav role="navigation" class="nav-menu-2 w-nav-menu">
                    
					
					
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

               <?php if($katadi['ac']=='1'){?>	
					
                    <div data-hover="1" data-delay="0" class="dropdown-7 w-dropdown" style="max-width: 1280px;">
                        <div class="dropdown-toggle-8 w-dropdown-toggle" id="w-dropdown-toggle-1" aria-controls="w-dropdown-list-1" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                            <div class="icon-10 w-icon-dropdown-toggle"></div>
                            <div class="text-block-125" onclick="window.location.href='kategori/<?php echo $katadi['seo']; ?>';"><?php echo $katadi['adi']; ?></div>
                        </div>
                        
                        <nav class="dropdown-list-5 w-dropdown-list" id="w-dropdown-list-1" aria-labelledby="w-dropdown-toggle-1">
                            <div>
                                <a href="kategori/<?php echo $katadi['seo']; ?>" class="link-block-6 w-inline-block text-d" tabindex="0">
                                    <div class="div-block-4461292272 text-d">
                                        <div class="text-block-126"> <?php echo $katadi['adi']; ?></div>
                                    </div>
                                </a>
                                <div class="columns-22 w-row">
                                    <div class="w-col w-col-9 w-col-medium-6 w-col-small-6">
                                    
	           <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
                                    <div class="w-col w-col-4 w-col-medium-6 w-col-small-6" style="min-height:165px">
                                        <div class="div-block-4461292271">
                                            <div class="div-block-4461292352">
                                                <a href="kategori/<?php echo $katadi2['seo']; ?>" class="link-11" tabindex="0"><?php echo $katadi2['adi']; ?></a>
                                            </div>
                                            
                <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>	
                 <a  href="kategori/<?php echo $katadi22['seo']; ?>" class="dropdown-link-5 w-dropdown-link katlink" tabindex="0">
				 <?php echo $katadi22['adi']; ?></a>
                
				<?php } ?>                     
										  
                                        </div>
                                    </div>
                                    

                                    <?php } ?>	



                                 
                                    </div>

                                  
                                    
                                </div>
                            </div>
                        </nav>
                        
                    </div>
                    
            
			
			
			   <?php } else { ?>		
					  
                
				  
				  					
                    <div data-hover="1" data-delay="0" class="dropdown-7 w-dropdown" style="max-width: 1280px;">
                        <div class="dropdown-toggle-8 w-dropdown-toggle" id="w-dropdown-toggle-1">
                            <div class="icon-10 w-icon-dropdown-toggle"></div>
                            <div class="text-block-125" onclick="window.location.href='kategori/<?php echo $katadi['seo']; ?>';"><?php echo $katadi['adi']; ?></div>
                        </div>
                    
                        
                    </div>
                    
				  
				  
				  
				  
				    <?php }} ?>
                   
			
			
			
			
			

                </nav>

                </div>
<div class="mobilgoster">


                    <nav id="cssmenu">
                    <div id="head-mobile" style="color: white;"> ÜRÜN KATEGORİLERİMİZ</div>
                    <div class="button"></div>
                    <ul class="" style="display: none;">
                    
				<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattt as $katadi){?>

                <?php if($katadi['ac']=='1'){?>
					
                    <li class="has-sub">
					
					
					<span class="submenu-button"></span>
					<a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
                       
                        <ul style="display: none;">
                            
                <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
				<?php if($katadi2['ac']=='1'){?>
				
				
                          <li class="has-sub"><span class="submenu-button"></span>
						  <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                             
                              <ul style="display: none;">
                                    
                                 	<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
				 <li><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                 <?php } ?>	
							    
                             </ul>
                              
                          </li>
						  
						  
						<?php } else { ?> 


                  <li>
				 
						  <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
                             
                           
                          </li>
						  
						
						  
                        <?php }} ?>
                            
                       </ul>
                       
                    </li>
					
					
					
					
					  <?php } else { ?>		
					  
                      <li class="level-1 ">
                        <a href="kategori/<?php echo $katadi['seo']; ?>" class=""
                          >
                        <span>
                        <?php echo $katadi['adi']; ?>
                        </span>
                        </a>
                      
                      </li>
                  
				    <?php }} ?>
                   
					
					
					
					
					
					
					
                    </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>

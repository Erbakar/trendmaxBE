    <?php define("guvenlik",true);?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <link rel="mask-icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>" color="#666666">
    <link rel="shortcut icon" href="resimler/siteayarlari/<?php echo $ayar['favicon']; ?>">
    <!-- Plugins CSS File -->
<link href="http://fonts.googleapis.com/css?family=Ruda:400,700&amp;subset=latin-ext" rel="stylesheet" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Dosis&amp;subset=latin-ext" rel="stylesheet" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <script src="<?php echo $sitetemasi;?>/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
   <link href="<?php echo $sitetemasi;?>/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
   <script src="<?php echo $sitetemasi;?>/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <link href="<?php echo $sitetemasi;?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $sitetemasi;?>/stylesheet/stylesheet.css" rel="stylesheet">
   <link href="<?php echo $sitetemasi;?>/javascript/jquery/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
   <script src="<?php echo $sitetemasi;?>/javascript/jquery.lazyload.min.js" type="text/javascript"></script>
   <script src="<?php echo $sitetemasi;?>/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- ////////////////////LİGHTBOX ALANI /////////////-->
   <link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
   <script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>
    <!-- ////////////////////LİGHTBOX ALANI /////////////-->
   <?php echo $ayar['google']; ?>
   <?php echo $ayar['yandex']; ?>
   <?php echo $ayar['reklam']; ?>
</head>
<body class="common-home">

		
		<div <?php echo $tema['t13'] == '0' ? 'style="display:none;"' : null; ?>>
		
		<a href="<?php echo $tema['t13']; ?>"><img   style="width: 100%;" src="resimler/temaayarlari/<?php echo $tema['t12']; ?>" alt="banner"></img></a>
	
		</div>

  
<div class="outer-wrapper">
<div class="mobile-menu-wrapper">
		<div class="mobile-menu-inner">
			
			<ul class="mobile-menu">
			<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
			<li><a href="hesabim/"><i class="fa fa-user-plus"></i> Hesabım</a></li>	
			<li><a href="cikis/" class="sign-in"><i class="fa fa-sign-out"></i> Çıkış Yap</a></li>
			<?php } else { ?>
			<li><a href="uyeol/"><i class="fa fa-user-plus"></i> Üye Ol</a></li>	
			<li><a href="uyeol/" class="sign-in"><i class="fa fa-unlock-alt"></i> Giriş Yap</a></li>
			<?php } ?>
			
				<li><a href="siparissorgulama/" title="Sipariş Sorgulama"><i class="fa fa-truck"></i> Sipariş Sorgulama</a></li>
			
			<li><a href="sepet/" title="Sepetim"><i class="fa fa-shopping-cart"></i> Sepetim</a></li>
		
			
			
			</ul>
			
			
			<div class="clearfix"></div>
			<ul class="mobile-menu">
			
			<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($ustkattt as $katadi){?>

            <?php if($katadi['ac']=='1'){?>
			
			<li class="menu-item-has-children">
			<a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a>
			
			<ul class="sub-menu">
			<?php 
            $ustkatid = $katadi['id'];
			$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($ustkattta as $katadi2){?>	
			<li class="menu-item-has-children">
			<a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
			
			<ul class="sub-menu">
			<?php 	
			$ustkatid2= $katadi2['id'];
			$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
            foreach($ustkatttaz as $katadi22){?>
			<li><a href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
			<?php } ?>													
			</ul>
			
			</li>
			<?php } ?>													
			</ul>
			
			
			
			
			</li>
			
			 <?php } else { ?>		  
			               
			<li><a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a></li>
						   
						 
			<?php }} ?>
			
			
			
																								
			</ul>
		</div>
	</div>
	
	<div class="site-wrapper">
		<div class="site-wrapper-overlay"></div>
		
		<div class="stk">
        <header class="mobile-header  hidden-md hidden-lg">
			<div class="container">
				<div class="row">
					<div style="padding:0px;" class="col-xs-3">
						<a href="javascript:void(0);" class="to-navigation"></a>
					</div>
					<div class="col-xs-6 text-center">
						<div id="logo">
						<a href="anasayfa">
						<img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" title="Logo"  alt="Logo" class="img-responsive" /></a>
						</div>
					</div>
					<div  style="padding:0px;" class="col-xs-3">
						<a href="javascript:void(0);" class="to-search"></a>
					</div>
				</div>
			</div>
			<div class="mobile-search  hidden-md hidden-lg" id="hecader">
			   <form action="arama/" method="GET">
			<div id="search" class="input-group">
  <input type="text" name="arama" value="" placeholder="Ne aramıştınız?" class="form-control input-lg" required>
  <span class="input-group-btn">
    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
  </span>
</div>
</form>
</div>
		</header>
		</div>
	</div>


        <div id="ust-kisim">

<nav id="top" class="hidden-xs hidden-sm">
  <div class="container">
            <span class="menu-icon visible-sm visible-xs"><i class="fa fa-bars"></i></span>
    <div class="pull-left left-top">
      <div class="costom-links">
        <ul>
                    <li><a href="siparissorgulama/"><i class="fa fa-truck"></i>&nbsp; Sipariş Sorgulama</a>
                    </li>
                    <li><a href="bankabilgilerimiz/"><i class="fa fa-university"></i>&nbsp; Banka Hesaplarımız</a></li>
                    <li><a href="iletisim/"><i class="fa fa-location-arrow"></i>&nbsp; İletişim</a></li>
                  </ul>
      </div>
    </div>
          
        <div class="pull-right">
      <div class="btn-group">
        <a href="favorilerim/" class="btn btn-link" id="wishlist-total" title="Favorilerim"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Favorilerim (<?php echo $favorisayisi;?>)</span></a>
      </div>
    </div>
       <div class="pull-right">
      <div class="btn-group">
	  <?php $katsay = $ozy->prepare("SELECT COUNT(*) FROM karsilastir where gelenkim='$sepetimdekikim'");
      $katsay->execute();
      $katsayisimiz = $katsay->fetchColumn();?>
        <a href="urunkarsilastirma/" class="btn btn-link" id="compare-total" ><i class="fa fa-clone"></i> <span class="hidden-xs hidden-sm hidden-md">Karşılaştır (<?php echo $katsayisimiz;?>)</span></a>
      </div>
    </div>
	
		                            <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
                                    <a href="cikis/" class="btn btn-link pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış Yap</a>
									<a href="hesabim/" class="btn btn-link pull-right"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Hesabım</a>
                                   
									<?php } else { ?>
								     <a href="uyeol/" class="btn btn-link pull-right"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Üyelik İşlemleri</a>
                                    <?php } ?>
	
        
      </div>
</nav>
<header class="desktop-header hidden-xs hidden-sm" style="background-color: #fff;box-shadow: 0 -9px 9px -6px rgba(0, 0, 0, 0.03);">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div id="logo">
         <a href="anasayfa">
		 <img src="resimler/siteayarlari/<?php echo $ayar['logo'];?>" title="Logo" alt="Logo" class="img-responsive" /></a>
         </div>
      </div>
	  
     <div class="col-lg-4">
	<form action="arama/" method="GET">
     <div  class="input-group" style="margin-top: 7%;">
	  
      <input type="text" name="arama" value="" style="background-color: #fafafa;text-align: left;     text-transform: capitalize;" placeholder="Ne aramıştınız?" class="form-control input-lg" required>
      <span class="input-group-btn">
      <button type="submit" class="btn btn-default btn-lg" style="height: 45px;border: 1px solid #a3a3a3;"><i class="fa fa-search"></i></button>
      </span>
     </div>
	</form>	
      
    </div>
               
                              
      <div class="col-lg-5">
      
        <div class="col-lg-5">
			  <div class="contacts_header">
          <div class="contacts_icon">
            <i class="fa fa-phone"></i>
          </div>
          <div class="phones">
         <div><a href="tel:<?php echo $ayar['tel']; ?>">Telefonla Sipariş <br> <?php echo $ayar['tel']; ?></a></div>
       </div>
        </div>
		 </div>
		<div class="col-lg-5"> 
		<div class="header_schedule">
          <div class="schedule_icon">
            <i class="fa fa-clock-o"></i>
          </div>
          <div class="schedule">
            <div>ÜCRETSİZ KARGO<br>
<?php echo $system['ucretsizkargo']; ?> TL ve üzeri</div>
          </div>
        </div>
		</div>
       
         <div class="col-lg-2"> 
		  <div id="cart" class="btn-group btn-block">
          <button type="button" data-toggle="dropdown" data-loading-text="Yükleniyor..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
		  <i style="margin-left: -6px !important;" class="fa fa-shopping-bag" aria-hidden="true"></i> 
		  <div style="color: black;font-size: 14px;font-weight: 400;text-transform: capitalize;float: left !important;margin-left: -14px;position: absolute;">Sepetim</div>
		  
		  <span id="cart-total"><?php echo $sepetsayi;?></span>
		  </button>
		  
		  
      
		 
		  
         <ul class="dropdown-menu pull-right">
		 <?php if($sepetsayi>='1'){?>	
		 
		   <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
					
                                    <div class="product" style="margin-bottom: 20px !important;">
									
										<form action="" method="POST">
										<input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
                                        <button style="position: relative;float: right;" name="delete" type="submit" class="btn-remove" title="Sil"><i class="fa fa-close"></i></button>
                                        </form>	
                                        <div class="product-cart-details" style="width: 73% !important;float: right;">
                                            <h4 class="product-title" style="margin: 0px !important;min-height: 31px !important;font-size: 13px;">
                                                <a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?></br><?php echo $sepet['ekurun'];?></a>
                                            </h4>

                                         
                                                <span class="cart-product-qty"><?php echo $sepet['adet'];?></span>
                                                x <b style="color: #FF6F38;"><?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?></b>
                                         
											
									
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container" style="border-bottom: 1px solid #cec9c9;padding-bottom: 5px;">
                                            <a href="urun/<?php echo $sepet['seo'];?>" class="product-image">
                                                <img style="width: 60px;height: 90px;" src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="product">
                                            </a>
                                        </figure>
									
								    </div><!-- End .product -->
                                
                                 <?php }} ?>  
		 <li>
      <a href="anasayfa" style="text-align: center;padding: 10px;margin-top: 10px;width: 100%;background: #343333;"><button style="background: #343333 !important;"><i class="fa fa-angle-double-left" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">Alışverişe Devam</span></button></a>
	  <a href="sepet/" style="text-align: center;padding: 10px;margin-top: 10px;width: 100%;background-color: #FF6F38;"> <button><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Alışveriş Sepetim</span></button></a>
         </li>
		 <?php } else { ?>
         <li>
         <p class="text-center">Alışveriş sepetiniz boş!</p>
         </li>
		
		<?php } ?>
		
       </ul>
	   
	   
	   
     </div>
	 
	 
	 
	 
      </div>
        
      </div>
    </div>
  </div>
</header>


<div class="menu-wrapper hidden-xs hidden-sm">

<div class="container-fluid" id="ana-menum">
<div class="container">

<div class="table-cell text-center w60 menu-cell hidden-xs hidden-sm">
        <div class="main-menu">
            <ul class="categories">
                                   <!-- Top level items -->
<li class="">
<a href="anasayfa" class=" ">
<i class='icon icon-home'></i><span class="top">Anasayfa</span></a>
</li>                        <!-- Top level items -->
                     <!-- Top level items -->
                       <!-- Top level items -->
					   
					   
<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
foreach($ustkattt as $katadi){?>

<?php if($katadi['ac']=='1'){?>
<li class=" has-sub dropdown-wrapper from-bottom">
<a href="kategori/<?php echo $katadi['seo']; ?>" class=" ">
<span class="top"><?php echo $katadi['adi']; ?></span><i class='fa fa-angle-down'></i></a>
<!-- Sub Menu items -->
<div class="dropdown-content sub-holder dropdown-left " style="width:600px;">
<div class="dropdown-inner">
<div class="row">
<div class="col-lg-12">
<div class="menu-item">
<!-- CATEGORIES CONTENT -->
<div class="categories" >

<ul style="display: flex !important;margin-right:10px;padding-right:15px;">
				<?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>	
<li><a style="color: #474747 !important;
border-bottom: 1px solid #dcdbdb;" href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>

<ul style="margin: 0px !important;
padding: 0px;margin-right:10px;padding-right:15px;">
	<?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>												
															
                                                                <li><a style="font-weight: 400;" href="kategori/<?php echo $katadi22['seo']; ?>"><?php echo $katadi22['adi']; ?></a></li>
                                                       <?php } ?>	
                                                            </ul>


</li>

	<?php } ?>	

</ul>

</div>
</div>
</div>
</div> <!-- row -->
</div>
</div>
</li>                        <!-- Top level items -->
   


   <?php } else { ?>		  
			               
						   <li class=""><a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a></li>
						   
						 
						    <?php }} ?>   
</ul>



        </div>
    </div>
	  </div>
	   </div>
	   	   </div>
	  	   </div>
	   	    	   
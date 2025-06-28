<title>Ürün Karşılaştırma</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>


        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Ürün Karşılaştırma</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
          <div class="container">
        					<div class="row">
								
								<div class="col-sm-12 customer-login">
						<article>

<table>

  <tbody>
  <tr>
      <td></td>
	<?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	
    <td><span class="txt-l">
	 <a href="urun/<?php echo $karsilastirma['seo'];?>" class="product-image">
      <img style="width: 70px !important;" src="resimler/urunler/<?php echo $karsilastirma['resim'];?>" alt="product">
    </a>
                            
	</span></td>
	
    <?php } ?>	
	
	
    </tr>
    <tr>
      <td>Ürün Fiyatı</td>
    <?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	
    <td><span class="txt-l">
     <div class="newfiyat">
    <?php echo xurunfiyatbelirle($karsilastirma['kdv'],$karsilastirma['idurum'],$karsilastirma['fiyat'],$karsilastirma['ifiyat']);?>
               
                                                      
      </div>              
	</span></td>
	
    <?php } ?>	
    </tr>
    <tr>
      <td colspan="5" class="sep">Ürün Bilgileri</td>
    </tr>
	   <tr>
      <td>Ürün Adı</td>
      <?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	  
      <td><span><a href="urun/<?php echo $karsilastirma['seo'];?>" class="product-image"><?php echo $karsilastirma['adi'];?></a></span></td>
      
	<?php } ?>
    </tr>
    <tr>
      <td>Ürün Kodu</td>
	<?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	  
      <td><span><?php echo $karsilastirma['urunkodu'];?></span></td>
      
	<?php } ?>
    </tr>
 
   <tr>
      <td>Ürün Özeti</td>
	<?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	  
      <td><span><?php echo $karsilastirma['kisa'];?></span></td>
      
	<?php } ?>
    </tr>
	
	<tr>
      <td>Ürün Açıklaması</td>
	<?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	  
      <td style="width: 25% !important;"><span><?php echo $karsilastirma['aciklama'];?></span></td>
      
	<?php } ?>
    </tr>
	
	
 
    <tr>
      <td colspan="5" class="sep">Ürün Kampanyaları</td>
    </tr>
       <tr>
      <td>Kargo Durumu</td>
    <?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	<td><span>
    <?php if($karsilastirma['ucretsizkargo']=='1'){?>    
	<div class="product-cargo-button free_shipping">
	<i style="font-size: 18px;" class="icon-truck"></i>
	<span>BU ÜRÜNDE KARGO ÜCRETSİZ</span>
	</div>
    <?php } else { ?>	
	<?php } ?>	
	</span></td>													
	<?php } ?>
    </tr>
	<tr>
	<td>Al Öde Kampanyası</td>
    <?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	<td><span>
    <?php if($karsilastirma['alode']=='1'){?>    
	<div class="product-cargo-button free_shipping">
	<i style="font-size: 18px;" class="icon-shopping-cart"></i>
	<span>BU ÜRÜNDE <?php echo $karsilastirma['al'];?> AL <?php echo $karsilastirma['ode'];?> ÖDE FIRSATI</span>
	</div>
	<?php } else { ?>
	<?php } ?>
	</span></td>													
	<?php } ?>
    </tr>
	
	<tr>
      <td colspan="5" class="sep">Ürün İşlemleri</td>
    </tr>
	<tr>
	<td>Sepete Ekle</td>
    <?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	<td><span>
    <a style="background: <?php echo $tema['t37'];?>;
border: none;
border-radius: 4px;" href="urun/<?php echo $karsilastirma['seo']; ?>" class="btn btn-primary btn-default font-title" title="Ürünü İncele"><span>Ürünü İncele</span></a>
    
	</td></span>
	<?php } ?>
    </tr>

	<tr>
	<td>Listeden Kaldır</td>
    <?php $uyesepeti1 = $ozy->prepare("SELECT * FROM urunler 
	INNER JOIN karsilastir ON urunler.id = karsilastir.urunid  
	WHERE karsilastir.kim=? and karsilastir.gelenkim=? ORDER BY karsilastir.id DESC");                
	$uyesepeti1->execute(array($ip,$sepetimdekikim));
	foreach ($uyesepeti1 as $karsilastirma) {?>
	<td><span>
    <a href="?karsilastirmasil=<?php echo $karsilastirma['id']; ?>" class="gributton text-center" style="height: 40px;line-height: 0px;font-size: 13px;" title="Remove Product">Listeden Sil</a>
                                        
	</td></span>
	<?php } ?>
    </tr>

	
  </tbody>
</table>
  
</article>
                               
 <style>
		
		
article {
  width:100%;
  max-width:1000px;
  margin:0 auto;
  position:relative;
}

table { border-collapse:collapse;  width:100%; }
th { background:#F5F5F5; display:none; }
td, th {
  height:53px
}
td,th { border:1px solid #DDD; padding:10px; empty-cells:show; }
td,th {
  text-align:left;
}
td+td, th+th {
  text-align:center;
}
td.default {
  display:table-cell;
}
.bg-purple {
  border-top:3px solid #A32362;
}
.bg-blue {
  border-top:3px solid #0097CF;
}
.sep {
  background:#F5F5F5;
  font-weight:bold;
}
.txt-l { font-size: 20px;
font-weight: 500; }
.txt-top { position:relative; top:-9px; left:-2px; }
.tick { font-size:18px; color:#2CA01C; }
.hide {
  border:0;
  background:none;
}


.product-image {
  width: 100%;
display: block;
text-align: center;
margin: auto;
}



  @media screen and (max-width: 1000px){
  @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px){
.varyantablo table, thead, tbody, th, td, tr {
	display: revert !important;
}
}
}
</style>	
							
								</div>
							
							
							
						</div>
			
          </div>
        </section>

        <div class="clearfix"></div>  
		</div>
      
     
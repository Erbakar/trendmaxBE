<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php
if (isset($_GET['sepetsifirla'])) {
$karsilz = $ip;$gelenkim = temizle($sepetimdekikim);
$silxzz = $ozy->prepare("DELETE FROM sepet WHERE kim=?");
$silxzz->execute(array($karsilz));
header("Location: ".$url."/sepet/");
}
?>
	
		   <main class="main">
     
          <nav class="breadcrumb-nav mb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Alışveriş Sepetim</li>
                    </ul>
                </div>
            </nav>
   <div class="page-content pb-3">
                <div class="cart">
	                <div class="container">
	                	<div class="row">
						<?php if($sepetsayi<='0'){?>
						 <div class="col-md-12">
           
             
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
					<img style="margin: auto !important;" src="eklentiler/sepetbos.png" width="100" height="100" class="img-fluid mb-4 mr-3">
                        <h5><strong>Alışverişiz Sepetiniz Boş</strong></h5>
                        <h5>Biraz Gezinmeye Ne Dersin :)</h5> <a href="<?php echo $url;?>" class="btn btn-primary cart-btn-transform m-3" data-abc="true">hadi gezinelim</a>
                    </div>
                </div>
           
        </div>
<?php } else { ?>




<aside class="col-lg-9">
	
<?php if($toplamtutarim>=$system['ucretsizkargo']){?>
<div class="alert alert-success alert-dismissible" style="margin-top: 10px;margin-bottom: 15px;padding-left: 8px;padding-right: 8px;">
<i class="fa fa-check"></i> Tebrikler! <b>KARGO ÜCRETSİZ</b> fırsatını yakaladınız!
</div>
<?php } else { ?>
<div class="alert alert-warning alert-dismissible" style="margin-top: 10px;margin-bottom: 15px;padding-left: 8px;padding-right: 8px;color: #333;">
<i class="fa fa-exclamation-circle"></i> <b>Ücretsiz Kargo </b>İçin Kalan Tutar: <b><?php echo $kalan = $system['ucretsizkargo']-$toplamtutarim;?> TL</b><button type="button" class="close" data-dismiss="alert">×</button>
</div>
<?php } ?>
	
<div class="card">
<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase" style="border-bottom: 1px solid #e2dfdf;">
  <th scope="col urun" width="50%">Ürün</th>
  <th scope="col fiyat" width="15%">Fiyat</th>
  <th scope="col adet" width="15%">Adet</th>
   <th scope="col toplam" width="20%">Toplam</th>
  <th scope="col sil" class="text-right" width="5%">Sil </th>
</tr>
</thead>
<tbody>

<?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>

<tr style="border-bottom: 1px solid #e2dfdf;">
	<td class="coll">
		<figure class="itemside align-items-center">
			<div class="aside"><img src="resimler/urunler/<?php echo $sepet['resim'];?>" class="img-sm"></div>
			<figcaption class="info">
				<a href="urun/<?php echo $sepet['seo'];?>" class="title text-dark"><?php echo $sepet['adi'];?></a>
				<p class="text-muted small"><?php echo $sepet['ekurun'];?></p>
				<div class="badges" style="margin-top: 10px; display: inline-block;width: 300px;">
														
														<?php if($sepet['kargo']=='1'){?>
					                                    <span class="badge" style="border: 1px solid #2cc43c;padding: 5px;color: #2cc43c;">
					                                     KARGO ÜCRETSİZ
					                                    </span>
                                                        <?php } ?>
														 <?php if($sepet['alodedurum']=='1'){?> 
                                                        <span class="badge" style="border: 1px solid #d2ab13;padding: 5px;color: #d2ab13;">
					                                    <?php echo $sepet['alodemetin'];?></span>
                                                        <?php } ?>
					                                    </div>
			</figcaption>
		</figure>
	</td>
	<td class="coll">
		<div class="price-wrap"> 
			<var class="price"><?php echo fiyatgoster($sepet['fiyat']);?></var> 
		
		</div> <!-- price-wrap .// -->
	</td>
	<td class="coll"> 
			                       <form action="" method="POST">
		                                    <?php if($sepet['alodedurum']=='1'){?> 
											<?php $newstok = $sepet['adet']+$sepet['alodeadet'];?>
											<?php } else { ?>
											<?php $newstok = $sepet['adet'];?>
											<?php } ?>
			                                <?php if($system['sinirsizstok']!='1'){	?>
			                                <input type="number" class="form-control" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="<?php echo $sepet['stok'];?>"  size="2"  required>
                                            <?php } else { ?>
                                            <input type="number" class="form-control" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="9999999999999999999" required>
                                            <?php } ?>
		                                   <input type="hidden" name="sepetguncelle"/>
										   
						                   
		
	</td>
	<td class="coll">
		<div class="price-wrap"> 
			<var class="price" style="color: var(--color-price);"><?php echo fiyatgoster($sepet['fiyat']*$sepet['adet']);?></var> 
		
		</div> <!-- price-wrap .// -->
	</td>
	<td class="coll text-right"> 
		<form action="" method="POST">
										<input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
										<input type="hidden" name="urunid" value="<?php echo $sepet['urunid']; ?>"/>
										<button name="delete" type="submit" class="btn-remove" title="Sil">x</button>
                                        </form>	
	</td>
</tr>

	<?php }} ?> 

</tbody>
</table>
</form>
			
<div class="card-body border-top">
	<a href="sepet/?sepetsifirla" class="btn btn-success btn-block"> Sepeti Boşalt </a>
</div> <!-- card-body.// -->

</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-lg-3">

<div class="card mb-3">
<div class="card-body">


<form method="POST" action="">
	<div class="form-group">
		<label><b>Kupon Kodu</b></label>
		<div class="input-group">
			<input type="text" class="form-control" name="kuponadi" placeholder="İndirim Kuponu Kodunuz">
			<span class="input-group-append"> 
				<button class="btn btn-primary" style="background:<?php echo $tema['t8'];?>; !important;color:white;margin: 0px;" type="submit" name="kuponguncelle">Kupon Güncelle</button>
			</span>
		</div>
	</div>
	</form>


                                         <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
	                						
	                						<div class="form-group">
			            				    <form method="POST" action="">
			            					<div class="input-group" style="width: 100%;">
											
											<select name="kuponadi" class="form-control" style="background: #f9f9f9;margin-bottom: 10px;font-weight: 400;" onchange='this.form.submit()'>
											<option value="0">Aktif Hediye Çeklerim</option>
											<?php $uyeepostamiz = temizle($uyebilgileri['email']);
		                                    $cekoku = $ozy->query("select * from kuponlar where durum='1' and sekil='1' and epostalar like '%$uyeepostamiz%' and gtarih>='$buguntarihim' and kullanildi not like '%$uyeepostamiz%' order by id DESC")->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($cekoku as $hediyecek) {?>
											<option value="<?php echo $hediyecek['adi']?>"><?php echo $hediyecek['adi']?></option>
											<?php } ?>
				        					</select>
											
				        					<input type="hidden" name="cekguncelle">
											</div><!-- End .input-group -->
			            			
			            			         </div><!-- End .cart-discount -->
	                					
											
											<?php } ?>

</div> <!-- card-body.// -->
</div> <!-- card.// -->

<div class="card">
<div class="card-body">
		<dl class="dlist-align">
		  <dt>Ara Tutar:</dt>
		  <dd class="text-right"><?php echo $aratutari;?></dd>
		</dl>
		<dl class="dlist-align">
		  <dt>KDV:</dt>
		  <dd class="text-right"><?php echo $kdvtutari;?></dd>
		</dl>
		
		<dl class="dlist-align">
		  <dt>Kargo Bedeli:</dt>
		  <dd class="text-right"><?php echo $kargometni;?></dd>
		</dl>
		<?php if($kuponindirim!='0'){?>
		<dl class="dlist-align">
		  <dt>İndirim Kuponu Bedeli :</label></br><a style="font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?kuponsil">Kuponu Sil</a></dt>
		  <dd class="text-right text-danger">- <?php echo fiyatgoster($kuponindirim)?></dd>
		</dl>
		<?php } ?>
		
		<?php if($cekindirim!='0'){?>
		<dl class="dlist-align">
		  <dt>Hediye Çeki Bedeli :</label></br><a style="font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?ceksil">Hediye Çeki Sil</a></dt>
		  <dd class="text-right text-danger">- <?php echo fiyatgoster($cekindirim)?></dd>
		</dl>
		<?php } ?>
		
		
		
		
		
		
		<dl class="dlist-align">
		  <dt>Ödenecek Tutar:</dt>
		  <dd class="text-right text-dark b" style="font-size: 18px;font-weight: bold;"><strong><?php echo $toplamtutari;?></strong></dd>
		</dl>
		<hr>
		<?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
	    <a href="odeme/" style="background:<?php echo $tema['t8'];?>; !important;color:white;" class="btn btn-primary btn-block">ÖDEME ADIMINA GEÇ</a>
	    <?php } else { ?>
		<a href="kontrol/" style="background:<?php echo $tema['t8'];?>; !important;color:white;" class="btn btn-primary btn-block">ÖDEME ADIMINA GEÇ</a>
	    <?php } ?>
	
		
		
		<a href="anasayfa" class="btn btn-light btn-block">ALIŞVERİŞE DEVAM</a>
</div> <!-- card-body.// -->
</div> <!-- card.// -->

	</aside> <!-- col.// -->


	<link href="<?php echo $sitetemasi;?>/cart/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $sitetemasi;?>/cart/css/ui.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $sitetemasi;?>/cart/css/responsive.css" rel="stylesheet" />

	<!-- fonticon -->
	<link href="<?php echo $sitetemasi;?>/cart/fonts/fontawesome/css/all.min.cs" type="text/css" rel="stylesheet">
	<link href="<?php echo $sitetemasi;?>/cart/css/style.css" rel="stylesheet" />
	<script src="<?php echo $sitetemasi;?>/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
<style>


@media screen and (max-device-width: 480px) and (orientation: portrait){
.coll {
max-width: 25%;
}


.table-shopping-cart td:first-child {
 width: 100%;
max-width: 100%;
}

.table-shopping-cart.table th {
    max-width: 25%;
    float: left;
    padding: 5px !important;
    width: 15%;
}

.coll {
max-width: 100%;
float: left;
}

}		
.site-footer .footer-subscribe {


    display: none;
}

</style>
	
	<?php } ?>
							
	                	</div><!-- End .row -->
						
						
						</div>
						
						</div>
						
						</div>
						

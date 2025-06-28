<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE urunler SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>

<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM urunler WHERE seo=:id and durum=:durum");
$page = $sayfaqq->execute([':id' => $id,':durum' => $durum]);
$page = $sayfaqq->fetch(PDO::FETCH_ASSOC);

////////URUN FİYAT BELİRMELE ALANI///////

if($page['idurum']=='1'){								
if($page['kdv']>'0'){
$eskifiyat = fiyatgoster(KdvDahil($page['fiyat'],$page['kdv']));
$yenifiyat = fiyatgoster(KdvDahil($page['ifiyat'],$page['kdv']));
} else {
$eskifiyat = fiyatgoster(KdvDahil($page['fiyat'],$system['kdv']));
$yenifiyat = fiyatgoster(KdvDahil($page['ifiyat'],$system['kdv']));
}
} else {
if($page['kdv']>'0'){
$yenifiyat = fiyatgoster(KdvDahil($page['fiyat'],$page['kdv']));
} else { 
$yenifiyat = fiyatgoster(KdvDahil($page['fiyat'],$system['kdv']));
}} 

////////URUN FİYAT BELİRMELE ALANI///////									

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
        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			           <?php 
			            $urunkategori = $page['kategori'];
			            $kat = $ozy->query("select * from kategoriler where durum='1' and id='$urunkategori'")->fetchAll(PDO::FETCH_ASSOC); 
			            foreach($kat as $ukat){?>
			<li><a href="kategori/<?php echo $ukat['seo'];?>"><?php echo $ukat['adi'];?></a></li>
			 <?php } ?>
			<li><a><?php echo $page['adi']; ?></a></li>
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
      <section id="main" style="background: white;">
          <div class="container">
            <div class="row product-page pageMode-product" style="border: 1px solid #ddd;
text-align: left;
box-shadow: inset 0 0 8px 2px #eee;
-webkit-box-shadow: inset 0 0 8px 2px #eee;">
              <div class="col-xs-12 col-sm-12 col-md-9 bottom-padding-xs">  

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    
                  </div>
                </div>  

                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-box bottom-padding-xs" id="asd">

<style>
.carousel {
    margin-top: 20px;
}
.item .thumb {
	width: 25%;
	cursor: pointer;
	float: left;
}
.item .thumb img {
	width: 100%;
	margin: 2px;
}
.item img {
	width: 100%;	
}

</style>
      <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="resimler/urunler/<?php echo $page['resim']?>">
                </div>
                 <?php 
						$i =0;
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>
                <div class="item">
                    <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">
                </div>
                <?php } ?>	
            </div>
        </div> 
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="resimler/urunler/<?php echo $page['resim']?>"></div>
                    <?php 
						$i =1;
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 3")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>  
				   <div data-target="#carousel" data-slide-to="<?php echo $i++;?>" class="thumb">
				   <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"></div>
                 <?php } ?>	
				 </div><!-- /item -->
                <div class="item">
                     <?php 
						$i =4;
					    $gelenid = $page['id'];
					    $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 3,4")->fetchAll(PDO::FETCH_ASSOC); 
                        foreach($sayfaresimi as $genelresim){?>  
				   <div data-target="#carousel" data-slide-to="<?php echo $i++;?>" class="thumb">
				   <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>"></div>
                 <?php } ?>
				 </div><!-- /item -->
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
  




                </div>                               
                
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
<style>
  #add-cart-form .numberQuan{display:inline-block;vertical-align:top}
  #add-cart-form .numberQuan label{color:#7f7f7f;font-weight:normal;line-height:54px;margin:0 7px 0 0;vertical-align:top}
  #add-cart-form .numberQuan input{color:#7f7f7f;display:inline-block;padding:15px 12px;text-align:center;vertical-align:top;width:80px}
  #add-cart-form .numberQuan .regulator{display:inline-block;vertical-align:top}
  #add-cart-form .numberQuan .regulator a{background:#666;border-radius:2px;color:#fff;display:block;height:15px;text-align:center;width:14px;-webkit-transition:background-color .2s linear;transition:background-color .2s linear}
  #add-cart-form .numberQuan .regulator a:hover{background-color:#1e1e1e;background-color:rgba(30,30,30,0.5);-webkit-transition:background-color .2s linear;transition:background-color .2s linear}
  #add-cart-form .numberQuan .regulator a .fa{line-height:14px;}
  #add-cart-form .numberQuan .regulator .number-up{margin:0 0 0 2px;line-height:14px;}
  #add-cart-form .numberQuan .regulator .number-down{margin:4px 0 0 2px;line-height:4px;}
</style>
<div class="store-title " style="padding: 10px;
  padding-bottom: 10px;
margin-top: 10px;
font-size: 17px;
padding-bottom: 0px !important;padding-left: 0px;">
                      <h5 style="margin-bottom:4px;"><?php echo $page['adi'];?></h5>
					  
					  <h6 style="font-weight: 400;margin-bottom:4px;">Ürün Kodu : <?php echo $page['urunkodu'];?></h6>
					 
					</div>
                    <div class="evaluation-box">
					
                      <div class="evaluation" style="border-bottom:none;">
                        <div class="rating-box">
                          <div class="rating icon" style="color:#cccbca;color: #c8c81f;">
                           <?php echo $page['yildiz'] == '1' ? '<i class="fa fa-star"></i>' : null; ?>
						   <?php echo $page['yildiz'] == '2' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $page['yildiz'] == '3' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $page['yildiz'] == '4' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $page['yildiz'] == '5' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>

						 </div>
                        </div>
                        <span><?php 
								      $sayfaid = $page['id'];
								      $urunyorumsayisi = $ozy->prepare("SELECT COUNT(*) FROM tumyorumlar where sayfaid='$sayfaid' and konu='urunler' and durum='1'"); 
									  $urunyorumsayisi->execute(); $urunyorumsayimis = $urunyorumsayisi->fetchColumn();?>
                                            <?php echo $urunyorumsayimis;?> yorum </span>
                      </div>
                    </div>                          

                    <form action="" method="POST" id="add-cart-form" class="add-cart-form" autocomplete="off">

                      <div class="post product-data product-price">

                        <div class="price-row">
						<?php if($page['idurum']=='1'){?>
                          <div class="data-tag red" style="background: transparent url('<?php echo $sitetemasi;?>/theme/progressive/img/pr-sprite.png') no-repeat top left;background-position-y: top;">
                            <span id="gainText">%<?php echo yuzdeHesaplama($page['fiyat'],$page['ifiyat']);?> indirim</span>
                            <div class="percent">kazancınız  <strong id="productDiscount" class="notranslate"><?php echo $indirimim = KdvDahil($page['fiyat']- $page['ifiyat'],$system['kdv']);?> TL</strong></div>
                          </div>
						<?php } ?>  
						  
						  <?php if($page['idurum']=='1'){?>
                          <div id="productOldPrice" class="price-old notranslate"><?php echo $eskifiyat;?></div>
                          <div class="clearfix"></div>
                          <div id="productPrice" class="price notranslate"><?php echo $yenifiyat;?></div>
						  <?php }else{?>  
						    
                          <div class="clearfix"></div>
                          <div id="productPrice" class="price notranslate"><?php echo $yenifiyat;?></div>
						  <?php } ?>
						  
                          <div class="price-tax notranslate">KDV<br>DAHİL</div>
                          
                          <div class="clearfix"></div>
                        </div>
						   <?php if($page['kdv']>'0'){?>	
								    <?php  $ekkdv = $page['kdv'];?>
									<?php } else { ?>
					                <?php  $ekkdv = $system['kdv'];?>
									<?php } ?>
									<?php if($page['havaledurum']=='1'){?>	
						  <div class="price-row" style="margin-top:10px;border-top: 2px solid #e4e0e0;">
						 
						  
						  <div id="" class="price notranslate" style="color: #666;font-size: 13px;
font-weight: 400;">İndirimli Havale Fiyatı</div>
                          <div class="clearfix"></div>
                          <div id="productPrice" class="price notranslate" style="font-size: 22px;"><?php echo $hfiyat = fiyatgoster(KdvDahil($page['hfiyat'],$ekkdv));?></div>
						  
						  
                          <div class="price-tax notranslate">KDV<br>DAHİL</div>
                          
                          <div class="clearfix"></div>
                        </div>
						
						 <?php } ?>
						
						
                        <div class="clearfix"></div>
        
                      </div>

                     

                      <div class="post product-data">
  
                         <?php 
								      $kod = $page['urunkodu'];
								      $varyant = $ozy->prepare("SELECT COUNT(*) FROM urunler where durum='1' and  urunkodu='$kod'");
                                      $varyant->execute();
                                      $varyantsayi = $varyant->fetchColumn();?>
							<div <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
								<h5 style="font-size: 14px;
margin-bottom: 10px;">Renk Seçenekleri</h5>
								<div class="image_option_type form-group required" <?php echo $varyantsayi <= '1' ? 'style="display:none;"' : null; ?>>
									<ul style="padding: 0px;list-style: none;
" class="product-options clearfix" id="input-option231">
									<?php 
										$sayfaidmiz = $page['id'];
										$urunvaryant = $ozy->query("select * from urunler where durum='1' and urunkodu='$kod' and id!='$sayfaidmiz' ORDER BY sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                                        foreach($urunvaryant as $varyantbak){?>  
										<li class="" style="float:left;margin-left:5px;">
											<a href="urun/<?php echo $varyantbak['seo'];?>">
												<img style="width: 40px;
height: 50px;" src="resimler/urunler/<?php echo $varyantbak['resim'];?>"  class="img-thumbnail icon icon-color">	
										</a>
										</li>
										<?php } ?>	
										
									
									</ul>
								</div>
								</div>
						
						
								


		    <?php 
									$urunid = $page['id'];
									$ozellik = $ozy->query("select * from anaozellik where tip='0' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellik as $anaozellik){?>  
                                    <div class="details-filter-row details-row-size">
                                        <label for="size" style="width: 100%;font-weight: 500;"><?php echo $anaozellik['adi'];?> :</label>
                                        <div class="select-custom" style="width: 100%;">
                                    <select class="form-control varyantselect" onchange="detayfiyathesapla(this);" name="ozellik[]" id="size"  required>
                                    <option data-price="0.00" value="">Seçim Yapınız</option>
									<?php 
									$altanaid = $anaozellik['id'];
									$ozellikalt = $ozy->query("select * from anaozellikalt where anaid='$altanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($ozellikalt as $anaozellikalt){?> 		
                                    <option data-price="<?php echo KdvDahil($anaozellikalt['fiyat'],$ekkdv);?>" value="<?php echo $anaozellikalt['id'];?>" <?php echo $anaozellikalt['stok'] <= '0' ? 'disabled' : null; ?>><?php echo $anaozellikalt['adi'];?> <?php echo $anaozellikalt['stok'] <= '0' ? '(Tükendi)' : null; ?></option>
                                    <?php } ?>	  
                                    </select>
                                        </div><!-- End .select-custom -->

                                    </div><!-- End .details-filter-row -->
								
								   <?php } ?>	
								   
								   
                                    <?php 
									$urunid = $page['id'];
									$iozellik = $ozy->query("select * from anaozellik where tip='1' and urunid='$urunid' ORDER BY id desc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellik as $ianaozellik){?>  
									
                                    <div class="details-filter-row details-row-size" style="background: #fbf8f8;padding: 10px;width: 100%;display: flex;">
                                    <label for="size" style="width: 100%;font-weight: 500;"><?php echo $ianaozellik['adi'];?> :</label>
									<?php 
									$ialtanaid = $ianaozellik['id'];
									$iozellikalt = $ozy->query("select * from anaozellikalt where anaid='$ialtanaid' ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); 
                                    foreach($iozellikalt as $ianaozellikalt){?>
			                        <label class="size-item">
				                    <input onclick="detayfiyathesapla(this);" data-price="<?php echo KdvDahil($ianaozellikalt['fiyat'],$ekkdv);?>" class="varyantradio form-control" type="radio" name="ozellik[]" level="2" <?php echo $ianaozellikalt['stok'] <= '0' ? 'disabled' : null; ?> value="<?php echo $ianaozellikalt['id'];?>" stocksize="<?php echo $ianaozellikalt['adi'];?>" available="1" required>
				                    <span <?php echo $ianaozellikalt['stok'] <= '0' ? 'style="border-color: #eee;
color: #3f3a3a;
background: #fbf8f8;"' : null; ?> class="size-slt-box" level="2" value="<?php echo $ianaozellikalt['id'];?>" name="ozellik[]"><?php echo $ianaozellikalt['adi'];?></span></label>
				                    <?php } ?>
                                    </div>
									 
                                    <?php } ?>



                                    <input type="hidden" value="<?php echo $page['id'];?>" name="urunid"/>
									
			   
						
						 <div class="product-options-table product-variants-single bottom-padding-xs">
                        <table class="table no-margin">
                          <tbody>

                            <tr>
                              <td>Adet</td>
                              <td class="product-options-variant">

                                <div class="numberQuan">
                                  <input type="text" value="1" class="form-control changePrice" name="adet" max="<?php echo $page['stok'];?>" min="1">
                                  <div class="regulator">
                                    <a href="#" class="number-up"><i class="fa fa-angle-up"></i></a>
                                    <a href="#" class="number-down"><i class="fa fa-angle-down"></i></a>
                                  </div>                          
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td class="quantity">Stok :</td>
                              <td class="quantity">
                              <?php if($page['stok']>='1'){?>
								<span class="status-stock" style="color:green;">Stokta var</span>
								<?php } else { ?>
								<span class="status-stock" style="color:red;">Tükendi</span>
								<?php } ?></td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
						
						
						
						
						
		
                        <div class="seperator-row"></div>

                       
                              <div class="button-row " data-productsid="1445">
						<?php if($page['stok']>='1'){?>
                          <button class="btn btn-warning add-cart"  name="sepetle" type="submit"> <i style="color:white;" id="icon-added" class="fa fa-shopping-bag" style="width:20px;"></i> SEPETE EKLE</button>
						   <?php } else { ?>  
						   <button class="btn btn-danger add-cart" type="button">TÜKENDİ</button>
						  
						<?php } ?>
			<?php if($system['whatsapal']=='1'){?>			  
                          <a class="btn btn-success add-cart" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text=<?php echo $page['adi']; ?>%20sipari%C5%9Fi%20vermek%20istiyorum. <?php echo $url;?>/urun/<?php echo $page['seo']; ?>"><i style="color:white;" id="icon-added" class="fa fa-whatsapp" style="width:20px;"></i> WHATSAPP İLE SATIN AL</a>
                	 <?php } ?>    
					 
					<?php if($system['telefonal']=='1'){?>	  
                          <a style="background: #000b44;
color: white;
width: 99%;
margin-top: 5px;" class="btn btn-success add-cart" target="_blank"  href="tel:<?php echo $ayar['ceptel']; ?>"><i style="color:white;" id="icon-added" class="fa fa-phone" style="width:20px;"></i> TELEFON İLE SATIN AL</a>
                	 <?php } ?>   


					 

					   </div>

                        <div class="clearfix"></div>
                      </div>
                    </form>


					<script>
					  $(function(){ 
						//Regulator Up/Down
						$('#productPriceTemp').val($("#installmentPrice").val());
						
						$('.number-up').click(function(){
							var $value = ($(this).closest('.numberQuan').find('input[type="text"]').attr('value'));
							
							var val = parseInt($(this).closest('.numberQuan').find('input[type="text"]').attr('value'));
							var maxx = parseInt($(this).closest('.numberQuan').find('input[type="text"]').attr('max'));
							
							if(val < maxx) {							
							  $(this).closest('.numberQuan').find('input[type="text"]').attr('value', parseFloat($value)+1);							
							  var $input = $("#productQuantity");	
							  $input.val(parseFloat($value)+1).trigger("change"); 

							}
							return false;
						});
						
						$('.number-down').click(function(){
							var $value = ($(this).closest('.numberQuan').find('input[type="text"]').attr('value'));

							var val = parseInt($(this).closest('.numberQuan').find('input[type="text"]').attr('value'));
							var minn = parseInt($(this).closest('.numberQuan').find('input[type="text"]').attr('min'));

							if (minn < val){
							  $(this).closest('.numberQuan').find('input[type="text"]').attr('value', parseFloat($value)-1);
							  var $input = $("#productQuantity");	
							  $input.val(parseFloat($value)-1).trigger("change"); 
							  var newVal = parseInt($(this).closest('.numberQuan').find('input[type="text"]').attr('value'));

							}
  
							return false;
						});
												
						$('#productQuantity').bind('keyup',function() {
						  if($(this).attr('id')=='productQuantity'){  
							var newQty = parseInt($(this).val());
							var $value = ($(this).closest('.numberQuan').find('input[type="text"]').attr('value'));
							$(this).closest('.numberQuan').find('input[type="text"]').attr('value', newQty);

						  }
						});	

					  });
                    </script>
                    
					<script>
					  $(function(){ 
					    $('#cartClose').click(function(){
						  $('#modalShoppingCart').modal('hide');
						});

					    $('#goToMyCart').click(function(){
						  $('#modalShoppingCart').modal('hide');
						  var timerID = setInterval(function(){
							clearInterval(timerID);
							
							window.location = '/sepetim';
						  }, 800);						  
						});
					  });
					</script>  
									<div class="seperator-row"></div>
<?php if($page['ucretsizkargo']=='1'){?>
                         <div style="text-align: center;
background: #d90a0a;
color: white;
padding: 5px;
border-radius: 3px;
margin-bottom: 5px;
font-size: 11px;"><i class="fa fa-truck"></i>
						
BU ÜRÜNDE KARGO ÜCRETSİZ                   
                        
						  </div>	
						  <?php } ?>
						  
						  <?php if($page['alode']=='1'){?>
						  <div style="text-align: center;
background: #dedee2;
color: #3c3b3b;
padding: 5px;
border-radius: 3px;
margin-bottom: 5px;
font-size: 11px;">
						  <i class="fa fa-gift"></i>
BU ÜRÜNDE <?php echo $page['al'];?> AL <?php echo $page['ode'];?> ÖDE FIRSATI                 
                         
					</div>	  
						  <?php } ?>

                     
                      <div class="social-box bottom-padding-xs" data-productsid="1445">                      
                      <div class="left">
                        <a rel="nofollow" class="mobile-whatsapp whatsapp" title="Whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $ayar['whatsapp']; ?>&amp;text= Baksana ne buldum:) <?php echo $page['adi']; ?> <?php echo $url;?>/urun/<?php echo $page['seo']; ?>"><i class="fa fa-whatsapp"></i></a>
                        <a rel="nofollow" class="web-facebook b-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>                          
                        <a rel="nofollow" class="twitter" title="Twitter" href="https://twitter.com/intent/tweet?url=<?php echo $url;?>/urun/<?php echo $page['seo']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>                          
                      </div>  
                      <div class="left">

                        <a rel="nofollow" class="add-wishlist social" href="?favoriekle=<?php echo $page['id']; ?>" title="Favorilerime Ekle"><i class="fa fa-heart-o"></i></a>
                      <a style="background-color: #038347;" rel="nofollow" class="add-wishlist social" href="?karsilastir=<?php echo $page['id']; ?>" title="Karşılaştırma Listene Ekle"><i class="fa fa-random"></i></a>

                        <a rel="nofollow" class="complainded" href="iletisim/" title="Şikayet Et" data-toggle="modal" data-target="#modalComplainded"> <span><i class="fa fa-user-times"></i> Şikayet Et</span></a>                        
                      </div>
                      <div class="right">
                        <button onclick="window.print()" style="color:#666;" rel="nofollow" class="advertprint"  title="Yazdır"><i class="fa fa-print"></i></button>                        
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>                
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="product-tab stores-menu bottom-padding-xs">
                  <ul class="nav nav-tabs stores">
                    <li class="active"><a href="#description" title="Ürün Bilgileri">Ürün Açıklaması</a></li>
                  <li><a href="#storesComments" title="Yorumlar (0)">Ürün Yorumları (<?php echo $urunyorumsayimis;?>)</a></li>

                    <li><a href="#storesAsk" title="İade & Değişim Şartları">İade & Değişim Şartları</a></li>

                    
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                      <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="overlay"></div>
                          <div class="holder">
                         <?php echo $page['aciklama'];?>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                   

                    <div class="tab-pane fade" id="storesAsk" data-mode="storesAsk">
                      <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="overlay"></div>
                          <div class="holder">
						  <?php echo $system['iade']; ?>		
						  </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <style>
					   .storesComments{text-align: center;min-height: 200px;padding: 10px 0;}
					</style>
                    <div class="tab-pane fade" id="storesComments">                 

					  <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="storesComments">
					<div class="comments">
                    <?php if($urunyorumsayimis>'0'){?>
                      
                    <?php } else { ?>
					<h5>Bu ürüne henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h5><!-- End .title -->
					<?php } ?>	

                                <ul style="padding: 0px !important;">
								
								
				<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='urunler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                                <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto" style="border-radius: 6px;text-align: left;border: 1px solid #f6f3f3;padding: 18px">
                                                
                                            
                                                <span class="review-date" style="">
												
										
									
												
												
												
												<?php echo $blogyorum['tarih']; ?></span>
                                           
   <h6 style="  margin-bottom: 10px;"><a><?php echo $blogyorum['adi']; ?></a></h6>
											  <div class="ratings" style="color: #eee006;">
										 <?php echo $blogyorum['yildiz'] == '1' ? '<i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '2' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '3' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '4' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
						   <?php echo $blogyorum['yildiz'] == '5' ? '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' : null; ?>
</div>
			
                                                <div class="review-content">
                                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                                </div><!-- End .review-content -->

										   </div><!-- End .col -->
                                            <div class="col">
                                            
                                        <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
                                                <div class="review-action" style="text-align: left;
padding: 20px;
border: 1px solid #e7e3e3;
border-radius: 0%;
background: #fafafa;">
                                                
												<div class="comment">
                                                   

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h6 style="  margin-bottom: 10px;"><?php echo $ayar['siteadi']; ?></h6>
														
															<?php echo $blogyorum['cevap']; ?>
                                                        </div><!-- End .comment-user -->

                                                      
                                                    </div><!-- End .comment-body -->
                                                </div><!-- End .comment -->
												
												
												</div><!-- End .review-action -->
												
												<?php } ?>
												
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div> 

									
                       <?php } ?>
								 
								 
								 
								 
								 
								 
								 
								 
								 
                                </ul>
                            </div>
					
			   
			   
			     
              <form class="form-horizontal" method="POST" action="" style="  text-align: left;">
                <div id="review"></div>
                <h6>Yorum Yap</h6>
				 <p class="title-desc" style="color: #d81818;border: 1px solid #f4f3f3;padding: 10px;font-size: 14px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.</p>
                  <div class="form-group required" style="width: 100%;
text-align: left;">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Adınız Soyadınız</label>
                    <input style="    max-width: 100%;" type="text" class="form-control" name="adi" required="" value="<?php echo $uyebilgileri['isim'];?>">
                  </div>
                     <div class="col-sm-12">
                    <label class="control-label" for="input-name">Eposta Adresiniz</label>
                      <input style="    max-width: 100%;" type="email" class="form-control" id="reply-email" name="email" required=""  value="<?php echo $uyebilgileri['email'];?>">
                  </div>
				  
				  
				</div>
				
             
              
                <div class="form-group required" style="width: 100%;
text-align: left;">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Yorumunuz</label>
                    <textarea style="    max-width: 100%;" name="yorum" rows="5" id="input-review" class="form-control" required></textarea>
                    <div class="help-block"><span class="text-danger">Not:</span> HTML'e dönüştürülmez!</div>
                  </div>
                </div>
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oylama</label>
                   
                   1&nbsp; <input style="opacity: 1 !important;
width: 50px;
height: 20px;display:block;float: left;
margin-left: 0px;" type="radio" name="yildiz" value="1">
                   
                  2 &nbsp;<input style="opacity: 1 !important;
width: 50px;
height: 20px;display:block;float: left;
margin-left: 30px;" type="radio" name="yildiz" value="2">
                  
                   3 &nbsp;<input style="opacity: 1 !important;
width: 50px;
height: 20px;display:block;float: left;
margin-left: 60px;" type="radio" name="yildiz" value="3">
                   
                    4 &nbsp;<input style="opacity: 1 !important;
width: 50px;
height: 20px;display:block;float: left;
margin-left: 90px;" type="radio" name="yildiz" value="4">
                
                     5 &nbsp;<input style="opacity: 1 !important;
width: 50px;
height: 20px;display:block;float: left;
margin-left: 120px;" type="radio" name="yildiz" value="5">
                  </div>
                </div>
                   <div class="buttons clearfix">
				    <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
               
				  <div class="buttons-box clearfix">

                  <button style="width: 100%;
height: 50px;
font-size: 15px;" type="submit" name="urunyorum" class="btn btn-sm btn-default">Gönder</button>
                </div>
				  
                </div>
                              </form>

                                    <div class="clear"></div>
                           
                          </div>  
                        </div>  
                      </div>

                    </div>                    

                  </div>
                </div>
                
			

        

                  </div>
                </div>
               </div>
			   
			   
			   
			   
			   
			   
			   


              <div class="sidebar col-xs-12 col-sm-12 col-md-3" id="sidebar">

              <aside class="widget stores specials">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-12">
                  
                    <div class="store-title">
                      <a title="Benzer Ürünler">Benzer Ürünler</a>
                    </div>

                    <div class="store-comment">
                      Bu ürüne bakanlar bu ürünleride inceledi
                    </div>

                  
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-12">
                    <header>
                    
                    </header>
                    <ul>
              <?php 
				$benzerurunadi = $page['adi'];
				$benzerurunler = $ozy->query("select * from urunler where durum='1' and adi like '%$adi%' ORDER BY RAND() limit 15")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($benzerurunler as $katurunler) {?>
                      <li class="clearfix">
                        <a href="urun/<?php echo $katurunler['seo']; ?>" class="product-image" title="<?php echo $katurunler['adi']; ?>">
                          <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="<?php echo $katurunler['adi']; ?>" width="100" height="100">
                        </a>
                        <h3 class="product-name">
                          <a href="urun/<?php echo $katurunler['seo']; ?>" title="<?php echo $katurunler['adi']; ?>"><?php echo $katurunler['adi']; ?></a>
                        </h3>
                        <div class="price-box">
						  <div class="price notranslate">
					
					 <?php echo xurunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>

					
					</div>
						</div>
                      </li>
		<?php } ?>	
						
                   
                   
                    </ul>                  
                  </div>
                </div>
              </aside>
              
           

              </div>             

            </div>
          </div> 
        </section>
        <div class="clearfix"></div>  
		</div>
      <style>
	.size-item {
 position:relative;
 margin-right:5px;
 margin-bottom:10px;
 cursor:pointer;
 -webkit-user-select:none;
 -moz-user-select:none;
 -ms-user-select:none;
 user-select:none;
 width: 10%;
float: left;
display: block;

}
.size-item .size-slt-box {

 position:relative;
 border:1px solid #fff;
 text-align:center;
 padding:8px 14px;
 color:#000;
 -webkit-box-shadow:0 0 2px 0 rgba(50,50,50,0);
 box-shadow:0 0 2px 0 rgba(50,50,50,0);
 background: white;
}
.size-item .size-slt-box .size-last {
 position:absolute;
 top:-7px;
 right:-5px;
 font-size:10px;
 line-height:12px;
 height:13px;
 font-weight:700;
 text-align:center;
 background:#e82222;
 padding:0 4px;
 color:#fff;
 border-radius:8px;
 display:block
}
.size-item input {
 position:absolute;
 opacity:0;
 cursor:pointer
}
.size-item input:checked~.size-slt-box {
 background: #ff6f38;
 color: white;
}
.size-item input[available="0"]~.size-slt-box {
 color:#a6a6a6;
 background:linear-gradient(to top right,#fff calc(50% - 1px),#d3d3d3,#fff calc(50% + 1px))
}
.size-item input:not([available="0"])~.size-slt-box:hover {
 background: #e1a635;
 color: #fff;
}
@media screen and (max-device-width: 480px) and (orientation: portrait){
.left-content-product .content-product-right .box-info-product .add-to-links ul li a {
  display: inline-block;
  padding: 10px 15px;
  font-size: 14px;
  color: #666;
  border: 1px solid #e6e6e6;
  cursor: pointer;
  width: 320px;
  margin-top: 10px;
  text-align: center;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px;
  width: 320px;
}


.anaresim {
  display: none !important;
 
}


}
	</style>
     
<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 
	
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
	                		<div class="col-lg-9" style="margin-top: 10px;border: 1px solid #f2f2f2;background: white;">
							<?php if($toplamtutarim>=$system['ucretsizkargo']){?>
 
 <div class="alert alert-success alert-dismissible" style="margin-top: 10px;margin-bottom: 15px;padding-left: 8px;padding-right: 8px;">
 <i class="fa fa-check"></i> Tebrikler! <b>KARGO ÜCRETSİZ</b> fırsatını yakaladınız!
 </div>
 	<?php } else { ?>

<div class="alert alert-warning alert-dismissible" style="margin-top: 10px;margin-bottom: 15px;padding-left: 8px;padding-right: 8px;color: #333;">
<i class="fa fa-exclamation-circle"></i> <b>Ücretsiz Kargo </b>İçin Kalan Tutar: <?php echo $kalan = $system['ucretsizkargo']-$toplamtutarim;?> TL<button type="button" class="close" data-dismiss="alert">×</button>
</div>

	<?php } ?>
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Ürün</th>
											<th>Birim</th>
											<th>KDV</th>
											<th>Adet</th>
											<th>Toplam</th>
											<th></th>
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
									
									
										<tr>
										 <td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="urun/<?php echo $sepet['seo'];?>">
															<img style="width:50px;" src="resimler/urunler/<?php echo $sepet['resim'];?>" alt="Product image">
														</a>
													</figure>

													    <h3 class="product-title">
														<a href="urun/<?php echo $sepet['seo'];?>"><b style="font-weight: 400;"><?php echo $sepet['adi'];?></b></br>
														<div style="font-weight: 400;font-size: 12px;margin-left: 2px;"><?php echo $sepet['ekurun'];?>
							                            
					                                    
					                                   
														</div>
														
														</a>
														<div class="badges" style="margin-top: 10px; display: inline-block;width: 300px;">
														
														<?php if($sepet['kargo']=='1'){?>
					                                    <span class="badge" style="border: 1px solid #2cc43c;padding: 5px;line-height: 20px !important;color: #2cc43c;">
					                                    <i style="font-size: 18px;" class="icon-truck"></i> KARGO ÜCRETSİZ
					                                    </span>
                                                        <?php } ?>
														 <?php if($sepet['alodedurum']=='1'){?> 
                                                        <span class="badge" style="border: 1px solid #d2ab13;padding: 5px;line-height: 20px !important;color: #d2ab13;">
					                                    <i style="font-size: 18px;" class="icon-shopping-cart"></i> <?php echo $sepet['alodemetin'];?></span>
                                                        <?php } ?>
					                                    </div>
													</h3><!-- End .product-title -->
													
													
												</div><!-- End .product -->
											</td>
											<td class="price-col"><?php echo fiyatgoster($sepet['kdvsizfiyat']);?></td>
											<td class="price-col" style="font-size: 14px;">(%<?php echo $sepet['oran'];?>)</br>
											<?php echo fiyatgoster($sepet['kdv']);?></td>
											<form action="" method="POST">
											<td class="quantity-col">
                                               <div class="cl-product-quantity">
           							        <?php if($sepet['alodedurum']=='1'){?> 
											<?php $newstok = $sepet['adet']+$sepet['alodeadet'];?>
											<?php } else { ?>
											<?php $newstok = $sepet['adet'];?>
											<?php } ?>
			                                <?php if($system['sinirsizstok']!='1'){	?>
			                              <input type="number" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="<?php echo $sepet['stok'];?>"  size="2"  required>
                                            <?php } else { ?>
                                            <input type="number" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="9999999999999999999" required>
                                            <?php } ?>


  
				
				
				
			
                                               </div>
											
											
											<input type="hidden" name="sepetguncelle"/>
												</div><!-- End .cart-product-quantity -->
                                            </td>
											<td class="total-col" style="font-weight:bold;"><?php echo fiyatgoster($sepet['fiyat']*$sepet['adet']);?></td>
											<td class="remove-col">
										<form action="" method="POST">
										<input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
										<input type="hidden" name="urunid" value="<?php echo $sepet['urunid']; ?>"/>
										<button name="delete" type="submit" class="btn-remove" title="Sil">x</button>
                                        </form>	
											</td>
										</tr>
										
									<?php }} ?> 	
										
										
									</tbody>
								</table><!-- End .table table-wishlist -->
                               </form>
	                			<div class="cart-bottom">
			            			<div class="cart-discount">
			            				<form method="POST" action="">
			            					
				        						<input type="text" class="form-control" name="kuponadi" placeholder="İndirim Kuponu Kodunuz">
				        					<button class="butonok btn btn-outline-primary-2" type="submit" name="kuponguncelle">Kupon Güncelle</button>	
												
			        					
			            			
			            			</div><!-- End .cart-discount -->
	
											
			            		</div><!-- End .cart-bottom -->
	                		</div><!-- End .col-lg-9 -->
							</form>
	                		<aside class="col-lg-3" style="background: white;background: white;
border: 1px solid #eceaea;
    border-left-color: rgb(236, 234, 234);
    border-left-style: solid;
    border-left-width: 1px;
border-radius: 6px;
border-left: 0px !important;">
	                			<div class="summary summary-cart" style="background: white !important;">
	                				<h3 style="border-bottom: 1px solid #ece9e9;
text-align: center;
background: #f8f8f8;
padding: 10px;
border-radius: 6px;
font-size: 14px;" class="summary-title">Ödeme Detayları</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                		
	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<label class="custom-control-label" for="free-shipping">Ara Tutar :</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td><?php echo $aratutari;?></td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<label class="custom-control-label" for="free-shipping">KDV Bedeli :</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td><?php echo $kdvtutari;?></td>
	                						</tr><!-- End .summary-shipping-row -->

	                                        <tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<label class="custom-control-label" for="free-shipping">Kargo Bedeli :</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td style="min-width: 150px !important;"><?php echo $kargometni;?></td>
	                						</tr><!-- End .summary-shipping-row -->
                                           <?php if($kuponindirim!='0'){?>
                                            <tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<label class="custom-control-label" for="free-shipping" style="color:red;">İndirim Kuponu Bedeli :</label><a style="font-size: 10px;background: #dd1616a8;color: white;" href="sepet/?kuponsil">Kuponu Sil</a> 
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>- <?php echo fiyatgoster($kuponindirim)?></td>
	                						 </tr><!-- End .summary-shipping-row -->
                                            <?php } ?>
											
                                           <?php if($cekindirim!='0'){?>
                                            <tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<label class="custom-control-label" for="free-shipping" style="color:red;">Hediye Çeki Bedeli :</label><a style="font-size: 10px;background: #dd1616a8;color: white;" href="sepet/?ceksil">Hediye Çeki Sil</a> 
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>- <?php echo fiyatgoster($cekindirim)?></td>
	                						 </tr><!-- End .summary-shipping-row -->
                                            <?php } ?>

                                            <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
	                						
	                						<div class="cart-discount">
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
											

	                						<tr class="summary-total">
	                							<td>Ödenecek Tutar :</td>
	                							<td style="font-size: 18px;font-weight: bold;"><?php echo $toplamtutari;?></td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->
                                    <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
	                				<a href="odeme/" class="butonok btn btn-outline-primary-2 btn-order btn-block">ÖDEME ADIMINA GEÇ</a>
	                			    <?php } else { ?>
									<a href="kontrol/" class="butonok btn btn-outline-primary-2 btn-order btn-block">ÖDEME ADIMINA GEÇ</a>
	                			    <?php } ?>
								</div><!-- End .summary -->

		            		</aside><!-- End .col-lg-3 -->
							
							<?php } ?>
							
	                	</div><!-- End .row -->
						
						
						
						
	                </div><!-- End .container -->
                </div>
                <div class="mb-2"></div><!-- End .mb-2 -->

            </div><!-- End .page-content -->
        </main>
		<style>
		.table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
    border-top: 0;
    width: 20% !important;
}
#input-quantity {
    top: -8px;
    height: 40px;
    text-align: center;
    position: relative;
    font-size: 15px;
    width: 100px !important;
    background: whitesmoke;
    color: #777;
    border: 1px solid #d2d2d2;
}
.product {
    position: relative;
    font-family: Poppins, sans-serif;
    font-size: 1rem;
    color: #020101;
    transition: 0.3s;
    border: none !important;
    border-radius: 2px;
}
.custom-radio .custom-control-label::after {
    content: "";
    position: absolute;
    display: inline-flex;
    align-items: center;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    border: 1px solid;
    border-radius: 2px;
    color: #999;
    font-family: "Font Awesome 5 Free";
    font-size: 1rem;
    font-weight: 900;
    width: 1.8rem;
    height: 1.8rem;
    cursor: pointer;
    transition: color 0.3s, background-color 0.3s, content 0.3s, border 0.3s;
    display: none !important;
}


		.table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
    border-top: 0;
    width: 20% !important;
}
#input-quantity {
    top: -8px;
    height: 40px;
    text-align: center;
    position: relative;
    font-size: 15px;
    width: 100px !important;
    background: whitesmoke;
    color: #777;
    border: 1px solid #d2d2d2;
}
.product {
    position: relative;
    font-family: Poppins, sans-serif;
    font-size: 1rem;
    color: #020101;
    transition: 0.3s;
    border: none !important;
    border-radius: 2px;
}
.custom-radio .custom-control-label::after {
    content: "";
    position: absolute;
    display: inline-flex;
    align-items: center;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    border: 1px solid;
    border-radius: 2px;
    color: #999;
    font-family: "Font Awesome 5 Free";
    font-size: 1rem;
    font-weight: 900;
    width: 1.8rem;
    height: 1.8rem;
    cursor: pointer;
    transition: color 0.3s, background-color 0.3s, content 0.3s, border 0.3s;
    display: none !important;
}

.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 8px;
        padding-top: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    padding-top: 24px !important;
}
@media screen and (max-width: 991px) {
 .table-mobile,
 .table-mobile tbody,
 .table-mobile tr,
 .table-mobile td {
  width:100% !important;
  display:block !important
 }
 .table-mobile thead {
  display:none !important
 }
 .table-mobile tr {
  position:relative;
  padding-top:4.2rem;
  padding-bottom:4rem
 }
 .table-mobile .remove-col {
  position:absolute;
  right:1.5rem;
  top:.5rem;
  padding:.5rem !important;
  width:auto !important
 }
 .table-mobile tr td {
  text-align:center;
  padding:.1rem 3rem;
  border-bottom:none
 }
 .table-mobile tr .product-col {
  padding-bottom:.6rem
 }
 .table-mobile tr .action-col {
  padding-top:1.5rem
 }
 .table-mobile tr .action-col .btn,
 .table-mobile tr .action-col .dropdown {
  max-width:220px;
  margin-left:auto;
  margin-right:auto
 }
 .table-mobile .product-col .product {
  justify-content:center
 }
 .table-mobile .product-col .product-title {
  /*! text-align:left; */
  margin: 0px !important;
  padding: 0px !important;
  width: 50% !important;
  margin-top: -12% !important;
 }
 .table-mobile {
  border:.1rem solid #ebebeb
 }
 .table-mobile tr:not(:last-child) {
  border-bottom:.1rem solid #ebebeb
 }
 .table-mobile .cart-product-quantity {
  margin:.5rem auto
 }
 .product-col .product {
  padding-right:0
 }
}
@media screen and (max-width: 767px) {
 .table-mobile .product-col .product-media {
  margin-right:1.5rem;
  width: 10% !important;
  max-width: 10% !important;
 }
}
@media screen and (max-width: 575px) {
 .cart-bottom {
  flex-direction:column;
  margin-bottom:4rem
 }
 .cart-bottom .cart-discount .btn {
  margin-top:0
 }
 .cart-bottom .btn {
  margin-left:0 !important;
  margin-top:1rem
 }
}
@media screen and (min-width: 992px) {
 .cart .col-lg-3 {
  -ms-flex:0 0 30%;
  flex:0 0 30%;
  max-width:30%
 }
 .cart .col-lg-9 {
  -ms-flex:0 70%;
  flex:0 0 70%;
  max-width:70%
 }
}
.table .total-col {
 color:#c96;
 font-weight:400;
 font-size:1.6rem
}
.table.table-cart .price-col {
 width:120px
}
.table.table-cart .total-col {
 width:80px
}
.table.table-cart .quantity-col {
 width:135px
}
.cart-product-quantity {
 width:100px
}
.cart-product-quantity .form-control {
 padding:.85rem 2.6rem;
 height:40px;
 max-width:100%;
 border-color:#dadada;
 background-color:#fff;
 margin:0
}
.input-spinner {
 position:relative
}
.input-spinner .input-group-prepend,
.input-spinner .input-group-append {
 position:absolute;
 top:0
}
.input-spinner .input-group-prepend {
 left:0
}
.input-spinner .input-group-append {
 right:0
}
.input-spinner .form-control {
 padding:.85rem 2.6rem;
 height:auto;
 border-color:#dadada;
 background-color:#fff;
 margin:0
}
.input-spinner .form-control[disabled] {
 background-color:#f9f9f9
}
.btn.btn-spinner {
 min-width:0;
 color:#333333;
 padding:1.25rem .4rem;
 font-size:1rem;
 border:none;
 background:none
}
.btn.btn-spinner i {
 margin:0 !important
}
.btn.btn-spinner:hover,
.btn.btn-spinner:focus {
 color:#c96
}
.cart-bottom {
 display:flex;
 align-items:flex-start;
 margin-bottom:5rem
}
.cart-bottom .btn {
 margin-left:auto;
 min-width:152px
}
.cart-discount {
 flex:0 0 50%;
 max-width:326px
}
.cart-discount .form-control {
 margin-right:1.1rem
}
.cart-discount .btn {
 min-width:40px;
 padding-left:0;
 padding-right:0
}
.summary.summary-cart {
 margin-bottom:3rem
}
.summary.summary-cart .summary-title {
 margin-bottom:0
}
.table.table-summary .summary-shipping {
 color:#333;
 font-weight:400;
 font-size:1.6rem
}
.table.table-summary .summary-shipping td {
 padding-top:2rem;
 padding-bottom:1.3rem;
 height:auto;
 border-bottom:none
}
.table.table-summary .summary-shipping-row {
 color:#333
}
.table.table-summary .summary-shipping-row label {
 color:inherit
}
.table.table-summary .summary-shipping-row td {
 height:auto;
 padding-top:.5rem;
 padding-bottom:.5rem;
 border-bottom:none
}
.table.table-summary .custom-control {
 margin:0
}
.table.table-summary .summary-shipping-estimate {
 color:#333;
 font-weight:400;
 font-size:1.6rem
}
.table.table-summary .summary-shipping-estimate td {
 height:auto;
 padding-top:1.4rem;
 padding-bottom:2.3rem
}
.table.table-summary .summary-shipping-estimate a {
 margin-top:.6rem;
 display:inline-block;
 font-weight:300;
 color:#999;
 font-size:1.4rem;
 border-bottom:0.1rem solid #999
}
.table.table-summary .summary-shipping-estimate a:hover,
.table.table-summary .summary-shipping-estimate a:focus {
 color:#c96;
 border-bottom-color:#c96
}
.summary-cart .table.table-summary thead th:last-child,
.summary-cart .table.table-summary tbody td:last-child {
 min-width:0;
}

@media screen and (max-width: 991px) {
 .table-mobile,
 .table-mobile tbody,
 .table-mobile tr,
 .table-mobile td {
  width:100% !important;
  display:block !important
 }
 .table-mobile thead {
  display:none !important
 }
 .table-mobile tr {
  position:relative;
  padding-top:4.2rem;
  padding-bottom:4rem
 }
 .table-mobile .remove-col {
  position:absolute;
  right:1.5rem;
  top:.5rem;
  padding:.5rem !important;
  width:auto !important
 }
 .table-mobile tr td {
  text-align:center;
  padding:.1rem 3rem;
  border-bottom:none
 }
 .table-mobile tr .product-col {
  padding-bottom:.6rem
 }
 .table-mobile tr .action-col {
  padding-top:1.5rem
 }
 .table-mobile tr .action-col .btn,
 .table-mobile tr .action-col .dropdown {
  max-width:220px;
  margin-left:auto;
  margin-right:auto
 }
 .table-mobile .product-col .product {
  justify-content:center
 }
 .table-mobile .product-col .product-title {
  text-align:left
 }		
}
.product-col .product-title {
    display: inline-block !important;
    color: #333;
    font-weight: 400;
    font-size: 1.2rem;
    line-height: 1.25 !important;
    margin: 0 !important;
        margin-top: 0px;
    width: 75% !important;
    float: right;
    margin-top: -21% !important;
    font-size: 12px !important;
}
.product-col .product-title a {
 color:inherit
}
.product-col .product-title a:hover,
.product-col .product-title a:focus {
 color:#c96
}
.in-stock {
 color:#a6c76c
}
.out-of-stock {
 color:#ef837b
}
.btn-remove {
 display:inline-flex;
 align-items:center;
 justify-content:center;
 width:3rem;
 height:3rem;
 color:#cccccc;
 background-color:transparent;
 font-size:1.7rem;
 line-height:1;
 border:none;
 outline:none;
 transition:all .35s
}

		</style>
<title>Favori Ürünlerim</title>

<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">

<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">

<meta property="og:url" content="<?php echo $url; ?>"/>

<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>

<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>



	<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
	
			<div id="wish-list" style="margin-top:20px;">
				<div class="container">
					<div class="row">
						<div id="col-main" class="clearfix">
							<div class="page">
								<div class="table-cart">
									<div class="wrap-table">
										<table class="cart-items haft-border">
											<thead>
												<tr class="top-labels">
													<th class="text-left">Ürün</th>
													<th>Fiyatı</th>
													<th>Sil</th>
													<th>Sepete Ekle</th>
												</tr>
											</thead>
											<tbody>
											
											  <?php $uyesepeti11 = $ozy->prepare("SELECT * FROM urunler 

	                    INNER JOIN favoriler ON urunler.id = favoriler.urunid  

	                    WHERE favoriler.gelenkim=? ORDER BY favoriler.id DESC");                

	                    $uyesepeti11->execute(array($sepetimdekikim));

	$__URUN__ = false;

        foreach ($uyesepeti11 as $katurunler) {
			
     
        $__URUN__ = true;



	                    ?>
						
											
											
												<tr class="item wishlist-item">
													<td class="title text-left">
														<ul class="list-inline">
															<li class="image">
																<a class="image text-left" href="urun/<?php echo $katurunler['seo']; ?>">
																	<img style="width: 230px;height: 230px;" src="resimler/urunler/<?php echo $katurunler['resim']; ?>" alt="Electronic equipment">
																</a>
															</li>
															<li class="link">
																<a class="title text-left" href="urun/<?php echo $katurunler['seo']; ?>"><?php echo $katurunler['adi']; ?></a>
															</li>
														</ul>
													</td>
													<td class="price title-1">
														<span class="money" data-currency-usd="$200.00">
														
														 	<?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
											
							  
														</span>
													</td>
													<td class="remove">
														<div>
															<div class="product-remove">
																<a title="Remove" class="color-red icon icon-clear" href="?favorilsil=<?php echo $katurunler['id']; ?>">
																	<i class="fa fa-close"></i>
																</a>
															</div>
														</div>
													</td>
													<td class="button">
														
															<button class="btn btn-1 select-option" type="button" onclick="window.location='urun/<?php echo $katurunler['seo']; ?>;">Sepete Ekle</button>
														
													</td>
												</tr>
												
											
											
												  <?php }

							

                            if (!$__URUN__){

								

                            echo "<b style='font-weight: 500;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Malesef favorilerinizde ürün bulunamadı</b>";

							

							}

							?>	
											
											
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
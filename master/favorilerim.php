<title>Favori Ürünlerim</title>

<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">

<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">

<meta property="og:url" content="<?php echo $url; ?>"/>

<meta property="og:title" content="Favori Ürünlerim"/>

<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
	

<div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>

			   <a href="favorilerim/" class="link-12">Favori Ürünlerim</a>
				
			  
			   
            </div>
        </div>
		


 
		
		
		
		
		
		
		
        <div class="div-block-4461292330">
            <div class="w-row">
			
			
			
			
			
			
				
                <div class="column-188 w-col w-col-12">
                    
                    <div class="div-block-4461292333" style="margin-top:0;  margin-left: 0px !important;">
                        <div class="columns-38 w-row">
                            <div class="column-191 w-col w-col-12 w-col-tiny-tiny-stack">
                                <div>
                                    <div class="text-block-138"><strong style="color: #ff0000">Favori ürün listenizde </strong> <strong style="color: #ff0000"><?php echo $favorisayisi; ?> </strong> adet ürün bulundu..</div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                    <div class="div-block-4461292334">
                        <div class="columns-37 w-row">
                            
							
							
							
							
							
                           
                            
							
							<?php $uyesepeti11 = $ozy->prepare("SELECT * FROM urunler 

	                    INNER JOIN favoriler ON urunler.id = favoriler.urunid  

	                    WHERE favoriler.gelenkim=? ORDER BY favoriler.id DESC");                

	                    $uyesepeti11->execute(array($sepetimdekikim));

	$__URUN__ = false;

        foreach ($uyesepeti11 as $katurunler) {
			
     
        $__URUN__ = true;



	                    ?>
							
							
							   <div class="column-128 w-col w-col-3 w-col-medium-3 w-col-small-6 w-col-tiny-6">
                                <div class="div-block-box-new">
                                        <a href="urun/<?php echo $katurunler['seo']; ?>">
                  <div class="image-wrapper-box">
                      <img src="resimler/urunler/<?php echo $katurunler['resim']; ?>" loading="lazy"  alt="<?php echo $katurunler['adi']; ?>" class="image-wrapper">
                      <div class="quick-wrapper">
                           <div class="quick-btn"></div>
                      </div>
                  </div>
                  </a>
                  <div class="text-block-121"> <?php echo $katurunler['adi']; ?></div>
                  <div>
                    <div class="w-row">
                          <div class="w-col w-col-7 w-col-small-7 w-col-tiny-tiny-stack">
                          <div>
                           <div class="newfiyat">
                          <?php echo urunfiyatbelirle($katurunler['kdv'],$katurunler['idurum'],$katurunler['fiyat'],$katurunler['ifiyat']);?>
               
                          </div>
                              </div>
                          </div>
                          <div class="w-clearfix w-col w-col-5 w-col-small-5 w-col-tiny-tiny-stack">
                             <?php if($katurunler['idurum']=='1'){?>
                              <div class="div-block-indiirm-box">
                                  <div class="text-block-131">
								  % <?php echo yuzdeHesaplama($katurunler['fiyat'],$katurunler['ifiyat']);?></div>
                              </div>
                             <?php } ?>  
                          </div>
                      </div>
                  </div>
                  <div class="div-block-4461292304">
                      <div class="columns-29 w-row">
                          <div class="column-135 w-col w-col-4">
                              <div>
                                  
                               <div class="FavOnay734">
                               <a href="?karsilastir=<?php echo $katurunler['id']; ?>"  data-tooltip="Karşılaştır" class="karpasif w-inline-block"></a>
                               <a href="?favorilsil=<?php echo $katurunler['id']; ?>"  data-tooltip="Favorimden Sil" class="favoripasif w-inline-block"></a>
                                                        
							   
							   </div>
                                                        
                                  
                              </div>
                          </div>
                          
                          <div class="w-clearfix w-col w-col-8">
                              
                            		
													<?php if($katurunler['stok']>='1'){?>
                                                    <a href="urun/<?php echo $katurunler['seo']; ?>" class="button-12-sepet-new2 w-button">Sepete Ekle</a>
                                                    <?php }else{ ?>
													<a class="w-button tukendi">Tükendi</a>
													<?php } ?>
                              
                          </div>
                          
                      </div>
                  </div>
                  <div class="c5"></div>
                  
                  <div class="div-block-4461292306"></div>

                  <div>
                                            <div class="columns-32 w-row">
                                                <div class="w-col w-col-12">
                                                    <div>
                                                        <div class="text-block-134"><?php echo $tema['t33'];?>
														</div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
	  
	  
	  </div>     


	  </div>
									<?php }

													

													if (!$__URUN__){?>

														

	<div class="notfound_container text-center" style="padding: 40px;font-weight: 500;">
	
	
		<div class="notfound_content">
			<div class="title fs-5">Favorilerinizde henüz ürün bulunmuyor.</div>
			<div class="text fs-5 fw-bold mt-1"><a href="<?php echo $url;?>">Hemen eklemek ister misiniz ?</a></div>
		</div>
	</div>													








													<?php }

													?>		
							
							
							
					
                        </div>


                        

                        <div class="c20"></div>


                    </div>

                </div>
            </div>
        </div>
    </div>
		  




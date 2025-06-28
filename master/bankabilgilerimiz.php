<title>Banka Hesaplarımız</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>


	   <div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a class="link-12">Hızlı Linkler</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="javascript:;" class="link-12">Banka Hesaplarımız</a>
            </div>
        </div>
        <div class="div-block-4461292330">
            <div class="w-row">
 
                <div class="column-188 w-col w-col-12">
                    <div class="div-block-4-46129247472ip">
                        <div class="div-block-kategori-filtre-box24">
                            <div class="text-block-138-28">Banka Hesaplarımız</div>
                        </div>
                        <div class="div-block-496">
						
						   <div class="div-block-uye-ol-box">
  <?php 
		$bankaoku = $ozy->query("select * from bankahesaplari where durum='1' order by sira DESC")->fetchAll(PDO::FETCH_ASSOC);
		$__BANKA__ = false;
        foreach ($bankaoku as $banka) {
        $__BANKA__ = true;?>						   
<div class="column-128 w-col w-col-4 w-col-medium-3 w-col-small-6 w-col-tiny-12" style="border: 1px solid #ede4e4;border-radius: 4px;">
<div class="bank-acc">
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12" >
<div class="bank-img">
<img style="height: 200px;" src="resimler/bankalar/<?php echo $banka['resim'];?>" class="bank-logo">
</div>
</div>
<div class="col-lg-12 col-md-12 col-xs-12" style="  padding: 10px;">
<div class="bank_info_line"><div class="row"><div class="col-lg-5 col-md-4 col-sm-3 col-xs-3 padr0"><strong>Adı Soyadı : </strong> <?php echo $banka['alici'];?></div> </div></div>
<div class="bank_info_line"><div class="row"><div class="col-lg-5 col-md-4 col-sm-3 col-xs-3 padr0"><strong>Şube Adı & Kodu :</strong> <?php echo $banka['sube'];?> & <?php echo $banka['kod'];?></div><div class="col-lg-7 col-md-8 col-sm-9 col-xs-9">  </div></div></div>
<div class="bank_info_line"><div class="row"><div class="col-lg-5 col-md-4 col-sm-3 col-xs-3 padr0"><strong> Hesap No :</strong><?php echo $banka['hesap'];?> </div><div class="col-lg-7 col-md-8 col-sm-9 col-xs-9"> </div></div></div>
<div class="bank_info_line"><div class="row"><div class="col-lg-3 col-md-4 col-sm-3 col-xs-3 padr0"><strong> IBAN :</strong><?php echo $banka['iban'];?></div><div class="col-lg-9 col-md-8 col-sm-9 col-xs-9">  </div></div></div>
</div>
</div>
</div>
</div>


   <?php }

                        if (!$__BANKA__){
                            echo '
							
						              <p> Henüz bir banka hesabı eklenmemiştir.</p>
								    	
										
							
							
							';
                        }

                         ?>	
           
 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<style>
.div-block-uye-ol-box {
  font-size: 13px;
  height:750px;
}

@media screen and (max-device-width: 480px) and (orientation: portrait){
.w-col {
  float: none !important;

}
}
	</style>
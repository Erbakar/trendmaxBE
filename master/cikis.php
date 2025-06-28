<?php
session_destroy();
header("Refresh: 2; url=".$url."");
ob_end_flush();
?>
<title>Sistemden Çıkış</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   <div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="javascript:;" class="link-12">Çıkış</a>
            </div>
        </div>
        <div class="div-block-4461292330">
            <div class="w-row">
 
                <div class="column-188 w-col w-col-12">
                    <div class="div-block-4-46129247472ip">
                       
                        <div class="div-block-496">
    
  <div class="col-sm-12 empty-cart-cls text-center" style="text-align: center;"> 
  
		
		<img src="<?php echo $sitetemasi;?>/css/images/exit.png"></img>
  
					<h4><strong>Oturumunuz başarıyla kapatıldı.</strong></h4>
                        <h5>Tekrar görüşmek üzere :)</h5>

						
					</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
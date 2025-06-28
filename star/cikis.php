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

        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Sistemden Çıkış</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
          <div class="container">
          
					<div class="row">
								
				<div class="col-sm-12 customer-login" style="text-align: center;border: 1px solid #d4d2d2;padding: 10px;">
						<img src="<?php echo $sitetemasi;?>/user/exit.png"></img>
  
					<h4><strong>Oturumunuz başarıyla kapatıldı.</strong></h4>
                        <h5>Tekrar görüşmek üzere :)</h5>

						
						
								</div>
							
							
							
						</div>
			
			
          </div>
        </section>

        <div class="clearfix"></div>  
		</div>
      
 
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


       <section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
                Sistemden Çıkış
               </h4></div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="<?php echo $url;?>">
					 <i class="icofont-ui-home"></i> Anasayfa</a>  /  
					 <span>Sistemden Çıkış</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  <section class="py-5 bg-light border-top" style="background: white !important;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12" style="text-align: center;">
                	
					<img src="<?php echo $sitetemasi;?>/user/exit.png"></img>
  
					<h5><strong>Oturumunuz başarıyla kapatıldı.</strong></h5>
                        <h6>Tekrar görüşmek üzere :)</h6>

						
						
               </div>
              
               
            </div>
			
			
	
			
			
			
			
         </div>
      </section>
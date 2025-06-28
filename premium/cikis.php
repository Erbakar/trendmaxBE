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
 
	
		   <main class="main">
        	  <nav class="breadcrumb-nav mb-1 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="anasayfa">Anasayfa</a></li>
                        <li>Çıkış</li>
                    </ul>
                </div>
            </nav>
        
   <div class="page-content pb-3">
                <div class="cart">
	                <div class="container">
	                	<div class="row">
						
						 <div class="col-md-12">
           

                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
					<h4>Oturumunuz başarıyla kapatıldı.</h4>
                        <h5>Tekrar görüşmek üzere :)</h5>
                    </div>
                </div>
           
        </div>
						
							
	                	</div><!-- End .row -->
						
						
						
						
	                </div><!-- End .container -->
                </div>
                <div class="mb-2"></div><!-- End .mb-2 -->

            </div><!-- End .page-content -->
        </main>
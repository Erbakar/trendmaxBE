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

<div id="information-information" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
	  
      <li><a>Çıkış</a></li>
   </ul>
   <div class="row">
      <div id="content" class="col-sm-12">
      
		 
					<h4><strong>Oturumunuz başarıyla kapatıldı.</strong></h4>
                        <h5>Yönlendiriliyorsunuz ... Tekrar görüşmek üzere :)</h5>
	
		 
      </div>
   </div>
</div>
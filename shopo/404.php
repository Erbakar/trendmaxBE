<title>404 - Sayfa Bulunamadı</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="404 - Sayfa Bulunamadı"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

<div id="information-information" class="container">
   <ul class="breadcrumb">
      <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
	  <li><a>404 - Sayfa Bulunamadı</a></li>
   </ul>
   <div class="row">
      <div id="content" class="col-sm-12">
      
		 
		 	  <div id="notfound" style="text-align: center;border: 1px solid #d4d2d2;padding: 10px;"> 
<div class="notfound">
<div class="notfound-404">
<h1>4<span></span>4</h1>
</div>
<h2>Oops! Sayfa Bulunamadı</h2>
<p>Üzgünüm aradığın sayfayı bulamadım. Ya sayfa hiç olmadı yada hatalı bir linke tıkladın :)</p>
<a href="<?php echo $url;?>">Anasayfaya Geri Dön</a>
</div>
</div> 

							
			
		 
		 
      </div>
   </div>
</div>
<style>
	#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
}

.notfound .notfound-404 h1 {
  font-size: 146px;
  font-weight: 700;
  margin: 0px;
  color: #232323;
}

.notfound .notfound-404 h1>span {
  display: inline-block;
  width: 120px;
  height: 120px;
  background-image: url('<?php echo $sitetemasi;?>/user/emoji.png');
  background-size: cover;
  -webkit-transform: scale(1.4);
      -ms-transform: scale(1.4);
          transform: scale(1.4);
  z-index: -1;
}

.notfound h2 {
  font-size: 22px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  color: #232323;
}

.notfound p {
  color: #787878;
  font-weight: 500;
}

.notfound a {
  display: inline-block;
  padding: 12px 30px;
  font-weight: 700;
  background-color: <?php echo $tema['t37'];?>;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 115px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h1>span {
    width: 86px;
    height: 86px;
  }
	</style>  
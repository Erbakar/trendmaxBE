    <title><?php echo $ayar['siteadi']; ?></title>
    <meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
    <meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
	<meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:title" content="<?php echo $ayar['siteadi']; ?>"/>
    <meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
 <div class="container">
  <div class="row">    
  <div id="content" class="col-sm-12">
  <div class="row">
  
  


<script>
$(document).ready(function(){

var startThis = setInterval(function () { changeSlide(); }, 3000);
$('div#Slider0').mouseover(function() { clearInterval(startThis); startThis=null; }); 
$('div#Slider0').mouseout(function() { startThis = setInterval(function () { changeSlide(); }, 3000); });  
$('li[id^="small0_"]').mouseover(function() {
$(this).attr("class","active");
$('ul#smallImages0 > li[id!='+$(this).attr('id')+']').attr("class","inactive");
var bigID=$(this).attr('id').replace('small0_','big0_');
$('ul#bigImages0 > li[id!='+bigID+']').attr("class","inactive");
$('ul#bigImages0 > li[id!='+bigID+']').css({'display':'none'});
$('ul#bigImages0 > li#'+bigID+'').attr("class","active");
$('ul#bigImages0 > li#'+bigID+'').css({'display':'block'});
});

   
function changeSlide(){ 
  $("ul#bigImages0 > li.active").fadeOut("slow","swing",function() {
  var smallID=$(this).attr('id').replace('big0_','small0_');
  if($(this).is(':last-child')) {
  $(this).siblings(':first').fadeIn();
  $(this).siblings(':first').attr("class","active");
  $('#'+smallID+'').siblings(':first').attr("class","active");
  }
  else {
  $(this).next().fadeIn();
  $(this).next().attr("class","active");
   $('#'+smallID+'').next().attr("class","active");
  }
  $(this).attr("class","inactive");
  $('#'+smallID+'').attr("class","inactive");
  }); 
  }
});
</script>
<!--test-->
<div id="Slider0" class="SimpleSlider" style="margin-top: 3px;background:#fff;border: 1px solid #efe9e9; width: 100%; height: auto; padding-bottom: 0px;">	
<div id="Images0" style="width: 100%; height: auto;">	
<ul id="bigImages0" style="padding: 0px !important;" class="SimplebigImages">

<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
foreach($slider as $demo){?> 
<li class="active" style="list-style:none;" id="big0_0">
<a href="<?php echo $demo['link'];?>">
<img style="width: 100%; height: auto;" src="resimler/slider/<?php echo $demo['resim'];?>" /></a>
</li>
<?php } ?> 	
<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc limit 1,100")->fetchAll(PDO::FETCH_ASSOC); 
foreach($slider as $demo){?> 
<li id="big0_<?php echo $demo['id'];?>" style="display:none;list-style:none;" >
<a href="<?php echo $demo['link'];?>">
<img style="width: 100%; height: auto;" src="resimler/slider/<?php echo $demo['resim'];?>" /></a>
</li>
<?php } ?> 	

</ul>
</div>
<div id="Thumbs0" class="SimpleThumbs" style="width: 100%; height: 50px;padding-bottom: 5px;">
<ul id="smallImages0" class="SimplesmallImages" style="padding: 0px !important;padding-left: 0px;padding-left: 10px !important;">
<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
foreach($slider as $demo){?> 
<li class="active" style="float: left !important;list-style:none;margin-right:5px;" id="small0_0">
<a href="#big0_0"><img width="90px" height="48px" style="padding-bottom: 4px;" src="resimler/slider/<?php echo $demo['resim'];?>" /></a>
</li>
<?php } ?> 	
<?php $slider = $ozy->query("select * from slider where durum='1' order by sira desc limit 1,100")->fetchAll(PDO::FETCH_ASSOC); 
foreach($slider as $demo){?> 
<li class="inactive" style="float: left !important;list-style:none;margin-right:5px;" id="small0_<?php echo $demo['id'];?>" >
<a href="#big0_<?php echo $demo['id'];?>"><img  width="90px" style="padding-bottom: 4px;" height="48px" src="resimler/slider/<?php echo $demo['resim'];?>" /></a>
</li>	
<?php } ?> 
</ul>
 
</div>

</div>
  
  
  
<div id="butik-banner-text0" class="butik-banner">






    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   
               <?php require('hikaye.php');?>    
<style>
.hikaye {
    border: none !important;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
  </div>
  
   
   
  
  
  
  
  <div class="col-lg-12" style="float: left;">
  
 <?php $katiz = $ozy->query("select * from kategoriler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
 foreach($katiz as $kategorimx){?>  
  
<div class="col-lg-6" style="float: left;padding: 0px !important;margin-bottom: 10px;">
<a href="kategori/<?php echo $kategorimx['seo']; ?>"><img style="width: 99%;border: 4px solid #f4f1f1;max-height: 286px !important;" src="resimler/kategoriler/<?php echo $kategorimx['yanresim']; ?>"></a>
</div>
<?php } ?>	




</div>
  
  
  
  
  
  
  
  
  
  </div>
  
  
  
  
  
</div>
<div class="title-module"><h3>Yeni Ürünler</h3></div>
<div class="row">


    <?php $uk = $ozy->query("select * from urunler where durum='1' and yeni='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
    foreach($uk as $anaurunler){?>

              <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			 <?php if($anaurunler['stok']=='0'){?>
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi2.png'>
			 </div>	
			 <?php } ?>
			 
			 
			 <?php 
			 $sayfaidm = $anaurunler['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $anaurunler['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" alt="<?php echo $anaurunler['adi']; ?>" title="<?php echo $anaurunler['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $anaurunler['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $anaurunler['adi']; ?>" title="<?php echo $anaurunler['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $anaurunler['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $anaurunler['resim']; ?>" alt="<?php echo $anaurunler['adi']; ?>" title="<?php echo $anaurunler['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $anaurunler['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $anaurunler['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $anaurunler['seo']; ?>"><?php echo $anaurunler['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($anaurunler['kdv'],$anaurunler['idurum'],$anaurunler['fiyat'],$anaurunler['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($anaurunler['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $anaurunler['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>
	
	
	
	
	
	
	
	
</div>




<div class="title-module"><h3>Günün Fırsatları</h3></div>
<div class="row">


    <?php $ssss = $ozy->query("select * from urunler where durum='1' and firsat='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
    foreach($ssss as $first){?>

              <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi3.png'>
			 </div>	
		
			 
			 
			 <?php 
			 $sayfaidm = $first['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $first['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $first['resim']; ?>" alt="<?php echo $first['adi']; ?>" title="<?php echo $first['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $first['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $first['adi']; ?>" title="<?php echo $first['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $first['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $first['resim']; ?>" alt="<?php echo $first['adi']; ?>" title="<?php echo $first['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $first['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $first['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $first['seo']; ?>"><?php echo $first['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($first['kdv'],$first['idurum'],$first['fiyat'],$first['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($first['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $first['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>
	
	
	
	
	
	
	
	
</div>









<div class="title-module"><h3>Çok Satan Ürünler</h3></div>
<div class="row">


    <?php $cok = $ozy->query("select * from urunler where durum='1' and coksatan='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
    foreach($cok as $coksatan){?>

              <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			 <?php if($coksatan['stok']=='0'){?>
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi2.png'>
			 </div>	
			 <?php } ?>
			 
			 
			 <?php 
			 $sayfaidm = $coksatan['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $coksatan['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $coksatan['resim']; ?>" alt="<?php echo $coksatan['adi']; ?>" title="<?php echo $coksatan['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $coksatan['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $coksatan['adi']; ?>" title="<?php echo $coksatan['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $coksatan['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $coksatan['resim']; ?>" alt="<?php echo $coksatan['adi']; ?>" title="<?php echo $coksatan['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $coksatan['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $coksatan['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $coksatan['seo']; ?>"><?php echo $coksatan['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($coksatan['kdv'],$coksatan['idurum'],$coksatan['fiyat'],$coksatan['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($coksatan['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $coksatan['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>
	
	
	
	
	
	
	
	
</div>




<div class="title-module"><h3>Trend Ürünler</h3></div>
<div class="row">


    <?php $populerz = $ozy->query("select * from urunler where durum='1' and populer='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
    foreach($populerz as $populer){?>

              <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			 <?php if($populer['stok']=='0'){?>
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi2.png'>
			 </div>	
			 <?php } ?>
			 
			 
			 <?php 
			 $sayfaidm = $populer['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $populer['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $populer['resim']; ?>" alt="<?php echo $populer['adi']; ?>" title="<?php echo $populer['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $populer['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $populer['adi']; ?>" title="<?php echo $populer['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $populer['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $populer['resim']; ?>" alt="<?php echo $populer['adi']; ?>" title="<?php echo $populer['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $populer['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $populer['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $populer['seo']; ?>"><?php echo $populer['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($populer['kdv'],$populer['idurum'],$populer['fiyat'],$populer['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($populer['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $populer['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>
	
	
	
	
	
	
	
	
</div>





<div class="title-module"><h3>Sizin İçin Seçtiğimiz Ürünler</h3></div>
<div class="row">


    <?php $sz = $ozy->query("select * from urunler where durum='1' and agoster='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
    foreach($sz as $sizinicin){?>

              <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">
              <div class="product-thumb transition">
       
	         <div class='image' style=''>
			 <?php if($sizinicin['stok']=='0'){?>
			 <div id='tukendi' style='position:absolute; overflow:hidden;'>
			 <img src='<?php echo $sitetemasi;?>/image/tukendi2.png'>
			 </div>	
			 <?php } ?>
			 
			 
			 <?php 
			 $sayfaidm = $sizinicin['id'];
			 $urunyorumsayisiz = $ozy->prepare("SELECT COUNT(*) FROM tumresimler where sayfaid='$sayfaidm' and alan='urunler'");
             $urunyorumsayisiz->execute();
             $urunyorumsayimizzz = $urunyorumsayisiz->fetchColumn();?>
             <?php $urunyorumsayimizzz;?> 
			 <?php if($urunyorumsayimizzz>='1'){?>
			 <a href="urun/<?php echo $sizinicin['seo']; ?>">
			 <img  src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="<?php echo $sizinicin['adi']; ?>" title="<?php echo $sizinicin['adi']; ?>" class="img-responsive" />
             <?php 
			 $gelenid = $sizinicin['id'];
			 $sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='urunler' order by id desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
             foreach($sayfaresimi as $genelresim){?>   
			 <img  src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="<?php echo $sizinicin['adi']; ?>" title="<?php echo $sizinicin['adi']; ?>" class="img-responsive hover-image">
             <?php } ?>
			 </a>	
			 
			 <?php } else { ?>
			 
			 <a href="urun/<?php echo $sizinicin['seo']; ?>">
			 <img src="resimler/urunler/<?php echo $sizinicin['resim']; ?>" alt="<?php echo $sizinicin['adi']; ?>" title="<?php echo $sizinicin['adi']; ?>" class="img-responsive" />
             </a>
			 <?php } ?>
							  
             <div class="button-group xs-hidden sl">
             <a class="wishlist" href="?favoriekle=<?php echo $sizinicin['id']; ?>" data-toggle="tooltip" title="Favorilerime Ekle"><i class="fa fa-heart"></i></a>
             <a class="compare" href="?karsilastir=<?php echo $sizinicin['id']; ?>" data-toggle="tooltip" title="Karşılaştırma listesine ekle"><i class="fa fa-clone"></i></a>
             </div>
      </div>
      <div class="caption">
        <h4><a href="urun/<?php echo $sizinicin['seo']; ?>"><?php echo $sizinicin['adi']; ?></a></h4>
         <p class="price">
         <?php echo urunfiyatbelirle($sizinicin['kdv'],$sizinicin['idurum'],$sizinicin['fiyat'],$sizinicin['ifiyat']);?>
                                            
        </p>
       </div>
       <div class="button-group hidden-xl">
	    <?php if($sizinicin['stok']=='0'){?>
       	 <button type="button" style="width: 92%;" disabled>
	     <i class='fa fa-shopping-cart'></i> 
		 <span class='hidden-xs hidden-sm hidden-md'>Ürün Tükendi</span>
		 </button>	      
		<?php } else { ?>
	
		<button type="button">
		<a style="color: white !important;" href="urun/<?php echo $sizinicin['seo']; ?>">
		<i style="margin-right: 6px;" class='fa fa-shopping-cart'></i>  
		<span class='hidden-xs hidden-sm hidden-md'>Sepete Ekle</span></a>
		</button>
     
		<?php } ?>
		</div>
        </div>
        </div>
                
	
      
        <?php } ?>
	
	
	
	
	
	
	
	
</div>




<script type="text/javascript"><!--
  $('#latest').owlCarousel({
    autoPlay : false,
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [991,3],
    itemsTablet: [700,2],
    itemsMobile : [460,1],
    slideSpeed : 200,
    paginationSpeed : 300,
    rewindSpeed : 300,
    navigation : true,
    stopOnHover : true,
    pagination : false,
    scrollPerPage:true
  });
  --></script>
<div id="butik-banner0" class="butik-banner">
 <div class="row">
        <div class="col-lg-12">
<div class="inner">
<h3><?php echo $ayar['siteadi']; ?></h3>
<div class="fl col-12 Ftx active">
<?php echo $tema['t8']; ?></div>

</div>
</div>
    </div>
</div>
</div></div></div>
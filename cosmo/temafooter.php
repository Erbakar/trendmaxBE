<link rel="stylesheet" href="<?php echo $sitetemasi;?>/theme/css/jquery.scrollbar.css">
<!-- Footer -->
   <footer class="bg-white border-bottom border-top">
      <div class="container">
         <div class="row no-gutters">
            <div class="col-md-4">
               <div class="border-right py-5 pr-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">HIZLI LİNKLER</h6>
                  <div class="row no-gutters">
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                           		<li><a href="siparissorgulama/">Sipariş Sorgulama</a></li>
								<li><a href="bankabilgilerimiz/">Banka Bilgilerimiz</a></li>
								<li><a href="uyeol/">Üyelik İşlemleri</a></li>
								<li><a href="kampanyalar/">Kampanyalar</a></li>
	            				<li><a href="bloglar/">Blog</a></li>
								<li><a href="sss/">Sıkça Sorulan Sorular</a></li>
							 	<li><a href="iletisim/">Bize Ulaşın</a></li>
                        </ul>
                     </div>
					 
                     <div class="col-6">
					 <h6 style="margin-top: -20% !important;" class="mt-0 mb-4 f-14 text-dark font-weight-bold">POPÜLER KATEGORİLER</h6>
                  
                        <ul class="list-unstyled mb-0">
                          <?php $etiketsz = $ozy->query("select * from kategoriler where durum='1' order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                  foreach($etiketsz as $etiketz){?>
                  <li><a href="kategori/<?php echo $etiketz['seo'];?>"><?php echo $etiketz['adi'];?></a></li>
				  
				  <?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="border-right py-5 px-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">ÇÖZÜM MERKEZİ</h6>
                  <div class="row no-gutters">
				    <div class="col-6">
                        <ul class="list-unstyled mb-0">
                          <?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a  href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                        </ul>
                     </div>
                     <div class="col-6">
                        <ul class="list-unstyled mb-0">
                              <?php $hzmetler1 = $ozy->query("select * from sayfalar where durum='1'order by sira desc limit 6,6")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <li><a href="sayfa/<?php echo $hizmetler11['seo']; ?>"><?php echo $hizmetler11['adi']; ?></a></li>
							<?php } ?>
                              </a>
                           </li>
                        </ul>
                     </div>
                    
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="py-5 pl-5">
                  <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">E-BÜLTEN KAYDI</h6>
                  <div class="app">
                  
				  <form action="" method="POST" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box" style="  width: 60%;">
                                                <input style=" width: 100%;font-size: 11px;height: 36px;" type="email" name="eposta" value="" placeholder="Eposta Adresiniz" required class="form-control" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button style="
background: <?php echo $tema['t37'];?>;height: 38px;" class="btn btn-primary btn-default font-title" type="submit" name="ebulten">
                                            Kaydol
                                        </button>
                                            </div>
                                        </div>
                                    </form>
                  </div>
                  <h6 class="mt-4 mb-4 f-14 text-dark font-weight-bold">SOSYAL MEDYA</h6>
                  <div class="footer-social">
                     <a class="btn-facebook" href="<?php echo $ayar['facebook']; ?>"><i class="icofont-facebook"></i></a>
                     <a class="btn-twitter" href="<?php echo $ayar['twitter']; ?>"><i class="icofont-twitter"></i></a>
                     <a class="btn-instagram" href="<?php echo $ayar['instagram']; ?>"><i class="icofont-instagram"></i></a>
                     <a class="btn-whatsapp" href="<?php echo $ayar['youtube']; ?>"><i class="icofont-youtube"></i></a>
                     <a class="btn-messenger" href="<?php echo $ayar['linkedin']; ?>"><i class="icofont-linkedin"></i></a>
                     <a class="btn-google" href="<?php echo $ayar['googleplus']; ?>"><i class="icofont-google-plus"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container -->
   </footer>
   <div class="popular-tag py-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h6 class="mt-0 mb-4 f-14 text-dark font-weight-bold">EN ÇOK ARANANLAR</h6>
               <p class="mb-0">
			   
			    <?php $etikets = $ozy->query("select * from etiketler where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($etikets as $etiket){?>
                <a href="<?php echo $etiket['link'];?>"><?php echo $etiket['adi'];?></a> &nbsp; | &nbsp; 
				<?php } ?>  
				  
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright bg-light py-3">
      <div class="container">
         <div class="row">
            <div class="col-md-6 d-flex align-items-center">
               <p class="mb-0"> <?php echo $ayar['copy'];?>
               </p>
            </div>
            <div class="col-md-6 text-right">
               <img class="img-fluid" src="<?php echo $sitetemasi;?>/img/payment_methods.png">
            </div>
         </div>
      </div>
   </div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalCenterTitle">Arama...</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
		<form method="GET" action="arama/">
        <div class="modal-body">
        <input class="form-control form-control-lg mb-3" type="text" name="arama" placeholder="Ne Aramıştınız ?" required>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Arama</button>
		</div>
		</form>
         
       </div>
   </div>
 </div>

   <div class="footer-fix-nav shadow">
      <div class="row">
         <div class="col">
            <a href="<?php echo $url;?>"><i class="icofont icofont-home"></i></a>
         </div>
		  
		  <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>	
          <div class="col">
            <a href="hesabim/"><i class="icofont icofont-user"></i></a>
         </div>
		 <?php } else { ?> 
		  <div class="col">
            <a href="uyeol/"><i class="icofont icofont-user"></i></a>
         </div>
		 <?php } ?>
		 
         <div class="col active">
            <a href="sepet/"><i class="icofont icofont-cart"></i></a>
         </div>
        
		 <div class="col border-0">
            <a type="button" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="icofont icofont-search"></i></a>
         </div>
         <div class="col">
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $ayar['whatsapp'];?>&amp;text=Merhaba bilgi almak istiyorum."><i class="icofont icofont-whatsapp"></i></a>
         </div>
      </div>
   </div>
   <nav id="main-nav">

      <ul class="first-nav">
        <li class="search" data-nav-custom-content>
          <div class="form-container">
            <form class="search-form" action="arama/" target="_blank" method="FET">
              <input type="text" name="arama" placeholder="Ne Aramıştınız..." autocomplete="off" required>
            </form>
          </div>
        </li>
       
      </ul>

      <ul class="second-nav">
	  
	  
	  
	  	<?php $ustkattt = $ozy->query("select * from kategoriler where durum='1' and ustkat='0' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
        foreach($ustkattt as $katadi){?>

        <?php if($katadi['ac']=='1'){?>	 
	  
        <li class="<?php echo $katadi['seo']; ?>">
          <span><?php echo $katadi['adi']; ?></span>
          <ul>
		  
		  
		       <?php 
				
				$ustkatid = $katadi['id'];
				$ustkattta = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkattta as $katadi2){?>
              <li class="<?php echo $katadi2['seo']; ?>">
              <a href="kategori/<?php echo $katadi2['seo']; ?>"><?php echo $katadi2['adi']; ?></a>
              <ul>
			  
			    <?php 
				
				$ustkatid2= $katadi2['id'];
				$ustkatttaz = $ozy->query("select * from kategoriler where durum='1' and ustkat='$ustkatid2' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach($ustkatttaz as $katadi22){?>
                <li><a href="kategori/<?php echo $katadi22['seo'];?>"><?php echo $katadi22['adi'];?></a></li>
                <?php } ?> 
				
				
              </ul>
            </li>
			<?php } ?> 
			
          
           
            
          </ul>
        </li>
		
		
		<?php } else { ?>	
		
    
	
	
	
        <li class="<?php echo $katadi['seo']; ?>"><a href="kategori/<?php echo $katadi['seo']; ?>"><?php echo $katadi['adi']; ?></a></li>
       <?php }} ?>	  
        
      </ul>

      <ul class="bottom-nav">
        <li class="github">
          <a href="<?php echo $url;?>" target="_blank">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
          </a>
        </li>
        <li class="email">
          <a href="mailto:<?php echo $ayar['email'];?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          </a>
        </li>
        <li class="ko-fi">
          <a href="iletisim/" target="_blank">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.881 8.948c-.773-4.085-4.859-4.593-4.859-4.593H.723c-.604 0-.679.798-.679.798s-.082 7.324-.022 11.822c.164 2.424 2.586 2.672 2.586 2.672s8.267-.023 11.966-.049c2.438-.426 2.683-2.566 2.658-3.734 4.352.24 7.422-2.831 6.649-6.916zm-11.062 3.511c-1.246 1.453-4.011 3.976-4.011 3.976s-.121.119-.31.023c-.076-.057-.108-.09-.108-.09-.443-.441-3.368-3.049-4.034-3.954-.709-.965-1.041-2.7-.091-3.71.951-1.01 3.005-1.086 4.363.407 0 0 1.565-1.782 3.468-.963 1.904.82 1.832 3.011.723 4.311zm6.173.478c-.928.116-1.682.028-1.682.028V7.284h1.77s1.971.551 1.971 2.638c0 1.913-.985 2.667-2.059 3.015z"/></svg>
          </a>
        </li>
      </ul>

    </nav>

   <div class="cart-sidebar">
      <div class="cart-sidebar-header">
         <h5>
           Sepetim <span class="text-info">(<?php echo $sepetsayi;?> ürün)</span> <a data-toggle="offcanvas" class="float-right" href="sepet/">
		   <i class="icofont icofont-close-line"></i>
            </a>
         </h5>
      </div>
	  <?php if($sepetsayi>='1'){?>
	  
      <div class="cart-sidebar-body">
	  	  <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
	  
         <div class="cart-list-product">
		 
        
			
			<form action="" method="POST" class="float-right remove-cart">
										<input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
                                        <button style="background: none;
border: none;
color: red;" name="delete" type="submit" class="btn-remove" title="Sil"><i class="icofont icofont-close-circled"></i></button>
                                        </form>	
			
			
			
            <img class="img-fluid" src="resimler/urunler/<?php echo $sepet['resim']; ?>" alt="<?php echo $sepet['adi']; ?>">
            <?php if($sepet['idurum']=='1'){?>
                     <span class="badge badge-danger">- %<?php echo yuzdeHesaplama($sepet['fiyat'],$sepet['ifiyat']);?></span>
			<?php } ?> 
            <h5><a href="urun/<?php echo $sepet['seo'];?>"><?php echo $sepet['adi'];?></a></h5>
			          <div class="stars-rating">
					  <?php echo $sepet['yildiz'] == '1' ? '<i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $sepet['yildiz'] == '2' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $sepet['yildiz'] == '3' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $sepet['yildiz'] == '4' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  <?php echo $sepet['yildiz'] == '5' ? '<i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i>' : null; ?>
					  </div>   
   <h5><a href="urun/<?php echo $sepet['seo'];?>"></br><?php echo $sepet['ekurun'];?></a></h5>
				  
            <p class="f-14 mb-0 text-dark float-right">
			
			<?php echo fiyatgoster($sepet['fiyat']+$sepet['efiyat']);?>
			
			</p>
            
         </div>
     <?php }} ?>     
		
		
      </div>
      <div class="cart-sidebar-footer">
         <div class="cart-store-details">
            <p>Ara Tutar: <strong class="float-right"><?php echo $aratutari;?></strong></p>
            <p>Kdv Bedeli: <strong class="float-right text-danger"><?php echo $kdvtutari;?></strong></p>
            <p>Kargo Bedeli: <strong class="float-right"><?php echo $kargometni;?></strong></p>
         </div>
		 
         <a href="sepet/"><button class="btn btn-primary btn-lg btn-block text-left" type="button"><span
         class="float-left"><i class="icofont icofont-cart"></i> Satın Al </span><span
         class="float-right"><strong><?php echo $toplamtutari;?></strong> <span
         class="icofont icofont-bubble-right"></span></span></button>
		 </a>
					 
					 
      </div>
	  
	    <?php }else{ ?>
	  
	  <b style="margin-left:10px;font-weight:500;">Sepetinizde ürün bulunamadı</b>
	  
	    <?php } ?>
	  
   </div>
   
   <!-- Bootstrap core JavaScript -->
   <script src="<?php echo $sitetemasi;?>/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo $sitetemasi;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- select2 Js -->
   <script src="<?php echo $sitetemasi;?>/vendor/select2/js/select2.min.js"></script>
   <!-- Owl Carousel -->
   <script src="<?php echo $sitetemasi;?>/vendor/owl-carousel/owl.carousel.js"></script>
   <!-- Slider Js -->
   <script src="<?php echo $sitetemasi;?>/vendor/slider/slider.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="<?php echo $sitetemasi;?>/js/custom.js"></script>
   <script src="<?php echo $sitetemasi;?>/js/hc-offcanvas-nav.js?ver=4.1.1"></script>
   <link rel="stylesheet" href="<?php echo $sitetemasi;?>/js/demo.css?ver=3.4.0">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <script>
      (function($) {
        var $main_nav = $('#main-nav');
        var $toggle = $('.toggle');

        var defaultOptions = {
          disableAt: false,
          customToggle: $toggle,
          levelSpacing: 40,
          navTitle: 'Tüm Kategoriler',
          levelTitles: true,
          levelTitleAsBack: true,
          pushContent: '#container',
          insertClose: 2
        };

        // call our plugin
        var Nav = $main_nav.hcOffcanvasNav(defaultOptions);

        // add new items to original nav
        $main_nav.find('li.add').children('a').on('click', function() {
          var $this = $(this);
          var $li = $this.parent();
          var items = eval('(' + $this.attr('data-add') + ')');

          $li.before('<li class="new"><a href="#">'+items[0]+'</a></li>');

          items.shift();

          if (!items.length) {
            $li.remove();
          }
          else {
            $this.attr('data-add', JSON.stringify(items));
          }

          Nav.update(true);
        });

        // demo settings update

        const update = (settings) => {
          if (Nav.isOpen()) {
            Nav.on('close.once', function() {
              Nav.update(settings);
              Nav.open();
            });

            Nav.close();
          }
          else {
            Nav.update(settings);
          }
        };

        $('.actions').find('a').on('click', function(e) {
          e.preventDefault();

          var $this = $(this).addClass('active');
          var $siblings = $this.parent().siblings().children('a').removeClass('active');
          var settings = eval('(' + $this.data('demo') + ')');

          update(settings);
        });

        $('.actions').find('input').on('change', function() {
          var $this = $(this);
          var settings = eval('(' + $this.data('demo') + ')');

          if ($this.is(':checked')) {
            update(settings);
          }
          else {
            var removeData = {};
            $.each(settings, function(index, value) {
              removeData[index] = false;
            });

            update(removeData);
          }
        });
      })(jQuery);
    </script>


<link href="boss/assets/toastr/toastr.css" rel="stylesheet"/>
<script src="boss/assets/toastr/toastr.min.js"></script>
<?php require_once('func/global.php');?>




<?php if($tema['t11']){?>
   <div  class="newsletter-overlay">

  <div id="newsletter-popup" style="background:none !important;">
    <a href="#" class="popup-close">X</a>
      <div class="row justify-content-center">
            <div class="col-12">
              <a href="<?php echo $tema['t10']; ?>"><img style="    width: 100%;box-shadow: 2px 2px 16px white;" src="resimler/temaayarlari/<?php echo $tema['t9']; ?>"></a></img>
                      
                  
                
            </div>
        </div>
  </div>
</div>
<?php } ?>


	
	
<style>

#newsletter-popup{
  margin: 70px auto;
  padding:30px 40px 40px;
  background: #f5828a;
  border-radius: 5px;
  width: 50%;
  position: relative;
  transition: all 1s ease-in-out;
  min-height: 300px;
}


@media screen and (max-device-width: 480px) and (orientation: portrait){
.altbar{
display:block !important;
}
}	

@media screen and (max-width: 1366px){
  #newsletter-popup{
    width: 100%;
  }

}

@media screen and (max-width: 992px){
  #newsletter-popup{
    width: 100%;
  }
}

.newsletter-overlay{
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 1;
  display: none;
  z-index: 999999999999;
}

#newsletter-popup h3{
  color: #fff;
  font-size: 24px;
  margin: 0 0 10px;
  font-family: 'Gloria Hallelujah',cursive;
}

#newsletter-popup input[type="text"]{
    width: 100%;
    height: 36px;
    border: none;
    text-indent: 10px;
    font-size: 13px;
    border-bottom: 2px solid #faeaec;
    border-top: 2px solid #fff;
    padding: 0;
    color: #666;
    margin-bottom: 15px;
}

#newsletter-popup input[type="submit"]{
  background: #6EC5D9;
    border: none;
    border-bottom: 3px solid #57B8CE;
    color: #fff;
    text-align: center;
    display: block;
    padding: 0;
    line-height: 1.5;
    width: 100%;
    cursor: pointer;
    margin: 0;
    font-size: 21px;
    font-family: "Gloria Hallelujah",cursive;
}

#newsletter-popup .popup-close{
  color: #fff;
  height: 30px;
  width: 30px;
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  text-decoration: none;
  line-height: 30px;
  font-family:  "Gloria Hallelujah",cursive;
  font-weight: bold;
  background: #b1a6a6;
  border-radius: 100%;
}


</style>	
	
	
	
<script>
$(document).ready(function() {
		
		$('input[name="uyetip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#kurumsal").show();
			$("#kurumsal2").show();
			$("#kurumsal3").show();
			$("#bireysel").hide();
		}
		else{
			$("#kurumsal").hide();
			$("#kurumsal2").hide();
			$("#kurumsal3").hide();
			$("#bireysel").show();
		}
	});	
	
	
	$('input[name="yeniletip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#kurumsal").show();
			$("#kurumsal2").show();
			$("#kurumsal3").show();
			$("#bireysel").hide();
		}
		else{
			$("#kurumsal").hide();
			$("#kurumsal2").hide();
			$("#kurumsal3").hide();
			$("#bireysel").show();
		}
	});	
	
	
		$('input[name="sifretip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#sifre1").show();
		}
		else{
			$("#sifre1").hide();

		}
	});	
	
	
	
		$('input[name="faturatip"]').on("change",function(){
			//alert($(this).prop("value"));
		if($(this).prop("value")=="1"){
			$("#faturaadres").show();
			$("#faturail").show();
			$("#faturailce").show();
		}
		else{
			$("#faturaadres").hide();
			$("#faturail").hide();
			$("#faturailce").hide();
		}
	});	
	
	

    
		$('#adresgeldi').on('change', function() {			
        $("#uyeadresal").val($(this).children("option:selected").attr("data-adres"));		
        $("#adresilce").val($(this).children("option:selected").attr("data-ilce"));
        $("#adresil").val($(this).children("option:selected").attr("data-il"));

        		 
			
		});	
       




    });	
		
		

	

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }        

	   

</script>
<script>
			$(function(){
				$(".yenile_buton").click(function(){
					$(".guvenlik_resmi").attr("src","<?php echo $sitetemasi;?>/captcha.php?d="+Math.random());
				});
			});
</script>	

<script type="text/javascript" charset="utf-8">

   
 var delay = 1000; //in milleseconds

jQuery(document).ready(function($){
  setTimeout(function(){ showNewsletterPopup(); }, delay);
  
  $('.popup-close').click(function(){
      $('.newsletter-overlay').hide();
      
      //when closed create a cookie to prevent popup to show again on refresh
      setCookie('newsletter-popup', 'popped', 30);
  });
});

function showNewsletterPopup(){
  if( getCookie('newsletter-popup') == ""){
     $('.newsletter-overlay').show();
     setCookie('newsletter-popup', 'popped', 30);
  }
  else{
    console.log("Newsletter popup blocked.");
  }
}


function setCookie(cname,cvalue,exdays)
{
    var d = new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+"; path=/";
}

function getCookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) 
    {
        var c = jQuery.trim(ca[i]);
        if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
}
 </script>
<link href="<?php echo $sitetemasi;?>/lightbox/css/lightbox.css" rel="stylesheet" media="screen" />
<script src="<?php echo $sitetemasi;?>/lightbox/js/lightbox.js" type="text/javascript"></script>  


</body>
</html>
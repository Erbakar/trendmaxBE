<title>Alışveriş Sepetim</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Alışveriş Sepetim"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php 


if (isset($_POST['sepetupdate'])) {

$urunid  = temizle($_POST['urunid']);
$adet  = temizle($_POST['adet']);
$sepetid  = temizle($_POST['sepetid']);
$sepeturunid = $ozy->query("select * from urunler where id='$urunid'")->fetch(PDO::FETCH_ASSOC);
if($sepeturunid['alode']=='1' and $_POST['adet']>=$sepeturunid['al'] ){
$sonadet = temizle($_POST['adet']);	
$alodedurum = "1";	
$yeniadet  = ($sonadet/$sepeturunid['al']);
$adet = ceil($yeniadet*$sepeturunid['ode']);
$alodedurum = "1";
$kazanc = $sonadet - $adet;
$alodemetin = "".$kazanc." ADET ÜRÜN HEDİYE";
$alodeadet = $kazanc;
} else { 
$adet  = temizle($_POST['adet']);
$alodedurum = "0";
$alodemetin = "";
$alodeadet = "";
}	

$stok = $sepeturunid['stok'];

if($system['sinirsizstok']!='1'){	
if($adet>$stok){	

echo '<script type="text/javascript">$(document).ready(function(){toastr["error"]("'.$sepeturunid['adi'].' isimli üründen en fazla '.$stok.' adet alabilirsiniz.", "Başarısız");});</script>';
   
	
} else {


        $sepguncelle = $ozy->prepare("update sepet set adet=?, alodedurum=?, alodemetin=?, alodeadet=? where id=?");
        $sepguncelle->execute(array($adet,$alodedurum,$alodemetin,$alodeadet,$sepetid));
        
		
		if ($sepguncelle) {

	    header("Location:".$url."/sepet/");
	 
		
		}

}





} else {	
	
	
		$sepguncelle = $ozy->prepare("update sepet set adet=?, alodedurum=?, alodemetin=?, alodeadet=? where id=?");
        $sepguncelle->execute(array($adet,$alodedurum,$alodemetin,$alodeadet,$sepetid));
        
		
		if ($sepguncelle) {

	     header("Location:".$url."/sepet/");
	 
		
		}
	
	
}	



 } 
 
 ?>


        <div class="breadcrumb-box">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="<?php echo $url;?>" title="Ana Sayfa">Ana Sayfa</a></li>
			  <li><a>Alışveriş Sepetim</a></li></ul>	
          </div>
        </div>

        <header class="page-header bottom-padding-mini">
      	
        </header>
        <section id="main" style="background:white !important;">
          <div class="container">
          	<div class="row">
			   
	
					<?php if($sepetsayi<='0'){?>
						 <div class="col-md-12">
           
             
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center" style="text-align: center;"> 
					<img style="margin: auto !important;width: 200px;" src="<?php echo $sitetemasi;?>/user/sepetbos.png" width="100" height="100" class="img-fluid mb-4 mr-3">
                        <h5><strong>Alışverişiz Sepetiniz Boş</strong></h5>
                        <h5>Biraz Gezinmeye Ne Dersin :)</h5> <a href="<?php echo $url;?>" style="background: <?php echo $tema['t37'];?>;border: none;" class="btn btn-primary cart-btn-transform m-3" data-abc="true">hadi gezinelim :)</a>
                    </div>
                </div>
           
        </div>
<?php } else { ?>


<div class="fluid-container">
   <div class="container cart-container my-4">
    
      <div class="row mb-3">
         <div class="col-sm-9 col-12 okey">
            <div class="cart-container-left">
			
			          <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
			
			
               <div class="cart-product-container">
                  <div class="cart-product-container-left">
				  <img src="resimler/urunler/<?php echo $sepet['resim'];?>"></div>
                  <div class="cart-product-container-middle">
                     <div class="row">
                        <div class="col-12 cart-product-title mb-2">
                           <a href="urun/<?php echo $sepet['seo'];?>">
                              <h2><?php echo $sepet['adi'];?></h2>
                           </a>
                        </div>
                        <div class="col-12 cart-product-variant-title mb-2">
                           <h3><?php echo $sepet['ekurun'];?></h3>
                        </div>
						
                        <div class="col-12 mb-1 cart-product-quantity"><b>Adet : <?php echo $sepet['adet'];?></b></div>
                        <div class="col-12 cart-product-prices">
						<span class="fw-bold active-color newfiyat"><?php echo fiyatgoster($sepet['fiyat']*$sepet['adet']);?></span></div>
                     
					 	                                <?php if($sepet['kargo']=='1'){?>
					                                    <span class="badge1">
					                                     <i class="fa fa-truck"></i> ÜCRETSİZ KARGO
					                                    </span>
                                                        <?php } ?>
														 <?php if($sepet['alodedurum']=='1'){?> 
                                                        <span class="badge2">
					                                    <i class="fa fa-gift"></i> <?php echo $sepet['alodemetin'];?></span>
                                                        <?php } ?>
					 </div>
                  </div>
                  <div class="cart-product-container-right">
				    <form action="" method="POST">
                     
					 <div class="cart-product-quantity-changer">
                        <a  id="AdetArttir<?php echo $sepet['id'];?>"><div class="cart-product-quantity-changer-increaser"><i class="fa fa-plus"></i></div></a>
                        <div class="cart-product-quantity-changer-quantity">
					   
					    
						<?php if($sepet['alodedurum']=='1'){?> 
						<?php $newstok = $sepet['adet']+$sepet['alodeadet'];?>
						<?php } else { ?>
						<?php $newstok = $sepet['adet'];?>
						<?php } ?>
			            <?php if($system['sinirsizstok']!='1'){	?>
			            <input class="submit_on_enter" type="text" data-type="number"  pattern="[0-9]*" id="NormalAdeti<?php echo $sepet['id'];?>" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="<?php echo $sepet['stok'];?>"  size="2">
                        <?php } else { ?>
                        <input class="submit_on_enter" type="text" data-type="number"  pattern="[0-9]*" id="NormalAdeti<?php echo $sepet['id'];?>" onchange="this.form.submit()" name="adet" value="<?php echo $newstok;?>" min="1" max="9999999999999999999">
                        <?php } ?>
					
						  
						</div>
                        <a id="AdetAzalt<?php echo $sepet['id'];?>"><div class="cart-product-quantity-changer-decreaser"><i class="fa fa-minus"></i></div></a>
                     </div>
                
				   
					
					 <input type="hidden" name="sepetid" value="<?php echo $sepet['id']; ?>"/>
					 <input type="hidden" name="urunid" value="<?php echo $sepet['urunid']; ?>"/>
					 <button name="deletex" type="submit" style="background: white;" class="cart-product-remove">
					 <i class="fa fa-trash"></i>
					 </button>
					 
					 <button name="sepetupdate" type="submit" style="background: <?php echo $tema['t37']; ?>;color: white;" class="cart-product-remove">
					 <i class="fa fa-refresh"></i>
					 </button>
					 </form>
					
                  </div>
				 
				  
               </div>
			   
			
			<?php }} ?> 
			
			
			
            </div>
         </div>
         <div class="col-sm-3 col-12">
            <div class="cart-container-right">
               <div class="row">
                  <div class="col-12 px-0 mb-3">
				  
				  
				  
				  
				  
				  
	        						     				    <form method="POST" action="" style="border: 2px solid #f5f5f5;
padding: 10px;
border-radius: 4px;">
	<div class="form-group">
		
		
			<input type="text" class="form-control" name="kuponadi" placeholder="İndirim Kuponu Kodunuz">
			<button class="btn btn-primary" style="margin-top: -6%;
width: 100%;background:<?php echo $tema['t37'];?> !important;border:none;" type="submit" name="kuponguncelle">Kuponu Uygula</button>
			
		
	</div>
	</form>
				  
				  
				                           <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
	                						     				    <form method="POST" action="" style="border: 2px solid #f5f5f5;
padding: 10px;
border-radius: 4px;">
				 	                        <div class="form-group">
			       
			            					
											
											<select name="kuponadi" class="form-control" style="background: #f9f9f9;margin-bottom: 10px;font-weight: 400;" onchange='this.form.submit()'>
											<option value="0">Aktif Hediye Çeklerim</option>
											<?php $uyeepostamiz = temizle($uyebilgileri['email']);
		                                    $cekoku = $ozy->query("select * from kuponlar where durum='1' and sekil='1' and epostalar like '%$uyeepostamiz%' and gtarih>='$buguntarihim' and kullanildi not like '%$uyeepostamiz%' order by id DESC")->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($cekoku as $hediyecek) {?>
											<option value="<?php echo $hediyecek['adi']?>"><?php echo $hediyecek['adi']?></option>
											<?php } ?>
				        					</select>
											
				        					<input type="hidden" name="cekguncelle">
										
			            			
			            			         </div><!-- End .cart-discount -->
	                					
											</form>
											<?php } ?> 
				  
                     <div class="cart-summary">
                        <h2>Sipariş Özeti</h2>
                        <table cellspacing="0" cellpadding="0">
                           <tbody>
                              <tr>
                                 <td class="black">Ara Tutar :</td>
                                 <td class="text-end"><?php echo $aratutari;?></td>
                              </tr>
							   <tr>
                                 <td class="black">KDV :</td>
                                 <td class="text-end"><?php echo $kdvtutari;?></td>
                              </tr>
							  
							    <tr>
                                 <td class="black">Kargo Bedeli :</td>
                                 <td class="text-end"><?php echo $kargometni;?></td>
                              </tr>
							  <?php if($kuponindirim!='0'){?>
							   <tr>
                                 <td class="black">İndirim Bedeli :</br><a style="padding:2px;font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?kuponsil">Kuponu Sil</a></td>
                                  <td class="text-end" style="color: red !important;">- <?php echo fiyatgoster($kuponindirim)?></td>
                              </tr>
							  <?php } ?>
							  <?php if($cekindirim!='0'){?>
							   <tr>
                                 <td class="black">Çek İndirimi :</br><a style="padding:2px;font-size: 12px;background: #dd1616a8;color: white;" href="sepet/?ceksil">Hediye Çeki Sil</a></td>
                                  <td class="text-end" style="color: red !important;">- <?php echo fiyatgoster($cekindirim)?></td>
                              </tr>
							  <?php } ?>
							  
                              <tr>
                                 <td colspan="2">
                                    <hr>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="black">Ödenecek Tutar :</td>
                                 <td class="cart-summary-total-price"><?php echo $toplamtutari;?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-12 mb-3 px-0">
				     <?php if ($_SESSION['uyegirisdurumu'] == 'true') { ?>
                     <a href="odeme/">
					 <div class="cart-confirm">
					 <span class="me-3">Sepeti Onayla</span><span> <i class="fa fa-arrow-right">
					 </i></span>
					 </div>
					 </a>
					 <?php } else { ?>
					 <a href="kontrol/">
					 <div class="cart-confirm" style="background:black;">
					 <span class="me-3">Sepeti Onayla</span><span> <i class="fa fa-arrow-right">
					 </i></span>
					 </div>
					 </a>
					 <?php } ?>
					 
                  </div>
			
			 
				  
               </div>
            </div>
         </div>
      </div>
      <div class="row"></div>
   </div>
</div>

  
	<?php } ?>
	
	
		
	                	</div><!-- End .row -->
						
			
          </div>
        </section>
<style>
.cart-container {
 padding:0
}
.cart-container,
.cart-container-title {
 width:100%;
 height:auto
}
.cart-container-title h1 {
 font-size:22px;
 color:#555
}
.cart-container-left {
 position:relative;
 float:left;
 width:100%;
 height:auto
}
.cart-container-right {
 width:calc(100% - 15px);
 height:auto;
 border-radius:10px;
 margin-left:2%;
}
.cart-product-container {
 position:relative;
 float:left;
 width:100%;
 height:auto;
 border:2px solid #f5f5f5;
 background-color:#fff;
 border-radius:5px;
 padding:15px;
 margin-bottom:15px
}
.cart-product-container-left {
 position:relative;
 float:left;
 width:100px;
 height:auto
}
.cart-product-container-left img {
 width:100%;
 height:120px;
 -o-object-fit:cover;
 object-fit:cover;
 border-radius:5px
}
.cart-product-container-middle {
 position:relative;
 float:left;
 width:calc(100% - 140px);
 height:auto;
 padding-left:20px
}
.cart-product-container-right {
 position:relative;
 float:left;
 width:40px;
 height:auto;
 margin-top: 2% !important;
}
.cart-product-title>a {
 text-decoration:none
}
.cart-product-title h2 {
 font-size:15px;
 margin-bottom:3px;
 color:#555;
 font-weight:500;
}
.cart-product-variant-title h3 {
 color:#555;
 font-weight:400;
 font-size:12px;
 margin-bottom:0
}
.cart-product-quantity-changer {
 width:100%;
 height:100px;
 border:1px solid #e0e0e0;
 border-radius:10px
}
.cart-product-quantity-changer-decreaser,
.cart-product-quantity-changer-increaser,
.cart-product-quantity-changer-quantity {
 height:40px;
 text-align:center;
 font-size:10px;
 color:#777;
 width:100%;
 cursor:pointer
}
.cart-product-quantity-changer-quantity {
 height:20px
}
.cart-product-quantity-changer-decreaser:hover,
.cart-product-quantity-changer-increaser:hover {
 color:#000
}
.cart-product-quantity-changer-decreaser,
.cart-product-quantity-changer-increaser {
 line-height:40px
}
.cart-product-quantity-changer-quantity input[type=text] {
 width:100%;
 height:20px;
 text-align:center;
 border:none;
 font-size:13px;
 font-weight:500;
 color:#555
}
.cart-product-remove {
 width:40px;
 height:40px;
 line-height:40px;
 text-align:center;
 border:1px dashed #e0e0e0;
 border-radius:8px;
 margin-top:5px;
 font-size:14px;
 color:#777;
 cursor:pointer;
 line-height: 0px;
 display: block !important;
}
.cart-product-remove:hover {
 border:1px dashed var(--themeColor);
 color:var(--themeColor)
}

.cart-product-quantity {
 font-size:12px;
 color:#555;
 font-weight:400
}

.text-end {
font-size: 14px;
font-weight: 500;
}	
.product-card-min {
 position:relative;
 float:left;
 display:block;
 width:150px;
 height:auto;
 background:#fff;
 border-radius:10px;
 margin-right:0;
 transition:transform .3s
}
.product-card-min:hover {
 transform:scale(1)
}
.product-card-min a {
 text-decoration:none
}
.product-card-min>img {
 vertical-align:baseline!important;
 width:100%;
 height:245px;
 border-radius:5px;
 -o-object-fit:cover;
 object-fit:cover;
 -o-object-position:50% 50%;
 object-position:50% 50%
}
.product-card-min-image {
 width:100%
}
.product-card-min-image img {
 width:100%;
 height:200px;
 -o-object-fit:cover;
 object-fit:cover;
 border-radius:5px
}
.product-card-min-image img:first-child {
 display:block
}
.product-card-min-image img:last-child {
 display:none
}
.product-card-min:hover>.product-card-min-image img:last-child {
 display:block
}
.product-card-min:hover>.product-card-min-image img:first-child {
 display:none
}
.product-card-min-title {
 width:100%;
 height:25px;
 line-height:25px;
 margin-top:5px;
 padding:0 10px;
 color:#777;
 font-size:13px;
 word-wrap:break-word;
 overflow-wrap:break-word;
 white-space:nowrap;
 overflow:hidden;
 text-overflow:ellipsis
}
.product-card-min-price {
 width:100%;
 height:25px;
 position:relative;
 padding:0 10px
}
.product-card-min-price1 {
 font-weight:500;
 color:var(--themeColor)
}
.product-card-min-price1,
.product-card-min-price2 {
 float:left;
 height:25px;
 line-height:25px;
 font-size:14px
}
.product-card-min-price2 {
 text-decoration:line-through;
 color:#999;
 margin-right:5px
}
.message-container {
 position:fixed;
 top:10px;
 right:10px;
 width:250px;
 height:auto;
 z-index:15
}
.message-box {
 height:auto;
 background:#fff;
 font-size:12px;
 box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
 margin-bottom:10px
}
.cart-confirm,
.message-box {
 width:100%;
 padding:10px 15px;
 border-radius:5px;
 color:#fff;
 font-weight:500
}
.cart-confirm {
background: <?php echo $tema['t37'];?>;
text-align: center;
font-size: 16px;
cursor: pointer;
margin-bottom: 30px;
}
.cart-confirm-disabled {
 background:#bdbdbd;
 cursor:not-allowed
}
.cart-gift-certificate-container {
 width:100%;
 height:auto;
 padding:15px;
 background:#f5f5f5;
 box-shadow:0 1px 3px rgb(0 0 0/20%);
 border-radius:3px
}
.cart-gift-certificate-container h2 {
 font-size:14px;
 color:#555;
 font-weight:400;
 padding-bottom:10px
}
.cart-summary {
width: 100%;
height: auto;
padding: 15px 20px;
background: #fff;
box-shadow: 0 1px 3px rgba(37, 35, 35, 0.14);
border-radius: 3px;
padding-top:5px;
}
.cart-summary h2 {
font-size: 14px;
color: #555;
margin-bottom: 10px;
margin-top: 10px;
border-bottom: 1px solid black;
text-align: center;
padding-bottom: 10px;
}
.cart-summary table {
 width:100%;
 height:auto
}
.cart-summary table tr {
height: 30px;
line-height: 1px;
font-size: 13px;
color: #555;
margin-top: 14px;
}
.cart-summary-total-price, .cart-product-prices span {
text-align: right;
font-size: 16px;
font-weight: bold;
color: <?php echo $tema['t37'];?>;
}
.cart-recommended-products-container,
.cart-recommended-products-title {
 width:100%;
 height:auto
}
.cart-recommended-products-title h2 {
 font-size:20px;
 color:#555
}
.cart-recommended-products {
 width:100%;
 height:auto;
 overflow-x:auto;
 overflow-y:hidden;
 white-space:nowrap;
 -webkit-overflow-scrolling:touch;
 padding-bottom:10px
}
.link-block {
  width: 120px;
  text-decoration: none;
  color: #fff;
  font-size: 12px;
}
.badge1 {
width: 18% !important;
color: #e41313;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
}

.badge2 {
width: 20% !important;
color: #a88f0a;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
padding-right: 8px;
padding-left: 8px;
margin-left: 2%;
}
.okey {

}	
	
@media screen and (max-device-width: 480px) and (orientation: portrait){
	
.okey {

  
}	
	
	
	
	
	
.badge1 {
width: 85% !important;
color: #e41313;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
}

.badge2 {
width: 85% !important;
color: #a88f0a;
font-weight: 600;
font-size: 10px;
margin-bottom: 10px;
background: whitesmoke;
padding: 8px;
  padding-right: 8px;
  padding-left: 8px;
padding-right: 8px;
padding-left: 8px;
margin-left: 2%;
}

}


.black{
font-weight: bold;
}

.form-inline .form-control {
  display: block !important;
  width: auto;
  vertical-align: middle;
}
</style>
<script src="<?php echo $sitetemasi;?>/user/jquery.min.js"></script>

<script src="<?php echo $sitetemasi;?>/user/bootstrap-input-spinner.js"></script>

                      <?php
					  $sepetebak = $ozy->prepare("SELECT * FROM sepet WHERE kim=? and gelenkim=?");
					  $sepetebak->execute(array($ip,$sepetimdekikim));
					  if ($sepetebak->rowCount()) {
					  $uyesepeti = $ozy->prepare("SELECT * FROM urunler 
					  INNER JOIN sepet ON urunler.id = sepet.urunid  
					  WHERE sepet.kim=? and sepet.gelenkim=? ORDER BY sepet.id DESC");                
					  $uyesepeti->execute(array($ip,$sepetimdekikim));
					  foreach ($uyesepeti as $sepet) {?>
			
<script type="text/javascript">
    jQuery(document).ready(function ($) {
  
            $("#AdetArttir<?php echo $sepet['id'];?>").on("click", function () {
                var adet = $("#NormalAdeti<?php echo $sepet['id'];?>").val();
                if (adet < 8) {
                adet++;
            $("#NormalAdeti<?php echo $sepet['id'];?>").val(adet);
            }
            });
            $("#AdetAzalt<?php echo $sepet['id'];?>").on("click", function () {
                var adet = $("#NormalAdeti<?php echo $sepet['id'];?>").val();
            if (adet > 0) {
                adet--;
                $("#NormalAdeti<?php echo $sepet['id'];?>").val(adet);
            }
            });
            $("#NormalAdeti<?php echo $sepet['id'];?>").keypress(function (e) {
            var regex = new RegExp("^[0-9]");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
            });
            

    });
	



</script>
<?php }} ?>
        <div class="clearfix"></div>  
	
 
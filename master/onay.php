<title>Üyelik Aktivasyonu</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   <div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="javascript:;" class="link-12">Üyelik Aktivasyonu</a>
            </div>
        </div>
        <div class="div-block-4461292330">
            <div class="w-row">
 
                <div class="column-188 w-col w-col-12">
                    <div class="div-block-4-46129247472ip">
                       
                        <div class="div-block-496">
    
  <div class="col-sm-12 empty-cart-cls text-center" style="text-align: center;"> 
  
		
	  <?php  

				$email = temizle($_GET["email"]);
				$kod    = temizle($_GET["kod"]);

				if(!$email || !$kod){

					echo '<div  class="alert alert-warning" style="  background: red;
  padding: 10px;
  color: white;
  font-weight: 500;">Gereken kodlar eksik veya boş görünüyor.</div>';


				}else {


					$emailgeldi = $ozy->prepare("select * from users where email=? and kod=?");
					$emailgeldi->execute(array($email,$kod));
					$emailgeldi->fetch(PDO::FETCH_ASSOC);
					$kontrolet = $emailgeldi->rowCount(); 

					if($kontrolet){

						$guncelle = $ozy->prepare("update users set onay=? where email=? and kod=?"); 

						$ok =  $guncelle->execute(array(1,$email,$kod)); 

						if($ok == true){

							echo '<div class="alert alert-warning" style="background: #54d625;
padding: 10px;
color: white;
font-weight: 500;">Üyeliğiniz başarıyla aktif edildi. Sisteme giriş yapabilirsiniz.</div>'; 


						}else	{

							echo '<div class="alert alert-warning" style="  background: red;
  padding: 10px;
  color: white;
  font-weight: 500;">Onaylama başarısız. Veritabanı hatası oluştu.</div>'; 


						}


					}else {

						echo '<div  class="alert alert-warning" style="  background: red;
  padding: 10px;
  color: white;
  font-weight: 500;">Onay kodu yanlış veya daha önce onaylanmış.</div>'; 

					}


				}



				?>
					</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
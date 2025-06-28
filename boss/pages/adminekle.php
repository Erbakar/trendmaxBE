<?php 

if($_GET['duzenle']){
$id = temizle($_GET['duzenle']);
$ekresimid = temizle($_GET['duzenle']);
$sayfam = $ozy->query("select * from admin where id=$id")->fetch(PDO::FETCH_ASSOC); 
///Sayfa güncelleme kodları başlangıç
if (isset($_POST['guncelle'])) {



  $adi   = temizle($_POST['adi']);
  $kullaniciadi   = temizle($_POST['kullaniciadi']);
  $sifre   = md5($_POST['sifre']);
  $durum   = temizle($_POST['durum']);
  $tarih   = date('d.m.Y H:i:s');
  $sifretip   = temizle($_POST['sifretip']);


  if($sifretip=='1'){


   $id = $_GET['duzenle'];
   $stmt = $ozy->prepare("UPDATE admin SET adi = ?, kullaniciadi = ?, sifre = ?, durum = ?, tarih = ? WHERE id = ?");
   $result2 = $stmt->execute(array($adi, $kullaniciadi, $sifre, $durum, $tarih, $id));
   
   }else{
	   
   $id = $_GET['duzenle'];
   $stmt = $ozy->prepare("UPDATE admin SET adi = ?, kullaniciadi = ?, durum = ?, tarih = ? WHERE id = ?");
   $result2 = $stmt->execute(array($adi, $kullaniciadi, $durum, $tarih, $id));
      
  }   
   
   if($result2){
	echo '<script type="text/javascript">$(document).ready(function(){toastr["success"]("Başarıyla veriyi güncellediniz.", "Başarılı");});</script>';
	echo '<meta http-equiv="refresh" content="1; url='.$url.'/boss/admin/duzenle/'.$id.'">'; 	

   }else{

    echo '<script type="text/javascript">$(document).ready(function(){toastr["error"]("Üzgünüm bir hata oluştu :(", "Başarısız");});</script>';
    

   }






	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}



////Sayfa güncelleme kodları bitiş

}else{
	

 
if (isset($_POST['kaydet'])) {
	
  $adi   = temizle($_POST['adi']);
  $kullaniciadi   = temizle($_POST['kullaniciadi']);
  $sifre   = md5($_POST['sifre']);
  $durum   = temizle($_POST['durum']);
  $tarih   = date('d.m.Y H:i:s');
  $sifretip   = temizle($_POST['sifretip']);

   $stmt = $ozy->prepare("INSERT INTO admin (adi, kullaniciadi, sifre, durum, tarih) 
   VALUES (?,?,?,?,?)");
   $result2 = $stmt->execute(array($adi, $kullaniciadi, $sifre, $durum, $tarih));
   $id = $ozy->lastInsertId();
   
   
   if($result2){
	echo '<script type="text/javascript">$(document).ready(function(){toastr["success"]("Başarıyla veriyi eklediniz.", "Başarılı");});</script>';
	echo '<meta http-equiv="refresh" content="1; url=tum-adminler">'; 	

   }else{

    echo '<script type="text/javascript">$(document).ready(function(){toastr["error"]("Üzgünüm bir hata oluştu :(", "Başarısız");});</script>';
    

   }








}

////Sayfa oluşturma kodları bitiş






}

	
	



?>




<div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Admin 
						<?php if($_GET['duzenle']){?>
						Düzenle
						<?php } else { ?>
                        Ekle
						<?php } ?>
						</h4>
                    </div>
					

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            
                            <li class="breadcrumb-item active">Admin 
							<?php if($_GET['duzenle']){?>
						    Düzenle
						    <?php } else { ?>
                            Ekle
						    <?php } ?>
							</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <div class="row">
                <div class="col-12">
			     <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="card m-b-30">
                        <div class="card-body">
                    

                          <div class="tab-content">
						  
						  
						  
						  
						  
						  

                           
                          <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                         
						
							
							<div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Adı Soyadı</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="adi" value="<?php echo $sayfam['adi']; ?>" required>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kullaniciadi" value="<?php echo $sayfam['kullaniciadi']; ?>" required>
                                </div>
                            </div>
							
							
										
							<?php if($_GET['duzenle']){?>	
							<div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Şifre Yenileme</label>
                                <div class="col-sm-10">
                                <input <?php echo $sayfam['sifretip'] == '0' ? 'checked' : null; ?> value="1" name="sifretip" type="radio" class="login-check" id="register-check-20"> 
							    Şifreyi Güncellemek istiyorum  
                                </div>
                            </div>
							
							<div class="form-group row" id="sifre1" style="display:none;">	 	
                                <label for="example-text-input" class="col-sm-2 col-form-label">Yeni Şifreniz</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="sifre"  value="<?php echo $sayfam['sifre']; ?>">
                                </div>
                            </div>
							
						
							<?php } else { ?>
							<div class="form-group row">	 	
                                <label for="example-text-input" class="col-sm-2 col-form-label">Şifresi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="sifre"  value="<?php echo $sayfam['sifre']; ?>">
                                </div>
                            </div>
							
							<?php } ?> 
							
							
							
							
						 <?php if($_GET['duzenle']){?>
						  <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Durumu</label>
                                <div class="col-sm-10">
                                <input type="checkbox" <?php if($sayfam['durum'] == '1') {?> checked="" <?php } ?> value="1" data-toggle="toggle" data-onstyle="primary" data-offstyle="secondary" name="durum"></div>
                                            
                          </div>   
                        <?php } else { ?>
						 <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Durumu</label>
                                <div class="col-sm-10">
                                <input type="checkbox"  checked="" value="1" data-toggle="toggle" data-onstyle="primary" data-offstyle="secondary" name="durum"></div>
                                            
                          </div> 

						<?php } ?>   
							
							
								
						
								
								
								
								
							</div>
                                 


		
						
						
                                </div>




                         <?php if($_GET['duzenle']){?>
						  
						  <button type="submit" name="guncelle" class="btn btn-warning btn-lg btn-block waves-effect waves-light">Güncelle</button>
                         
                          <?php } else { ?>
						 
                          <button type="submit" name="kaydet" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Kaydet</button>
                         
						
								 
                         <?php } ?>     

			             
						 
						 </div>	
								
								
								
								
								
								
								
								
								
                            </div>
							</form>
                            
                        </div>
                    </div>
                </div> <!-- end col -->
	
            </div> <!-- end row -->   

        </div>
        <!-- end container-fluid -->
    </div>
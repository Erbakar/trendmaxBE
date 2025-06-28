 <?php

if (isset($_GET['temizle'])) {
	
$id = temizle($_GET['temizle']);
$sayfasil = $ozy->prepare("delete from siparis where id='$id'");
$sayfasil->execute(array($id));

if ($sayfasil) {
	
echo '<script type="text/javascript">$(document).ready(function(){toastr["success"]("Başarıyla veri silindi.", "Başarılı");});</script>';
	
}


}
   
?>
 <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Anasayfa</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a>Admin</a></li>
                            <li class="breadcrumb-item active">Anasayfa</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <div class="row">


             
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                            </div>
                            <div>
				
							
							
                                <h5 class="font-16">Siparişler (Bugün)</h5>
                            </div>
                            <h3 class="mt-4">
						<?php $siparis1 = $ozy->query("SELECT SUM(toplamtutar) FROM siparis where DAY(tarihson) = DAY(CURDATE());")->fetch(PDO::FETCH_ASSOC);
                        foreach( $siparis1 as $siparis1x ){
                        echo $siparis1x = number_format($siparis1x, 2, '.', '');}?> TL
		
							</h3>
                            <div class="progress mt-4" style="height: 4px;">
              
                            </div>
                            <p class="text-muted mt-2 mb-0">Toplam Sipariş<span class="float-right"><?php 
			  $say1 = $ozy->prepare("SELECT COUNT(*) FROM siparis where DAY(tarihson) = DAY(CURDATE());");
              $say1->execute();
              echo $siparis1 = $say1->fetchColumn();?> Adet</span></p>
                        </div>
                    </div>
                </div>
				
				
				
				
				
				
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-briefcase-check bg-success  text-white"></i>
                            </div>
                            <div>
				
							
							
                                <h5 class="font-16">Siparişler (Bu hafta)</h5>
                            </div>
                            <h3 class="mt-4">
						<?php $siparis12 = $ozy->query("SELECT SUM(toplamtutar) FROM siparis WHERE tarihson >= NOW() - INTERVAL 7 day")->fetch(PDO::FETCH_ASSOC);
                        foreach( $siparis12 as $siparis1xx ){
                        echo $siparis1xx = number_format($siparis1xx, 2, '.', '');}?> TL
							
							</h3>
                            <div class="progress mt-4" style="height: 4px;">
              
                            </div>
                            <p class="text-muted mt-2 mb-0">Toplam Sipariş<span class="float-right"><?php 
			  $say12 = $ozy->prepare("SELECT COUNT(*) FROM siparis WHERE tarihson >= NOW() - INTERVAL 7 day");
              $say12->execute();
              echo $siparis12 = $say12->fetchColumn();?> Adet</span></p>
                        </div>
                    </div>
                </div>
				

               
           
		   
		   <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                            </div>
                            <div>
				
							
							
                                <h5 class="font-16">Siparişler (Bu ay)</h5>
                            </div>
                            <h3 class="mt-4">
						<?php $siparis123 = $ozy->query("SELECT SUM(toplamtutar) FROM siparis WHERE tarihson >= NOW() - INTERVAL 1 month")->fetch(PDO::FETCH_ASSOC);
                        foreach( $siparis123 as $siparis1xxx ){
                        echo $siparis1xxx = number_format($siparis1xxx, 2, '.', '');}?> TL
							
							</h3>
                            <div class="progress mt-4" style="height: 4px;">
              
                            </div>
                            <p class="text-muted mt-2 mb-0">Toplam Sipariş<span class="float-right"><?php 
			  $say123 = $ozy->prepare("SELECT COUNT(*) FROM siparis WHERE tarihson >= NOW() - INTERVAL 1 month");
              $say123->execute();
              echo $siparis123 = $say123->fetchColumn();?> Adet</span></p>
                        </div>
                    </div>
                </div>
				
		   
		   
		   
		   
		   
             

			    
                     <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-buffer bg-danger text-white"></i>
              
                            </div>
                            <div>
				
							
							
                                <h5 class="font-16">Siparişler (Bu yıl)</h5>
                            </div>
                            <h3 class="mt-4">
						<?php $siparis1234 = $ozy->query("SELECT SUM(toplamtutar) FROM siparis WHERE tarihson >= NOW() - INTERVAL 1 YEAR")->fetch(PDO::FETCH_ASSOC);
                        foreach( $siparis1234 as $siparis1xxxx ){
                        echo $siparis1xxxx = number_format($siparis1xxxx, 2, '.', '');}?> TL
							
							</h3>
                            <div class="progress mt-4" style="height: 4px;">
              
                            </div>
                            <p class="text-muted mt-2 mb-0">Toplam Sipariş<span class="float-right"><?php 
			  $say1234 = $ozy->prepare("SELECT COUNT(*) FROM siparis WHERE tarihson >= NOW() - INTERVAL 1 YEAR");
              $say1234->execute();
              echo $siparis1234 = $say1234->fetchColumn();?> Adet</span></p>
                        </div>
                    </div>
                </div>
				




            </div>

           
            <div class="row">
                <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">STOK ALARMI</h4>
                            <div class="friends-suggestions">
                             <?php $stk = $ozy->query("select * from urunler where stok<='10' order by stok asc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                             $__URUN__ = false;
                             foreach ($stk as $stokurun) {
                             $__URUN__ = true;?>

                                <a target="_blank" href="urun/duzenle/<?php echo $stokurun['id']; ?>" class="friends-suggestions-list">
                                    <div class="border-bottom position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="../resimler/urunler/<?php echo $stokurun['resim']; ?>" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2 text-dark"><?php echo $stokurun['adi']; ?></h5>
                                            <p class="text-muted">Kalan Stok : <?php echo $stokurun['stok']; ?> Adet</p>
                                        </div>
                                    </div>
                                </a>
                                       
							<?php }
							
                            if (!$__URUN__){
								
                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Tükenmek üzere olan ürün bulunamadı</b>";
							
							}
							?>	
                               
                             
                            </div>
                        </div>
                    </div>
                </div>

                     <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">SON GELEN MESAJLAR</h4>
                            <div class="friends-suggestions">
                             <?php $stkz = $ozy->query("select * from iletisim order by id desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                             $__URUN__ = false;
                             foreach ($stkz as $stokurunz) {
                             $__URUN__ = true;?>

                                <a target="_blank" href="mesaj-duzenle/<?php echo $stokurunz['id']; ?>" class="friends-suggestions-list">
                                    <div class="border-bottom position-relative">
                                        <div class="float-left mb-0 mr-3">
                                            <img src="assets/images/mesaj.png" class="rounded-circle thumb-md">
                                        </div>
                                        <div class="suggestion-icon float-right mt-2 pt-1">
                                            <i class="mdi mdi-plus"></i>
                                        </div>

                                        <div class="desc">
                                            <h5 class="font-14 mb-1 pt-2 text-dark"><?php echo $stokurunz['konu']; ?></h5>
                                            <p class="text-muted"><?php echo strip_tags(mb_substr($stokurunz['mesaj'],0,100));?>... </p>
                                        </div>
                                    </div>
                                </a>
                                       
							<?php }
							
                            if (!$__URUN__){
								
                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Mesaj bulunamadı</b>";
							
							}
							?>	
                               
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title mb-4">DESTEK TALEPLERİ</h4>
                            <ol class="activity-feed mb-0">
                             <?php $stkk = $ozy->query("select * from support order by id desc limit 6")->fetchAll(PDO::FETCH_ASSOC); 
                             $__URUN__ = false;
                             foreach ($stkk as $destekk) {
                             $__URUN__ = true;?>   
								
								
								<a target="_blank" href="destek-duzenle/<?php echo $destekk['id']; ?>"><li class="feed-item">
                                    <div class="feed-item-list">
                                        <p class="text-muted mb-1"><?php echo $destekk['tarih']; ?></p>
                                        <p class="font-15 mt-0 mb-0"><?php echo $destekk['konu']; ?>: <b class="text-primary"><?php echo strip_tags(mb_substr($destekk['mesaj'],0,100));?>... </b></p>
                                    </div>
                                </li></a>
                              
							  
							<?php }
							
                            if (!$__URUN__){
								
                            echo "<b style='font-weight: 500;background: #fafafa;padding: 10px;width: 100%;text-align: center;border: 1px solid #ededed;'>Destek talebiniz bulunamadı</b>";
							
							}
							?>	
                               

                            </ol>

                        </div>
                    </div>
                </div>
            </div>

            <!-- START ROW -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">SON SİPARİŞLER</h4>
                               <table data-order='[[ 0, "desc" ]]' id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
								    <th>Sipariş İD</th>
                                    <th>Sipariş No</th>
									<th>Kullanıcı</th>
                                    <th>Ödeme Tipi</th>
									<th>Ödenenen Tutar</th>
                                    <th>Durumu</th>
									<th>Sipariş Tarihi</th>
                                    <th>İşlem</th>
                                </tr>
                                </thead>


                                <tbody>
							<?php $pr = $ozy->query("select * from siparis ORDER BY id desc limit 10")->fetchAll(PDO::FETCH_ASSOC);
                           foreach ($pr as $tr) {?>	
								
								
                                <tr>
								 <td><?php echo $tr['id']?></td>
                                    <td><?php echo $tr['siparisno']?></td>
									<?php 
									$sipuyeid = $tr['uye'];
									$kargoid = $tr['kargoid'];
									$siparisuyebilgileri = $ozy->query("select * from users where id='$sipuyeid'")->fetch(PDO::FETCH_ASSOC);
									$kargobilgileri = $ozy->query("select * from kargolar where id='$kargoid'")->fetch(PDO::FETCH_ASSOC);?>
									<?php if($sipuyeid=='0'){?>
									<td>
									<b>Misafir</b></br>
									<?php echo $tr['adsoyad'];?></br>
									</td>
									<?php } else { ?>
									<td>
									<a href="uye/duzenle/<?php echo $siparisuyebilgileri['id'];?>" target="_blank"><?php echo $siparisuyebilgileri['isim'];?></br>
			
									</a>
									</td>
									<?php } ?>
									<td><?php echo $tr['odemetipi']?></td>
                                    <td><?php echo $tr['toplamtutar']?> TL</td>
									
									 <td><span style="font-size: 13px;font-size: 13px;background: white;color: black;border: 1px solid #6975b6;border-radius: 0px;padding: 5px;" class="badge badge-success"><?php echo $tr['durum']?></td>
									</span>
                                   
									<td><?php echo $tr['tarih']?></td>
                                    <td>
									<a href="tel:<?php echo $tr['telefon'];  ?>" target="_blank" onclick="return confirm('Telefon ile yanıt vermek istiyor musun ?')" class="btn btn-sm btn-danger" style="border: none;background: #4192e9;" data-toggle="tooltip" data-original-title="Telefon ile Yanıtla"><img style="width: 16px;height: 16px;" src="assets/images/tel.png"></img></a>									 
									<a href="https://api.whatsapp.com/send?phone=+9<?php echo $tr['telefon'];  ?>&amp;text=Merhaba iyi günler, <?php echo $ayar['siteadi'];?> olarak websitemizinden <?php echo $tr['siparisno'];  ?> nolu siparişiniz için rahatsız ediyorum. Sipariş durumunuz <?php echo $tr['durum'];  ?> olarak güncellenmiştir. <?php echo $tr['durum'] == 'Kargoya Verildi' ? 'Kargo Bilgileriniz : '.$kargobilgileri['adi'].' Takip Numaranız : '.$tr['takipno'].'' : null; ?> İyi günler dileriz." target="_blank" onclick="return confirm('WhatsApp ile yanıt vermek istiyor musun  ?')" class="btn btn-sm btn-danger" style="border: #2ab200;background: #2ab200;" data-toggle="tooltip" data-original-title="WhatsApp ile Yanıtla"><img style="width: 16px;height: 16px;" src="assets/images/whatsap.jpg"></img></a>									 
									<a href="javascript:printDiv('divYazdir<?php echo $tr['id'];  ?>');" style="background: #8a940b;color: white;" onclick="return confirm('Siparişi yazdırmak istediğine emin misin?')" class="btn btn-sm btn" data-toggle="tooltip" data-original-title="Yazdır"><i class="fa fa-print" aria-hidden="true"></i></a>									 
			                        <a href="index.html?temizle=<?php echo $tr['id'];  ?>" onclick="return confirm('Silmek istediğinize emin misiniz ?')" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Sil"><i class="ti-trash" aria-hidden="true"></i></a>									 
									<a href="siparis/duzenle/<?php echo $tr['id']?>" class="btn btn-sm btn-success" data-toggle="tooltip" data-original-title="Düzenle"><i class="fa fa-edit" aria-hidden="true"></i></a>					
									</td>
                                </tr>
							   <!-- SİPARİŞ YAZDIRMA ALANI -->
							<div class="col-12" id="divYazdir<?php echo $tr['id']?>" style="display:none;">
							 <?php $adresdizi = $dizi = explode (" ",$tr['adres']);?>
<div style="position:absolute;left:50%;margin-left:-420px;top:0px;width:841px;height:594px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="faturaback.jpg" width=841 height=594></div>
<div style="position: absolute;left: 15%;top: 40.33px;" class="cls_002"><span class="cls_002"><img src="../resimler/siteayarlari/<?php echo $ayar['logo']; ?>" style="height: 40px !important"></span></div>
<div style="position:absolute;left:41.76px;top:84.33px" class="cls_002"><span class="cls_002">Gönderici Bilgileri</span></div>
<div style="position:absolute;left:41.76px;top:106.09px" class="cls_003"><span class="cls_003">Şirket İsmi</span></div>
<div style="position:absolute;left:134.07px;top:106.09px" class="cls_003"><span class="cls_003"><?php echo $ayar['siteadi'];?></span></div>
<div style="position:absolute;left:41.76px;top:127.85px" class="cls_003"><span class="cls_003">Şirket Telefon</span></div>
<div style="position:absolute;left:134.07px;top:127.85px" class="cls_003"><span class="cls_003"><?php echo $ayar['tel'];?></span></div>
<div style="position:absolute;left:41.76px;top:149.62px" class="cls_002"><span class="cls_002">Alıcı Bilgileri</span></div>
<div style="position:absolute;left:41.76px;top:171.38px" class="cls_003"><span class="cls_003">Ad / Soyad</span></div>
<div style="position:absolute;left:134.07px;top:171.38px" class="cls_003"><span class="cls_003"><?php echo $tr['adsoyad'];?></span></div>
<div style="position:absolute;left:134.07px;top:193.15px" class="cls_003"><span class="cls_003"><?php echo $dizi[0];?> <?php echo $dizi[1];?> <?php echo $dizi[2];?> </span></div>
<div style="position:absolute;left:41.76px;top:209.66px" class="cls_003"><span class="cls_003">Adres</span></div>
<div style="position:absolute;left:134.07px;top:209.66px" class="cls_003"><span class="cls_003"><?php echo $dizi[3];?>  <?php echo $dizi[4];?> <?php echo $dizi[5];?></span></div>
<div style="position:absolute;left:134.07px;top:226.17px" class="cls_003"><span class="cls_003"><?php echo $dizi[6];?> <?php echo $dizi[7];?> <?php echo $dizi[8];?> <?php echo $dizi[9];?></span></div>
<div style="position:absolute;left:41.76px;top:247.93px" class="cls_003"><span class="cls_003">İl / İlçe</span></div>
<div style="position:absolute;left:134.07px;top:247.93px" class="cls_003"><span class="cls_003"><?php echo $tr['il'];?> / <?php echo $tr['ilce'];?></span></div>
<div style="position:absolute;left:41.76px;top:269.69px" class="cls_003"><span class="cls_003">Telefon No</span></div>
<div style="position:absolute;left:134.07px;top:269.69px" class="cls_003"><span class="cls_003"><?php echo $tr['telefon'];?></span></div>
<div style="position:absolute;left:41.76px;top:291.46px" class="cls_003"><span class="cls_003">Cep Telefonu</span></div>
<div style="position:absolute;left:134.07px;top:291.46px" class="cls_003"><span class="cls_003"><?php echo $tr['telefon'];?></span></div>
<div style="position:absolute;left:41.76px;top:313.22px" class="cls_003"><span class="cls_003">Posta Kodu</span></div>
<div style="position:absolute;left:134.07px;top:313.22px" class="cls_003"><span class="cls_003">90000</span></div>
<div style="position:absolute;left:41.76px;top:334.99px" class="cls_002"><span class="cls_002">Satış Bilgileri</span></div>
<div style="position:absolute;left:41.76px;top:356.75px" class="cls_003"><span class="cls_003">Kargo</span></div>
<div style="position:absolute;left:41.76px;top:373.26px" class="cls_003"><span class="cls_003">Bilgileri</span></div>
<div style="position:absolute;left:134.07px;top:352.69px" class="cls_003"><span class="cls_003"><?php echo $kargobilgileri['adi'];?></span></div>
<div style="position:absolute;left:134.07px;top:372.69px" class="cls_003"><span class="cls_003"><?php echo $tr['takipno'];?></span></div>
<div style="position:absolute;left:41.76px;top:395.02px" class="cls_003"><span class="cls_003">Durum : <?php echo $tr['durum'];?></span></div>
<div style="position:absolute;left:41.76px;top:416.79px" class="cls_003"><span class="cls_003">Ödeme</span></div>
<div style="position:absolute;left:134.07px;top:425.04px" class="cls_003"><span class="cls_003"><?php echo $tr['odemetipi'];?></span></div>
<div style="position:absolute;left:41.76px;top:433.30px" class="cls_003"><span class="cls_003">Yöntemi</span></div>
<div style="position:absolute;left:41.76px;top:455.06px" class="cls_003"><span class="cls_003">Sipariş Kodu</span></div>
<div style="position:absolute;left:134.07px;top:455.06px" class="cls_003"><span class="cls_003"><?php echo $tr['siparisno'];?></span></div>
</div>
                                      
								
                                    
							 
							 
							</div>
							<!-- SİPARİŞ YAZDIRMA ALANI -->
							
							   
		                    <?php }?>					   
							   
							   
							   
							   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
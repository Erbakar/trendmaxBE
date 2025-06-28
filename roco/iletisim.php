<title>Bize Ulaşın</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>" />
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="Bize Ulaşın" />
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>" />

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			<li><a>İletişim</a></li>			
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-title">
					<h2>İletişim</h2>
				</div>
				
				
				<iframe src="<?php echo $ayar['maps']; ?>" style="border:0" allowfullscreen="" width="100%" height="350" frameborder="0"></iframe>
				<div class="info-contact clearfix">
					<div class="col-lg-4 col-sm-4 col-xs-12 info-store">
						<div class="row">
							<div class="name-store">
								<h3><?php echo $ayar['siteadi']; ?></h3>
							</div>
							
							   <ul class="menu">
                                <li class="adres">
                                   <?php echo $ayar['adres'];?>
                                </li>
                                <li class="phone">
                                   <?php echo $ayar['tel'];?> - <?php echo $ayar['ceptel'];?>
                                </li>
                                <li class="mail">
                                    <a href="mailto:<?php echo $ayar['email'];?>"><?php echo $ayar['email'];?></a>
                                </li>
                             
                            </ul>
							
						</div>
					</div>
					<div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
							<fieldset>
								<legend style="text-align: center;">İletişim Formu</legend>
								<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-name">Adınız Soyadınız</label>
							<div class="col-sm-10">
								<input type="text" name="isim" value="" id="input-name" class="form-control" required>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">Eposta Adresiniz</label>
								<div class="col-sm-10">
									<input type="text" name="email" value="" id="input-email" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">Telefon</label>
								<div class="col-sm-10">
									<input type="tel" name="telefon" value="" id="input-email" class="form-control" required>
									</div>
								</div>
								
								<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">Konu</label>
								<div class="col-sm-10">
									<input type="text" name="konu" value="" id="input-email" class="form-control" required>
									</div>
								</div>
								<div class="form-group required" style="padding-left: 13%;">
								<img class="guvenlik_resmi" style="width: 170px;height: 60px;" src="<?php echo $sitetemasi;?>/captcha.php"> <div  class="guvenlikkodum yenile_buton btn btn-default buttonGray">Yenile</div>
								</div>
								
								<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">Güvenlik Kodu :</label>
								<div class="col-sm-10">
									<input type="text" name="captcha" value="" id="input-email" class="form-control" required>
									</div>
								</div>
								
								
								
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-enquiry">Mesajınız</label>
									<div class="col-sm-10">
										<textarea name="mesaj" rows="10" id="input-enquiry" class="form-control" required></textarea>
									</div>
								</div>
							</fieldset>
							<div class="buttons">
								<div class="pull-right">
									<button name="mesajgonder" class="btn btn-default buttonGray" type="submit">
										<span>Gönder</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
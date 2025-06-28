<title>Sıkça Sorulan Sorular</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			<li><a>Hızlı Linkler</a></li>
			<li><a>Sıkça Sorulan Sorular</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
								
								<div class="col-sm-12 customer-login">
						 <?php $ss = $ozy->query("select * from sss where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ss as $sss){?>    
								
								
								<div style="background:white;border: 1px solid #e1dddd;padding: 10px;margin-bottom: 10px;">
								<p style="font-weight: bold;"><?php echo $sss['adi']; ?></p>
								<?php echo $sss['aciklama']; ?>
								</div>
							<?php } ?>	
							
								</div>
							
							
							
						</div>
					</div>
					
				</div>
	
	
	
			</div>
		</div>
	</div>

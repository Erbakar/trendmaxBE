<title>Sıkça Sorulan Sorular</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   
		   <main class="main">
        
           

            <div class="page-content pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-text text-left">
                             <h1 class="title title-center">
                            Sıkça Sorulan Sorular
                        </h1>
                            <?php $ss = $ozy->query("select * from sss where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ss as $sss){?>    
								
								
								<div style="background:white;border: 1px solid #e1dddd;padding: 10px;margin-bottom: 10px;">
								<p style="font-weight: bold;"><?php echo $sss['adi']; ?></p>
								<?php echo $sss['aciklama']; ?>
								</div>
							<?php } ?>	
                               
                               
                            </div><!-- End .about-text -->
                        </div><!-- End .col-lg-10 offset-1 -->
                    </div><!-- End .row -->
                    
                </div><!-- End .container -->

                <div class="mb-2"></div><!-- End .mb-2 -->

            </div><!-- End .page-content -->
        </main>
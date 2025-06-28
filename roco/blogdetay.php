<?php
$id = temizle($_GET['id']);
$query = $ozy->prepare("UPDATE haberler SET hit = (hit+1) WHERE seo=?");
$update = $query->execute(array($id));
?>

<?php 
$id = temizle($_GET['id']); 
$durum = "1";
$sayfaqq = $ozy->prepare("SELECT * FROM haberler WHERE seo=:id and durum=:durum");
$page = $sayfaqq->execute([':id' => $id,':durum' => $durum]);
$page = $sayfaqq->fetch(PDO::FETCH_ASSOC);

?>
<?php if($page['seodurum']=='1'){?>
<title><?php echo $page['stitle']; ?></title>
<meta name="keywords" content="<?php echo $page['skey']; ?>">
<meta name="description" content="<?php echo $page['sdesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $ayar['stitle']; ?>"/>
<meta property="og:description" content="<?php echo $page['sdesc']; ?>"/>
<?php } else { ?>
<title><?php echo $page['adi']; ?></title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="<?php echo $page['adi']; ?>"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>
<?php } ?>
<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="<?php echo $url;?>"><i class="fa fa-home"></i></a></li>
			<li><a href="bloglar/">Blog</a></li>
			<li><a><?php echo $page['adi']; ?></a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="about-us about-demo-3">
					<div class="row">
						
						<?php if($page['resim']=='resimyok.jpg'){?>
						<div class="col-lg-12 col-md-12 about-info">
							<h2 class="about-title"><?php echo $page['adi']; ?></h2>
							<div class="about-text">
							 <?php echo $page['aciklama'];?>
							 </div>
						</div>
						<?php } else { ?>
						<div class="col-lg-6 col-md-6 about-image"> 
                           <a href="resimler/haberler/<?php echo $page['resim']?>" data-lightbox="image-1">
                                    
						   <img src="resimler/haberler/<?php echo $page['resim']?>" alt="Banner" style="background-color: #D0C1AE;" width="1240" height="540">
                         </a>
						 </div>
						 	<div class="col-lg-6 col-md-6 about-info">
							<h2 class="about-title"><?php echo $page['adi']; ?></h2>
							<div class="about-text">
							 <?php echo $page['aciklama'];?>
							 </div>
						</div>
						 <?php } ?>
						
					
						
						
						
					</div>
					<div class="row">
						
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='haberler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                      <div class="col-lg-3 col-md-3">
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image" class="mx-auto mb-6">
                        </a>
						</div>
						
                     <?php } ?>
					</div>
					
					
					<div class="row" style="  padding: 10px;
  border: 1px solid #ebe8e8;
  margin-top: 10px;">
						
			    			 
					<div class="comments">
                    <?php if($urunyorumsayimis>'0'){?>
                        
                    <?php } else { ?>
					<h4 style="font-size: 15px;" class="title">Bu yazıya henüz yorum yapılmamış. İlk yorumu sen yapmak ister misin ?</h4><!-- End .title -->
					<?php } ?>	

                                <ul style="border: 1px solid  #e1e1e6;
padding: 10px !important;
margin-top: 10px;
">
								
								
				<?php 
				$blogid = $page['id'];
				$deneme = $ozy->query("select * from tumyorumlar where durum='1' and sayfaid='$blogid' and konu='blog' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($deneme as $blogyorum) {?>			
								
                                <div class="review">
                                        <div class="row no-gutters" style="padding:10px;">
                                            
                                            <div class="col">
                                               <h4 style="font-size: 15px;"><a><?php echo $blogyorum['adi']; ?></a></h4>

                                                <div class="review-content">
                                                    <p><?php echo $blogyorum['yorum']; ?></p>
                                                </div><!-- End .review-content -->

                                        <?php 
									$karakter_sayisi = strlen($blogyorum['cevap']);
									
									if($karakter_sayisi>'1'){?>
                                                <div class="review-action" style="padding: 20px;border: 1px solid  #e1e1e6;">
                                                
												<div class="comment">
                                                    <figure class="comment-media">
                                                        <a href="<?php echo  $url;?>">
                                                            <img class="lazyload" style="width: 100px;" src="resimler/siteayarlari/<?php echo $ayar['logo']; ?>" alt="User name">
                                                        </a>
                                                    </figure>

                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h6><a><?php echo $ayar['siteadi']; ?></a></h6>
                                                            <span class="comment-date"><?php echo $blogyorum['email']; ?></span>
                                                        </div><!-- End .comment-user -->

                                                        <div class="comment-content">
                                                            <p><?php echo $blogyorum['cevap']; ?></p>
                                                        </div><!-- End .comment-content -->
                                                    </div><!-- End .comment-body -->
                                                </div><!-- End .comment -->
												
												
												</div><!-- End .review-action -->
												
												<?php } ?>
												
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div> 


                       <?php } ?>
								 
								 
								 
								 
								 
								 
								 
								 
								 
                                </ul>
                            </div>
					
					
                    <div class="reply" style="border: 1px solid #e1e1e6;;
padding: 10px;
">
                        <div class="heading">
                            <h3 class="title">Yorum Yaz</h3><!-- End .title -->
                            <p class="title-desc" style="color: #d81818;border: 1px solid #d81818;padding: 10px;font-size: 14px;">Eposta adresiniz gizlilik nedeniyle görünmeyecektir. * Argo , küfür veya hukuka aykırı yorumlar onaylanmayacaktır.
							Bu tarz yorum yapanlar hakkında yasal süreç başlatılacaktır.
							</p>
                        </div><!-- End .heading -->

                        <form action="" method="POST">
                            <label for="reply-message" class="sr-only">Yorumunuz</label>
                            <textarea style="margin-bottom:20px;" name="yorum" id="reply-message" cols="30" rows="4" class="form-control" required="" placeholder="Yorumunuz *"></textarea>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="reply-name" class="sr-only">Adınız Soyadınız</label>
                                    <input type="text" class="form-control" id="reply-name" name="adi" required="" placeholder="Adınız Soyadınız *" value="<?php echo $uyebilgileri['isim'];?>">
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <label for="reply-email" class="sr-only">Eposta Adresiniz</label>
                                    <input type="email" class="form-control" id="reply-email" name="email" required="" placeholder="Eposta Adresiniz *" value="<?php echo $uyebilgileri['email'];?>">
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                            <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
                            <button style="margin-top:15px;background: #222;
color: white;
border-radius: 4px;" type="submit" name="blogyorum" class="btn btn-default pull-right">
                                <span>YORUMU GÖNDER</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>
                        </form>
                    </div><!-- End .reply -->
			  
					</div>
					
					
					
					
				</div>
				
			</div>
		</div>
	</div>
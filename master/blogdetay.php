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
	   
<div class="kategori1">
    <div class="div-block-linkler-divbox">
      <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="bloglar/" class="link-12">Blog</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="blog/<?php echo $page['seo']; ?>" class="link-12"><?php echo $page['adi']; ?></a>
      </div>
    </div>
    <div class="div-block-4461292330">
      <div class="w-row">
        <div class="column-190 w-col w-col-3 w-col-stack">
          <div class="div-block-4461292332">
            <div class="div-block-4461292339">
              <h4 class="heading-50">Blog</h4>
            </div>
            <div class="content-kategori-close">
                
				
               
                
           <?php $hzmetler1 = $ozy->query("select * from haberler where durum='1'order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($hzmetler1 as $hizmetler11){?>	
                            <a  class="link-9-2 <?php echo $page['id'] == $hizmetler11['id'] ? 'kurumsalaktif' : null; ?>" href="blog/<?php echo $hizmetler11['seo']; ?>"><strong class="bold-text-24" <?php echo $page['id'] == $hizmetler11['id'] ? 'style="font-weight:bold !important;"' : null; ?>><?php echo $hizmetler11['adi']; ?></strong></a>
							<?php } ?>
			
            </div>
          </div>
        </div>
        <div class="column-188 w-col w-col-9 w-col-stack">
          <div class="div-block-4-461292474723282e-32">
            <div class="div-block-kategori-filtre-box24">
              <div class="text-block-138-28"><?php echo $page['adi'];?></div>
            </div>
            <div>
              <div class="text-block-210612">
			 	<?php if($page['resim']=='resimyok.jpg'){?>
						
						<?php } else { ?>
						
                           <a href="resimler/haberler/<?php echo $page['resim']?>" data-lightbox="image-1">
                                    
						   <img src="resimler/haberler/<?php echo $page['resim']?>" alt="Banner" style="background-color: #D0C1AE;" width="1240" height="540">
                         </a>
						 <?php } ?>
			       <?php echo $page['aciklama'];?>
			  
			  
			  <div class="div-block-4461292274">
  <div class="w-row">
			  
			        <?php 
					$gelenid = $page['id'];
					$sayfaresimi = $ozy->query("select * from tumresimler where sayfaid='$gelenid' and alan='haberler' order by id desc")->fetchAll(PDO::FETCH_ASSOC); 
                    foreach($sayfaresimi as $genelresim){?>
                       <div class="w-col w-col-4">
                       <div class="div-block-4461292276">
                        
						<a data-lightbox="image-1" href="resimler/genel/<?php echo $genelresim['sayfaresim'];?>">		
                              <img src="resimler/genel/<?php echo $genelresim['sayfaresim'];?>" alt="image" class="mx-auto mb-6">
                        </a>
						</div>
						</div>
                     <?php } ?>
			  
			  </div>
			  </div>
			  
			  
			  
			  
			  		  <div class="div-block-4461292274">
            <div class="w-row">
			  
			 
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
                            <textarea name="yorum" id="reply-message" cols="30" rows="4" class="text-field-10---35-copy w-input" required="" placeholder="Yorumunuz *"></textarea>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="reply-name" class="sr-only">Adınız Soyadınız</label>
                                    <input type="text" class="text-field-10---35-copy w-input" id="reply-name" name="adi" required="" placeholder="Adınız Soyadınız *" value="<?php echo $uyebilgileri['isim'];?>">
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <label for="reply-email" class="sr-only">Eposta Adresiniz</label>
                                    <input type="email" class="text-field-10---35-copy w-input" id="reply-email" name="email" required="" placeholder="Eposta Adresiniz *" value="<?php echo $uyebilgileri['email'];?>">
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                            <input type="hidden" name="sayfaid" value="<?php echo $page['id'];?>"/>
                            <button style="margin-bottom:15px;" type="submit" name="blogyorum" class="gributton text-center">
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
			
			
			
			
			
			
          </div>
        </div>
      </div>
    </div>
  </div>
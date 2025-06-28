<title>Sıkça Sorulan Sorular</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>



       <section class="py-4 bg-light inner-header">
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-lg-6 col-md-6">
                  <h4 class="mt-0 mb-0 text-dark">
                  Sıkça Sorulan Sorular    
               </h4></div>
               <div class="col-lg-6 col-md-6 text-right">
                  <div class="breadcrumbs">
                     <p class="mb-0"><a href="<?php echo $url;?>">
					 <i class="icofont-ui-home"></i> Anasayfa</a>  /  
					 <span>Sıkça Sorulan Sorular</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
	  <section class="py-5 bg-light border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                	
					<div class="bg-white p-4 shadow-sm rounded h-100">
                           <div class="accordion" id="accordionExample">
						   	 <?php $ss = $ozy->query("select * from sss where durum='1' order by sira desc limit 1")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ss as $sss){?>   
                              <div class="card mb-0">
                                 <div class="card-header" id="headingOne">
                                    <h6 class="mb-0">
                                       <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                       <i class="icofont icofont-question-square"></i>   <?php echo $sss['adi']; ?>     
                                       </a>
                                    </h6>
                                 </div>
                                 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                      <?php echo $sss['aciklama']; ?>
									  </div>
                                 </div>
                              </div>
							  <?php } ?>	
							  				 
	 <?php 
	 $i =1;
	 $ss = $ozy->query("select * from sss where durum='1' order by sira desc limit 1,1000")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ss as $sss){?>    
									
                              <div class="card">
                                 <div class="card-header" id="headingTwo<?php echo $sss['seo']; ?>">
                                    <h6 class="mb-0">
                                       <a href="#" data-toggle="collapse" data-target="#collapseTwo<?php echo $sss['seo']; ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $sss['seo']; ?>" class="collapsed">
                                       <i class="icofont icofont-question-square"></i>   <?php echo $sss['adi']; ?>
                                       </a>
                                    </h6>
                                 </div>
                                 <div id="collapseTwo<?php echo $sss['seo']; ?>" class="collapse" aria-labelledby="headingTwo<?php echo $sss['seo']; ?>" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                       <?php echo $sss['aciklama']; ?>
                                    </div>
                                 </div>
                              </div>
                              <?php } ?>  
                              
                           </div>
                        </div>
               </div>
              
               
            </div>
			
			
	
			
			
			
			
         </div>
      </section>
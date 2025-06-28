<title>Sıkça Sorulan Sorular</title>
<meta name="keywords" content="<?php echo $ayar['sitekey']; ?>">
<meta name="description" content="<?php echo $ayar['sitedesc']; ?>">
<meta property="og:url" content="<?php echo $url; ?>"/>
<meta property="og:title" content="Üyelik Sözleşmesi ve Rıza Metni"/>
<meta property="og:description" content="<?php echo $ayar['sitedesc']; ?>"/>

	   <div class="kategori1">
        <div class="div-block-linkler-divbox">
            <div class="div-block-linkler">
                <a href="<?php echo $url;?>" class="link-12">Anasayfa</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a class="link-12">Hızlı Linkler</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="javascript:;" class="link-12">Sıkça Sorulan Sorular</a>
            </div>
        </div>
        <div class="div-block-4461292330">
            <div class="w-row">
 
                <div class="column-188 w-col w-col-12">
                    <div class="div-block-4-46129247472ip">
                        <div class="div-block-kategori-filtre-box24">
                            <div class="text-block-138-28">Sıkça Sorulan Sorular</div>
                        </div>
                        <div class="div-block-496">
  <?php $ss = $ozy->query("select * from sss where durum='1' order by sira desc")->fetchAll(PDO::FETCH_ASSOC); 
                            foreach($ss as $sss){?>    
								
                            
                            <div class="kategori-box-sss">
                                <div data-w-id="4d3cf0ff-abf4-6cd5-b4e7-07f4b4c90750" class="dropdown-trigger-vasita commentsToggle">
                                    <div class="text-block-138-vasitabox"><?php echo $sss['adi']; ?></div>
                                </div>
                                <div class="content-kategori comments">
                                    <div class="div-block-4461292474723290">
                                        &nbsp;<span style="font-size:10.0pt;line-height:107%;
font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-ansi-language:TR;mso-fareast-language:EN-US;mso-bidi-language:
AR-SA"><?php echo $sss['aciklama']; ?></span>
                                    </div>
                                </div>
                            </div>
                            
                       	<?php } ?>	
                                  
                             

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Ürün Detayı</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="<?=base_url()?>uploads/<?=$veriler[0]->resim?>" alt="">
                                    </div>
                                    
                                   <div class="product-gallery">
                                       <?php
										foreach($resimler as $rs)
										{
									?>
                                        <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
									<?php
										}
									?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?=$veriler[0]->adi?></h2>
                                    <div class="product-inner-price">
                                        <ins><?=$veriler[0]->sfiyat?>₺</ins> 
                                    </div>    
                                    
                                    <form action="<?=base_url()?>home/sepete_ekle/<?=$veriler[0]->id?>" class="cart" method="post">
                                        <div class="quantity">
										
                                            <input type="number" size="4" class="input-text qty text" value="1" name="miktar" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Sepete Ekle</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <b><?=$veri[0]->kadi?>.</b> Tags: <b><?=$veriler[0]->keywords?> </b></p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Açıklama</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Yorum Yap</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Ürün Açıklaması</h2>  
												<?=$veriler[0]->aciklama?>
                                                </div>
												
												<div role="tabpanel" class="tab-pane fade" id="profile">
                                                <form action="<?=base_url()?>home/yorumyap/<?=$veriler[0]->id?>" method="POST">
													<h2>Yorum Yap</h2>
													<div class="submit-review">
														<p><label for="name">Başlık:</label> <input name="baslik" type="text"></p>
														<p><label for="review">Yorumunuz:</label> <textarea name="yorum"  cols="30" rows="10"></textarea></p>
														<?php
															if($this->session->uye_session['adsoyad'] == "")
															{
														?>
																<p><input type="submit" value="Yorum Yap" disabled></p>
														<?php
															}
															else
															{
														?>
																<p><input type="submit" value="Yorum Yap"></p>
														
														<?php
															}
														?>
														
														
													</div>
												</form>
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
    </div>
 <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Ürün Yorumları</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">    
             
				<div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            
                                            <th class="product-name">Ürün Adı</th>
                                            <th class="product-price">Üye Adı</th>
                                            <th class="product-quantity">Konu</th>
                                            <th class="product-subtotal">Yorum</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$total=0;
									if($yorumlar != false)
									{
										$aktif=1;
										foreach ($yorumlar as $rs)
										{
											
									?>
											<tr class="cart_item">
		
												<td class="product-name">
													<span class="amount"><?=$rs->padi?> </span> 
												</td>
											<?php
                                            foreach($uyeler as $uye)
                                            {
                                                if($rs->uye_id == $uye->id)
                                                {
                                            ?>
                                            
												<td class="product-price">
													<span class="amount"><?=$uye->adsoyad?></span> 
												</td>
											<?php
                                                }
                                            }
                                            ?>
												<td class="product-price">
													<span class="amount"><?=$rs->konu?></span> 
												</td>
												<td class="product-price">
													<span class="amount"><?=$rs->yorum?></span> 
												</td>

											</tr>
									<?php
										}
									}
									else
									{
										$aktif=0;
									?>
									<tr >
									<td colspan="6" align="center"><font size="5"><b>Henüz Yorum Yapılmamış</b></font></td>
									</tr>
								<?php
								}
								?>
									
                                        
                                    </tbody>
                                </table>
                            </form>

                          

                           


                            </div>
                        </div>                        
                    </div>                    
                </div>
			</div>
        </div>
    </div>

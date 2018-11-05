
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Siparişler</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
  
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">    
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                           
                                            <th class="product-name">Tarih</th>
											 <th class="product-name">Ürün Adı</th>
                                            <th class="product-price">Konu Başlık</th>
                                            <th class="product-quantity">Yorum</th>
											<th class="product-quantity"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
									if($yorumlar != false)
									{
										$aktif=1;
										foreach ($yorumlar as $rs)
										{
											
									?>
											<tr class="cart_item">
											<td class="product-name">
												<span class="amount">
													<?=$rs->tarih?></span>
												</td>
											<td class="product-name">
												<span class="amount">
												<a href="<?=base_url()?>home/urun_detay/<?=$rs->urun_id?>"><?=$rs->padi?></a></span>
												</td>
											
												

												<td class="product-name">
													<span class="amount"><?=$rs->konu?></span>
												</td>

												<td class="product-price">
													<span class="amount"><?=$rs->yorum?></span> 
												</td>

												<td class="product-quantity">
													<div class="quantity buttons_added">
														<a href="<?=base_url()?>home/yorumsil/<?=$rs->id?>"><input type="submit" onClick="return confirm('Silmek istediğinize emin misiniz')" value="Sil" name="proceed" class="checkout-button button alt wc-forward"></a>
													</div>
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
									<td colspan="6" align="center"><font size="5"><b>Yorumunuz Bulunmamaktadır.</b></font></td>
									</tr>
								<?php
								}
								?>
									
                                        
                                    </tbody>
                                </table>
                           

                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>


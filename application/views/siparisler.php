
    
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
                                            <th class="product-name">Sipariş No</th>
                                            <th class="product-name">Tarih</th>
                                            <th class="product-price">Tutar</th>
                                            <th class="product-quantity">Durum</th>
                                            <th class="product-subtotal">Detay</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
									if($siparisler != false)
									{
										$aktif=1;
										foreach ($siparisler as $rs)
										{
											
									?>
											<tr class="cart_item">
											<td class="product-name">
												<span class="amount">
													<?=$rs->id?></span>
												</td>
											
												<td class="product-name">
												<span class="amount">
													<?=$rs->tarih?></span>
												</td>

												<td class="product-name">
													<span class="amount"><?=$rs->tutar?>₺</span>
												</td>

												<td class="product-price">
													<span class="amount"><?=$rs->durum?></span> 
												</td>

												<td class="product-quantity">
													<div class="quantity buttons_added">
														<a href="<?=base_url()?>home/siparis_detay/<?=$rs->id?>"><input type="submit" value="Detay" name="proceed" class="checkout-button button alt wc-forward"></a>
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
									<td colspan="6" align="center"><font size="5"><b>Siparişiniz Bulunmamaktadır.</b></font></td>
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


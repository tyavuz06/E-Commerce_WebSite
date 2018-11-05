
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Sipariş Detay</h2>
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
                            
                                <table cellspacing="0" class="shop_table cart" align="left">
								<?php
									
									if($siparis != false)
									{
										$aktif=1;
										
									?>
                                    <thead>
                                        
										<tr>
                                            <th class="product-name">Ad Soyad</th>
											<td class="product-name">
												<span class="amount">
													<?=$siparis[0]->adsoyad?></span>
												</td>
										</tr>
										<tr>
                                            <th class="product-price">Tutar</th>
											<td class="product-name">
													<span class="amount">₺<?=$siparis[0]->tutar?></span>
												</td>
										</tr>
										<tr>
											<th class="product-name">Adres</th>
											<td class="product-name">
											<span class="amount">
												<?=$siparis[0]->adres?></span>
											</td>
										</tr>
										<tr>
											<th class="product-name">Şehir</th>										
											<td class="product-name">
											<span class="amount">
												<?=$siparis[0]->sehir?></span>
											</td>
										</tr>
										<tr>
		
											<th class="product-name">Kargo Firma</th>
											<td class="product-name">
												<span class="amount">
													<?=$siparis[0]->kargofirma?></span>
												</td>
										</tr>
										<tr>
		
											<th class="product-name">Kargo No</th>
											<td class="product-name">
												<span class="amount">
													<?=$siparis[0]->kargono?></span>
												</td>
										</tr>
										<tr>
		
											<th class="product-name">Admin Açıklama</th>
											<td class="product-name">
												<span class="amount">
													<?=$siparis[0]->admin_aciklama?></span>
												</td>
										</tr>
										
                                    </thead>
                                    <tbody>
									
											
									<?php
										
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
				   <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Ürün No</th>
                                            <th class="product-name">Adı</th>
                                            <th class="product-price">Fiyat</th>
                                            <th class="product-quantity">Miktar</th>
                                            <th class="product-subtotal">Tutarı</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=0;
									if($urunler != false)
									{
										
										$aktif=1;
										foreach ($urunler as $rs)
										{
											$i++;
									?>
											<tr class="cart_item">
												
												
												<td class="product-name">
												<span class="amount">
													<?=$i?></span>
												</td>

												<td class="product-name">
												<span class="amount">
												<a href="<?=base_url()?>home/urun_detay/<?=$rs->urun_id?>">	<?=$rs->adi?></a></span>
												</td>

												<td class="product-name">
													<span class="amount">₺<?=$rs->fiyat?></span>
												</td>

												<td class="product-price">
													<b><?=$rs->miktar?></b>
												</td>
												
												<td class="product-price">
													<b><?=$rs->tutar?></b>
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


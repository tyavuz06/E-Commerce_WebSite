
   		<script>
	function validateForm(){
		if(document.forms["checkout"]["adsoyad"].value == ""){
			alert("Ad Soyad alani bos birakilamaz!");
			return false;
		}
		if(document.forms["checkout"]["adres == ""){
			alert("Adres alani bos birakilamaz!");
			return false;
		}
		if(document.forms["checkout"]["sehir"].value == ""){
			alert("Şehir alani bos birakilamaz!");
			return false;
		}
		if(document.forms["checkout"]["telefon"].value == ""){
			alert("Telefon alani bos birakilamaz!");
			return false;
		}
	}
</script>
 
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Sepetim</h2>
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
                            <form method="post" action="">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Ürün Adı</th>
                                            <th class="product-price">Fiyat</th>
                                            <th class="product-quantity">Miktar</th>
                                            <th class="product-subtotal">Toplam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$total=0;
									if($sepet != false)
									{
										$aktif=1;
										foreach ($sepet as $rs)
										{
											$total=$total+$rs->sfiyat*$rs->miktar;
									?>
											<tr class="cart_item">
												<td class="product-remove">
													<a title="Remove this item" onClick="return confirm('Silmek istediğinize emin misiniz')" class="remove" href="<?=base_url()?>home/urunsil/<?=$rs->id?>/<?=$rs->miktar?>">×</a> 
												</td>

												<td class="product-thumbnail">
													<a href=""><img width="145" height="145"  class="shop_thumbnail" src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
												</td>

												<td class="product-name">
													<a href="<?=base_url()?>home/urun_detay/<?=$rs->id?>"><?=$rs->adi?></a> 
												</td>

												<td class="product-price">
													<span class="amount">₺<?=$rs->sfiyat?></span> 
												</td>

												<td class="product-quantity">
													<div class="quantity buttons_added">
														<span class="amount"><?=$rs->miktar?></span>
													</div>
												</td>

												<td class="product-subtotal">
													<span class="amount">
													<?php
														echo "₺".$rs->sfiyat*$rs->miktar;
													?>
													</span> 
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
									<td colspan="6" align="center"><font size="5"><b>Sepet Boş</b></font></td>
									</tr>
								<?php
								}
								?>
									
                                        
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                         


                            <div class="cart_totals ">
                                <h2>Sepet Tutarı</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Sepet Tutarı</th>
                                            <td><span class="amount">₺<?=$total?></span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Kargo Ücreti</th>
                                            <td>Ücretsiz Kargo</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Toplam Tutar</th>
                                            <td><strong><span class="amount">₺<?=$total?></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                           


                            </div>
                        </div>                        
                    </div>                    
                </div>
				
            </div>
			   <div class="row">    
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">

			<?php
				if($sepet!=NULL)
				{
			?>
<form    name="checkout" onsubmit="return validateForm()" class="checkout" action="<?=base_url()?>home/siparis_tamamla" method="post" >

                                <div id="customer_details" class="col2-set">
                                    <div class="col-6">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Kargo Adres Bilgisi</h3>
											<input type="text" value="<?=$total?>" placeholder="Ad Soyad" id="billing_first_name" name="total" class="input-text " hidden>

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class=""  for="billing_first_name">Ad Soyad <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?=$uye[0]->adsoyad?>" placeholder="Ad Soyad" id="billing_first_name" name="adsoyad" class="input-text ">
                                            </p>
                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" name="adres" for="billing_address_1">Adres <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?=$uye[0]->adres?>" placeholder="Adres Bilgisi" id="billing_address_1" name="adres" class="input-text ">
                                            </p>

                                   

                                          <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="billing_country">İl <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <select name="sehir" class="country_to_state country_select" id="billing_country">
													<option><?=$uye[0]->sehir?></option>
                                                    <?php
													foreach($iller as $rs)
													{
													?>
														<option><?=$rs->il_adi?></option>
													<?php
													}
													?>
                                                    
                                                </select>
                                            </p>
											<p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class=""  for="billing_phone">Telefon <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?=$uye[0]->telefon?>" placeholder="Telefon Numarası" id="billing_phone" name="telefon" class="input-text ">
                                            </p>
                

                                        </div>
                                    </div>
									<div class="col-6">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Ödeme Bilgisi</h3>
                                           

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" name="adsoyad" for="billing_first_name">Kredi Kart No <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Kart Numarası" id="billing_first_name" name="billing_first_name" class="input-text ">
                                            </p>
                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" name="adres" for="billing_address_1">SKT AY <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="SKT AY" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>
											<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" name="adres" for="billing_address_1">SKT YIL <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="SKT YIL" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>
											<p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" name="adres" for="billing_address_1">Güvenlik Kodu <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Güvenlik Kodu" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>
                                            <div class="create-account">
                                                <input type="submit" value="Siparişi Tamamla" name="proceed" class="checkout-button button alt wc-forward">
                                            </div>

                                        </div>
									</div>
						</div>  
							<?php
								}
								?>
                    </div>                    
                </div>
				</form>
            </div>
        </div>
        </div>
    </div>


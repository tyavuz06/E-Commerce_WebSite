 <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Adres Bilgileri</h2>
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

			
<form enctype="multipart/form-data" action="<?=base_url()?>home/siparis_tamamla" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-6">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Kargo Adres Bilgisi</h3>
                                           

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class=""  for="billing_first_name">Ad Soyad <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?=$uye[0]->adsoyad?>" placeholder="Ad Soyad" id="billing_first_name" name="adsoyad" class="input-text ">
                                            </p>
                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" name="adres" for="billing_address_1">Adres <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?=$uye[0]->adres?>" placeholder="Street address" id="billing_address_1" name="adres" class="input-text ">
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
                                                <input type="submit" value="SATIN AL" name="proceed" class="checkout-button button alt wc-forward">
                                            </div>

                                        </div>
									</div>
						</div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

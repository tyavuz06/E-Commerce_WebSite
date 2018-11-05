

 <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
					<div class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="<?=base_url()?>admin/home">Home</a>
                                </li>
								<li><a href="<?=base_url()?>admin/siparisler">Siparişler Listesi</a>
                                </li>
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
				<div class="col-lg-8">
				<?php 
				if($this->session->flashdata("sonuc"))
				{
			?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>İşlem: </strong> <?=$this->session->flashdata("sonuc")?>
			</div>
			<?php
				}
			?>
                        <h2>Sipariş Bilgileri</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Adı Soyadı:</th>
										<td><?=$veri[0]->adsoyad?></td>
                                    </tr>
									<tr>                                       
                                        <th>Şehir:</th>	
										<td><?=$veri[0]->sehir?></td>
                                    </tr>
									<tr>  
                                        <th>Adres:</th> 
										<td><?=$veri[0]->adres?></td>										
                                    </tr>
									<tr>                                       
                                        <th>Telefon:</th>   
										<td><?=$veri[0]->telefon?></td>
                                    </tr>
									<form role="form" action="<?=base_url()?>admin/siparisler/guncelle/<?=$veri[0]->id?>" method="post">
									<tr>                                       
										<th>Kargo Firma:</th>
										<td><input type="text" name="kargofirma" value="<?=$veri[0]->kargofirma?>"></td>
                                    </tr>
									<tr>                                       
										<th>Kargo Takip No:</th>
										<td><input type="text" name="kargono" value="<?=$veri[0]->kargono?>"></td>
                                    </tr>
									<tr>                                       
										<th>Kargo Durumu:</th>
										<td>
											<select  name="durum" style="height:27px;width:175px">
											<option><?=$veri[0]->durum?></option>
											<option>Onaylandı</option>		
											<option>Kargolandı</option>	
											<option>Teslim Edildi</option>
											<option>İptal Edildi</option>											
										</select>
										</td>
                                    </tr>
									<tr>                                       
										<th>Notunuz:</th>
										<td>
											
												<textarea name="admin_aciklama"  rows="3" cols="35"><?=$veri[0]->admin_aciklama?></textarea><br>
										</td>
										<tr>
										<th></th>
										<td>
												<button type="submit" class="btn btn-warning">Güncelle</button>
										</tr></td>		
											</form>
										
                                    </tr>
                                </thead>
                            </table>
							</div>
							<h2>Sipariş Ürün Bilgileri</h2>
							<div class="table-responsive">
							 <table class="table table-bordered table-hover table-striped">
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
													<?=$rs->adi?></span>
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
		

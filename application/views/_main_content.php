  
 <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Son Eklenenler</h2>
                        <div class="product-carousel">
						<?php
							if($yeniler != NULL)
							{
								foreach($yeniler as $rs)
								{
							?>
								<div class="single-product">
									<div class="product-f-image">
										<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" height="190" width="243">
										<div class="product-hover">
											<a href="<?=base_url()?>home/sepete_ekle/<?=$rs->id?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Sepete Ekle</a>
											<a href="<?=base_url()?>home/urun_detay/<?=$rs->id?>" class="view-details-link"><i class="fa fa-link"></i> Detaya Bak</a>
										</div>
									</div>
									
									<h2><a href="<?=base_url()?>home/urun_detay/<?=$rs->id?>"><?=$rs->adi?></a></h2>
									
									<div class="product-carousel-price">
										<ins><?=$rs->sfiyat?>₺</ins> 
									</div> 
								</div>
							 <?php
								}
							}
							
						?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
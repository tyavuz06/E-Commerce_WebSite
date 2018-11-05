
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Kategoriler</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">                   
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Kategoriler</h2>
                       	<?php
							foreach($anakategori as $rs)
							{
								if($rs->ust_id == 0)
								{
						?>
									<ul>
										<a href="<?=base_url()?>home/categories/0/<?=$rs->id?>"><li><?=$rs->adi?>
										
										<?php
											foreach($anakategori as $rc)
											{
												if($rs->id == $rc->ust_id)
												{
										?>			<ul>
														<a href="<?=base_url()?>home/categories/1/<?=$rc->id?>"><li><?=$rc->adi?></li></a>
													</ul>
										<?php
												}
											}
										?>
										
										</li></a>
									</ul>
						<?php
								}
							}
						?>
                    </div>
                </div>
                	<?php
					if($parcalarr == NULL)
					{
						foreach($parcalar as $rs)
						{
				?>
							<div class="col-md-3 col-sm-6">
							<div class="single-shop-product">
								<div class="product-upper" align="center">
									<img src="<?=base_url()?>uploads/<?=$rs->presim?>" alt="">
								</div>
								<h2><a href="<?=base_url()?>home/urun_detay/<?=$rs->pid?>"><?=$rs->padi?></a></h2>
								<div class="product-carousel-price">
									<ins>₺<?=$rs->psfiyat?></ins> 
								</div>  
								
								<div class="product-option-shop" align="center">
									
									<a href="<?=base_url()?>home/sepete_ekle/<?=$rs->pid?>" class="add_to_cart_button">Karta Ekle</a>
									<a href="<?=base_url()?>home/urun_detay/<?=$rs->pid?>" class="add_to_cart_button"><i class="fa fa-link"></i> Detaya Bak</a>
								</div>                       
							</div>
							</div>
				<?php
						}
				
					}
				 ?>
                
				<?php
					if($parcalar == NULL)
					{
						foreach($parcalarr as $rs)
						{
				?>
							<div class="col-md-3 col-sm-6">
							<div class="single-shop-product">
								<div class="product-upper" align="center">
									<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
								</div>
								<h2><a href="<?=base_url()?>home/urun_detay/<?=$rs->id?>"><?=$rs->adi?></a></h2>
								<div class="product-carousel-price">
									<ins>₺<?=$rs->sfiyat?></ins> 
								</div>  
								
								<div class="product-option-shop" align="center">
									<a href="<?=base_url()?>home/sepete_ekle/<?=$rs->id?>" class="add_to_cart_button">Sepete Ekle</a>
									<a href="<?=base_url()?>home/urun_detay/<?=$rs->id?>" class="add_to_cart_button"> Detaya Bak</a>
								</div>                       
							</div>
							</div>
				<?php
						}	
				
					}
				?> 	
				
            </div>
        </div>
    </div>
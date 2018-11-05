  
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Ürünler</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
			<?php
			$total=0;
			$abc=$sorgular["sayac2"][0].$sorgular["sayac3"][0];
			
			for($i=1; $i<=$abc; $i++)
			{
				if($abc <= 7)
					$total=$abc;
				else
					$total += 7;	
				if($i>1)
					$baslangic=($sayaclar["sayac"][0]-1)*8;
				else
					$baslangic=0;

				if($sayaclar["sayac"][0] == $i)
				{
					break;
				}
			}
			for($i=$baslangic; $i<=$total; $i++)
			{
				if($abc>$i)
				{
			?>
					<div class="col-md-3 col-sm-6">
						<div class="single-shop-product">
							<div class="product-upper" align="center">
								<img src="<?=base_url()?>uploads/<?=$yeniurunler[$i]->resim?>" alt="">
							</div>
							<h2><a href=""><?=$yeniurunler[$i]->adi?></a></h2>
							<div class="product-carousel-price">

								<ins><?=$yeniurunler[$i]->sfiyat?>₺</ins>
							</div>              
							<div class="product-option-shop">
							<a href="<?=base_url()?>home/urun_detay/<?=$yeniurunler[$i]->id?>" class="add_to_cart_button">Ürün Detay</a>
								<a class="add_to_cart_button" rel="nofollow" href="<?=base_url()?>home/sepete_ekle/<?=$yeniurunler[$i]->id?>">Sepete Ekle</a>
							</div>                       
						</div>
					</div>                
            
            <?php
				}
			}
			?>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="<?=base_url()?>home/shop/1" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
							<?php
							$sayac4=$abc/8;
							for($i=1; $i<=ceil($sayac4); $i++)
							{
							?>
								<li><a href="<?=base_url()?>home/shop/<?=$i?>"><?=$i?></a></li>
							<?php
							}
							?>
                            
                            <li>
                              <a href="<?=base_url()?>home/shop/<?=ceil($sayac4)?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    

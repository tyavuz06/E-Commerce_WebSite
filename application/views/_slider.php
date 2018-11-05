<div class="slider-area">
	<!-- Slider -->
	<div class="block-slider block-slider4">
		<ul class="" id="bxslider-home4">
			<?php

				$i=2;
				foreach($slider as $rs)
				{
					if($i==0)
						$a="";
					else
						$a=$i;
			?>		
					<li>
					<img src="<?=base_url()?>/uploads/<?=$rs->resimadi?>.jpg" alt="Slide">
					</li>
			<?php			
				}
			?>
			
		</ul>
	</div>
			<!-- ./Slider -->
</div> <!-- End slider are

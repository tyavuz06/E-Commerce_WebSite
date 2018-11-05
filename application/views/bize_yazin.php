<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>BİZE YAZIN</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
<script>
	function validateForm(){
		if(document.forms["myForm"]["adsoyad"].value == ""){
			alert("Ad Soyad alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["email"].value == ""){
			alert("E-Mail alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["telefon"].value == ""){
			alert("Telefon alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["konu"].value == ""){
			alert("Konu alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["mesaj"].value == ""){
			alert("Messaj alani bos birakilamaz!");
			return false;
		}
	}
</script>		

<div class="maincontent-area">
        <div class="zigzag-top"></div>
        <div class="container">	
 <div class="row">	
	<div class="col-lg-12">
	<?php if ($this->session->flashdata("sonuc") or $this->session->flashdata("email_sent"))
	{
	?>
	<div class="alert alert-success"><?=$this->session->flashdata("sonuc")?></div>
	
	<?php
	}
	?>
	</div>
</div>		
<div class="row">
                    <div class="col-lg-6">

                        <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>home/bize_yazin_ekle" method="post">
                            <div class="form-group">
								&emsp;<label> Adiniz Soyadiniz</label>
                                &emsp;<input class="form-control"  name="adsoyad" placeholder="Adinizi Soyadinizi Giriniz.">
                            </div>														
							<div class="form-group">
                                &emsp;<label> E-Mail Adresiniz</label>
                                &emsp;<input class="form-control" type="email" name="email" placeholder="Email Adresini Giriniz.">
                            </div>
							
							<div class="form-group">
                                &emsp;<label> Telefon Numaraniz</label>
                                &emsp;<input class="form-control" name="telefon" placeholder="Telefon Numaranizi Giriniz.">
                            </div>
							<div class="form-group">
                                &emsp;<label> Mesajin Konusu</label>
                                &emsp;<input class="form-control" name="konu" placeholder="Mesajinizin Konusunu Giriniz.">
                            </div>
							<div class="form-group">
                                &emsp;<label> Mesajiniz</label>
                                &emsp;<textarea class="form-control" name="mesaj" placeholder="Mesajinizi Giriniz." rows="10"></textarea>
                            </div>		
							<div class="form-group" align="center">
                                <button type="submit" class="readmore" >Mesaji Gonder</button>
                            </div>																
                        </form>
						<br>
						<br>
					</div>
				</div>
					</div>
				</div>
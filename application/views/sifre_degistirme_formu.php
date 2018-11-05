
<script>
	function validateForm(){
		if(document.forms["myForm"]["sifre"].value == ""){
			alert("Şifre alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["sifre2"].value == ""){
			alert("Şifre tekrar alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["sifre"].value != document.forms["myForm"]["sifre2"].value){
			alert("Şifreler Uyuşmuyor!");
			return false;
		}
	
	}
</script>	
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Şifre Değiştirme</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div>
	 <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
			 <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <div class="latest-product">
                        <div class="woocommerce">
					<form  role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>sifre/e_sifre_degistir/<?=$uye_bilgi[0]->id?>/<?=$uye_bilgi[0]->sifre?>/<?=$uye_bilgi[0]->sifre2?>/<?=$uye_bilgi[0]->sifre3?>" method="post" >
						<fieldset>
							<div class="form-group">
                                <label>Şifre</label>
                                <input class="form-control" type="password" name="sifre" placeholder="Şifrenizi Giriniz.">
                            </div>
							
							<div class="form-group">
                                <label>Şifre Tekrar</label>
                                <input class="form-control" type="password" name="sifre2" placeholder="Şifrenizi Tekrar Giriniz.">
								<span id="confirmMessage" class="confirmMessage"></span>
                            </div>
							<div class="form-group" align="center">
							<input type="submit" class="btn btn-primary" value="Şifre Değiştir" />
							
							</div>
							<div class="form-group" align="center">
							<?=$this->session->flashdata("login_hata")?>
							<?=$this->session->flashdata("sonuc")?>
							</div>
						</fieldset>
					</form>
				</div>

                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

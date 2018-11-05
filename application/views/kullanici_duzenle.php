<script>
	function validateForm(){
		if(document.forms["myForm"]["adsoyad"].value == ""){
			alert("Kullanıcı Adı Soyadı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["email"].value == ""){
			alert("Email alani bos birakilamaz!");
			return false;
		}
	}
</script>	
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Bilgileri Düzenle</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    			
<div class="maincontent-area">
        <div class="zigzag-top"></div>
        <div class="container">
				<div class="row">
				 <div class="col-md-3">
                    
                </div>
                    <div class="col-lg-6">

                        <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>home/kedit/<?=$veriler[0]->id?>" method="post">
                            <div class="form-group">
                                <label>Adı Soyadı</label>
                                <input class="form-control" value="<?=$veri[0]->adsoyad?>" name="adsoyad" placeholder="Ad Soyad Giriniz.">
                            </div>
							<div class="form-group">
                                <label>E - Mail Adresi</label>
                                <input class="form-control" value="<?=$veri[0]->email?>" name="email" type="email" placeholder="E-Mail Adresi Giriniz.">
                            </div>							
							<div class="form-group">
                                <label>Telefon</label>
                                <input class="form-control" value="<?=$veri[0]->telefon?>" name="telefon"  placeholder="Telefon Giriniz.">
                            </div>	
							<div class="form-group">
                                <label>Şehir</label>
                                <input class="form-control" value="<?=$veri[0]->sehir?>" name="sehir"  placeholder="Şehir Giriniz.">
                            </div>
							<div class="form-group">
                                <label>Adres</label>
                                <input class="form-control" value="<?=$veri[0]->adres?>" name="adres" placeholder="Adresi Giriniz.">
                            </div>	
															
							<br>
							<div align="center">
                            <button type="submit" class="btn btn-warning">Bilgileri Güncelle</button>
							</div>
                        </form>

                    </div>				
			</div>
			
                    </div>				
			</div>
<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>

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
                                <li><a href="<?=base_url()?>admin/ayarlar/">Ayarlar</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/parcalar/edit/1">Ayarları Düzenle</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
				<script>
				function validateForm(){
		if(document.forms["myForm"]["adi"].value == ""){
			alert("Parça Adı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["name"].value == ""){
			alert("Name alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["keywords"].value == ""){
			alert("Keywords alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["smtpserver"].value == ""){
			alert("Smtp Server alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["smtpport"].value == ""){
			alert("Smtp Port alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["smtpemail"].value == ""){
			alert("Smtp Email alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["password"].value == ""){
			alert("Password alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["adres"].value == ""){
			alert("Adres alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["sehir"].value == ""){
			alert("Şehir alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["telefon"].value == ""){
			alert("Adet alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["email"].value == ""){
			alert("Email Fiyatı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["hakkimizda"].value == ""){
			alert("Hakkımızda Fiyatı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["iletisim"].value == ""){
			alert("İletişim alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["facebook"].value == ""){
			alert("Facebook alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["twitter"].value == ""){
			alert("Twitter alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["pinterest"].value == ""){
			alert("Pinterest alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["linkedin"].value == ""){
			alert("LinkedIn alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["instagram"].value == ""){
			alert("İnstagram alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["fax"].value == ""){
			alert("Fax alani bos birakilamaz!");
			return false;
		}
	}
</script>
				<div class="row">
                    <div class="col-lg-6">

                        <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>admin/ayarlar/kedit/1" method="post">
                            <div class="form-group">
                                <label>Adı</label>
                                <input class="form-control" value="<?=$veri[0]->adi?>" name="adi">
                            </div>
							<div class="form-group">
                                <label>keywords</label>
                                <input class="form-control" value="<?=$veri[0]->keywords?>" name="keywords">
                            </div>
							
							<div class="form-group">
                                <label>Aciklama</label>
                                <input class="form-control" value="<?=$veri[0]->aciklama?>" name="aciklama">
                            </div>
							
							<div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value="<?=$veri[0]->name?>" name="name">
                            </div>
							<div class="form-group">
                                <label>SmtpServer</label>
                                <input class="form-control" value="<?=$veri[0]->smtpserver?>" name="smtpserver">
                            </div>
							<div class="form-group">
                                <label>SmtpPort</label>
                                <input class="form-control" value="<?=$veri[0]->smtpport?>" name="smtpport">
                            </div>
							<div class="form-group">
                                <label>SmtpEmail</label>
                                <input class="form-control" value="<?=$veri[0]->smtpemail?>" name="smtpemail" type="email">
                            </div>
							<div class="form-group">
                                <label>Password</label>
                                <input class="form-control" value="<?=$veri[0]->password?>" name="password">
                            </div>	
							<div class="form-group">
                                <label>Adres</label>
                                <input class="form-control" value="<?=$veri[0]->adres?>" name="adres">
                            </div>
							<div class="form-group">
                                <label>Şehir</label>
                                <input class="form-control" value="<?=$veri[0]->sehir?>" name="sehir">
                            </div>
							<div class="form-group">
                                <label>Telefon</label>
                                <input class="form-control" value="<?=$veri[0]->telefon?>" name="telefon">
                            </div>
							<div class="form-group">
                                <label>Fax</label>
                                <input class="form-control" value="<?=$veri[0]->fax?>" name="fax">
                            </div>
							<div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="<?=$veri[0]->email?>" name="email" type="email">
                            </div>
							
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<div class="form-group">
							<label>Hakkımızda:</label>
								<textarea name="hakkimizda" id="hakkimizda" rows="201" cols="150">
									<?=$veri[0]->hakkimizda?>
								</textarea>
								<script>
									CKEDITOR.replace('hakkimizda');
								</script>
                            </div>
							
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<div class="form-group">
							<label>İletişim:</label>
								<textarea name="iletisim" id="iletisim" rows="201" cols="150">
									<?=$veri[0]->iletisim?>
								</textarea>
								<script>
									CKEDITOR.replace('iletisim');
								</script>
                            </div>
								
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<div class="form-group">
							<label>SSS:</label>
								<textarea name="sss" id="sss" rows="201" cols="150">
									<?=$veri[0]->sss?>
								</textarea>
								<script>
									CKEDITOR.replace('sss');
								</script>
                            </div>
								
							<div class="form-group">
                                <label>Twitter</label>
                                <input class="form-control" value="<?=$veri[0]->twitter?>" name="twitter">
                            </div>
							<div class="form-group">
                                <label>Facebook</label>
                                <input class="form-control" value="<?=$veri[0]->facebook?>" name="facebook">
                            </div>
							<div class="form-group">
                                <label>İnstagram</label>
                                <input class="form-control" value="<?=$veri[0]->instagram?>" name="instagram">
                            </div>
							<div class="form-group">
                                <label>Printest</label>
                                <input class="form-control" value="<?=$veri[0]->pinterest?>" name="pinterest">
                            </div>
							<div class="form-group">
                                <label>Linked In</label>
                                <input class="form-control" value="<?=$veri[0]->linkedin?>" name="linkedin">
                            </div>
							
							<br>
                            <button type="submit" class="btn btn-warning">Ayarları Güncelle</button>
                            <button type="reset" class="btn btn-warning">Formu Temizle</button>

                        </form>

                    </div>				
			</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
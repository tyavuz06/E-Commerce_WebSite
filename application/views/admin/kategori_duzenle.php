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
                                <li><a href="<?=base_url()?>admin/kategoriler/">Kategoriler</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/parcalar/edit">Kategori Düzenle</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
<script>
	function validateForm(){
		if(document.forms["myForm"]["ust_id"].value == ""){
			alert("Ust Kategori id alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["adi"].value == ""){
			alert("Kategori adi alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["keywords"].value == ""){
			alert("Keywords alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["durum"].value == ""){
			alert("Durum alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["aciklama"].value == ""){
			alert("Açıklama alani bos birakilamaz!");
			return false;
		}
	}
</script>				
				<div class="row">
                    <div class="col-lg-6">

                        <form role="form" onsubmit="return validateForm()" action="<?=base_url()?>admin/kategoriler/kedit/<?=$veri[0]->id?>" method="post">
							<div class="form-group">
                                <label>Ust_ID</label>
                                <input class="form-control" value="<?=$veri[0]->ust_id?>" name="ust_id" placeholder="Kisa Aciklama Giriniz.">
                            </div>

							<div class="form-group">
                                <label>Adı</label>
                                <input class="form-control" value="<?=$veri[0]->adi?>" name="adi" placeholder="Ad Giriniz.">
                            </div>														
						
							<div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" value="<?=$veri[0]->keywords?>" name="keywords" placeholder="Keywords Giriniz.">
                            </div>
							
							<div class="form-group">
                                <label>Durumu</label>
                                <select class="form-control" name="durum">
									<option><?=$veri[0]->durum?></option>
                                    <option>Aktif</option>
                                    <option>Pasif</option>
                                    
                                </select>
                            </div>
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<div class="form-group">
							<label>Aciklama:</label>
								<textarea name="aciklama" id="aciklama" rows="201" cols="150">
									<?=$veri[0]->aciklama?>
								</textarea>
								<script>
									CKEDITOR.replace('aciklama');
								</script>
                            </div>
							
							<br>
                            <button type="submit" class="btn btn-warning">Kategori Güncelle</button>
                            <button type="reset" class="btn btn-warning">Formu Temizle</button>

                        </form>

                    </div>				
			</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
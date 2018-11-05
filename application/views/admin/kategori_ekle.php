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
								<li class="active"><a href="<?=base_url()?>admin/kategoriler/ekle">Kategori Ekle</a>
                                </li> 
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
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

                        <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>admin/kategoriler/kategori_ekle" method="post">
                            <div class="form-group">
                                <label>Ust ID</label>                               								
                                <select class="form-control" name="ust_id">
									<option value="0">Ana Kategori</option>
                                    <?php
										foreach($ust_id as $rs)
										{
									?>
											<option value="<?=$rs->id?>"><?=$rs->adi?></option>
									<?php
										}
									?>
                                </select>                      
                            </div>
							<div class="form-group">
                                <label>Adi</label>
                                <input class="form-control"  name="adi" placeholder="Kategori Giriniz.">
                            </div>							
							<div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control"  name="keywords" placeholder="Keywords Giriniz.">
                            </div>
							<div class="form-group">
                                <label>Durumu</label>
                                <select class="form-control" name="durum">
                                    <option>Aktif</option>
                                    <option>Pasif</option>
                                    
                                </select>
                            </div>
								<div class="form-group">
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<label>Aciklama:</label>
								<textarea name="aciklama" id="aciklama" rows="20" cols="150">										
								</textarea>
								<script>
									CKEDITOR.replace('aciklama');
								</script>
                            </div>
							<br>
                            <button type="submit" class="btn btn-warning">Kategori Ekle</button>
                            <button type="reset" class="btn btn-warning">Formu Temizle</button>

                        </form>

                    </div>				
			</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
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
                                <li><a href="<?=base_url()?>admin/slider/">Slider</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/slider/ekle">Slider Ekle</a>
                                </li> 
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>	
                    </div>
                </div>  
		<script>
	function validateForm(){
		if(document.forms["myForm"]["resimadi"].value == ""){
			alert("Parça Adı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["haber_icerik"].value == ""){
			alert("Kısa Açıklama alani bos birakilamaz!");
			return false;
		}
	}
</script>
				<div class="row">
                    <div class="col-lg-6">

                        <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>admin/slider/kekle"  method="post">
                            <div class="form-group">
                                <label>Adı</label>
                                <input class="form-control"  name="resimadi" placeholder="Ad Giriniz.">
								<input class="form-control"  name="resim" value="1" placeholder="Ad Giriniz." style="display:none;">
                            </div>
							<div class="form-group">
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<label>Haber İçerik:</label>
								<textarea name="haber_icerik" id="haber_icerik" rows="20" cols="150">										
								</textarea>
								<script>
									CKEDITOR.replace('haber_icerik');
								</script>
                            </div>
							<br>
                            <button type="submit" class="btn btn-warning">Slider Ekle</button>
                            <button type="reset" class="btn btn-warning">Formu Temizle</button>

                        </form>

                    </div>				
			</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
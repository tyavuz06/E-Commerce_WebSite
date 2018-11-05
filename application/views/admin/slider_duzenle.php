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
								<li class="active"><a href="<?=base_url()?>admin/slider/edit">Slider Düzenle</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
						<script>
	function validateForm(){
		if(document.forms["myForm"]["resimadi"].value == ""){
			alert("Parça Adı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["icerik"].value == ""){
			alert("Kısa Açıklama alani bos birakilamaz!");
			return false;
		}
	}
</script>
				<div class="row">
                    <div class="col-lg-6">

                        <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>admin/slider/kedit/<?=$veri[0]->id?>" method="post">
                            <div class="form-group">
                                <label>Adı</label>
                                <input class="form-control" value="<?=$veri[0]->resimadi?>" name="resimadi" placeholder="Ad Giriniz.">
                            </div>	
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<div class="form-group">
							<label>Haber İçeriği:</label>
								<textarea name="icerik" id="icerik" rows="201" cols="150">
									<?=$veri[0]->haber_icerik?>
								</textarea>
								<script>
									CKEDITOR.replace('icerik');
								</script>
                            </div>							
							
							<br>
                            <button type="submit" class="btn btn-warning">Slider Güncelle</button>
                            <button type="reset" class="btn btn-warning">Formu Temizle</button>

                        </form>

                    </div>				
			</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
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
                                <li><a href="<?=base_url()?>admin/Parcalar/">Parçalar</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/parcalar/edit/<?=$veri[0]->id?>">Parça Düzenle</a></li> 
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
		if(document.forms["myForm"]["aciklama"].value == ""){
			alert("Açıklama alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["keywords"].value == ""){
			alert("Keywords alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["adet"].value == ""){
			alert("Adet alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["afiyat"].value == ""){
			alert("Alış Fiyatı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["sfiyat"].value == ""){
			alert("Satış Fiyatı alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["kategori_id"].value == ""){
			alert("Kategori alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["durum"].value == ""){
			alert("Durum alani bos birakilamaz!");
			return false;
		}
		if(document.forms["myForm"]["uzunaciklama"].value == ""){
			alert("Açıklama alani bos birakilamaz!");
			return false;
		}
	}
</script>

       
           
                        <!-- /.panel-heading -->
                  <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form role="form" name="myForm" onsubmit="return validateForm()" action="<?=base_url()?>admin/parcalar/edit2/<?=$veri[0]->id?>" method="post">
                            <div class="form-group">
                                <label>Adı</label>
                                <input class="form-control" value="<?=$veri[0]->adi?>" name="adi" placeholder="Ad Giriniz.">
                            </div>														
							<div class="form-group">
                                <label>Aciklama</label>
                                <input class="form-control" value="<?=$veri[0]->aciklama?>" name="aciklama" placeholder="Kisa Aciklama Giriniz.">
                            </div>
							
							<div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" value="<?=$veri[0]->keywords?>" name="keywords" placeholder="Keywords Giriniz.">
                            </div>
							
							 <div class="form-group">
                                <label>Adet</label>
                                <input class="form-control" value="<?=$veri[0]->adet?>" name="adet" placeholder="Adet Giriniz.">
                            </div>
							<div class="form-group">
                                <label>Alis Fiyati</label>
                                <input class="form-control" value="<?=$veri[0]->afiyat?>" name="afiyat" placeholder="Alis Fiyatini Giriniz.">
                            </div>
							<div class="form-group">
                                <label>Satis Fiyati</label>
                                <input class="form-control" value="<?=$veri[0]->sfiyat?>" name="sfiyat" placeholder="Satis Fiyati Giriniz.">
                            </div>
							<div class="form-group">
                                <label>Türü</label>
                                <select  name="turu_id" class="form-control">
									<option value="<?=$veri[0]->turu_id?>"><?=$veri[0]->turadi?></option>
                                    <?php
										foreach($turu as $rs)
										{
									?>
									<option value="<?=$rs->id?>"><?=$rs->adi?></option>
									<?php
										}
									?>								
                                </select>
                            </div>
							<div class="form-group">
                                <label>Kategorisi</label>
                                <select  name="kategori_id" class="form-control">
									<option value="<?=$veri[0]->kategori_id?>"><?=$veri[0]->kadi?></option>
                                    <?php
										foreach($kategoriler as $rs)
										{
											if($rs->ust_id != 0){
									?>
									<option value="<?=$rs->id?>"><?=$rs->adi?></option>
									<?php
											}
										}
									?>								
                                </select>
                            </div>
							<div class="form-group">
                                <label>Durumu</label>
                                <select class="form-control" name="durum">
									<option><?=$veri[0]->durum?></option>
                                    <option>Kullanilmamis</option>
                                    <option>Ikinci El</option>
                                    <option>Ikinci El Garantili</option>
                                </select>
                            </div>
							<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
							<div class="form-group">
							<label>Aciklama:</label>
								<textarea name="uzunaciklama" id="uzunaciklama" rows="201" cols="150">
									<?=$veri[0]->uzunaciklama?>
								</textarea>
								<script>
									CKEDITOR.replace('uzunaciklama');
								</script>
                            </div>
							
							<br>
                            <button type="submit" class="btn btn-warning">Parça Güncelle</button>
                            <button type="reset" class="btn btn-warning">Formu Temizle</button>

                        </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            
           
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

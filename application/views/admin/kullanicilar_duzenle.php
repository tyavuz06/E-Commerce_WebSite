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
                                <li><a href="<?=base_url()?>admin/kullanicilar/">Kullanıcılar</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/kullanicilar/edit">Kullanıcı Düzenle</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
           
                        <!-- /.panel-heading -->
                  <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?=base_url()?>admin/kullanicilar/edit2/<?=$veri[0]->id?>">
                                        <div class="form-group">
                                            <label>Ad Soyad:</label>
                                            <input class="form-control" name="adsoyad" placeholder="Adınızı ve Soyadınızı Giriniz..." value="<?=$veri[0]->adsoyad?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail:</label>
                                            <input class="form-control" name="email" placeholder="E-Mail bilgisini giriniz." value="<?=$veri[0]->email?>">
                                        </div>
										 
										<div class="form-group">
                                            <label>Yetki</label>
                                            <select class="form-control" name="yetki">
												<option value="<?=$veri[0]->yetki?>"><?=$veri[0]->yetki?></option>
                                                <option value="üye">Üye</option>
                                            
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Durum</label>
                                            <select class="form-control" name="durum">
												<option><?=$veri[0]->durum?></option>
                                                <option>Aktif</option>
                                                <option>Engelli</option>
                                                <option>Beklemede</option>
                                            
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Telefon:</label>
                                            <input class="form-control" name="telefon" placeholder="Telefon bilgisini giriniz." value="<?=$veri[0]->telefon?>">
                                        </div>
										<div class="form-group">
                                            <label>Şehir:</label>
                                            <input class="form-control" name="sehir" placeholder="Şehir bilgisini giriniz." value="<?=$veri[0]->sehir?>">
                                        </div>
                                        <div align="center">
											<button type="submit" class="btn btn-default">Kayıt Et</button>
											<button type="reset" class="btn btn-default">Formu Temizle</button>
										</div>
                                    </form>
                                </div>
                               
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

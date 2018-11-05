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
                                <li class="active"><a href="<?=base_url()?>admin/kullanicilar/">Kullanıcılar</a>
                                </li> 
								
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
                <div class="row">
				
                    <div class="col-lg-12">
                       <a href="<?=base_url()?>admin/kullanicilar/user_add"><button type="button" class="btn btn-success">Kullanıcı Ekle</button></a>	
						<br><br>
						<?php if ($this->session->flashdata("sonuc"))
						{
						?>
						<div class="alert alert-success"><?=$this->session->flashdata("sonuc")?></div>
						<?php
						}
						?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kullanıcılar Tablosu
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ad Soyad</th>
                                            <th>E-Mail</th>
                                            <th>Yetki</th>
											<th>Durum</th>
											<th>Telefon</th>
											<th>Şehir</th>
											<th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$i=0;
									foreach($veri as $rs)
									{$i++;
									?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$rs->adsoyad?></td>
                                            <td><?=$rs->email?></td>
                                            <td><?=$rs->yetki?></td>
											<td><?=$rs->durum?></td>
											<td><?=$rs->telefon?></td>
											<td><?=$rs->sehir?></td>
											<td>
												<a href="<?=base_url()?>admin/kullanicilar/view/<?=$rs->id?>"><button type="button" class="btn btn-info">Göster</button></a>
												<a href="<?=base_url()?>admin/kullanicilar/edit/<?=$rs->id?>"><button type="button" class="btn btn-warning">Düzenle</button></a>
												<a href="<?=base_url()?>admin/kullanicilar/deletee/<?=$rs->id?>"><button type="button" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz')">Sil</button></a>
											</td>
                                        </tr>
									<?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

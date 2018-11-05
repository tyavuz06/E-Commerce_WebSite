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
                                <li class="active"><a href="<?=base_url()?>admin/parcalar/">Parçalar</a>
                                </li> 
								
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
                <div class="row">
				
                    <div class="col-lg-12">
                       <a href="<?=base_url()?>admin/parcalar/parca_add"><button type="button" class="btn btn-success">Parça Ekle</button></a>	
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
                            Parçalar Tablosu
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
											<th>No</th>
                                            <th>Parça Adı</th>
											
											<th>Kategorisi</th>
                                            <th>Açıklama</th>
                                       
											<th>Adet</th>
											<th>Alış Fiyatı</th>
											<th>Satış Fiyatı</th>
											<th>Resmi</th>
											<th>Resim Galerisi</th>
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
                                            <td><?=$rs->adi?></td>
										
											<td><?=$rs->katadi?></td>
                                            <td><?=$rs->aciklama?></td>
                                     
											<td><?=$rs->adet?></td>
											<td><?=$rs->afiyat?>₺</td>
											<td><?=$rs->sfiyat?>₺</td>
											<td align="center">
											<a href="<?=base_url()?>admin/parcalar/resimekle/<?=$rs->id?>">
												<?php
													if($rs->resim==NULL)
													{
												?>	
														<button type="button" class="btn btn-default">Resim Ekle</button>
												<?php
													}
													else
													{
												?>
														<img height="75" src="<?=base_url()?>uploads/<?=$rs->resim?>">
												<?php
													}
												?>
											</a>
											</td>
											<td>
												<a href="<?=base_url()?>admin/parcalar/resimgaleriekle/<?=$rs->id?>"><img src="<?=base_url()?>assets/admin/image_gallery.png" height="50px"></a>
											</td>
											<td>
												<a href="<?=base_url()?>admin/parcalar/view/<?=$rs->id?>"><button type="button" class="btn btn-info">Göster</button></a>
												<a href="<?=base_url()?>admin/parcalar/edit/<?=$rs->id?>"><button type="button" class="btn btn-warning">Düzenle</button></a>
												<a href="<?=base_url()?>admin/parcalar/deletee/<?=$rs->id?>"><button type="button" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz')">Sil</button></a>
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

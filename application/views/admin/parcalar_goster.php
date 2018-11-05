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
                                <li><a href="<?=base_url()?>admin/parcalar/">Parçalar</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/parcalar/view/<?=$veri[0]->id?>">Parça Göster</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
           
                        <!-- /.panel-heading -->
                    <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Parça Detay Bilgisi
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Parça Adı</th>
											<td><?=$veri[0]->adi?></td>
										</tr>
										<tr>
                                            <th>Açıklama</th>
											 <td><?=$veri[0]->aciklama?></td>
										</tr>
										<tr>
                                            <th>Keywords</th>
											 <td><?=$veri[0]->keywords?></td>
										</tr>
										<tr>
											<th>Adet</th>
											<td><?=$veri[0]->adet?></td>
										</tr>
										<tr>
											<th>Alış Fiyatı</th>
											<td><?=$veri[0]->afiyat?>₺</td>
										</tr>
										<tr>
											<th>Satış Fiyatı</th>
											<td><?=$veri[0]->sfiyat?>₺</td>
										</tr>
                                        
                                    </thead>
                                    
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
                            <!-- /.row (nested) -->
                        
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            
           
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

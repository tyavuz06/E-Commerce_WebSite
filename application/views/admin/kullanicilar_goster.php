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
								<li class="active"><a href="<?=base_url()?>admin/kullanicilar/view/<?=$veri[0]->id?>">Kullanıcı Göster</a></li> 
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
                            Kullanıcı Detay Bilgisi
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ad Soyad</th>
											<td><?=$veri[0]->adsoyad?></td>
										</tr>
										<tr>
                                            <th>E-Mail</th>
											 <td><?=$veri[0]->email?></td>
										</tr>
										<tr>
                                            <th>Yetki</th>
											 <td><?=$veri[0]->yetki?></td>
										</tr>
										<tr>
											<th>Durum</th>
											<td><?=$veri[0]->durum?></td>
										</tr>
                                        
                                    </thead>
                                    <tbody>
									
                                        <tr>
                                            
                                           
                                           
											
										</tr>
									
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
                            <!-- /.row (nested) -->
                        
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
            
           
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

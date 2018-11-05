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
								<li class="active"><a href="<?=base_url()?>admin/kategoriler/view">Kategoriler Göster</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
				<div class="col-lg-6">
                        <h2>Kategori Bilgileri</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
									
                                    <tr>
                                        <th>Adı:</th>
										<td><?=$veri[0]->adi?></td>
                                    </tr>									
									<tr>                                       
                                        <th>Aciklama:</th>   
										<td><?=$veri[0]->aciklama?></td>
                                    </tr>
									<tr>                                       
										<th>Keywords:</th>
										<td><?=$veri[0]->keywords?></td>
                                    </tr>
									<tr>
										<th>Resim:</th>
										<td>										
										<?php
											if($veri[0]->resim==NULL)
											{	
										?>
											<i class="btn btn-sm btn-default">Resim Eklenmemis</i>		
										<?php
											}else
											{
										?>
											<img src="<?=base_url()?>/uploads/<?=$veri[0]->resim?>" height="100px ">
										<?php
											}
										?>
										</td>
									</tr>				
									<tr>                                       
										<th>Durum:</th>
										<td><?=$veri[0]->durum?></td>
                                    </tr>															
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
		
		</div>
 <?php
$this->load->view('admin/_footer');
?>
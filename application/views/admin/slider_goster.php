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
								<li class="active"><a href="<?=base_url()?>admin/slider/view">Slider Göster</a></li> 
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
				<div class="col-lg-6">
                        <h2>Kitap Bilgileri</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Slider Adı:</th>
										<td><?=$veri[0]->resimadi?></td>
                                    </tr>
									<tr>                                       
                                        <th>Haber İçeriği:</th>   
										<td><?=$veri[0]->haber_icerik?></td>
                                    </tr>
									<tr>                                       
										<th>Resim:</th>
										<td><img height="100" src="<?=base_url()?>/uploads/<?=$veri[0]->resim?>"></td>
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
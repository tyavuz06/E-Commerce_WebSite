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
                                <li class="active"><a href="<?=base_url()?>admin/slider/">Slider</a>
                                </li> 
								
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
                <div class="row">
				
                    <div class="col-lg-12">
                       <a href="<?=base_url()?>admin/slider/ekle"><button type="button" class="btn btn-success">Slider Ekle</button></a>	
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
                        <h2>Slider Tablosu</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Resim Adı</th>                                                                        
										<th>Resim</th>    
										<th>İçerik</th> 
										<th>İşlemler</th> 
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach ($veri as $rs)
								{
								?>
                                    <tr>
										<td><?=$rs->resimadi?></td>
										<td>

										<a href="<?=base_url()?>admin/slider/resimekle/<?=$rs->id?>">
										<?php
											if($rs->resim==NULL)
											{	
										?>
											<i class="btn btn-sm btn-default">Resim Ekle</i>		
										<?php
											}else
											{
										?>
											<img src="<?=base_url()?>/uploads/<?=$rs->resim?>" height="40px">
										<?php
											}
										?>
										</a>
										</td>
                                        
                                        <td><?=$rs->haber_icerik?></td>                                                                              
										<td><a href="<?=base_url()?>admin/slider/view/<?=$rs->id?>"><button type="button" class="btn btn-sm btn-info">Göster</button></a>
										<a href="<?=base_url()?>admin/slider/edit/<?=$rs->id?>"><button type="button" class="btn btn-sm btn-warning">Düzenle</button></a>
										<a href="<?=base_url()?>admin/slider/deletee/<?=$rs->id?>" onClick="return confirm('Silmek İstediğinizden Emin misiniz?')"><button type="button" class="btn btn-sm btn-danger">Slider Sil</button></a></td>
                                    </tr>
                                <?php
								}
								?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                       
                    
                    </div>
                </div>    
			</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   
   
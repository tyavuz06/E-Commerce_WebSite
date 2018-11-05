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
                                <li class="active"><a href="<?=base_url()?>admin/kategoriler/">Kategoriler</a>
                                </li> 
								
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                       <a href="<?=base_url()?>admin/kategoriler/ekle"><button type="button" class="btn btn-success">Kategori Ekle</button></a>							
						<?php if ($this->session->flashdata("sonuc"))
						{
						?>
							<br><br><div class="alert alert-success"><?=$this->session->flashdata("sonuc")?></div>
						<?php
						}
						?>
                    <div class="row">					
                    <div class="col-lg-12">
                        <h2>Kategori Tablosu</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Ust ID si</th>
                                        <th>Adi</th>                                                                               
										<th>Aciklama</th>
										<th>Keywords</th>
										<th>Resim</th>
										<th>Durum</th>	
										<th>Islemler</th>											
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach ($veri as $rs)
								{
								?>
                                    <tr>
										<td><?=$rs->ust_id?></td>
                                        <td><?=$rs->adi?></td>
										<td><?=$rs->aciklama?></td>
                                        <td><?=$rs->keywords?></td> 
																				
										<td>
										<a href="<?=base_url()?>admin/kategoriler/resimekle/<?=$rs->id?>">
										<?php
											if($rs->resim==NULL)
											{	
										?>
											<i class="btn btn-sm btn-default">Resim Ekle</i>		
										<?php
											}else
											{
										?>
											<img src="<?=base_url()?>/uploads/<?=$rs->resim?>" height="40px ">
										<?php
											}
										?>
										</a>
										</td>										
										<?php 
										$a=$rs->durum;
										if($a=="Aktif")
										{
										?>
										<td><i class="btn btn-xs btn-success"><?=$a?></i></td>
										<?php
										}
										?>
										<?php 
										if($a=="Pasif")
										{
										?>
										<td><i class="btn btn-xs btn-danger"><?=$a?></i></td>
										<?php
										}
										?>
										
										
										<td><a href="<?=base_url()?>admin/kategoriler/view/<?=$rs->id?>"><button type="button" class="btn btn-sm btn-info">Göster</button></a>
										<a href="<?=base_url()?>admin/kategoriler/edit/<?=$rs->id?>"><button type="button" class="btn btn-sm btn-warning">Düzenle</button></a>
										<a href="<?=base_url()?>admin/kategoriler/deletee/<?=$rs->id?>" onClick="return confirm('Silmek İstediğinizden Emin misiniz?')"><button type="button" class="btn btn-sm btn-danger">Kategori Sil</button></a></td>
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
   
   
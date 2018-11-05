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
                                <li class="active"><a href="<?=base_url()?>admin/yorumlar">Yorumlar</a>
                                </li> 
								
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">  
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
                        <h2>Yorumlar Tablosu</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
										<th>Tarih</th>
                                        <th>Ürün Adı</th>
										<th>Durum</th>
                                        <th>Konu</th>
										<th>Yorum</th>
										<th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach ($yorumlar as $rs)
								{
								?>
                                    <tr>
                                        <td><?=$rs->tarih?></td>
										<td><?=$rs->padi?></td>
                                        <td><?=$rs->durum?></td>
                                        <td><?=$rs->konu?></td>
										<td><?=$rs->yorum?></td>
										<td>
										<?php
											if($rs->durum=="onaylandı")
											{
										?>
												<a href="<?=base_url()?>admin/yorumlar/deletee/<?=$rs->id?>" onClick="return confirm('Silmek İstediğinizden Emin misiniz?')"><button type="button" class="btn btn-sm btn-danger">Yorumu Sil</button></a></td>
										<?php	
											}
											else
											{
										?>
												<a href="<?=base_url()?>admin/yorumlar/guncelle/<?=$rs->id?>"><button type="button" class="btn btn-sm btn-success">Onayla</button></a>
												<a href="<?=base_url()?>admin/yorumlar/deletee/<?=$rs->id?>" onClick="return confirm('Silmek İstediğinizden Emin misiniz?')"><button type="button" class="btn btn-sm btn-danger">Yorumu Sil</button></a></td>
										<?php	
											}
												
										?>
										
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
   
   
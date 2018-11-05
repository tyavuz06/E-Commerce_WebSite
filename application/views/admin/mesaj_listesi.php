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
                                <li class="active"><a href="<?=base_url()?>admin/mesajlar">Mesajlar</a>
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
                        <h2>Mesajlar Tablosu</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>AdıSoyadı</th>
                                        <th>E-Mail</th>
										<th>Konu</th>
                                        <th>Mesaj</th>
										<th>Durum</th>
										<th>Tarih</th>
										<th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach ($messages as $rs)
								{
								?>
                                    <tr>
                                        <td><?=$rs->adsoyad?></td>
                                        <td><?=$rs->email?></td>
                                        <td><?=$rs->konu?></td>
										<td><?=$rs->mesaj?></td>
										<td><?=$rs->durum?></td>
										<td><?=$rs->tarih?></td>
										<td>
										<?php
											if($rs->durum == "yeni")
												$a=1;
											else 
												$a=0;
										?>
										<a href="<?=base_url()?>admin/mesajlar/view/<?=$rs->id?>/<?=$a?>"><button type="button" class="btn btn-sm btn-info">Göster</button></a>
										<a href="<?=base_url()?>admin/mesajlar/deletee/<?=$rs->id?>" onClick="return confirm('Silmek İstediğinizden Emin misiniz?')"><button type="button" class="btn btn-sm btn-danger">Mesajı Sil</button></a></td>
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
   
   
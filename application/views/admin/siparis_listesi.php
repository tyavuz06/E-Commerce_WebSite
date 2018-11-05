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
                                <li class="active"><a href="<?=base_url()?>admin/siparisler">Siparisler</a>
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
                    <div class="col-lg-8">
                        <h2>Siparisler Tablosu</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>AdıSoyadı</th>
										<th>Durum</th>
                                        <th>Tutar</th>

										<th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								foreach ($siparisler as $rs)
								{
								?>
                                    <tr>
                                        <td><?=$rs->adsoyad?></td>
                                        <td><?=$rs->durum?></td>
                                        <td><?=$rs->tutar?></td>
									
										<td>
									
										<a href="<?=base_url()?>admin/siparisler/view/<?=$rs->id?>"><button type="button" class="btn btn-sm btn-info">Göster</button></a>
										<a href="<?=base_url()?>admin/siparisler/deletee/<?=$rs->id?>" onClick="return confirm('Silmek İstediğinizden Emin misiniz?')"><button type="button" class="btn btn-sm btn-danger">Mesajı Sil</button></a></td>
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
   
   
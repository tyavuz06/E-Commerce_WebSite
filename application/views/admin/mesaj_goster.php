

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
								<li><a href="<?=base_url()?>admin/mesajlar">Mesaj Listesi</a>
                                </li>
                            </ul>
                        </div>
                    </div>	
                   </div>
                </div>  
				<div class="col-lg-8">
				<?php 
				if($this->session->flashdata("sonuc"))
				{
			?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>İşlem: </strong> <?=$this->session->flashdata("sonuc")?>
			</div>
			<?php
				}
			?>
                        <h2>Kullanıcı Bilgileri</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Adı Soyadı:</th>
										<td><?=$veri[0]->adsoyad?></td>
                                    </tr>
									<tr>  
                                        <th>E - Mail Adresi:</th> 
										<td><?=$veri[0]->email?></td>										
                                    </tr>
									<tr>                                       
                                        <th>Konu:</th>   
										<td><?=$veri[0]->konu?></td>
                                    </tr>
									<tr>                                       
                                        <th>Mesaj:</th>	
										<td><?=$veri[0]->mesaj?></td>
                                    </tr>
									<tr>                                       
										<th>Telefon:</th>
										<td><?=$veri[0]->telefon?></td>
                                    </tr>
									<tr>                                       
										<th>Tarih:</th>
										<td><?=$veri[0]->tarih?></td>
                                    </tr>
									<tr>                                       
										<th>Notunuz:</th>
										<td>
											<form role="form" action="<?=base_url()?>admin/mesajlar/guncelle/<?=$veri[0]->id?>" method="post">
												<textarea name="adminnotu"  rows="10" cols="50"><?=$veri[0]->adminnotu?></textarea><br>
												<button type="submit" class="btn btn-warning">Güncelle</button>
											</form>
										</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
		

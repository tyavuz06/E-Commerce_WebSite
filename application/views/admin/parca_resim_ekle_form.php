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
                                <li><a href="<?=base_url()?>admin/home">Anasaya</a>
                                </li>
                                <li><a href="<?=base_url()?>admin/parcalar/">Parçalar</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/parcalar/resimekle/<?=$veri[0]->id?>">Parça Resim Ekle</a>
                                </li> 
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>	
                    </div>
                </div> 
				<?php 
				if($this->session->flashdata("sonuc"))
				{
			?>
			<div class="alert alert-success">
				
				<strong>İşlem: </strong> <?=$this->session->flashdata("sonuc")?>
			</div>
			<?php
				}
			?>
				<b class="alert alert-info"><?=$veri[0]->adi?></b>
				<br>
				<br>
				<br>	
				<div class="row">
                    <div class="col-lg-6">
                        
							<?php
								if ($veri[0]->resim!=NULL)
								{
							?>
									<img height="100" src="<?=base_url()?>/uploads/<?=$veri[0]->resim?>">
							<?php
								}
							else
								echo form_open_multipart(base_url().'admin/parcalar/resimupload/'.$veri[0]->id);
							?>
							<input type="file" name="userfile" size="20"/>
							<input type="submit" value="upload"/>
						
                    </div>				
				</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
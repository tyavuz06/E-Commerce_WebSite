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
								<li class="active"><a href="<?=base_url()?>admin/slider/resimekle">Slider Resim Ekle</a>
                                </li> 
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>	
                    </div>
                </div>  
				<b class="alert alert-info"><?=$veri[0]->resimadi?></b>
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
							echo form_open_multipart(base_url().'admin/slider/resimupload/'.$veri[0]->id);
							?>
							<input type="file" name="userfile" size="20"/>
							<input type="submit" value="upload"/>
						
                    </div>				
				</div>
		</div>
 <?php
$this->load->view('admin/_footer');
?>
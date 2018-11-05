<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
	
    <link href="<?=base_url()?>/assets/admin/charizma/css/charisma-app.css" rel="stylesheet"> 
	
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
                                <li><a href="<?=base_url()?>admin/parcalar/">Kitaplar</a>
                                </li> 
								<li class="active"><a href="<?=base_url()?>admin/parcalar/resimgaleriekle/<?=$veri[0]->id?>">Kitap Galerisi Ekle</a>
                                </li> 
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>	
                    </div>
                </div>  
				<?php if ($this->session->flashdata("sonuc"))
						{
						?>
						<div class="alert alert-info"><?=$this->session->flashdata("sonuc")?></div>
						<?php
						}
						?>
				<br>	
				<div class="row">
                    <div class="col-lg-6">
							<?php
							echo form_open_multipart(base_url().'admin/parcalar/resimgaleriupload/'.$veri[0]->id);
							?>
							<input type="file" name="userfile" size="20" onchange="this.form.submit();"/>
							
                    </div>
					
			</div>
			<div class="row">
				<div class="box col-md-12">
					<div class="box-inner">
						<div class="box-header well" data-original-title="">
							<h2><i class="glyphicon glyphicon-picture"></i> Resim Galerisi</h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
				
                <div class="box-content">
                    <br>
                    <ul class="thumbnails gallery">
								<?php
									foreach($veriler as $rs)
									{
								?>	
                                <li id="<?=$veri[0]->adi?>" class="thumbnail">
                                <a style="background:url(<?=base_url()?>/uploads/<?=$rs->resim?>)"
                                   title="<?=$veri[0]->adi?>" href="<?=base_url()?>/uploads/<?=$rs->resim?>"><img
                                        class="grayscale" src="<?=base_url()?>/uploads/<?=$rs->resim?>"
                                        alt="<?=$veri[0]->adi?>"></a>
								
								<a align="center"  href="<?=base_url()?>admin/parcalar/resimsil/<?=$veri[0]->id?>/<?=$rs->id?>"><button type="button" class="btn btn-xs btn-danger">Sil</button></a>
									</li>
								<?php
									}
								?>
               </ul>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
            
		</div>	
	</div>

 <?php
$this->load->view('admin/_footer');
?>
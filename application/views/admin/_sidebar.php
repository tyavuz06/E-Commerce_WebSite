  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
							<br>
							<?php
						$home="";
						$ayarlar="";
						$kategoriler="";
						$kullanicilar="";
						$parcalar="";
						$slider="";
						$mesajlar="";
						$siparisler="";
						$yorumlar="";
						switch($menu)
						{
							case "home":
								$home="active";
							break;
							case "ayarlar":
								$ayarlar="active";
							break;
							case "kategoriler":
								$kategoriler="active";
							break;
							case "kullanicilar":
								$kullanicilar="active";
							break;
							case "parcalar":
								$parcalar="active";
							break;
							case "slider":
								$slider="active";
							break;
							case "mesajlar":
								$slider="active";
							break;
							case "siparisler":
								$siparisler="active";
							break;
							case "yorumlar":
								$yorumlar="active";
							break;
						}
					?>
                            <!-- /input-group -->
                        </li>
                        <li class="<?=$home?>">
                            <a href="<?=base_url()?>admin/home"><i class="fa fa-fw fa-home"></i> Anasayfa</a>
                        </li>
						<li class="<?=$kullanicilar?>">
                            <a href="<?=base_url()?>admin/kullanicilar"><i class="fa fa-fw fa-user"></i> Kullanıcılar</a>
                        </li>
						<li class="<?=$parcalar?>">
                            <a href="<?=base_url()?>admin/parcalar"><i class="fa fa-fw fa-suitcase"></i> Parçalar</a>
                        </li>
						<li class="<?=$slider?>">
                        <a href="<?=base_url()?>admin/slider"><i class="fa fa-fw fa-wrench"></i> Slider Yönetimi</a>
						</li>
						
                        <li>
                            <a href="<?=base_url()?>admin/kategoriler"><i class="fa fa-table fa-fw"></i> Kategoriler</a>
                        </li>
						<li class="<?=$siparisler?>">
                            <a href="<?=base_url()?>admin/siparisler"><i class="fa fa-edit fa-fw"></i> Siparişler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>admin/siparisler">Yeni Siparişler</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>admin/siparisler/onayli">Onaylı Siparişler</a>
                                </li>
								<li>
                                    <a href="<?=base_url()?>admin/siparisler/kargolandi">Kargolanan Siparişler</a>
                                </li>
								<li>
                                    <a href="<?=base_url()?>admin/siparisler/teslim">Teslim Edilen Siparişler</a>
                                </li>
								<li>
                                    <a href="<?=base_url()?>admin/siparisler/iptal">İptal Edilen Siparişler</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
						 <li class="<?=$mesajlar?>">
                            <a href="<?=base_url()?>admin/mesajlar"><i class="fa fa-fw fa-star"></i> Mesajlar</a>
                        </li>
						<li class="<?=$siparisler?>">
                            <a href="<?=base_url()?>admin/yorumlar"><i class="fa fa-edit fa-fw"></i> Yorumlar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>admin/yorumlar">Yeni Yorumlar</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>admin/yorumlar/onaylanan">Onaylı Yorumlar</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li class="<?=$ayarlar?>">
                        <a href="<?=base_url()?>admin/ayarlar"><i class="fa fa-fw fa-edit"></i> Ayarlar</a>
						</li>
                        
						
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

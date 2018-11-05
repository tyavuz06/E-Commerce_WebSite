<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$veriler[0]->aciklama?>">
	<meta name="keywords" content="<?=$veriler[0]->keywords?>">
    <title><?php if($sayfa !=NULL) echo $sayfa?>	<?=$veriler[0]->adi?></title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php
								if($this->session->uye_session['adsoyad'] == "")
								{
							?>
							<li><a href="<?=base_url()?>home/log_in"><i class="fa fa-user"></i> Giriş Yap / Kayıt Ol</a></li>
							<?php
								}
							?>
							<?php
								if($this->session->uye_session['adsoyad'] != "")
								{
							?>
									<li><a href="<?=base_url()?>home/sepet_goruntule"><i class="fa fa-user"></i> Sepet</a></li>
									<li><a href="<?=base_url()?>home/siparislerim"><i class="fa fa-user"></i>Siparişlerim</a></li>
									<li><a href="<?=base_url()?>home/yorumlarim"><i class="fa fa-fw fa-edit"></i>Yorumlarım</a></li>
								
							<?php
								}
							?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline" align="center">
                            <?php
								if($this->session->uye_session['adsoyad']!="")
								{
							?>
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Kullanıcı : </span><span class="value"><?=$this->session->uye_session['adsoyad']?> </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">   
										<li><a href="<?=base_url()?>home/edit"><i class="fa fa-fw fa-edit"></i>Bilgileri Düzenle</a></li>
									<li><a href="<?=base_url()?>sifre/sifre_degistir"><i class="fa fa-user"></i>Şifre Değiştir</a></li>				
                               
									<li><a href="<?=base_url()?>home/log_out"><i class="fa fa-fw fa-power-off"></i> Çıkış Yap</a></li> 
                                </ul>
                            </li>
							<?php
								}
							?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="<?=base_url()?>"><img src="<?=base_url()?>/assets/img/logo.png"><span>UNLU OEM</span></a></h1>
                    </div>
                </div>
                <?php
					if($this->session->uye_session['adsoyad'] != "")
					{
						$toplam=0;
						$i=0;
						if($sepet != false)
						{
							foreach($sepet as $rs)
							{
								$toplam += $rs->sfiyat*$rs->miktar;
								$i=$i+$rs->miktar;
							}
						}
				?> 
							<div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="<?=base_url()?>home/sepet_goruntule">Sepet - <span class="cart-amunt"><?=$toplam?>₺</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?=$i?></span></a>
                    </div>
                </div>
				<?php
						
						
					}
				?>
            </div>
        </div>
    </div> <!-- End site branding area -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
				<?php
					$anasayfa=null;
					$hakkimizda=null;
					$iletisim=null;
					$bizeyazin=null;
					$urundetay=null;
					$kategoriler=null;
					$shop=null;
					$sepet=null;
					if($menu=="anasayfa")
						$anasayfa="active";
					else if($menu=="hakkimizda")
						$hakkimizda="active";
					else if($menu=="iletisim")
						$iletisim="active";
					else if($menu=="bizeyazin")
						$bizeyazin="active";
					else if($menu=="urundetay")
						$urundetay="active";
					if($menu=="kategoriler")
						$kategoriler="active";
					if($menu=="shop")
						$shop="active";
					if($menu=="sepet")
						$sepet="active";
				?>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?=$anasayfa?>"><a href="<?=base_url()?>home">Home</a></li>
                        <li  class="<?=$kategoriler?>"><a href="<?=base_url()?>home/kategoriler">Kategorİler</a></li>
                        <?php
							if($urundetay=="active"){
								?>
						<li class="<?=$urundetay?>"><a href="">Ürün Detay</a></li>
						<?php	}?>
						<?php
							if($this->session->uye_session['adsoyad']!="")
							{
						?>
								<li class="<?=$sepet?>"><a href="<?=base_url()?>home/sepet_goruntule">Sepet</a></li>
								
						
						<?php
							}
						?>
						<li class="<?=$shop?>"><a href="<?=base_url()?>home/shop/1/">Ürünler</a></li>
                        <li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
						<li class="<?=$bizeyazin?>"><a href="<?=base_url()?>home/bizeyazin">Bize Yazın</a></li>
                        <li class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">İletİşİm</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
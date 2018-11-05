<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?=base_url()?>assets/admin/login/css/style.css">

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Admin Giriş Formu</h1><span>Coded  by <a href='http://faecbook.com/yavuz.unlu.3406'>TURGUT YAVUZ ÜNLÜ</a></span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    
  </div>
  <div class="form" >
    <h2 align="center">Giriş Bilgileri</h2>
    <form action="<?=base_url()?>admin/login/log_in" method="post"	>
      <input type="text" placeholder="Kullanıcı Adı" name="username"/>
      <input type="password" placeholder="Şifre" name="password"/>
      <button>Giriş Yap</button>
    </form>
	<br>
	  <?php 
				if($this->session->flashdata("login_hata"))
				{
			?>
			<div align="center">
				
				<h2><?=$this->session->flashdata("login_hata")?></h2>
			</div>
			<?php
				}
			?>
  </div>

</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script  src="<?=base_url()?>assets/admin/login/js/index.js"></script>

</body>
</html>

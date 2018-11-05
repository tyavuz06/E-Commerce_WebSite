<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Üye Girişi / Kayıt Formu</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?=base_url()?>assets/login/css/style.css">

  
</head>

<body>

  <div class="form">
	<?php
		if($this->session->flashdata("login_hata") or $this->session->flashdata("sonuc"))
		{
	?>
      <h1><?=$this->session->flashdata("login_hata")?>
		<?=$this->session->flashdata("sonuc")?></h1>
	<?php
		}
	?>
      <ul class="tab-group">
	   <li class="tab active"><a href="#login">Giriş Yap</a></li>
        <li class="tab"><a href="#signup">Kayıt Ol</a></li>
       
      </ul>
      
      <div class="tab-content">
	        
        <div id="login">   
          <h1>Üye Girişi</h1>

          <form method="POST" action="<?=base_url()?>home/login">
          
            <div class="field-wrap">
            <label>
              Email Adresi<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Şifre<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="<?=base_url()?>sifre">Şifremi Unuttum</a></p>
          
         <div class="top-row">
            <div class="field-wrap">
               <button type="submit" class="button button-block"/>Giriş Yap</button>
            </div>
        
            <div class="field-wrap">
              <a href="<?=base_url()?>home"><li align="center" class="button button-block"/>Anasayfa</li></a>
            </div>
          </div>
			
			
          </form>

        </div>
	  
        <div id="signup">   
          <h1>Kayıt Formu</h1>
          
          <form action="<?=base_url()?>kayitol/sign_up" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Ad<span class="req">*</span>
              </label>
              <input type="text" name="ad" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Soyad<span class="req">*</span>
              </label>
              <input type="text" name="soyad" required autocomplete="off"/>
            </div>
          </div>
			
			<div class="field-wrap">
            <label>
              Email Adresi<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Telefon<span class="req">*</span>
            </label>
            <input type="text" name="telefon" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Şifre<span class="req">*</span>
            </label>
            <input type="password" name="sifre" required autocomplete="off"/>
          </div>
          <div class="top-row">
            <div class="field-wrap">
               <button type="submit" class="button button-block"/>Kayıt Ol</button>
            </div>
        
            <div class="field-wrap">
              <a href="<?=base_url()?>home"><li align="center" class="button button-block"/>Anasayfa</li></a>
            </div>
          </div>
			
          
          
          </form>

        </div>
  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?=base_url()?>assets/login/js/index.js"></script>

</body>
</html>

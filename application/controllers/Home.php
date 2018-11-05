<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('DatabaseModel');
		
	}
	
	public function index()
	{
	
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="";
		
		$data["menu"]="anasayfa";
		
		$query=$this->db->get("parcalar");
		$data["yeniler"]=$query->result();
		
		$query=$this->db->get("parcalar");
		$data["encok"]=$query->result();
	
		$sql=$this->db->get("slider");
		$data["slider"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();		
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_promo');
		$this->load->view('_main_content');
		$this->load->view('_footer');
	}
	
	public function edit()
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
			$id=$this->session->uye_session['id'];
			$sql=$this->db->get("ayarlar");
			$data["veriler"]=$sql->result();
			
			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sql->result();
			$data["sayfa"]="Bilgi Düzenle || ";
			$data["menu"]="";
			$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
			$data["veri"]=$sorgu->result();
			
			$query=$this->db->get("parcalar");
			$data["yeniler"]=$query->result();
			
			$query=$this->db->get("parcalar");
			$data["encok"]=$query->result();
		
			$sql=$this->db->get("slider");
			$data["slider"]=$sql->result();
			
			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
			$data["anakategori"]=$sql->result();		
		
			$this->load->view('_header',$data);
			$this->load->view('kullanici_duzenle');
			$this->load->view('_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function kedit($id)
	{
		
		if($this->session->uye_session['adsoyad']!="")
		{
			$data=array(
					'adsoyad' => $this->input->post('adsoyad'),
					'email' => $this->input->post('email'),
					'telefon' => $this->input->post('telefon'),
					'sehir' => $this->input->post('sehir'),
					'adres' => $this->input->post('adres'),
				);
				$this->DatabaseModel->update_data("uyeler",$data,$id);
				$this->session->set_flashdata("sonuc","Düzenleme İşlemei Başarılı!");
				redirect(base_url());
		}
		else
			$this->load->view('sayfa_yok');	
	}
	
	public function kategoriler()
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();

		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="Kategoriler || ";
		
		$data["menu"]="kategoriler";
		
		$query=$this->db->get("parcalar");
		$data["parcalarr"]=$query->result();
		$data["parcalar"]=NULL;
		
		$query=$this->db->get("parcalar");
		$data["encok"]=$query->result();
	
		$sql=$this->db->get("slider");
		$data["slider"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();		
		
		$this->load->view('_header',$data);
		$this->load->view('kategoriler');
		$this->load->view('_footer');
	}

	
	public function categories($id,$id2)
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		
		$data["sayfa"]="Kategoriler || ";
		$data["menu"]="kategoriler";
		if($id==0)
		{
			$sql=$this->db->query("SELECT parcalar.id as pid,parcalar.adi as padi, parcalar.resim as presim,parcalar.afiyat as pafiyat,parcalar.sfiyat as psfiyat, kategoriler.* FROM kategoriler LEFT JOIN parcalar ON kategoriler.id=parcalar.kategori_id WHERE kategoriler.ust_id=$id2");
			$data["parcalar"]=$sql->result();
			$data["parcalarr"]=NULL;
		}
		else
		{
			$sql=$this->db->query("SELECT * FROM parcalar WHERE kategori_id = $id2");
			$data["parcalarr"]=$sql->result();
			$data["parcalar"]=NULL;
		}
		
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();	
		
		$this->load->view('_header',$data);
		$this->load->view('kategoriler');
		$this->load->view('_footer');
	}
	
	public function shop($numara)
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		$limit=8*$numara;
		$query=$this->db->query("SELECT * FROM parcalar ORDER BY otarih DESC");
		$sorgu=$query->num_rows();

		if($sorgu>9)
		{
			$sayac3=$sorgu%10;
			$sayac2=$sorgu/10;
		}
		$data["sayaclar"]=array(
			'sayac' => $numara	
		);
		
		$data["sorgular"]=array(
			'sayac2' => "$sayac2",
			'sayac3' => "$sayac3"			
		);

		$query=$this->db->query("SELECT * FROM parcalar ORDER BY otarih DESC");
		$data["yeniurunler"]=$query->result();

		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="Ürünler || ";
		
		$data["menu"]="shop";
		$this->load->view('_header',$data);
		$this->load->view('shop');
		$this->load->view('_footer');
	}
	
	public function urun_detay($id)
	{	
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		$sql=$this->db->query("SELECT * FROM uyeler");
		$data["uyeler"]=$sql->result();
		$sorgu=$this->db->query("SELECT parcalar.adi as padi, urun_yorum.* FROM urun_yorum  LEFT JOIN parcalar ON urun_yorum.urun_id=parcalar.id WHERE urun_yorum.durum='onaylandı'and urun_id=$id ORDER BY tarih DESC");
		$data["yorumlar"]=$sorgu->result();
		
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();

		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="Ürün Detay || ";
		
		$data["menu"]="";
		
		$query=$this->db->get("parcalar");
		$data["parcalar"]=$query->result();
		
		$query=$this->db->get("parcalar");
		$data["encok"]=$query->result();
	
		$sql=$this->db->get("slider");
		$data["slider"]=$sql->result();
		
		$uye_id=$this->session->uye_session['id'];
		
		
		$sql=$this->db->query("SELECT * FROM iller ORDER BY il_adi");
		$data["iller"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["menu"]="urundetay";
		$result=$this->DatabaseModel->get_parca($id);
		if($result)
		{	
			$data["veri"]=$result;
			$sql=$this->db->query("SELECT * FROM parcalar WHERE id=$id");
			$data["veriler"]=$sql->result();
			$sorgu=$this->db->query("SELECT * FROM parcalar_resim WHERE parca_id=$id");
			$data["resimler"]=$sorgu->result();
			
			$this->load->view('_header',$data);
			$this->load->view('urun_detay');
			$this->load->view('_footer');
		}
		else
			$this->load->view('sayfa_yok');
			
	}
	
	public function bizeyazin()
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["menu"]="bizeyazin";
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		$data["sayfa"]="Bize Yazın || ";
		
		$this->load->view('_header',$data);
		$this->load->view('bize_yazin');
		$this->load->view('_footer');
	}
	
	public function bize_yazin_ekle()
	{
		$data=array(
			'adsoyad' => $this->input->post('adsoyad'),
			'email' => $this->input->post('email'),
			'telefon' => $this->input->post('telefon'),
			'konu' => $this->input->post('konu'),
			'mesaj' => $this->input->post('mesaj'),
		);
		$this->DatabaseModel->insert_data("messages",$data);
		
		$adsoyad=$this->input->post('adsoyad');
		$email=$this->input->post('email');
		
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		
		$this->load->library('email');
	//	$config['protocol'] = "smtp";
		$config['smtp_host'] = $data["veri"][0]->smtpserver; 
		$config['smtp_port'] = $data["veri"][0]->smtpport;
		$config['smtp_user'] = $data["veri"][0]->smtpemail;
		$config['smtp_pass'] = $data["veri"][0]->password;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		
		$mesaj="Degerli : ".$adsoyad."<br> Gondermis oldugunuz mesaj alinmistir.<br>En kisa zaman geri donus yapilacaktir.<br> Tesekkur ederiz.";
		$mesaj.="<br>==============================<br>";
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->telefon."<br>";
		$mesaj.=$data["veri"][0]->fax."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="==============================<br>Gondermis oldugunuz mesaj asagidaki gibidir.<br>";
		$mesaj.=$this->input->post('mesaj');
		
		$this->email->initialize($config);
		$this->email->from($data["veri"][0]->smtpemail);
		$this->email->to($email);
		$this->email->subject('UNLU OEM SATIS LTD STI');
		$this->email->message($mesaj);
		
		//SEND Email
		if($this->email->send())
			$this->session->set_flashdata("email_sent","Email basari ile gonderildi.");
		else
		{
			$this->session->set_flashdata("email_sent","Email gonderme islemi basarisiz.");
			show_error($this->email->print_debugger());
		}
		
		$this->session->set_flashdata("sonuc","Mesajiniz basari ile gonderilmistir. En kisa surede sizinle irrtibata gecilecektir.");
		redirect(base_url()."home/bizeyazin");
	}


	
	public function hakkimizda()
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["menu"]="hakkimizda";
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		$data["sayfa"]="Hakkımızda || ";
		$this->load->view('_header',$data);
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	
	
	public function iletisim()
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		}
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		
		$data["menu"]="iletisim";
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		$data["sayfa"]="İletişim || ";
		
		$this->load->view('_header',$data);
		$this->load->view('iletisim');
		$this->load->view('_footer');
	}
	
	public function siparislerim()
	{
		if($this->session->uye_session['id']!="")
		{
			$sql=$this->db->get("ayarlar");
			$data["veriler"]=$sql->result();

			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sql->result();
			$data["sayfa"]="Siparişlerim || ";
			
			$data["menu"]="";
			
			$query=$this->db->get("parcalar");
			$data["parcalar"]=$query->result();
			
			$query=$this->db->get("parcalar");
			$data["encok"]=$query->result();
		
			$sql=$this->db->get("slider");
			$data["slider"]=$sql->result();
			
			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
			$data["anakategori"]=$sql->result();
			
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
			
			$uye_id=$this->session->uye_session['id'];
			$query=$this->db->query("SELECT * FROM siparisler WHERE musteri_id=$uye_id ORDER BY tarih DESC");
			$data["siparisler"]=$query->result();
			
			$this->load->view('_header',$data);
			$this->load->view('siparisler');
			$this->load->view('_footer');
		}
		else
			redirect(base_url()."home/login");
	}
	
	public function yorumlarim()
	{
		if($this->session->uye_session['id']!="")
		{
			$sql=$this->db->get("ayarlar");
			$data["veriler"]=$sql->result();

			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sql->result();
			$data["sayfa"]="Siparişlerim || ";
			
			$data["menu"]="";
			
			$query=$this->db->get("parcalar");
			$data["parcalar"]=$query->result();
			
			$query=$this->db->get("parcalar");
			$data["encok"]=$query->result();
		
			$sql=$this->db->get("slider");
			$data["slider"]=$sql->result();
			
			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
			$data["anakategori"]=$sql->result();
			
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
			
			$uye_id=$this->session->uye_session['id'];
			//$query=$this->db->query("SELECT * FROM urun_yorum WHERE uye_id=$uye_id");
			//$data["yorumlar"]=$query->result();
			$query=$this->db->query("SELECT parcalar.adi as padi, urun_yorum.* FROM urun_yorum  LEFT JOIN parcalar ON urun_yorum.urun_id=parcalar.id WHERE urun_yorum.uye_id=$uye_id");
			$data["yorumlar"]=$query->result();
	
			$this->load->view('_header',$data);
			$this->load->view('yorumlar');
			$this->load->view('_footer');
		}
		else
			redirect(base_url()."home/login");
	}
	
	public function yorumsil($id)
	{
		if($this->session->uye_session['id']!="")
		{
			$this->db->query("DELETE FROM urun_yorum WHERE id=$id");
			redirect(base_url()."home/yorumlarim");
		}
		else
			redirect(base_url()."home/login");
	}
	
	
	public function siparis_detay($id)
	{
		if($this->session->uye_session['id']!="")
		{
			$sql=$this->db->get("ayarlar");
			$data["veriler"]=$sql->result();
			
			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$sql->result();
			$data["sayfa"]="Sipariş Detay || ";
			
			$data["menu"]="";
			
			$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
			$data["anakategori"]=$sql->result();
			
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
			
			$uye_id=$this->session->uye_session['id'];
			$query=$this->db->query("SELECT * FROM siparisler WHERE id=$id");
			$data["siparis"]=$query->result();
			
			$query=$this->db->query("SELECT * FROM siparisler_urunler WHERE siparis_id=$id");
			$data["urunler"]=$query->result();
			
			$this->load->view('_header',$data);
			$this->load->view('siparis_detay');
			$this->load->view('_footer');
			
		}
		else
			redirect(base_url()."home/login");
	}
	
	public function siparis_tamamla()
	{
		$uye_id=$this->session->uye_session['id'];
		//Banka kredi kartı ödeme tutarı gönderilip onay alınması.
		$data=array(
			'adsoyad' => $this->input->post('adsoyad'),
			'adres' => $this->input->post('adres'),
			'telefon' => $this->input->post('telefon'),
			'sehir' => $this->input->post('sehir'),
			'tutar' => $this->input->post('total'),
			'musteri_id' => $uye_id,
		);
		
		$siparis_id=$this->DatabaseModel->insert_data("siparisler",$data);
		if($siparis_id)
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			//$sepet=$result;
			foreach($result as $rs)
			{
				$tutar=$rs->sfiyat*$rs->miktar;
				$data=array(
					'siparis_id' => $siparis_id,
					'musteri_id' => $uye_id,
					'urun_id' => $rs->id,
					'adi' => $rs->adi,
					'fiyat' => $rs->sfiyat,
					'miktar' => $rs->miktar,
					'tutar' => $tutar
				);
				$this->DatabaseModel->insert_data("siparisler_urunler",$data);
			}
			
			
		}
		$this->db->query("DELETE FROM sepet WHERE kullanici_id=$uye_id");
		redirect(base_url()."home");
	}
	
	public function yorumyap($id)
	{
		if($this->session->uye_session['id']!="")
		{
		
			$uye_id=$this->session->uye_session['id'];
			$data=array(
				'urun_id' => $id,
				'uye_id' => $uye_id,
				'konu' => $this->input->post('baslik'),
				'yorum' => $this->input->post('yorum')
			);
			$this->DatabaseModel->insert_data("urun_yorum",$data);
			redirect(base_url()."home/urun_detay/$id");
		}
		else
			redirect(base_url()."home/login");
	}	
	
	public function urunsil($id,$miktar)
	{
		$this->db->query("DELETE FROM sepet WHERE urun_id = $id and miktar=$miktar LIMIT 1");
		redirect(base_url()."home/sepet_goruntule");
	}
	
	public function sepete_ekle($id)
	{
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
			$id2=$this->session->uye_session['id'];
			if($this->input->post('miktar') == NULL)
			{
				$miktar="1";
			}
			else
				$miktar=$this->input->post('miktar');
			$data=array(
				'miktar' => $miktar,
				'kullanici_id' => $id2,
				'urun_id' => $id
			);
			$this->DatabaseModel->insert_data("sepet",$data);
			redirect(base_url()."home/kategoriler");
		}
		else
			redirect(base_url()."home/login");
	}
	

	
	public function sepet_goruntule()
	{
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();

		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="Sepet || ";
		
		$data["menu"]="sepet";
		
		$query=$this->db->get("parcalar");
		$data["parcalar"]=$query->result();
		
		$query=$this->db->get("parcalar");
		$data["encok"]=$query->result();
	
		$sql=$this->db->get("slider");
		$data["slider"]=$sql->result();
		
		$uye_id=$this->session->uye_session['id'];
		$sql=$this->db->query("SELECT * FROM uyeler WHERE id=$uye_id LIMIT 1");
		$data["uye"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM iller ORDER BY il_adi");
		$data["iller"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();
		
		if($this->session->uye_session['adsoyad']!="")
		{
			$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
			$data["sepet"]=$result;
		
			$data["menu"]="sepet";
			$sql=$this->db->get("ayarlar");
			$data["veri"]=$sql->result();
			$this->load->view('_header',$data);		
			$this->load->view('sepet');
			$this->load->view('_footer');
		}
		else
			redirect(base_url()."home/login");
	}
	public function log_in()
	{
		$data["sayfa"]="Üye Girişi || ";
		$this->load->view('login');
	}
	
	public function login()
	{
		$username=$this->input->post('username');
		$sifre=$this->input->post('password');
		
		$username=$this->security->xss_clean($username);
		$sifre=$this->security->xss_clean($sifre);
		
		$result = $this->DatabaseModel->login("uyeler",$username,$sifre);
		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor		
                 $sess_array = array(
				 'id' => $result[0]->id,
				 'yetki' => $result[0]->yetki,
				 'email' => $result[0]->email,
				 'adsoyad' => $result[0]->adsoyad,
				 'resim' => $result[0]->resim
				 );
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıoyor
                 $this->session->set_userdata('uye_session',$sess_array);
				 redirect(base_url()."home");
		}
		else
		{
			$this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre");            		
			$this->load->view('login');
		}
	}
	public function log_out()
	{
		$this->session->unset_userdata('uye_session');
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}

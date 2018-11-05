<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayitol extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->model('DatabaseModel');
		//$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('kayit_formu');
	}
	
	public function sign_up()
	{
		
		$ad=$this->input->post('ad');
		$soyad=$this->input->post('soyad');
		$adsoyad=$ad." ".$soyad;
		$email=$this->input->post('email');
		$result=$this->DatabaseModel->mail_bul("uyeler",$email);
		if($result)
		{
			$kod = md5(rand(0,999));
			$data=array(
				'adsoyad' => $adsoyad,
				'email' => $this->input->post('email'),
				'sifre' => $this->input->post('sifre'),
				'telefon' => $this->input->post('telefon'),
				'yetki' => "üye",
				'durum' => "beklemede",
				'kod'   =>	$kod
			);
			$this->DatabaseModel->insert_data("uyeler",$data);
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		$this->load->library('email');
		//$config['protocol'] = "smtp";
		$config['smtp_host'] = $data["veri"][0]->smtpserver; 
		$config['smtp_port'] = $data["veri"][0]->smtpport;
		$config['smtp_user'] = $data["veri"][0]->smtpemail;
		$config['smtp_pass'] = $data["veri"][0]->password;
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		//$email2=md5($email);
		$parcala=explode("@",$email);
		$mail1=$parcala[0];
		$mail2=$parcala[1];
		$parcala=explode(".com",$mail2);
		$mail3=$parcala[0];
		$mail4=$parcala[1];
		$mesaj="Degerli : ".$adsoyad."<br> Kayıt bilgileriniz alınmıştır.<br>Kayıt işlemini tamamlayabilmemiz için aşağıda yolladığımız aktivasyon linkine lütfen tıklayınız.<br> Tesekkur ederiz.";
		$mesaj.="<br>==============================<br>";
		$mesaj.=base_url()."kayitol/aktivasyon/".$mail1."/".$mail3."/".$kod;
		$mesaj.="<br>==============================<br>";
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->telefon."<br>";
		$mesaj.=$data["veri"][0]->fax."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		
		$this->email->initialize($config);
		$this->email->from($data["veri"][0]->smtpemail);
		$this->email->to($email);
		$this->email->subject('UNLU OEM SATIS LTD STI Kayıt Aktivasyon');
		$this->email->message($mesaj);
		
		//SEND Email
		if($this->email->send())
			$this->session->set_flashdata("email_sent","Email basari ile gonderildi.");
		else
		{
			$this->session->set_flashdata("email_sent","Email gonderme islemi basarisiz.");
			show_error($this->email->print_debugger());
		}
		
		$this->session->set_flashdata("sonuc","Kayıt İşlemi Başarılı. Mail kutunuzu kontrol ediniz!");
		redirect(base_url().'home/log_in');
		}
		else
		{	
			$this->session->set_flashdata("sonuc","Mail Adresi Zaten Kayıtlı Giriş Yapınız.");
			redirect(base_url().'home/log_in');
		}
			
	}
	
	public function aktivasyon($mail1,$mail2,$kod)
	{
		$result = $this->DatabaseModel->get_aktivasyon($mail1,$mail2,$kod);		
		if($result)
		{
			$id=$result[0]->id;
			$islem=array(
						'durum' => "aktif"
					);
			$this->DatabaseModel->update_data("uyeler",$islem,$id);
			$this->session->set_flashdata("sonuc","Aktivasyon tamamlandı."); 
			redirect(base_url()."home/log_in");
		}
		else
		{
			$this->session->set_flashdata("login_hata","sonuc bulunamadı.");            		
			$this->load->view('login_form');
		}
	}	
}
?>
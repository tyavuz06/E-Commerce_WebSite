<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sifre extends CI_Controller{
	
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
	    if($this->session->uye_session['id']==NULL)
	    {
	      $id=1;
	    }
    	$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["veri"]=$sorgu->result();
    	$result=$this->DatabaseModel->get_sepet($id);
		$data["sepet"]=$result;
		$id=$this->session->uye_session['id'];
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id='1'");
		$data["uye_bilgi"]=$sorgu->result();
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="Şifre Unuttum || ";
		$data["menu"]="";

		
		$query=$this->db->get("parcalar");
		$data["yeniler"]=$query->result();
		
		$query=$this->db->get("parcalar");
		$data["encok"]=$query->result();
	
		$sql=$this->db->get("slider");
		$data["slider"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY ust_id");
		$data["anakategori"]=$sql->result();	

		$this->load->view('_header',$data);		
		$this->load->view('sifre_unuttum');
		$this->load->view('_footer');
	
	}
	
	public function sifre_unuttum()
	{
		/*$this->form_validation->set_rules('email','email','trim|required|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|xss_clean');
		
		if($this->form_validation->run()==FALSE)
		{
			$this->session->set_flashdata("login_hata","Giris verileri uygun değil");
			$this->load->view('admin/login_form');
		}
		else
		{*/
		$email=$this->input->post('email');
		$adsoyad=$this->input->post('adsoyad');
		
		$result = $this->DatabaseModel->sifre_unuttum($email,$adsoyad);
		if($result) 
		{
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

			$mesaj="Degerli : ".$adsoyad."<br> Talebiniz alınmıştır.<br>Şifreniz aşağıda belirtilmiştir.<br> Tesekkur ederiz.";
			$mesaj.="<br>==============================<br>";
			$mesaj.="Kullanıcı Adı: <b>".$result[0]->email."</b><br>Şifresi: <b>".$result[0]->sifre."</b> ";
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
			$this->email->subject('UNLU OEM SATIS LTD STI Şifre İsteme');
			$this->email->message($mesaj);
			
			//SEND Email
			if($this->email->send())
				$this->session->set_flashdata("email_sent","Email basari ile gonderildi.");
			else
			{
				$this->session->set_flashdata("email_sent","Email gonderme islemi basarisiz.");
				show_error($this->email->print_debugger());
			}
			
				$this->session->set_flashdata("sonuc","Şifre İsteme İşlemi Başarılı. Mail kutunuzu kontrol ediniz!");
				redirect(base_url()."home/log_in");
		}
		else
		{
			$this->session->set_flashdata("login_hata","Yanlış bilgi girdiniz.");            				
			redirect(base_url()."home/log_in");
		}		
	}
	public function sifre_degistir()
	{
		$result=$this->DatabaseModel->get_sepet($this->session->uye_session['id']);
		$data["sepet"]=$result;
		$id=$this->session->uye_session['id'];
		$sql=$this->db->get("ayarlar");
		$data["veriler"]=$sql->result();
		
		$sql=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$sql->result();
		$data["sayfa"]="Şifre Değiştir || ";
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
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["uye_bilgi"]=$sorgu->result();
		$this->load->view('_header',$data);		
		$this->load->view('sifre_degistirme_formu',$data);
		$this->load->view('_footer',$data);
	}
	
	public function e_sifre_degistir($id,$sifre,$sifre2,$sifre3)
	{
		$p1 = $this->input->post('sifre');
		$p2 = $this->input->post('sifre2');
	
		if($p1==$p2)
		{
			if($p1 == $sifre2 || $p1 == $sifre || $p1 == $sifre3)
			{
				$this->session->set_flashdata("sonuc","Şifreniz son kullandığınız 3 şifre ile aynı olamaz!");
				redirect(base_url()."sifre/sifre_degistir/$id");
			}
			else
			{
				$data=array(
					'sifre' => $p1,
					'sifre2' => $sifre,
					'sifre3' => $sifre2
				);
				$this->DatabaseModel->update_data("uyeler",$data,$id);
				$this->session->set_flashdata("sonuc","Şifre Değiştirme İşlemei Başarılı!");
				redirect(base_url()."sifre/sifre_degistir/$id");
			}
		}
		else
		{
			$this->session->set_flashdata("sonuc","Şifre Değiştirme İşlemi Başarısız!");
			redirect(base_url()."sifre/sifre_degistir/$id");
		}
	}
	
}
?>
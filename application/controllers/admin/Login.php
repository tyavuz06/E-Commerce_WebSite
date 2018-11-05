<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
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
		$this->load->view('admin/login');
	}
	
	public function log_in()
	{
		$username=$this->input->post('username');
		$sifre=$this->input->post('password');
		
		$username=$this->security->xss_clean($username);
		$sifre=$this->security->xss_clean($sifre);
		
		$result = $this->DatabaseModel->login("admin",$username,$sifre);
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
                 $this->session->set_userdata('admin_session',$sess_array);
				 redirect(base_url()."admin/home");
		}
		else
		{
			$this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre");            		
			$this->load->view('admin/login');
		}
	}
		
	public function log_out()
	{
		$this->session->unset_userdata('admin_session');
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}
	
}
?>
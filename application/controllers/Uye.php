<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->model('AdminModel');
		//$this->load->library('form_validation');
		if(!$this->session->userdata('uye_session'))
		{
				redirect(base_url().'home/log_in');
		}
	}
	public function index()
	{
		$this->load->view('login');
	}
	
	public function log_in()
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
		$username=$this->input->post('username',TRUE);
		$sifre=$this->input->post('password',TRUE);
		
		$result = $this->AdminModel->login($username,$sifre);
		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor		
                 $sess_array = array(
				 'id' => $result[0]->id,
				 'yetki' => $result[0]->yetki,
				 'email' => $result[0]>email,
				 'adsoyad' => $result[0]->adsoyad
				 );
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıoyor
                 $this->session->set_userdata('logged_in', $sess_array);
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
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}
	
}
?>
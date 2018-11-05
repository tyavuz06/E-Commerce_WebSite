<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('DatabaseModel');
		if(!$this->session->userdata('admin_session'))
		{
			redirect(base_url().'admin/login');
		}
	}
	
	public function index()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
		redirect('admin/ayarlar/edit/1');
		}
		else
			redirect(base_url()."home");
	}
	
	public function edit($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=$id");
		$data["veri"]=$sorgu->result();
		$data["menu"]="ayarlar";
		$this->load->view('admin/ayar_duzenle',$data);	
		}
		else
			$this->load->view('sayfa_yok');		
	}
	
	public function kedit($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
		$data=array(
				'adi' => $this->input->post('adi'),
				'keywords' => $this->input->post('keywords'),
				'aciklama' => $this->input->post('aciklama'),
				'name' => $this->input->post('name'),
				'smtpserver' => $this->input->post('smtpserver'),
				'smtpport' => $this->input->post('smtpport'),
				'smtpemail' => $this->input->post('smtpemail'),
				'password' => $this->input->post('password'),
				'adres' => $this->input->post('adres'),
				'sehir' => $this->input->post('sehir'),
				'telefon' => $this->input->post('telefon'),
				'email' => $this->input->post('email'),
				'hakkimizda' => $this->input->post('hakkimizda'),
				'iletisim' => $this->input->post('iletisim'),
				'facebook' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'instagram' => $this->input->post('instagram'),
				'pinterest' => $this->input->post('pinterest'),
				'fax' => $this->input->post('fax'),
				'linkedin' => $this->input->post('linkedin'),
				'sss' => $this->input->post('sss')
			);
			$this->DatabaseModel->update_data("ayarlar",$data,$id);
			$this->session->set_flashdata("sonuc","Düzenleme İşlemei Başarılı!");
			redirect(base_url().'admin/home/');
		}
		else
			$this->load->view('sayfa_yok');
			
	}
	
	
}
?>
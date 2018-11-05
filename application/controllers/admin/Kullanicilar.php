<?php
defined('BASEPATH') OR exit('No direct scrpit access allowed');

class Kullanicilar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->model('DatabaseModel');
		if(!$this->session->userdata('admin_session'))
		{
				redirect(base_url().'admin/login');
		}
	}
	
	public function index()
	{
		$query=$this->db->get("uyeler");
		$data["veri"]=$query->result();
		$data["menu"]="kullanicilar";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanicilar_listesi',$data);
		$this->load->view('admin/_footer');
	}
	
	public function user_add()
	{
		$data["menu"]="kullanicilar";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanicilar_ekle');
		$this->load->view('admin/_footer');
	}
	public function user_add2()
	{
		$data=array(
			'adsoyad' => $this->input->post('adsoyad'),
			'email' => $this->input->post('email'),
			'yetki' => $this->input->post('yetki'),
			'durum' => $this->input->post('durum'),
			'sehir' => $this->input->post('sehir'),
			'telefon' => $this->input->post('telefon'),
		);
		$this->DatabaseModel->insert_data("uyeler",$data);
		$this->session->set_flashdata("sonuc","Kayıt işlemi başarı ile sonuçlandı.");
		redirect(base_url()."admin/kullanicilar");
	}
	public function deletee($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id=$id");
		$this->session->set_flashdata("sonuc","Silme işlemi başarı ile sonuçlandı.");
		redirect(base_url()."admin/kullanicilar");
	}
	
	public function edit($id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["veri"]=$query->result();
		$data["menu"]="kullanicilar";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanicilar_duzenle',$data);
		$this->load->view('admin/_footer');
	}
	
	public function edit2($id)
	{
		$data=array(
			'adsoyad' => $this->input->post('adsoyad'),
			'email' => $this->input->post('email'),
			'yetki' => $this->input->post('yetki'),
			'durum' => $this->input->post('durum'),
			'sehir' => $this->input->post('sehir'),
			'telefon' => $this->input->post('telefon'),
			
		);
		$this->DatabaseModel->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme işlemi başarı ile sonuçlandı.");
		redirect(base_url()."admin/kullanicilar");
	}
	
	public function view($id)
	{
		$query=$this->db->query("SELECT * FROM admin WHERE id=$id");
		$data["veri"]=$query->result();
		$data["menu"]="kullanicilar";
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanicilar_goster',$data);
		$this->load->view('admin/_footer');
	}
}
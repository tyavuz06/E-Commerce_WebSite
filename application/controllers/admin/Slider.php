<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller{
	
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
			$data["menu"]="slider";
			$sql=$this->db->get("slider");
			$data["veri"]=$sql->result();
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/slider_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function edit($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$sorgu=$this->db->query("SELECT * FROM slider WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$data["menu"]="slider";
			$this->load->view('admin/slider_duzenle',$data);
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function kedit($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data=array(
					'resimadi'=> $this->input->post('resimadi'),
					'resimadi' => $this->input->post('resimadi'),
					'haber_icerik' => $this->input->post('icerik'),
				);
				$this->DatabaseModel->update_data("slider",$data,$id);
				$this->session->set_flashdata("sonuc","Düzenleme İşlemei Başarılı!");
				redirect(base_url().'admin/slider/');
		}
		else
			$this->load->view('sayfa_yok');	
	}
	
	public function deletee($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$this->db->query("DELETE FROM slider WHERE id=$id");
			$this->session->set_flashdata("sonuc","Silme İşlemei Başarılı!");
			redirect(base_url().'admin/slider/');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function view($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data["menu"]="slider";
			$sorgu=$this->db->query("SELECT * FROM slider WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('admin/slider_goster',$data);
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function ekle()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data["menu"]="slider";
			$this->load->view('admin/slider_ekle',$data);
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function kekle()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data=array(
				'resimadi' => $this->input->post('resimadi'),
				'resim' => $this->input->post('resim'),
				'haber_icerik' => $this->input->post('haber_icerik'),
			);
			$this->DatabaseModel->insert_data("slider",$data);
			$this->session->set_flashdata("sonuc","Ekleme İşlemei Başarılı!");
			redirect(base_url().'admin/slider/');
		}
		else
			$this->load->view('sayfa_yok');
			
	}
	public function resimekle($id)
	{	
		if($this->session->admin_session['yetki']=="admin")
		{
			$sorgu=$this->db->query("SELECT * FROM slider WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$data["menu"]="slider";
			$this->load->view('admin/slider_resim_ekle_form',$data);		
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function resimupload($id)
	{		
		if($this->session->admin_session['yetki']=="admin")
		{
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']=400;
			$config['max_width']=1280;
			$config['max_height']=1024;
			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload('userfile'))
			{
				$error=array('error' => $this->upload->display_errors());
				$this->session->set_flashdata("sonuc","Upload Hatasi:");
				redirect(base_url()."admin/slider/");
			}
			else
			{
				$data=array(
					'resim' => $this->upload->data('file_name')
					
				);
				$this->DatabaseModel->update_data("slider",$data,$id);
				
				$this->session->set_flashdata("sonuc","Resim Upload Edildi.");
				redirect(base_url().'admin/slider');
			}
		}
		else
			$this->load->view('sayfa_yok');
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct scrpit access allowed');

class Kategoriler extends CI_Controller
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
		
		if($this->session->admin_session['adsoyad']!="")
		{
		$data["menu"]="kategoriler";
		$sql="SELECT * FROM kategoriler";
		$query=$this->db->query($sql);
		$data["veri"]=$query->result();
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar',$data);
		$this->load->view('admin/kategori_listesi',$data);
		$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function edit($id)
	{
	    if($this->session->admin_session['adsoyad']!="")
		{
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
			$result=$sorgu->result();
			if($result)
			{
				$data["menu"]="kategoriler";
				$data["veri"]=$result;
				
				$this->load->view('admin/kategori_duzenle',$data);
			}
			else
				$this->load->view('admin/sayfa_yok');
		}
		else
			$this->load->view('sayfa_yok');
		
	}
	
	public function kedit($id)
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$data=array(
					'ust_id' => $this->input->post('ust_id'),
					'adi' => $this->input->post('adi'),				
					'keywords' => $this->input->post('keywords'),					
					'durum' => $this->input->post('durum'),
					'aciklama' => $this->input->post('aciklama')
				);
				$this->DatabaseModel->update_data("kategoriler",$data,$id);
				$this->session->set_flashdata("sonuc","Düzenleme İşlemei Başarılı!");
				redirect(base_url().'admin/kategoriler/');
		}
		else
			$this->load->view('sayfa_yok');	
	}
	
	public function deletee($id)
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$this->db->query("DELETE FROM kategoriler WHERE id=$id");
			$this->session->set_flashdata("sonuc","Silme İşlemei Başarılı!");
			redirect(base_url().'admin/kategoriler/');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function view($id)
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$data["menu"]="kategoriler";
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('admin/kategori_goster',$data);
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function ekle()
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
			$data["ust_id"]=$sorgu->result();
			$data["menu"]="kategoriler";
			$this->load->view('admin/kategori_ekle',$data);
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function kategori_ekle()
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$data=array(
				'ust_id' => $this->input->post('ust_id'),
				'adi' => $this->input->post('adi'),						
				'aciklama' => $this->input->post('aciklama'),
				'keywords' => $this->input->post('keywords'),		
				'durum' => $this->input->post('durum'),
				
				
			);
			$this->DatabaseModel->insert_data("kategoriler",$data);
			$this->session->set_flashdata("sonuc","Ekleme İşlemei Başarılı!");
			redirect(base_url().'admin/kategoriler/');
		}
		else
			$this->load->view('sayfa_yok');
			
	}
	
	public function resimekle($id)
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$data["menu"]="kategoriler";
			$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('admin/kategori_resim_ekle_form',$data);
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function resimupload($id)
	{
		if($this->session->admin_session['adsoyad']!="")
		{
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']=200;
			$config['max_width']=1024;
			$config['max_height']=768;
			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload('userfile'))
			{
				$error=array('error' => $this->upload->display_errors());
				$this->session->set_flashdata("sonuc","Upload Hatasi:");
				redirect(base_url()."admin/kategoriler");
			}
			else
			{
				$data=array(
					'resim' => $this->upload->data('file_name')
					
				);
				$this->DatabaseModel->update_data("kategoriler",$data,$id);
				
				$this->session->set_flashdata("sonuc","Resim Upload Edildi.");
				redirect(base_url().'admin/kategoriler');
			}
		}
		else
			$this->load->view('sayfa_yok');
	}

	
}
?>
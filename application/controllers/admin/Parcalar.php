<?php
defined('BASEPATH') OR exit('No direct scrpit access allowed');

class Parcalar extends CI_Controller
{
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
			$sql="SELECT turu.adi as turadi,kategoriler.adi as katadi, parcalar.* FROM parcalar LEFT JOIN turu ON parcalar.turu_id=turu.id LEFT JOIN kategoriler ON parcalar.kategori_id=kategoriler.id ORDER BY parcalar.adi";
			$query=$this->db->query($sql);
			$data["veri"]=$query->result();
			$data["menu"]="parcalar";
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/parcalar_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function parca_add()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data["menu"]="parcalar";
			$sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");			
			$data["kategoriler"]=$sorgu->result();
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/parcalar_ekle',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
	public function parca_add2()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data=array(
				'adi' => $this->input->post('adi'),		
				'aciklama' => $this->input->post('aciklama'),
				'keywords' => $this->input->post('keywords'),
				'adet' => $this->input->post('adet'),
				'afiyat' => $this->input->post('afiyat'),
				'sfiyat' => $this->input->post('sfiyat'),	
				'kategori_id' => $this->input->post('kategori'),				
				'durum' => $this->input->post('durum'),
				'uzunaciklama' => $this->input->post('uzunaciklama')
			);
			$this->DatabaseModel->insert_data("parcalar",$data);
			$this->session->set_flashdata("sonuc","Kayıt işlemi başarı ile sonuçlandı.");
			redirect(base_url()."admin/parcalar");
		}
		else
			$this->load->view('sayfa_yok');
	}
	public function deletee($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$this->db->query("DELETE FROM parcalar WHERE Id=$id");
			$this->session->set_flashdata("sonuc","Silme işlemi başarı ile sonuçlandı.");
			redirect(base_url()."admin/parcalar");
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function edit($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$result=$this->DatabaseModel->get_parca($id);
			if($result)
			{	$data["menu"]="parcalar";
				$sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");			
				$data["kategoriler"]=$sorgu->result();
				$sorgu=$this->db->query("SELECT * FROM turu ORDER BY adi");			
				$data["turu"]=$sorgu->result();
				$data["veri"]=$result;
				$this->load->view('admin/_header',$data);
				$this->load->view('admin/_sidebar');
				$this->load->view('admin/parcalar_duzenle',$data);
				$this->load->view('admin/_footer');
			}
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function edit2($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data=array(
				'adi' => $this->input->post('adi'),
				'turu_id' => $this->input->post('turu_id'),	
				'kategori_id' => $this->input->post('kategori_id'),				
				'aciklama' => $this->input->post('aciklama'),
				'keywords' => $this->input->post('keywords'),
				'adet' => $this->input->post('adet'),
				'afiyat' => $this->input->post('afiyat'),
				'sfiyat' => $this->input->post('sfiyat'),							
				'durum' => $this->input->post('durum'),
				'uzunaciklama' => $this->input->post('uzunaciklama')
			);
			$this->DatabaseModel->update_data("parcalar",$data,$id);
			$this->session->set_flashdata("sonuc","Düzenleme İşlemei Başarılı!");
			redirect(base_url().'admin/parcalar/');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function view($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$query=$this->db->query("SELECT * FROM parcalar WHERE id=$id");
			$data["menu"]="parcalar";
			$data["veri"]=$query->result();
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/parcalar_goster',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function resimekle($id)
	{	
		if($this->session->admin_session['yetki']=="admin")
		{
			$sorgu=$this->db->query("SELECT * FROM parcalar WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$data["menu"]="parcalar";
			$this->load->view('admin/parca_resim_ekle_form',$data);		
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
			$config['max_size']=250;
			$config['max_width']=2000;
			$config['max_height']=2000;
			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload('userfile'))
			{
				$error=array('error' => $this->upload->display_errors());
				$this->session->set_flashdata("sonuc","Upload Hatasi:");
				redirect(base_url()."admin/parcalar/resimekle/$id");
			}
			else
			{
				$data=array(
					'resim' => $this->upload->data('file_name')
					
				);
				$this->DatabaseModel->update_data("parcalar",$data,$id);
				
				$this->session->set_flashdata("sonuc","Resim Upload Edildi.");
				redirect(base_url().'admin/parcalar');
			}
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function resimgaleriekle($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data["menu"]="parcalar";
			$sorgu=$this->db->query("SELECT * FROM parcalar WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$sorgu=$this->db->query("SELECT * FROM parcalar_resim WHERE parca_id=$id");
			$data["veriler"]=$sorgu->result();
			$data["menu"]="parcalar";
			$this->load->view('admin/parca_galeri_ekle_form',$data);
		}
		else
			$this->load->view('sayfa_yok');		
	}
	
	public function resimgaleriupload($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']=1000;
			$config['max_width']=10000;
			$config['max_height']=10000;
			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload('userfile'))
			{
				$error=array('error' => $this->upload->display_errors());
				$this->session->set_flashdata("sonuc","Upload Hatasi:");
				redirect(base_url()."admin/parcalar/resimgaleriekle/$id");
			}
			else
			{
				$data=array(
					'parca_id' => $id,
					'resim' => $this->upload->data('file_name')
				);
				$this->DatabaseModel->insert_data("parcalar_resim",$data);
				
				$this->session->set_flashdata("sonuc","Resim Upload Edildi.");
				redirect(base_url()."admin/parcalar/resimgaleriekle/$id");
			}
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function resimsil($id,$id2)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$this->db->query("DELETE FROM parcalar_resim WHERE id=$id2");
			$this->session->set_flashdata("sonuc","Silme İşlemei Başarılı!");
			redirect(base_url()."admin/parcalar/resimgaleriekle/$id");
		}
		else
			$this->load->view('sayfa_yok');
	}
	
}
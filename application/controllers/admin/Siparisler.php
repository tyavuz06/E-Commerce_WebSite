<?php
defined('BASEPATH') OR exit('No direct scrpit access allowed');

class Siparisler extends CI_Controller
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
		if($this->session->admin_session['yetki']=="admin")
		{
			
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='yeni' ORDER BY tarih DESC");			
			$data["siparisler"]=$sorgu->result();
			$data["menu"]="siparisler";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/siparis_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	public function onayli()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='Onaylandı' ORDER BY tarih DESC");			
			$data["siparisler"]=$sorgu->result();
			$data["menu"]="siparisler";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/siparis_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	
	public function teslim()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='Teslim Edildi' ORDER BY tarih DESC");			
			$data["siparisler"]=$sorgu->result();
			$data["menu"]="siparisler";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/siparis_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	public function iptal()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='İptal Edildi' ORDER BY tarih DESC");			
			$data["siparisler"]=$sorgu->result();
			$data["menu"]="siparisler";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/siparis_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	
	public function kargolandi()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='Kargolandı' ORDER BY tarih DESC");			
			$data["siparisler"]=$sorgu->result();
			$data["menu"]="siparisler";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/siparis_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	public function deletee($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$this->db->query("DELETE FROM messages WHERE id=$id");
			$this->session->set_flashdata("sonuc","Silme İşlemei Başarılı!");
			redirect(base_url().'admin/mesajlar');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function guncelle($id)
	{	
		if($this->session->admin_session['yetki']=="admin")
		{
			$data=array(
				'durum'  => $this->input->post('durum'),
				'kargono' => $this->input->post('kargono'),
				'kargofirma' => $this->input->post('kargofirma'),
				'admin_aciklama' => $this->input->post('admin_aciklama')
			);
			$this->DatabaseModel->update_data("siparisler",$data,$id);
			$this->session->set_flashdata("sonuc","Güncelleme işlemi başarı ile sonuçlandı.");
			redirect(base_url()."admin/siparisler/view/$id");
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function view($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data["menu"]="siparisler";
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$sorgu=$this->db->query("SELECT * FROM siparisler_urunler WHERE siparis_id=$id");
			$data["urunler"]=$sorgu->result();
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/siparis_goster',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
}
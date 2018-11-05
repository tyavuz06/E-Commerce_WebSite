<?php
defined('BASEPATH') OR exit('No direct scrpit access allowed');

class Yorumlar extends CI_Controller
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
			$sorgu=$this->db->query("SELECT parcalar.adi as padi, urun_yorum.* FROM urun_yorum  LEFT JOIN parcalar ON urun_yorum.urun_id=parcalar.id WHERE urun_yorum.durum='onaylanmadı'");
			//$sorgu=$this->db->query("SELECT * FROM urun_yorum WHERE durum='onaylanmadı'");			
			$data["yorumlar"]=$sorgu->result();
			$data["menu"]="yorumlar";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/yorum_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	
	public function onaylanan()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$sorgu=$this->db->query("SELECT parcalar.adi as padi, urun_yorum.* FROM urun_yorum  LEFT JOIN parcalar ON urun_yorum.urun_id=parcalar.id WHERE urun_yorum.durum='onaylandı'");
			//$sorgu=$this->db->query("SELECT * FROM urun_yorum WHERE durum='onaylanmadı'");			
			$data["yorumlar"]=$sorgu->result();
			$data["menu"]="yorumlar";
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/yorum_listesi',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
	
	public function deletee($id)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$this->db->query("DELETE FROM urun_yorum WHERE id=$id");
			$this->session->set_flashdata("sonuc","Silme İşlemei Başarılı!");
			redirect(base_url().'admin/yorumlar/onaylanan');
		}
		else
			$this->load->view('sayfa_yok');
	}
	
	public function guncelle($id)
	{	
		$data=array(
			'durum' => "onaylandı"
		);
		$this->DatabaseModel->update_data("urun_yorum",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme işlemi başarı ile sonuçlandı.");
		redirect(base_url()."admin/yorumlar/");
	}
	
	public function view($id,$a)
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			if($a==1)
			{
				$veri=array(
					'durum' => "okundu"
				);
				$this->DatabaseModel->update_data("messages",$veri,$id);
			}
			$data["menu"]="mesajlar";
			$sorgu=$this->db->query("SELECT * FROM messages WHERE id=$id");
			$data["veri"]=$sorgu->result();
			$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar',$data);
			$this->load->view('admin/mesaj_goster',$data);
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('sayfa_yok');
	}
}
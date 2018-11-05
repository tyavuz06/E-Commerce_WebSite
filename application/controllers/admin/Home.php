<?php
defined('BASEPATH') OR exit('No direct scrpit access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('admin_session'))
		{
				redirect(base_url().'admin/login');
		}
	}
	
	public function index()
	{
		if($this->session->admin_session['yetki']=="admin")
		{
			$data["menu"]="home";
			$sorgu=$this->db->query("SELECT * FROM messages ORDER BY id");			
			$data["messages"]=$sorgu->result();
			$sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='yeni' ORDER BY id");			
			$data["orders"]=$sorgu->result();
			$sorgu=$this->db->query("SELECT * FROM urun_yorum WHERE durum='onaylanmadı' ORDER BY id");			
			$data["yorumlar"]=$sorgu->result();
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/_maincontent');
			$this->load->view('admin/_footer');
		}
		else
			$this->load->view('admin/sayfa_yok');
	}
}
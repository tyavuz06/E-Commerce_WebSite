<?php
class UserModel extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	
	public function login($email,$sifre)
	{
		$this->db->select('*');
        $this->db->from('kullanicilar');
        $this->db->where('email', $email);
        $this->db->where('sifre', $sifre);
		$this->db->where('durum', "onaylı");
		$this->db->where('yetki', "kullanici");
        $this->db->limit(1);
        
        $query = $this->db->get();
        if($query->num_rows() == 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
}
?>
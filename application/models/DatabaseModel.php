<?php
class DatabaseModel extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	
	public function insert_data($table,$data)
	{
		 $this->db->insert($table,$data);
		 return $this->db->insert_id();
	}
	
	public function update_data($table,$data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update($table,$data);
		return true;
	}
	
	public function mail_bul($table,$email)
	{
		$this->db->select('*');
        $this->db->from($table);
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();
		 if($query->num_rows() == 1) 
		{
            return false;
        } 
		else 
		{
            return true; 
        }
	}
	
	public function sifre_unuttum($email,$adsoyad)
	{
		$this->db->select('*');
        $this->db->from('uyeler');
		$this->db->where('adsoyad', $adsoyad);
        $this->db->where('email', $email);
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
	
	public function get_parca($id)
	{
		$sql="SELECT turu.adi as turadi,kategoriler.adi as kadi, parcalar.* FROM parcalar  LEFT JOIN turu ON parcalar.turu_id=turu.id LEFT JOIN kategoriler ON parcalar.kategori_id=kategoriler.id WHERE parcalar.id=$id";
		$query=$this->db->query($sql);
		if($query->num_rows() == 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
	public function get_sepet($id)
	{
		$sql="SELECT sepet.miktar, parcalar.* FROM parcalar LEFT JOIN sepet ON parcalar.id=sepet.urun_id WHERE sepet.kullanici_id=$id";
		$query=$this->db->query($sql);
		if($query->num_rows() >= 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
	
	public function get_aktivasyon($mail1,$mail2,$kod)
	{
		$email=$mail1."@".$mail2.".com";
		$this->db->select('*');
        $this->db->from('uyeler');
        $this->db->where('email', $email);
        $this->db->where('kod', $kod);
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
	
	public function get_kategori($id)
	{
		$sql="SELECT kategoriler.adi as kadi, parcalar.* FROM parcalar LEFT JOIN kategoriler ON parcalar.kategori_id=kategoriler.id WHERE kategoriler.ust_id=$id";
		$query=$this->db->query($sql);
		if($query->num_rows() >= 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
	
	public function get_kategoriler($id)
	{
		$sql="SELECT kategoriler.adi as kadi, parcalar.* FROM parcalar LEFT JOIN kategoriler ON parcalar.kategori_id=kategoriler.id WHERE kategoriler.ust_id=$id";
		$query=$this->db->query($sql);
		if($query->num_rows() >= 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
	
	public function ust_kategori()
	{
		$sql="SELECT kategoriler.adi as kadi, parcalar.* FROM parcalar LEFT JOIN kategoriler ON parcalar.kategori_id=kategoriler.id WHERE parcalar.kategori_id=$id";
		$query=$this->db->query($sql);
		if($query->num_rows() == 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
	
	public function alt_kategori($id)
	{
		$sql="SELECT kategoriler.adi as kadi, parcalar.* FROM parcalar LEFT JOIN kategoriler ON parcalar.kategori_id=kategoriler.id WHERE parcalar.kategori_id=$id";
		$query=$this->db->query($sql);
		if($query->num_rows() == 1) 
		{
            return $query->result(); 
        } 
		else 
		{
            return false; 
        }
	}
	
	public function login($tablo,$email,$sifre)
	{
		$this->db->select('*');
        $this->db->from($tablo);
        $this->db->where('email', $email);
        $this->db->where('sifre', $sifre);
		$this->db->where('durum', "aktif");
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
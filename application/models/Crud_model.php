<?php

class Crud_model extends CI_Model {

	public function getdata($dob){
        $this->db->where('d_o_b',$dob);
        $query=$this->db->get('tbl_birth_register');
        if($query){
            return $query->row();
        }
      
    }
	public function getAllData()
	{
        $query=$this->db->get('tbl_birth_register');
        
        if($query){
            return $query->result();
        }
    }
    public function insertDatta($data){
        $query=$this->db->insert('tbl_birth_register',$data);
        $query_admin=$this->db->insert('tbl_admin_view',$data);
        if($query && $query_admin){
            return true;
        }
        else{
            return false;
        }
    }

    public function deleteItem($si){
        $this->db->where('br_id',$si);
        $query=$this->db->delete('tbl_birth_register');
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function getsingleData($si){
        $this->db->where('br_id',$si);
        $query=$this->db->get('tbl_birth_register');
        if($query){
            return $query->row();
        }
    }

    public function updateDatta($data,$si){
        $this->db->where('br_id',$si);
        $query=$this->db->update('tbl_birth_register',$data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
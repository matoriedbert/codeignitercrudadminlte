<?php 

class M_user extends CI_Model{
	function query_tampil(){
		return $this->db->get('user');
	}

	function query_prosestambah($data,$table){
		$this->db->insert($table,$data);
	}

	function query_proseshapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function query_edit($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function query_hapus($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function query_prosesedit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
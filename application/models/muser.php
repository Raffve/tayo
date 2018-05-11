<?php 

class muser extends CI_model{
	function gets(){
		return $this->db->get('user');
	}
	function get($where,$table){
		return $this->db->get_where($table,$where);
	}
	function add($data){
		$this->db->insert("user",$data);
	}
	function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}
?>
<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_data5 extends CI_Model{
	function tampil_data(){
		return $this->db->get('users');
	}

	function input_data($data,$users){
		$this->db->insert($users,$data);
	}
	function hapus_data($where,$users){
		$this->db->where($where);
		$this->db->delete($users);
	}
	function edit_data($where,$users){		
		return $this->db->get_where($users,$where);
	}
	function update_data($where,$data,$users){
		$this->db->where($where);
		$this->db->update($users,$data);
 }
}
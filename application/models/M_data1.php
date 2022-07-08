<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class M_data1 extends CI_Model{
	function tampil_data(){
		return $this->db->get('suplier');
	}

	function input_data($data,$suplier){
		$this->db->insert($suplier,$data);
	}
	function hapus_data($where,$suplier){
		$this->db->where($where);
		$this->db->delete($suplier);
	}
	function edit_data($where,$suplier){		
		return $this->db->get_where($suplier,$where);
	}
	function update_data($where,$data,$suplier){
		$this->db->where($where);
		$this->db->update($suplier,$data);
}
}
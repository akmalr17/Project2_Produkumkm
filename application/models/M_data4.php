<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_data4 extends CI_Model{
	function tampil_data(){
		return $this->db->get('produk');
	}

	function input_data($data,$produk){
		$this->db->insert($produk,$data);
	}
	function hapus_data($where,$produk){
		$this->db->where($where);
		$this->db->delete($produk);
	}
	function edit_data($where,$produk){		
		return $this->db->get_where($produk,$where);
	}
	function update_data($where,$data,$produk){
		$this->db->where($where);
		$this->db->update($produk,$data);
}
}
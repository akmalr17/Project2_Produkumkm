<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('jenis_produk');
	}

	function input_data($data,$jenis_produk){
		$this->db->insert($jenis_produk,$data);
	}
	function hapus_data($where,$jenis_produk){
		$this->db->where($where);
		$this->db->delete($jenis_produk);
	}
}
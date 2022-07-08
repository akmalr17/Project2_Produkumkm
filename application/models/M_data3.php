<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_data3 extends CI_Model{
	function tampil_data(){
		return $this->db->get('pesanan');
	}
	function input_data($data,$pesanan){
		$this->db->insert($pesanan,$data);
	}
	function hapus_data($where,$pesanan){
		$this->db->where($where);
		$this->db->delete($pesanan);
	}
}
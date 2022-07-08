<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_data2 extends CI_Model{
	function tampil_data(){
		return $this->db->get('pembelian');
	}
	function hapus_data($where,$pembelian){
		$this->db->where($where);
		$this->db->delete($pembelian);
	}
}
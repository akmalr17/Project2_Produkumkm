<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Pembelian extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data2');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data2->hapus_data($where,'pembelian');
		redirect(base_url("index.php/admin/pembelian"));
	}
}
?>
<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Pesanan extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data3');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data3->hapus_data($where,'pesanan');
		redirect(base_url("index.php/admin/pesanan"));
	}
	function tambah_aksi(){
        $tanggal = $this->input->post('tanggal');
        $jumlah = $this->input->post('jumlah');
        $users_id = $this->input->post('users_id');
		$produk_id = $this->input->post('produk_id');
 
		$data = array(
			'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'users_id' => $users_id,
            'produk_id' => $produk_id,
			);
		$this->m_data3->input_data($data,'pesanan');
		redirect(base_url("index.php/home/user"));
	}
}

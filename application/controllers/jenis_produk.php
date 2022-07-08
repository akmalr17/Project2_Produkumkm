<?php 
 
class Jenis_produk extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}
	function tambah(){
		$this->load->view('input/v_input1');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
 
		$data = array(
			'nama' => $nama,
			);
		$this->m_data->input_data($data,'jenis_produk');
		redirect(base_url("index.php/admin/jenis_produk"));
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'jenis_produk');
		redirect(base_url("index.php/admin/jenis_produk"));
	}
}
?>
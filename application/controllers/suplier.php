<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Suplier extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data1');
	}
	function tambah(){
		$this->load->view('input/v_input2');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
            'kota' => $kota,
            'kontak' => $kontak,
            'alamat' => $alamat,
			);
		$this->m_data1->input_data($data,'suplier');
		redirect(base_url("index.php/admin/suplier"));
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data1->hapus_data($where,'suplier');
		redirect(base_url("index.php/admin/suplier"));
	}
    function edit($id){
        $where = array('id' => $id);
        $data['suplier'] = $this->m_data1->edit_data($where,'suplier')->result();
        $this->load->view('edit/v_edit',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');
     
        $data = array(
            'nama' => $nama,
            'kota' => $kota,
            'kontak' => $kontak,
            'alamat' => $alamat,
            
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data1->update_data($where,$data,'suplier');
        redirect(base_url("index.php/admin/suplier"));
    }
}
?>
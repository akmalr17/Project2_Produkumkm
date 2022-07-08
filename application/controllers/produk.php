<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data4');
	}
	function tambah(){
		$this->load->view('input/v_input3');
	}
	function tambah_aksi(){
		$kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $stok = $this->input->post('stok');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
		$foto = $this->input->post('foto');
        $jenis_id = $this->input->post('jenis_id');
        $deskripsi = $this->input->post('deskripsi');
 
		$data = array(
            'kode' => $kode,
			'nama' => $nama,
            'stok' => $stok,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
			'foto' => $foto,
            'jenis_id' => $jenis_id,
            'deskripsi' => $deskripsi,
			);
		$this->m_data4->input_data($data,'produk');
		redirect(base_url("index.php/admin/produk"));
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data4->hapus_data($where,'produk');
		redirect(base_url("index.php/admin/produk"));
	}
    function edit($id){
        $where = array('id' => $id);
        $data['produk'] = $this->m_data4->edit_data($where,'produk')->result();
        $this->load->view('edit/v_edit2',$data);
    }
    function update(){
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $stok = $this->input->post('stok');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');
        $jenis_id = $this->input->post('jenis_id');
        $deskripsi = $this->input->post('deskripsi');
     
        $data = array(
            'kode' => $kode,
			'nama' => $nama,
            'stok' => $stok,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'jenis_id' => $jenis_id,
            'deskripsi' => $deskripsi,
			);
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data4->update_data($where,$data,'produk');
        redirect(base_url("index.php/admin/produk"));
    }

	function upload(){
		$this->load->view('');
	}

	public function do_upload()
	{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 1000000;
			$config['max_width']            = 102400;
			$config['max_height']           = 102400;

			$_kode =  $kode = $this->input->post('kode');
			
			$array = explode('.', $_FILES['foto']['name']);
			$extension = end($array);

			$new_name = $_kode.'.'.$extension;
			//die($new_name);
			$config['file_name'] = $new_name;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
					$error = array('error' => $this->upload->display_errors());

					//$this->load->view('', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());

					//$this->load->view('upload_success', $data);
			}
			redirect(base_url("index.php/admin/produk"));
	}
	
}
?>
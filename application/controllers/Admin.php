<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
	}
 
	function dashboard(){
		$this->load->view('backend/index');
	}
	function jenis_produk(){
		$this->load->model('m_data');
                $this->load->helper('url');
		$data['jenis_produk'] = $this->m_data->tampil_data()->result();
		$this->load->view('backend/index1',$data);
	}
	function suplier(){
		$this->load->model('m_data1');
                $this->load->helper('url');
		$data['suplier'] = $this->m_data1->tampil_data()->result();
		$this->load->view('backend/index2',$data);
	}
	function pembelian(){
		$this->load->model('m_data2');
                $this->load->helper('url');
		$data['pembelian'] = $this->m_data2->tampil_data()->result();
		$this->load->view('backend/index3',$data);
	}
	function pesanan(){
		$this->load->model('m_data3');
                $this->load->helper('url');
		$data['pesanan'] = $this->m_data3->tampil_data()->result();
		$this->load->view('backend/index4',$data);
	}
	function produk(){
		$this->load->model('m_data4');
                $this->load->helper('url');
		$data['produk'] = $this->m_data4->tampil_data()->result();
		$this->load->view('backend/index5',$data);
	}
	function users(){
		$this->load->model('m_data5');
                $this->load->helper('url');
		$data['users'] = $this->m_data5->tampil_data()->result();
		$this->load->view('backend/index6',$data);
	}
}
?>
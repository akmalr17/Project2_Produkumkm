<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data5');
	}
	function tambah(){
		$this->load->view('input/v_register');
	}
	function tambah_aksi(){
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $created_at = $this->input->post('created_at');
        $last_login = $this->input->post('last_login');
        $status = $this->input->post('status');
 
		$data = array(
			'username' => $username,
            'password' => md5($password),
            'email' => $email,
            'role' => $role,
            'created_at'=> $created_at,
            'last_login'=> $last_login,
            'status'=> $status,
			);
		$this->m_data5->input_data($data,'users');
		redirect(base_url("index.php/login"));
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data5->hapus_data($where,'users');
		redirect(base_url("index.php/admin/users"));
	}
    function edit($id){
        $where = array('id' => $id);
        $data['users'] = $this->m_data5->edit_data($where,'users')->result();
        $this->load->view('edit/v_edit3',$data);
    }
    function update(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $created_at = $this->input->post('created_at');
        $last_login = $this->input->post('last_login');
        $status = $this->input->post('status');
     
        $data = array(
            'username' => $username,
            'password' => md5($password),
            'email' => $email,
            'role' => $role,
            'created_at'=> $created_at,
            'last_login'=> $last_login,
            'status'=> $status,
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_data1->update_data($where,$data,'users');
        redirect(base_url("index.php/admin/users"));
    }
}
?>
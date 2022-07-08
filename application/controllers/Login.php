<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 ob_start();
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
	public function cek_login() {
			$data = array(
				'username' => $this->input->post('username', TRUE),
				'password' => md5($this->input->post('password', TRUE))
			);
			$this->load->model('m_login'); // load model_user
			$hasil = $this->m_login->cek_user($data);
			if ($hasil->num_rows() == 1) {
 
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] = $sess->username;
				$sess_data['role'] = $sess->role;
				$this->session->set_userdata($sess_data);
				}
				if ($this->session->userdata('role')=='administrator') {
				redirect(base_url("index.php/admin/dashboard"));
				}
				elseif ($this->session->userdata('role')=='public') {
				redirect(base_url("index.php/home/user"));
				}
				

			
			else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
			}
			}
 
	
}
}

?>




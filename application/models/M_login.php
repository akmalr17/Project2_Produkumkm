<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

		
	class M_login extends CI_Model {

		public function cek_user($data) {
		$query = $this->db->get_where('users', $data);
		return $query;
		}
		}
?>
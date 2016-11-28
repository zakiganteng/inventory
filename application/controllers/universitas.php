<?php
session_start();
class Universitas extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		if ($this->session->userdata('namaUser')=="") {
			redirect('Welcome');
		}
		$this->load->helper('text');

	}
	public function index() {
		$data['namaUser'] = $this->session->userdata('namaUser');
		$this->load->view('admin/index', $data);
	}

	public function logout() {
		$this->session->unset_userdata('namaUser');
		$this->load->model('barangModel');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('Welcome');
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('permintaanModel');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->permintaanModel->selectPermintaan();
		$this->load->view('permintaan-konfirmasi',$data);
	}

}

/* End of file permintaan.php */
/* Location: ./application/controllers/permintaan.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('permintaanModel');
		$this->load->model('barangModel');
		$this->load->model('ruanganModel');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->permintaanModel->selectPermintaan();
		$this->load->view('permintaan-konfirmasi',$data);
	}
	public function fakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('fakultas/permintaan-ajukan',$data);
	}

	public function doInsert(){
		
		$data['namaBarang'] = $this->input->post('namaBarang');
		$data['namaRuangan'] = $this->input->post('ruangan');
		$data['jumlahBarang'] = $this->input->post('jumlahBarang');
		$namaUser = $this->session->userdata('namaUser');
		$data['namaUser'] = $namaUser;
			
		$this->permintaanModel->tambahPermintaan($data);
		
		
		redirect(base_url().'permintaan/fakultas');
	}

}

/* End of file permintaan.php */
/* Location: ./application/controllers/permintaan.php */
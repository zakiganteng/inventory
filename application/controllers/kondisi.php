<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barangModel');

		$this->load->model('ruanganModel');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('kondisi-barang',$data);
	}
	public function ruangan()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('kondisi-ruangan',$data);
	}
	public function barangFakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('fakultas/kondisi-barang',$data);
	}
	public function ruanganFakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$res = $this->ruanganModel->getWhereFakultas($data['namaUser']);
		$data['datane'] = $res;
		$this->load->view('fakultas/kondisi-ruangan',$data);
	}


}

/* End of file kondisi.php */
/* Location: ./application/controllers/kondisi.php */
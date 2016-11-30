<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barangModel');
		$this->load->model('gedungModel');
		$this->load->model('ruanganModel');
		$this->load->model('userModel');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('mutasi-barang',$data);
	}
	public function barang2($data_)
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$res = $this->barangModel->getWhere($data_);
		$data['idBarang'] = $res[0]['idBarang'];
		$data['namaBarang'] = $res[0]['namaBarang'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$this->load->view('mutasi-barang-2',$data);
	}

	public function doEditBarang(){
		$data['idBarang'] = $this->input->post('idBarang');
		$data['namaRuangan'] = $this->input->post('ruangan');
		$data['statusBarang'] = $this->input->post('optionsRadios');
		$this->barangModel->editBarang($data);
		$namaUser = $this->session->userdata('namaUser');
		$user =  $this->userModel->getWhere($namaUser);
		if (($user[0]['role']) == 0) {
			redirect(base_url().'mutasi/');	
		}else{
			redirect(base_url().'mutasi/fakultas');
		}
		
	}
	public function ruangan()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('mutasi-ruangan',$data);
	}
	public function ruangan2($data_)
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$data['datana'] = $this->userModel->selectUser();
		$res = $this->ruanganModel->getWhere($data_);
		$data['idRuangan'] = $res[0]['idRuangan'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$data['fakultas'] = $res[0]['namaUser'];
		$this->load->view('mutasi-ruangan-2',$data);
	}
	public function doEditRuangan(){
		$data['idRuangan'] = $this->input->post('idRuangan');
		$data['namaUser'] = $this->input->post('namaUser');
		$data['statusRuangan'] = $this->input->post('optionsRadios');
		$this->ruanganModel->editRuangan($data);
		$namaUser = $this->session->userdata('namaUser');
		$user =  $this->userModel->getWhere($namaUser);
		if (($user[0]['role']) == 0) {
			redirect(base_url().'mutasi/ruangan');	
		}else{
			redirect(base_url().'mutasi/ruanganFakultas');
		}
	}
	public function fakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('fakultas/mutasi-barang',$data);
	}
	public function barang2Fakultas($data_)
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$res = $this->barangModel->getWhere($data_);
		$data['idBarang'] = $res[0]['idBarang'];
		$data['namaBarang'] = $res[0]['namaBarang'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$this->load->view('fakultas/mutasi-barang-2',$data);
	}
	public function ruanganFakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$res = $this->ruanganModel->getWhereFakultas($data['namaUser']);
		$data['datane'] = $res;
		$this->load->view('fakultas/mutasi-ruangan',$data);
	}
	public function ruangan2Fakultas($data_)
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$data['datana'] = $this->userModel->selectUser();
		$res = $this->ruanganModel->getWhere($data_);
		$data['idRuangan'] = $res[0]['idRuangan'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$data['fakultas'] = $res[0]['namaUser'];
		$this->load->view('fakultas/mutasi-ruangan-2',$data);
	}


}

/* End of file mutasi.php */
/* Location: ./application/controllers/mutasi.php */
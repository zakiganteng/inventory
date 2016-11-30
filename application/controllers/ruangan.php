<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ruanganModel');
		$this->load->model('gedungModel');
		$this->load->model('userModel');
	}
	public function index()
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('ruangan-lihat',$data);
	}
	public function doInsert(){
		$data['namaRuangan'] = $this->input->post('namaRuangan');
		$data['namaGedung'] = $this->input->post('namaGedung');
		$data['namaUser'] = $this->input->post('namaFakultas');
		$data['statusRuangan'] = $this->input->post('optionsRadios');
		$this->ruanganModel->tambahRuangan($data);
		redirect(base_url().'ruangan');
	}

	public function edit()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('ruangan-ubah',$data);
	}
	public function edit2($data_)
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$data['datana'] = $this->userModel->selectUser();
		$res = $this->ruanganModel->getWhere($data_);
		$data['idRuangan'] = $res[0]['idRuangan'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$data['fakultas'] = $res[0]['namaUser'];
		$this->load->view('ruangan-ubah-2',$data);
	}

	public function doEdit(){
		$data['idRuangan'] = $this->input->post('idRuangan');
		$data['namaUser'] = $this->input->post('namaUser');
		$data['statusRuangan'] = $this->input->post('optionsRadios');
		$this->ruanganModel->editRuangan($data);
		redirect(base_url().'ruangan/edit/');
	}
	public function hapus()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('ruangan-hapus',$data);
	}
	public function buat()
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$data['datana'] = $this->userModel->selectUser();
		$this->load->view('ruangan-tambah',$data);
	}
	public function doHapus($data_)
	{
		$this->ruanganModel->hapusRuangan($data_);
		redirect(base_url().'ruangan/hapus/');
	}
	public function fakultas()
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$res = $this->ruanganModel->getWhereFakultas($data['namaUser']);
		$data['datane'] = $res;
		$this->load->view('fakultas/ruangan-lihat',$data);
	}

}

/* End of file ruangan.php */
/* Location: ./application/controllers/ruangan.php */
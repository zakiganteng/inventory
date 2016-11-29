<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gedungModel');
		$this->load->model('ruanganModel');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$this->load->view('gedung-lihat',$data);
	}
	public function doInsert(){
		$data['namaGedung'] = $this->input->post('namaGedung');
		$data['statusGedung'] = $this->input->post('optionsRadios');
		$this->gedungModel->tambahGedung($data);
		redirect(base_url().'gedung/buat/');
	}
	public function edit()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$this->load->view('gedung-ubah',$data);
	}
	public function edit2($data_)
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$res = $this->gedungModel->getWhere($data_);
		$data['idGedung'] = $res[0]['idGedung'];
		$data['namaGedung'] = $res[0]['namaGedung'];
		$this->load->view('gedung-ubah-2',$data);
	}

	public function doEdit(){
		$data['idGedung'] = $this->input->post('idGedung');
		$data['statusGedung'] = $this->input->post('optionsRadios');
		$this->gedungModel->editGedung($data);
		redirect(base_url().'gedung/edit/');
	}
	public function hapus()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$this->load->view('gedung-hapus',$data);
	}
	public function buat()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$this->load->view('gedung-tambah',$data);
	}
	public function doHapus($data_)
	{
		$this->gedungModel->hapusGedung($data_);
		redirect(base_url().'gedung/hapus/');
	}
	public function fakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->gedungModel->selectGedung();
		$this->load->view('fakultas/gedung-lihat',$data);
	}
}

/* End of file gedung.php */
/* Location: ./application/controllers/gedung.php */
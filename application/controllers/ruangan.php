<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ruanganModel');
	}
	public function index()
	{
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('ruangan-lihat',$data);
	}
	public function doInsert(){
		$data['namaRuangan'] = $this->input->post('namaRuangan');
		$data['namaGedung'] = $this->input->post('namaGedung');
		$data['namaUser'] = $this->input->post('namaFakultas');
		$data['statusRuangan'] = $this->input->post('optionsRadios');
		$this->ruanganModel->tambahRuangan($data);
		redirect(base_url().'ruangan/buat/');
	}
	public function edit()
	{
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('ruangan-ubah',$data);
	}
	public function edit2()
	{
		$this->load->view('ruangan-ubah-2');
	}
	public function hapus()
	{
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('ruangan-hapus',$data);
	}
	public function buat()
	{
		$this->load->view('ruangan-tambah');
	}

}

/* End of file ruangan.php */
/* Location: ./application/controllers/ruangan.php */
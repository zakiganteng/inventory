<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barangModel');
	}
	public function index()
	{
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('barang-lihat',$data);
	}
	public function doInsert(){
		$data['namaBarang'] = $this->input->post('namaBarang');
		$data['idRuangan'] = $this->input->post('ruangan');
		$data['statusBarang'] = $this->input->post('optionsRadios');
		$this->barangModel->tambahBarang($data);
		redirect(base_url().'barang/buat/');
	}
	public function edit()
	{
		$this->load->view('barang-ubah');
	}
	public function edit2()
	{
		$this->load->view('barang-ubah-2');
	}
	public function hapus()
	{
		$this->load->view('barang-hapus');
	}
	public function buat()
	{
		$this->load->view('barang-tambah');
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
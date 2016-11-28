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
		$variable = $this->input->post('jumlahBarang');
		for ($i=0; $i < $variable; $i++) { 
			# code...
			$data['namaBarang'] = $this->input->post('namaBarang');
			$data['namaRuangan'] = $this->input->post('ruangan');
			$data['statusBarang'] = $this->input->post('optionsRadios');
			
			$this->barangModel->tambahBarang($data);
		}
		
		redirect(base_url().'barang/buat/');
	}
	public function edit()
	{
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('barang-ubah',$data);
	}
	public function edit2($data_)
	{
		$res = $this->barangModel->getWhere($data_);
		$data['namaBarang'] = $res[0]['namaBarang'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$this->load->view('barang-ubah-2',$data);
	}
	public function hapus()
	{
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('barang-hapus',$data);
	}
	public function buat()
	{
		$this->load->view('barang-tambah');
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
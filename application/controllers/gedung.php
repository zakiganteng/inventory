<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gedungModel');
	}
	public function index()
	{
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
		$data['datane'] = $this->gedungModel->selectGedung();
		$this->load->view('gedung-ubah',$data);
	}
	public function edit2()
	{
		$this->load->view('gedung-ubah-2');
	}
	public function hapus()
	{
		$data['datane'] = $this->gedungModel->selectGedung();
		$this->load->view('gedung-hapus',$data);
	}
	public function buat()
	{
		$this->load->view('gedung-tambah');
	}

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedung.php */
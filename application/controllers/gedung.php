<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barangModel');
	}

	public function index()
	{	

		$data['data'] = $this->barangModel->selectBarang();
		$this->load->view('gedung-lihat',$data);
	}
	public function edit()
	{
		$this->load->view('gedung-ubah');
	}
	public function edit2()
	{
		$this->load->view('gedung-ubah-2');
	}
	public function hapus()
	{
		$this->load->view('gedung-hapus');
	}
	public function buat()
	{
		$this->load->view('gedung-tambah');
	}

}

/* End of file gedung.php */
/* Location: ./application/controllers/gedung.php */
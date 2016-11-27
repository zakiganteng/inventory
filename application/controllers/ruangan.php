<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function index()
	{
		$this->load->view('ruangan-lihat');
	}
	public function edit()
	{
		$this->load->view('ruangan-ubah');
	}
	public function edit2()
	{
		$this->load->view('ruangan-ubah-2');
	}
	public function hapus()
	{
		$this->load->view('ruangan-hapus');
	}
	public function buat()
	{
		$this->load->view('ruangan-tambah');
	}

}

/* End of file ruangan.php */
/* Location: ./application/controllers/ruangan.php */
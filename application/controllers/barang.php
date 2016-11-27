<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->load->view('barang-lihat');
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
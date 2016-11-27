<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->load->view('barang-lihat');
	}

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi extends CI_Controller {

	public function index()
	{
		$this->load->view('kondisi-barang');
	}
	public function ruangan()
	{
		$this->load->view('kondisi-ruangan');
	}

}

/* End of file kondisi.php */
/* Location: ./application/controllers/kondisi.php */
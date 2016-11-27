<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	public function index()
	{
		$this->load->view('permintaan-konfirmasi');
	}

}

/* End of file permintaan.php */
/* Location: ./application/controllers/permintaan.php */
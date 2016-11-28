<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function cek_login() {
		$data = array('namaUser' => $this->input->post('namaUser', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('userModel'); // load model_user
		$hasil = $this->userModel->cek_user($data);
		//echo $hasil->result ;
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['idUser'] = $sess->idUser;
				$sess_data['namaUser'] = $sess->namaUser;
				$sess_data['role'] = $sess->role;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role')=='0') {
				redirect('barang');
			}
			elseif ($this->session->userdata('role')=='1') {
				redirect('member/c_member');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek namaUser, password!');history.go(-1);</script>";
		}
	}
}

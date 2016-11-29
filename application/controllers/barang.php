<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('userModel');
		$this->load->model('barangModel');
		$this->load->model('ruanganModel');
		if ($this->session->userdata('namaUser')=="") {
			redirect('Welcome');
		}
		$this->load->helper('text');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
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
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('barang-ubah',$data);
	}
	public function edit2($data_)
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$res = $this->barangModel->getWhere($data_);
		$data['idBarang'] = $res[0]['idBarang'];
		$data['namaBarang'] = $res[0]['namaBarang'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$this->load->view('barang-ubah-2',$data);
	}

	public function doEdit(){
		$data['idBarang'] = $this->input->post('idBarang');
		$data['namaRuangan'] = $this->input->post('ruangan');
		$data['statusBarang'] = $this->input->post('optionsRadios');
		$this->barangModel->editBarang($data);
		$namaUser = $this->session->userdata('namaUser');
		$user =  $this->userModel->getWhere($namaUser);
		if (($user[0]['role']) == 0) {
			redirect(base_url().'barang/edit/');	
		}else{
			redirect(base_url().'barang/editFakultas/');
		}
		
	}
	public function hapus()
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('barang-hapus',$data);
	}
	public function buat()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('barang-tambah',$data);
	}
	public function doHapus($data_)
	{	
		
		$this->barangModel->hapusBarang($data_);
		redirect(base_url().'barang/hapus/');
	}
	public function logout() {
		$this->session->unset_userdata('namaUser');
		$this->load->model('barangModel');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('Welcome');
	}
	public function fakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('fakultas/barang-lihat',$data);
	}
	public function editFakultas()
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->barangModel->selectBarang();
		$this->load->view('fakultas/barang-ubah',$data);
	}
	public function edit2Fakultas($data_)
	{	
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$res = $this->barangModel->getWhere($data_);
		$data['idBarang'] = $res[0]['idBarang'];
		$data['namaBarang'] = $res[0]['namaBarang'];
		$data['ruangan'] = $res[0]['namaRuangan'];
		$this->load->view('fakultas/barang-ubah-2',$data);
	}
	public function doEditFakultas(){
		$data['idBarang'] = $this->input->post('idBarang');
		$data['namaRuangan'] = $this->input->post('ruangan');
		$data['statusBarang'] = $this->input->post('optionsRadios');
		$this->barangModel->editBarang($data);
		redirect(base_url().'barang/editFakultas/');
	}
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Admincontroll extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index()
	{
		$this->load->view('admin/login');
	}

    public function dashboard()
	{
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
		$data['total_user_aktif'] = $this->Madmin->getTotalUserAktif();
		$data['total_user_tidak_aktif'] = $this->Madmin->getTotalUserTidakAktif();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/dashboard', $data);
		$this->load->view('admin/layout/footer');
	}

	public function paketlangganan(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
		$data['paket_data'] = $this->Madmin->getAllPaket();
		$data['user_data'] = $this->Madmin->getAllUser();
		$data['transaksi_data'] = $this->Madmin->getAllTransaksi();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/paketlangganan',$data);
		$this->load->view('admin/layout/footer');
	}

	public function user(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
		$data['paket_data'] = $this->Madmin->getAllPaket();
		$data['user_data'] = $this->Madmin->getAllUser();
		$data['transaksi_data'] = $this->Madmin->getAllTransaksi();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/datauser',$data);
		$this->load->view('admin/layout/footer');
	}

	public function transaksi(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
		$data['paket_data'] = $this->Madmin->getAllPaket();
		$data['user_data'] = $this->Madmin->getAllUser();
		$data['transaksi_data'] = $this->Madmin->getAllTransaksi();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/datatransaksi',$data);
		$this->load->view('admin/layout/footer');
	}

	public function veriftransaksi(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
		$data['paket_data'] = $this->Madmin->getAllPaket();
		$data['user_data'] = $this->Madmin->getAllUser();
		$data['transaksi_data'] = $this->Madmin->getAllTransaksi();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/addtransaksi',$data);
		$this->load->view('admin/layout/footer');
	}
	public function login(){
    $u = $this->input->post('username'); 
    $p = $this->input->post('password');
	$cek = $this->Madmin->checkAdminLogin($u);

	if ($cek) {
		$data_session = array(
			'username_admin' => $u,
			'id_admin' => $cek->id_admin,
			'nama_admin' => $cek->nama_admin,
			'status' => 'login'
		);
		$this->session->set_userdata($data_session);
		redirect('admin/admincontroll/dashboard');
	} else {
		$this->session->set_flashdata('error', 'Username atau password salah.');
		redirect('admin/admincontroll');
	}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/admincontroll');
	}
}







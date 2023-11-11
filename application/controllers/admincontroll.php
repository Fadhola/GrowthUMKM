<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		if (!$this->session->userdata('status') == 'login') {
			redirect('admincontroll');
		}
		$data['alladmindata'] = $this->Madmin->getAllAdmin();
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/dashboard');
		$this->load->view('admin/layout/footer');
	}

	public function paketlangganan(){
		if (!$this->session->userdata('status') == 'login') {
			redirect('admincontroll');
		}
		$data['alladmindata'] = $this->Madmin->getAllAdmin();
		$data['paket_data'] = $this->Madmin->getAllPaket();
		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/paketlangganan',$data);
		$this->load->view('admin/layout/footer');
	}

	public function login()
	{
		$u = $this->input->post('username'); 
		$p = $this->input->post('password');
		$cek = $this->Madmin->checkAdminLogin($u, $p)->num_rows();
		if ($cek == 1) { 
		  $data_session = array(   
			'username' => $u,       
			'status' => 'login'
		  );
		  $this->session->set_userdata($data_session);
		  redirect('admincontroll/dashboard');
		} else {
		  $this->session->set_flashdata('error', 'Username atau password salah.');
		  redirect('admincontroll');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('admincontroll');
	}
}







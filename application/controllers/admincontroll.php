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
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/dashboard');
		$this->load->view('admin/layout/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admincontroll');
	}
}







<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Paketlangganan extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function addpaket(){
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
        if ($this->input->post()) {
            $this->form_validation->set_rules('waktu', 'Waktu', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
    
            if ($this->form_validation->run() == true) {
                $data = array(
                    'waktu' => $this->input->post('waktu'),
                    'harga' => $this->input->post('harga'),
                );
                $this->Madmin->insertPaket($data);
                redirect('admin/admincontroll/paketlangganan');
            }
        }
	}

    public function editpaket($id) {
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
        if ($this->input->post()) {
            $data = array(
                'waktu' => $this->input->post('waktu'),
                'harga' => $this->input->post('harga'),
            );
            $this->Madmin->updatePaket($id, $data);
            redirect('admin/admincontroll/paketlangganan');
        }
        $data['paket'] = $this->Madmin->getPaketById($id);
    }
    


    public function deletepaket($id){
        if (!$this->session->userdata('status') == 'login') {
            redirect('admincontroll');
        }
        $this->Madmin->deletePaket($id);
        redirect('admin/admincontroll/paketlangganan');
    }

}







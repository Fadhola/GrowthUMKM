<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Transaksi extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index()
	{
		$this->load->view('admin/login');
	}

    public function addtransaksi(){
        if(empty($this->session->userdata('username_admin'))){
            redirect('admin/admincontroll');
        }
        $this->form_validation->set_rules('nominaltransaksi', 'Nominal Transaksi', 'required');
        $this->form_validation->set_rules('tglbayar', 'Tanggal Bayar', 'required');
        $this->form_validation->set_rules('tglvalidasi', 'Tanggal Validasi', 'required');
        $this->form_validation->set_rules('id_user', 'Detail User', 'required');
        $this->form_validation->set_rules('id_paket', 'Detail Paket', 'required');
        $this->form_validation->set_rules('id_admin', 'Detail Admin', 'required');
    
        if ($this->form_validation->run() == true) {
            $data_transaksi = array(
                'nominal_transaksi' => $this->input->post('nominaltransaksi'),
                'tgl_bayar' => $this->input->post('tglbayar'),
                'tgl_validasi' => $this->input->post('tglvalidasi'),
                'id_user' => $this->input->post('id_user'),
                'id_paket' => $this->input->post('id_paket'),
                'id_admin' => $this->input->post('id_admin')
            );
    
            $this->Madmin->insertTransaksi($data_transaksi);
            redirect('admin/admincontroll/transaksi');
        } else {
            $data['validation_error'] = validation_errors();
        }
    }
    

    public function edittransaksi($id) {
        if(empty($this->session->userdata('username_admin'))){
            redirect('admin/admincontroll');
        }
        $data['paket_data'] = $this->Madmin->getAllPaket();
        $data['paket_data'] = $this->Madmin->getAllPaket();
		$data['user_data'] = $this->Madmin->getAllUser();
        $data['transaksi_data'] = $this->Madmin->getTransaksiById($id);
    
        if ($this->input->post()) {
            $this->form_validation->set_rules('id_paket', 'Pilih Paket', 'required');
            $this->form_validation->set_rules('nominaltransaksi', 'Nominal Transaksi', 'required');
            $this->form_validation->set_rules('tglbayar', 'Tanggal Bayar', 'required');
    
            if ($this->form_validation->run() == true) {
                $data_transaksi = array(
                    'id_paket' => $this->input->post('id_paket'),
                    'nominal_transaksi' => $this->input->post('nominaltransaksi'),
                    'tgl_bayar' => $this->input->post('tglbayar'),
                    'tgl_validasi' => $this->input->post('tglvalidasi')
                );
    
                // Perbarui data transaksi
                $this->Madmin->updateTransaksi($id, $data_transaksi);
                redirect('admin/admincontroll/transaksi');
            } else {
                $data['validation_error'] = validation_errors();
            }
        }
    
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/footer');
    }
    
    
    
    public function deletetransaksi($id){
		if(empty($this->session->userdata('username_admin'))){
			redirect('admin/admincontroll');
		}
        $this->Madmin->deletetransaksi($id);
        redirect('admin/admincontroll/transaksi');
    }

}







<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Gajikaryawan extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Muser');
    }

    public function index()
    {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }
        $id_user = $this->session->userdata('user_id');
        $data['username_user'] = $this->session->userdata('username_user');
        $data['user'] = $this->Muser->getUserById($id_user);
        $data['totals'] = $this->Muser->getIncomeExpenseTotals($id_user);
        $data['differences'] = $this->Muser->getIncomeExpenseDifference($id_user);
        $data['keuangan'] = $this->Muser->getKeuanganByIdUser($id_user);
        $data['karyawan'] = $this->Muser->getKaryawanByIdUser($id_user);
        $data['gajikaryawan'] = $this->Muser->getGajiKaryawanByIdUser($id_user);
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/gajikaryawan', $data);
        $this->load->view('user/layout/modal');
        $this->load->view('user/layout/footer');
    }

    public function addgajikaryawan() 
    {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('tglgaji', 'Tanggal Input Data Penggajian', 'required');
            $this->form_validation->set_rules('nominalgaji', 'Nominal Keuangan', 'required|numeric');
            $this->form_validation->set_rules('id_karyawan', 'Nama Karyawan', 'required');
    
            if ($this->form_validation->run() == true) {
                $data_ugaji = array(
                    'periode' => $this->input->post('periode'),
                    'tgl_gaji' => $this->input->post('tglgaji'),
                    'nominal_gaji' => $this->input->post('nominalgaji'),
                    'id_karyawan' => $this->input->post('id_karyawan'),
                    'id_user' => $this->input->post('id_user')
                );
    
                $this->Muser->insertGajiKaryawan($data_ugaji);
    
                $this->session->set_flashdata('success_message', 'Data Gaji berhasil ditambahkan.');
    
                redirect('gajikaryawan');
            } else {
                $this->load->view('error_view');
            }
        } else {
                $this->load->view('error_view');
        }
    }

    public function editgajikaryawan($id_gaji) 
    {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }

        $this->form_validation->set_rules('periode', 'Periode Penggajian', 'required');
        $this->form_validation->set_rules('tglgaji', 'Tanggal Input Data Penggajian', 'required');
        $this->form_validation->set_rules('nominalgaji', 'Nominal Gaji', 'required|numeric');
        $this->form_validation->set_rules('id_karyawan', 'Nama Karyawan', 'required');
    
        if ($this->form_validation->run() == true) {
            $data_ugaji = array(
                'periode' => $this->input->post('periode'),
                'tgl_gaji' => $this->input->post('tglgaji'),
                'nominal_gaji' => $this->input->post('nominalgaji'),
                'id_karyawan' => $this->input->post('id_karyawan'),
            );
            $this->Muser->updateGajiKaryawan($id_gaji, $data_ugaji);
            redirect('gajikaryawan/index');
        } else {
            $data['karyawan'] = $this->Muser->getKaryawanByIdUser($id_user);
            $data['gajikaryawan'] = $this->Muser->getGajiKaryawanByIdUser($id_user);
            $this->load->view('user/layout/header', $data);
            $this->load->view('user/gajikaryawan', $data);
            $this->load->view('user/layout/modal');
            $this->load->view('user/layout/footer');
        }
    }

    public function deleteGajiKaryawan($id)
    {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }
        $this->Muser->deleteGajiKaryawan($id);
        redirect('gajikaryawan');
    }

}
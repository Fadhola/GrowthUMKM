<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Karyawan extends CI_Controller {
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
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/karyawan', $data);
        $this->load->view('user/layout/modal');
        $this->load->view('user/layout/footer');
    }

    public function addKaryawan() 
    {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('namakaryawan', 'Nama Karyawan', 'required');
            $this->form_validation->set_rules('nikkaryawan', 'Nik Karyawan', 'required|is_unique[tb_karyawan.nik_karyawan]', array(
                'is_unique' => 'Nik Karyawan Sudah Terdaftar di data Karyawan Lain !'
            ));
            $this->form_validation->set_rules('tglkerja', 'Tanggal Kerja', 'required');
            $this->form_validation->set_rules('telpkaryawan', 'Telepon Karyawn', 'required');
            $this->form_validation->set_rules('id_user', 'Id User', 'required');
            if ($this->form_validation->run() == true) {
                $data_karyawan = array(
                    'nama_karyawan' => $this->input->post('namakaryawan'),
                    'nik_karyawan' => $this->input->post('nikkaryawan'),
                    'role' => $this->input->post('rolekaryawan'),
                    'telp_karyawan' => $this->input->post('telpkaryawan'),
                    'tgl_kerja' => $this->input->post('tglkerja'),
                    'id_user' => $this->input->post('id_user')
                );
                $this->Muser->insertKaryawan($data_karyawan);
                redirect('karyawan');
            } else {
                $data['validation_error'] = validation_errors();
                $id_user = $this->session->userdata('user_id');
                $data['username_user'] = $this->session->userdata('username_user');
                $data['user_id'] = $this->session->userdata('user_id');
                $data['karyawan'] = $this->Muser->getKaryawanByIdUser($id_user);
                $this->load->view('user/layout/header', $data);
                $this->load->view('user/karyawan', $data);
                $this->load->view('user/layout/modal');
                $this->load->view('user/layout/footer');
            }    
        } 
    }   

    public function editKaryawan($id)
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('namakaryawan', 'Nama Karyawan', 'required');
            $this->form_validation->set_rules('tglkerja', 'Tanggal Kerja', 'required');
            $this->form_validation->set_rules('telpkaryawan', 'Telepon Karyawn', 'required');
            if ($this->form_validation->run() == true) {
                $data_uKaryawan = array(
                    'nama_karyawan' => $this->input->post('namakaryawan'),
                    'nik_karyawan' => $this->input->post('nikkaryawan'),
                    'role' => $this->input->post('rolekaryawan'),
                    'telp_karyawan' => $this->input->post('telpkaryawan'),
                    'tgl_kerja' => $this->input->post('tglkerja'),
                );
                $this->Muser->updateKaryawan($id, $data_uKaryawan);
                redirect('karyawan');
            } else {
                $data['validation_error'] = validation_errors();
                $id_user = $this->session->userdata('user_id');
                $data['username_user'] = $this->session->userdata('username_user');
                $data['user_id'] = $this->session->userdata('user_id');
                $data['karyawan'] = $this->Muser->getKaryawanByIdUser($id_user);
                $this->load->view('user/layout/header', $data);
                $this->load->view('user/karyawan', $data);
                $this->load->view('user/layout/modal');
                $this->load->view('user/layout/footer');
            }
        } else {
            $this->load->view('user/layout/header', $data);
            $this->load->view('user/karyawan', $data);
            $this->load->view('user/layout/modal');
            $this->load->view('user/layout/footer');
        }
    }

    public function deleteKaryawan($id)
    {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }
        $this->Muser->deleteKaryawan($id);
        redirect('karyawan');
    }

}
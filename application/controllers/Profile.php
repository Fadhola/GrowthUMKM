<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Profile extends CI_Controller {
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
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user'] = $this->Muser->getUserById($id_user);
        $data['keuangan'] = $this->Muser->getKeuanganByIdUser($id_user);
        $data['karyawan'] = $this->Muser->getKaryawanByIdUser($id_user);
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/layout/modal');
        $this->load->view('user/layout/footer');
    }

    public function editProfile($id) {
        if (empty($this->session->userdata('username_user'))) {
            redirect('main/login');
        }

        $this->form_validation->set_rules('namauser', 'Nama User', 'required');
        $this->form_validation->set_rules('namatoko', 'Nama Toko User', 'required');
        $this->form_validation->set_rules('telpuser', 'No. Telp User', 'required');

        if ($this->form_validation->run() == FALSE) {
            $id_user = $this->session->userdata('user_id');
            $data['username_user'] = $this->session->userdata('username_user');
            $data['user_id'] = $this->session->userdata('user_id');
            $data['user'] = $this->Muser->getUserById($id_user);
            $data['keuangan'] = $this->Muser->getKeuanganByIdUser($id_user);
            $data['karyawan'] = $this->Muser->getKaryawanByIdUser($id_user);
            $this->load->view('user/layout/header', $data);
            $this->load->view('user/profile', $data);
            $this->load->view('user/layout/modal');
            $this->load->view('user/layout/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('namauser'),
                'namatoko_user' => $this->input->post('namatoko'),
                'telp_user' => $this->input->post('telpuser')
            );
            $this->Muser->updateUser($id, $data);
            redirect('profile/index');
        }
    }

}
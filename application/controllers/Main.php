<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Main extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Muser');
    }

    public function index()
	{
		$this->load->view('welcome_message');
	}

    public function register()
    {
        $this->load->view('user/register');
    }

    public function saveregisterUser()
    {
        $this->form_validation->set_rules('emailuser', 'Email User', 'required|valid_email|is_unique[tb_user.email]', array(
            'is_unique' => 'Email Anda Sudah Digunakan Pengguna Lain. Silahkan Ulangi!'
        ));
        $this->form_validation->set_rules('usernameuser', 'Username User', 'required|is_unique[tb_user.username_user]', array(
            'is_unique' => 'Username Anda Sudah Digunakan Pengguna Lain. Silahkan Ulangi!'
        ));
        $this->form_validation->set_rules('passuser', 'Password User', 'required');
        $this->form_validation->set_rules('namauser', 'Nama User', 'required');
        $this->form_validation->set_rules('repeatpassuser', 'Ulangi Password', 'required|matches[passuser]', array(
            'matches' => 'Ulangi Password tidak sama dengan Password'
        ));
        $this->form_validation->set_rules('tgldaftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('id_paket', 'Id Paket', 'required');
    
        if ($this->form_validation->run() == true) {
            $data_user = array(
                'email' => $this->input->post('emailuser'),
                'nama_user' => $this->input->post('namauser'),
                'username_user' => $this->input->post('usernameuser'),
                'pass_user' => password_hash($this->input->post('passuser'), PASSWORD_DEFAULT),
                'tgl_daftar' => $this->input->post('tgldaftar'),
                'id_paket' => $this->input->post('id_paket')
            );
            $this->Muser->insertUser($data_user);
            $this->session->set_flashdata('success_message', 'Registrasi Akun berhasil! Silakan login.');
            $this->load->view('user/register');
            return;
        }
        $data['validation_error'] = validation_errors();
        $this->load->view('user/register', $data);
    }
    
    

    public function login()
    {
        $this->load->view('user/login');
    }

    public function processLogin()
    {
    if ($this->input->post()) {
        $this->form_validation->set_rules('usernameuser', 'Username', 'required');
        $this->form_validation->set_rules('passuser', 'Password', 'required');
        if ($this->form_validation->run() == true) {
            $username = $this->input->post('usernameuser');
            $password = $this->input->post('passuser');
            $user = $this->Muser->getUserByUsername($username);
            if ($user) {
                if (password_verify($password, $user->pass_user)) {
                    if ($user->id_paket == 1 || strtotime($user->tgl_akhir . ' 23:59:59') < strtotime(date('Y-m-d 23:59:59'))) {
                        $this->session->set_flashdata('error_message_paket', 'Anda tidak memiliki paket berlangganan atau tanggal berlangganan Anda sudah berakhir. Silahkan berlangganan terlebih dahulu atau perbarui tanggal berlangganan.<br> <u>Klik Di Sini Melihat Paket</u>');
                        redirect('main/login');
                    }

                    $this->setUserSession($user);
                    redirect('main/dashboard');
                } else {
                    $this->session->set_flashdata('error_message', 'Password Salah!');
                }
            } else {
                $this->session->set_flashdata('error_message', 'Username tidak ditemukan!');
            }
        }
    }
    redirect('main/login');
    }
    private function setUserSession($user)
    {
    $data_session = array(
        'user_id' => $user->id_user,
        'username_user' => $user->username_user
    );
    $this->session->set_userdata($data_session);
    }


    public function dashboard() 
    {
    if(empty($this->session->userdata('username_user'))){
        redirect('main/login');        
    }
    $data['username_user'] = $this->session->userdata('username_user');
    $this->load->view('user/layout/header', $data);
    $this->load->view('user/layout/dashboard');
    $this->load->view('user/layout/modal');
    $this->load->view('user/layout/footer');
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect('main/login');
	}

}
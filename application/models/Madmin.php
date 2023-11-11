<?php

class Madmin extends CI_Model{

    public function checkAdminLogin($username, $password){
        $this->db->where('username_admin', $username);
        $this->db->where('pass_admin', $password);
        return $this->db->get('tb_admin');
      }

    public function getAllAdmin() {
        return $this->db->get('tb_admin')->result();
    }

    public function getAllPaket() {
        return $this->db->get('tb_paket')->result();
    }
    
    
}
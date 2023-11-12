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

    public function insertUser($data) {
        $this->db->insert('tb_user', $data);
    }

    public function updateUser($id, $data) {
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }
    
    public function deleteUser($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
    }
    public function getUserById($id) {
        return $this->db->get_where('tb_user', array('id_user' => $id))->row();
    }

    public function getAllUser() {
        $this->db->select('tb_user.*, tb_paket.waktu');
        $this->db->from('tb_user');
        $this->db->join('tb_paket', 'tb_user.id_paket = tb_paket.id_paket', 'left'); 
        return $this->db->get()->result();;
    }

    public function insertPaket($data) {
        $this->db->insert('tb_paket', $data);
    }

    public function updatePaket($id, $data) {
        $this->db->where('id_paket', $id);
        $this->db->update('tb_paket', $data);
    }
    
    public function deletePaket($id) {
        $this->db->where('id_paket', $id);
        $this->db->delete('tb_paket');
    }

    public function getPaketById($id) {
        return $this->db->get_where('tb_paket', array('id_paket' => $id))->row();
    }

    public function getAllPaket() {
        return $this->db->get('tb_paket')->result();
    }
    
    
}
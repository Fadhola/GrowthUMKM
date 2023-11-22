<?php

class Muser extends CI_Model{

    public function insertUser($data) {
        $this->db->insert('tb_user', $data);
    }

    public function getUserByUsername($username) {
        return $this->db->get_where('tb_user', ['username_user' => $username])->row();
    }

    public function getUserById($user_id) {
        return $this->db->get_where('tb_user', ['id_user' => $user_id])->row();
    }

    public function getKaryawanByIdUser($id_user) {
        return $this->db->get_where('tb_karyawan', ['id_user' => $id_user])->result();
    }

    public function deleteKaryawan($id) {
        $this->db->where('id_karyawan', $id);
        $this->db->delete('tb_karyawan');
    }

    public function insertKaryawan($data) {
        $this->db->insert('tb_karyawan', $data);
    }

    public function updateKaryawan($id, $data)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->update('tb_karyawan', $data);
    }
}

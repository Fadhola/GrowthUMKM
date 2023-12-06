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

    public function getGajiKaryawanByIdUser($id_user) {
        $this->db->select('tb_gaji.*, tb_karyawan.nama_karyawan');
        $this->db->from('tb_gaji');
        $this->db->join('tb_karyawan', 'tb_gaji.id_karyawan = tb_karyawan.id_karyawan');
        $this->db->where('tb_gaji.id_user', $id_user);
        return $this->db->get()->result();
    }
    

    public function deleteGajiKaryawan($id) {
        $this->db->where('id_gaji', $id);
        $this->db->delete('tb_gaji');
    }

    public function deleteKaryawan($id) {
        $this->db->where('id_karyawan', $id);
        $this->db->delete('tb_karyawan');
    }

    public function insertKaryawan($data) {
        $this->db->insert('tb_karyawan', $data);
    }

    public function insertGajiKaryawan($data) {
        $this->db->insert('tb_gaji', $data);
    }

    public function updateGajiKaryawan($id, $data)
    {
        $this->db->where('id_gaji', $id);
        $this->db->update('tb_gaji', $data);
    }


    public function updateKaryawan($id, $data)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->update('tb_karyawan', $data);
    }

    public function getAllCategory() {
        return $this->db->get('tb_kategori')->result();
    }

    public function getKeuanganByIdUser($id_user) {
        $this->db->select('tb_keuangan.*, tb_kategori.nama_kategori');
        $this->db->from('tb_keuangan');
        $this->db->join('tb_kategori', 'tb_keuangan.id_kategori = tb_kategori.id_kategori');
        $this->db->where('tb_keuangan.id_user', $id_user);
        return $this->db->get()->result();
    }

    public function getAllKategori() {
        return $this->db->get('tb_kategori')->result();
    }
    
    public function insertKeuangan($data) {
        $this->db->insert('tb_keuangan', $data);
    }

    public function updateKeuangan($id, $data)
    {
        $this->db->where('id_keuangan', $id);
        $this->db->update('tb_keuangan', $data);
    }

    public function deleteKeuangan($id) {
        $this->db->where('id_keuangan', $id);
        $this->db->delete('tb_keuangan');
    }

    public function getIncomeExpenseTotals($id_user)
    {
        $result = new stdClass();
        $result->daily_income = $this->calculateTotal($id_user, 'daily', 2); // Assuming 2 is the id_kategori for income
        $result->daily_expense = $this->calculateTotal($id_user, 'daily', 1); // Assuming 1 is the id_kategori for expense
        $result->monthly_income = $this->calculateTotal($id_user, 'monthly', 2);
        $result->monthly_expense = $this->calculateTotal($id_user, 'monthly', 1);
        $result->yearly_income = $this->calculateTotal($id_user, 'yearly', 2);
        $result->yearly_expense = $this->calculateTotal($id_user, 'yearly', 1);
        return $result;
    }

    private function calculateTotal($id_user, $frequency, $id_kategori)
    {
        $this->db->select_sum('nominal');
        $this->db->where('id_user', $id_user);
        $this->db->where('id_kategori', $id_kategori);

        switch ($frequency) {
            case 'daily':
                $this->db->where('DATE(tanggal)', date('Y-m-d'));
                break;
            case 'monthly':
                $this->db->where('MONTH(tanggal)', date('m'));
                $this->db->where('YEAR(tanggal)', date('Y'));
                break;
            case 'yearly':
                $this->db->where('YEAR(tanggal)', date('Y'));
                break;
            default:
                break;
        }

        $query = $this->db->get('tb_keuangan');
        $result = $query->row();

        return ($result) ? $result->nominal : 0;
    }   

    public function getIncomeExpenseDifference($id_user)
    {
        $result = new stdClass();
        $result->daily_difference = $this->calculateDifference($id_user, 'daily');
        $result->monthly_difference = $this->calculateDifference($id_user, 'monthly');
        $result->yearly_difference = $this->calculateDifference($id_user, 'yearly');
        return $result;
    }

    private function calculateDifference($id_user, $frequency)
    {
        $total_income = $this->calculateTotal($id_user, $frequency, 2);
        $total_expense = $this->calculateTotal($id_user, $frequency, 1);
        $difference = $total_income - $total_expense;
        return $difference;
    }

    public function updateUser($id, $data) {
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }
}

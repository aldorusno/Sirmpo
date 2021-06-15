<?php

class Pasien_model extends CI_model
{
    public function getAllPasien()
    {
        $query = $this->db->get('pasien')->result_array();

        return $query;
    }



    public function getPasienById($id_pasien)
    {
        return $this->db->get_where('pasien', ['id_pasien' => $id_pasien])->row_array();
    }

    public function hapusDataPasien($id_pasien)
    {
        $this->db->where('id_pasien', $id_pasien);
        $this->db->delete('pasien');
    }

    public function ubahPasien($id_pasien)
    {
        $data = [
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tanggal" => $this->input->post('tanggal', true),
            "no_rm" => $this->input->post('no_rm', true),
            "no_telp" => $this->input->post('no_telp', true),
            "alamat" => $this->input->post('alamat', true),

        ];
        $this->db->where('id_pasien', $id_pasien);
        $this->db->update('pasien', $data);
        redirect('rekam_medis/lihat_pasien');
    }
    public function jumlahPasien()
    {
        echo $this->db->count_all('pasien');
    }

    function tampil_data()
    {
        return $this->db->get('pasien');
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->like('nama_pasien', $keyword);
        $this->db->or_like('no_ktp', $keyword);
        $this->db->or_like('no_rm', $keyword);
        return $this->db->get()->result_array();
    }
}

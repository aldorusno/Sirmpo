<?php

class Obat_model extends CI_model
{
    public function getAllObat()
    {
        $query = $this->db->get('obat')->result_array();

        return $query;
    }

    public function getObatById($id_obat)
    {
        return $this->db->get_where('obat', ['id_obat' => $id_obat])->row_array();
    }

    public function hapusDataObat($id_obat)
    {
        $this->db->where('id_obat', $id_obat);
        $this->db->delete('obat');
    }

    public function ubahObat($id_obat)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jumlah" => $this->input->post('jumlah', true),
            "keterangan" => $this->input->post('keterangan', true),
            "kode" => $this->input->post('kode', true)
        ];
        $this->db->where('id_obat', $id_obat);
        $this->db->update('obat', $data);
        redirect('rekam_medis/lihat_obat');
    }

    function tampil_data()
    {
        return $this->db->get('obat');
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->like('nama', $keyword);
        $this->db->or_like('kode', $keyword);
        return $this->db->get()->result_array();
    }
}

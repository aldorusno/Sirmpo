<?php

class Dokter_model extends CI_model
{
    public function getAllDokter()
    {
        $query = $this->db->get('dokter')->result_array();
        return $query;
    }

    public function tambahDokter()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "hari_kerja" => $this->input->post('hari_kerja', true),
            "nip" => $this->input->post('nip', true)

        ];
        $this->db->insert('dokter', $data);
    }

    public function getDokterById($id_dokter)
    {
        return $this->db->get_where('dokter', ['id_dokter' => $id_dokter])->row_array();
    }

    public function hapusDataDokter($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        $this->db->delete('dokter');
    }

    public function ubahDokter($id_dokter)
    {

        $data = [
            "nama" => $this->input->post('nama', true),
            "spesialis" => $this->input->post('spesialis', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "hari_kerja" => $this->input->post('hari_kerja', true),
            "nip" => $this->input->post('nip', true)

        ];
        $this->db->where('id_dokter', $id_dokter);
        $this->db->update('dokter', $data);
        redirect('administrasi/lihat_dokter');
    }

    function tampil_data()
    {
        return $this->db->get('dokter');
    }
}

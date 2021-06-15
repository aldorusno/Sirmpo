<?php

class Antrian_model extends CI_model
{
    public function getAllAntrian()
    {
        $query = $this->db->get('antrian')->result_array();

        return $query;
    }
    public function getAllUser()
    {
        $query = $this->db->get('user')->result_array();

        return $query;
    }



    public function tambahAntrian()
    {
        $datetime = date("Y-m-d", strtotime('tomorrow'));

        $this->db->where('tgl_antrian', $datetime);
        $this->db->order_by('no_antrian', 'DESC');
        $antrian = $this->db->get('antrian')->row();

        if ($antrian) {
            $no = $antrian->no_antrian;
        } else {
            $no = 0;
        }
        $no = $no + 1;
        $this->db->set('no_antrian', $no);
        $this->db->set('tgl_antrian', $datetime);
        $this->db->set('email', $this->session->userdata('email'));
        $this->db->set('nama_lengkap', $this->input->post('nama_lengkap'));
        $this->db->insert('antrian');
    }

    public function tambahAntrianAdmin()
    {
        $datetime = date("Y-m-d");

        $this->db->where('tgl_antrian', $this->input->post('tgl_antrian'));
        $this->db->order_by('no_antrian', 'DESC');
        $antrian = $this->db->get('antrian')->row();

        if ($antrian) {
            $no = $antrian->no_antrian;
        } else {
            $no = 0;
        }
        $no = $no + 1;
        $this->db->set('no_antrian', $no);
        $this->db->set('tgl_antrian', $this->input->post('tgl_antrian'));
        $this->db->set('email', $this->session->userdata('email'));
        $this->db->set('nama_lengkap', $this->input->post('nama_lengkap'));
        $this->db->insert('antrian');
    }

    public function getAntrianById($id_antrian)
    {
        return $this->db->get_where('antrian', ['id_antrian' => $id_antrian])->row_array();
    }

    public function getAntrianByDate()
    {
        $datetime = date("Y-m-d");
        return $this->db->get_where('antrian', ['tgl_antrian' => $datetime])->result_array();
    }

    public function hapusDataAntrian($id_antrian)
    {
        $this->db->where('id_antrian', $id_antrian);
        $this->db->delete('antrian');
    }
}

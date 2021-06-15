<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekam_medis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth/index');
        }
        if ($this->session->userdata('role_id') != 2) {
            redirect('auth/goToDefaultPage');
        }
        $this->load->model('Obat_model');
        $this->load->model('Pasien_model');
        $this->load->model('Berobat_model');
        $this->load->model('Dokter_model');
    }
    public function index()
    {
        // $data['pasien'] = $this->Pasien_model->jumlahPasien("pasien");
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Welcome ' . $data['user']['nama_lengkap'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_obat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Obat';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rekam_medis/tambah_obat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kode' => htmlspecialchars($this->input->post('kode', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true))

            ];


            $this->db->insert('obat', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Berhasil ditambah
            </div>');
            redirect('rekam_medis/tambah_obat');
        }
    }

    public function lihat_obat()
    {
        $data['obat'] = $this->Obat_model->getAllObat();
        $data['title'] = 'Lihat Obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Welcome ' . $data['user']['nama_lengkap'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/lihat_obat', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_obat($id_obat)
    {

        $data['title'] = 'Ubah Data obat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['obat'] = $this->Obat_model->getObatById($id_obat);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rekam_medis/ubah_obat', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Obat_model->ubahObat($id_obat);
        }
    }

    public function hapus($id_obat)
    {
        $this->Obat_model->hapusDataObat($id_obat);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('rekam_medis/lihat_obat');
    }

    public function tambah_pasien()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Obat';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rekam_medis/tambah_pasien', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'no_ktp' => htmlspecialchars($this->input->post('no_ktp', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                'no_rm' => htmlspecialchars($this->input->post('no_rm', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'nama_pasien' => htmlspecialchars($this->input->post('nama_pasien', true)),
            ];
            $this->db->insert('pasien', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Berhasil ditambah</div>');
            redirect('rekam_medis/tambah_pasien');
        }
    }

    public function lihat_pasien()
    {
        $data['pasien'] = $this->Pasien_model->getAllPasien();
        $data['title'] = 'Lihat Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Welcome ' . $data['user']['nama_lengkap'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/lihat_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_pasien($id_pasien)
    {

        $data['title'] = 'Ubah Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pasien'] = $this->Pasien_model->getPasienById($id_pasien);

        $this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rekam_medis/ubah_pasien', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->ubahPasien($id_pasien);
        }
    }

    public function hapus_pasien($id_pasien)
    {
        $this->Pasien_model->hapusDataPasien($id_pasien);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('rekam_medis/lihat_pasien');
    }
    public function print()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->Pasien_model->getAllPasien("pasien");
        $this->load->view('rekam_medis/print_pasien', $data);
    }
    public function print_obat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->getAllObat("obat");
        $this->load->view('rekam_medis/print_obat', $data);
    }

    public function lihat_kunjungan()
    {

        $data['title'] = 'Lihat Pengobatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kunjungan'] = $this->Berobat_model->tampil_data()->result_array();
        //echo 'Welcome ' . $data['user']['nama_lengkap'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/lihat_kunjungan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_kunjungan()
    {

        $data['title'] = 'Daftar Pengobatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->Pasien_model->tampil_data()->result_array();
        $data['dokter'] = $this->Dokter_model->tampil_data()->result_array();
        //echo 'Welcome ' . $data['user']['nama_lengkap'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/tambah_kunjungan', $data);
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $tgl_berobat = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl_berobat,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $this->Berobat_model->insert_data($data);
        redirect('rekam_medis/lihat_kunjungan');
    }

    public function ubah_kunjungan($id)
    {

        $data['title'] = 'Ubah Data Pengobatan';
        $where = array('id_berobat' => $id);
        $data['edit'] = $this->Berobat_model->edit_data($where)->row_array();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->Pasien_model->tampil_data()->result_array();
        $data['dokter'] = $this->Dokter_model->tampil_data()->result_array();
        //echo 'Welcome ' . $data['user']['nama_lengkap'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/ubah_kunjungan', $data);
        $this->load->view('templates/footer');
    }

    public function update_kunjungan()
    {
        $tgl_berobat = $this->input->post('tgl_berobat');
        $id = $this->input->post('id');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data = array(
            'tgl_berobat' => $tgl_berobat,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );
        $where = array('id_berobat' => $id);
        $this->Berobat_model->update_data($data, $where);
        redirect('rekam_medis/lihat_kunjungan');
    }

    public function hapus_kunjungan($id)
    {
        $where = array('id_berobat' => $id);
        $this->Berobat_model->hapus_data($where);
        redirect('rekam_medis/lihat_kunjungan');
    }

    public function rekam($id)
    {
        $data['title'] = 'Rekam Medis';

        $data['d'] = $this->Berobat_model->tampil_rm($id)->row_array();

        $q = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")->row_array();
        $id_pasien = $q['id_pasien'];
        $data['riwayat'] = $this->Berobat_model->tampil_riwayat($id_pasien)->result_array();




        $data['obat'] = $this->Obat_model->tampil_data()->result_array();
        $data['resep'] = $this->Berobat_model->tampil_resep($id)->result_array();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/rekam', $data);
        $this->load->view('templates/footer');
    }

    function insert_rm()
    {
        $id_berobat = $this->input->post('id');
        $keluhan = $this->input->post('keluhan');
        $diagnosa = $this->input->post('diagnosa');
        $penatalaksanaan = $this->input->post('penatalaksanaan');

        $data = array(
            'keluhan_pasien' => $keluhan,
            'hasil_diagnosa' => $diagnosa,
            'penatalaksanaan' => $penatalaksanaan
        );
        $where = array('id_berobat' => $id_berobat);
        $this->Berobat_model->update_data($data, $where);

        redirect('rekam_medis/rekam/' . $id_berobat);
    }

    function insert_resep()
    {
        $id_berobat = $this->input->post('id');
        $obat = $this->input->post('obat');


        $data = array(
            'id_berobat' => $id_berobat,
            'id_obat' => $obat,

        );

        $this->Berobat_model->insert_resep($data);

        redirect('rekam_medis/rekam/' . $id_berobat);
    }

    public function hapus_resep($id, $id_berobat)
    {
        $where = array('id_resep' => $id);
        $this->Berobat_model->hapus_resep($where);
        redirect('rekam_medis/rekam/' . $id_berobat);
    }

    public function print_kunjungan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kunjungan'] = $this->Berobat_model->tampil_data("berobat")->result_array();
        $this->load->view('rekam_medis/print_kunjungan', $data);
    }


    public function print_berobat($id_berobat)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $id_berobat;
        $data['resep'] = $this->Berobat_model->tampil_resep($id)->result_array();
        $data['berobat'] = $this->Berobat_model->print_berobat($id_berobat)->result_array();
        $this->load->view('rekam_medis/print_berobat', $data);
    }

    public function search()
    {
        $data['title'] = 'Lihat Pasien';
        $keyword = $this->input->post('keyword');
        $data['pasien'] = $this->Pasien_model->get_keyword($keyword);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/lihat_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function search_obat()
    {
        $data['title'] = 'Lihat Obat';
        $keyword = $this->input->post('keyword');
        $data['obat'] = $this->Obat_model->get_keyword($keyword);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/lihat_obat', $data);
        $this->load->view('templates/footer');
    }

    public function search_berobat()
    {
        $data['title'] = 'Lihat Pengobatan';
        $keyword = $this->input->post('keyword');
        $data['kunjungan'] = $this->Berobat_model->cari_data($keyword)->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekam_medis/lihat_kunjungan', $data);
        $this->load->view('templates/footer');
    }
}

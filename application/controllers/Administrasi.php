<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth/index');
        }
        if ($this->session->userdata('role_id') != 1) {
            redirect('auth/goToDefaultPage');
        }
        $this->load->library('form_validation');
        $this->load->model('Antrian_model');
        $this->load->model('Dokter_model');
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $datetime = date("Y-m-d", strtotime('tomorrow'));

        $data['antrian'] = $this->db->get_where('antrian', ['tgl_antrian' => $datetime])->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_antrian()
    {

        $data['title'] = 'Lihat Antrian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['antrian'] = $this->Antrian_model->getAllAntrian();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/lihat_antrian', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_antrian()
    {
        $data['title'] = 'Tambah Antrian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['antrian'] = $this->Antrian_model->getAllAntrian();

        $this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/tambah_antrian', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Antrian_model->tambahAntrianAdmin();
            redirect('administrasi/lihat_antrian');
        }
    }

    public function lihat_dokter()
    {

        $data['title'] = 'Lihat Dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dokter'] = $this->Dokter_model->getAllDokter();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/lihat_dokter', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_dokter()
    {

        $data['title'] = 'Tambah Dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dokter'] = $this->Dokter_model->getAllDokter();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/tambah_dokter', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->tambahDokter();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('administrasi/lihat_dokter');
        }
    }

    public function ubah_dokter($id_dokter)
    {

        $data['title'] = 'Ubah Data Dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dokter'] = $this->Dokter_model->getDokterById($id_dokter);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/ubah_dokter', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->ubahDokter($id_dokter);
        }
    }

    public function hapus($id_dokter)
    {
        $this->Dokter_model->hapusDataDokter($id_dokter);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('administrasi/lihat_dokter');
    }


    public function print_antrian()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['antrian'] = $this->Antrian_model->getAllAntrian();
        $this->load->view('administrasi/print_antrian', $data);
    }

    public function print_dokter()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dokter'] = $this->Dokter_model->getAllDokter();
        $this->load->view('administrasi/print_dokter', $data);
    }

    public function reset_antrian()
    {
        // $query = $this->db->empty_table('antrian');
        $datetime = date_create()->format('Y-m-d');
        $this->db->delete('antrian', array('tgl_antrian' => $datetime));


        redirect('administrasi/lihat_antrian');
    }

    public function hapus_antrian($id_antrian)
    {
        $this->Antrian_model->hapusDataAntrian($id_antrian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('administrasi/lihat_antrian');
    }

    public function print()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $data['antrian'] = $this->db->get_where('antrian', ['email' => $email]);
        $this->load->view('administrasi/print', $data);
    }
}

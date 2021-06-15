<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth/index');
        }
        if ($this->session->userdata('role_id') != 3) {
            redirect('auth/goToDefaultPage');
        }
        $this->load->model('Antrian_model');
        $this->load->model('Dokter_model');
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $datetime = date("Y-m-d", strtotime('tomorrow'));

        $data['antrian'] = $this->db->get_where('antrian', ['tgl_antrian' => $datetime])->num_rows();
        //    $query = $this->db->query("SELECT COUNT tgl_antrian,
        //     FROM antrian
        //     WHERE antrian.tgl_antrian='$datetime'");


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_antrian()
    {
        $data['title'] = 'Tambah Antrian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $antrian = $this->db->get_where('antrian', ['email' => $this->session->userdata('email')])->row_array();
        $data['antrian'] = $this->Antrian_model->getAllAntrian();

        $this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambah_antrian', $data);
            $this->load->view('templates/footer');
        } else {
            if ($antrian) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Daftar antrian gagal, anda sudah terdaftar sebelumnnya</div>');
                redirect('user/tambah_antrian');
            } else {
                $this->Antrian_model->tambahAntrianAdmin();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Antrian berhasil daftar antrian</div>');
                redirect('user/tambah_antrian');
            }
        }
    }
    public function lihat_antrian()
    {

        $data['title'] = 'Lihat Antrian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $email = $this->session->userdata('email');
        $data['antrian'] = $this->db->get_where('antrian', ['email' => $email]);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_antrian', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_dokter()
    {

        $data['title'] = 'Lihat Dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dokter'] = $this->Dokter_model->getAllDokter();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihat_dokter', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {

        $data['title'] = 'Ubah Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $nama_lengkap = $this->input->post('nama_lengkap');
            $no_ktp = $this->input->post('no_ktp');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $email = $this->session->userdata('email');

            $this->db->set('nama_lengkap', $nama_lengkap);
            $this->db->set('no_ktp', $no_ktp);
            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('alamat', $alamat);


            $this->db->where('email', $email);
            $this->db->update('user');


            redirect('user');
        }
    }

    public function change_password()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Ubah Password';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/change_password', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password lama salah
                </div>');
                redirect('user/change_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak boleh sama</div>');
                    redirect('user/change_password');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password berhasil diubah</div>');
                    redirect('user/change_password');
                }
            }
        }
    }

    public function print_antrian()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $data['antrian'] = $this->db->get_where('antrian', ['email' => $email]);
        $this->load->view('user/print_antrian', $data);
    }
    public function hapus_antrian($id_antrian)
    {
        $this->Antrian_model->hapusDataAntrian($id_antrian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('user/lihat_antrian');
    }
}

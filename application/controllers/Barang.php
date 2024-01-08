<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barber_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barber'] = $this->Barber_model->get();
        $this->load->view("layout/admin_header", $data);
        $this->load->view("barber/vw_barber", $data);
        $this->load->view("layout/admin_footer", $data);
    }


    public function tambah()
    {
        $data['judul'] = "Halaman Tambah barber";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("barber/vw_tambah_barber", $data);
        $this->load->view("layout/footer", $data);
    }
    public function upload()
    {
        $namaUser = $this->session->userdata('nama');
        $nimUser = $this->session->userdata('nim');
        $angkatanUser = $this->session->userdata('angkatan');
        $kelasUser = $this->session->userdata('kelas');

        // Fetch the user's id based on the name
        $user = $this->db->get_where('user', ['nama' => $namaUser])->row_array();
        $user = $this->db->get_where('user', ['nim' => $nimUser])->row_array();
        $user = $this->db->get_where('user', ['angkatan' => $angkatanUser])->row_array();
        $user = $this->db->get_where('user', ['kelas' => $kelasUser])->row_array();

        // Set rules for form validation
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required|integer');
        $this->form_validation->set_rules('file_path', 'File barber', 'callback_check_file_upload');

        // Configurasi upload
        $config['upload_path']   = './assets/img/barber/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = 10240;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman tambah_barber dengan pesan error
            $data['judul'] = "Halaman Tambah barber";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view("layout/header", $data);
            $this->load->view("barber/vw_tambah_barber", $data);
            $this->load->view("layout/footer", $data);
        } else {
            if ($this->upload->do_upload('file_path')) {
                $uploadData = $this->upload->data();
                $data = [
                    'nama' => $this->input->post('nama'),
                    'nohp' => $this->input->post('nohp'),
                    'file_path' => $uploadData['file_name'],
                    'status' => 'Diterima',
                ];

                $this->Barber_model->insert($data);
                redirect('barber');
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }
    }

    // Callback function to check if the file is uploaded
    public function check_file_upload($file_path)
    {
        if (empty($_FILES['file_path']['name'])) {
            $this->form_validation->set_message('check_file_upload', 'The File barber field is required.');
            return FALSE;
        } else {
            return TRUE;
        }
    }


    public function edit($id)
    {
        $data['judul'] = "Halaman Edit barber";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barber'] = $this->Barber_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("barber/vw_ubah_barber", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Barber_model->delete($id);
        redirect('barber');
    }
    function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'nohp' => $this->input->post('nohp'),
            'namakegiatan' => $this->input->post('namakegiatan'),
            'file_path' => $this->input->post('file_path'),

        ];
        $id = $this->input->post('id');
        $this->Barber_model->update(['id' => $id], $data);
        redirect('barber');
    }
    // Controller
    public function tolak($id)
    {
        // Pastikan user yang login memiliki peran 'Admin'
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($user['role'] == 'User') {
            // Update status proposal menjadi 'Proses'
            $this->Barber_model->updateStatus($id, 'Ditolak');

            // Redirect kembali ke halaman proposal User
            redirect('barber');
        } else {
            // Tindakan jika user bukan User (misalnya, redirect ke halaman lain atau tampilkan pesan)
            // ...
        }
    }
    public function proses($id)
    {
        // Pastikan user yang login memiliki peran 'User'
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($user['role'] == 'User') {
            // Update status barber menjadi 'Proses'
            $this->Barber_model->updateStatus($id, 'Proses');

            // Redirect kembali ke halaman barber User
            redirect('barber');
        } else {
            // Tindakan jika user bukan User (misalnya, redirect ke halaman lain atau tampilkan pesan)
            // ...
        }
    }
    public function selesai($id)
    {
        // Pastikan user yang login memiliki peran 'User'
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($user['role'] == 'User') {
            // Update status barber menjadi 'Proses'
            $this->Barber_model->updateStatus($id, 'Selesai');

            // Redirect kembali ke halaman barber admin
            redirect('barber');
        } else {
            // Tindakan jika user bukan admin (misalnya, redirect ke halaman lain atau tampilkan pesan)
            // ...
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail barber";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barber'] = $this->Barber_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("barber/vw_detail_barber", $data);
        $this->load->view("layout/footer", $data);
    }
}
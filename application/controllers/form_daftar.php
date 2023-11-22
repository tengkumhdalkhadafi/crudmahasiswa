<?php
defined('BASEPATH') or exit('No direct script access allowed');

class form_daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftar_model");

    }

    public function index()
    {
        $data['judul'] = "Halaman siswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->daftar_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pendaftaran/vw_daftar", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah siswa";
        $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')
        ])->row_array();

        $this->form_validation->set_rules('nama', 'nama siswa', 'required', [
            'required' => 'Nama siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('NISN', 'NSIN', 'required', [
            'required' => 'NSIN siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('NIK', 'NIK', 'required', [
            'required' => 'NIK siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'email siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_handphone', 'no handphone', 'required', [
            'required' => 'no handphone siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_whatsapp', 'no whatsapp', 'required', [
            'required' => 'no whatsapp siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required', [
            'required' => 'tempat_lahir siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required', [
            'required' => 'tanggal lahir siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required', [
            'required' => 'jenis kelamin siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_tinggal', 'kabupaten tinggal', 'required', [
            'required' => 'kabupaten tinggal siswa Wajib di isi'
        ]);

        $this->form_validation->set_rules('kabupaten_sekolah', 'kabupaten sekolah', 'required', [
            'required' => 'kabupaten sekolah siswa Wajib di isi',
        ]);
        $this->form_validation->set_rules('sekolah_asal', 'sekolah_asal', 'required', [
            'required' => 'sekolah asal siswa Wajib di isi',
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => ' jurasan siswa Wajib di isi',
        ]);
        $this->form_validation->set_rules('tahun_lulus', 'tahun lulus', 'required', [
            'required' => ' tahun lulus siswa Wajib di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("form_daftar/vw_tambah", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'Nama' => $this->input->post('nama'),
                'NIM' => $this->input->post('NISN'),
                'email' => $this->input->post('NIK'),
                'prodi' => $this->input->post('email'),
                'alamat' => $this->input->post('no_handphone'),
                'no_hp' => $this->input->post('no_whatsapp'),
                'jenis_kelamin' => $this->input->post('tempat_lahir'),
                'tangal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kabupaten_tinggal' => $this->input->post('kabupaten_tinggal'),
                'kecamatan_tinggal' => $this->input->post('kecamatan_tinggal'),
                'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'jurusan' => $this->input->post('jurusan'),
                'tahun_lulus' => $this->input->post('tahun_lulus')
            ];
            $this->daftar_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data siswa Berhasil Ditambah!</div>');
            redirect('pendaftaran');
        }

    }

}
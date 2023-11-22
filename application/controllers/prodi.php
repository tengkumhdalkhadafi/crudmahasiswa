<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Prodi_model");
    }

    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_prodi", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_tambah_prodi", $data);
        $this->load->view("layout/footer");
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_ubah_prodi", $data);
        $this->load->view("layout/footer");
    }

    public function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'ruangan' => $this->input->post('ruangan'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan')
        ];
        $this->Prodi_model->insert($data);
        redirect('Prodi');
    }

    public function update()
    {
        $data = [
          'nama' => $this->input->post('nama'),
          'ruangan' => $this->input->post('ruangan'),
          'jurusan' => $this->input->post('jurusan'),
          'akreditasi' => $this->input->post('akreditasi'),
          'nama_kaprodi' => $this->input->post('nama_kaprodi'),
          'tahun_berdiri' => $this->input->post('tahun_berdiri'),
          'output_lulusan' => $this->input->post('output_lulusan')
        ];
        $id = $this->input->post('id');
        $this->Prodi_model->update(['id' => $id], $data);
        redirect('Prodi');
    }

    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        redirect('Prodi');
    }
}
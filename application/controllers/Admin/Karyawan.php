<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['karyawan'] = $this->db->get('karyawan')->result();

        $this->load->view('layouts/admin/header');
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('admin/karyawan/index', $data);
        $this->load->view('layouts/admin/footer');
    }

    public function tambah()
    {
        $this->load->view('layouts/admin/header');
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('admin/karyawan/tambah');
        $this->load->view('layouts/admin/footer');
    }

    public function proses_tambah()
    {
        $data = [
            'user_id_jne' => htmlspecialchars($this->input->post('user_id_jne')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir')),
            'jk' => htmlspecialchars($this->input->post('jk')),
            'agama' => htmlspecialchars($this->input->post('agama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'telp' => htmlspecialchars($this->input->post('telp'))
        ];

        $this->db->insert('karyawan', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/karyawan');
    }

    public function lihat($id)
    {
        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])->row();

        $this->load->view('layouts/admin/header');
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('admin/karyawan/lihat', $data);
        $this->load->view('layouts/admin/footer');
    }

    public function edit($id)
    {
        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])->row();

        $data['agama'] = array(
            ['name' => "Islam"],
            ['name' => "Kristen"],
            ['name' => "Katolik"],
            ['name' => "Hindu"],
            ['name' => "Buddha"],
            ['name' => "Khonghucu"],
        );

        $data['jk'] = array(
            ['name' => "Laki-laki"],
            ['name' => "Perempuan"],
        );

        // var_dump($data['jk']);
        // die();

        $this->load->view('layouts/admin/header');
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('admin/karyawan/edit', $data);
        $this->load->view('layouts/admin/footer');
    }

    public function proses_edit($id)
    {
        $data = [
            'user_id_jne' => htmlspecialchars($this->input->post('user_id_jne')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir')),
            'jk' => htmlspecialchars($this->input->post('jk')),
            'agama' => htmlspecialchars($this->input->post('agama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'telp' => htmlspecialchars($this->input->post('telp'))
        ];

        $this->db->update('karyawan', $data, ['id' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil diubah!');
        redirect('admin/karyawan');
    }

    public function hapus($id)
    {
        $this->db->delete('karyawan', ['id' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/karyawan');
    }
}

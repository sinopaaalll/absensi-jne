<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('admin', ['username' => $username])->row_array();

            // jika usernya ada
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'foto' => $user['foto'],
                        'status' => "login",
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Anda Berhasil Login.');
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Password Salah!');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('error', 'Akun Anda Belum Terdaftar');
                redirect('login');
            }
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('error', 'Anda Telah Keluar Dari Halaman');
        redirect('absensi');
    }
}

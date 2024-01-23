<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Absensi extends CI_Controller
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
        $this->load->view('admin/absensi/index', $data);
        $this->load->view('layouts/admin/footer');
    }

    public function lihat($id)
    {
        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])->row();
        $user_id_jne = $data['karyawan']->user_id_jne;
        $data['absensi'] = $this->db->get_where('absensi', ['user_id_jne' => $user_id_jne])->row();

        $this->load->view('layouts/admin/header');
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('admin/absensi/lihat', $data);
        $this->load->view('layouts/admin/footer');
    }

    public function get_filtered_absensi()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $user_id_jne = $this->input->post('user_id_jne');

        // Jika $end_date kosong, atur $end_date menjadi hari ini
        if (empty($end_date)) {
            $end_date = date('Y-m-d');
        }

        // Query database untuk mengambil data absensi berdasarkan tanggal dan user_id_jne
        $query = $this->db->query("SELECT * FROM absensi WHERE authDate BETWEEN '$start_date' AND '$end_date' AND user_id_jne = '$user_id_jne'");

        // Ambil hasil query
        $data['absensi'] = $query->result_array();

        // Load view yang berisi tabel hasil absensi
        $this->load->view('admin/absensi/filtered_absensi_view', $data);
    }

    public function get_total_absensi()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $user_id_jne = $this->input->post('user_id_jne');

        // Jika $end_date kosong, atur $end_date menjadi hari ini
        if (empty($end_date)) {
            $end_date = date('Y-m-d');
        }

        // Query database untuk mengambil data absensi berdasarkan tanggal dan user_id_jne
        $query = $this->db->query("SELECT COUNT(id) as total FROM absensi WHERE authDate BETWEEN '$start_date' AND '$end_date' AND user_id_jne = '$user_id_jne'");

        // Ambil hasil query
        $data['total'] = $query->row_array(); // Menggunakan row_array() karena hasil query menghasilkan satu baris saja

        // Load view yang berisi tabel hasil absensi
        $this->load->view('admin/absensi/total_absensi_view', $data);
    }
}

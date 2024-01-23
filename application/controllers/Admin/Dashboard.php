<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $today = date("Y-m-d");
        $data['total_masuk'] = $this->db->query("SELECT COUNT(authTime_in) as total FROM absensi WHERE authDate='$today'")->row_array();
        $data['total_pulang'] = $this->db->query("SELECT COUNT(authTime_out) as total FROM absensi WHERE authDate='$today'")->row_array();

        $this->load->view('layouts/admin/header');
        $this->load->view('layouts/admin/sidebar');
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('layouts/admin/footer');
    }

    public function get_data_absensi_masuk()
    {
        $tanggal = $this->input->post('authDate');

        $this->db->select('absensi.*, karyawan.nama as nama');
        $this->db->from('absensi');
        $this->db->where('authDate', $tanggal);
        $this->db->join('karyawan', 'karyawan.user_id_jne = absensi.user_id_jne');

        // Ambil hasil query
        $data['absensi'] = $this->db->get()->result_array(); // Menggunakan row_array() karena hasil query menghasilkan satu baris saja

        // Load view yang berisi tabel hasil absensi
        $this->load->view('admin/dashboard/tabel_masuk', $data);
    }

    public function get_data_absensi_pulang()
    {
        $tanggal = $this->input->post('authDate');

        $this->db->select('absensi.*, karyawan.nama as nama');
        $this->db->from('absensi');
        $this->db->where('authDate', $tanggal);
        $this->db->join('karyawan', 'karyawan.user_id_jne = absensi.user_id_jne');

        // Ambil hasil query
        $data['absensi1'] = $this->db->get()->result_array(); // Menggunakan row_array() karena hasil query menghasilkan satu baris saja

        // Load view yang berisi tabel hasil absensi
        $this->load->view('admin/dashboard/tabel_pulang', $data);
    }

    public function get_total_absensi_masuk()
    {
        // Ambil tanggal dari input POST
        $tanggal = $this->input->post('authDate');

        $query = $this->db->query("SELECT COUNT(authTime_in) as totalMasuk FROM absensi WHERE authDate='$tanggal'");

        // Ambil hasil query
        $result = $query->row_array();

        // Tampilkan total masuk sebagai respons
        echo $result['totalMasuk'];
    }

    public function get_total_absensi_pulang()
    {
        // Ambil tanggal dari input POST
        $tanggal = $this->input->post('authDate');

        // Query untuk menghitung total absensi pulang berdasarkan tanggal
        $query = $this->db->query("SELECT COUNT(id) as totalPulang FROM absensi WHERE authDate = '$tanggal' AND authTime_out IS NOT NULL");

        // Ambil hasil query
        $result = $query->row_array();

        // Tampilkan total pulang sebagai respons
        echo $result['totalPulang'];
    }
}

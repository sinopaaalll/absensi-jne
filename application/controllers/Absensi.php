<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Absensi extends CI_Controller
{
	public function index()
	{
		$this->load->view('form_absen');
	}

	public function submit_absen()
	{
		$user_id_jne = htmlspecialchars($this->input->post('user_id_jne'));
		$keterangan = $this->input->post('keterangan');
		$authDate = date("Y-m-d");

		// var_dump($authDate);
		// die();

		$cek = $this->db->get_where('karyawan', ['user_id_jne' => $user_id_jne])->row();

		if (!empty($cek)) {
			if ($keterangan == 'masuk') {
				$cek_absen_masuk = $this->db->query("SELECT authTime_in FROM absensi WHERE user_id_jne='$user_id_jne' AND authDate='$authDate'")->row();

				if (empty($cek_absen_masuk->authTime_in)) {
					$data = [
						'user_id_jne' => $user_id_jne,
						'authDate' => $authDate,
						'authTime_in' => date("Y-m-d H:i:s"),
						'ip_address' => $this->input->ip_address(),
					];

					$this->db->insert('absensi', $data);
					$this->session->set_flashdata('success', 'Absen masuk berhasil terinput!');
					redirect('absensi');
				} else {
					$this->session->set_flashdata('warning', 'Anda sudah melakukan absen masuk hari ini!');
					redirect('absensi');
				}
			} else {
				$cek_absen_masuk = $this->db->query("SELECT authTime_in FROM absensi WHERE user_id_jne='$user_id_jne' AND authDate='$authDate'")->row();

				if (!empty($cek_absen_masuk->authTime_in)) {
					$cek_absen_pulang = $this->db->query("SELECT id, authTime_out FROM absensi WHERE user_id_jne='$user_id_jne' AND authDate='$authDate'")->row();
					if (empty($cek_absen_pulang->authTime_out)) {

						$data = [
							'authTime_out' => date("Y-m-d H:i:s"),
						];

						$this->db->update('absensi', $data, ['id' => $cek_absen_pulang->id]);
						$this->session->set_flashdata('success', 'Absen pulang berhasil terinput!');
						redirect('absensi');
					} else {
						$this->session->set_flashdata('warning', 'Anda sudah melakukan absen pulang hari ini!');
						redirect('absensi');
					}
				} else {
					$this->session->set_flashdata('warning', 'Anda belum melakukan absen masuk hari ini!');
					redirect('absensi');
				}
			}
		} else {
			$this->session->set_flashdata('warning', 'User tidak terdaftar!');
			redirect('absensi');
		}
	}
}

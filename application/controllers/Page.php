<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
        parent::__construct();
        // $this->load->model('Mapi_so'); // Memuat model saat controller dibuat
        $this->load->model('KamarModel', 'kamar');
        $this->load->model('FasilitasModel', 'fasilitas');
		$this->load->model('AuthModel', 'auth');
    }

    // Home
	public function home()
	{
		$data['title'] = 'Home - Kost';
		$data['master_kamar'] = $this->kamar->get_data();
		$this->load->view('webpage/v_home', $data);
	}

    // Detail Kamar
    public function detail_kamar($nomor_kamar)
    {
        $data['title'] = 'Detail Kamar - Kost';
		$data['master_kamar'] = $this->kamar->get_data();
        $data['detail_kamar'] = $this->kamar->detail_kamar($nomor_kamar);
		$this->load->view('webpage/v_detail', $data);
    }

    // List Kamar
    public function list_kamar()
	{
		$data['title'] = 'List Kamar - Kost';
		$data['master_kamar'] = $this->kamar->get_data();
		// $data['detail_kamar'] = $this->kamar->detail_kamar($nomor_kamar);
		$this->load->view('webpage/v_listkamar', $data);
	}

    public function search_by_price_range() {
        $range_awal = $this->input->post('range_awal');
        $range_akhir = $this->input->post('range_akhir');

        $data['master_kamar'] = $this->kamar->get_kamar_by_price_range($range_awal, $range_akhir);
        $data['title'] = 'Home - Kost';
        // Kirim data ke view
        $this->load->view('webpage/v_home', $data);
    }

	public function register()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'nik' => $this->input->post('nik'),
			'telepon' => $this->input->post('telepon'),
			'alamat' => $this->input->post('alamat'),
			'level' => 'Penghuni'
		);

		// check jika email sudah terdaftar
		if ($this->auth->check_email_exist($data['email'])) {
			echo json_encode(array('status' => 'error', 'message' => 'Email sudah terdaftar'));
			return;
		}

		$result = $this->auth->register($data);
		if ($result) {
			echo json_encode(array('status' => 'success', 'message' => 'Anda Berhasil Registrasi'));
		}else{
			echo json_encode(array('status' => 'error', 'message' => 'Anda Gagal Registrasi'));
		}
	}

	public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->auth->check_login($email, $password);
        if ($user) {
			// Set session
			$session_data = array(
				'nama' => $user['nama']
			);
			$this->session->set_userdata($session_data);
            echo json_encode(array('status' => 'success', 'message' => 'Login successful'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Invalid email or password'));
        }
    }

	public function logout() {
        $this->session->unset_userdata('nama'); // Menghapus session 'nama'
        redirect('Page/home'); // Mengarahkan pengguna kembali ke halaman login
    }
}

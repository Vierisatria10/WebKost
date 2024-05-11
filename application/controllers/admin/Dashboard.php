<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Mapi_so'); // Memuat model saat controller dibuat
        $this->load->model('FasilitasModel', 'fasilitas');
        $this->load->model('KamarModel', 'kamar');

    }
	public function index()
	{
		$data['title'] = 'Dashboard - Kost';
        $data['jumlah_fasilitas'] = $this->fasilitas->count_fasilitas();
        $data['jumlah_kamar'] = $this->kamar->count_kamar();

        $this->template->load('admin/v_template', 'admin/v_dashboard', $data);
	}
}
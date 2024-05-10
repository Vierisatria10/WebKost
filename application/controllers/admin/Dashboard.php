<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Mapi_so'); // Memuat model saat controller dibuat
        $this->load->model('FasilitasModel', 'fasilitas');
    }
	public function index()
	{
		$data['title'] = 'Dashboard - Kost';
        $this->template->load('admin/v_template', 'admin/v_dashboard', $data);
	}
}
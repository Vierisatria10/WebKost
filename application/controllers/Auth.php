<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
        parent::__construct();
        // $this->load->model('KamarModel', 'kamar');
        // $this->load->model('FasilitasModel', 'fasilitas');
    }

	public function index()
	{
		$data['title'] = 'Login Admin - Kost';
		$this->load->view('auth/v_login', $data);
	}
}

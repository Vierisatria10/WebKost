<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home - Kost';
		$this->load->view('webpage/v_home', $data);
	}
}

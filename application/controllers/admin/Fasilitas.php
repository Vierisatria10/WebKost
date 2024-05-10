<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Mapi_so'); // Memuat model saat controller dibuat
        $this->load->model('FasilitasModel', 'fasilitas');
    }
	public function index()
	{
		$data['title'] = 'Fasilitas - Kost';
        $data['master_fasilitas'] = $this->fasilitas->get_data();
        $this->template->load('admin/v_template', 'admin/master/v_fasilitas', $data);
	}

    public function add_fasilitas() {
        $fasilitas = $this->input->post('fasilitas');
        $result = $this->fasilitas->add_fasilitas($fasilitas);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Fasilitas Berhasil ditambahkan!'
            ];
            echo json_encode($response);
        }else{
            $response = [
                'status' => 'error',
                'message' => 'Data Fasilitas Gagal ditambahkan!'
            ];
            echo json_encode($response);
        }
    }

    public function update_fasilitas() {
        $id_fasilitas = $this->input->post('id_fasilitas');
        $edit_fasilitas = $this->input->post('edit_fasilitas');

        $data = array(
            'nama' => $edit_fasilitas
        );

        $this->fasilitas->update_fasilitas($id_fasilitas, $data);
        $this->session->set_flashdata('success', 'Data Fasilitas Berhasil di Update');
        redirect('admin/fasilitas');
    }
}

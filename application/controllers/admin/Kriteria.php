<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Mapi_so'); // Memuat model saat controller dibuat
        $this->load->model('KriteriaModel', 'kriteria');
    }
	public function index()
	{
		$data['title'] = 'Kriteria - Kost';
        $data['master_kriteria'] = $this->kriteria->get_data();
        $this->template->load('admin/v_template', 'admin/master/v_kriteria', $data);
	}

    public function add_kriteria() {
        $kriteria = $this->input->post('kriteria');
        $result = $this->kriteria->add_kriteria($kriteria);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Kriteria Berhasil ditambahkan!'
            ];
            echo json_encode($response);
        }else{
            $response = [
                'status' => 'error',
                'message' => 'Data Kriteria Gagal ditambahkan!'
            ];
            echo json_encode($response);
        }
    }

    public function update_kriteria() {
        $id_kriteria = $this->input->post('id_kriteria');
        $edit_kriteria = $this->input->post('edit_kriteria');

        $data = array(
            'nama' => $edit_kriteria
        );

        $this->kriteria->update_kriteria($id_kriteria, $data);
        $this->session->set_flashdata('success', 'Data Kriteria Berhasil di Update');
        redirect('admin/kriteria');
    }

    public function hapus_kriteria()
    {
        $id_kriteria = $this->input->post('id_kriteria');
        $this->kriteria->hapus_kriteria($id_kriteria);
        $this->session->set_flashdata('success', 'Data Kriteria Berhasil di Hapus');
        redirect('admin/kriteria');
    }

}
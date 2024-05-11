<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Mapi_so'); // Memuat model saat controller dibuat
        $this->load->model('KamarModel', 'kamar');
        $this->load->model('FasilitasModel', 'fasilitas');
    }
	public function index()
	{
		$data['title'] = 'Kamar - WebKost';
        $data['master_kamar'] = $this->kamar->get_data();
        $this->template->load('admin/v_template', 'admin/master/v_kamar', $data);
	}

    public function tambah()
    {
        $data['title'] = 'Tambah Kamar - WebKost';
        $data['master_kamar'] = $this->kamar->get_data();
        $data['kode_nomor'] = $this->kamar->get_kode_nomor();
        $data['master_fasilitas'] = $this->fasilitas->get_data();
        $this->template->load('admin/v_template', 'admin/master/tambah_kamar', $data);
    }

    public function add_kamar() {
        // Form validation
        $this->form_validation->set_rules('nomor_kamar', 'Nomor Kamar', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        // Add other form validation rules as needed

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, load view with errors
            $data['title'] = 'Tambah Kamar - WebKost';
            $data['master_kamar'] = $this->kamar->get_data();
            $data['kode_nomor'] = $this->kamar->get_kode_nomor();
            $data['master_fasilitas'] = $this->fasilitas->get_data();
            $this->template->load('admin/v_template', 'admin/master/tambah_kamar', $data);
        } else {
            // Validation passed, process form data
            $nomor_kamar = $this->input->post('nomor_kamar');
            $harga = $this->input->post('harga');
            $alamat = $this->input->post('alamat');
            $keterangan = $this->input->post('keterangan');

            // Upload foto
            $config['upload_path']          = './uploads/foto/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            // $config['max_size']             = 10000; // 10MB max size, you can adjust this
            // $config['max_width']            = 1024; // You can adjust these as needed
            // $config['max_height']           = 768;
            
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                // Handle upload error
                print_r($error);
            } else {
                $foto_data = $this->upload->data();
                $foto = $foto_data['file_name'];

                // Process checkboxes for fasilitas
                $fasilitas = $this->input->post('check');
                $nama_fasilitas = implode(', ', $fasilitas); // Combine selected facilities into one string
                $jumlah_fasilitas = count($fasilitas);

                // Save data to database
                $data = array(
                    'nomor_kamar' => $nomor_kamar,
                    'harga' => $harga,
                    'alamat' => $alamat,
                    'keterangan' => $keterangan,
                    'status' => 'Belum Terpakai',
                    'foto' => $foto,
                    'nama_fasilitas' => $nama_fasilitas,
                    'jumlah_fasilitas' => $jumlah_fasilitas
                );

                $this->kamar->add_kamar($data);
                $this->session->set_flashdata('success', 'Data Kamar Berhasil di Simpan');
                redirect('admin/kamar');
                // Redirect or show success message
            }
        }
    }

    public function edit_kamar($nomor_kamar) {
        $data['title'] = 'Detail Kamar - WebKost';
        $data['master_kamar'] = $this->kamar->get_data();
        $data['kode_nomor'] = $this->kamar->get_kode_nomor();
        $data['master_fasilitas'] = $this->fasilitas->get_data();
        $data['selected_fasilitas'] = $this->kamar->get_selected_fasilitas();
        $data['edit_kamar'] = $this->kamar->edit_kamar($nomor_kamar);
        $this->template->load('admin/v_template', 'admin/master/edit_kamar', $data);
    }

    public function update_kamar($nomor_kamar)
    {
        $this->form_validation->set_rules('nomor_kamar', 'Nomor Kamar', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, load view with errors
            $data['title'] = 'Tambah Kamar - WebKost';
            $data['master_kamar'] = $this->kamar->get_data();
            $data['kode_nomor'] = $this->kamar->get_kode_nomor();
            $data['master_fasilitas'] = $this->fasilitas->get_data();
            $this->template->load('admin/v_template', 'admin/master/tambah_kamar', $data);
        } else {

           $old_filename = $this->input->post('old_foto');
           $new_filename = $_FILES['foto']['name'];

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['foto']['name']);
                $config['upload_path']          = './uploads/foto/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if (file_exists("./uploads/foto/".$old_filename)) {
                        unlink("./uploads/foto/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }

           $nomor = $this->input->post('nomor_kamar');
           $harga = $this->input->post('harga');
           $alamat = $this->input->post('alamat');
           $keterangan = $this->input->post('keterangan');

           // Process checkboxes for fasilitas
           $fasilitas = $this->input->post('check');
           $nama_fasilitas = implode(', ', $fasilitas); // Combine selected facilities into one string
           $jumlah_fasilitas = count($fasilitas);

           $data = array(
            'nomor_kamar' => $nomor,
            'harga' => $harga,
            'alamat' => $alamat,
            'keterangan' => $keterangan,
            'status' => 'Belum Terpakai',
            'foto' => $update_filename,
            'nama_fasilitas' => $nama_fasilitas,
            'jumlah_fasilitas' => $jumlah_fasilitas
           );

           $this->kamar->update_kamar($nomor_kamar, $data);
           $this->session->set_flashdata('success', 'Data Kamar Berhasil di Update');
           redirect('admin/kamar');
          
        }
    }

    public function hapus_kamar($nomor_kamar)
    {
        $nomor_kamar = $this->input->post('nomor_kamar');
        // $imam = new Imam_model;
        if ($this->kamar->checkKamarImage($nomor_kamar)) {
            $data = $this->kamar->checkKamarImage($nomor_kamar);
            if (file_exists("./uploads/foto/".$data->foto)) {
                unlink("./uploads/foto/".$data->foto);
            }
            $del = [
                'nomor_kamar' => $nomor_kamar
            ];
            $this->kamar->deleteKamar($nomor_kamar, $del);
            $this->session->set_flashdata('success', 'Data Kamar Berhasil di Hapus');
            redirect('admin/kamar');
        }
    }
}
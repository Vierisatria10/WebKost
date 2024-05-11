<?php

if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');


class FasilitasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_fasilitas');
        $query = $this->db->get()->result();
        return $query;
    }

    public function add_fasilitas($fasilitas) {
        // Simpan fasilitas ke database
        // Sesuaikan dengan struktur tabel Anda
        $data = array();
        foreach ($fasilitas as $f) {
            $data[] = array(
                'nama' => $f
            );
        }
        $result = $this->db->insert_batch('tbl_fasilitas', $data);
        return $result;
    }

    public function count_fasilitas()
    {
        return $this->db->count_all('tbl_fasilitas');
    }

    public function update_fasilitas($id_fasilitas, $data) 
    {
        $this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->update('tbl_fasilitas', $data);
    }

    public function hapus_fasilitas($id_fasilitas)
    {
        $this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->delete('tbl_fasilitas');
    }
}
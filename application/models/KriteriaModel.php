<?php

if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');


class KriteriaModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_kriteria');
        $query = $this->db->get()->result();
        return $query;
    }

    public function add_kriteria($kriteria) {
        // Simpan kriteria ke database
        // Sesuaikan dengan struktur tabel Anda
        $data = array();
        foreach ($kriteria as $f) {
            $data[] = array(
                'nama' => $f
            );
        }
        $result = $this->db->insert_batch('tbl_kriteria', $data);
        return $result;
    }

    public function update_kriteria($id_kriteria, $data) 
    {
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->update('tbl_kriteria', $data);
    }

    public function hapus_kriteria($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->delete('tbl_kriteria');
    }
}
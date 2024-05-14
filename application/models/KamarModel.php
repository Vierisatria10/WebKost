<?php

if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');


class KamarModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_kamar');
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_kode_nomor()
    {
        $this->db->select('MAX(nomor_kamar) AS max_nomor_kamar');
        $query = $this->db->get('tbl_kamar');
        $result = $query->row();

        $next_number = 1;
        if ($result->max_nomor_kamar) {
            $next_number = intval(substr($result->max_nomor_kamar, 3)) + 1;
        }

        return 'KMR' . str_pad($next_number, 4, '0', STR_PAD_LEFT);
    }

    public function add_kamar($data)
    {
        return $this->db->insert('tbl_kamar', $data);
    }

    public function edit_kamar($nomor_kamar)
    {
        $this->db->where('nomor_kamar', $nomor_kamar);
        return $this->db->get('tbl_kamar')->row();
    }

    public function get_selected_fasilitas() {
        // Ambil data fasilitas yang telah dipilih sebelumnya dari tabel tbl_kamar (atau tabel lain yang sesuai dengan struktur aplikasi Anda)
        $this->db->select('nama_fasilitas');
        $this->db->from('tbl_kamar'); // Ganti dengan nama tabel yang sesuai
        // Tambahkan kondisi untuk memfilter data sesuai kebutuhan, misalnya jika data fasilitas dipilih berdasarkan id kamar, tambahkan kondisi WHERE id_kamar = ...
        $query = $this->db->get();
        
        // Inisialisasi array untuk menyimpan nama fasilitas yang telah dipilih
        $selected_fasilitas = array();
        
        // Jika query mengembalikan hasil, ambil nama fasilitas dan masukkan ke dalam array
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                // Ubah string nama fasilitas menjadi array
                $fasilitas = explode(', ', $row->nama_fasilitas);
                // Gabungkan array fasilitas ke dalam array selected_fasilitas
                $selected_fasilitas = array_merge($selected_fasilitas, $fasilitas);
            }
        }
        
        // Hapus duplikat nama fasilitas dari array (jika ada)
        $selected_fasilitas = array_unique($selected_fasilitas);
        
        // Kembalikan array nama fasilitas yang telah dipilih
        return $selected_fasilitas;
    }

    public function update_kamar($nomor_kamar, $data)
    {
        $this->db->where('nomor_kamar', $nomor_kamar);
		$this->db->update('tbl_kamar', $data);
    }

    public function checkKamarImage($nomor_kamar)
    {
        $query = $this->db->get_where('tbl_kamar', ['nomor_kamar' => $nomor_kamar]);
        return $query->row();
    }

    public function count_kamar()
    {
        return $this->db->count_all('tbl_kamar');
    }

    public function deleteKamar($nomor_kamar, $del)
	{
		$this->db->where('nomor_kamar', $nomor_kamar);
		return $this->db->delete('tbl_kamar', $del);
	}

    public function detail_kamar($nomor_kamar)
    {
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_kamar a');
        $this->db->join('tbl_kriteria b', 'a.id_kriteria = b.id_kriteria', 'left');
        $this->db->where('nomor_kamar', $nomor_kamar);
        $query = $this->db->get()->row();
        return $query;
        // return $this->db->get_where('tbl_kamar', ['nomor_kamar' => $nomor_kamar])->row();
    }

    public function get_kamar_by_price_range($range_awal, $range_akhir) {
        $this->db->where('harga >=', $range_awal);
        $this->db->where('harga <=', $range_akhir);
        $query = $this->db->get('tbl_kamar');
        return $query->result();
    }

}
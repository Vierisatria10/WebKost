
<?php
class AuthModel extends CI_Model {
    
    public function register($data) {
        return $this->db->insert('tbl_user', $data);
    }

    public function check_login($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_user');
        $user = $query->row_array();
        
        // Verifikasi password menggunakan password_verify
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return false;
        }
    }

    public function check_email_exist($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_user');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
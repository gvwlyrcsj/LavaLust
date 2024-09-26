<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product_model extends Model {
	public function read() {
        return $this->db->table('gvcb_users')->get_all();
    }

    public function create($last_name, $first_name, $email, $gender, $address) {
        $data = array(
            'gvcb_last_name' => $last_name,
            'gvcb_first_name' => $first_name,
            'gvcb_email' => $email,
            'gvcb_gender' => $gender,
            'gvcb_address' => $address
        );
        return $this->db->table('gvcb_users')->insert($data);
    }
    //single record *get_all() pag marami
    public function get_one($id) {
        return $this->db->table('gvcb_users')->where('id', $id)->get();
    }

    public function update($id, $last_name, $first_name, $email, $gender, $address) {
        $data = array(
            'gvcb_last_name' => $last_name,
            'gvcb_first_name' => $first_name,
            'gvcb_email' => $email,
            'gvcb_gender' => $gender,
            'gvcb_address' => $address
        );
        return $this->db->table('gvcb_users')->where('id', $id)->update($data);
    }

    public function delete($id) {
        return $this->db->table('gvcb_users')->where('id', $id)->delete();
    }  
}
?>

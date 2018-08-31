<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

    public function read(){
        $users = $this->db->get('users');
        return $users;
    }
         
    public function create($data)
    {
        $user = $this->db->insert('users', $data);
        return $user;
    }
 
    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        $user = $this->db->get('users');
        return $user->row();
    }
 
    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
 
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
    public function get_by_email_password($email="", $password=""){

        $user = $this->db->get_where('users', array('email'=>$email,'password'=>$password));
        $user = $user->result_array();
        return $user;
    }


}
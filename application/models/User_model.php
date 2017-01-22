<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function check($email, $password) {
    	$this->db->select('*');
        $this->db->where('email', $email);
        $q = $this->db->get('users');
        $data = $q->row_array();
        if ($email == $data['email'] && $password == $data['password']) {
            return true;
        } else {
           return false;
        }
    }
}
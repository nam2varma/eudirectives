<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_Certificate($certificate_no){
        $this->db->where('certificate_no', $certificate_no);
        $this->db->where('is_delete', 0);
        $result = $this->db->get('certificates');
        return $result->row_array();
    }

    public function add_certificate($record_array){
        if ($this->db->insert('certificates', $record_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function edit_certificate($certificate_no, $record_array){
        $this->db->where('certificate_no', $certificate_no);
        if ($this->db->update('certificates', $record_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function get_all_certificates(){
        $this->db->where('is_delete', 0);
        $records = $this->db->get('certificates');
        return $records->result_array();
    }

    public function delete_certificate($certificate_no){
        $record_array = array('is_delete' => 1);
        $this->db->where('certificate_no', $certificate_no);
        if ($this->db->update('certificates', $record_array)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function add_certificate_no($id, $certificate_no){
        $data = array(
            'certificate_no' => $certificate_no
            );
        if ($this->db->update('certificates', $data)) {
            return 1;
        } else {
            return 0;
        }
    }
}
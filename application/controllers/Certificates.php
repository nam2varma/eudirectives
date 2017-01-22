<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificates extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Certificate_model');
    }

	public function index(){
		$data = array();
		$certificate = array();
		if($this->input->get('search')){
			if($this->input->get('search')!=''){
				$certificate = $this->Certificate_model->get_certificate($this->input->get('search'));
				if(!empty($certificate)){
					$data['certificate'] = $certificate;
				}else{
					$this->session->set_flashdata('msg', 'Certificate Not Found');
				}
			}
		}
		$this->template->load('page', 'frontend/certificate', $data);
	}
}

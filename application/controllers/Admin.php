<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Certificate_model');
    }

	public function login(){
		$data = array();

		if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if($this->User_model->check($email, $password)){
            	$this->session->set_userdata('admin', true);
            	redirect('admin');
            }
        }
		$this->template->load('admin_login', 'admin/login', $data);
	}

	public function index(){
		if(!$this->session->userdata('admin')){
			redirect('admin/login');
		}
		$data = array();
		$this->template->load('admin', 'admin/dashboard', $data);
	}

	public function certificates(){
		$data = array();
		$certificates = $this->Certificate_model->get_all_certificates();
		$data['certificates'] = $certificates;
		$this->template->load('admin', 'admin/certificates/index', $data);
	}

	public function add_certificate(){
		$data = array();
		$data['title'] = 'Add Certificate';
		if($this->input->post()){
			$_POST['created'] = date('Y-m-d');
			$insert_data = $this->input->post();
			$this->Certificate_model->add_certificate($insert_data);
			$inserted_id = $this->db->insert_id();
			$certificate_no = substr($this->input->post('org_name'),0,3).'-0'.$inserted_id;
			$this->Certificate_model->add_certificate_no($inserted_id, $certificate_no);
			$this->session->set_flashdata('msg', 'Certificate Added Successfully');
			redirect('admin/certificates');
		}
		$this->template->load('admin', 'admin/certificates/add', $data);
	}

	public function edit_certificate($certificate_no){
		$data = array();
		$data['title'] = 'Edit Certificate';
		$certificate = $this->Certificate_model->get_certificate($certificate_no);

		$data['certificate'] = $certificate;
		if($this->input->post()){
			$insert_data = $this->input->post();

			if($this->Certificate_model->edit_certificate($certificate_no, $insert_data)){
					$this->session->set_flashdata('msg', 'Certificate Updated Successfully');
					redirect('admin/certificates');
			}
		}

		$this->template->load('admin', 'admin/certificates/add', $data);
	}

	public function delete_certificate($certificate_no){
		$this->Certificate_model->delete_certificate($certificate_no);
		$this->session->set_flashdata('msg', 'Certificate Deleted Successfully');
		redirect('admin/certificates');
	}

	public function logout(){
		$this->session->unset_userdata('admin');
		redirect('admin/login');
	}
	
}


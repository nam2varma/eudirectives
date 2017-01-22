<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index(){
		// pr($_SERVER);
		$data = array();
		$this->template->load('home', 'frontend/home', $data);
	}

	public function about_us(){
		$data = array();
		$this->template->load('page', 'frontend/about_us', $data);
	}

	public function contact_us(){
		$data = array();
		$this->template->load('page', 'frontend/contact_us', $data);
	}

	public function services(){
		$data = array();
		$this->template->load('page', 'frontend/services', $data);
	}


}
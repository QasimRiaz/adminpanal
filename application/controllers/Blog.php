<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){

		parent::__construct();

	
		//$this->load->model('blog/home_model', 'home_model');

	}

	
	
		public function index(){

			$data['title'] = 'Home';
	
			$this->load->view('blog/includes/_header', $data);
			$this->load->view('blog/includes/_nav_bar', $data);
			$this->load->view('blog/home/index_home');
			$this->load->view('blog/includes/_footer');
	
		}
	

	
}

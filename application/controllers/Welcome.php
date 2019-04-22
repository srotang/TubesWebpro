<?php

class Home extends CI_Controller{
	public function index(){
		$this->load->view('default_header');
		$this->load->view('browse');
		$this->load->view('footer');
	}

}
<?php

class Home extends CI_Controller{
	public function index(){
		$this->load->view('template/default-header');
		$this->load->view('home/browse');
		$this->load->view('template/footer');
	}

}
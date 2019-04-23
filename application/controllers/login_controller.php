<?php

class Login extends CI_Controller{
	public function index(){
		$this->load->view('template/default-header');
		$this->load->view('template/navigator');
		$this->load->view('home/browse');
		$this->load->view('template/footer');
	}

}

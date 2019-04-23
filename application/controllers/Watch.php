<?php

class Watch extends CI_Controller{
	public function index(){
		$this->load->view('template/loggedin-header');
		$this->load->view('template/navigator');
		$this->load->view('home/watch');
		$this->load->view('template/footer');
	}
}

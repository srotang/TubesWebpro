<?php

class Profile extends CI_Controller{
	public function index(){
		$this->load->view('template/loggedin-header');
		$this->load->view('profile/profile');
		$this->load->view('template/footer');
	}
}

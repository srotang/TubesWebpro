<?php

class Loggedin extends CI_Controller{
	public function index(){
		$this->load->model('M_foto');
		$data['contents']=$this->M_foto->getAllfoto();
		$this->load->view('template/loggedin-header');
		$this->load->view('template/navigator');
		$this->load->view('home/browse',$data);
		$this->load->view('template/footer');
	}
}

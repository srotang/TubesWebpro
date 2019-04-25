<?php

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();	
		$this->load->library('simple_login');
		
		$this->CI =& get_instance();
		$this->load->model('M_foto');
	}
	public function index(){
		if( $this->CI->session->userdata('username') == '' ){
			$this->load->view('template/default-header');
		}
		else {
			$this->load->view('template/loggedin-header');
		}
		// $this->load->view('template/navigator');
		// $this->load->view('home/browse');
		// $this->load->view('template/footer');
		$data['contents']=$this->M_foto->getAllfotoAndCreator();
		$this->load->view('template/navigator');
		$this->load->view('home/browse',$data);
		$this->load->view('template/footer');
	}
	
	public function post(){
		if( $this->CI->session->userdata('username') == '' ){
			$this->load->view('template/default-header');
		}
		else {
			$this->load->view('template/loggedin-header');
		}
		$this->load->view('template/navigator');
		$this->load->view('home/post');
		$this->load->view('template/footer');
	}
	
}

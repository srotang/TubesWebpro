<?php

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();	
		$this->load->library('simple_login');
		
		$this->CI =& get_instance();
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
		
		$this->load->model('M_foto');
		$data['contents']=$this->M_foto->getAllfoto();
		$this->load->view('template/navigator');
		$this->load->view('home/browse',$data);
		$this->load->view('template/footer');
	}
	
}

<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->view('template/default-header');
		$this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
		$this->load->model('M_akun');
	}

	function index(){
		$this->load->view('home/login');
		$this->load->view('template/footer');
	}
	public function asup(){
		$valid = $this->form_validation;
		$username = $this->input->post('cusername');
		$password = $this->input->post('password1');
		$valid->set_rules('cusername','cusername','required');
		$valid->set_rules('password1','password1','required');
		if($valid->run()){
			$this->simple_login->login($username,$password);

			redirect('index.php/Home');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
--<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
		$this->load->model('M_akun');

	}

	function index(){
		$this->load->view('home/login');
	}
	public function asup(){
		$valid = $this->form_validation;
		$username = $this->input->post('cusername');
		$password = $this->input->post('password1');
		$valid->set_rules('cusername','cusername','required');
		$valid->set_rules('password1','password1','required');
		
		if($valid->run()){
			$this->simple_login->login($username,$password);
		}
	}

	// function login(){
	// 	$username = $this->input->post('cusername');
	// 	$password = $this->input->post('password1');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	$cek = $this->M_login->cek_login("admin",$where)->num_rows();
	// 	if($cek > 0){

	// 		$data_session = array(
	// 			'nama' => $username,
	// 			'status' => "login"
	// 			);

	// 		$this->session->set_userdata($data_session);

	// 		redirect(base_url("admin"));

	// 	}else{
	// 		echo "Username dan password salah !";
	// 	}
	// }

	// function logout(){
	// 	$this->session->sess_destroy();
	// 	redirect(base_url('login'));
	// }
}
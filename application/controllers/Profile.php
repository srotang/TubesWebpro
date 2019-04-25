<?php

class Profile extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model("M_akun");
		//load library form validation
		$this->load->library('form_validation');
	}

	public function index(){

		}

	public function profile($username){
		$data['judul'] = 'Profile';
		$data['deviant'] = $this->M_akun->getdeviantsById($username);

		$this->load->view('template/loggedin-header');
		$this->load->view('profile/profile', $data);
		$this->load->view('template/footer');
	}
		
  public function gallery(){
    $this->load->view('template/loggedin-header');
		$this->load->view('profile/gallery');
		$this->load->view('template/footer');
    }
    public function submit(){
    $this->load->view('template/loggedin-header');
		$this->load->view('profile/submit');
		$this->load->view('template/footer');
    }
}

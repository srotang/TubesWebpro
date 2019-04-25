<?php

class Profile extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_akun");
		$this->load->model("M_foto");
		$this->load->library('form_validation');
		$this->load->library('simple_login');
		
		$this->CI =& get_instance();
	}

	public function index(){
		$this->load->view('template/loggedin-header');
		$this->load->view('profile');
		$this->load->view('template/footer');
		}

	public function profile($username){
		$data['judul'] = 'Profile';
		$data['deviant'] = $this->M_akun->getdeviantsById($username);
		$id = $data['deviant']['id_deviants'];
		$watcherrss = $this->M_akun->getWatchers($id);
		$array_username = array();
		foreach($watcherrss as $wtch){
			$array_username[] = ($this->M_akun->getdeviantsUsername($wtch['watchers']))['username'];
		}
		$data['contents'] = $this->M_foto->getuserContent($id);
		$data['watchers'] = $array_username;
		$this->load->view('template/loggedin-header');
		$this->load->view('profile/profile', $data);
		$this->load->view('template/footer');
	}
		
		public function gallery($username){
			$data['judul'] = 'Profile';
			$data['deviant'] = $this->M_akun->getdeviantsById($username);
			$id = $data['deviant']['id_deviants'];
			$data['contents'] = $this->M_foto->getuserContent($id);
			$this->load->view('template/loggedin-header');
			$this->load->view('profile/gallery',$data);
			$this->load->view('template/footer');
		}
    public function submit(){
			$this->load->view('template/loggedin-header');
			$this->load->view('profile/submit');
			$this->load->view('template/footer');
    }
}
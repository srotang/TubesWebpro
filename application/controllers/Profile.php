<?php

class Profile extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_akun");
		$this->load->model("M_foto");
		$this->load->library('form_validation');
		$this->load->library('simple_login');
		$this->load->helper(array('form', 'url'));
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
		public function fotoP(){
		$config['upload_path']          = 'assets/upload';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 10240;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			//$data = array('upload_data' => $this->upload->data());
            $file = $this->upload->data();
            $gambar = $file['file_name'];
						$id = $this->session->userdata('id_deviants');
						$this->M_akun->ubahfotoprofile($id,$gambar);
						
				$this->session->set_flashdata("sukses","Asup boiiiiiii......"); 

			$direksi = 'index.php/Profile/gallery/'.$this->session->userdata('username');
			redirect(base_url($direksi));
		}
	}
}
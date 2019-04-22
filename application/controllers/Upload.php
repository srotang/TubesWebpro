<?php 

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
          $this->load->helper(array('form', 'url'));
          $this->load->model('M_upload');
	}

	public function index(){
        $this->load->view('profile/submit');
		//$this->load->view('v_upload', array('error' => ' ' ));
	}

	public function aksi_upload(){
		$config['upload_path']          = 'assets/upload';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			//$data = array('upload_data' => $this->upload->data());
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $data = array(
                "content_dir" => $gambar,
                "id_deviants" => $this->session->userdata('id'),
                "content_title" => $this->input->post("devtitle"),
                "content_desc" => $this->input->post("devDesc"),
            );
            $this->M_upload->tambahDataContent($data);
            $this->session->set_flashdata("sukses","Asup boiiiiiii......"); 
            $this->load->view('profile/gallery', $data);
		}
	}
	
}
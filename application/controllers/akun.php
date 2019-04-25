<?php
 
class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_akun');
		
		$this->load->library('form_validation');
	}


	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Mahasiswa';

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if($this->form_validation->run() == FALSE){
			$this->load->view('',$data);
			$this->load->view('',$data);
			$this->load->view('');
		}
		//else, when successed {
		else {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		$this->M_akun->tambahDataakun();
		//use flashdata to to show alert "added success"
		$this->session->set_flashdata('flash', 'ditambahkan');
		//back to controller mahasiswa }
		redirect('main');
		}
	}

	public function hapus($id)
	{
		//call method hapusDataMahasiswa with parameter id from mahasiswa_model
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		//use flashdata to show alert "dihapus"
		$this->session->set_flashdata('flash', 'dihapus');
		//back to controller mahasiswa
		redirect('mahasiswa');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Elektro', 'DKV', 'MBTI'];

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		//conditon in form_validation, if user input form = false, then load page "ubah" again
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/ubah',$data);
			$this->load->view('templates/footer');
		}
		//else, when successed {
		else {
		//call method "ubahDataMahasiswa" in Mahasiswa_model
		$this->Mahasiswa_model->ubahDataMahasiswa();
		//use flashdata to to show alert "data changed successfully"
		$this->session->set_flashdata('flash', 'data changed successfully');
		//back to controller mahasiswa }
		redirect('mahasiswa');
		}
	}
}

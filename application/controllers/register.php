<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_akun');
     }
 
     public function index() {
 
         $this->load->view('home/register');
     }

     public function daftarRegister(){
        //$this->form_validation->set_rules('nama', 'NAME','required');
        $this->form_validation->set_rules('cusername', 'USERNAME','required');
        $this->form_validation->set_rules('email1','EMAIL','required|valid_email');
        $this->form_validation->set_rules('password1','PASSWORD','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('home/register');
            echo $this->input->post('email');
        }else{
            //$data['nama']   =    $this->input->post('name');
            $data['username'] =    $this->input->post('cusername');
            $data['email']  =    $this->input->post('email1');
            $data['password'] =    md5($this->input->post('password1'));

            $this->M_akun->tambahDatadeviants($data);
            
            $pesan['message'] =    "Pendaftaran berhasil";
            
            redirect('index.php/home');
        }
     }
 }
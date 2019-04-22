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
 
         $this->form_validation->set_rules('nama', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('home/browse');
         }else{
 
             $data['nama']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
 
             $this->m_account->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('home/browse');
         }
     }
 }
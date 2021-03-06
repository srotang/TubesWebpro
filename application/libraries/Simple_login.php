 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Simple_login {
 
     var $CI = NULL;
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('deviants',array('username'=>$username,'password' => md5($password)));

         if($query->num_rows() == 1) {
             $deviants  = $query->row_array();
             //ambil data user berdasar username
             $this->CI->db->select('id_deviants,nama, username,email');
             $this->CI->db->from('deviants');
             $this->CI->db->where('deviants.username',$username);
             $row = $this->CI->db->get();
             $admin     = $row->row();
             $id   = $admin->id_deviants;
             $profile_pic = $deviants['fotoProfile'];
 
             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('pic', $profile_pic);
             $this->CI->session->set_userdata('id', $id);
 
             //redirect ke halaman dashboard
             redirect('Loggedin');
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
 
             //redirect ke halaman login
             redirect('Login');
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
    
         if($this->CI->session->userdata('username') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('sukses','Anda belum login');
            
             //alihkan ke halaman login
             // redirect('login_controller');
         }else{
             return true;
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect('login_controller');
     }
 }
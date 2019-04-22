<?php

class M_akun extends CI_model
{

	public function getAllakun()
	{
		//use query builder to get data table "akun"
		return $this->db->get('akun')->result_array();
	}

	public function tambahDataakun()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"password" => $this->input->post('password', true)
		];

		//use query builder to insert $data to table "akun"
		$this->db->insert('akun', $data);
	}
	public function tambahfotoprofile($foto)
	{
		$this->db->insert('fotoprofile',$foto);
	}
	public function hapusDataakun($email)
	{
		//use query builder to delete data based on email 
		return $this->db->delete('akun', array('email' => $email));
	}

	public function getakunById($email)
	{
		//get data akun based on email 
		return $this->db->get_where('akun', ['email'=>$email])->row_array();
	}

	public function ubahDataakun()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"password" => $this->input->post('password', true)
		];
		
		$this->db->update('akun', $data);
	}
}

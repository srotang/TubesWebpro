<?php

class M_akun extends CI_model
{

	public function getAlldeviants()
	{
		//use query builder to get data table "deviants"
		return $this->db->get('deviants')->result_array();
	}

	public function tambahDatadeviants($data)
	{

		//use query builder to insert $data to table "deviants"
		$this->db->insert("deviants", $data);
	}
	public function tambahfotoprofile($foto)
	{
		$this->db->insert('deviants',$foto);
	}
	public function hapusDatadeviants($id)
	{
		//use query builder to delete data based on email 
		return $this->db->delete('deviants', array('email' => $email));
	}

	public function getdeviantsById($email)
	{
		//get data deviants based on email 
		return $this->db->get_where('deviants', ['email'=>$email])->row_array();
	}

	public function ubahDatadeviants()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"password" => $this->input->post('password', true),
			"username"=>$this->input->post('username',true),
		];
		$this->db->update('deviants', $data);
	}
}
?>
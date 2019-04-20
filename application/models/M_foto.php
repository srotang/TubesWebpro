<?php
 
class M_foto extends CI_model
{

	public function getAllfoto()
	{
		//use query builder to get data table "foto"
		return $this->db->get('foto')->result_array();
	}

	public function tambahDatafoto()
	{
		$data = [
			"title" => $this->input->post('title', true)
		];
		//use query builder to insert $data to table "foto"
		$this->db->insert('foto', $data);
	}

	public function hapusDatafoto()
	{
		$this->db->delete('idF');
	}

	public function getfotoBynama($namaF)
	{
		 
		return $this->db->get_where('foto', ['namaf'=>$namaF])->row_array();
	}
}

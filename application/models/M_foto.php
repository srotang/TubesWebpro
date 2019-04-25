<?php
 
class M_foto extends CI_model
{

	public function getAllfoto()
	{
		//use query builder to get data table "foto"
		return $this->db->get('contents')->result();
	}

	public function getuserContent($id){
		$query = $this->db->get_where("contents", array('id_deviants'=> $id));
		return $query->result_array();
	}

	public function tambahDatafoto()
	{
		$data = [
			"namaF" => $this->input->post('namaF', true)
		];

		//use query builder to insert $data to table "foto"
		$this->db->insert('foto', $data);
	}

	public function hapusDatafoto()
	{
		$this->db->delete('foto');
	}

	public function getfotoBynama($namaF)
	{
		return $this->db->get_where('foto', ['namaf'=>$namaF])->row_array();
	}
}

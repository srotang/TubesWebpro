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
		public function getfotoByid($id)
	{ 
		return $this->db->get_where('foto', ['id'=>$id])->row_array();
	}
}	
?>
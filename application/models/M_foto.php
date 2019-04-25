<?php
 
class M_foto extends CI_model
{

	public function getAllfoto()
	{
		//use query builder to get data table "foto"
		return $this->db->get('contents')->result_array();
	}

	public function getAllfotoAndCreator(){
		$text = "SELECT id_contents, deviants.username as username, deviants.fotoProfile as fotoProfile, contents.content_dir as content_dir, contents.content_title as content_title From contents INNER JOIN deviants on deviants.id_deviants=contents.id_deviants";
		$query = $this->db->query($text);
		return $query->result_array();
	}

	public function getuserContent($id){
		$query = $this->db->get_where("contents", array('id_deviants'=> $id));
		return $query->result_array();
	}
	public function getimgContent($id){
		$text = "SELECT deviants.fotoProfile as fotoprofile ,deviants.username as username, contents.id_contents as id_contents,contents.content_title as content_title,contents.content_desc as content_desc,contents.content_dir as content_dir from contents join deviants on contents.id_deviants = deviants.id_deviants where id_contents = $id";
		$query = $this->db->query($text);
		return $query->row();
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

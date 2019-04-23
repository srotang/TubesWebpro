<?php

class M_upload extends CI_model
{
	public function tambahDataContent($data)
	{
		//use query builder to insert $data to table "deviants"
		$this->db->insert("contents", $data);
	}
	public function tambahDataprofile($data)
	{
		//use query builder to insert $data to table "deviants"
		$this->db->insert("", $data);
	}
}
?>
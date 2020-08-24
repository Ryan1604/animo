<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Excel extends CI_Model
{

	function select()
	{
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('pendaftar');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('pendaftar', $data);
	}
}

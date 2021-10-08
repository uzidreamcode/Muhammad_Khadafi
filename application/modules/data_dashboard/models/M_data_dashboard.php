<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_dashboard extends CI_Model {

	function hit_siswa()
	{
		$this->db->select('*')
		->from('siswa');
		$query = $this->db->get();
		return $query->num_rows();
	}
	function tampilkelas()
	{
		return $this->db->get('kelas')->result();
	}
	
	
}
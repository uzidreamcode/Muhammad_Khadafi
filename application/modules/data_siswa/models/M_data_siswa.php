<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_siswa extends CI_Model {

	function tampilsiswa()
	{
		return $this->db->get('data_siswa')->result();
	}
	
	// ini fungsi buat tambah siswa
	function tambah(){
		$nama_siswa		= $this->input->post('nama_siswa');
		$alamat_siswa	= $this->input->post('alamat_siswa');

		$data = array(
			'nama_siswa'		=> $nama_siswa,
			'alamat_siswa'		=> $alamat_siswa,
		);
		
		$this->db->insert('data_siswa', $data);
	}
    
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_siswa extends CI_Model {

	function tampilsiswa()
	{
		return $this->db->get('siswa')->result();
	}
	
	// ini fungsi buat tambah siswa
	function tambah(){
		$nama_siswa		= $this->input->post('nama_siswa');
		$nisn	= $this->input->post('nisn');
		$kelas		= $this->input->post('kelas');

		$data = array(
			'nama_siswa'		=> $nama_siswa,
			'nisn'		=> $nisn,
			'kelas_siswa'		=> $kelas,
		);
		
		$this->db->insert('siswa', $data);
	}
    
}
?>
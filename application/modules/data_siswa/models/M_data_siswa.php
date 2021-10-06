<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_siswa extends CI_Model {

	function tampilsiswa()
	{
		return $this->db->from('siswa')
		->join('kelas', 'kelas.id_kelas = siswa.id_kelas')
		->get()
		->result();

	}
	function tampilkelas()
	{
		return $this->db->get('kelas')->result();
	}
	
	// ini fungsi buat tambah siswa
	function tambah(){
		$nama_siswa		= $this->input->post('nama_siswa');
		$nisn	= $this->input->post('nisn');
		$kelas		= $this->input->post('kelas');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
		{
			if ($this->upload->do_upload('gambar'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'nama_siswa'			=> $nama_siswa,
					'nisn'		=> $nisn,
					'id_kelas'		=> $kelas,
					
					'foto_siswa' 				=> $gbr['file_name'],
					
				);
				$this->db->insert('siswa', $data);

			}	 
		}
		else{
			$data = array(
				'nama_siswa'			=> $nama_siswa,
				'nisn'		=> $nisn,
				'id_kelas'		=> $kelas,
				'foto_siswa' 				=> "kosong1.png",
			);
			$this->db->insert('siswa', $data);

		}

	}
}
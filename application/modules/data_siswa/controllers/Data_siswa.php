<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_siswa extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_siswa');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_siswa",
			'namafileview' 	=> "V_data_siswa",
			'tampil'     => $this->m_data_siswa->tampilsiswa(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	// control tambah siswa
	function tambah(){
		$this->m_data_siswa->tambah();
		redirect('data_siswa');
	}
    
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_dashboard');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_dashboard",
			'namafileview' 	=> "V_data_dashboard",
			'tampil'     => $this->m_data_dashboard->tampilsiswa(),
			'tampil_kelas'     => $this->m_data_dashboard->tampilkelas(),

		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	// control tambah siswa
	function tambah(){
		$this->m_data_dashboard->tambah();
		redirect('data_dashboard');
	}
	function edit(){
		$id = $this->input->post('id_siswa');
		$this->m_data_dashboard->edit($id);
		redirect('data_dashboard');
	}

    
}
?>
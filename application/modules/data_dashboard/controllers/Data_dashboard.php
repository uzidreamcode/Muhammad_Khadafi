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
			'hit_siswa'     => $this->m_data_dashboard->hit_siswa(),

		);
		echo Modules::run('template/tampilCore', $data);
	}
    
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_login extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_login');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_login",
			'namafileview' 	=> "V_data_login",
			'hit_siswa'     => $this->m_data_login->hit_siswa(),

		);
		echo Modules::run('Template_login/tampilCore', $data);
	}
    
}
?>
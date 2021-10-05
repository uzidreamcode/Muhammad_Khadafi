<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_guru');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_guru",
            'namafileview' 	=> "V_data_guru",
            'dataguruku'    => $this->m_data_guru->tampilguru(),
		);
		echo Modules::run('template/tampilCore', $data);
    }

    function tambahguru(){
        $this->m_data_guru->simpanguru();
        redirect('data_guru');
    }
}
?>
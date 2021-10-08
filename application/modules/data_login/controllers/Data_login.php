<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_login extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_master_userid');

		$this->load->model('M_session');
	}

	
	// index
	function index()
	{
		if ( empty( $this->session->userdata('session_id') ) )
		{
			$data = array (
				'getCek' => $this->M_session->getCek(),
				'cekAdmin' => $this->M_master_userid->cekAdmin(),
				
			);
			$this->load->view('v_data_login',$data);
		} else {

			// sudah login
			redirect('data_guru');
		}
	}

}
?>
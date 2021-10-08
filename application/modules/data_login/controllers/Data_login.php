<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_login extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_master_userid');

		$this->load->model('M_session');
		 $this->load->model('m_data_login');
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

	function proses_login()
	{
		// POST
		$getUser = $this->input->post('username');
		$getPassword = sha1($this->input->post('password'));
		// Get Data
		$getData = $this->M_master_userid->getCredential($getUser, $getPassword);

		// check
		if ( ! empty($getData) )
		{
			// masukan ke  dalam session
			$this->M_session->store_session( $getData->id_admin );

			// flashdata
			$this->session->set_flashdata('msg', 'greeting');

			redirect('data_guru');
		} else { // gagal login

			$this->session->set_flashdata('msg', 'loginError');
			redirect('data_login');
		}

	}

}
?>
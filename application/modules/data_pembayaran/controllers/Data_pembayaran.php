<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_pembayaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_pembayaran');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_pembayaran",
			'namafileview' 	=> "V_data_pembayaran",
			'tampil'		=> $this->m_data_pembayaran->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_pembayaran->tambah();
		redirect('data_pembayaran');
	}

	function edit()
	{
		$this->m_data_pembayaran->edit();
		redirect('data_pembayaran');
		
	}

	function hapus($id)
	{
		$this->m_data_pembayaran->hapus($id);
		redirect('data_pembayaran');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_pembayaran",
			'namafileview' 	=> "V_data_pembayaran",
			'tampil'		=> $this->m_data_pembayaran->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 
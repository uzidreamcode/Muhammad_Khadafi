<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pembayaran extends CI_Model {

	function tampil()
	{
		return $this->db->get('pembayaran')->result();
	}

	function tambah()
	{
		$total_pembayaran 		= $this->input->post('total_pembayaran');
		$batas_pembayaran	= $this->input->post('batas_pembayaran');
		$keterangan	= $this->input->post('keterangan');
		

				$data = array(
					'total_pembayaran'		=> $total_pembayaran,
					'batas_pembayaran' 				=> $batas_pembayaran,
					'keterangan' 				=> $keterangan,
					
					
				);
				$this->db->insert('pembayaran', $data);
			
	
		
	}

	function edit()
	{
		$id_pembayaran = $this->input->post('id_pembayaran');
		$total_pembayaran = $this->input->post('total_pembayaran');
		$batas_pembayaran	= $this->input->post('batas_pembayaran');
		$keterangan	= $this->input->post('keterangan');

				$data = array(
					'total_pembayaran'		=> $total_pembayaran,
					'batas_pembayaran'		=> $batas_pembayaran,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_pembayaran',$id_pembayaran)->update('pembayaran', $data);
		
	}
	

	function hapus($id)
	{
		$this->db->where('id_pembayaran', $id)->delete('pembayaran');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pembayaran',$cari)->get('pembayaran')->result();
	}
}
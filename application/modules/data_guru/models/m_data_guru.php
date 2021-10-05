<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_guru extends CI_Model {

	function tampilguru()
	{
		return $this->db->get('data_guru')->result();
    }
    function simpanguru(){
        $namaguru   =   $this->input->post('nama_guru');
        $alamatguru =   $this->input->post('alamat_guru');

        $data = array(
			'nama_guru'		=> $namaguru,
			'alamat_guru'	=> $alamatguru,
		);
		$this->db->insert('data_guru', $data);

    }
    
}
?>
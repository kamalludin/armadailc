<?php
class Model_armada extends CI_Model{
    
    function list_armada($query){
        $hasil = $this->db->query($query);
        return $hasil;
    }

    function cabang($kode_kota){
    	return $this->db->get_where('cabang',array('kode_kota'=>$kode_kota));
    }

    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}
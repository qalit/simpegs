<?php

/**
 * 
 * @author y3d0wn
 * class models Pegawai
 */


class Pegawai extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function ambilData(){
		$query = $this->db->get('tbl_pegawai');
		return $query->result();
	}
	
	function insert($insertData){
		$query = $this->db->insert('tbl_pegawai', $insertData);
	}
}

/**
 *
 */
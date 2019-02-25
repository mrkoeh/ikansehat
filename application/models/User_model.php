<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	// fungsi menampilkan data 
	function datapengguna()
	{
	    $this->db->select('*');
	    $this->db->from('users');
	    $query = $this->db->get();
	    return $query->result_array();
	}

	// fungsi untuk menyimpan data
		function simpandata($table,$data){
		return $this->db->insert($table,$data);
	}

	// fungsi mengambil data berdasarkan kondisi
		 function Get_data_byid($table,$where = '') {
		return $this->db->query("SELECT * from $table $where;");	
	}
	//fungsi untuk update data
		function updateData($table,$data,$id){
		return $this->db->update($table,$data,$id);
	}

	// fungsi untuk menghapus data
		function hapusData($table,$where){
		return $this->db->delete($table,$where);
	}

}

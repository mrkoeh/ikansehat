<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikan_model extends CI_Model {

	// fungsi menampilkan data 
	// function datagejala($limit, $start)
	// {
 //        $query = $this->db->get('gejala', $limit, $start);
 //        return $query;
	// }


	function dataikan()
	{
        $query = $this->db->get('ikan');
        return $query;
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

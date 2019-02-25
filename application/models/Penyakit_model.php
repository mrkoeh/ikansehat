<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit_model extends CI_Model {

	// fungsi menampilkan data 
	function datapenyakit()
	{
	    $this->db->select('*');
	    $this->db->from('jenispenyakit');
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

	public function penyakit_gejala()
	{
		$this->db->select('jenispenyakit.kode,jenispenyakit.jenis_penyakit,gejalapenyakit.nama_gejala,gejalapenyakit.kode AS gejala_kode, jenispenyakit.gambar')
		         ->from('jenispenyakit')
		         ->join('gejalapenyakit', 'jenispenyakit.kode_gejala_awal = gejalapenyakit.kode','left');
		$result = $this->db->get();	
		return $result->result_array();
	}

}

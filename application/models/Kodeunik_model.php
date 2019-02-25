<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kodeunik_model extends CI_Model {

    function kode_gejala(){

            $this->db->select('Right(gejalapenyakit.kode,2) as kode ',false);
            $this->db->order_by('kode', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('gejalapenyakit');
            if($query->num_rows() <> 0){
                $data = $query->row();
                $kode = intval($data->kode) + 1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,2,"0",STR_PAD_LEFT);
            $kodejadi  = "G".$kodemax;
            return $kodejadi;        
    }


    function kode_penyakit(){
    	
            $this->db->select('Right(jenispenyakit.kode,2) as kode ',false);
            $this->db->order_by('kode', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('jenispenyakit');
            if($query->num_rows() <> 0){
                $data = $query->row();
                $kode = intval($data->kode) + 1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,2,"0",STR_PAD_LEFT);
            $kodejadi  = "P".$kodemax;
            return $kodejadi;        
    }

    function kode_solusi(){
        
            $this->db->select('Right(solusipenyakit.kode,2) as kode ',false);
            $this->db->order_by('kode', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('solusipenyakit');
            if($query->num_rows() <> 0){
                $data = $query->row();
                $kode = intval($data->kode) + 1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,2,"0",STR_PAD_LEFT);
            $kodejadi  = "S".$kodemax;
            return $kodejadi;        
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan_model extends CI_Model {

	// fungsi menampilkan data 
    function get_knowlage($limit, $start){
        $query = $this->db->get('jenispenyakit', $limit, $start);
        return $query;
    }

}

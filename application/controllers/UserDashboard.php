<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller {
   
   public function __construct(){
    parent::__construct();
	if (!$this->session->userdata('username'))
	{
		redirect(base_url());
	}
  $this->load->model('penyakit_model');
  $this->load->model('pengetahuan_model');  
 }



  public function penyakit()
  {

    $config['base_url'] = base_url().'UserDashboard/penyakit'; //site url
    $config['total_rows'] = $this->db->count_all('jenispenyakit'); //total row
    $config['per_page'] = 50;  //show record per halaman
    $config["uri_segment"] = 3;  // uri parameter
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagination">';
    $config['full_tag_close']   = '</div>';
    $config['num_tag_open']     = '<a href="#" class="page">';
    $config['num_tag_close']    = '</a>';
    $config['cur_tag_open']     = '<a href="#" class="page active">';
    $config['cur_tag_close']    = '</a>';
    $config['next_tag_open']    = '<a href="#" class="page">';
    $config['next_tagl_close']  = '</a>';
    $config['prev_tag_open']    = '<a href="#" class="page">';
    $config['prev_tagl_close']  = '</a>';
    $config['first_tag_open']   = '<a href="#" class="page">';
    $config['first_tagl_close'] = '</a>';
    $config['last_tag_open']    = '<a href="#" class="page">';
    $config['last_tagl_close']  = '</a>';

    $this->pagination->initialize($config);
    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['penyakits'] = $this->pengetahuan_model->get_knowlage($config["per_page"], $data['page']);
    $data['pagination'] = $this->pagination->create_links();       
    $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_user',$data); 
  }



  public function detail_pengetahuan($id=0){

    $detail_penyakit = $this->db->query("SELECT jenispenyakit.kode,jenispenyakit.jenis_penyakit,jenispenyakit.gambar, solusipenyakit.jenis_solusi FROM jenispenyakit LEFT JOIN solusipenyakit ON 
      jenispenyakit.kode = solusipenyakit.penyakit_kode WHERE jenispenyakit.kode = '".$id."'")->result_array();

    $data = array(
                  'kode_penyakit' => $detail_penyakit[0]['kode'],
                  'jenis_penyakit'=> $detail_penyakit[0]['jenis_penyakit'],
                  'gambar'        => $detail_penyakit[0]['gambar'],
                  'jenis_solusi'  => $detail_penyakit[0]['jenis_solusi'],
                  'gejalas'       => $this->db->query("SELECT informasipenyakit.gejala_kode, gejalapenyakit.nama_gejala FROM informasipenyakit LEFT JOIN gejalapenyakit ON 
                    gejalapenyakit.kode = informasipenyakit.gejala_kode WHERE informasipenyakit.penyakit_kode ='".$id."'")->result_array()
                  );

       $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_detail_pengetahuan',$data);  

  }



}
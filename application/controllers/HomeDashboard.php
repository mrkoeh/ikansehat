<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDashboard extends CI_Controller {
   
   public function __construct(){
    parent::__construct();
	// if (!$this->session->userdata('username'))
	// {
	// 	redirect(base_url());
	// }
  $this->load->model('user_model');
 }

  public function index()
  {
    // $this->load->view('admin/mod_front/home_index');
    $this->template->load('admin/mod_front/home_index','admin/mod_front/home_konten'); 
  }


  public function daftar()
  {
    $this->template->load('admin/mod_front/home_index','admin/mod_front/home_registrasi');
  }



  public function simpan_daftar()
  {
      $data = array(
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'level'     => 'user',
                'alamat'    => $this->input->post('alamat'),
                'username'  => $this->input->post('username'),
                'password'  => md5($this->input->post('password'))
                );
      $this->user_model->simpandata('users',$data);
      $this->session->set_flashdata("k", "<div style='color:red;'><center>Registrasi Pengguna Berhasil, silahkan login untuk mulai konsultasi.</center></div>");
      redirect(''.base_url().'HomeDashboard/daftar');    
  }



  public function login()
  {
    $this->template->load('admin/mod_front/home_index','admin/mod_front/home_login');
  }



  public function user()
  {
    //$this->load->view('admin/mod_front/home_dashboard');
    $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_dashboard_konsultasi'); 
  }



}
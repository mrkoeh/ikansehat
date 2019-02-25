<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
   
   public function __construct(){
    parent::__construct();
   if(!$this->session->userdata('username')){
       redirect(base_url());
    }
   $this->load->model('user_model');
 }

  public function akun()
  {
    $penggunas = $this->db->query("SELECT * FROM users WHERE id = '".$this->session->userdata('id')."'")->result_array();
    $data=array(
          'user_id' => $penggunas[0]['id'],
          'nama'    => $penggunas[0]['nama'],
          'email'   => $penggunas[0]['email'],
          'username'=> $penggunas[0]['username']
                );
    $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_akun',$data); 
    
  }

 
  public function edit_akun()
  {

      $password = $this->input->post('password');
      // jika password tidak diisi
      if(empty($password)){
         $data = array(
                'id'      => $this->input->post('id'),
                'nama'    => $this->input->post('nama'),
                'email'   => $this->input->post('email'),
                'username'=> $this->input->post('username')
                  );     
      }else{
        // jika password diisi
        $data = array(
                'id'      => $this->input->post('id'),
                'nama'    => $this->input->post('nama'),
                'email'   => $this->input->post('email'),
                'username'=> $this->input->post('username'),
                'password'=> md5($this->input->post('password'))
                  );      
      }
      $this->user_model->updateData('users',$data,array('id'=>$this->input->post('id')));
      $this->session->set_flashdata("k", "<div style='color:red;font-weight:bold;'>
               Akun telah di update.
              </div>");
      redirect(''.base_url().'Akun/index');     
  }


}
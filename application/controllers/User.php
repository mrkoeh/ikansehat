<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
   
   public function __construct(){
    parent::__construct();
   // if(!$this->session->userdata('username')){
   //     redirect(base_url());
   //  }
   $this->load->model('user_model');
 }

  public function semua_pengguna()
  {
    $data['penggunas'] = $this->user_model->datapengguna();
    $this->template->load('admin/admin_template','admin/mod_user/semua_user',$data);  
    
  }

  public function tambah_pengguna()
  {
  
    $this->template->load('admin/admin_template','admin/mod_user/tambah_user');
  }

  public function simpan_pengguna()
  {
      $data = array(
                'nama'    => $this->input->post('nama'),
                'email'   => $this->input->post('email'),
                'level'   => $this->input->post('level'),
                'alamat'  => $this->input->post('alamat'),
                'username'=> $this->input->post('username'),
                'password'=> md5($this->input->post('password'))
                );
      $this->user_model->simpandata('users',$data);
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
              </div>");

      redirect(''.base_url().'User/semua_pengguna');     
  }

  public function edit_pengguna($id=0)
  {
    $result = $this->user_model->Get_data_byid('users WHERE id="'.$id.'"')->result_array();
    $data=array(
          'user_id' => $result[0]['id'],
          'nama'    => $result[0]['nama'],
          'email'   => $result[0]['email'],
          'level'   => $result[0]['level'],
          'alamat'  => $result[0]['alamat'],
          'username'=> $result[0]['username']
          );
    $this->template->load('admin/admin_template','admin/mod_user/edit_user',$data);
  }

  public function aksi_editpengguna()
  {

      $password = $this->input->post('password');
      // jika password tidak diisi
      if(empty($password)){
         $data = array(
                'id'      => $this->input->post('user_id'),
                'nama'    => $this->input->post('nama'),
                'email'   => $this->input->post('email'),
                'level'   => $this->input->post('level'),
                'alamat'  => $this->input->post('alamat'),
                'username'=> $this->input->post('username')
                  );     
      }else{
        // jika password diisi
        $data = array(
                'id'      => $this->input->post('user_id'),
                'nama'    => $this->input->post('nama'),
                'email'   => $this->input->post('email'),
                'level'   => $this->input->post('level'),
                'alamat'  => $this->input->post('alamat'),
                'username'=> $this->input->post('username'),
                'password'=> md5($this->input->post('password'))
                  );      
      }
      $this->user_model->updateData('users',$data,array('id'=>$this->input->post('user_id')));
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                    <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
                  </div>");
      redirect(''.base_url().'User/semua_pengguna');     
  }

  public function hapus_pengguna($id){
          $result = $this->user_model->hapusData('users',array('id'=> $id));
          if($result){
          $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Dihapus!<br />
                </div>");
        redirect(''.base_url().'User/semua_pengguna');  
          }else{
            $this->session->set_flashdata("k", "<div class='alert alert-danger'>
                      <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                         Gagal menghapus data !
                    </div>");
        redirect(''.base_url().'User/semua_pengguna');  
          }

        }

}
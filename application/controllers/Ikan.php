<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikan extends CI_Controller {
   
  public function __construct(){
  parent::__construct();
   if(!$this->session->userdata('username')){
       redirect(base_url());
    }
   $this->load->model('ikan_model');
  }

  public function semua_ikan()
  {
    $data['ikans'] = $this->ikan_model->dataikan();
    $this->template->load('admin/admin_template','admin/mod_ikan/semua_ikan',$data);  
  }

  public function tambah_ikan()
  { 
    $this->template->load('admin/admin_template','admin/mod_ikan/tambah_ikan');
  }

  public function simpan_ikan()
  {

     // fungsi untuk upload gambar
      $namafile = "file_".time(); //nama file beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/upload/gambar_ikan/'; //path folder
      $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '3072'; //maksimum besar file 3M
      $config['max_width']  = '5000'; //lebar maksimum 5000 px
      $config['max_height']  = '5000'; //tinggi maksimu 5000 px
      $config['file_name'] = $namafile; //nama yang terupload nantinya
      $this->upload->initialize($config);

      if($_FILES['fupload']['name']){
        if(!$this->upload->do_upload('fupload')){
          $this->session->set_flashdata("k", "<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
              <strong><i class='ace-icon fa fa-times'></i> Gagal !</strong> Gambar Yang Di upload tidak di ijinkan<br />
            </div>");
        redirect(''.base_url().'Ikan/tambah_ikan');
      }else{ 
      $data = array(
                'nama_ikan' => $this->input->post('nama_ikan'),
                'gambar'    => $this->upload->data('file_name'),
                );
      $this->ikan_model->simpandata('ikan',$data);

      $config2['image_library'] = 'gd2'; 
      $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
      $config2['new_image'] = './assets/upload/gambar_ikan/thumbnail/'; // folder tempat menyimpan hasil resize
      //$config2['create_thumb'] = TRUE;
      $config2['maintain_ratio'] = FALSE;
      $config2['width'] = 75; //lebar setelah resize menjadi 100 px
      $config2['height'] = 40; //lebar setelah resize menjadi 100 px
      $this->load->library('image_lib',$config2); 
      $this->image_lib->initialize($config2);
      $this->image_lib->resize();

      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
              </div>");

  redirect(''.base_url().'Ikan/semua_ikan');    
            }
          }else{
      $data = array(
                'nama_ikan' => $this->input->post('nama_ikan')
                );
              $this->ikan_model->simpandata('ikan',$data); 
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
              </div>");

      redirect(''.base_url().'Ikan/semua_ikan');           
          }
      }
  public function edit_ikan($id=0)
  {
    $result = $this->ikan_model->Get_data_byid('ikan WHERE id="'.$id.'"')->result_array();
    $data=array(
          'id'       => $result[0]['id'],
          'nama_ikan'=> $result[0]['nama_ikan'],
          'gambar'   => $result[0]['gambar']
          );
    $this->template->load('admin/admin_template','admin/mod_ikan/edit_ikan',$data);
  }

  public function aksi_edit_ikan()
  {

     // fungsi untuk upload gambar
      $namafile = "file_".time(); //nama file beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/upload/gambar_ikan/'; //path folder
      $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '3072'; //maksimum besar file 3M
      $config['max_width']  = '5000'; //lebar maksimum 5000 px
      $config['max_height']  = '5000'; //tinggi maksimu 5000 px
      $config['file_name'] = $namafile; //nama yang terupload nantinya
      $this->upload->initialize($config);

      if($_FILES['fupload']['name']){
        if(!$this->upload->do_upload('fupload')){
          $this->session->set_flashdata("k", "<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
              <strong><i class='ace-icon fa fa-times'></i> Gagal !</strong> Gambar Yang Di upload tidak di ijinkan<br />
            </div>");
        redirect(''.base_url().'Ikan/semua_ikan');
      }else{ 
         $data = array(
                'id'        => $this->input->post('id'),
                'nama_ikan'=> $this->input->post('nama_ikan'),
                'gambar'    => $this->upload->data('file_name')
                  );     
                  
                  
        $hasil = $this->db->query("select gambar from ikan where id ='".$this->input->post('id')."'")->result();
        foreach ($hasil as $g ){

          @unlink('./assets/upload/gambar_ikan/'.$g->gambar);
          @unlink('./assets/upload/gambar_ikan/thumbnail/'.$g->gambar);
          } 
      $this->ikan_model->updateData('ikan',$data,array('id'=>$this->input->post('id')));


          $config2['image_library'] = 'gd2'; 
          $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
          $config2['new_image'] = './assets/upload/gambar_ikan/thumbnail/'; // folder tempat menyimpan hasil resize
          //$config2['create_thumb'] = TRUE;
          $config2['maintain_ratio'] = FALSE;
          $config2['width'] = 75; //lebar setelah resize menjadi 100 px
          $config2['height'] = 40; //lebar setelah resize menjadi 100 px
          $this->load->library('image_lib',$config2); 
          $this->image_lib->initialize($config2);
          $this->image_lib->resize();

      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                    <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
                  </div>");
      redirect(''.base_url().'Ikan/semua_ikan');  
    }
  }else{
         $data = array(
                'id'        => $this->input->post('id'),
                'nama_ikan'=> $this->input->post('nama_ikan')
                  );     
      $this->ikan_model->updateData('ikan',$data,array('id'=>$this->input->post('id')));      
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                    <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
                  </div>");
      redirect(''.base_url().'Ikan/semua_ikan');   
      
  }
}

  public function hapus_ikan($id){
        $hasil = $this->db->query("select gambar from ikan where id ='".$id."'")->result();
        foreach ($hasil as $g ){

          @unlink('./assets/upload/gambar_ikan/'.$g->gambar);
          @unlink('./assets/upload/gambar_ikan/thumbnail/'.$g->gambar);
          } 
          $result = $this->ikan_model->hapusData('ikan',array('id'=> $id));
          if($result){
          $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Dihapus!<br />
                </div>");
         redirect(''.base_url().'Ikan/semua_ikan'); 
          }else{
            $this->session->set_flashdata("k", "<div class='alert alert-danger'>
                      <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                         Gagal menghapus data !
                    </div>");
         redirect(''.base_url().'Ikan/semua_ikan');  
          }
        }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {
   
  public function __construct(){
  parent::__construct();
   if(!$this->session->userdata('username')){
       redirect(base_url());
    }
   $this->load->model('penyakit_model');
   $this->load->model('gejala_model');
   $this->load->model('kodeunik_model');
  }

  public function semua_penyakit()
  {
    $data['penyakits'] = $this->penyakit_model->penyakit_gejala();
    $this->template->load('admin/admin_template','admin/mod_penyakit/semua_penyakit',$data);  
  }

  public function tambah_penyakit()
  { 
    $data =array(
                'kode'    => $this->kodeunik_model->kode_penyakit(),
                'gejalas' => $this->gejala_model->datagejala()->result_array()
                ); 
    $this->template->load('admin/admin_template','admin/mod_penyakit/tambah_penyakit',$data);
  }

  public function simpan_penyakit()
  {

     // fungsi untuk upload gambar
      $namafile = "file_".time(); //nama file beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/upload/'; //path folder
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
        redirect(''.base_url().'penyakit/tambah_penyakit');
      }else{    
      $data = array(
                'kode'          => $this->input->post('kode'),
                'jenis_penyakit'=> $this->input->post('jenis_penyakit'),
                'gambar'          => $this->upload->data('file_name'),
                'kode_gejala_awal'   => $this->input->post('kode_gejala_awal')
                );
      $simpan = $this->penyakit_model->simpandata('jenispenyakit',$data);
                // untuk mengatur gambar thumbnail 
                $config2['image_library'] = 'gd2'; 
                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config2['new_image'] = './assets/upload/thumbnail/'; // folder tempat menyimpan hasil resize
                //$config2['create_thumb'] = TRUE;
                $config2['maintain_ratio'] = FALSE;
                $config2['width'] = 100; //lebar setelah resize menjadi 100 px
                $config2['height'] = 100; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib',$config2); 
                $this->image_lib->initialize($config2);
                $this->image_lib->resize();
      if($simpan){
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
              </div>");

      redirect(''.base_url().'Penyakit/semua_penyakit');    
            }
          }

      }else{
              $data = array(
                'kode'          => $this->input->post('kode'),
                'jenis_penyakit'=> $this->input->post('jenis_penyakit'),
                'kode_gejala_awal'   => $this->input->post('kode_gejala_awal')
                );
    $simpan = $this->penyakit_model->simpandata('jenispenyakit',$data);
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
              </div>");

      redirect(''.base_url().'Penyakit/semua_penyakit'); 
      }
   
  }

  public function edit_penyakit($id=0)
  {
    // $result = $this->db->query('SELECT * FROM penyakit INNER JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode WHERE penyakit.kode="'.$id.'"')->result_array();
    $results = $this->db->query('SELECT * FROM jenispenyakit WHERE kode="'.$id.'"')->result_array();
    $data=array(
          'kode'          => $results[0]['kode'],
          'jenis_penyakit'=> $results[0]['jenis_penyakit'],
          'kode_gejala_awal'   => $results[0]['kode_gejala_awal'],
          'gambar'        => $results[0]['gambar'],
          'gejalas'       => $this->gejala_model->datagejala()
             );
    $this->template->load('admin/admin_template','admin/mod_penyakit/edit_penyakit',$data);
  }

   public function aksi_edit_penyakit()
  {

     // fungsi untuk upload gambar
      $namafile = "file_".time(); //nama file beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/upload/'; //path folder
      $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '3072'; //maksimum besar file 3M
      $config['max_width']  = '5000'; //lebar maksimum 5000 px
      $config['max_height']  = '5000'; //tinggi maksimu 5000 px
      $config['file_name'] = $namafile; //nama yang terupload nantinya
      $this->upload->initialize($config);

      if($_FILES['fupload']['name']){
      if($this->upload->do_upload('fupload')){
         $data = array(
                'kode'          => $this->input->post('kode'),
                'jenis_penyakit'=> $this->input->post('jenis_penyakit'),
                'gambar'          => $this->upload->data('file_name'),
                'kode_gejala_awal'   => $this->input->post('kode_gejala_awal')
                  );  
        $hasil = $this->db->query("select gambar from jenispenyakit where kode ='".$this->input->post('kode')."'")->result();
        foreach ($hasil as $g ){

          @unlink('./assets/upload/'.$g->gambar);
          @unlink('./assets/upload/thumbnail/'.$g->gambar);
          } 
     // hapus dulu semua data di detail penyakit 
     $delete_detail = $this->db->query("DELETE FROM informasipenyakit WHERE penyakit_kode = '".$this->input->post('kode')."'");  
     $ubah = $this->penyakit_model->updateData('jenispenyakit',$data,array('kode'=>$this->input->post('kode')));
        // untuk mengatur gambar thumbnail 
        $config2['image_library'] = 'gd2'; 
        $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
        $config2['new_image'] = './assets/upload/thumbnail/'; // folder tempat menyimpan hasil resize
        //$config2['create_thumb'] = TRUE;
        $config2['maintain_ratio'] = FALSE;
        $config2['width'] = 100; //lebar setelah resize menjadi 100 px
        $config2['height'] = 100; //lebar setelah resize menjadi 100 px
        $this->load->library('image_lib',$config2); 
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
     if($ubah){
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                    <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
                  </div>");
      redirect(''.base_url().'Penyakit/semua_penyakit'); 
        }
      }
    }else{
         $data = array(
                'kode'          => $this->input->post('kode'),
                'jenis_penyakit'=> $this->input->post('jenis_penyakit'),
                'kode_gejala_awal'   => $this->input->post('kode_gejala_awal')
                  ); 
     $delete_detail = $this->db->query("DELETE FROM informasipenyakit WHERE penyakit_kode = '".$this->input->post('kode')."'");  
     $ubah = $this->penyakit_model->updateData('jenispenyakit',$data,array('kode'=>$this->input->post('kode'))); 
     if($ubah){
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                    <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
                  </div>");
      redirect(''.base_url().'Penyakit/semua_penyakit');       
     }     
    }
  }

  public function hapus_penyakit($id){
      
        $gbr = $this->db->query("select gambar from jenispenyakit where kode ='$id'")->result();
        foreach($gbr as $g){
        // gunakan fungsi unlink untuk menghapus foto atau gambar lama dari direktori
        @unlink('./assets/upload/'.$g->gambar);
        @unlink('./assets/upload/thumbnail/'.$g->gambar);
        }
          $result = $this->penyakit_model->hapusData('jenispenyakit',array('kode'=> $id));
          if($result){
          $delete_detail = $this->db->query("DELETE FROM riwayatkonsultasi WHERE penyakit_kode = '".$id."'");            
          $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Dihapus!<br />
                </div>");
         redirect(''.base_url().'Penyakit/semua_penyakit');   
          }else{
            $this->session->set_flashdata("k", "<div class='alert alert-danger'>
                      <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                         Gagal menghapus data !
                    </div>");
         redirect(''.base_url().'Penyakit/semua_penyakit');  
          }
        }

public function get_detail_penyakit()
 {
        $idpenyakit = $this->input->post('idpenyakit');
        $det = $this->db->query("SELECT *
                                  FROM 
                                  jenispenyakit
                                  WHERE 
                                  kode = '".$this->input->post('idpenyakit')."'");

        // mengambil gejala penyakit
        $details = $this->db->query("SELECT *
                                  FROM 
                                  gejalapenyakit
                                  INNER JOIN informasipenyakit ON gejalapenyakit.kode = informasipenyakit.gejala_kode
                                  WHERE 
                                  informasipenyakit.penyakit_kode = '".$this->input->post('idpenyakit')."'")->result_array();        
            $output = '';
            foreach($det->result_array() as $row){
             $output .= '      
              <div class="box">
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td>Kode Penyakit</td>
                        <td>:</td>
                        <td>'.$row['kode'].'</td>
                      </tr>
                      <tr>
                        <td>Nama Penyakit</td>
                        <td>:</td>
                        <td>'.$row['jenis_penyakit'].'</td>
                      </tr>
                      <tr>
                        <td>Gejala</td>
                        <td>:</td>
                        <td>';
              foreach($details as $d) {
              $output .= '-&nbsp;<b>'.$d['gejala_kode'].'</b> - '.$d['nama_gejala'].'<br>';
              }
              $output .= '</td>
                    </table>
                  </div>
                </div>';
            }  
            echo $output;

 }


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solusi extends CI_Controller {
   
  public function __construct(){
  parent::__construct();
   if(!$this->session->userdata('username')){
       redirect(base_url());
    }
   $this->load->model('solusi_model');
   $this->load->model('penyakit_model');
   $this->load->model('kodeunik_model');
  }

  public function semua_solusi()
  {
    $data['solusis'] = $this->solusi_model->datasolusi();
    $this->template->load('admin/admin_template','admin/mod_solusi/semua_solusi',$data);  
  }

  public function tambah_solusi()
  { 
    $data = array(
                'kode'      => $this->kodeunik_model->kode_solusi(),
                'penyakits' => $this->penyakit_model->datapenyakit()
              );
    $this->template->load('admin/admin_template','admin/mod_solusi/tambah_solusi',$data);
  }

  public function simpan_solusi()
  {
      $data = array(
                'kode'          => $this->input->post('kode'),
                'jenis_solusi'  => $this->input->post('jenis_solusi'),
                'penyakit_kode' => $this->input->post('kode_penyakit')
                );
      $this->solusi_model->simpandata('solusipenyakit',$data);
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
              </div>");

      redirect(''.base_url().'Solusi/semua_solusi');    
  }

  public function edit_solusi($id=0)
  {
    $result = $this->solusi_model->Get_data_byid('solusipenyakit WHERE kode="'.$id.'"')->result_array();
    $data=array(
          'kode'         => $result[0]['kode'],
          'jenis_solusi' => $result[0]['jenis_solusi'],
          'penyakit_kode'=> $result[0]['penyakit_kode'],
          'penyakits'    => $this->penyakit_model->datapenyakit()
          );
    $this->template->load('admin/admin_template','admin/mod_solusi/edit_solusi',$data);
  }

  public function aksi_edit_solusi()
  {
         $data = array(
                'kode'          => $this->input->post('kode'),
                'jenis_solusi'        => $this->input->post('jenis_solusi'),
                'penyakit_kode' => $this->input->post('kode_penyakit')
                  );     
      $this->solusi_model->updateData('solusipenyakit',$data,array('kode'=>$this->input->post('kode')));
      $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                    <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
                  </div>");
      redirect(''.base_url().'Solusi/semua_solusi');  
  }

  public function hapus_solusi($id){
          $result = $this->solusi_model->hapusData('solusipenyakit',array('kode'=> $id));
          if($result){
          $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                  <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Dihapus!<br />
                </div>");
         redirect(''.base_url().'Solusi/semua_solusi');  
          }else{
            $this->session->set_flashdata("k", "<div class='alert alert-danger'>
                      <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                         Gagal menghapus data !
                    </div>");
         redirect(''.base_url().'Solusi/semua_solusi');  
          }
        }

public function get_detail_solusi()
 {
        $idsolusi = $this->input->post('idsolusi');
        $det = $this->db->query("SELECT solusipenyakit.kode AS kode_solusi, solusipenyakit.jenis_solusi AS nama_solusi, penyakit.jenis_penyakit, penyakit.kode AS kode_penyakit
                                  FROM 
                                  solusipenyakit
                                  INNER JOIN penyakit ON penyakit.kode = solusipenyakit.penyakit_kode
                                  WHERE 
                                  solusipenyakit.kode = '".$this->input->post('idsolusi')."'");

            $output = '';
            foreach($det->result_array() as $row){
             $output .= '      
              <div class="box">
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td>Penyakit</td>
                        <td>:</td>
                        <td><b>Kode Penyakit:&nbsp;'.$row['kode_penyakit'].'</b><br>'.$row['jenis_penyakit'].'</td>
                      </tr>
                      <tr>
                        <td>Solusi</td>
                        <td>:</td>
                        <td><b>Kode Solusi:&nbsp;'.$row['kode_solusi'].'</b><br>'.$row['nama_solusi'].'</td>
                      </tr>
                    </table>
                  </div>
                </div>';
            }  
            echo $output;

 }


}
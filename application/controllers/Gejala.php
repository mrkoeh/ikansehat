<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect(base_url());
        }
        $this->load->model('penyakit_model');
        $this->load->model('gejala_model');
        $this->load->model('kodeunik_model');
        $this->load->model('ikan_model');
        $this->load->model('solusi_model');
    }

    public function semua_gejala()
    {
        $data['gejalas'] = $this->gejala_model->datagejala();
        $this->template->load('admin/admin_template','admin/mod_gejala/semua_gejala',$data);  
    }

    public function tambah_gejala()
    { 
        $data = array(
            'kode'  => $this->kodeunik_model->kode_gejala(),
            'ikans' => $this->ikan_model->dataikan(),
            'penyakits' => $this->penyakit_model->datapenyakit(),
            'gejalas' => $this->gejala_model->datagejala(),
            'solusis' => $this->solusi_model->datasolusi()
        );
        $this->template->load('admin/admin_template','admin/mod_gejala/tambah_gejala',$data);
    }

    public function simpan_gejala()
    {
        $data = array(
            'kode'       => $this->input->post('kode'),
            'nama_gejala'=> $this->input->post('nama_gejala'),
            'ya' => $this->input->post('ya'),
            'tidak' => $this->input->post('tidak'),
            'penyakit_kode' => $this->input->post('penyakit_kode'),
            'ikan_id'=> implode(',',$this->input->post('ikan_id'))
        );
        //var_dump($data); exit;
        $this->gejala_model->simpandata('gejalapenyakit',$data);
        $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
        <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
        <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
        </div>");

        redirect(''.base_url().'Gejala/semua_gejala');    
    }

    public function edit_gejala($id=0)
    {
        $result = $this->gejala_model->Get_data_byid('gejalapenyakit WHERE kode="'.$id.'"')->result_array();
        $data=array(
            'kode' => $result[0]['kode'],
            'nama_gejala'=> $result[0]['nama_gejala'],
            'ikan_id'=> $result[0]['ikan_id'],
            'ya' => $result[0]['ya'],
            'tidak' => $result[0]['tidak'],
            'penyakit_kode' => $result[0]['penyakit_kode'],
            'ikans' => $this->ikan_model->dataikan(),
            'penyakits' => $this->penyakit_model->datapenyakit(),
            'gejalas' => $this->gejala_model->datagejala(),
            'solusis' => $this->solusi_model->datasolusi()
        );
        $this->template->load('admin/admin_template','admin/mod_gejala/edit_gejala',$data);
    }

    public function aksi_edit_gejala()
    {
        $data = array(
            'kode'       => $this->input->post('kode'),
            'nama_gejala'=> $this->input->post('nama_gejala'),
            'ya' => $this->input->post('ya'),
            'tidak' => $this->input->post('tidak'),
            'penyakit_kode' => $this->input->post('penyakit_kode'),
            'ikan_id'=> implode(',',$this->input->post('ikan_id'))
        );     
        $this->gejala_model->updateData('gejalapenyakit',$data,array('kode'=>$this->input->post('kode')));
        $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
        <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
        <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Disimpan!<br />
        </div>");

        redirect(''.base_url().'Gejala/semua_gejala');  
    }

    public function hapus_gejala($id){
        $result = $this->gejala_model->hapusData('gejalapenyakit',array('kode'=> $id));
        if($result){
            $this->session->set_flashdata("k", "<div class='alert alert-block alert-success'>
            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
            <strong><i class='ace-icon fa fa-check'></i> Berhasil !</strong> Data Berhasil Dihapus!<br />
            </div>");
            redirect(''.base_url().'Gejala/semua_gejala');  
        }else{
            $this->session->set_flashdata("k", "<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
            Gagal menghapus data !
            </div>");
            redirect(''.base_url().'Gejala/semua_gejala');  
        }
    }

}
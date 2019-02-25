<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username') && !$this->session->userdata('level') == 'user') {
            echo "<script>alert('Silahkan login terlebih dahulu !!')
            window.location.href='".base_url()."'</script>";
        }
        $this->load->model('gejala_model');
        $this->load->model('ikan_model');
    }

    public function konsultasi()
    {
        $data['ikans']  = $this->ikan_model->dataikan();
        $data['gejalas'] = $this->gejala_model->get_konsule();

        $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_dashboard_konsultasi', $data); 
    }

    public function gejalaPenyakit()
    {
        $ikan = $this->input->get('ikan');
        $gejalas = $this->db->query("SELECT gejalapenyakit.*, ikan.*
            FROM gejalapenyakit
            LEFT JOIN ikan ON ikan.id = gejalapenyakit.ikan_id
            WHERE gejalapenyakit.ikan_id LIKE '".$this->input->get('ikan')."%'
            ORDER BY gejalapenyakit.kode ASC 
            LIMIT 1");

        $output = '';
        $no = 1;
        foreach($gejalas->result_array() as $row){
        $output .='<table class="table-list" border="0" cellspacing="1" cellpadding="4" width="900px" align="center">
                      <tr>
                        <td width="1172" bgcolor="#CCCCCC" colspan="6"><b>Pertanyaan Gejala </b></td>
                      </tr>
                      <tr bgcolor="">
                        <td colspan="6">Nama Ikan : <b>'.$row['nama_ikan'].'</b></td>
                      </tr>
                      <tr bgcolor="">
                        <td colspan="6">Apakah ikan anda mengalami gejala  <b>'.$row['nama_gejala'].'</b> ?</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td bgcolor="#00CC00" width="50px">
                            <i class="ace-icon fa fa-check bigger-110 green"></i> <a href="pertanyaan/'.$row['ya'].'">Ya</a>
                        </td>
                        <td bgcolor="#FF0000" width="50px">
                            <i class="ace-icon fa fa-check bigger-110 green"></i> <a href="pertanyaan/'.$row['tidak'].'">Tidak</a>
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                    </table>';    
        }
        echo $output;
    }


    public function pertanyaan($id=0)
    {
        if($id[0]=='G'){
            // $data['gejalas'] = $this->db->query("SELECT * FROM gejala where id='".$id."'")->result_array();
            $result = $this->gejala_model->Get_data_byid('gejalapenyakit WHERE kode="'.$id.'"');
            $cek = $result->num_rows();
            if($cek > 0){
                $res = $result->result_array();
                $data=array(
                'id_gejala'     => $res[0]['kode'],
                'jenis_gejala'  => $res[0]['nama_gejala'],
                'ya'            => $res[0]['ya'],
                'tidak'         => $res[0]['tidak'],
                'penyakit_id'   => $res[0]['penyakit_kode']
                );

                // INSERT GEJALA
                //$sql2 = $this->db->query("INSERT INTO riwayatkonsultasi (konsultasi_id,gejala_kode) VALUES ('".$insert_id."','".$id."')");

                $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_dashboard_konsultasi_lanjut', $data);
            }
            else{
                $this->session->set_flashdata("g", "<div class='alert alert-block alert-danger'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                <strong><i class='ace-icon fa fa-check'></i>  Tidak ada diagnosa selanjutnya. </strong> 
                </div>");
                redirect(''.base_url().'penyakit/daftar_penyakit');
            }
        }
        else if($id[0]=='S')
        {

            $get_detail = $this->db->query("SELECT * 
                FROM solusipenyakit 
                LEFT JOIN jenispenyakit ON jenispenyakit.kode = solusipenyakit.penyakit_kode
                LEFT JOIN users ON users.id = '".$this->session->userdata('id')."'
                LEFT JOIN konsultasi ON konsultasi.user_id = users.id
                WHERE solusipenyakit.kode = '".$id."'");
            $cek = $get_detail->num_rows();
            if($cek > 0){
                $res = $get_detail->result_array();

                 // INSERT HISTORY
                $sql = $this->db->query("INSERT INTO konsultasi (tanggal_konsultasi,ikan_id,user_id,penyakit_kode) 
                VALUES ('".date('Y-m-d')."',
                    '".$this->input->post('id_ikan')."',
                    '".$this->session->userdata('id')."',
                    '".$res[0]['penyakit_kode']."')");

                $data = array(
                    'id'           => $res[0]['id'],
                    //'nama_ikan'    => $res[0]['nama_ikan'],
                    'tgl_konsul'   => date('Y-m-d'),
                    'nama_user'    => $res[0]['nama'],
                    'alamat_user'  => $res[0]['alamat'],
                    'kode_penyakit'=> $res[0]['penyakit_kode'],
                    'nama_penyakit'=> $res[0]['jenis_penyakit'],
                    'gejalas'      => $this->db->query("SELECT gejalapenyakit.* 
                            FROM gejalapenyakit 
                            WHERE gejalapenyakit.ya = '".$id."'")->result_array(),

                    'solusi_penyakit' => $this->db->query("SELECT solusipenyakit.jenis_solusi FROM solusipenyakit 
                            LEFT JOIN konsultasi ON  konsultasi.penyakit_kode = solusipenyakit.penyakit_kode
                            WHERE solusipenyakit.kode = '".$id."' LIMIT 1")->result_array()
                );

                $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_detail', $data);
            }
            else
            {
                echo "else"; exit;
                $this->session->set_flashdata("g", "<div class='alert alert-block alert-danger'>
                <button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button>
                <strong><i class='ace-icon fa fa-check'></i>  Solusi tidak ditemukan. </strong> 
                </div>");
                redirect(''.base_url().'penyakit/daftar_penyakit');
            }
            
        }else{

            $get_detail = $this->db->query("SELECT * 
                FROM solusipenyakit 
                LEFT JOIN jenispenyakit ON jenispenyakit.kode = solusipenyakit.penyakit_kode
                LEFT JOIN users ON users.id = '".$this->session->userdata('id')."'");
            $cek = $get_detail->num_rows();
            $res = $get_detail->result_array();

            $data = array(
                'id'           => $res[0]['id'],
                //'nama_ikan'    => $res[0]['nama_ikan'],
                'tgl_konsul'   => date('Y-m-d'),
                'nama_user'    => $res[0]['nama'],
                'alamat_user'  => $res[0]['alamat'],
                'kode_penyakit'=> $res[0]['penyakit_kode'],
                'nama_penyakit'=> $res[0]['jenis_penyakit'],
                'hasil'        => 'Hasil kesimpulan diagnosa, ikan anda kemungkinan baik-baik saja karena tidak ada gejala yang ikan anda alami.'
            );
            $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/home_detail_kosong', $data);
        }

    }

    public function cetak($id=0)
    {
        $this->load->library('Pdf');
        $headers =$this->db->query("SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,jenispenyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
            INNER JOIN users ON users.id = konsultasi.user_id
            INNER JOIN jenispenyakit ON jenispenyakit.kode = konsultasi.penyakit_kode
            LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
            WHERE konsultasi.id = '".$id."'")->result_array();

        $data = array(
            'nomor_konsul'  => $headers[0]['id'],
            'tgl_konsul'    => $headers[0]['tanggal_konsultasi'],
            'nama_ikan'     => $headers[0]['nama_ikan'],
            'nama_user'     => $headers[0]['nama'],
            'alamat_user'   => $headers[0]['alamat'],
            'kode_penyakit' => $headers[0]['penyakit_kode'],
            'nama_penyakit' => $headers[0]['jenis_penyakit']
        );


        $data['gejalas'] = $this->db->query("SELECT * 
                                        FROM jenispenyakit
                                        JOIN gejalapenyakit ON gejalapenyakit.penyakit_kode = jenispenyakit.kode
                                        JOIN konsultasi ON konsultasi.penyakit_kode = jenispenyakit.kode
                                        WHERE konsultasi.id = '".$id."'")->result_array();

        $data['solusi_penyakit'] = $this->db->query("SELECT solusipenyakit.jenis_solusi FROM solusipenyakit 
            INNER JOIN konsultasi ON  konsultasi.penyakit_kode = solusipenyakit.penyakit_kode
            WHERE konsultasi.id = '".$id."'")->result_array();

        $this->load->view('admin/cetak_konsultasi',$data);
    }

    public function riwayat()
    {
        $data['riwayat'] = $this->db->query("SELECT konsultasi.id,konsultasi.tanggal_konsultasi,ikan.nama_ikan,jenispenyakit.jenis_penyakit FROM konsultasi 
            LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
            LEFT JOIN jenispenyakit ON jenispenyakit.kode = konsultasi.penyakit_kode
            WHERE konsultasi.user_id = '".$this->session->userdata('id')."'")->result_array();
        $this->template->load('admin/mod_front/home_dashboard','admin/mod_front/riwayat_konsultasi',$data);
    }
}

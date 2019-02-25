<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
   
  public function __construct(){
  parent::__construct();
   if(!$this->session->userdata('username')){
       redirect(base_url());
    }
   $this->load->model('gejala_model');
   $this->load->model('penyakit_model');
   $this->load->model('user_model');
   $this->load->model('solusi_model');
  }

  public function index()
  {


    $data['reports'] = $this->db->query("SELECT konsultasi.id, konsultasi.tanggal_konsultasi,users.nama,ikan.nama_ikan,jenispenyakit.jenis_penyakit FROM konsultasi
                                          LEFT JOIN users ON users.id = konsultasi.user_id
                                          LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                          LEFT JOIN jenispenyakit ON jenispenyakit.kode = konsultasi.penyakit_kode
                                        ")->result_array();
    $this->template->load('admin/admin_template','admin/mod_laporan/laporan_konsultasi',$data);  
  }



  public function detail()
  {
        $idkonsultasi = $this->input->post('idkonsultasi');
        $det = $this->db->query("SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,jenispenyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
                                    INNER JOIN users ON users.id = konsultasi.user_id
                                    INNER JOIN jenispenyakit ON jenispenyakit.kode = konsultasi.penyakit_kode
                                    LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                    WHERE konsultasi.id =  '".$this->input->post('idkonsultasi')."'");

        // mengambil gejala penyakit
        $details = $this->db->query("SELECT riwayatkonsultasi.gejala_kode,gejalapenyakit.nama_gejala FROM riwayatkonsultasi INNER JOIN gejalapenyakit ON gejalapenyakit.kode = riwayatkonsultasi.gejala_kode WHERE riwayatkonsultasi.konsultasi_id = '".$this->input->post('idkonsultasi')."'")->result_array();   


        // ambil solusi penyakit
        $solusi = $this->db->query("SELECT solusipenyakit.jenis_solusi FROM solusipenyakit 
                                  INNER JOIN konsultasi ON  konsultasi.penyakit_kode = solusipenyakit.penyakit_kode
                                  WHERE konsultasi.id = '".$this->input->post('idkonsultasi')."'");

            $output = '';
            foreach($det->result_array() as $row){
             $output .= '      
              <div class="box">
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td>Tgl. Konsultasi</td>
                        <td>:</td>
                        <td>'.$row['tanggal_konsultasi'].'</td>
                      </tr>
                      <tr>
                        <td>Nama Pasien</td>
                        <td>:</td>
                        <td>'.$row['nama'].'</td>
                      </tr>
                      <tr>
                        <td>Alamat Pasien</td>
                        <td>:</td>
                        <td>'.$row['alamat'].'</td>
                      </tr>
                      <tr>
                        <td>Jenis Ikan</td>
                        <td>:</td>
                        <td>'.$row['nama_ikan'].'</td>
                      </tr>
                      <tr>
                        <td>Penyakit</td>
                        <td>:</td>
                        <td>'.$row['jenis_penyakit'].' <br><b>Kode Penyakit:&nbsp;&nbsp;'.$row['penyakit_kode'].'</b></td>
                      </tr>
                      <tr>
                        <td>Gejala Yang dilihat</td>
                        <td>:</td>
                        <td>';
              foreach($details as $d) {
              $output .= '-&nbsp;<b>'.$d['gejala_kode'].'</b> - '.$d['nama_gejala'].'<br>';
              }
              $output .= '</td>
                      </tr>
                      <tr>
                        <td>Solusi Penyakit</td>
                        <td>:</td>
                        <td>';
              foreach($solusi->result_array() as $s){
                $output .= ''.$s['jenis_solusi'].'';
              }
               $output .= '</td>
                      </tr>      
                    </table>
                  </div>
                </div>';
            }  
            echo $output;
  }



  public function cetak($id=0)
  {
    $this->load->library('Pdf');
    $headers =$this->db->query("SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,jenispenyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
                                    LEFT JOIN users ON users.id = konsultasi.user_id
                                    LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                    LEFT JOIN jenispenyakit ON jenispenyakit.kode = konsultasi.penyakit_kode
                                    WHERE konsultasi.id = '".$id."'")->result_array();

    $data = array(
                  'nomor_konsul' => $headers[0]['id'],
                  'tgl_konsul'   => $headers[0]['tanggal_konsultasi'],
                  'nama_ikan'    => $headers[0]['nama_ikan'],
                  'nama_user'    => $headers[0]['nama'],
                  'alamat_user'  => $headers[0]['alamat'],
                  'kode_penyakit'=> $headers[0]['penyakit_kode'],
                  'nama_penyakit'=> $headers[0]['jenis_penyakit']
                  );


    $data['gejalas'] = $this->db->query("SELECT riwayatkonsultasi.gejala_kode,gejalapenyakit.nama_gejala 
                FROM riwayatkonsultasi 
                INNER JOIN gejalapenyakit ON gejalapenyakit.kode = riwayatkonsultasi.gejala_kode 
                WHERE riwayatkonsultasi.konsultasi_id = '".$id."'")->result_array();
    $data['solusi_penyakit'] = $this->db->query("SELECT solusipenyakit.jenis_solusi FROM solusipenyakit 
                                  INNER JOIN konsultasi ON  konsultasi.penyakit_kode = solusipenyakit.penyakit_kode
                                  WHERE konsultasi.id = '".$id."'")->result_array();

    $this->load->view('admin/cetak_konsultasi',$data);
  }
 

}
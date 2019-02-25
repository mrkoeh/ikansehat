<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_login extends CI_Controller {
   
	public function index()

	{

			$data=array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
						);
			$hasil = $this->login_model->ambiluser($data);
			
			if($hasil->num_rows() == 1){
				foreach($hasil->result() as $sess){
					$sess_data['logged_in']	='sudah login';
					$sess_data['username'] 	= $sess->username;
					$sess_data['level'] 	= $sess->level;
					$sess_data['nama']		= $sess->nama;
					$sess_data['email'] 	= $sess->email;
					$sess_data['alamat'] 	= $sess->alamat;
					$sess_data['id'] 		= $sess->id;
					$this->session->set_userdata($sess_data);
				}
				if($this->session->userdata('level') == 'admin'){
				redirect(''.base_url().'dashboard/index');
				}
				elseif($this->session->userdata('level') == 'user'){
					redirect(''.base_url().'UserDashboard/penyakit');
				}
			}else{

				echo "<script>alert('Gagal login: Silahkan cek username dan password anda, atau anda sedang di blokir');
				history.go(-1);
				</script>";
				}

		}

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect(base_url());
  }

}
